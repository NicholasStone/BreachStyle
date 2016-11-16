<?php

namespace App\Http\Controllers\Backend;

use App\Models\Province;
use App\Models\University;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\Datatables\Facades\Datatables;
use Carbon\Carbon;

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

    public function excel()
    {
        Excel::create("高校列表-截止于" . Carbon::now('Asia/Shanghai'), function ($excel) {
            $excel->sheet('高校列表', function ($sheet) {
                $data = $this->getUniversitiesHasBranches();
                $sheet->with($data);
            });
        })->download('xlsx');
    }

    protected function getUniversitiesHasBranches()
    {
        $result = [];
        $universitiesHasBranches = University::has("branches")->with('province')->get();
        foreach ($universitiesHasBranches as $item){
            array_push($result, [
                "高校名称" => $item->name,
                "所在省份" => $item->province->name,
            ]);
        }
        return $result;
    }
}
