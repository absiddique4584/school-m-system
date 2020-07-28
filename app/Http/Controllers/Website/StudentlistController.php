<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class StudentlistController extends Controller
{


    /**
     * StudentlistController constructor.
     */
    public function __construct()
    {
        $app_name = Settings::select('app_name')->get();
        $fab_logo = Settings::select('logo')->get();
        $settings = Settings::select('logo','app_name')->get();
        View::share([ 'app_name' => $app_name, 'fab_logo' => $fab_logo, 'settings' => $settings ]);
    }




    public function index(){
        return view('website.studentlist.manage');
    }
}
