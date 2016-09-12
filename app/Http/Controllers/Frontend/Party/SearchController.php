<?php

namespace App\Http\Controllers\Frontend\Party;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use TomLingham\Searchy\Facades\Searchy;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $type = '';
        $keywords = $request->get('keywords');

        $page = Searchy::applications('name', 'summary', 'type')->query($keywords)->get();

//        dd($page);
        return view("frontend.party.search.list", compact("page", "type", "keywords"));
    }

    public function sort()
    {

    }
}
