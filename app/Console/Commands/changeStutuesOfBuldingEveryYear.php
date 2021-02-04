<?php

namespace App\Console\Commands;
use App\Bu;
use Illuminate\Console\Command;

class changeStutuesOfBuldingEveryYear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'changestutues:bu';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'change stutues of bulding every year';

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
        Bu::where('bu_status',0)->update(['bu_status'=>1]);
      dd("hhhhhhhhhhhhhh");
    }
}
