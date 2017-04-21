<?php
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'name'       => 'Dien Thoai',
                'status'     => 0,
                'created_at' => new DateTime,
            ],
            [
                'name'       => 'May Tinh',
                'status'     => 0,
                'created_at' => new DateTime,
            ],
            [
                'name'       => 'May In',
                'status'     => 0,
                'created_at' => new DateTime,
            ],
            [
                'name'       => 'Linh Kien',
                'status'     => 0,
                'created_at' => new DateTime,
            ],
            [
                'name'       => 'Iphone',
                'status'     => 2,
                'created_at' => new DateTime,
            ],
            [
                'name'       => 'SamSung',
                'status'     => 2,
                'created_at' => new DateTime,
            ],
            [
                'name'       => 'Asus',
                'status'     => 3,
                'created_at' => new DateTime,
            ],
            [
                'name'       => 'Dell',
                'status'     => 3,
                'created_at' => new DateTime,
            ],
        ]);
    }
}
