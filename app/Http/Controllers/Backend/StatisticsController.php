<?php

namespace App\Http\Controllers\Backend;

use App\Models\Application;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StatisticsController extends Controller
{
    public function index()
    {
        return view('backend.statistics');
    }

    public function get(Request $request)
    {
        $pagenum = $request->get('pagenum');
        $pagesize = $request->get('pagesize');
        $start = $pagenum * $pagesize;
        if ($request->has('filterscount'))
        {
            $filterscount = $request->get('filterscount');
            if ($filterscount > 0)
            {
                for ($i = 0; $i<$filterscount;$i++)
                {
                    $filtervalue = $request->get("filtervalue" . $i);
                    // get the filter's condition.
                    $filtercondition = $request->get("filtercondition" . $i);
                    // get the filter's column.
                    $filterdatafield = $request->get("filterdatafield" . $i);
                    // get the filter's operator.
                    $filteroperator = $request->get("filteroperator" . $i);

                    if ($tmpdatafield == "")
                    {
                        $tmpdatafield = $filterdatafield;
                    }
                    else if ($tmpdatafield <> $filterdatafield)
                    {
                        $where .= ")AND(";
                    }
                    else if ($tmpdatafield == $filterdatafield)
                    {
                        if ($tmpfilteroperator == 0)
                        {
                            $where .= " AND ";
                        }
                        else $where .= " OR ";
                    }

                }
            }
        }
        $application = Application::with("branch")->select([
            "id", "name", "type", "verification", "branch_type", "fancy", "total_comment", "created_at", "branch_id", "updated_at"
        ])->get();

        return response()->json($application);
    }
}
