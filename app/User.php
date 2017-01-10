<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'gender', 'invite_code', 'invite_id', 'total_wallet'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }
    public function bank(){
        return $this->hasOne(Bank::class);
    }
    public function share(){
        return $this->hasMany(Share::class);
    }
    public function balance(){
        return $this->hasOne(Balance::class);
    }
}
