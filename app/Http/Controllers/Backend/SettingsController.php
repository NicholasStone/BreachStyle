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

    public function __construct()
    {
        $this->storagePath = storage_path() . '/app/public/';
    }

    public function index()
    {
        $count = Slider::count();
        $map = Setting::find(4);

        return view('backend.settings', compact("count", "map"));
    }

    public function applies(Request $request)
    {
        $this->validate($request, [
            'enroll'       => 'url',
            'notice'       => 'url',
            'verification' => 'image'
        ]);

        if ($val = $request->get('enroll')) {
            $enroll = Setting::find(1);
            $enroll->value = $val;
            $enroll->save();
        }

        if ($val = $request->get('notice')) {
            $notice = Setting::find(2);
            $notice->value = $request->get('applies');
            $notice->save();
        }
        if ($val = $request->file('verification')) {
            $verification = Setting::find(3);
            $path = $this->saveImage($val, 'Frontend/Index');
            $verification->value = $path;
            $verification->save();
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

    public function map(Request $request)
    {
        $map = Setting::find(4);
        $map->value = $request->get('state')== "true" ? 1 : 0;
        $map->save();
    }

    public function delete($id)
    {
        Slider::find($id)->delete();

        return redirect()->back()->withFlashSuccess("删除成功");
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'img' => 'required'
        ]);
        $photo = $request->file('img');
        $manager = new ImageManager();
        $filename = md5_file($photo->getRealPath());
        $image = $manager->make($photo)->encode('jpg')->save($this->storagePath . $filename);

        if (!$image) {

            return response()->json([
                'status'  => 'error',
                'message' => '图片上传失败',
            ], 500);

        }
        \Session::set('filename', \Storage::url($filename));

        return response()->json([
            'status' => 'success',
            'url'    => \Storage::url($filename),
            'width'  => $image->width(),
            'height' => $image->height()
        ], 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'link' => 'required|url'
        ], [
            'link.url' => '您输入的链接无效（请检查是否带有 http:// 或 https://）'
        ]);

        $slider = new Slider();
        $slider->link = $request->get('link');
        $slider->path = \Session::pull('filename');
        $slider->save();

        return redirect()->back()->withFlashSuccess('保存成功');
    }

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
        $filename = $filename_array[sizeof($filename_array) - 1];

        $manager = new ImageManager();
        $image = $manager->make($this->storagePath . $filename);
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
        \Session::set('filename', \Storage::url('cropped-' . $filename));

        return response()->json([
            'status' => 'success',
            'url'    => \Storage::url('cropped-' . $filename),
        ], 200);
    }
}
