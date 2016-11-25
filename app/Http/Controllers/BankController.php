<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
use DB;
class BankController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $data['banklist'] = [
            'AFFIN BANK' => 'AFFIN BANK BERHAD',
            'AL RAJHI BANKING' => 'AL RAJHI BANKING AND INVESTMENT CORPORATION (MALAYSIA) BHD',
            'ALLIANCE BANK MALAYSIA BERHAD' => 'ALLIANCE BANK MALAYSIA BERHAD',
            'AMBANK (M) BERHAD' => 'AMBANK (M) BERHAD',
            'BANK ISLAM MALAYSIA BERHAD' => 'BANK ISLAM MALAYSIA BERHAD',
            'BANK RAKYAT' => 'BANK KERJASAMA RAKYAT MALAYSIA BERHAD (BANK RAKYAT)',
            'BANK MUAMALAT MALAYSIA BERHAD ' => 'BANK MUAMALAT MALAYSIA BERHAD ',
            'BANK SIMPANAN NASIONAL' => 'BANK SIMPANAN NASIONAL',
            'BANK PERTANIAN MALAYSIA BERHAD-AGROBANK' => 'BANK PERTANIAN MALAYSIA BERHAD-AGROBANK',
            'CIMB BANK BERHAD' => 'CIMB BANK BERHAD',
            'HONG LEONG BANK BERHAD' => 'HONG LEONG BANK BERHAD',
            'HSBC BANK MALAYSIA BERHAD' => 'HSBC BANK MALAYSIA BERHAD',
            'OCBC BANK (MALAYSIA) BERHAD' => 'OCBC BANK (MALAYSIA) BERHAD',
            'MAYBANK' => 'MALAYAN BANKING BERHAD (MAYBANK)',
            'PUBLIC BANK BERHAD' => 'PUBLIC BANK BERHAD',
            'RHB BANK BERHAD' => 'RHB BANK BERHAD'
        ];
        $userID = Auth::id();
        $data["adaUserID"] = DB::table('banks')->where('user_id', '=', $userID )->exists();
        return view('pages.bank.index', $data);
    }
    public function simpanBank(Request $request)
    {
        $this->validate($request, [
            'bankowner' => 'required|min:5',
            'bankname' => 'required',
            'bankaccnum' => 'required|min:6|max:20'



        ]);

        $bankdetail = Bankaccount::create([
            'bankowner' => $request->bankowner,
            'bankname' => $request->bankname,
            'bankaccnum' => $request->bankaccnum,
            'swiftcode' => $request->swiftcode,
            'user_id' => Auth::user()->id]);

        $bankdetail->save();

        session()->flash('message', 'Nice, You have been add new bank detail');
        return redirect()->action('BankaccountController@index');
    }
}
