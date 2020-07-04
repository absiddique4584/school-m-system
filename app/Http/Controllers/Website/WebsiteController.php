<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{


    public function website_index(){

        $sliders = Slider::select('image')->get();
        return view('website.index',compact('sliders'));
    }
}
