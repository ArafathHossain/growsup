<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminProfileController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');
    }

    public function adminProfile()
    {
        //$id = Auth::id();
        $adminData = Admin::find(1);
        return view('admin.admin_profile_view', compact('adminData'));
    }

    public function adminProfileStore(Request $request)
    {
        $data = Admin::find(1);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/profileimages'), $filename);
            $data['profile_photo_path'] = $filename;
        }
        $data->save();
        $notification = array(
            'messege' => 'Admin Profile Updated',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.profile')->with($notification);
    }

    public function AdminUpdateChangePassword(Request $request)
    {

        $validated = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashPassword = Admin::find(1)->password;
        if (Hash::check($request->oldpassword, $hashPassword)) {
            $admin = Admin::find(1);
            $admin->password = Hash::make($request->password);
            $admin->save();
            Auth::logout();
            $notification = array(
                'messege' => 'Admin Password Updated.Login with new Password',
                'alert-type' => 'success'
            );
            return redirect()->route('admin.logout')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Something Went wrong!',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);
        }
    }
}
