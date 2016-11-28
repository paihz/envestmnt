<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
   protected $fillable = ['total_share', 'send_to', 'saved_url','transfer_on','notes','remark','user_id','status'];

   public function user(){
       return $this->belongsTo(User::class);
   }
}
