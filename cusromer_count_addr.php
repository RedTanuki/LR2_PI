<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\buyer;
use App\Models\address;
use Illuminate\Support\Facades\DB;

class cusromer_count_addr extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'customer:count-addresses {id_b}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Count addresses';

    /**
     * Execute the console command.
     *+
     * @return int
     */
	 
	 public function __construct()
    {
        parent::__construct();
    }
	
    public function handle()
    {
		$id_b = $this->argument('id_b');
		$userID = \DB::table('address')->select('id_b')->where('id_b', '=', $id_b)->count();
		$this->info('Адресов у покупателя с ID ' . $id_b . ': ' . $userID);
    }
}
