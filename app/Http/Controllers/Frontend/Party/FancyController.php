<?php

namespace App\Http\Controllers\Frontend\Party;

use App\Models\Application;
use App\Models\Fancy;
use DaveJamesMiller\Breadcrumbs\Facade;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class FancyController extends Controller
{
    public function fancy($id)
    {
        $application = Application::find($id);
        $application->fancy++;
        $application->save();

        return response()->json(['total' => $application->fancy]);
    }
}
