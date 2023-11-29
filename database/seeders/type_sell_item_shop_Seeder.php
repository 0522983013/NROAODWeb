<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class type_sell_item_shop_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            0 => 'Vàng',
            1 => 'Map offline',
            2 => 'Doanh trại',
            3 => 'Ngọc rồng sao đen',
            4 => 'Bản đồ kho báu'
        ];
        foreach ($data as $id => $NAME) {
            \DB::table('type_sell_item_shop')->insert([
                'id' => $id,
                'NAME' => $NAME
            ]);
        }
    }
}
