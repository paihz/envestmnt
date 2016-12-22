<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Share;
use DB;
class AdminController extends Controller
{
    public function __construct(){
        $this->middleware(['auth', 'admin']);
    }
    public function index(){
        $data['totaluser'] = DB::table('users')->where('is_admin', 0 )->count();
        $data['latestUser'] = DB::table('users')->orderBy('created_at', 'desc')->limit(6)->get();
       // dd($latestList);
       // dd($data);
        return view('pages.admin.index',  $data);
    }
    public function depositIndex(){
        //$data["cariUser"] = User::find();
        $data["depoRequest"] = Share::orderBy('created_at', 'desc')->paginate(20);
        return view('pages.admin.deposit', $data);
    }
    public function depositEdit($id){
        $data["user"] = Share::findOrFail($id);
        return view('pages.admin.depositEdit', $data);
    }
    public function depositUpdate(Request $request, $id){
        $this->validate($request, [
            'status' => 'required',
            'remark' => 'required'
        ]);
        $updateStatus = Share::findOrFail($id);
        $updateStatus->update([
            'status' => $request->status,
            'remark' => $request->remark,
       ]);


        return redirect()->action('AdminController@depositIndex');
    }
}
