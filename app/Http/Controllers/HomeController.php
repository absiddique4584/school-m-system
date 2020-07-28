<?php

namespace App\Http\Controllers;

use App\Models\Settings;
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
        $this->middleware('auth');
    }






    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            //$titles =Settings::select('app_name')->get();
            $name =Settings::select('app_name')->get();
            $fab_logo = Settings::select('logo')->get();
            return view('admin.dashboard',compact('fab_logo','name'));

    }






    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function adminHome(){
         //$titles =Settings::select('app_name')->get();
         $name =Settings::select('app_name')->get();
         $fab_logo = Settings::select('logo')->get();
         return view('admin.dashboard',compact('fab_logo','name'));


    }








}
