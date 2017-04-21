<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'name'        => 'Day sac',
                'detail'      => 'Day sac gia re',
                'price'       => 100000,
                'category_id' => 5,
                'created_at'  => new DateTime,
            ]
        );
    }
}
