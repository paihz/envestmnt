<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = ['user_id', 'ref_agent_name', 'total_deposit', 'total_withdrawal'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
