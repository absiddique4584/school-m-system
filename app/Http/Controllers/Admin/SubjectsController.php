<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use App\Models\SubjectsOne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
class SubjectsController extends Controller
{
    public function __construct()
    {
        $name =Settings::select('app_name')->get();
        $fab_logo = Settings::select('logo')->get();
        View::share([ 'name' => $name, 'fab_logo' => $fab_logo ]);
    }


    public function index(){
        return view('admin.subjects.manage');
    }

    public function one(){
        if (auth()->user()->is_admin == 1) {
            $subjectsOne =SubjectsOne::select('id','image','sub_name','teacher')->get();
            //return $subjectsOne;
            return view('admin.subjects.manage-one',compact('subjectsOne'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            return redirect('/dashboard');
        }

    }



    public function delete($id)
    {
        if (auth()->user()->is_admin == 1) {
            $id     = base64_decode($id);
            $subjects = SubjectsOne::find($id);
            // unlink(public_path('uploads/slider/') . $slider->image);
            $subjects->delete();
            Alert::warning('Yay!', ' A Subjects has been successfully Deleted.');

            return redirect()->back();
        }
    }



    public function edit($id){
        $id     = base64_decode($id);
        $editOne = SubjectsOne::find($id);
        //return $editOne;
        return view('admin.subjects.edit-one',compact('editOne'));
    }




    public function update(Request $request, $id){
       // return $request;
        if (auth()->user()->is_admin == 1) {
                $subjects = SubjectsOne::find($id);

                $request->validate([
                    'sub_name' => 'required',
                ]);

                $success = null;
                try {
                    $image    = $request->file('image');
                    $fileEx   = $image->getClientOriginalExtension();
                    $fileName = date('Ymdhis.') . $fileEx;
                    $image->move(public_path('uploads/subjectsOne/'), $fileName);

                    $success = $subjects->update([
                        'image'  => $fileName,
                        'sub_name' => $request->sub_name,
                        'teacher' => $request->teacher,
                    ]);
                } catch (Exception $exception) {
                    dd($exception);
                    $success = false;
                }

                if ($success) {
                    Alert::warning('Yay!', ' Class One Subject And Teacher has been successfully updated.');
                    // setMessage('success', 'Yay! A slider has been successfully updated.');
                } else {
                    Alert::warning('Oops!', ' Unable to Update a Class One Subject.');
                    // setMessage('danger', 'Oops! Unable to update slider.');
                }
                // return redirect()->back();
                return redirect('subjects/manage/one');

        }
    }




    public function add(){
        return view('admin.subjects.add-one');
    }





    public function store(Request $request)
    {
        //return $request;

        $request->validate([
            'sub_name' => 'required',

        ]);
        $subjects = null;
        try {
            $image    = $request->file('image');
            $fileEx   = $image->getClientOriginalExtension();
            $fileName = date('Ymdhis.') . $fileEx;
            $image->move(public_path('uploads/subjectsOne/'), $fileName);

            $subjects = SubjectsOne::create([
                'image'  => $fileName,
                'sub_name' => $request->sub_name,
                'teacher' => $request->teacher,

            ]);

        } catch (Exception $exception) {
            $subjects = false;
        }

        if ($subjects) {
            Alert::warning('Yay!', '  Class One Subject And Teacher has been successfully Created.');
        } else {
            Alert::warning('Oops!', ' Unable to create a new Subject.');
        }
        return redirect('subjects/manage/one');
        // return redirect()->back();

    }


}
