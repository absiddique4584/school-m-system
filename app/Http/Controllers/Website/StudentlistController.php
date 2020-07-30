<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admission_p_part;
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




    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('website.studentlist.manage');
    }





    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function one(){
        $admission_one = Admission_p_part::with('student_list')->where('this_class','one')->select('id','admission_id','m_name','f_name')->get();
        //return $admission_one;
        return view('website.studentlist.manage-one',compact('admission_one'));
    }




    public function two(){
        $admission_two = Admission_p_part::with('student_list')->where('this_class','two')->select('id','admission_id','m_name','f_name')->get();
        //return $admission_two;
        return view('website.studentlist.manage-two',compact('admission_two'));
    }




    public function three(){
        $admission_three = Admission_p_part::with('student_list')->where('this_class','three')->select('id','admission_id','m_name','f_name')->get();
        //return $admission_three;
        return view('website.studentlist.manage-three',compact('admission_three'));
    }




    public function four(){
        $admission_four = Admission_p_part::with('student_list')->where('this_class','four')->select('id','admission_id','m_name','f_name')->get();
        //return $admission_four;
        return view('website.studentlist.manage-four',compact('admission_four'));
    }




    public function five(){
        $admission_five = Admission_p_part::with('student_list')->where('this_class','five')->select('id','admission_id','m_name','f_name')->get();
        //return $admission_five;
        return view('website.studentlist.manage-five',compact('admission_five'));
    }




    public function six(){
        $admission_six = Admission_p_part::with('student_list')->where('this_class','six')->select('id','admission_id','m_name','f_name')->get();
        //return $admission_six;
        return view('website.studentlist.manage-six',compact('admission_six'));
    }




    public function seven(){
        $admission_seven = Admission_p_part::with('student_list')->where('this_class','seven')->select('id','admission_id','m_name','f_name')->get();
        //return $admission_seven;
        return view('website.studentlist.manage-seven',compact('admission_seven'));
    }




    public function eight(){
        $admission_eight = Admission_p_part::with('student_list')->where('this_class','eight')->select('id','admission_id','m_name','f_name')->get();
        //return $admission_eight;
        return view('website.studentlist.manage-eight',compact('admission_eight'));
    }




    public function nine(){
        $admission_nine = Admission_p_part::with('student_list')->where('this_class','nine')->select('id','admission_id','m_name','f_name')->get();
        //return $admission_nine;
        return view('website.studentlist.manage-nine',compact('admission_nine'));
    }




    public function ten(){
        $admission_ten = Admission_p_part::with('student_list')->where('this_class','ten')->select('id','admission_id','m_name','f_name')->get();
        //return $admission_ten;
        return view('website.studentlist.manage-ten',compact('admission_ten'));
    }




    public function eleven(){
        $admission_eleven = Admission_p_part::with('student_list')->where('this_class','eleven')->select('id','admission_id','m_name','f_name')->get();
        //return $admission_eleven;
        return view('website.studentlist.manage-eleven',compact('admission_eleven'));
    }




    public function twelve(){
        $admission_twelve = Admission_p_part::with('student_list')->where('this_class','twelve')->select('id','admission_id','m_name','f_name')->get();
        //return $admission_twelve;
        return view('website.studentlist.manage-twelve',compact('admission_twelve'));
    }







}
