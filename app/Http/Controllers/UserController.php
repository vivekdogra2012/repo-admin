<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\jr_static_page;

class UserController extends Controller
{

        public function usertable()
    {
        // $url = "test1";
         $data = jr_static_page::all();
        //  $data = jr_static_page::where('url', $url)->get();
         return view('admin.usertable', ['users' =>$data]);
    }
}
 