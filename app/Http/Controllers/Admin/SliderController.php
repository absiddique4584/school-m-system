<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Exception;
use RealRashid\SweetAlert\Facades\Alert;
class SliderController extends Controller
{


    public function index()
    {
        if (auth()->user()->is_admin == 1) {
            $sliders = Slider::latest()->get();
            return view('admin.slider.manage', compact('sliders'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            //setMessage('danger', 'Oh! Sorry ..You Have No Permission to Edit');
            return redirect('/dashboard');

        }

    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        if (auth()->user()->is_admin == 1) {
            return view('admin.slider.add');
        }
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //return $request;

            $request->validate([
                'image' => 'required',

            ]);
            $slider = null;
            try {
                $image    = $request->file('image');
                $fileEx   = $image->getClientOriginalExtension();
                $fileName = date('Ymdhis.') . $fileEx;
                $image->move(public_path('uploads/slider/'), $fileName);

                $slider = Slider::create([
                    'image'  => $fileName,
                    'status' => $request->status,

                ]);

            } catch (Exception $exception) {
                $slider = false;
            }

            if ($slider) {
                Alert::warning('Yay!', ' A slider has been successfully created.');
                // setMessage('success', 'Yay! A slider has been successfully created.');
            } else {
                Alert::warning('Oops!', ' Unable to create a new slider.');
                //setMessage('danger', 'Oops! Unable to create a new slider.');
            }
            return redirect('slider/manage');
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
            $slider = Slider::find($id);

            return view('admin.slider.edit', compact('slider'));
        }
    }


    /**
     * @param Request $request
     * @param         $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        if (auth()->user()->is_admin == 1) {
            $slider = Slider::find($id);

            $request->validate([
                'image' => 'required',
            ]);

            $success = null;
            try {
                $image    = $request->file('image');
                $fileEx   = $image->getClientOriginalExtension();
                $fileName = date('Ymdhis.') . $fileEx;
                $image->move(public_path('uploads/slider/'), $fileName);

                $success = $slider->update([
                    'image'  => $fileName,
                    'status' => $request->status,
                ]);
            } catch (Exception $exception) {
                $success = false;
            }

            if ($success) {
                Alert::warning('Yay!', ' A slider has been successfully updated.');
                // setMessage('success', 'Yay! A slider has been successfully updated.');
            } else {
                Alert::warning('Oops!', ' Unable to Update a new slider.');
                // setMessage('danger', 'Oops! Unable to update slider.');
            }
            // return redirect()->back();
            return redirect('slider/manage');
        }
    }




    /**
     * @param $id
     * @param $status
     * public function updateStatus($id, $status)
     * {
     * $slider         = Slider::find($id);
     * return $slider;
     * exit();
     * $slider->status = $status;
     * $slider->save();
     * }
     */


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        if (auth()->user()->is_admin == 1) {
            $id     = base64_decode($id);
            $slider = Slider::find($id);
            // unlink(public_path('uploads/slider/') . $slider->image);
            $slider->delete();
            Alert::warning('Yay!', ' A slider has been successfully Deleted.');

            return redirect()->back();
        }
    }
}
