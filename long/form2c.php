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
            <form action="">
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
                            <input type="text" maxlength="125" name="id">
                        </li>
                        <li class="cmt" style="font-size:15px; color:red;">
                            <label for=""> </label>
                            Lưu ý: bạn phải nhớ ID này.
                        </li>

                        <li class="lit2" style="margin-top:20px">
                            <label for="">
                                Họ và tên
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="hoten">

                            <label for="" style="margin-left: 50px; width:200px">
                                Tên gọi khác(nếu có)
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="tengoikhac">
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
                            <input type="text" maxlength="125" name="cmnd">
                        </li>
                        <li class="cmt" style="font-size:15px; color:red;">
                            <label for=""> </label>

                        </li>

                        <li class="sex" name="gioitinh">
                            <label for="">
                                Giới tính
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="gioitinh">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>
                            Ghi rõ nam, nữ, hoặc giới tính thứ 3
                        </li>
                        </li>
                        <li name="ngaysinh">
                            <label for="">
                                Ngày sinh
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="ngaysinh">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>
                            Ghi rõ ngày, tháng, năm sinh (vd: 30/4/2020)
                        </li>
                        </li>
                        <li name="noisinh">
                            <label for="">
                                Nơi sinh
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="noisinh">
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
                            <input type="text" maxlength="125" name="quoctich">
                        <li class="cmt" style="font-size:15px; color:red">
                            <label for=""> </label>
                            Viết bằng chữ in hoa đủ dấu
                        </li>
                        </li>
                        <li name="noithuongtru">
                            <label for="">
                                Quê quán
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="quequan">
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
                            <input type="text" maxlength="125" name="noitamtru">
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
                            <input type="text" maxlength="125" name="noithuongtru">
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
                            <input type="text" maxlength="125" name="dantoc">

                            <label for="" style="margin-left: 50px; width:200px">
                                Tôn giáo
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="tongiao">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>

                        </li>
                        </li>
                        <li name="nghengiepkhiduoctuyen">
                            <label for="">
                                Nghề nghiệp khi được tuyển dụng
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="nghenghiepkhiduoctuyendung">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>
                        </li>
                        </li>
                        <li name="ngaytuyendung">
                            <label for="">
                                Ngày tuyển dụng
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="ngaytuyendung">

                            <label for="" style="margin-left: 50px; width:200px">
                                Cơ quan tuyển dụng
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="coquantuyendung">

                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>
                            Ghi rõ ngày, tháng, năm được tuyển dụng (vd: 30/4/2020)
                        </li>
                        </li>
                        <li>
                            <label for="">
                                Chức vụ(chức danh) hiện tại
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="chucvu">
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
                            <input type="text" maxlength="125" name="congviecchinhduocgiao">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>

                        </li>
                        </li>
                        <li>
                            <label for="">
                                Ngạch công chức(viên chức)
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="ngachcongchuc">

                            <label for="" style="margin-left: 50px; width:200px">
                                Mã ngạch
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="mangach">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>

                        </li>
                        </li>

                        <li>
                            <label for="">
                                Danh hiệu được phong(năm nào)
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="danhhieuduocphong">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>

                        </li>
                        </li>

                        <li>
                            <label for="">
                                Sở trường công tác
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="sotruongcongtac">

                            <label for="" style="margin-left: 50px; width:200px">
                                Công việc đã làm lâu nhất
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="congvieclamlaunhat">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>

                        </li>
                        </li>

                        <li>
                            <label for="">
                                Khen Thưởng
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="khenthuong">
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
                            <input type="text" maxlength="125" name="kyluat">
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
                            <input type="text" maxlength="125" name="tinhtrangsuckhoe">
                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>

                        </li>
                        </li>

                        <li>
                            <label for="">
                                Chiều cao(cm)
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="chieucao" style="width:100px">

                            <label for="" style="margin-left: 50px; width:130px">
                                Cân nặng(kg)
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="cannang" style="width:100px">

                            <label for="" style="margin-left: 50px; width:100px">
                                Nhóm máu
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="nhommau" style="width:100px">

                        <li class="cmt" style="font-size:15px">
                            <label for=""> </label>

                        </li>
                        </li>

                        <li>
                            <label for="">
                                Ngày vào Đảng
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="ngayvaodang">
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
                            <input type="text" maxlength="125" name="ngaynhapngu" style="width:100px">

                            <label for="" style="margin-left: 50px; width:130px">
                                Ngày xuất ngũ
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="ngayxuatngu" style="width:100px">

                            <label for="" style="margin-left: 50px; width:200px">
                                Quân hàm chức vụ cao nhất
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="quanhamchucvucaonhat" style="width:100px">

                        <li class="cmt" style="font-size:15px; float:left">
                            <label for=""> </label>
                            Ghi rõ ngày, tháng, năm.
                        </li>


                        </li>

                        <li>
                            <label for="">
                                Thương binh
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="thuongbinh">
                        <li class="cmt" style="font-size:15px; color:red">
                            <label for=""> </label>

                        </li>
                        </li>


                        <li>
                            <label for="">
                                Gia đình liệt sĩ
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="giadinhlietsi">
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
                            <input type="text" maxlength="125" name="hotenbo">
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
                            <input type="text" maxlength="125" name="hotenme">
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
                            <input type="text" maxlength="125" name="hotenvo">
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
                            <input type="text" maxlength="125" name="hotencon">
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
                            <input type="text" maxlength="125" name="hotenbovo">
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
                            <input type="text" maxlength="125" name="hotenmevo">
                        </li>
                        <li class="cmt" style="font-size:15px; color:red;">
                            <label for=""> </label>
                            Viết bằng chữ in hoa, đủ dấu (In capital letters)
                        </li>

                        <li class="lit2" style="margin-top:20px">
                            <label for="">
                                Họ và tên anh/chị/em vợ
                                <br>
                            </label>
                            <input type="text" maxlength="125" name="hotenanhvo">
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
            </form>

            <div class="chuyenmonnghiepvu">
                <form action="">
                    <table>
                        <tr>
                            <td>Tên trường</td>
                            <td>Ngành học hoặc tên lớp học</td>
                            <td>Thời gian học</td>
                            <td>Hinh thức học</td>
                            <td>Trình độ</td>
                        </tr>
                        <tr>
                            <td><textarea name="tentruong" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="nganhhoc" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="thoigianhoc" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="hinhthuchoc" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="trinhdo" id="" cols="" rows=""></textarea></td>
                        </tr>
                        <tr>
                            <td><textarea name="" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="" id="" cols="" rows=""></textarea></td>
                        </tr>
                        <tr>
                            <td><textarea name="" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="" id="" cols="" rows=""></textarea></td>
                        </tr>

                    </table>
                </form>
            </div>

            <div class="chuyenmonnghiepvu quatrinhcongtac">
                <h1 style="color:">Quá trình công tác</h1>
                <form action="">
                    <table>
                        <tr>
                            <td style="width:100px;height:50px">Từ tháng, năm đến tháng, năm</td>
                            <td style="width:600px;heigth:50px">Chức danh, chức vụ, đơn vị công tác</td>
                        </tr>
                        <tr>
                            <td><textarea name="thoigiancongtac" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="chucdanh" id="" cols="" rows="" style="width:690px"></textarea></td>
                        </tr>
                        <tr>
                            <td><textarea name="thoigiancongtac" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="chucdanh" id="" cols="" rows="" style="width:690px"></textarea></td>
                        </tr>
                        <tr>
                            <td><textarea name="" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="" id="" cols="" rows="" style="width:690px"></textarea></td>
                        </tr>

                        <tr>
                            <td><textarea name="" id="" cols="" rows=""></textarea></td>
                            <td><textarea name="" id="" cols="" rows="" style="width:690px"></textarea></td>
                        </tr>

                    </table>
                </form>
            </div>



        </div>
        <!--
                <div class="footer" style="float:left">
                    <div class="footer-button">
                        <div class="mot"><button>Xác nhận</button></div>
                        <div class="hai"><button>Quay lại</button></div>
                    </div>
                </div> -->
    </div>
</body>

</html>