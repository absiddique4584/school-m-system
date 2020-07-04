<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;
use Exception;
class PermissionController extends Controller
{




    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function index()
    {
        if (auth()->user()->is_admin == 1) {
            $users = User::get();
           // return $users;
            return view('admin.permission.manage', compact('users'));
        } else {
            Alert::warning("Oh! Sorry", "You Don't Have Permission to Access");
            //setMessage('danger', 'Oh! Sorry ..You Have No Permission to Edit');
            return redirect('/dashboard');

        }

    }





    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        if (auth()->user()->is_admin == 1) {
            $id     = base64_decode($id);
            $user = User::find($id);
             //return $user;
            return view('admin.permission.edit', compact('user'));
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
            $user = User::find($id);

            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'is_admin' => 'required',
            ]);

            $success = null;
            try {

                $success = $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'is_admin' => $request->is_admin,
                ]);
            } catch (Exception $exception) {
                $success = false;
            }

            if ($success) {
                Alert::warning('Yay!', ' A Permission has been successfully updated.');
                // setMessage('success', 'Yay! A slider has been successfully updated.');
            } else {
                Alert::warning('Oops!', ' Unable to Update a new Permission.');
                // setMessage('danger', 'Oops! Unable to update slider.');
            }
            // return redirect()->back();
            return redirect('permission/manage');
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
            $user = User::find($id);
            $user->delete();
            Alert::warning('Yay!', ' A Normal User has been successfully Deleted.');

            return redirect()->back();
        }
    }

}
