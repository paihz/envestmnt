<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Withdraw;
use App\Bank;
class WithdrawController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
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
