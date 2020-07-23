<?php
require_once('login/connect-db.php');
$id = $_GET['id'];
$sql = "SELECT * FROM form2c WHERE id = $id ";
$data = select_one($sql);
$sql1 = "SELECT * FROM quanhegiadinh WHERE id = $id ";
$data1 = select_one($sql1);
//print_r($data1);exit();
$sql2 = "SELECT * FROM quanhebenvo WHERE id = $id ";
$data2 = select_one($sql2);
$sql3 = "SELECT * FROM chuyenmonnghiepvu WHERE id = $id ";
$data3 = select_one($sql3);
$sql4 = "SELECT * FROM quatrinhcongtac WHERE id = $id ";
$data4 = select_one($sql4);
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
            <?php if (isset($data['id'])) {?>
            <form action="make.php" method="get">
                <div class="thongtincoban">
                    <ul>
                        <li class="first">
                            <h1 style="margin-top: 5.433px;">Thông tin cơ bản</h1>
                        </li>

                        <li style="margin-top:20px">
                            <label for="">
                                ID : <?php echo $data['id']?>
                                <br>
                            </label>
                        </li>
                        <li class="lit2" style="margin-top:20px">
                            <label style="width: 300px;" for="">
                                Họ và tên : <?php echo $data['HoTen']?>
                                <br>
                            </label>
                            <label for="" style="margin-left: 50px; width: 300px">
                                Tên gọi khác(nếu có) :  <?php echo $data['CacTenGoiKhac']?>
                                <br>
                            </label>
                        </li>
                        <li style="margin-top:20px">
                            <label style="width: 300px;" for="">
                                Số CMND : <?php echo $data['CMND']?>
                                <br>
                            </label>
                        </li>
                        <li class="sex" name="gioitinh">
                            <label style="width: 300px;" for="">
                                Giới tính : <?php echo $data['GioiTinh']?>
                            </label>
                        </li>
                        <li name="ngaysinh">
                            <label for="">
                                Ngày sinh : <?php echo $data['NgaySinh']?>
                                <br>
                            </label>
                        </li>
                        <li name="noisinh">
                            <label for="">
                                Nơi sinh : <?php echo $data['NoiSinh']?>
                                <br>
                            </label>
                        </li>
                        <li name="quoctich">
                            <label style="width: 300px;" for="">
                                Quốc tịch : <?php echo $data['QuocTich']?>
                                <br>
                            </label>
                        </li>
                        <li name="noithuongtru">
                            <label style="width: 300px;" for="">
                                Quê quán : <?php echo $data['QueQuan']?>
                                <br>
                            </label>
                        </li>
                        <li name="noitamtru">
                            <label style="width: 300px;" for="">
                                Nơi tạm trú : <?php echo $data['NoiTamTru']?>
                                <br>
                            </label>
                        </li>
                        <li>
                            <label style="width: 300px;" for="">
                                Nơi thường trú : <?php echo $data['NoiThuongTru']?>
                                <br>
                            </label>
                        </li>
                        <li>
                            <label style="width: 300px;" for="">
                                Dân tộc : <?php echo $data['DanToc']?>
                                <br>
                            </label>

                            <label for="" style="margin-left: 50px; width:200px">
                                Tôn giáo : <?php echo $data['TonGiao']?>
                                <br>
                            </label>
                        </li>
                        <li name="nghengiepkhiduoctuyen">
                            <label style="width: 300px;" for="">
                                Nghề nghiệp khi được tuyển dụng : <?php echo $data['NgheNghiepKhiDuocTuyenDung']?>
                                <br>
                            </label>
                        </li>
                        <li name="ngaytuyendung">
                            <label style="width: 300px;" for="">
                                Ngày tuyển dụng : <?php echo $data['NgayTuyenDung']?>
                                <br>
                            </label>

                            <label style="width: 300px;" for="" style="margin-left: 50px; width:200px">
                                Cơ quan tuyển dụng : <?php echo $data['CoQuanTuyenDung']?>
                                <br>
                            </label>
                        </li>
                        <li>
                            <label  style="width: 300px;" for="">
                                Chức vụ(chức danh) hiện tại : <?php echo $data['ChucVuHienTai']?>
                                <br>
                            </label>
                        </li>
                        <li>
                            <label style="width: 300px;" for="">
                                Công việc chính được giao : <?php echo $data['CongViecChinhDuocGiao']?>
                                <br>
                            </label>
                        </li>
                        <li>
                            <label style="width: 300px;" for="">
                                Ngạch công chức(viên chức) : <?php echo $data['NgachCongChuc']?>
                                <br>
                            </label>

                            <label for="" style="margin-left: 50px; width:200px">
                                Mã ngạch : <?php echo $data['MaNgach']?>
                                <br>
                            </label>
                        </li>

                        <li>
                            <label style="width: 400px;" for="">
                                Danh hiệu được phong(năm nào) : <?php echo $data['DanhHieuDuocPhong']?>
                                <br>
                            </label>
                        </li>

                        <li>
                            <label style="width: 300px;" for="">
                                Sở trường công tác : <?php echo $data['SoTruongCongTac']?>
                                <br>
                            </label>

                            <label for="" style="margin-left: 50px; width: 300px">
                                Công việc đã làm lâu nhất : <?php echo $data['CongViecLamLauNhat']?>
                                <br>
                            </label>
                        </li>

                        <li>
                            <label style="width: 300px;" for="">
                                Khen Thưởng : <?php echo $data['KhenThuong']?>
                                <br>
                            </label>
                        </li>

                        <li>
                            <label style="width: 300px;" for="">
                                Kỷ luật : <?php echo $data['KyLuat']?>
                                <br>
                            </label>
                        </li>


                        <li>
                            <label style="width: 300px;"  for="">
                                Tình trạng sức khỏe : <?php echo $data['TinhTrangSucKhoe']?>
                                <br>
                            </label>
                        </li>

                        <li>
                            <label style="width: 200px;" for="">
                                Chiều cao(cm) : <?php echo $data['Cao']?>
                                <br>
                            </label>

                            <label for="" style="margin-left: 50px; width: 250px">
                                Cân nặng(kg) : <?php echo $data['CanNang']?>
                                <br>
                            </label>

                            <label for="" style="margin-left: 50px; width: 150px">
                                Nhóm máu : <?php echo $data['NhomMau']?>
                                <br>
                            </label>
                        </li>

                        <li>
                            <label style="width: 300px;" for="">
                                Ngày vào Đảng : <?php echo $data['Ngayvaodang']?>
                                <br>
                            </label>
                        </li>

                        <li>
                            <label style="width: 300px;" for="">
                                Ngày nhập ngũ : <?php echo $data['Ngaynhapngu']?>
                                <br>
                            </label>

                            <label for="" style="margin-left: 50px; width: 300px">
                                Ngày xuất ngũ : <?php echo $data['Ngayxuatngu']?>
                                <br>
                            </label>

                            <label for="" style="margin-left: 50px; width:200px">
                                Quân hàm : <?php echo $data['Quanham']?>
                                <br>
                            </label>

                        </li>

                        <li>
                            <label style="width: 300px;" for="">
                                Thương binh : <?php echo $data['ThuongBinh']?>
                                <br>
                            </label>
                        </li>


                        <li>
                            <label  style="width: 300px;"  for="">
                                Gia đình liệt sĩ : <?php echo $data['GiaDinhLietSi']?>
                                <br>
                            </label>
                        </li>
                        <!-- aaaaa -->


                        <li class="thongtinvochong">
                            <h1>Quan hệ gia đình</h1>
                        </li>
                        <li class="lit2" style="margin-top:20px">
                            <label style="width: 300px;" for="">
                                Họ và tên bố : <?php echo $data1['Bo']?>
                                <br>
                            </label>
                        </li>

                        <li class="lit2" style="margin-top:20px">
                            <label style="width: 300px;" for="">
                                Họ và tên mẹ : <?php echo $data1['Me']?>
                                <br>
                            </label>
                        </li>

                        <li class="lit2" style="margin-top:20px">
                            <label style="width: 300px;" for="">
                                Họ và tên vợ(nếu có). : <?php echo $data1['Vo']?>
                                <br>
                            </label>
                        </li>
                        <li class="lit2" style="margin-top:20px">
                            <label style="width: 300px;" for="">
                                Họ và tên chồng(nếu có). : <?php echo $data1['Chong']?>
                                <br>
                            </label>
                        </li>

                        <li class="lit2" style="margin-top:20px">
                            <label style="width: 300px;" for="">
                                Họ và tên con : <?php echo $data1['ConCai']?>
                                <br>
                            </label>
                        </li>



                        <li class="thongtinvochong">
                            <h1>Quan hệ bên vợ</h1>
                        </li>
                        <li class="lit2" style="margin-top:20px">
                            <label style="width: 300px;" for="">
                                Họ và tên bố vợ : <?php echo $data2['Bo']?>
                                <br>
                            </label>
                        </li>

                        <li class="lit2" style="margin-top:20px">
                            <label style="width: 300px;" for="">
                                Họ và tên mẹ vợ : <?php echo $data2['Me']?>
                                <br>
                            </label>
                        </li>

                        <li class="lit2" style="margin-top:20px">
                            <label style="width: 300px;" for="">
                                Họ và tên anh của vợ : <?php echo $data2['Anh']?>
                                <br>
                            </label>
                        </li>
                        <li class="lit2" style="margin-top:20px">
                            <label style="width: 300px;" for="">
                                Họ và tên chị của vợ : <?php echo $data2['Chi'] ?>
                                <br>
                            </label>

                        </li>
                        <li class="lit2" style="margin-top:20px">
                            <label style="width: 300px;" for="">
                                Họ và tên em của vợ : <?php echo $data2['Em']?>
                                <br>
                            </label>

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
                            <td><?php echo $data3['TenTruong']?></td>
                            <td><?php echo $data3['NganhHoc']?></td>
                            <td><?php echo $data3['ThoiGianHoc']?></td>
                            <td><?php echo $data3['HinhThucHoc']?></td>
                            <td><?php echo $data3['TrinhDo']?></td>
                        </tr>
                        <!--<tr>
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
                        </tr>-->

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
                            <td><?php echo $data4['ThoiGian']?></td>
                            <td><?php echo $data4['ChucDanhChucVuDonViCongTac']?></td>
                        </tr>
                        <!--
                        <tr>
                            <td><textarea name="tuthangnamdenthangnam1" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="chucdanhchucvudonvicongtac1" id="" cols="" rows="" style="width:690px"></textarea></td>
                        </tr>
                        <tr>
                            <td><textarea name="tuthangnamdenthangnam2" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="chucdanhchucvudonvicongtac2" id="" cols="" rows="" style="width:690px"></textarea></td>
                        </tr>
                        -->

                    </table>
                </div>
                <input style="margin-top : 100px ; margin-left : 50%" type="submit" value="In PDF">
             </form>
             <?php } else { ?>
                 <p>Có Thể Bạn Nhập Sai</p>
             <?php }?>
            </div>

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
