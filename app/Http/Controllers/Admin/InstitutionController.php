<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Institution;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
class InstitutionController extends Controller
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
    public function index()
    {
        if (auth()->user()->is_admin == 1) {
            $institutions = Institution::get();
            // return $users;
            return view('admin.institution.manage', compact('institutions'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            //setMessage('danger', 'Oh! Sorry ..You Have No Permission to Edit');
            return redirect('/dashboard');

        }

    }





    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        //return $request;

        $request->validate([
            'school_name' => 'required',
            'school_reg' => 'required',

        ]);
        $institution = null;
        try {
            $institution = Institution::create([
                'school_name' => $request->school_name,
                'school_reg' => $request->school_reg,

            ]);

        } catch (Exception $exception) {
            $institution = false;
        }

        if ($institution) {
            Alert::warning('Yay!', 'Institution Info has been successfully created.');
            // setMessage('success', 'Yay! A slider has been successfully created.');
        } else {
            Alert::warning('Oops!', ' Unable to create a new Institution Info.');
            //setMessage('danger', 'Oops! Unable to create a new slider.');
        }
        return redirect('institution/manage');
        // return redirect()->back();

    }



    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        if (auth()->user()->is_admin == 1) {
            $id     = base64_decode($id);
            $institution = Institution::find($id);
            //return $user;
            return view('admin.institution.edit', compact('institution'));
        }
    }




    /**
     * @param Request $request
     * @param         $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        if (auth()->user()->is_admin == 1) {
            $institution = Institution::find($id);

            $request->validate([
                'school_name' => 'required',
                'school_reg' => 'required',
            ]);

            $success = null;
            try {

                $success = $institution->update([
                    'school_name' => $request->school_name,
                    'school_reg' => $request->school_reg,
                ]);
            } catch (Exception $exception) {
                $success = false;
            }

            if ($success) {
                Alert::warning('Yay!', ' A Institution Info. has been successfully updated.');
                // setMessage('success', 'Yay! A slider has been successfully updated.');
            } else {
                Alert::warning('Oops!', ' Unable to Update a new Institution Info.');
                // setMessage('danger', 'Oops! Unable to update slider.');
            }
            // return redirect()->back();
            return redirect('institution/manage');
        }
    }





    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        if (auth()->user()->is_admin == 1) {
            $id     = base64_decode($id);
            $institution = Institution::find($id);
            $institution->delete();
            Alert::warning('Yay!', ' Institution Info. has been successfully Deleted.');

            return redirect()->back();
        }
    }

}
