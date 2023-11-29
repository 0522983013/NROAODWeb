<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class task_main_template_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["id" => "0", "NAME" => "Nhiệm vụ đầu tiên", "detail" => "Chi tiết nhiệm vụ"],
            ["id" => "1", "NAME" => "Nhiệm vụ tập luyện", "detail" => "Mộc nhân được đặt nhiều tại %1, ngay trước nhà ông %2 Hãy đánh ngã 20 mộc nhân, sau đó quay về nhà báo cáo với ông %2 Để đánh, hãy chạm nhanh 2 lần vào đối tượng Thưởng 1000 sức mạnh Thưởng 1000 tiềm năng Thưởng 200tr vàng"],
            ["id" => "2", "NAME" => "Nhiệm vụ tìm thức ăn", "detail" => "Tìm đến %3, tiêu diệt bọn quái %4 và nhặt về 10 đùi gà Thưởng 1500 sức mạnh Thưởng 1500 tiềm năng Thưởng 300tr vàng Học được kỹ năng bay"],
            ["id" => "3", "NAME" => "Tìm kiếm sao băng", "detail" => "Đi khám phá xem vật thể lạ vừa rơi xuống hành tinh Thưởng 2000 sức mạnh Thưởng 2000 tiềm năng Thưởng 400tr vàng"],
            ["id" => "4", "NAME" => "Nhiệm vụ khó khăn", "detail" => "Đi tới %6, tiêu diệt lũ %4 mẹ Thưởng 2500 sức mạnh Thưởng 2500 tiềm năng Thưởng 500tr vàng"],
            ["id" => "5", "NAME" => "Nhiệm vụ gia tăng sức mạnh", "detail" => "Hãy đi tập luyện để gia tăng sức mạnh Thưởng 3000 sức mạnh Thưởng 3000 tiềm năng Thưởng 500tr vàng"],
            ["id" => "6", "NAME" => "Nhiệm vụ trò chuyện", "detail" => "Đi tới trạm tàu vũ trụ, trò chuyện với %7"],
            ["id" => "7", "NAME" => "Nhiệm vụ giải cứu", "detail" => "Lên đường tiêu diệt bọn %9, giải cứu %8 Quay về báo cáo với %7 để nhận thưởng"],
            ["id" => "8", "NAME" => "Nhiệm vụ ân nhân xuất sắc", "detail" => "Về %1, gặp và trò chuyện với %8 Sau đó về nhà kể lại mọi chuyện với ông %2"],
            ["id" => "9", "NAME" => "Nhiệm vụ tiên học lễ", "detail" => "Tìm đường tới %11, trò chuyện với %10 và xin làm đệ tử"],
            ["id" => "10", "NAME" => "Nhiệm vụ học phí", "detail" => "Tiêu diệt %12 thể hiện sức mạnh cho %10 thấy"],
            ["id" => "11", "NAME" => "Nhiệm vụ kết giao", "detail" => "Thể hiện thiện chí đoàn kết Mở rộng các mối quan hệ Kết bạn với người chưa có bang hội"],
            ["id" => "12", "NAME" => "Nhiệm vụ xin phép", "detail" => "Quay về nhà xin ông %2 cho phép tham gia bang hội cái bang"],
            ["id" => "13", "NAME" => "Nhiệm vụ gia nhập bang hội", "detail" => "Gia nhập 1 bang hội cùng những người đồng đội thiện chí Cùng làm nhiệm với nhau không quản khó khăn"],
            ["id" => "14", "NAME" => "Nhiệm vụ bang hội lần 1", "detail" => "Cùng phối hợp với 1 người đồng đội lên đường làm nhiệm vụ Gợi ý: Heo rừng xuất hiện tại rừng Bamboo Heo da xanh xuất hiện tại núi hoa vàng Heo xayda xuất hiện tại rừng cọ Hãy tới trạm tàu vũ trụ để có thể di chuyển qua các map"],
            ["id" => "15", "NAME" => "Nhiệm vụ bang hội lần 2", "detail" => "Hãy cùng 1 người đồng đội bang hội của mình để chiến đấu hết mình nha"],
            ["id" => "16", "NAME" => "Tiêu diệt quái vật", "detail" => "Tới các hành tinh tiêu diệt quái vật, giải cứu thường dân"],
            ["id" => "17", "NAME" => "Nhiệm vụ giúp đỡ Cui", "detail" => "Tìm đường tới thành phố Vegeta, gặp và nói chuyện với Cui"],
            ["id" => "18", "NAME" => "Nhiệm vụ bất khả thi", "detail" => "Tiêu diệt đàn em tay sai của Fide tại Xayda"],
            ["id" => "19", "NAME" => "Nhiệm vụ chạm trán đệ tử", "detail" => "Tiêu diệt đàn em tay sai của Fide"],
            ["id" => "20", "NAME" => "Nhiệm vụ Tiểu Đội Sát Thủ", "detail" => "Tiêu diệt 5 tên trong đội Tiểu Đội Sát Thủ"],
            ["id" => "21", "NAME" => "Nhiệm vụ chạm trán Fide đại ca", "detail" => "Luyện tập đạt 2 tỷ sức mạnh Lên đường tìm diệt Fide đại ca"],
            ["id" => "22", "NAME" => "Nhiệm vụ chạm trán Rôbốt sát thủ lần 1", "detail" => "Hãy đến thành phố phía Nam, đảo Balê hoặc Cao nguyên tìm gặp Rôbốt sát thủ để tiêu diệt"],
            ["id" => "23", "NAME" => "Nhiệm vụ chạm trán Rôbốt sát thủ lần 2", "detail" => "Hãy đến thành phố phía Bắc, ngọn núi phía Bắc hoặc thung lũng phía Bắc tìm diệt bọn Rôbốt sát thủ"],
            ["id" => "24", "NAME" => "Nhiệm vụ giải cứu thị trấn Ginder", "detail" => "Lên đường tới thị trấn Ginder, tiêu diệt nỗi hiểm họa gần đây tại thị trấn Ginder"],
            ["id" => "25", "NAME" => "Tiêu Diệt Xên Đi Mấy Em", "detail" => "Vui lòng chờ nhiệm vụ tiếp theo...."],
            ["id" => "26", "NAME" => "Tiêu Diệt Xên Đi Mấy Em", "detail" => "Vui lòng chờ nhiệm vụ tiếp theo...."],
            ["id" => "27", "NAME" => "Kết Bạn Nhìu Niềm Vui", "detail" => "Vui lòng chờ nhiệm vụ tiếp theo...."],
            ["id" => "28", "NAME" => "Săn Xên Bên Võ Đài Nhé", "detail" => "Vui lòng chờ nhiệm vụ tiếp theo...."],
            ["id" => "29", "NAME" => "Qua Cold Nhé", "detail" => "Vui lòng chờ nhiệm vụ tiếp theo...."],
            ["id" => "30", "NAME" => "Pem Chết Cụ Tụi Doraemon Đi", "detail" => "Vui lòng chờ nhiệm vụ tiếp theo...."],
            ["id" => "31", "NAME" => "Nhiệm Vụ Hơi Khó Nhé Nên Sẽ Có Nhiều Em Kẹt Ở Đây", "detail" => "Bạn Chỉ Có 20% Cơ Hội Để Vượt Qua Nhiệm Vụ Này"],
            ["id" => "32", "NAME" => "Đã Hoàn Thành Hết Nhiệm Vụ", "detail" => "Đã Hoàn Thành Hết Nhiệm Vụ"],
        ];
        foreach ($data as $id => $value) {
            \DB::table('task_main_template')->insert([
                'id' => $value['id'],
                'NAME' => $value['NAME'],
                'detail' => $value['detail']
            ]);
        }
    }
}


