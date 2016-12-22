<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
Use App\User;
use App\Profile;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $data["mobile"] = Auth::user()->profile->phone ;
       // $data["location"] = Auth::user()->profile->location ;
        if(Auth::user()->is_admin){
            return redirect('/admin');
        }
       $dob  = date('Y', strtotime(Auth::user()->birthday));
       $yearnow = Carbon::now()->year;
       $data['age'] =  $yearnow - $dob;
       return view('pages.home.index', $data);
    }
}
