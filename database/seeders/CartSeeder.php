<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($a=1;$a<=10;$a++){ 
            DB::table('carts')->insert([
                'product_id' => rand(1,12),
                'user_id' => rand(3,5),
                'qty' => 2,
                'sub_total' => 20000,
            ]);
            }
    }
}
