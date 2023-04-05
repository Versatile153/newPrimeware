<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Network;
use App\Providers\RouteServiceProvider;
use App\Models\User;


use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use URL;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
             


         

        ]);


       
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $refferalCode=Str::random(10);

       
                
//                 if (isset($data['referred_by'])) {
//     $referred_by = $data['referred_by'];
// } else {
//     $referred_by = null;
// }
    
                
    
    
    
    
        
            
    
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'usdt_wallet_address' => $data['usdt_wallet_address'],
                'etherem_wallet_address' => $data['etherem_wallet_address'],
                'bitcoin_wallet_address' => $data['bitcoin_wallet_address'],
                // 'refferal_code' => $data['refferal_code'],
               
                'reffered_by' => $data['reffered_by'],
                 'refferal_code' => $refferalCode,
    
                
    
    
    
    
                'password' => Hash::make($data['password']),
    
                
            ]);
            
            // $domain=URL::to('/');
            // $url=$domain."/refferal-register".$refferalCode;
        

        



       

        // if(isset($data['refferal_code']->refferal_code)){

        //   $userData=  User::where('refferal_code',$data['refferal_code'])->get();

        //   if(count($userData)>0){

        //     $user_id=User::GetId([
        //         'name' => $data['name'],
        //         'email' => $data['email'],
        //         'usdt_wallet_address' => $data['usdt_wallet_address'],
        //         'etherem_wallet_address' => $data['etherem_wallet_address'],
        //         'bitcoin_wallet_address' => $data['bitcoin_wallet_address'],
        //         'refferal_code' => $data['refferal_code'],
        //         'password' => Hash::make($data['password']),
        //         'refferal_code' => $refferalCode,

        //     ]);

        //     Network::insert([
        //         'refferal_code'=>$data['refferal_code']->refferal_code,
        //         'user_id'=>$user_id,
        //         'parent_id'=>$userData[0]['id'],
        //     ]);

        //   }
        //   else{
        // return redirect('/home');

        //   }













        // }
        // else{
        //     User::insert([
        //         'name' => $data['name'],
        //         'email' => $data['email'],
        //         'usdt_wallet_address' => $data['usdt_wallet_address'],
        //         'etherem_wallet_address' => $data['etherem_wallet_address'],
        //         'bitcoin_wallet_address' => $data['bitcoin_wallet_address'],
        //         'refferal_code' => $data['refferal_code'],
        //         'password' => Hash::make($data['password']),
        //         'refferal_code' => $refferalCode,
        //     ]);
        // }
        // return redirect('/home');
       
    }
}
