<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\User;
use App\Models\Proof;
use App\Models\Withdrawal;
use App\Models\Message;
use App\Models\Reply;
use App\Models\Reinvest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class DashboardController extends Controller
{
    public function help(){
        return view('dashboard.help');

    }
    
    
     public function reinvest(){
         
           $user=Auth::user();
           
             $earn=  DB::table('deposits')->where('user_id', $user->id)->where('status','approved')->sum('earnings');
             $deposit2 = DB::table('reinvests')->where('status', 'approved')->where('user_id', $user->id)->value('amount');
            $deposit_date1 = DB::table('reinvests')->where('user_id', $user->id)->value('created_at');
      $total_earn=  DB::table('withdrawals')->where("user_id",$user->id)->where('status','paid')->sum('amount')  ;                                
            $deposit_date = DB::table('deposits')->where('user_id', $user->id)->value('created_at');

      $deposit1 = DB::table('deposits')->where('status', 'approved')->where('user_id', $user->id)->value('amount');
        return view('dashboard.reinvest')->with('deposit1',$deposit1)
        ->with('deposit_date',$deposit_date)->with('earn',$earn)->with('user',$user)->with('deposit2',$deposit2)->with('deposit_date1',$deposit_date1);

    }
    
    
    
    
    
    
     public function reinv(Request $request){
         $deposits=new Reinvest();
        $deposits->plan=$request->input('plan');
        $deposits->amount=$request->input('amount');
        $deposits->payment_method=$request->input('payment_method');
      
        $deposits->user_id=auth()->user()->id;
        $deposits->save();
         return redirect('view_deposit');

    }
    
    
    

    public function earn(){
           
          
      $user=Auth::user();
      
      
      
     


    $earn=  DB::table('deposits')->where('user_id', $user->id)->where('status','approved')->sum('earnings');
           $deposit_date1 = DB::table('reinvests')->where('user_id', $user->id)->value('created_at');
          $deposit2 = DB::table('reinvests')->where('status', 'approved')->where('user_id', $user->id)->value('amount');
            $deposit_date = DB::table('deposits')->where('status', 'approved')->where('user_id', $user->id)->value('created_at');

      $deposit1 = DB::table('deposits')->where('status', 'approved')->where('user_id', $user->id)->value('amount');
          $count =DB::table('deposits')->where('status','approved')->sum('amount')*0.000000056;
         
    $deposits=Deposit::where('user_id',$user->id)->orderBy('id','asc')->get();

        return view('dashboard.earn')->with('user',$user)->with('deposits',$deposits)
        ->with('count',$count)->with('earn',$earn)
        ->with('deposit1',$deposit1)->with('deposit_date',$deposit_date)->with('deposit_date1',$deposit_date1)->with('deposit2',$deposit2);
        
    }

    public function ref(){
        $user=Auth::user();
          $depo=Deposit::all();
           $proof=Proof::where('user_id',$user->id)->orderBy('id','asc')->get();
         $user_ref=   DB::table('users')->where('reffered_by',$user->refferal_code)->count();
        return view('dashboard.referal')->with('depo',$depo)->with('user',$user)->with('proof',$proof)->with('user_ref',$user_ref);
        
    }

    // public function withdraw(){
    //     return view('dashboard.withdraw');
        
    // }

    
    public function view(){
        return view('dashboard.withdraw_view');
        
    }
    public function dash(){
        return view('dashboard.dash');
        
    }
    public function deposit(){
        // return Deposit::all();
        return view('dashboard.deposit');
        
    }
    
    public function view_deposit(){
         $user=Auth::user();
    $deposits=Deposit::where('user_id',$user->id)->orderBy('id','asc')->get();

    // return view('home1')->with('user',$user)->with('deposits',$deposits);
        return view('dashboard.view_deposit')->with('user',$user)->with('deposits',$deposits);
        
    }
    
    public function set_up(){
        return view('dashboard.setup_payment');
        
    }

    public function profile(){
        return view('dashboard.profile');
        
    }
    public function payment_account(){
        return view('dashboard.payment_account');
        
    }
    public function security(){

       
        return view('dashboard.security');
        
    }

    public function avatar(Request $request){
        // dd($request->file);
        $request->file->store('images','public');

       
     
        
    }
    
    public function admin(){
        $users=User::all();
        $mess=Message::all();
        $depo=Deposit::all();
        $withd=Withdrawal::all();
        return view('dashboard.admin')->with('users',$users)->with('withd',$withd)->with('depo',$depo)->with('mess',$mess);
        
    }
    
     public function all_deposits(){
 $users=User::all();
        $depo=Deposit::all();
        $withd=Withdrawal::all();
       
        return view('dashboard.all_deposits')->with('users',$users)->with('withd',$withd)->with('depo',$depo);
        
    }
    
  
    public function all_users(){
       
         
        
          $earn=  DB::table('deposits')->where('status','approved')->sum('earnings'); 
         $deposit2 = DB::table('reinvests')->where('status', 'approved')->value('amount');
            $deposit_date1 = DB::table('reinvests')->value('created_at');
             $deposit_date = DB::table('deposits')->value('created_at');

      $deposit1 = DB::table('deposits')->where('status', 'approved')->value('amount');
    $deposits = Deposit::orderBy('id', 'desc')->get();

      
          $withd=Withdrawal::orderBy('id','desc')->get();
          
         
        
        return view('dashboard.all_users')->with('deposits',$deposits)
        ->with('withd',$withd)->with('deposit2',$deposit2)
        
        ->with('deposit_date1',$deposit_date1)->with('deposit1',$deposit1)
        ->with('deposit_date',$deposit_date)->with('earn',$earn);
    }
  







       
   
    
    
    
    
    
    
    public function trx_id(){
 $users=User::all();
        $depo=Deposit::all();
        $withd=Withdrawal::all();
                $trxx=Proof::all();

        return view('dashboard.trx_id')->with('users',$users)->with('withd',$withd)->with('depo',$depo)->with('trxx',$trxx);
        
    }
    
    
    
    
    
    
    public function loadregister($id){
    //  $ref=   $_GET['id'];
       

       return view('referal_register');
       
       
       
       
        
    }
    
   
    public function message(){
        
         $user=Auth::user();
        
        
          
         $myMessages=Message::where('user_id',$user->id)->orderBy('id','desc')->get();
          $my_mess=Reply::where('user_id',$user->id)->orderBy('id','asc')->get();
        //  $user=Auth::user();
        return view('dashboard.message')->with('user',$user)->with('myMessages',$myMessages)->with('my_mess',$my_mess);
        
    }
    
    public function mess(Request $request){
        $user=Auth::user()->id;
        $mess=new Message();
        $mess->email=$request->input('email');
        $mess->message=$request->input('message');
        
        $mess->user_id=auth()->user()->id;
        $mess->save();
        return redirect()->back();
    }
    
    
    public function admin_mess(){
   
       
  $messages=Message::all();
       return view('dashboard.admin_message')->with('messages',$messages);
       
       
       
       
        
    }
    
    public function reply($id){
   
       $mess=Message::find($id);
 
        return view('dashboard.reply')->with('mess',$mess);
       
       
       
        
    }
    
    
    public function repl(Request $request){
   
      Reply::create($request->all());
      
        $user=Auth::user();
          $my_mess=Reply::where('user_id',$user->id)->orderBy('id','asc')->get();
        return redirect('/admin_mess');
       
       
        
    }
    
    
    
    
    
    
    
    
    
     public function my_mess(){
         $user=Auth::user();
          $my_mess=Reply::where('user_id',$user->id)->orderBy('id','asc')->get();
        return view('dashboard.my_mess',compact('my_mess'));

    }
    
    
    
    
    
    
    
    
     public function admin_new(){
         
    $total_user=User::all();
    $total_dep=Deposit::all();
    $total_with=Withdrawal::all();
    $total_mess=Message::all();
        $users = User::with('deposits')->get();

$transactions = collect([]);

foreach ($users as $user) {
    foreach ($user->deposits as $deposit) {
        $transactions->push([
            'name' => $user->name,
            'id' => $deposit->id,
            'email'=>$user->email,
            'amount' => $deposit->amount,
            'type' => 'deposit',
            'created_at'=>$deposit->created_at,
            'earnings'=>$deposit->earnings,
             'status'=>$deposit->status,
             'user_id'=>$deposit->user_id
        ]);
    }
    
$transactions = $transactions->sortByDesc('created_at');
    // foreach ($user->withdrawals as $withdrawal) {
    //     $transactions->push([
    //         'name' => $user->name,
    //         'amount' => $withdrawal->amount,
    //         'type' => 'withdrawal',
    //     ]);
    // }
}

return view('dashboard.admin_new', ['transactions' => $transactions])->with('total_user',$total_user)
->with('total_dep',$total_dep)->with('total_with',$total_with)->with('total_mess',$total_mess);

        


    }
    
    
    
    
    
    
    
    
    
    
     public function latest_with(){
         
    $total_user=User::all();
    $total_dep=Deposit::all();
    $total_with=Withdrawal::all();
    $total_mess=Message::all();
        $users = User::with('withdrawals')->get();

$transactions = collect([]);

foreach ($users as $user) {
    foreach ($user->withdrawals as $deposit) {
        $transactions->push([
            'name' => $user->name,
            'id' => $deposit->id,
            'email'=>$user->email,
            'amount' => $deposit->amount,
            'type' => 'withdrawals',
            'created_at'=>$deposit->created_at,
            'withdrwa_method'=>$deposit->withdrwa_method,
             'status'=>$deposit->status,
             ' account_name'=>$deposit-> account_name
        ]);
    }
    
$transactions = $transactions->sortByDesc('created_at');
    // foreach ($user->withdrawals as $withdrawal) {
    //     $transactions->push([
    //         'name' => $user->name,
    //         'amount' => $withdrawal->amount,
    //         'type' => 'withdrawal',
    //     ]);
    // }
}

return view('dashboard.latest_with', ['transactions' => $transactions])->with('total_user',$total_user)
->with('total_dep',$total_dep)->with('total_with',$total_with)->with('total_mess',$total_mess);

        


    }
    
    
    
    
    
    
    
    
    
    
    
    
    

}
