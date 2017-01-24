<?php

namespace App\Http\Controllers;

use App\Balance;
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

        $data['all_balance'] = Balance::allBalance();
        $data['all_profit'] = Balance::allProfit();
       return view('pages.home.index', $data);
    }
    public function agreement(){
        return view('pages.profiles.agreement');
    }
}
