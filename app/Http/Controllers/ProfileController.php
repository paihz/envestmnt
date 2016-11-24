<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Profile;
use App\Http\Requests;
use DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userID = Auth::id();
        $data["adaProfile"] = DB::table('profiles')->where('user_id', '=', $userID)->exists();

        return view('pages.profiles.editprofile', $data);
    }

    public function addProfile(Request $request)
    {
        $getID = Auth::id();
        $this->validate($request, [
            'phone' => 'required',
            'location' => 'required|max:255',
        ]);
        $tambahProfile = Profile::create([
            'phone' => $request->phone,
            'location' => $request->location,
            'user_id' => $getID
        ]);
        $tambahProfile->save();

        session()->flash('success', 'you successful add your location and phone number ');
        return back();
    }

    public function editProfile(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'birthdate' => 'date',
            'phone' => 'required',
            'location' => 'required|max:50'
        ]);

        $usermain = Auth::user();
        $userprofile = Auth::user()->profile;
        $usermain->update ([
            'id' => Auth::id(),
            'name' => $request->name,
            'gender' => $request->gender,
            'birthdate' => $request->birthdate,
        ]);
        $userprofile->update ([
           // 'user_id' => 2,//Auth::id(),
            'phone' => $request->phone,
            'location' => $request->location,
        ]);

      //  $userprofile->save();

        session()->flash('success', ' You successful update your profile');

        return back();
    }

    public function changePass()
    {
        return view('pages.profiles.changepass');
    }

    public function changeNewPass(Request $request)
    {
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
