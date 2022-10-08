<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   
  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    

    public function index()
    {
        //return 'INDEX';
        $title ="Welcome to Laravel";
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }
    
    public function about()
    {
        
        $title='About us';
        return view('pages.about')->with('title',$title);
    }
    public function services()
    {
        $data=array(
            'title'=>'Services',
            'services'=>['Web Design', 'Programming','SEO']
        );
        return view('pages.services')->with($data);
    }
}
