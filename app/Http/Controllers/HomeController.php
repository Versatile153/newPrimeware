<?php

namespace App\Http\Controllers;
use App\Models\Deposit;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       

      $user=Auth::user();
      
      
      
    $earn=  DB::table('deposits')->where('user_id', $user->id)->where('status','approved')->sum('earnings'); 
     $withdrawals = DB::table('withdrawals')
    ->where('user_id', $user->id)
    ->where('status', 'paid')
    ->sum('amount');

$reinvests = DB::table('reinvests')
    ->where('user_id', $user->id)
    ->where('status', 'approved')
    ->sum('amount');

$totalEarnings = $earn - $withdrawals - $reinvests;

     
     
     
     
     


    
    $earn1=  DB::table('deposits')->where('user_id', $user->id)->where('status','approved')->sum('amount');
      $deposit_date = DB::table('deposits')->where('user_id', $user->id)->value('created_at');
      $deposit_date1 = DB::table('reinvests')->where('user_id', $user->id)->value('created_at');

      $deposit1 = DB::table('deposits')->where('status', 'approved')->where('user_id', $user->id)->value('amount');
       $deposit2 = DB::table('reinvests')->where('status', 'approved')->where('user_id', $user->id)->value('amount');

      
    $deposits=Deposit::where('user_id',$user->id)->orderBy('id','desc')->get();
     $deposit=Withdrawal::where('user_id',$user->id)->orderBy('id','desc')->get();

    return view('home')->with('user',$user)->with('deposits',$deposits)
    
    ->with('deposit',$deposit)->with('deposit1',$deposit1)
    ->with('deposit_date',$deposit_date)->with('deposit2',$deposit2)
    ->with('deposit_date1',$deposit_date1)->with('earn',$earn)->with('totalEarnings ',$totalEarnings );
    
    
    
    
    }
}
