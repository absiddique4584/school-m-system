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



    public function three(){
        if (auth()->user()->is_admin == 1) {
            $admission_three = Admission_p_part::with('admission_p_part')->where('this_class','three')->get();
            //return $admission_three;
            return view('admin.admission.three',compact('admission_three'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            return redirect('/dashboard');
        }

    }



    public function four(){
        if (auth()->user()->is_admin == 1) {
            $admission_four = Admission_p_part::with('admission_p_part')->where('this_class','four')->get();
            //return $admission_four;
            return view('admin.admission.four',compact('admission_four'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            return redirect('/dashboard');
        }

    }



    public function five(){
        if (auth()->user()->is_admin == 1) {
            $admission_five = Admission_p_part::with('admission_p_part')->where('this_class','five')->get();
            //return $admission_three;
            return view('admin.admission.five',compact('admission_five'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            return redirect('/dashboard');
        }

    }



    public function six(){
        if (auth()->user()->is_admin == 1) {
            $admission_six = Admission_p_part::with('admission_p_part')->where('this_class','six')->get();
            //return $admission_six;
            return view('admin.admission.six',compact('admission_six'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            return redirect('/dashboard');
        }

    }



    public function seven(){
        if (auth()->user()->is_admin == 1) {
            $admission_seven = Admission_p_part::with('admission_p_part')->where('this_class','seven')->get();
            //return $admission_seven;
            return view('admin.admission.seven',compact('admission_seven'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            return redirect('/dashboard');
        }

    }



    public function eight(){
        if (auth()->user()->is_admin == 1) {
            $admission_eight = Admission_p_part::with('admission_p_part')->where('this_class','eight')->get();
            //return $admission_three;
            return view('admin.admission.eight',compact('admission_eight'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            return redirect('/dashboard');
        }

    }



    public function nine(){
        if (auth()->user()->is_admin == 1) {
            $admission_nine = Admission_p_part::with('admission_p_part')->where('this_class','nine')->get();
            //return $admission_nine;
            return view('admin.admission.nine',compact('admission_nine'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            return redirect('/dashboard');
        }

    }



    public function ten(){
        if (auth()->user()->is_admin == 1) {
            $admission_ten = Admission_p_part::with('admission_p_part')->where('this_class','ten')->get();
            //return $admission_ten;
            return view('admin.admission.ten',compact('admission_ten'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            return redirect('/dashboard');
        }

    }



    public function eleven(){
        if (auth()->user()->is_admin == 1) {
            $admission_eleven = Admission_p_part::with('admission_p_part')->where('this_class','eleven')->get();
            //return $admission_eleven;
            return view('admin.admission.eleven',compact('admission_eleven'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            return redirect('/dashboard');
        }

    }



    public function twelve(){
        if (auth()->user()->is_admin == 1) {
            $admission_twelve = Admission_p_part::with('admission_p_part')->where('this_class','twelve')->get();
            //return $admission_twelve;
            return view('admin.admission.twelve',compact('admission_twelve'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            return redirect('/dashboard');
        }

    }


}
