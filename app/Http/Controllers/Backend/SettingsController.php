<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Common\FileStorage;
use App\Models\Settings\Setting;
use App\Models\Settings\Slider;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;

class SettingsController extends Controller
{
    use FileStorage;

    protected $filePath = '';

    protected $storagePath = '';

    protected $uploadDir = '/uploadImages/';

    public function __construct()
    {
        $this->storagePath = public_path() . $this->uploadDir;
    }

    /**
     * 设置首页
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $count      = Slider::count();
        $map        = Setting::find(4);
        $exhibition = Setting::find(3);
        $slider     = Setting::find(5);

        return view('backend.settings', compact("count", "map", "exhibition", "slider"));
    }

    /**
     * 首页报名表及活动通知下载链接
     *
     * @param Request $request
     * @return mixed
     */
    public function applies(Request $request)
    {
        $this->validate($request, [
            'enroll' => 'url',
            'notice' => 'url',
        ]);

        if ($val = $request->get('enroll')) {
            $enroll        = Setting::find(1);
            $enroll->value = $val;
            $enroll->save();
        }

        if ($val = $request->get('notice')) {
            $notice        = Setting::find(2);
            $notice->value = $request->get('applies');
            $notice->save();
        }

        return redirect()->back()->withFlashSuccess("修改成功");
    }

    public function get()
    {
        return Datatables::of(Slider::all())
            ->addColumn('operations', function ($slide) {
                return '<a href="' . route('admin.setting.delete', $slide->id) . '" class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.detail') . '"></i></a> ';
            })
            ->make(true);
    }

    /**
     * 热度图控制器
     */
    public function map()
    {
        $this->Control(4);
    }

    /**
     * 首页展示控制器
     */
    public function exhibition()
    {
        $this->Control(3);
    }

    /**
     * 移动端焦点图控制器
     */
    public function slider()
    {
        $this->Control(5);
    }

    /**
     * 删除焦点图
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        Slider::find($id)->delete();

        return redirect()->back()->withFlashSuccess("删除成功");
    }

    /**
     * 上传焦点图
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'img' => 'required',
        ]);
        $photo    = $request->file('img');
        $filename = md5_file($photo->getRealPath()) . $photo->getClientOriginalExtension();
        $path     = $this->storagePath . $filename;
        $url      = $this->uploadDir . $filename;
        $manager  = new ImageManager();
        $image    = $manager->make($photo)->encode('jpg')->save($path);

        if (!$image) {

            return response()->json([
                'status'  => 'error',
                'message' => '图片上传失败',
            ], 500);

        }
        \Session::set('filename', $url);

        return response()->json([
            'status' => 'success',
            'url'    => url($url),
            'width'  => $image->width(),
            'height' => $image->height(),
        ], 200);
    }

    /**
     * 保存焦点图
     *
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'link' => 'required|url',
        ], [
            'link.url' => '您输入的链接无效（请检查是否带有 http:// 或 https://）',
        ]);

        $slider       = new Slider();
        $slider->link = $request->get('link');
        $slider->path = \Session::pull('filename');
        $slider->save();

        return redirect()->back()->withFlashSuccess('保存成功');
    }

    /**
     * 裁剪焦点图
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function crop(Request $request)
    {
        $form_data = $request->all();
        $image_url = $form_data['imgUrl'];

        // resized sizes
        $imgW = $form_data['imgW'];
        $imgH = $form_data['imgH'];
        // offsets
        $imgY1 = $form_data['imgY1'];
        $imgX1 = $form_data['imgX1'];
        // crop box
        $cropW = $form_data['width'];
        $cropH = $form_data['height'];
        // rotation angle
        $angle = $form_data['rotation'];

        $filename_array = explode('/', $image_url);
        $filename       = $filename_array[ sizeof($filename_array) - 1 ];

        $manager = new ImageManager();
        $image   = $manager->make($this->storagePath . $filename);
        $image->resize($imgW, $imgH)
            ->rotate(-$angle)
            ->crop($cropW, $cropH, $imgX1, $imgY1)
            ->save($this->storagePath . 'cropped-' . $filename);

        if (!$image) {

            return response()->json([
                'status'  => 'error',
                'message' => '文件上传失败',
            ], 200);

        }
        \Session::set('filename', $this->uploadDir . 'cropped-' . $filename);

        return response()->json([
            'status' => 'success',
            'url'    => $this->uploadDir . 'cropped-' . $filename,
        ], 200);
    }

    /**
     * 各种控制器的方法
     * @param $id
     */
    protected function Control($id)
    {
        $item        = Setting::find($id);
        $item->value = !$item->value;
        $item->save();
    }
}
