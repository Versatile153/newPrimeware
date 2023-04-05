<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class UpdateDepositBalance extends Command
{
    protected $signature = 'update:deposit-balance';

    protected $description = 'Update user deposit balance daily.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $users = Deposit::all();
        $amount = 2; // Set the fixed amount to add to each user's account
        
        foreach ($users as $user) {
            $user->amount += $amount;
            $user->save();
        }
        
        $this->info('User deposit balances updated successfully!');
    }
}