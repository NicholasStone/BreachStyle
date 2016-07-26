<?php

namespace App\Http\Controllers\Frontend\Party;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request, $sort)
    {


        return view("frontend.party.common.list");
    }
}
