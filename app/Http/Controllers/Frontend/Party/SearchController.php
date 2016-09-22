<?php

namespace App\Http\Controllers\Frontend\Party;

use App\Models\Application;
use App\Models\Branch;
use App\Models\University;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use TomLingham\Searchy\Facades\Searchy;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if (empty( $request->get('keywords') )) {
            return redirect()->route('frontend.case.list');
        }
        $type = '';
        $keywords = $request->get('keywords');
        $typeNum = $request->get('typeNum');
        if ($typeNum == 1) {
            $page = Application::where('name', 'like', '%' . $keywords . '%')->where('verification', 1)->get();
        } elseif ($typeNum == 2) {
            $branch = Branch::where('name', 'like', '%' . $keywords . '%')->where('verification', 1)->first();
            $page = $branch->applications()->where('verification', 1)->orderBy('fancy')->get();
        } elseif ($typeNum == 3) {
            $university = University::where('name', 'like', '%' . $keywords . '%')->first();
            $page = $university->applications()->where('applications.verification', 1)->orderBy('fancy')->get();
        }
        return view("frontend.party.search.list", compact("page", "type", "keywords"));
    }

    public function sort()
    {

    }
}
