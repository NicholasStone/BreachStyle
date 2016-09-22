<?php

namespace App\Http\Controllers\Backend;

use App\Models\Province;
use App\Models\University;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UniversityController extends Controller
{
    public function index()
    {
        $provinces = Province::all();
        return view('backend.university', compact("provinces"));
    }

    public function get()
    {
        return Datatables::of(University::with('province')->get())
            ->addColumn('operations', function ($university) {
                return '<a href="' . route('admin.university.delete', $university->id) . '" class="btn btn-xs btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.detail') . '"></i></a> ';
            })
            ->make(true);
    }

    public function delete($id)
    {
        University::find($id)->delete();

        return redirect()->back()->withFlashSuccess("删除成功");
    }

    protected function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'province' => 'required|exists:provinces,id'
        ]);

        University::create([
            'name' => $request->get('name'),
            'province_id' => $request->get('province')
        ]);

        return redirect()->back()->withFlushSuccess("操作成功");
    }
}
