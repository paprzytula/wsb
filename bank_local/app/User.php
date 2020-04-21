<?php

namespace WSB_BANK;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function deposits() {
        return $this->hasMany('WSB_BANK\Deposit');
    }
    public function withdraws() {
        return $this->hasMany('WSB_BANK\Withdraw');
    }
    public function transfers() {
        return $this->hasMany('WSB_BANK\Transfer');
    }
    public function roles()
       {
        return $this->belongsToMany('WSB_BANK\Role');
       }
}
