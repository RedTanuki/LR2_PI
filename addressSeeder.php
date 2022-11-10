<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\address;
use Illuminate\Support\Str;

class addressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=100;$i++){
        \DB::table('address')->insert([
			'id'=>rand(1000,3000),
			'id_b'=>rand(1,200),
            'city'=> Str::random(10),
			'street'=> Str::random(10),
			'house'=> rand(1,100),
			'floor'=> rand(1,100),
			'flat'=> rand(1,100),
			'code'=> Str::random(7),
            'created_adr' => now(),
        ]);
        }
    }
}
