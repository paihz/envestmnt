<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
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
       // return view()
    }
}
