<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Deposit;
use App\Models\Profile;
use App\Models\Withdrawal;
use DB;



use App\Models\User;
use App\Models\Proof;

use App\Models\Security;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PayMentController extends Controller
{
    public function store(){
        return 1234;
    }
    public function withdraw(){
         $user=Auth::user();
          $earn=  DB::table('deposits')->where('user_id', $user->id)->where('status','approved')->sum('earnings');
         $with =DB::table('withdrawals')->where('user_id',$user->id)->where('status','paid')->sum('amount');
        
        return view('withdrawals.withdraw')->with('user',$user)->with('with',$with)->with('earn',$earn);
    }

    public function view(){
        
         $user=Auth::user();
    $deposits=Withdrawal::where('user_id',$user->id)->orderBy('id','asc')->get();
        return view('withdrawals.view')->with('user',$user)->with('deposits',$deposits);
    }

    public function deposit(){
        $deposits= Deposit::all();
        return view('deposit.depo1')->with('deposits',$deposits);
    }

    
    public function new_deposit(){
       $user=auth()->user();
        return view('deposit.new_deposit')->with('user',$user);
    }


    public function plan(Request $request){
        $deposits=new Deposit();
        $deposits->plan=$request->input('plan');
        $deposits->amount=$request->input('amount');
        $deposits->payment_method=$request->input('payment_method');
        $deposits->user_id=auth()->user()->id;
        $deposits->save();


        // Deposit::create($request->all());
        
        return redirect('/new_deposit');
    }

    public function set_up(Request $request){
    
        Account::create($request->all());
        
        return redirect('/deposit');
    }

    public function profile(Request $request){
       
        Profile::create($request->all());
        // return 'created';
        return redirect('/home');
    }

    public function security(Request $request){
        
      Security::create($request->all());
        
        return redirect('/home');
    }

    public function money_withdrawal(Request $request){
       
       $user=auth()->user()->id;
        $deposits=new Withdrawal();
        $deposits->amount=$request->input('amount');
        $deposits->withdrwa_method=$request->input('withdrwa_method');
         $deposits->account_name=$request->input('account_name');
        
        $deposits->user_id=$user;
        $deposits->save();
        // Withdrawal::create($request->all());
        // return redirect('/home');
        return redirect('/view');
    }
     public function proof(Request $request){
         
           $user=Auth::user();
          $proof=new Proof();
          $proof->trx_id=$request->input('trx_id');
          $proof->user_id=$user->id;
          $proof->save();
        // Proof::create([
        //     'trx_id'=>,
        //     'user_id'=>$user->id
        //     ]);
        return redirect('/view_deposit');
    }
 public function approve(Request $request)
  {
    // $request->validate([
    //   "date" => "required|date",
    //   "id" => "required"
    // ]);

    $status = Deposit::find($request->id);
    $status->status = 'approved';
    $status->save();
    return redirect()->back();
  }


 public function revoke(Request $request, $id)
  {

    $status = Deposit::find($id);
    $status->status = 'pending';
    // $contribtion->user_id=auth()->user()->id;
    $status->save();

    return redirect()->back();
  }


    public function all_with(){
        
       $users=User::all();
        $depo=Deposit::all();
        $withd=Withdrawal::all();
        return view('dashboard.all_with')->with('users',$users)->with('withd',$withd)->with('depo',$depo);
      }




//withdrawal approval and revoke request

public function revoke_with(Request $request)
  {
    

    $status = Withdrawal::find($request->id);
    $status->status = 'paid';
    $status->save();
    return redirect()->back();
  }




 public function appr_with(Request $request, $id)
  {

    $status = Withdrawal::find($id);
    $status->status = 'pending';
    // $contribtion->user_id=auth()->user()->id;
    $status->save();

    return redirect()->back();
  }
  
  
  
  
   public function trxx(){
       
        $users=User::all();
        //  $user=Auth::user();
    // $deposits=Withdrawal::where('user_id',$user->id)->orderBy('id','asc')->get();
       $depo=Deposit::all();
          $withd=Withdrawal::all();
        
        return view('dashboard.trxx')->with('users',$users)->with('withd',$withd)->with('depo',$depo);
    }
  
  
  
    public function show($id){
        $user=Auth::user();
         
        //  $user=User::find($id);
          $earn=  DB::table('deposits')->where('user_id', $user->id)->where('status','approved')->sum('earnings'); 
         $deposit2 = DB::table('reinvests')->where('status', 'approved')->where('user_id', $user->id)->value('amount');
            $deposit_date1 = DB::table('reinvests')->where('user_id', $user->id)->value('created_at');
             $deposit_date = DB::table('deposits')->where('user_id', $user->id)->value('created_at');

      $deposit1 = DB::table('deposits')->where('status', 'approved')->where('user_id', $user->id)->value('amount');
    $deposits=Deposit::where('user_id',$user->id)->orderBy('id','asc')->get();
      
          $withd=Withdrawal::where('user_id',$user->id)->orderBy('id','asc')->get();
          
           $proof=Proof::where('user_id',$user->id)->orderBy('id','asc')->get();
        
        return view('dashboard.show')->with('user',$user)->with('deposits',$deposits)
        ->with('withd',$withd)->with('proof',$proof)->with('deposit2',$deposit2)
        
        ->with('deposit_date1',$deposit_date1)->with('deposit1',$deposit1)
        ->with('deposit_date',$deposit_date)->with('earn',$earn);
    }
  





















    public function ref_count(){
         $user=auth()->user();
         $dep=User::where('reffered_by',$user->refferal_code)->orderBy('id','asc')->get();
     $user=   DB::table('users')->where('reffered_by',$user->refferal_code)->count();
     return $user;
       
         
    
        
    }
    
    
    
    public function add1(Request $request, $id)
  {

$status = Deposit::find($id);

if ($status) {
    $earn = $status->amount;

    $status->amount = $earn ;

    $earn1 = $status->earnings;

    $status->earnings = ($earn * 0.008) + floatval($earn1);

    $status->save();
}

return redirect()->back();

  }
  
     public function add2(Request $request, $id)
  {

$status = Deposit::find($id);

if ($status) {
    $earn = $status->amount;

    $status->amount = $earn ;

    $earn1 = $status->earnings;

    $status->earnings = ($earn * 0.016) + floatval($earn1);

    $status->save();
}

return redirect()->back();

  }
  
  
  
  
  
  
  
  
  
     public function add3(Request $request, $id)
  {

$status = Deposit::find($id);

if ($status) {
    $earn = $status->amount;

    $status->amount = $earn ;

    $earn1 = $status->earnings;

    $status->earnings = ($earn * 0.024) + floatval($earn1);

    $status->save();
}

return redirect()->back();

  }
  
  
  
  
  
  
  
  
  
     public function add4(Request $request, $id)
  {


    $status = Deposit::find($id);
    $earn=$status->amount;
    $status->amount=$earn;
    $earn1=$status->earnings;
    $status->earnings=($earn*0.032)+$earn1;
   
    
    $status->save();

    return redirect()->back();
  }
  
  
  
  
  
    
    
     public function add5(Request $request, $id)
  {


    $status = Deposit::find($id);
    $earn=$status->amount;
    $status->amount=$earn;
    $earn1=$status->earnings;
    $status->earnings=($earn*0.012)+$earn1;
   
    
    $status->save();

    return redirect()->back();
  }
  
    
    
    
    
    
    
    
  
     public function add6(Request $request, $id)
  {


    $status = Deposit::find($id);
    $earn=$status->amount;
    $status->amount=$earn;
    $earn1=$status->earnings;
    $status->earnings=($earn*0.018)+$earn1;
   
    
    $status->save();

    return redirect()->back();
  }
    
    
    
    
    
    
    
    
     public function add7(Request $request, $id)
  {


    $status = Deposit::find($id);
    $earn=$status->amount;
    $status->amount=$earn;
    $earn1=$status->earnings;
    $status->earnings=($earn*0.021)+$earn1;
   
    
    $status->save();

    return redirect()->back();
  }
  
    
    
    
    
    
    
    
    
     public function add8(Request $request, $id)
  {


    $status = Deposit::find($id);
    $earn=$status->amount;
    $status->amount=$earn;
    $earn1=$status->earnings;
    $status->earnings=($earn*0.028)+$earn1;
   
    
    $status->save();

    return redirect()->back();
  }
  
    
    
    
    
    
    
     public function add9(Request $request, $id)
  {


    $status = Deposit::find($id);
    $earn=$status->amount;
    $status->amount=$earn;
    $earn1=$status->earnings;
    $status->earnings=($earn*0.034)+$earn1;
   
    
    $status->save();

    return redirect()->back();
  }
  
    
    
    
     
     public function add10(Request $request, $id)
  {


    $status = Deposit::find($id);
    $earn=$status->amount;
    $status->amount=$earn;
    $earn1=$status->earnings;
    $status->earnings=($earn*0.038)+$earn1;
   
    
    $status->save();

    return redirect()->back();
  }
  
    
    
    
    
    
     
     public function add11(Request $request, $id)
  {


    $status = Deposit::find($id);
    $earn=$status->amount;
    $status->amount=$earn;
    $earn1=$status->earnings;
    $status->earnings=($earn*0.031)+$earn1;
   
    
    $status->save();

    return redirect()->back();
  }
  
    
    
    
     
     public function add12(Request $request, $id)
  {


    $status = Deposit::find($id);
    $earn=$status->amount;
    $status->amount=$earn;
    $earn1=$status->earnings;
    $status->earnings=($earn*0.023)+$earn1;
   
    
    $status->save();

    return redirect()->back();
  }
  
    
    
    
    
    
    
    
    
    
    
  
  
     public function transfer()
  {

 $user=Auth::user();
      
      
      
     


    $earn=  DB::table('deposits')->where('user_id', $user->id)->where('status','approved')->sum('earnings');
           $deposit_date1 = DB::table('reinvests')->where('user_id', $user->id)->value('created_at');
          $deposit2 = DB::table('reinvests')->where('status', 'approved')->where('user_id', $user->id)->value('amount');
            $deposit_date = DB::table('deposits')->where('status', 'approved')->where('user_id', $user->id)->value('created_at');

      $deposit1 = DB::table('deposits')->where('status', 'approved')->where('user_id', $user->id)->value('amount');
          $count =DB::table('deposits')->where('status','approved')->sum('amount')*0.000000056;
         
    $deposits=Deposit::where('user_id',$user->id)->orderBy('id','asc')->get();

        return view('dashboard.transfer')->with('user',$user)->with('deposits',$deposits)
        ->with('count',$count)->with('earn',$earn)
        ->with('deposit1',$deposit1)->with('deposit_date',$deposit_date)->with('deposit_date1',$deposit_date1)->with('deposit2',$deposit2);
        
  
  }
  
  
    
    
  public function tran(Request $request)
{
    $user = Auth::user();
    $recipient_id = $request->user_id;
    $amount = $request->amount;

    // Calculate the current total earnings for the user
    $current_earnings = DB::table('deposits')
        ->where('user_id', $user->id)
        ->where('status', 'approved')
        ->sum('earnings')
        - DB::table('reinvests')
            ->where('user_id', $user->id)
            ->sum('amount')
        - DB::table('withdrawals')
            ->where('user_id', $user->id)
            ->where('status', 'paid')
            ->sum('amount');

    // Retrieve the sender's Deposit object and update their earnings
    $sender_deposit = Deposit::where('user_id', $user->id)->first();
    if ($sender_deposit) {
        $sender_deposit->earnings = $sender_deposit->earnings - $amount;
        $sender_deposit->save();
    }

    // Retrieve the recipient's Deposit object and update their earnings
    $recipient_deposit = Deposit::where('user_id', $recipient_id)->first();
    if ($recipient_deposit) {
       $recipient_deposit->earnings = intval($recipient_deposit->earnings) + $amount;

        $recipient_deposit->save();
    }

    // Calculate the new total earnings for the user
    $new_earnings = $current_earnings - $amount;

    // Update the user's total earnings in the database
    $user_deposit = Deposit::where('user_id', $user->id)->first();
    if ($user_deposit) {
        $user_deposit->earnings = $new_earnings;
        $user_deposit->save();
    }

    return redirect('/earn');
}

}
