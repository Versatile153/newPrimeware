<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;
class DepositController extends Controller
{
    public function add(Request $request, $id)
    {
        $deposit = Deposit::find($id);
        $percentage = $request->input('percentage');

        $this->updateEarnings($deposit->id, $percentage);

        return redirect()->back();
    }

    private function updateEarnings($depositId, $percentage)
    {
        $deposit = Deposit::find($depositId);
        $earnings = $deposit->earnings;
        $amount = $deposit->amount * ($percentage / 100);
        $deposit->earnings = $earnings + $amount;
        $deposit->save();
    }
}
