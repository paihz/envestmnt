<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Http\Requests;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('pages.profiles.index');
    }
    public function changePass(){
        return view('pages.profiles.changepass');
    }
    public function changeNewPass(Request $request){
        $user = Auth::user();
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'confirmed|min:6',
        ]);
        if (Hash::check($request->current_password, $user->password)) {
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();

            $request->session()->flash('success', 'Your current password has been changed');
            return back();

        } else {
            $request->session()->flash('error', 'Your current password invalid');
            return back();
        }
    }
}
