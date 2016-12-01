<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;
class InviteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('registerRef');
        $this->middleware('guest')->only('registerRef');
    }
    public function index(){
        return view('pages.referral.index');
    }
    public function registerRef($invitecode){
        $cariInvCode = User::where('invite_code', '=', $invitecode )->first();
      //  dd($cariInvCode->name);
        if ($cariInvCode == null) {
           return redirect('register');
        }

        return view('pages.referral.register', compact('cariInvCode'));
    }

}
