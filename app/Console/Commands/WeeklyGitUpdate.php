<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WeeklyGitUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:WeeklyGitUpdate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Weekly git pulls from Github';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
