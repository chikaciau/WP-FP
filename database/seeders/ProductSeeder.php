<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = ['Food', 'Electronics', 'Beauty', 'Pet'];
        for($a=1;$a<=12;$a++){ 
            DB::table('products')->insert([
                'name' => "Product $a",
                'category' => $category[rand(0, 3)],
                'Detail' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Iusto natus accusamus, veritatis corporis expedita eveniet ab esse. Possimus, minima! 
                            Labore reprehenderit quo aliquam ipsam voluptates excepturi recusandae porro ut eveniet?",
                'price' => 10000,
                'photo' => "product-$a.jpg"
            ]);
        }
    }
}
