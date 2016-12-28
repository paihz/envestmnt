<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;
class Balance extends Model
{
    protected $fillable = ['all_investment', 'monthly_profit', 'balance', 'user_id', 'package'];

   public static function all_balance(){
       $userID = Auth::id();
       $checking = DB::table('balances')->where('user_id',  $userID )->exists();
       //dd($checking);
       if(!$checking){
           return 0;
       }else{
         return  Auth::user()->balance->sum('balance');
       }
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
