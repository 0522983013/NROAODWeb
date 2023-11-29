<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \DB;
use \Str;
use \Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            AccountSeeder::class,
            PostSeeder::class,
            CmtSeeder::class,
            type_sell_item_shop_Seeder::class,
            type_map_Seeder::class,
            type_item_Seeder::class,
        ]); 
    }
}
