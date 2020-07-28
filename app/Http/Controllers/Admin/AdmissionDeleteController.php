<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admission_p_part;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
class AdmissionDeleteController extends Controller
{



    /**
     * AdmissionDeleteController constructor.
     */
    public function __construct()
    {
        $name =Settings::select('app_name')->get();
        $fab_logo = Settings::select('logo')->get();
        View::share([ 'name' => $name, 'fab_logo' => $fab_logo ]);
    }




    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function oneDelete($id){
        if (auth()->user()->is_admin == 1) {
            try {
                $id    = base64_decode($id);
                $admission = Admission_p_part::find($id);
                $admission->delete();
                Alert::warning("Yaah ! You Have Successfully Deleted this Student ");
            }catch (Exception $exception){
                Alert::warning("Oh! Sorry", "Something Wrong !");
            }
        return redirect()->back();
        } else {
        Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
        return redirect('/dashboard');
        }

    }





    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function twoDelete($id){
        if (auth()->user()->is_admin == 1) {
            try {
                $id    = base64_decode($id);
                $admission = Admission_p_part::find($id);
                $admission->delete();
                Alert::warning("Yaah ! You Have Successfully Deleted this Student ");
            }catch (Exception $exception){
                Alert::warning("Oh! Sorry", "Something Wrong !");
            }
        return redirect()->back();
        } else {
        Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
        return redirect('/dashboard');
        }

    }





    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function threeDelete($id){
        if (auth()->user()->is_admin == 1) {
            try {
                $id    = base64_decode($id);
                $admission = Admission_p_part::find($id);
                $admission->delete();
                Alert::warning("Yaah ! You Have Successfully Deleted this Student ");
            }catch (Exception $exception){
                Alert::warning("Oh! Sorry", "Something Wrong !");
            }
        return redirect()->back();
        } else {
        Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
        return redirect('/dashboard');
        }

    }





    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function fourDelete($id){
        if (auth()->user()->is_admin == 1) {
            try {
                $id    = base64_decode($id);
                $admission = Admission_p_part::find($id);
                $admission->delete();
                Alert::warning("Yaah ! You Have Successfully Deleted this Student ");
            }catch (Exception $exception){
                Alert::warning("Oh! Sorry", "Something Wrong !");
            }
        return redirect()->back();
        } else {
        Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
        return redirect('/dashboard');
        }

    }






    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function fiveDelete($id){
        if (auth()->user()->is_admin == 1) {
            try {
                $id    = base64_decode($id);
                $admission = Admission_p_part::find($id);
                $admission->delete();
                Alert::warning("Yaah ! You Have Successfully Deleted this Student ");
            }catch (Exception $exception){
                Alert::warning("Oh! Sorry", "Something Wrong !");
            }
        return redirect()->back();
        } else {
        Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
        return redirect('/dashboard');
        }

    }






    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function sixDelete($id){
        if (auth()->user()->is_admin == 1) {
            try {
                $id    = base64_decode($id);
                $admission = Admission_p_part::find($id);
                $admission->delete();
                Alert::warning("Yaah ! You Have Successfully Deleted this Student ");
            }catch (Exception $exception){
                Alert::warning("Oh! Sorry", "Something Wrong !");
            }
        return redirect()->back();
        } else {
        Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
        return redirect('/dashboard');
        }

    }





    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function sevenDelete($id){
        if (auth()->user()->is_admin == 1) {
            try {
                $id    = base64_decode($id);
                $admission = Admission_p_part::find($id);
                $admission->delete();
                Alert::warning("Yaah ! You Have Successfully Deleted this Student ");
            }catch (Exception $exception){
                Alert::warning("Oh! Sorry", "Something Wrong !");
            }
        return redirect()->back();
        } else {
        Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
        return redirect('/dashboard');
        }

    }





    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function eightDelete($id){
        if (auth()->user()->is_admin == 1) {
            try {
                $id    = base64_decode($id);
                $admission = Admission_p_part::find($id);
                $admission->delete();
                Alert::warning("Yaah ! You Have Successfully Deleted this Student ");
            }catch (Exception $exception){
                Alert::warning("Oh! Sorry", "Something Wrong !");
            }
        return redirect()->back();
        } else {
        Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
        return redirect('/dashboard');
        }

    }




    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function nineDelete($id){
        if (auth()->user()->is_admin == 1) {
            try {
                $id    = base64_decode($id);
                $admission = Admission_p_part::find($id);
                $admission->delete();
                Alert::warning("Yaah ! You Have Successfully Deleted this Student ");
            }catch (Exception $exception){
                Alert::warning("Oh! Sorry", "Something Wrong !");
            }
        return redirect()->back();
        } else {
        Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
        return redirect('/dashboard');
        }

    }




    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function tenDelete($id){
        if (auth()->user()->is_admin == 1) {
            try {
                $id    = base64_decode($id);
                $admission = Admission_p_part::find($id);
                $admission->delete();
                Alert::warning("Yaah ! You Have Successfully Deleted this Student ");
            }catch (Exception $exception){
                Alert::warning("Oh! Sorry", "Something Wrong !");
            }
        return redirect()->back();
        } else {
        Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
        return redirect('/dashboard');
        }

    }





    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function elevenDelete($id){
        if (auth()->user()->is_admin == 1) {
            try {
                $id    = base64_decode($id);
                $admission = Admission_p_part::find($id);
                $admission->delete();
                Alert::warning("Yaah ! You Have Successfully Deleted this Student ");
            }catch (Exception $exception){
                Alert::warning("Oh! Sorry", "Something Wrong !");
            }
        return redirect()->back();
        } else {
        Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
        return redirect('/dashboard');
        }

    }





    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function twelveDelete($id){
        if (auth()->user()->is_admin == 1) {
            try {
                $id    = base64_decode($id);
                $admission = Admission_p_part::find($id);
                $admission->delete();
                Alert::warning("Yaah ! You Have Successfully Deleted this Student ");
            }catch (Exception $exception){
                Alert::warning("Oh! Sorry", "Something Wrong !");
            }
        return redirect()->back();
        } else {
        Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
        return redirect('/dashboard');
        }

    }




}
