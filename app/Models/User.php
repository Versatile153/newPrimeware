<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'bitcoin_wallet_address',
        'etherem_wallet_address',
        'usdt_wallet_address',
        'refferal_code',
         'reffered_by'

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function deposits(){
        return $this->hasMany('App\Models\Deposit');
    }

    public function withdrawals(){
        return $this->hasMany('App\Models\Withdrawal');

        
    }



    public function proofs(){
        return $this->hasMany('App\Models\Proof');

        
    }
    
    
    
    
    
     public function reinvests(){
        return $this->hasMany('App\Models\Reinvest');

        
    }
    
    
    
    
    
    
}
