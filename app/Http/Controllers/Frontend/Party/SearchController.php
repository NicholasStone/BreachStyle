<?php

namespace App\Http\Controllers\Frontend\Party;

use App\Models\Application;
use App\Models\Branch;
use App\Models\University;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request)
    {
//        dd($request->all());
        if (empty($request->get('keywords'))) {
            return redirect()->route('frontend.case.list');
        }
        $type = '';
        $page = '';
        $keywords = $request->get('keywords');
        $typeNum = $request->get('typeNum');
        if ($typeNum == 1) {
            $page = Application::where('name', 'like', '%' . $keywords . '%')->where('verification', 1)->get();
        } elseif ($typeNum == 2) {
            $branch = Branch::where('name', 'like', '%' . $keywords . '%')->where('verification', 1)->first();
            if ($branch) {
                $page = $branch->applications()->where('verification', 1)->orderBy('fancy')->get();
            }
        } elseif ($typeNum == 3) {
            $page = Application::where('university', 'like', "%".$keywords."%")->withStatus()->get();
        }

        return view("frontend.party.search.list", compact("page", "type", "keywords"));
    }
}
