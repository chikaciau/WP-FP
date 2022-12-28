<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($a=1;$a<=10;$a++){ 
            DB::table('transactions')->insert([
                'user_id' => rand(3,5),
                'total' => 200000,
                'created_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
