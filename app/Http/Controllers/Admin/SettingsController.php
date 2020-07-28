<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\View;
use App\Models\Settings;
use Exception;

class SettingsController extends Controller
{



    /**
     * SettingsController constructor.
     */
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
            $settings = Settings::get();
            // return $settings;
            return view('admin.settings.manage',compact('settings'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            //setMessage('danger', 'Oh! Sorry ..You Have No Permission to Edit');
            return redirect('/dashboard');

        }

    }




    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        if (auth()->user()->is_admin == 1) {
            return view('admin.settings.add');
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
            'logo' => 'required',
            'image' => 'required',
            'app_name' => 'required',

        ]);
        $settings = null;
        try {
            //image part
            $image    = $request->file('image');
            $fileEx   = $image->getClientOriginalExtension();
            $fileName = date('Ymdhis.') . $fileEx;
            $image->move(public_path('uploads/settings/'), $fileName);

            //logo part
            $logo    = $request->file('logo');
            $fileExtra   = $logo->getClientOriginalExtension();
            $logoName = date('Y-M-D.') . $fileExtra;
            $logo->move(public_path('uploads/settings-logo/'), $logoName);



            $settings = Settings::create([
                'logo' => $logoName,
                'image'  => $fileName,
                'app_name' => $request->app_name,

            ]);

        } catch (Exception $exception) {

            $settings = false;
        }

        if ($settings) {
            Alert::warning('Yay!', ' A Settings has been successfully created.');
            // setMessage('success', 'Yay! A slider has been successfully created.');
        } else {
            Alert::warning('Oops!', ' Unable to create a new Settings.');
            //setMessage('danger', 'Oops! Unable to create a new slider.');
        }
        return redirect('settings/manage');
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
            $setting = Settings::find($id);

            return view('admin.settings.edit', compact('setting'));
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
            $setting = Settings::find($id);

            $request->validate([
                'logo' => 'required',
                'image' => 'required',
                'app_name' => 'required',

            ]);

            $success = null;
            try {

                //image part
                $image    = $request->file('image');
                $fileEx   = $image->getClientOriginalExtension();
                $fileName = date('Ymdhis.') . $fileEx;
                $image->move(public_path('uploads/settings/'), $fileName);

                //logo part
                $logo    = $request->file('logo');
                $fileExtra   = $logo->getClientOriginalExtension();
                $logoName = date('Y-M-D.') . $fileExtra;
                $logo->move(public_path('uploads/settings-logo/'), $logoName);



                $success = $setting->update([
                    'logo' => $logoName,
                    'image'  => $fileName,
                    'app_name' => $request->app_name,
                ]);
            } catch (Exception $exception) {
                $success = false;
            }

            if ($success) {
                Alert::warning('Yay!', ' A Settings has been successfully Updated.');
                // setMessage('success', 'Yay! A slider has been successfully updated.');
            } else {
                Alert::warning('Oops!', ' Unable to Update a new Settings.');
                // setMessage('danger', 'Oops! Unable to update slider.');
            }
            // return redirect()->back();
            return redirect('settings/manage');
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
            $setting = Settings::find($id);
            // unlink(public_path('uploads/slider/') . $slider->image);
            $setting->delete();
            Alert::warning('Yay!', ' A Setting has been successfully Deleted.');

            return redirect()->back();
        }
    }






}
