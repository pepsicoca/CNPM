<?php
    require_once('fpdf/fpdf.php');
require_once('login/connect-db.php');
$id = $_POST['id'];
$sql = "SELECT * FROM form2c WHERE id = $id ";
$data = select_one($sql);
$sql1 = "SELECT * FROM quanhegiadinh WHERE id = $id ";
$data1 = select_one($sql);
$sql2 = "SELECT * FROM quanhebenvo WHERE id = $id ";
$data2 = select_one($sql);
$sql3 = "SELECT * FROM chuyenmonnghiepvu WHERE id = $id ";
$data3 = select_one($sql);
$sql4 = "SELECT * FROM quatrinhcongtac WHERE id = $id ";
$data4 = select_one($sql);

if (isset($_POST['btn_pdf'])) {
    $pdf = new FPDF('P','mm','A4');
    $pdf->SetFont('Arial','b','12');
    $pdf->AddPage();
    $pdf->cell('30','8','Họ Và Tên : ','0','0','C');
    $pdf->cell('30','8', $data['HoTen'] ,'0','0','C');
    $pdf->cell('30','8','Tên Gọi Khác','0','0','C');
    $pdf->cell('30','8', $data['CacTenGoiKhac'],'0','0','C');
    
    $pdf->cell('15','8','CMND','0','1','C');
    $pdf->cell('30','8', $data['CMND'],'0','1','C');

    $pdf->cell('30','8','Ngay Sinh :','0','2','C');
    $pdf->cell('30','8', $data['NgaySinh'],'0','2','C');
    $pdf->cell('20','8','Giới Tính :','0','2','C');
    $pdf->cell('20','8', $data['GioiTinh'],'0','2','C');

    $pdf->cell('30','8','Nơi Sinh :','0','3','C');
    $pdf->cell('30','8', $data['NoiSinh'],'0','3','C');
    $pdf->cell('30','8','Quốc Tịch :','0','3','C');
    $pdf->cell('30','8', $data['QuocTich'],'0','3','C');

    $pdf->cell('30','8','Quê Quán :','0','4','C');
    $pdf->cell('30','8', $data['QueQuan'],'0','4','C');
    $pdf->cell('30','8','Nơi Tạm Trú :','0','4','C');
    $pdf->cell('30','8', $data['NoiTamTru'],'0','4','C');
    
    $pdf->cell('30','8','Nơi Thường Trú :','0','5','C');
    $pdf->cell('30','8', $data['NoiThuongTru'],'0','5','C');

    $pdf->cell('30','8','Dân Tộc:','0','6','C');
    $pdf->cell('30','8', $data['DanToc'],'0','6','C');
    $pdf->cell('30','8','Tôn Giáo :','0','6','C');
    $pdf->cell('30','8', $data['TonGiao'],'0','6','C');

    $pdf->Output();
}

?>