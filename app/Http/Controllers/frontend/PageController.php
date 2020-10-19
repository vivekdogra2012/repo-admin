<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\jr_static_page;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function newpage()
    {
        return view('frontend.junglee-rummy-tv-ads');
    }
    public function newstatic()
    {
        $url = "junglee-rummy-tv-ads";
        $data = jr_static_page::all();
        $data = jr_static_page::where('url', $url)->get();
        // return $data;
        return view('frontend.staticpage', ['data' =>$data]);
    }

}
