<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Institution;
use App\Models\Settings;
use App\Models\Slider;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{


    public function website_index(){

        $sliders = Slider::select('image')->get();
        $settings = Settings::select('logo','app_name')->get();
        $app_name = Settings::select('app_name')->get();
        $fab_logo = Settings::select('logo')->get();
        $institutions = Institution::select('school_name','school_reg')->get();
        //return $institutions;
        return view('website.index',compact('sliders','app_name','fab_logo','settings','institutions'));
    }
}
