<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Share;
Use App\User;
use Auth;
use DB;

class ShareController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function deposit(){
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

        return view('pages.share.deposit', $data);
    }
    public function depositSaved(Request $request){
        $this->validate($request, [
            'transfer_to' => 'required',
         //   'time_of_transaction' => 'date_format:"Y-m-d H:i"|required',
            'proof_upload' => 'file|required|mimes:jpeg,jpg,pdf,png|max:4096',
            'notes' => 'string|max:30',
        ]);

        $path = Storage::putFile('doc', $request->file('proof_upload'));

        $share = Share::create([
            'user_id' => Auth::user()->id,
            'saved_url' => $path,
            'total_share' => $request->share,
            'send_to' => $request->transfer_to,
            'transfer_on' => $request->time_of_transaction . ':00',//  "2016-11-28 12:27:00 ",
            'notes' => $request->notes,
        ]);
        $share->save();

        return redirect()->action('ShareController@history')->with('success', "Great.! You have successful make a fund request. We will review your request within 12 Hours");
    }
    public function history(){
        $userID = Auth::id();
        $data["adaShare"] = DB::table('Shares')->where('user_id', '=', $userID )->exists();

        $data['history_fund'] =  Share::where('user_id', '=', $userID )->orderBy('created_at', 'desc')->paginate(12);;// orderBy('created_at', 'desc')->paginate(10);
        return view('pages.share.deposit-history', $data);
    }

}
