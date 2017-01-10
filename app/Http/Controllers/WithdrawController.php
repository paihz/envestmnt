<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Withdraw;
use App\Bank;
use DB;
class WithdrawController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function senaraiKeluar(){
        $userID =Auth::id();
        $data["semuaSenarai"] = DB::table('balances')->where('user_id', $userID)->get();
        $data["bankCheck"] = Bank::where('user_id', $userID)->first();

        return view('pages.withdrawal.list', $data);
    }
    public function sendToWallet($id){
            
    }

    public function create()
    {
        $userID = Auth::id();
        $data["adaWithdrawal"] = DB::table('balances')->where('user_id', '=', $userID )->exists();
       $data["b_name"] = Auth::user()->bank->bankowner;
        $data["b_bank"] = Auth::user()->bank->bankname;
        $data["b_accno"] = Auth::user()->bank->bankaccnum;

        return view('pages.withdrawal.create', $data);
    }

    public function store(Request $request)
    {

    }

    public function view()
    {

    }
}
