<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class type_item_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            0 => "Áo",
            1 => "Quần",
            2 => "Găng",
            3 => "Giày",
            4 => "Rađa",
            5 => "Cải trang - avatar",
            6 => "Đậu thần",
            7 => "Sách kỹ năng",
            8 => "Vật phẩm nhiệm vụ",
            9 => "Vàng",
            10 => "Ngọc",
            11 => "Vật phẩm đeo trên lưng",
            12 => "Ngọc rồng các loại",
            13 => "Bùa",
            14 => "Đá nâng cấp",
            15 => "Mảnh đá vụn",
            16 => "Bình nước phép",
            17 => ".",
            18 => ".",
            19 => ".",
            20 => ".",
            21 => ".",
            22 => "Vệ tinh",
            23 => "Thú cưỡi mới",
            24 => "Thú cưỡi cũ",
            25 => "Rađa dò ngọc rồng Namếc",
            26 => ".",
            27 => "Tạp chủng",
            28 => "Cờ pk",
            29 => "Item time",
            30 => "Sao pha lê",
            31 => "Bánh trung thu, bánh tết",
            32 => "Giáp tập luyện",
            33 => "Mảnh sưu tập",
            34 => "Hồng ngọc",
            75 => "NRO AOD",
        ];
        foreach ($data as $id => $NAME) {
            \DB::table('type_item')->insert([
                'id' => $id,
                'NAME' => $NAME
            ]);
        }
    }
}
