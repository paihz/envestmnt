<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    protected $fillable = ['all_investment', 'monthly_profit', 'balance', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
