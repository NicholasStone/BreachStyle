<?php

namespace App\Http\Controllers\Frontend\Party;

use App\Models\Application;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use TomLingham\Searchy\Facades\Searchy;

class SearchController extends Controller
{
    public function search(Request $request, $sort)
    {
        $university = $request->get('search_university');
        $type = $request->get('search_type');
        $keywords = $type->get('keyWords');

        $page = Searchy::search('applications')->field('name', 'summary', 'detail')->query($keywords)->get();
        dd($page);

        return view("frontend.party.common.list");
    }
}
