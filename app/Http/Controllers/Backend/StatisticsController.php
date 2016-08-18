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

    public function get()
    {
        $application = Application::with("branch")->select([
            "id", "name", "type", "verification", "branch_type", "fancy", "total_comment", "created_at", "branch_id", "updated_at"
        ])->get();

        return response()->json($application);
    }
}
