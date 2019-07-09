<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title='Welcome To Samsung';
       // return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about()
    {
        $content='Hello there this is just about page we will update you soon';
        return view('pages.about',compact('content'));
    }
    public function services()
    {
        $data=array(
          'title'=>'Services',
            'services'=> ['Web Design','Programming','SEO']
        );

        return view('pages.services')->with($data);
    }
}
