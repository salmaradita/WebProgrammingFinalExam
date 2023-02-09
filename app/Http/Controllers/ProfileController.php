<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\App;

class ProfileController extends Controller
{
    public function profile(){
        return view('profile');
    }

    public function profile_update(Request $request){
        $request->validate([
            'first_name' => ['required', 'string', 'max:25', 'alpha'],
            'last_name' => ['required', 'string', 'max:25', 'alpha'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'gender' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed','regex:/^(?=.*[0-9]).+$/'],
            'display_picture_link' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $foto = $request->display_picture_link;
        $nama = date('d-m-yy', strtotime(now())) . '-' . $foto->getClientOriginalName();
        $foto->move('img', $nama);
        User::where('account_id', Auth::user()->account_id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'gender_id' => $request->gender,
            'password' => Hash::make($request->password),
            'display_picture_link' => $nama
        ]);
        return view('success', ['info' => 2]);
    }
}
