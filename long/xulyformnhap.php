<?php
require_once('login/connect-db.php');

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "";
//--------------------------------------------------------
$data1 = array();
$hoten = isset($_REQUEST['hoten']) ? $_REQUEST['hoten'] : "";
$tengoikhac = isset($_REQUEST['tengoikhac']) ? $_REQUEST['tengoikhac'] : "";
$socmnd = isset($_REQUEST['socmnd']) ? $_REQUEST['socmnd'] : "";
$gioitinh = isset($_REQUEST['gioitinh']) ? $_REQUEST['gioitinh'] : "";
$ngaysinh = isset($_REQUEST['ngaysinh']) ? $_REQUEST['ngaysinh'] : "";
$noisinh = isset($_REQUEST['noisinh']) ? $_REQUEST['noisinh'] : "";
$quoctich = isset($_REQUEST['quoctich']) ? $_REQUEST['quoctich'] : "";
$quequan = isset($_REQUEST['quequan']) ? $_REQUEST['quequan'] : "";
$noitamtru = isset($_REQUEST['noitamtru']) ? $_REQUEST['noitamtru'] : "";
$noithuongtru = isset($_REQUEST['noithuongtru']) ? $_REQUEST['noithuongtru'] : "";
$dantoc = isset($_REQUEST['dantoc']) ? $_REQUEST['dantoc'] : "";
$tongiao = isset($_REQUEST['tongiao']) ? $_REQUEST['tongiao'] : "";
$nghenghiepkhiduoctuyendung = isset($_REQUEST['nghenghiepkhiduoctuyendung']) ? $_REQUEST['nghenghiepkhiduoctuyendung'] : "";
$ngaytuyendung = isset($_REQUEST['ngaytuyendung']) ? $_REQUEST['ngaytuyendung'] : "";
$coquantuyendung = isset($_REQUEST['coquantuyendung']) ? $_REQUEST['coquantuyendung'] : "";
$chucvuhientai = isset($_REQUEST['chucvuhientai']) ? $_REQUEST['chucvuhientai'] : "";
$chucdanh = isset($_REQUEST['chucdanh']) ? $_REQUEST['chucdanh'] : "";
$congviecchinhduocgiao = isset($_REQUEST['congviecchinhduocgiao']) ? $_REQUEST['congviecchinhduocgiao'] : "";
$ngachcongchuc = isset($_REQUEST['ngachcongchuc'])? $_REQUEST['ngachcongchuc'] : "";
$mangach = isset($_REQUEST['mangach']) ? $_REQUEST['mangach'] : "";
$danhhieuduocphong = isset($_REQUEST['danhhieuduocphong']) ? $_REQUEST['danhhieuduocphong'] : "";
$sotruongcongtac = isset($_REQUEST['sotruongcongtac']) ? $_REQUEST['sotruongcongtac'] : "";
$congvieclamlaunhat = isset($_REQUEST['congvieclamlaunhat']) ? $_REQUEST['congvieclamlaunhat'] : "";
$khenthuong = isset($_REQUEST['khenthuong']) ? $_REQUEST['khenthuong'] : "";
$kyluat = isset($_REQUEST['kyluat']) ? $_REQUEST['kyluat'] : "";
$tinhtrangsuckhoe = isset($_REQUEST['tinhtrangsuckhoe']) ? $_REQUEST['tinhtrangsuckhoe'] : "";
$chieucao = isset($_REQUEST['chieucao']) ? $_REQUEST['chieucao'] : "";
$cannang = isset($_REQUEST['cannang']) ? $_REQUEST['cannang'] : "";
$nhommau = isset($_REQUEST['nhommau']) ? $_REQUEST['nhommau'] : "";
$ngayvaodang = isset($_REQUEST['ngayvaodang']) ? $_REQUEST['ngayvaodang'] : "";
$ngaynhapngu = isset($_REQUEST['ngaynhapngu']) ? $_REQUEST['ngaynhapngu'] : "";
$ngayxuatngu = isset($_REQUEST['ngayxuatngu']) ? $_REQUEST['ngayxuatngu'] : "";
$quanham = isset($_REQUEST['quanham']) ? $_REQUEST['quanham'] : "";
$thuongbinh = isset($_REQUEST['thuongbinh']) ? $_REQUEST['thuongbinh'] : "";
$giadinhlietsi = isset($_REQUEST['giadinhlietsi']) ? $_REQUEST['giadinhlietsi'] : "";
/////
$select1 = "SELECT * FROM form2c where id = $id";
$select2 = "SELECT * FROM quanhegiadinh where id = $id";
$select3 = "SELECT * FROM quanhebenvo where id = $id";
$select4 = "SELECT * FROM quatrinhcongtac where id = $id";
$select5 = "SELECT * FROM chuyenmonnghiepvu where id = $id";
$chon1 = select_one($select1);
$chon2 = select_one($select2);
$chon3 = select_one($select3);
$chon4 = select_one($select4);
$chon5 = select_one($select5);
//print_r($chon);exit();
if (isset($chon1['id']) && isset($chon2['id']) && isset($chon3['id']) && isset($chon4['id']) && isset($chon5['id'])) {
    $false = 'ID này đã có người sử dụng , bạn nên chọn ID dài Hơn';
}else{
///--truyen gia tri
$tbl1 = "form2c";
$data1['id'] = $id;
$data1['HoTen'] = $hoten;
$data1['CacTenGoiKhac'] = $tengoikhac;
$data1['CMND'] = $socmnd;
$data1['GioiTinh'] = $gioitinh;
$data1['NgaySinh'] = $ngaysinh;
$data1['QuocTich'] = $quoctich;
$data1['NoiSinh'] = $noisinh;
$data1['QueQuan'] = $quequan;
$data1['NoiTamTru'] = $noitamtru;
$data1['NoiThuongTru'] = $noithuongtru;
$data1['DanToc'] = $dantoc;
$data1['TonGiao'] = $tongiao;
$data1['NgheNghiepKhiDuocTuyenDung'] = $nghenghiepkhiduoctuyendung;
$data1['NgayTuyenDung'] = $ngaytuyendung;
$data1['CoQuanTuyenDung'] = $coquantuyendung;
$data1['ChucVuHienTai'] = $chucvuhientai;
$data1['CongViecChinhDuocGiao'] = $congviecchinhduocgiao;
$data1['NgachCongChuc'] = $ngachcongchuc;
$data1['MaNgach'] = $mangach;
$data1['DanhHieuDuocPhong'] = $danhhieuduocphong;
$data1['SoTruongCongTac'] = $sotruongcongtac;
$data1['CongViecLamLauNhat'] = $congvieclamlaunhat;
$data1['KhenThuong'] = $khenthuong;
$data1['KyLuat'] = $kyluat;
$data1['TinhTrangSucKhoe'] = $tinhtrangsuckhoe;
$data1['Cao'] = $chieucao;
$data1['CanNang'] = $cannang;
$data1['NhomMau'] = $nhommau;
$data1['ThuongBinh'] = $thuongbinh;
$data1['GiaDinhLietSi'] = $giadinhlietsi;
$data1['Ngayvaodang'] = $ngayvaodang;
$data1['Ngaynhapngu'] = $ngaynhapngu;
$data1['Ngayxuatngu'] = $ngayxuatngu;
$data1['Quanham'] = $quanham;
$sql1 = data_to_sql_insert($tbl1,$data1);

$ret = exec_update($sql1);

//print_r($sql1);exit();
///
//------------------------------------Quan he giai dinh----------------------------------------------------
$data2 = array();
$hotenbo = isset($_REQUEST['hotenbo']) ? $_REQUEST['hotenbo'] : "";
$hotenme = isset($_REQUEST['hotenme']) ? $_REQUEST['hotenme'] : "";
$hotenvo = isset($_REQUEST['hotenvo']) ? $_REQUEST['hotenvo'] : "";
$hotencon = isset($_REQUEST['hotencon']) ? $_REQUEST['hotencon'] : "";
$hotenchong = isset($_REQUEST['hotenchong']) ? $_REQUEST['hotenchong'] : "";
////
$data2['id'] = $id;
$data2['Bo'] = $hotenbo;
$data2['Me'] = $hotenme;
$data2['Vo'] = $hotenvo;
$data2['Chong'] = $hotenchong;
$data2['ConCai'] = $hotencon;

$tbl2 = "quanhegiadinh";
$sql2 = data_to_sql_insert($tbl2,$data2);
$ret = exec_update($sql2);
//print_r($sql2);exit();
////
//-------------------------------------ben vo
$data3 = array();
$hotenbocuavo = isset($_REQUEST['hotenbocuavo']) ? $_REQUEST['hotenbocuavo'] : "";
$hotenmecuavo = isset($_REQUEST['hotenmecuavo']) ? $_REQUEST['hotenmecuavo'] : "";
$hotenanhcuavo = isset($_REQUEST['hotenanhcuavo']) ? $_REQUEST['hotenanhcuavo'] : "";
$hotenchicuavo = isset($_REQUEST['hotenchicuavo']) ? $_REQUEST['hotenchicuavo'] : "";
$hotenemcuavo = isset($_REQUEST['hotenemcuavo']) ? $_REQUEST['hotenemcuavo'] : "";
/////
$data3['id'] = $id;
$data3['Bo'] = $hotenbocuavo;
$data3['Me'] = $hotenmecuavo;
$data3['Anh'] = $hotenanhcuavo;
$data3['Chi'] = $hotenchicuavo;
$data3['Em'] = $hotenemcuavo;

$tbl3 = "quanhebenvo";
$sql3 = data_to_sql_insert($tbl3,$data3);
$ret = exec_update($sql3);
//print_r($sql3);exit();
/////
//------------------chuyen  mon nghiep vu-------------------------------
$tentruong = isset($_REQUEST['tentruong']) ? $_REQUEST['tentruong'] : "";
$nganhhochoactenlophoc = isset($_REQUEST['nganhhochoactenlophoc']) ? $_REQUEST['nganhhochoactenlophoc'] : "";
$thoigianhoc = isset($_REQUEST['thoigianhoc']) ? $_REQUEST['thoigianhoc'] : "";
$hinhthuchoc = isset($_REQUEST['hinhthuchoc']) ? $_REQUEST['hinhthuchoc'] : "";
$trinhdo = isset($_REQUEST['trinhdo']) ? $_REQUEST['trinhdo'] : "";
//
$tentruong1 = isset($_REQUEST['tentruong']) ? $_REQUEST['tentruong'] : "";
$nganhhochoactenlophoc1 = isset($_REQUEST['nganhhochoactenlophoc']) ? $_REQUEST['nganhhochoactenlophoc'] : "";
$thoigianhoc1 = isset($_REQUEST['thoigianhoc']) ? $_REQUEST['thoigianhoc'] : "";
$hinhthuchoc1 = isset($_REQUEST['hinhthuchoc']) ? $_REQUEST['hinhthuchoc'] : "";
$trinhdo1 = isset($_REQUEST['trinhdo']) ? $_REQUEST['trinhdo'] : "";
//
$tentruong2 = isset($_REQUEST['tentruong']) ? $_REQUEST['tentruong'] : "";
$nganhhochoactenlophoc2 = isset($_REQUEST['nganhhochoactenlophoc']) ? $_REQUEST['nganhhochoactenlophoc'] : "";
$thoigianhoc2 = isset($_REQUEST['thoigianhoc']) ? $_REQUEST['thoigianhoc'] : "";
$hinhthuchoc2 = isset($_REQUEST['hinhthuchoc']) ? $_REQUEST['hinhthuchoc'] : "";
$trinhdo2 = isset($_REQUEST['trinhdo']) ? $_REQUEST['trinhdo'] : "";

$data5 = array();
$data5['id'] = $id;
$data5['TenTruong'] = $tentruong;
$data5['NganhHoc'] = $nganhhochoactenlophoc;
$data5['ThoiGianHoc'] = $thoigianhoc;
$data5['HinhThucHoc'] = $hinhthuchoc;
$data5['TrinhDo'] = $trinhdo;

$tbl5 = "chuyenmonnghiepvu";
$sql5 = data_to_sql_insert($tbl5,$data5);
$ret = exec_update($sql5);
//print_r($sql5);exit();
//
//-------------quatrinhcongtac
$data4 = array();
$tuthangnamdenthangnam = isset($_REQUEST['tuthangnamdenthangnam']) ? $_REQUEST['tuthangnamdenthangnam'] : "";
$chucdanhchucvudonvicongtac = isset($_REQUEST['chucdanhchucvudonvicongtac']) ? $_REQUEST['chucdanhchucvudonvicongtac'] : "";
//////
$data4['id'] = $id;
$data4['ThoiGian'] = $tuthangnamdenthangnam;
$data4['ChucDanhChucVuDonViCongTac'] = $chucdanhchucvudonvicongtac;

$tbl4 = "quatrinhcongtac";
$sql4 = data_to_sql_insert($tbl4,$data4);
$ret = exec_update($sql4);
//print_r($sql4);exit();
//////
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="form2c">
        <div class="header">
            <h1><b>TỜ KHAI YÊU CẦU CẤP PHIẾU LÝ LỊCH TƯ PHÁP</b></h1>
            <hr>
        </div>
            <div class="body2c">
            <?php if (isset($chon1['id']) && isset($chon2['id']) && isset($chon3['id']) && isset($chon4['id']) && isset($chon5['id'])) {?>
                <h2>..........................<?php echo $false;?>........................</h2>
            <?php } else {?>
            <h2>..........................................................BẠN ĐÃ HOÀN THÀNH Form 2C..............................................</h2>
            <form action="xulychinhsua.php" method="get">
                <div class="thongtincoban">
                    <ul>
                        <li class="first">
                            <h1 style="margin-top: 5.433px;">Thông tin cơ bản</h1>
                        </li>

                        <li style="margin-top:20px">
                            <label for="">
                                ID
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="id" value="<?php echo $id;?>">
                        </li>
                        <li class="cmt" style="font-size:15px; color:red;">
                            <label for=""> </label>
                            Lưu ý: ID của bạn là.
                        </li>

                        <li class="lit2" style="margin-top:20px">
                            <label for="">
                                Họ và tên
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="hoten" value="<?php echo $hoten;?>">

                            <label for="" style="margin-left: 50px; width:200px">
                                Tên gọi khác(nếu có)
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="tengoikhac"value="<?php echo $tengoikhac;?>">
                        </li>
                        <li class="cmt" style="font-size:15px; color:red;">
                            <label for=""> </label>
                            Viết bằng chữ in hoa, đủ dấu (In capital letters)
                        </li>

                        <li style="margin-top:20px">
                            <label for="">
                                Số CMND
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="socmnd" value="<?php echo $socmnd;?>">
                        </li>
                        <li class="cmt" style="font-size:15px; color:red;">
                            <label for=""> </label>

                        </li>

                        <li class="sex" name="gioitinh">
                            <label for="">
                                Giới tính
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="gioitinh" value="<?php echo $gioitinh;?>">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>
                        </li>
                        </li>
                        <li name="ngaysinh">
                            <label for="">
                                Ngày sinh
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="ngaysinh" value="<?php echo $ngaysinh;?>">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>
                            Ghi rõ ngày, tháng, năm sinh (vd: 2020/4/20)
                        </li>
                        </li>
                        <li name="noisinh">
                            <label for="">
                                Nơi sinh
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="noisinh" value="<?php echo $noisinh;?>">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>
                            Ghi rõ xã(phường), huyện(quận), tỉnh(thành phố)
                        </li>
                        </li>
                        <li name="quoctich">
                            <label for="">
                                Quốc tịch
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="quoctich" value="<?php echo $quoctich;?>">
                        <li class="cmt" style="font-size:15px; color:red">
                            <label for=""> </label>
                            Viết bằng chữ in hoa đủ dấu
                        </li>
                        </li>
                        <li name="quequan">
                            <label for="">
                                Quê quán
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="quequan" value="<?php echo $quequan;?>">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>
                            Ghi rõ số nhà, xã(phường), huyện(quận), tỉnh(thành phố)
                        </li>
                        </li>
                        <li name="noitamtru">
                            <label for="">
                                Nơi tạm trú
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="noitamtru" value="<?php echo $noitamtru;?>">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>
                            Ghi rõ số nhà, xã(phường), huyện(quận), tỉnh(thành phố)
                        </li>
                        </li>
                        <li>
                            <label for="">
                                Nơi thường trú
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="noithuongtru" value="<?php echo $noithuongtru;?>">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>
                            Ghi rõ số nhà, xã(phường), huyện(quận), tỉnh(thành phố)
                        </li>
                        </li>
                        <li>
                            <label for="">
                                Dân tộc
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="dantoc" value="<?php echo $dantoc;?>">

                            <label for="" style="margin-left: 50px; width:200px">
                                Tôn giáo
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="tongiao" value="<?php echo $tongiao;?>">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>

                        </li>
                        </li>
                        <li name="nghengiepkhiduoctuyen">
                            <label for="">
                                Nghề nghiệp khi được tuyển dụng
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="nghenghiepkhiduoctuyendung" value="<?php echo $nghenghiepkhiduoctuyendung;?>">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>
                        </li>
                        </li>
                        <li name="ngaytuyendung">
                            <label for="">
                                Ngày tuyển dụng
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="ngaytuyendung" value="<?php echo $ngaytuyendung;?>">

                            <label for="" style="margin-left: 50px; width:200px">
                                Cơ quan tuyển dụng
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="coquantuyendung" value="<?php echo $coquantuyendung;?>">
                            
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>
                            Ghi rõ ngày, tháng, năm được tuyển dụng (vd: 2020/4/30)
                        </li>
                        </li>
                        <li>
                            <label for="">
                                Chức vụ(chức danh) hiện tại
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="chucvuhientai" value="<?php echo $chucvuhientai;?>">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>
                            Về chính quyền hoặc Đảng, đoàn thể, kể cả chức vụ kiêm nhiệm nhiệm
                        </li>
                        </li>
                        <li>
                            <label for="">
                                Công việc chính được giao
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="congviecchinhduocgiao" value="<?php echo $congviecchinhduocgiao;?>">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>

                        </li>
                        </li>
                        <li>
                            <label for="">
                                Ngạch công chức(viên chức)
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="ngachcongchuc" value="<?php echo $ngachcongchuc;?>">

                            <label for="" style="margin-left: 50px; width:200px">
                                Mã ngạch
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="mangach" value="<?php echo $mangach;?>">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>

                        </li>
                        </li>

                        <li>
                            <label for="">
                                Danh hiệu được phong(năm nào)
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="danhhieuduocphong" value="<?php echo $danhhieuduocphong;?>">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>

                        </li>
                        </li>

                        <li>
                            <label for="">
                                Sở trường công tác
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="sotruongcongtac" value="<?php echo $sotruongcongtac;?>">

                            <label for="" style="margin-left: 50px; width:200px">
                                Công việc đã làm lâu nhất
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="congvieclamlaunhat" value="<?php echo $congvieclamlaunhat;?>">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>

                        </li>
                        </li>

                        <li>
                            <label for="">
                                Khen Thưởng
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="khenthuong" value="<?php echo $khenthuong;?>">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>
                            Huân, huy chương năm nào
                        </li>
                        </li>

                        <li>
                            <label for="">
                                Kỷ luật
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="kyluat" value="<?php echo $kyluat;?>">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>
                            Đảng, chính quyền đoàn thể, Cấp quyết định năm nào, lý do, hình thức
                        </li>
                        </li>


                        <li>
                            <label for="">
                                Tình trạng sức khỏe
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="tinhtrangsuckhoe" value="<?php echo $tinhtrangsuckhoe;?>">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>

                        </li>
                        </li>

                        <li>
                            <label for="">
                                Chiều cao(cm)
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="chieucao" style="width:100px" value="<?php echo $chieucao;?>">

                            <label for="" style="margin-left: 50px; width:130px">
                                Cân nặng(kg)
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="cannang" style="width:100px" value="<?php echo $cannang;?>">

                            <label for="" style="margin-left: 50px; width:100px">
                                Nhóm máu
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="nhommau" style="width:100px" value="<?php echo $nhommau;?>">

                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>

                        </li>
                        </li>

                        <li>
                            <label for="">
                                Ngày vào Đảng
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="ngayvaodang" value="<?php echo $ngayvaodang;?>">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>
                            Ghi rõ ngày, tháng, năm
                        </li>
                        </li>

                        <li>
                            <label for="">
                                Ngày nhập ngũ
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="ngaynhapngu" style="width:100px" value="<?php echo $ngaynhapngu;?>">

                            <label for="" style="margin-left: 50px; width:130px">
                                Ngày xuất ngũ
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="ngayxuatngu" style="width:100px" value="<?php echo $ngayxuatngu;?>">

                            <label for="" style="margin-left: 50px; width:200px">
                                Quân hàm
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="quanham" style="width:100px" value="<?php echo $quanham;?>">

                        <li class="cmt" style="font-size:15px; float:left">
                            <label for=""> </label>
                            ....
                        </li>


                        </li>

                        <li>
                            <label for="">
                                Thương binh
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="thuongbinh" value="<?php echo $thuongbinh;?>">
                        <li class="cmt" style="font-size:15px; color:red">
                            <label for=""> </label>

                        </li>
                        </li>


                        <li>
                            <label for="">
                                Gia đình liệt sĩ
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="giadinhlietsi" value="<?php echo $giadinhlietsi;?>">
                        <li class="cmt" style="font-size:15px; color:red">
                            <label for=""> </label>

                        </li>
                        </li>
                        <!-- aaaaa -->


                        <li class="thongtinvochong">
                            <h1>Quan hệ gia đình</h1>
                        </li>
                        <li class="lit2" style="margin-top:20px">
                            <label for="">
                                Họ và tên bố
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="hotenbo" value="<?php echo $hotenbo;?>">
                        </li>
                        <li class="cmt" style="font-size:15px; color:red;">
                            <label for=""> </label>
                            Viết bằng chữ in hoa, đủ dấu (In capital letters)
                        </li>

                        <li class="lit2" style="margin-top:20px">
                            <label for="">
                                Họ và tên mẹ
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="hotenme" value="<?php echo $hotenme;?>">
                        </li>
                        <li class="cmt" style="font-size:15px; color:red;">
                            <label for=""> </label>
                            Viết bằng chữ in hoa, đủ dấu (In capital letters)
                        </li>

                        <li class="lit2" style="margin-top:20px">
                            <label for="">
                                Họ và tên vợ(nếu có).
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="hotenvo" value="<?php echo $hotenvo;?>">
                        </li>
                        <li class="lit2" style="margin-top:20px">
                            <label for="">
                                Họ và tên chồng(nếu có).
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="hotenchong" value="<?php echo $hotenchong;?>">
                        </li>
                        <li class="cmt" style="font-size:15px; color:red;">
                            <label for=""> </label>
                            Viết bằng chữ in hoa, đủ dấu (In capital letters)
                        </li>

                        <li class="lit2" style="margin-top:20px">
                            <label for="">
                                Họ và tên con
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="hotencon" value="<?php echo $hotencon;?>">
                        </li>
                        <li class="cmt" style="font-size:15px; color:red;">
                            <label for=""> </label>
                            Viết bằng chữ in hoa, đủ dấu (In capital letters)
                        </li>



                        <li class="thongtinvochong">
                            <h1>Quan hệ bên vợ</h1>
                        </li>
                        <li class="lit2" style="margin-top:20px">
                            <label for="">
                                Họ và tên bố vợ
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="hotenbocuavo" value="<?php echo $hotenbocuavo;?>">
                        </li>
                        <li class="cmt" style="font-size:15px; color:red;">
                            <label for=""> </label>
                            Viết bằng chữ in hoa, đủ dấu (In capital letters)
                        </li>

                        <li class="lit2" style="margin-top:20px">
                            <label for="">
                                Họ và tên mẹ vợ
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="hotenmecuavo" value="<?php echo $hotenmecuavo;?>">
                        </li>
                        <li class="cmt" style="font-size:15px; color:red;">
                            <label for=""> </label>
                            Viết bằng chữ in hoa, đủ dấu (In capital letters)
                        </li>

                        <li class="lit2" style="margin-top:20px">
                            <label for="">
                                Họ và tên anh của vợ
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="hotenanhcuavo" value="<?php echo $hotenanhcuavo;?>">
                        </li>
                        <li class="lit2" style="margin-top:20px">
                            <label for="">
                                Họ và tên chị của vợ
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="hotenchicuavo" value="<?php echo $hotenchicuavo;?>">
                        </li>
                        <li class="lit2" style="margin-top:20px">
                            <label for="">
                                Họ và tên em của vợ
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="hotenemcuavo" value="<?php echo $hotenemcuavo;?>">
                        </li>
                        <li class="cmt" style="font-size:15px; color:red;">
                            <label for=""> </label>
                            Viết bằng chữ in hoa, đủ dấu (In capital letters)
                        </li>


                        <li class="thongtinvochong">
                            <h1>Chuyên môn nghiệp vụ</h1>
                        </li>
                        <!-- aaaaaa -->
                    </ul>
                </div>

                <div class="chuyenmonnghiepvu">
                    <table>
                        <tr>
                            <td>Tên trường</td>
                            <td>Ngành học hoặc tên lớp học</td>
                            <td>Thời gian học</td>
                            <td>Hinh thức học</td>
                            <td>Trình độ</td>
                        </tr>
                        <tr>
                            <td><textarea name="tentruong" id="" cols="" rows="" value="<?php echo $tentruong;?>"></textarea></td>
                            <td><textarea name="nganhhochoactenlophoc" id="" cols="" rows="" value="<?php echo $nganhhochoactenlophoc;?>"></textarea></td>
                            <td><textarea name="thoigianhoc" id="" cols="" rows="" value="<?php echo $thoigianhoc;?>"></textarea></td>
                            <td><textarea name="hinhthuchoc" id="" cols="" rows="" value="<?php echo $hinhthuchoc;?>"></textarea></td>
                            <td><textarea name="trinhdo" id="" cols="" rows="" value="<?php echo $trinhdo;?>"></textarea></td>
                        </tr>
                        <tr>
                            <td><textarea name="tentruong1" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="nganhhochoactenlophoc1" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="thoigianhoc1" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="hinhthuchoc1" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="trinhdo1" id="" cols="" rows=""></textarea></td>
                        </tr>
                        <tr>
                            <td><textarea name="tentruong2" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="nganhhochoactenlophoc2" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="thoigianhoc2" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="hinhthuchoc2" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="trinhdo2" id="" cols="" rows=""></textarea></td>
                        </tr>

                    </table>
                    
                </div>

                <div class="chuyenmonnghiepvu quatrinhcongtac">
                    <h1 style="color:">Quá trình công tác</h1>
                    <table>
                        <tr>
                            <td style="width:100px;height:50px">Từ tháng, năm đến tháng, năm</td>
                            <td style="width:600px;heigth:50px">Chức danh, chức vụ, đơn vị công tác</td>
                        </tr>
                        <tr>
                            <td><textarea name="tuthangnamdenthangnam" id="" cols="" rows="" value="<?php echo $tuthangnamdenthangnam;?>"></textarea></td>
                            <td><textarea name="chucdanhchucvudonvicongtac" id="" cols="" rows="" style="width:690px" value="<?php echo $chucdanhchucvudonvicongtac;?>"></textarea></td>
                        </tr>
                        <tr>
                            <td><textarea name="tuthangnamdenthangnam1" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="chucdanhchucvudonvicongtac1" id="" cols="" rows="" style="width:690px"></textarea></td>
                        </tr>
                        <tr>
                            <td><textarea name="tuthangnamdenthangnam2" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="chucdanhchucvudonvicongtac2" id="" cols="" rows="" style="width:690px"></textarea></td>
                        </tr>


                    </table>
                </div>
                <input style="margin-top : 100px ; margin-left : 50%" type="submit" value="Chỉnh Sửa">
                <button style="margin-top : 100px ; margin-left : 20px"><a href="Ketqua.php" style="color : black ; text-decoration : none">Xem KQ</a></button>
             </form>
            </div>
            <?php }?>

        <!--
                <div class="footer" style="float:left">
                    <div class="footer-button">
                        <div class="mot"><button>Xác nhận</button></div>
                        <div class="hai"><button>Quay lại</button></div>
                    </div>
                </div> -->
    </div>
    <script>

    </script>
</body>

</html>