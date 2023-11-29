<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \DB;
use \Str;
use \Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accounts')->insert([
            'username' => '123123',
            'password' => Hash::make('admin113'),
            'is_admin' => 1,
            "created_at" => now(),
            "updated_at" => now(),
        ]);
        //
    }

    
}
