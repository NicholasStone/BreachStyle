<?php

namespace App\Http\Controllers\Frontend\Party;

use App\Models\Application;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FancyController extends Controller
{
    public function fancy($id)
    {
        $application = Application::find($id);
        $application->fancy++;
        $application->save();

        return response()->json(['success' => true]);
    }

    public function unfancy($id)
    {
        $application = Application::find($id);
        $application->fancy--;
        $application->save();

        return response()->json(['success' => true]);
    }
}
