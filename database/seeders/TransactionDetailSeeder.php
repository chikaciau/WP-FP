<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($a=1;$a<=20;$a++){ 
            DB::table('transaction_details')->insert([
                'transaction_id' => rand(1,10),
                'product_id' => rand(1,12),
                'qty' => 2,
                'sub_total' => 20000,
            ]);
        }
    }
}
