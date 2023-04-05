// <?php

// namespace App\Http\Controllers;

// use App\Models\Deposit;
// use App\Models\User;
// use App\Models\Proof;
// use App\Models\Withdrawal;
// use App\Models\Message;
// use App\Models\Reply;
// use App\Models\Reinvest;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use DB;

// class EarningsController extends Controller
// {
//     public function earnings(){
      
            
//     $total_user=User::all();
//     $total_dep=Deposit::all();
//     $total_with=Withdrawal::all();
//     $total_mess=Message::all();
//         $users = User::with('deposits')->get();

// $transactions = collect([]);

// foreach ($users as $user) {
//     foreach ($user->deposits as $deposit) {
//         $transactions->push([
//             'name' => $user->name,
//             'id' => $deposit->id,
//             'email'=>$user->email,
//             'amount' => $deposit->amount,
//             'type' => 'deposit',
//             'created_at'=>$deposit->created_at,
//             'earnings'=>$deposit->earnings,
//              'status'=>$deposit->status,
//              'user_id'=>$deposit->user_id
//         ]);
//     }
    
// $transactions = $transactions->sortByDesc('created_at');
//     // foreach ($user->withdrawals as $withdrawal) {
//     //     $transactions->push([
//     //         'name' => $user->name,
//     //         'amount' => $withdrawal->amount,
//     //         'type' => 'withdrawal',
//     //     ]);
//     // }
// }

// return view('dashboard.rate', ['transactions' => $transactions])->with('total_user',$total_user)
// ->with('total_dep',$total_dep)->with('total_with',$total_with)->with('total_mess',$total_mess);

        


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

//     }
    
    
  
  
  
  
  
  
  
  
//   public function increaseEarnings(Request $request,$id)
//     {
//         $percentage = $request->input('percentage'); // Get the selected percentage from the request
        
//         $earnings = DB::table('deposits')->pluck('earnings')->first(); // Retrieve the current earnings from the database
        
//         $newEarnings = $earnings + ($percentage * $earnings / 100); // Calculate the new earnings
        
//         DB::table('deposits')->update(['earnings' => $newEarnings]); // Update the earnings in the database
//         return view('dashboard.show')->with('newEarnings',$newEarnings)->with('earnings',$earnings);
        
//         // Redirect back to the blade file with a success message
//     }

//   public function autoIncreaseEarnings()
// {
//     // Fetch the current user
//     $user = Auth::user();

//     // Fetch all deposits for the current user
//     $deposits = Deposit::where('user_id', $user->id)->get();

//     // Loop through the deposits and increment the earnings for each deposit
//     foreach ($deposits as $deposit) {
//         // Fetch the selected percentage value for this deposit
//         $selectedPercentage = $deposit->selected_percentage;

//         // Increment the earnings for this deposit based on the selected percentage value
//         $deposit->earnings += ($deposit->amount * $selectedPercentage) / 100;

//         // Save the updated deposit in the database
//         $deposit->save();
//     }
// }

//     }

  
    
    
     
    
    
    
    
    

// }
