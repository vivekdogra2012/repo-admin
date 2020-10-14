<?php

namespace App\Http\Controllers;

use Request;

class PagesController extends Controller
{
    public function pages()
    {
        // $segment = Request::segment(1);
        echo $segment = Request::segment(2);
        //  return view('dashboard');

    }
}
