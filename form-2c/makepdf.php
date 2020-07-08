
<?php
require_once __DIR__ .'/vendor/autoload.php';

//get data
$fname = $_POST['fname'];
$fgioitinh = $_POST['fgioitinh'];
$cmnd = $_POST['cmnd'];
$ngaycap = $_POST['ngaycap'];
$chucvu = $_POST['chucvu'];
$ngaycapchucvu = $_POST['ngaycapchucvu'];
$ngaythangnamsinh = $_POST['ngaythangnamsinh'];
$noisinh = $_POST['noisinh'];
$quequan = $_POST['quequan'];
$noiohientai = $_POST['noiohientai'];
$dantoc = $_POST['dantoc'];
$tongiao = $_POST['tongiao'];
$thanhphangiadinhxuatthan = $_POST['thanhphangiadinhxuatthan'];
$ngayduoctuyendung = $_POST['ngayduoctuyendung'];
$tencoquan = $_POST['tencoquan'];
$ngayvaodang = $_POST['ngayvaodang'];
$ngaychinhthuc = $_POST['ngaychinhthuc'];
$ngaynhapngu = $_POST['ngaynhapngu'];
$ngayxuatngu = $_POST['ngayxuatngu'];
$quanham = $_POST['quanham'];
$trinhdohocvan = $_POST['trinhdohocvan'];
$hamhochocvi = $_POST['hamhochocvi'];
$ngoaingu = $_POST['ngoaingu'];
$congtacchinhdanglam = $_POST['congtacchinhdanglam'];
$sotruongcongtac = $_POST['sotruongcongtac'];
$congviecdalamlaunhat = $_POST['congviecdalamlaunhat'];
$khenthuong = $_POST['khenthuong'];
$kiluat = $_POST['kiluat'];
$tinhtrangsuckhoe = $_POST['tinhtrangsuckhoe'];
$chieucao = $_POST['chieucao'];
$cannang = $_POST['cannang'];
$nhommau = $_POST['nhommau'];

//create new pdf
$mpdf = new \Mpdf\Mpdf();

//create our PDF
$data ='';
$data .='<div><h3>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h3></div>';
$data .='<h4>Độc Lập - Tự Do - Hạnh Phúc</h4>';
$data .='<br />';
$data .='<br />';
$data .='<h4>Lý Lịch 2C</h4>';
$data .='<br />';
$data .='<br />';
$data .='<br />';

//add
$data .= '<strong>Họ Và Tên Khai Sinh : </strong>' . $fname . ' ....... ' . ' <strong>  Giới tính : </strong>' . $fgioitinh . '<br />';
$data .= '<strong>Số CMND : </strong>' . $cmnd . ' ....... ' . ' <strong>     Ngày cấp : </strong>' . $ngaycap . '<br />';
$data .= '<strong>Chức vụ : </strong>' . $chucvu . ' ....... ' . ' <strong>   Ngày cấp chức vụ : </strong>' .$ngaycapchucvu. '<br />';
$data .= '<strong>Ngày tháng năm sinh : </strong>' .$ngaythangnamsinh. '<br />';
$data .= '<strong>Nơi sinh : </strong>' .$noisinh. '<br />';
$data .= '<strong>Quê quán : </strong>' .$quequan. '<br />';
$data .= '<strong>Nơi ở hiện tại : </strong>' .$noiohientai. '<br />';
$data .= '<strong>Dân tộc : </strong>' .$dantoc. ' ....... ' . ' <strong>  Tôn giáo : </strong>' .$tongiao. '<br />';
$data .= '<strong>Xuất thân gia đình : </strong>' .$thanhphangiadinhxuatthan. '<br />';
$data .= '<strong>Tên cơ quan : </strong>' . $tencoquan . ' ....... ' . ' <strong>  Ngày được tuyển dụng : </strong>' .$ngayduoctuyendung. '<br />';
$data .= '<strong>Ngày vào đảng : </strong>' . $ngayvaodang . ' ....... ' . ' <strong>  Ngày vào đảng chính thức : </strong>' .$ngaychinhthuc. '<br />';
$data .= '<strong>Quân hàm : </strong>' . $quanham . ' ....... ' . ' <strong>  Ngày nhập ngũ : </strong>' .$ngaynhapngu . ' ....... ' .
'<strong> Ngày xuất ngũ : </strong>' .$ngayxuatngu. '<br />';
$data .= '<strong>Trình độ học vấn : </strong>' . $trinhdohocvan . ' ....... ' . '<strong>  Học Vị : </strong>' .$hamhochocvi. '<br />';
$data .= '<strong>Ngoại ngữ : </strong>' .$ngoaingu. '<br />';
$data .= '<strong>Công tác chính đang làm : </strong>' .$congtacchinhdanglam. 
'<strong>  Sở trường công tác : </strong>' .$sotruongcongtac. '<br />';
$data .= '<strong>Công việc đã làm lâu nhất : </strong>' .$congviecdalamlaunhat. '<br />';
$data .= '<strong>Khen thưởng : </strong>' .$khenthuong. ' ....... ' . ' <strong>  Kỉ luật : </strong>' .$kiluat. '<br />';
$data .= '<strong>Tình Trạng sức khỏe : </strong>' .$tinhtrangsuckhoe. '<br />';
$data .= '<strong>Chiều cao : </strong>' .$chieucao. ' ....... ' . ' <strong>   Cân nặng : </strong>' .$cannang. ' ...... ' . 
'<strong>   Nhóm máu : </strong>' .$nhommau. '<br />';

//write PDF
$mpdf->WriteHTML($data);

//
$mpdf->Output('ayzo.pdf','F');

?>