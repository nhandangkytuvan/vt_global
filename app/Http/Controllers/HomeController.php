<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function tabledrop(){
        return view('tabledrop');
    }
    public function tablesorter(){
        return view('tablesorter');
    }
    public function starrating(Request $request){
        if($request->isMethod('post')){
            return $request->input('rating');            
        }else{
            return view('starrating');
        }
    }
}
