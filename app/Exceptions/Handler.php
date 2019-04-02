<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Intervention\Image\Exception\NotReadableException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Exceptions\Backend\Access\User\UserNeedsRolesException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

/**
 * Class Handler
 * @package App\Exceptions
 */
class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
        TokenMismatchException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception $e
     * @return void
     */
    public function report(Exception $e)
    {
        parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Exception               $e
     * @return \Illuminate\Http\RedirectResponse
     */
    public function render($request, Exception $e)
    {
        /**
         * Redirect if token mismatch error
         * Usually because user stayed on the same screen too long and their session expired
         */
        if ($e instanceof TokenMismatchException) {
            alert()->info('您的会话已超时(10分钟)，请重新提交','会话超时')->persistent('关闭');
            return redirect()->back()->withInput();
        }

        /**
         * All instances of GeneralException redirect back with a flash message to show a bootstrap alert-error
         */
        if ($e instanceof GeneralException) {
            return redirect()->back()->withInput()->withFlashDanger($e->getMessage());
        }

        /**
         * User needs roles and none were selected
         */
        if ($e instanceof UserNeedsRolesException) {
            return redirect()->route('admin.access.user.edit', $e->userID())->withInput()->withFlashDanger($e->validationErrors());
        }
        /**
         * 图片
         */
        if ($e instanceof NotReadableException) {
            alert()->error("请上传 jpg 或 png 格式图片","无法识别的图片类型")->persistent('关闭');
            return redirect()->back()->withInput();
        }

        return parent::render($request, $e);
    }
}
