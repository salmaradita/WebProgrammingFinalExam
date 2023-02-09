<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{

    public function account_maintenance(){
        $user = User::get();
        return view('account_maintenance', ['user' => $user]);
    }

    public function account_role($id){
        $user = User::where('account_id',$id)->first();
        return view('account_role', ['user' => $user]);
    }

    public function account_update(Request $request){
        User::where('account_id',$request->account_id)->update([
            'role_id' => $request->role
        ]);
        return redirect()->route('account_maintenance');
    }

    public function account_del($id){
        User::where('account_id',$id)->delete();
        return back();
    }

    function logout(){
        Auth::logout();
        return redirect()->route('success-logout');
    }
}
