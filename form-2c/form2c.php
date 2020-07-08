<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SƠ YẾU LÝ LỊCH C2 - Form</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=9ee35361f60546ad8c3d360470f4a355">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="index.html">Trang Chủ</a><button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"
                value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link active js-scroll-trigger" href="form2c.html">PHIẾU 2C</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="#download">Admin</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--<header class="masthead" style="background-image:url('assets/img/dcs.png');">
        <div class="intro-body" style="margin-top: 2px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="brand-heading">LÝ LỊCH 2C</h1>
                        <p class="intro-text">ĐƯỢC THIẾT KẾ BỞI DDL</p><a class="btn btn-link btn-circle" role="button" href="#about"><i class="fa fa-angle-double-down animated"></i></a></div>
                </div>
            </div>
        </div>
    </header>-->
    <section id="about" class="content-section text-center" style="background-color: #ded3d3;padding: 6px;margin-top: 20px;">
        <div class="row">
            <div class="col">
                <!--<p class="text-left" style="padding: 0px;margin: 28px;color: rgb(0,0,0);">Đơn Vị Công Tác :&nbsp;<input type="text" style="margin-left: 6px;width: auto;max-width: 540px;"></p>-->
            </div>
            <div class="col" style="padding: 0px;color: rgb(0,0,0);">
                <h4 style="margin-bottom: 2px;margin-top: 0px;padding-top: 10px;">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM<br></h4>
                <h6>Độc lập - Tự Do - Hạnh Phúc</h6>
            </div>
        </div>
        <div class="row">
            <div class="col" style="margin-top: 30px;">
                <h3 style="margin-bottom: 21px;margin-top: 2px;color: rgb(0,0,0);">SƠ YẾU LÝ LỊCH</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-2" style="padding: 0px;">
                <!-- Start: OmTempImgCerrar -->
                <div class="row padMar vichomAyudaventas">
                    <div class="col margenesArribaAbajo15px" style="padding-right: 4px;padding-left: 4px;margin-bottom: 5px;"><img class="img-fluid padMar vichomAyudaventasImagen" src="assets/img/profile.jpg" style="height: 231px;color: rgb(0,0,0);"></div>
                </div>
                <!-- End: OmTempImgCerrar -->
            </div>
            <form action="makepdf.php" method="post">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="font-size: 16px;color: rgb(0,0,0);">Họ và Tên Khai Sinh :<input type="text" style="margin-left: 6px;width: 400px;max-width: 400px;" required name="fname"></p>
                    </div>
                    <div class="col-xl-3">
                        <p class="text-left" style="font-size: 16px;color: rgb(0,0,0);">Giới Tính :<input type="text" style="margin-left: 6px;width: 100px;" required name="fgioitinh"></p>
                    </div>
                </div>
                <!--<div class="row">
                    <div class="col">
                        <p class="text-left" style="font-size: 16px;color: rgb(0,0,0);">Các tên gọi khác :&nbsp;<input type="text" style="width: 813px;max-width: 813px;"></p>
                    </div>
                </div>-->
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="font-size: 16px;color: rgb(0,0,0);">Số CMND :&nbsp;<input type="text" style="width: 400px;max-width: 813px;" required name="cmnd"></p>
                    </div>
                    <div class="col-xl-5">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Ngày cấp :&nbsp;&nbsp;<input type="text" style="width: auto;max-width: 813px;" required name="ngaycap"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Chức vụ :<input type="text" style="margin-left: 6px;width: 400px;max-width: 540px;" required name="chucvu"></p>
                    </div>
                    <div class="col-xl-5">
                        <p class="text-left" style="font-size: 16px;color: rgb(0,0,0);">Ngày cấp:<input type="text" style="margin-left: 6px;width: 264px;" required name='ngaycapchucvu'></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="font-size: 16px;color: rgb(0,0,0);">Ngày tháng năm sinh :<input type="text" style="margin-left: 6px;width: auto;max-width: 540px;" name='ngaythangnamsinh'></p>
                    </div>
                    <div class="col-xl-6">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Nơi sinh :<input type="text" style="margin-left: 6px;width: 380px;max-width: 380px;" name='noisinh'></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Quê quán :<input type="text" style="margin-left: 6px;width: 813px;max-width: 813px;min-width: 230px;" name='quequan'></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Nơi ở hiện tại :<input type="text" style="margin-left: 6px;width: 813px;max-width: 813px;min-width: 240px;" name='noiohientai'></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Dân tộc :<input type="text" style="margin-left: 6px;width: auto;max-width: auto;min-width: 240px;" name='dantoc'></p>
                    </div>
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Tôn giáo:<input type="text" style="margin-left: 6px;width: auto;max-width: auto;min-width: 240px;" name='tongiao'></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Thành phần gia đình xuất thân :<input type="text" style="margin-left: 6px;width: 500px;max-width: 500px;min-width: 240px;" name='thanhphangiadinhxuatthan'></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Ngày được tuyển dụng :<input type="text" style="margin-left: 6px;width: auto;max-width: auto;min-width: 240px;" name='ngayduoctuyendung'></p>
                    </div>
                    <div class="col">
                        <p class="text-left" style="font-size: 16px;color: rgb(0,0,0);">Tên cơ quan , địa chỉ :<input type="text" style="margin-left: 6px;width: auto;max-width: auto;min-width: 240px;" name='tencoquan'></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Ngày vào Đảng CS :<input type="text" style="margin-left: 6px;width: auto;max-width: auto;min-width: 240px;" name='ngayvaodang'></p>
                    </div>
                    <div class="col">
                        <p class="text-left" style="font-size: 16px;color: rgb(0,0,0);">Ngày Chính Thức :<input type="text" style="margin-left: 6px;width: auto;max-width: auto;min-width: 240px;" name='ngaychinhthuc'></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Ngày nhập ngũ :<input type="text" style="margin-left: 6px;width: 100px;max-width: auto;min-width: 163px;" name='ngaynhapngu'></p>
                    </div>
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Ngày xuất ngũ :<input type="text" style="margin-left: 6px;width: 100px;max-width: auto;min-width: 168px;" name='ngayxuatngu'></p>
                    </div>
                    <div class="col">
                        <p class="text-left" style="font-size: 16px;color: rgb(0,0,0);">Quân hàm:<input type="text" style="margin-left: 6px;width: 174px;max-width: auto;min-width: 196px;" name='quanham'></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Trình độ học vấn :<input type="text" style="margin-left: 6px;width: auto;max-width: auto;min-width: 240px;" name='trinhdohocvan'></p>
                    </div>
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Học hàm , học vị :<input type="text" style="margin-left: 6px;width: auto;max-width: auto;min-width: 240px;" name='hamhochocvi'></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Ngoại ngữ :<input type="text" style="margin-left: 6px;width: 400px;max-width: auto;min-width: 240px;" name='ngoaingu'></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Công tác chính đang làm :<input type="text" style="margin-left: 6px;width: 400px;max-width: auto;min-width: 240px;" name='congtacchinhdanglam'></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Sở trường công tác :<input type="text" style="margin-left: 6px;width: auto;max-width: auto;min-width: 240px;" name='sotruongcongtac'></p>
                    </div>
                    <div class="col">
                        <p class="text-left" style="font-size: 16px;color: rgb(0,0,0);">Công việc đã làm lâu nhất :<input type="text" style="margin-left: 6px;width: auto;max-width: auto;min-width: 240px;" name='congviecdalamlaunhat'></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Khen thưởng :<input type="text" style="margin-left: 6px;width: 400px;max-width: auto;min-width: 240px;" name='khenthuong'></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="font-size: 16px;color: rgb(0,0,0);">Kỷ luật :<input type="text" style="margin-left: 6px;width: 400px;max-width: auto;min-width: 240px;" name='kiluat'></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Tình trạng sức khỏe :<input type="text" style="margin-left: 6px;width: 400px;max-width: auto;min-width: 240px;" name='tinhtrangsuckhoe'></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Chiều cao :<input type="text" style="margin-left: 6px;width: 188px;max-width: auto;min-width: 188px;" name='chieucao'></p>
                    </div>
                    <div class="col">
                        <p class="text-left" style="font-size: 16px;color: rgb(0,0,0);">Cân nặng :<input type="text" style="margin-left: 6px;width: 188px;max-width: auto;min-width: 188px;" name='cannang'></p>
                    </div>
                    <div class="col">
                        <p class="text-left" style="color: rgb(0,0,0);font-size: 16px;">Nhóm máu:<input type="text" style="margin-left: 6px;width: 100px;max-width: auto;min-width: 188px;" name='nhommau'></p>
                    </div>
                </div>
                <div class="row" style="margin-top: 100px;">
                    <div class="col">
                        <input type="submit" class="btn btn-primary float-right" type="button" style="margin-right: 20px;background-color: rgb(92,96,95);" value="THOÁT">
                        <input type="submit" class="btn btn-primary float-right" type="button" style="margin-right: 20px;background-color: rgb(174,198,189);" value="HOÀN THÀNH">
                </div>
            </div>
        </form>
        </div>
    </section>
    <!--<section id="contact" class="content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>AAAAAA</h2>
                    <p>Có vẻ không ai thắng được thời gian !!!!</p>
                    <ul class="list-inline banner-social-buttons">
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-google-plus fa-fw"></i><span class="network-name">&nbsp; Google+</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-twitter fa-fw"></i><span class="network-name">&nbsp;Twitter</span></button></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default" type="button"><i class="fa fa-github fa-fw"></i><span class="network-name">&nbsp;github</span></button></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Start: Map Clean -->
    <div class="map-clean"><iframe allowfullscreen="" frameborder="0" src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%" height="450"></iframe></div>
    <!-- End: Map Clean -->
    <footer>
        <div class="container text-center">
            <p>Copyright © Ncovi-2020</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/script.min.js?h=7a4e021987da3d38b958d06f38b30142"></script>
</body>

</html>