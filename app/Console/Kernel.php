<?php

namespace App\Console;
use App\Models\Deposit;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
// In app/Console/Kernel.php

protected function schedule(Schedule $schedule)
{
    $schedule->call(function () {
        $deposits = Deposit::all();

        foreach ($deposits as $deposit) {
            $percentage = 0.008; // replace with the default percentage
            // logic to determine the percentage based on the deposit data

            $this->updateEarnings($deposit->id, $percentage);
        }
    })->everyMinute();
}



    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
