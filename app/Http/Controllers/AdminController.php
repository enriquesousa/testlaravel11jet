<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    
    // AdminDestroy
    public function AdminDestroy(Request $request){

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Usuario deslogueado correctamente',
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification); 
    }

    // AdminProfile
    public function ViewProfile(){
        $id = Auth::user()->id;
        $adminData = User::findOrFail($id);
        return view('admin.admin_profile_view', compact('adminData'));
    }

    // AdminChangeLocaleUS
    public function AdminChangeLocaleUS(){

        // Change env variable
        $path = base_path('.env');
        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                'APP_LOCALE=es',
                'APP_LOCALE=en',
                file_get_contents($path)
            ));
        }

        $notification = array(
            'message' => 'Language has been changed to ENGLISH',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    // AdminChangeLocaleES
    public function AdminChangeLocaleES(){

        // Change env variable
        $path = base_path('.env');
        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                'APP_LOCALE=en',
                'APP_LOCALE=es',
                file_get_contents($path)
            ));
        }

        $notification = array(
            'message' => 'El lenguaje ha sido cambiado a ESPAÑOL',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    // EditProfile
    public function EditProfile(){
        $id = Auth::user()->id;
        $editData = User::findOrFail($id);
        return view('admin.admin_profile_edit', compact('editData'));
    }

    // EditProfile
    public function EditProfileJet(){
       return view('admin.admin_profile_jet_edit');
    }

    // ChangePassword
    public function ChangePassword(){
        return view('admin.admin_change_password');
    }

    // EditProfilePhoto
    public function EditProfilePhoto(){
       return view('admin.admin_profile_edit_photo');
    }




}
