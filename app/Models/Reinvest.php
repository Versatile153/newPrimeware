<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reinvest extends Model
{
    use HasFactory;
    protected $fillable=[
        'plan',
        'amount',
        'payment_method'

    ];
    
    
    
   
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
