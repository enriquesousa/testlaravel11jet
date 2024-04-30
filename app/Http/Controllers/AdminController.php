<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    // AdminDestroy
    public function AdminDestroy(Request $request)
    {

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
    public function ViewProfile()
    {
        $id = Auth::user()->id;
        $adminData = User::findOrFail($id);
        return view('admin.admin_profile_view', compact('adminData'));
    }

    // AdminChangeLocaleUS
    public function AdminChangeLocaleUS()
    {

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
    public function AdminChangeLocaleES()
    {

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
    public function EditProfile()
    {
        $id = Auth::user()->id;
        $editData = User::findOrFail($id);
        $adminData = User::findOrFail($id);
        return view('admin.admin_profile_edit', compact('editData', 'adminData'));
    }

    // EditProfile
    public function EditProfileJet()
    {
        return view('admin.admin_profile_jet_edit');
    }

    // ChangePassword
    public function ChangePassword(){
        $id = Auth::user()->id;
        $adminData = User::findOrFail($id);
        return view('admin.admin_change_password', compact('adminData'));
    }

    // UpdatePassword
    public function UpdatePassword(Request $request){

        $validateData = $request->validate([
            'antiguaContraseña' => 'required',
            'nuevaContraseña' => 'required|min:8',
            'confirmarContraseña' => 'required|same:nuevaContraseña',
        ]);


        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->antiguaContraseña, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->nuevaContraseña);
            $user->save();

            // session()->flash('message', 'Contraseña actualizada correctamente');
            $notification = array(
                'message' => 'Contraseña actualizada correctamente',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        }else{

            // session()->flash('message', 'La antigua contraseña no coincide');
            $notification = array(
                'message' => 'La antigua contraseña no coincide', 
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }

    // ChangePassword
    public function ChangePasswordJet()
    {
        return view('admin.admin_change_password_jet');
    }

    // EditProfilePhoto
    public function EditProfilePhoto()
    {
        $id = Auth::user()->id;
        $editData = User::findOrFail($id);
        $adminData = User::findOrFail($id);
        return view('admin.admin_profile_edit_photo', compact('editData', 'adminData'));
    }

    // StoreProfile
    public function StoreProfile(Request $request)
    {

        // Para saber que usuario esta logueado
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;

        // actualizar imagen
        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');
            @unlink(public_path('upload/admin_images/' . $data->profile_image)); // para borrar si ya hay imagen en el directorio
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['profile_image'] = $filename;
        }

        $data->save();

        // return redirect()->route('admin.view.profile')->with('success', 'Perfil actualizado con éxito');

        // toastr notification
        $notification = array(
            'message' => 'Perfil actualizado con éxito',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.view.profile')->with($notification);
    }

    // StorePhoto
    public function StorePhoto(Request $request)
    {

        // Para saber que usuario esta logueado
        $id = Auth::user()->id;
        $data = User::find($id);

        // dd($data);

        // actualizar imagen
        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');
            @unlink(public_path('upload/admin_images/' . $data->profile_image)); // para borrar si ya hay imagen en el directorio
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['profile_image'] = $filename;

            $data->save();

            // toastr notification
            $notification = array(
                'message' => 'Foto de Perfil actualizada con éxito',
                'alert-type' => 'success'
            );

        }else{

            // toastr notification
            $notification = array(
                'message' => 'NO hay Foto para actualizar',
                'alert-type' => 'warning'
            );
            
        }

        return redirect()->route('admin.view.profile')->with($notification);

    }





}
