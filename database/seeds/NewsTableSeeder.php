<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = "
    	</h3>đây là content rất dài và rất nhiều</h3>
    	<p>
    	<b>Hotline kỹ thuật <b>: 0967 908 907<br>
    	<b>Hotline tư vấn kháo học <b>: 094 276 4080<br>
    	<b>Địa chỉ </b>: 90 Lê Thị Riêng, P.Bến Thành, Q1, TPHCM<br>
    	<b>Website</b>: khoapham.vn<br>
    	<b>Học Online tại :</b>online.khoapham.vn<br>
    	</p>
    	<p>
    	<b>Hotline kỹ thuật <b>: 0967 908 907<br>
    	<b>Hotline tư vấn kháo học <b>: 094 276 4080<br>
    	<b>Địa chỉ </b>: 90 Lê Thị Riêng, P.Bến Thành, Q1, TPHCM<br>
    	<b>Website</b>: khoapham.vn<br>
    	<b>Học Online tại :</b>online.khoapham.vn<br>
    	</p>
    	<p>
    	<b>Hotline kỹ thuật <b>: 0967 908 907<br>
    	<b>Hotline tư vấn kháo học <b>: 094 276 4080<br>
    	<b>Địa chỉ </b>: 90 Lê Thị Riêng, P.Bến Thành, Q1, TPHCM<br>
    	<b>Website</b>: khoapham.vn<br>
    	<b>Học Online tại :</b>online.khoapham.vn<br>
    	</p>
    	";
        DB::table('news')->insert([
        	['title' => 'Lần đầu ĐH FPT cấp học bổng tiến sĩ ','titlenone' => 'Lan-Dau-Dh-Fpt-Cap-Hoc-Bong-Tien-Si','description' => 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.','content' => $content,'image' => 'FPT-2.jpg','hightlight' => 1],
            ['title' => '300 tỷ đồng phát triển giáo dục mầm non ','titlenone' => '300-Ty-Dong-Phat-Trien-Giao-Duc-Mam-Non','description' => 'Bộ Giáo dục và Đào tạo đang xây dựng chương trình, mục tiêu quốc gia về giáo dục giai đoạn 2011-2015, trong đó dự kiến chi 300 tỷ đồng để phát triển giáo dục mầm non năm 2011. ','content' => $content,'image' => 'tre_em_set_sub.jpg','hightlight' => 1],
            ['title' => 'Nợ giáo viên tiền tỷ chi phí phổ cập giáo dục ','titlenone' => 'No-Giao-Vien-Tien-Ty-Chi-Phi-Pho-Cap-Giao-Duc','description' => 'Ba năm qua, nhiều giáo viên ở Khánh Hòa bỏ công sức, kể cả tiền bạc để thực hiện phổ cập giáo dục cho học sinh trên địa bàn tỉnh, song đến nay vẫn chưa nhận được tiền chính quyền chi trả. ','content' => $content,'image' => 'pho-cap-giao-duc-nho-2.jpg','hightlight' => 1],
            ['title' => 'Đón và chăm sóc trẻ sau giờ tan trường qua dịch vụ ','titlenone' => 'Don-Va-Cham-Soc-Tre-Sau-Gio-Tan-Truong-Qua-Dich-Vu','description' => 'Các bé sẽ được chăm sóc bữa ăn, tắm rửa sạch sẽ, vui chơi và học tập cùng cô giáo theo các nội dung trong sổ báo bài, mở rộng hoặc đào sâu kiến thức theo yêu cầu của phụ huynh. ','content' => $content,'image' => 'be-2.jpg','hightlight' => 1],
            ['title' => '7 học sinh rơi từ tầng hai xuống đất vì gãy lan can ','titlenone' => '7-Hoc-Sinh-Roi-Tu-Tang-Hai-Xuong-Dat-Vi-Gay-Lan-Can','description' => 'Đang giờ ra chơi, bất ngờ toàn bộ lan can tầng hai của Trường THCS thị trấn Chợ Rã (Bắc Kạn) gãy đổ ra ngoài, kéo theo 7 học sinh lớp 6A rơi xuống đất. ','content' => $content,'image' => 'tai_nan_set_top.gif','hightlight' => 1],
            ['title' => 'Giáo viên TP HCM được thưởng tết tối thiểu 700.000 đồng ','titlenone' => 'Giao-Vien-Tp-Hcm-Duoc-Thuong-Tet-Toi-Thieu-700.000-Dong','description' => 'Sở GD&ĐT TP HCM vừa có thông báo về việc UBND thành phố chấp thuận đề nghị hỗ trợ mức quà tết cho cán bộ công chức trong ngành tối thiểu là 700.000 đồng. Mức thưởng này cao hơn năm ngoái 100.000 đồng. ','content' => $content,'image' => 'thuong-tet-3.jpg','hightlight' => 1],
            ['title' => 'Mức sinh hoạt phí tối đa cho lưu học sinh là 1.200 USD ','titlenone' => 'Muc-Sinh-Hoat-Phi-Toi-Da-Cho-Luu-Hoc-Sinh-La-1.200-Usd','description' => 'Đối với lưu học sinh tại Ba Lan, Bungary, Nga..., mức sinh hoạt phí sẽ tăng từ 400 USD lên 480 USD; tại Australia, New Zealand tăng từ 860 USD lên 1.032 USD và tại Mỹ, Canada, Anh, Nhật Bản tăng từ 1.000 lên 1.200 USD một người một tháng... ','content' => $content,'image' => 'du_hoc_sinh_set_sub.jpg','hightlight' => 1],
            ['title' => 'Học sinh Hà Nội được nghỉ 11 ngày Tết ','titlenone' => 'Hoc-Sinh-Ha-Noi-Duoc-Nghi-11-Ngay-Tet','description' => 'UBND thành phố Hà Nội vừa đồng ý với đề xuất của Sở Giáo dục và Đào tạo về việc cho học sinh nghỉ tết Tết Nguyên đán Tân Mão 11 ngày. ','content' => $content,'image' => 't2.jpg','hightlight' => 1],
        ]);
        }
}
