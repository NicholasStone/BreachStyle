<?php

namespace App\Http\Controllers\Backend\Access\User;

use Carbon\Carbon;
use App\Models\Access\User\User;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\Datatables\Facades\Datatables;
use App\Http\Requests\Backend\Access\User\StoreUserRequest;
use App\Http\Requests\Backend\Access\User\ManageUserRequest;
use App\Http\Requests\Backend\Access\User\UpdateUserRequest;
use App\Repositories\Backend\Access\User\UserRepositoryContract;
use App\Repositories\Backend\Access\Role\RoleRepositoryContract;
use App\Http\Requests\Backend\Access\User\UpdateUserPasswordRequest;
use App\Repositories\Frontend\Access\User\UserRepositoryContract as FrontendUserRepositoryContract;

/**
 * Class UserController
 */
class UserController extends Controller
{
    /**
     * @var UserRepositoryContract
     */
    protected $users;

    /**
     * @var RoleRepositoryContract
     */
    protected $roles;

    /**
     * @param UserRepositoryContract $users
     * @param RoleRepositoryContract $roles
     */
    public function __construct(UserRepositoryContract $users, RoleRepositoryContract $roles)
    {
        $this->users = $users;
        $this->roles = $roles;
    }

    /**
     * @param ManageUserRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManageUserRequest $request)
    {
        return view('backend.access.index');
    }

    /**
     * @param ManageUserRequest $request
     * @return mixed
     */
    public function get(ManageUserRequest $request)
    {
        return Datatables::of($this->users->getForDataTable($request->get('status'), $request->get('trashed')))
            ->editColumn('confirmed', function ($user) {
                return $user->confirmed_label;
            })
            ->addColumn('roles', function ($user) {
                $roles = [];

                if ($user->roles()->count() > 0) {
                    foreach ($user->roles as $role) {
                        array_push($roles, $role->name);
                    }

                    return implode("<br/>", $roles);
                } else {
                    return trans('labels.general.none');
                }
            })
            ->addColumn('actions', function ($user) {
                return $user->action_buttons;
            })
            ->make(true);
    }

    /**
     * @param ManageUserRequest $request
     * @return mixed
     */
    public function create(ManageUserRequest $request)
    {
        return view('backend.access.create')
            ->withRoles($this->roles->getAllRoles('sort', 'asc', true));
    }

    /**
     * @param StoreUserRequest $request
     * @return mixed
     */
    public function store(StoreUserRequest $request)
    {
        $this->users->create(
            $request->except('assignees_roles'),
            $request->only('assignees_roles')
        );

        return redirect()->route('admin.access.user.index')->withFlashSuccess(trans('alerts.backend.users.created'));
    }

    /**
     * @param User              $user
     * @param ManageUserRequest $request
     * @return mixed
     */
    public function edit(User $user, ManageUserRequest $request)
    {
        return view('backend.access.edit')
            ->withUser($user)
            ->withUserRoles($user->roles->lists('id')->all())
            ->withRoles($this->roles->getAllRoles('sort', 'asc', true));
    }

    /**
     * @param User              $user
     * @param UpdateUserRequest $request
     * @return mixed
     */
    public function update(User $user, UpdateUserRequest $request)
    {
        $this->users->update($user,
            $request->except('assignees_roles'),
            $request->only('assignees_roles')
        );

        return redirect()->route('admin.access.user.index')->withFlashSuccess(trans('alerts.backend.users.updated'));
    }

    /**
     * @param User              $user
     * @param ManageUserRequest $request
     * @return mixed
     */
    public function destroy(User $user, ManageUserRequest $request)
    {
        $this->users->destroy($user);

        return redirect()->back()->withFlashSuccess(trans('alerts.backend.users.deleted'));
    }

    /**
     * @param User              $user
     * @param ManageUserRequest $request
     * @return mixed
     */
    public function delete(User $user, ManageUserRequest $request)
    {
        $this->users->delete($user);

        return redirect()->back()->withFlashSuccess(trans('alerts.backend.users.deleted_permanently'));
    }

    /**
     * @param User              $user
     * @param ManageUserRequest $request
     * @return mixed
     */
    public function restore(User $user, ManageUserRequest $request)
    {
        $this->users->restore($user);

        return redirect()->back()->withFlashSuccess(trans('alerts.backend.users.restored'));
    }

    /**
     * @param User              $user
     * @param                   $status
     * @param ManageUserRequest $request
     * @return mixed
     */
    public function mark(User $user, $status, ManageUserRequest $request)
    {
        $this->users->mark($user, $status);

        return redirect()->back()->withFlashSuccess(trans('alerts.backend.users.updated'));
    }

    /**
     * @param ManageUserRequest $request
     * @return mixed
     */
    public function deactivated(ManageUserRequest $request)
    {
        return view('backend.access.deactivated');
    }

    /**
     * @param ManageUserRequest $request
     * @return mixed
     */
    public function deleted(ManageUserRequest $request)
    {
        return view('backend.access.deleted');
    }

    /**
     * @param User              $user
     * @param ManageUserRequest $request
     * @return mixed
     */
    public function changePassword(User $user, ManageUserRequest $request)
    {
        return view('backend.access.change-password')
            ->withUser($user);
    }

    /**
     * @param User                      $user
     * @param UpdateUserPasswordRequest $request
     * @return mixed
     */
    public function updatePassword(User $user, UpdateUserPasswordRequest $request)
    {
        $this->users->updatePassword($user, $request->all());

        return redirect()->route('admin.access.user.index')->withFlashSuccess(trans('alerts.backend.users.updated_password'));
    }

    /**
     * @param User                           $user
     * @param FrontendUserRepositoryContract $user_repository
     * @param ManageUserRequest              $request
     * @return mixed
     */
    public function resendConfirmationEmail(User $user, FrontendUserRepositoryContract $user_repository, ManageUserRequest $request)
    {
        $user_repository->sendConfirmationEmail($user);

        return redirect()->back()->withFlashSuccess(trans('alerts.backend.users.confirmation_email'));
    }

    /**
     * @param User              $user
     * @param ManageUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginAs(User $user, ManageUserRequest $request)
    {
        return $this->users->loginAs($user);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logoutAs()
    {
        return $this->users->logoutAs();
    }

    public function excel()
    {
        Excel::create("用户列表-截止于" . Carbon::now('Asia/Shanghai'), function ($excel) {
            $excel->sheet('用户列表', function ($sheet) {
                $data = $this->getExcelData();
                $sheet->with($data);
            });
        })->download('xlsx');
    }

    protected function getExcelData()
    {
        $users = User::where('id', '>', 3)->with(['branch' => function ($query) {
            $query->select(['id', 'name']);
        }])->select([
            'name', 'user_id', 'type', 'university', 'email', 'tel_work', 'tel', 'branch_id', 'province', 'city', 'created_at',
        ])->get();
        $data  = [];
        foreach ($users as $index => $user) {
            array_push($data, [
                '#'       => $index + 1,
                '姓名'      => $user->name,
                '大学生在线ID' => $user->user_id,
                '类型'      => $user->type,
                '省'       => $user->province,
                '市'       => $user->city,
                '学校'      => $user->university,
                'E-mail'  => $user->email,
                '电话'      => $user->tel,
                '工作电话'    => $user->tel_work,
                '所在支部名称'  => $user->branch->name,
            ]);
        }

        return $data;
    }
}