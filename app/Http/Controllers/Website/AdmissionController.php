<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Admission_p_part;
use App\Models\Institution;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use RealRashid\SweetAlert\Facades\Alert;
use Session;
use Exception;
class AdmissionController extends Controller
{



    /**
     * AdmissionController constructor.
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
        return view('website.admission.manage');
    }




    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function studentAdmission(Request $request){
        //return $request;
        $request->validate([
            'name' => 'required',
            'd_birth' => 'required',
            'p_birth' => 'required',
            'class' => 'required',
            'image' => 'required',

        ]);
        //Session::put('customerId',$customer->id);
        $admission = null;
        try {
            $image    = $request->file('image');
            $fileEx   = $image->getClientOriginalExtension();
            $fileName = date('Ymdhis.') . $fileEx;
            $image->move(public_path('uploads/admission/'), $fileName);

            $admission = Admission::create([
                'name' => $request->name,
                'd_birth' => $request->d_birth,
                'p_birth' => $request->p_birth,
                'class' => $request->class,
                'p_school' => $request->p_school,
                's_phone' => $request->s_phone,
                's_email' => $request->s_email,
                'image'  => $fileName,
            ]);
            Session::put('admissionId',$admission->id);
                } catch (Exception $exception) {
            //dd($exception);
            //exit();
                    $admission = false;
                }

                if ($admission) {
                    Alert::warning('Yay!', ' Student Part has been successfully created.');
                    // setMessage('success', 'Yay! A slider has been successfully updated.');
                } else {
                    Alert::warning('Oops!', ' Unable to created a new Admission.');
                    // setMessage('danger', 'Oops! Unable to update slider.');
                }
                //return redirect()->back();
            return redirect('admission/parents/section');
        }




    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
        public function parentsSection(){
            return view('website.admission.manage-parents');
        }






    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
        public function parents_p_Section(Request $request){

            $request->validate([
                'this_class'=> 'required',
                'm_name' => 'required',
                'f_name' => 'required',
                'f_phone' => 'required',
                'address' => 'required',

            ]);
            $admission_p = null;
            try {

                $admission_p = Admission_p_part::create([
                    "admission_id" => Session::get('admissionId'),
                    'this_class'=>$request->this_class,
                    'm_name' => $request->m_name,
                    'm_phone' => $request->m_phone,
                    'f_name' => $request->f_name,
                    'f_phone' => $request->f_phone,
                    'm_situation' => $request->m_situation,
                    'address' => $request->address,
                    'p_address' => $request->p_address,

                ]);
            } catch (Exception $exception) {
               // dd($exception);
                //exit();
                $admission_p = false;
            }

            if ($admission_p) {
                Alert::warning('Yay!', ' Admission has been successfully created.');
                // setMessage('success', 'Yay! A slider has been successfully updated.');
            } else {
                Alert::warning('Oops!', ' Unable to created a new Admission.');
                // setMessage('danger', 'Oops! Unable to update slider.');
            }
            //return redirect()->back();
            return redirect('admission/admission-message');
            //return view('website.admission.admission-message');
        }





    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
        public function admissionMessage(){
            $institutions = Institution::select('school_name')->get();
            //$student_name = Admission::select('name')->get();
            //$session = Session::get('studentName');
            return view('website.admission.admission-message',compact('institutions'));
        }

}
