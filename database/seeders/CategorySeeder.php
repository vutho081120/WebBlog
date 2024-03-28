<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'Star',
                'category_status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Music',
                'category_status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Beauti & Fashion',
                'category_status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Đời sống',
                'category_status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Sport',
                'category_status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
