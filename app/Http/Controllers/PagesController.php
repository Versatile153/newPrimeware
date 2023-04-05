<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function forex(){
        return view('earn.forex');
    }
    
     public function precious(){
        return view('pricing.precious');
    }
    
     public function oil(){
        return view('pricing.oil');
    }
     public function real(){
        return view('pricing.real');
    }
    public function crypto(){
        return view('earn.crypo');
    }
    public function stock(){
        return view('earn.stock');
    }

    public function stake(){
        return view('earn.stake');
    }

    public function commo(){
        return view('earn.commodity');
    }
    
    public function spot(){
        return view('trade.spot');
    }
    public function bot(){
        return view('trade.bot');
    }
    public function margin(){
        return view('trade.margin');
    }
    public function career(){
        return view('company.career');
    }
    public function story(){
        return view('company.story');
    }
    public function price(){
        return view('pricing.price');
    }
    public function forex_price(){
        return view('pricing.forex_price');
    }
    
    
    
    public function crypto_pricing(){
        return view('pricing.forex_price');
    }
    
    
    
    
}
