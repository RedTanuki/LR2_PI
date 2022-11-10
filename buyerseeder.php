<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\buyer;
use Illuminate\Support\Str;

class buyerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i=1;$i<=100;$i++){
        \DB::table('buyer')->insert([
			'id'=>rand(1,201),
            'sname'=> Str::random(10),
			'fname'=> Str::random(10),
            'email'=> Str::random(10).'@gmail.com',
            'block' => rand(0, 1),
			'phone'=> rand(100000,999999),
            'created_buyer' => now(),
        ]);
		}
    }
}
