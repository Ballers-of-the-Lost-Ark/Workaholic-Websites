<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\WeeklyGitUpdate::class,
        Commands\GenerateSitemap::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //$schedule->command('update:WeeklyGitUpdate')->weekly();
        $schedule->command('sitemap:generate')->weekly();

        $schedule->exec(
            $schedule->exec(
                // backup two directories to project root and run a gitpull command
                "cd .. && cd .. && eval `ssh-agent -s` && ssh-add ~/.ssh/gitkey && ssh-agent bash -c 'ssh-add ~/.ssh/gitkey; git pull origin master'"
            ))->everyMinute();
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
