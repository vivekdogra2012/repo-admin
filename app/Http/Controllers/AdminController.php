<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\jr_static_page;

class AdminController extends Controller
{
    public function adminhome()
    {
        return view('admin.adminindex');
    }


    public function page()
    {
        $url = "test1";
        //  $data = jr_static_page::all();
         $data = jr_static_page::where('url', $url)->get();
         return view('admin.staticpage', ['data' =>$data]);
    }

    public function insert(request $req)
    {
        $req->validate([
            'Page_URL'=>'required | min:1',
            'Page_Heading'=>'required | min:1',
            'Meta_Tags'=>'required | min:1',
            'Desktop_Banner'=>'required | min:1',
            'Mobile_Banner'=>'required | min:1',
            'editordata'=>'required | min:1',
            'CSS'=>'required | min:1',
            'JS'=>'required | min:1'
        ],[
            'Page_URL.required'=>'Please Enter Page URL',
            'Page_Heading.required'=>'Please Enter Page Heading',
            'Meta_Tags.required'=>'Please Enter Meta Tags',
            'Desktop_Banner.required'=>'Please Enter Desktop Banner',
            'Mobile_Banner.required'=>'Please Enter Mobile Banner',
            'editordata.required'=>'Please Enter Page Content',
            'CSS.required'=>'Please Enter CSS',
            'JS.required'=>'Please Enter JS'
        ]);

        $Page_URL= $req->input('Page_URL');
        $Page_Heading= $req->input('Page_Heading');
        $Meta_Tags= $req->input('Meta_Tags');
        $Desktop_Banner= $req->input('Desktop_Banner');
        $Mobile_Banner= $req->input('Mobile_Banner');
        $Page_Content= $req->input('editordata');
        $CSS= $req->input('CSS');
        $JS= $req->input('JS');
        $author= "123";
        $created_at= date('Y-m-d H:i:s');
        $updated_at= date('Y-m-d H:i:s');

        $data= array(
            'url'=>$Page_URL, 
            'heading'=>$Page_Heading, 
            'meta_tag'=>$Meta_Tags, 
            'desktop_banner'=>$Desktop_Banner, 
            'mobile_banner'=>$Mobile_Banner, 
            'content'=>$Page_Content, 
            'css'=>$CSS, 
            'js'=>$JS, 
            'author'=>$author,
            'created_at'=>$created_at,
            'updated_at'=>$updated_at);

        DB::table('jr_static_pages')->insert($data);

        echo "success";
    }
}
