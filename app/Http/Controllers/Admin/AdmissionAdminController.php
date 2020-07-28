<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admission;
//use App\Models\Admission_p_part;
use App\Models\Admission_p_part;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use RealRashid\SweetAlert\Facades\Alert;

class AdmissionAdminController extends Controller
{

    public function __construct()
    {
        $name =Settings::select('app_name')->get();
        $fab_logo = Settings::select('logo')->get();
        View::share([ 'name' => $name, 'fab_logo' => $fab_logo ]);
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function index(){
        if (auth()->user()->is_admin == 1) {
            $admits = Admission::latest()->get();
            //return $admission;
            return view('admin.admission.manage',compact('admits'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            return redirect('/dashboard');
        }
    }



    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function one(){
        if (auth()->user()->is_admin == 1) {
            $admission_one = Admission_p_part::with('admission_p')->where('this_class','one')->get();
            //return $admission_one;
            return view('admin.admission.one',compact('admission_one'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            return redirect('/dashboard');
        }

    }





    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function two(){
        if (auth()->user()->is_admin == 1) {
            $admission_two = Admission_p_part::with('admission_p_part')->where('this_class','two')->get();
            //return $admission_two;
            return view('admin.admission.two',compact('admission_two'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            return redirect('/dashboard');
        }

    }


}
