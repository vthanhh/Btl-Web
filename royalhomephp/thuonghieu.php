<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://thietkeroyalhome.com/images/config/favicon_1545042774.ico">
    <title>Thương Hiệu</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        #tamnhin p {
            margin-left: 50px;
        }
        #tamnhin li {
            margin-left: 80px;
        }
        .menu_gt a {
            text-decoration: none;
            color: orange;
        }
        .container img {
            margin-left:50px ;
        }
        .container i {
            margin-left: 160px;
        }
        .intro-gt a{
            color: black;
            text-decoration: none;
        }
        .intro-gt {
            border-bottom: 2px solid #dca500;
            margin: 0 auto 30px auto;
        }

    </style>
</head>
<body>
<header>
    <div class="row">
        <div class="col-3">
            <h1><img src="./assets/img/logo90_1545626799.png"></h1>
        </div>
        <div class="col-7">
            <ul class="nav" style="display: block;">
                <li><a href="index.php" >Trang chủ</a></li>
                <li>
                    <a href="gioithieu.php">Giới thiệu</a>
                    <ul class="submenu">
                        <li><a href="gioithieuchung.php">Giới thiệu chung</a></li>
                        <li><a href="tamnhin.php">Tầm nhìn xứ mệnh</a></li>
                        <li><a href="giatricotloi.php">Giá trị cốt lõi</a></li>
                        <li><a href="vanhoadoanhnghiep.php">Văn hóa doanh nghiệp</a></li>
                    </ul>

                </li>
                <li>
                    <a href="thuonghieu.php">Royalhome Plus</a>
                    <ul class="submenu">
                        <li><a href="thuonghieu.php">Về thương hiệu Royalhome Plus</a></li>
                        <li><a href="duan.php">Các dự án</a>
                            <ul class="sub_nav_2">
                                <li><a href="duan.php">Vinhome Ocean Park</a></li>
                                <li><a href="smartcity.php">Vinhome Smartcity</a></li>
                            </ul>
                        </li>
                    </ul>

                </li>
                <li>
                    <a href="thietke.php">Thiết kế</a>
                    <ul class="submenu">
                        <li><a href="thietkebietthu.php">Thiết kế biệt thự</a></li>
                        <li><a href="thietkevanphong.php">Thiết kế văn phòng</a></li>
                        <li><a href="thietkenhapho.php">Thiết kế nhà phố</a></li>
                        <li><a href="thietkechungcu.php">Thiết kế chung cư</a></li>
                        <li><a href="thietkethuongmai.php">Thiết kế công trình thương mại-hội trường</a></li>
                    </ul>
                </li>
                <li>
                    <a href="thicong.php">Thi công</a>
                    <ul class="submenu">
                        <li><a href="congtrinhthicong.php">Công trình đã thi công</a></li>
                        <li><a href="thicongbietthu.php">Biệt thự</a></li>
                        <li><a href="thicongnhapho.php">Thi công nhà phố</a></li>
                        <li><a href="thicongchungcu.php">Chung cư</a></li>
                        <li><a href="thiconghoitruong.php">Thi công công trình thương mại-hội trường</a></li>
                    </ul>
                </li>
                <li>
                    <a href="phongcach.php">Phong cách</a>
                    <ul class="submenu">
                        <li><a href="phongcachhiendai.php">Phong cách hiện đại</a></li>
                        <li><a href="phongcachadong.php">Phong cách á đông</a></li>
                        <li><a href="phongcachtancodien.php">Phong cách tân cổ điển</a></li>
                    </ul>
                </li>
                <li>
                    <a href="baogiathietke.php">Báo giá</a>
                    <ul class="submenu">
                        <li><a href="baogiathicong.php">Báo giá thi công</a></li>
                        <li><a href="baogiathietke.php">Báo giá thiết kế</a></li>
                    </ul>

                </li>
                <li>
                    <a href="tintuc.php">Tin tức</a> 
                    <ul class="submenu">
                        <li><a href="quytrinhlamviec.php">Quy trình làm việc</a></li>
                        <li><a href="kthucnoithat.php">Kiến thức nội thất</a></li>
                    </ul>

                </li>
                <li><a href="lienhe.php">Liên hệ</a></li>
            </ul>
        </div>
        <div class="col-2">
            <div class="Search" style="margin-top: 38px;" >
                <from class="header-search-from" action="" method="post">
                    <input id="input_header" type="text" name="input_header" style="width: 50%;border: none; outline: none;padding-left: 10px;line-height: 25px;border-radius: 3px; " placeholder="Tìm kiếm...">
                    <a href="" class="btn" style="color: aliceblue;padding: 2px 2px 5px 2px;"><i class="fa fa-search"></i></a>
                </from>
            </div>
        </div>
    </div>
</header>
    <div class="container" style="margin-top: 105px;">
        <div class="intro-gioithieu">
            <div class="intro-gt" style="padding-top: 20px; width: 1200px;">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="thuonghieu.php">Royahome Plus</a></li>
                <li class="breadcrumb-item"><a href="thuonghieu.php">Về thương hiệu RoyalHome Plus</a></li>
                </ol>
                </nav>
                </div>
        </div>
        <div class="row" id="tamnhin" >
            <div class="col-9">
                <h2 style="margin-top: 20px ; font-weight: 700; font-size: 25px; text-transform: uppercase;"><img src="./assets/img/logo2.png" alt="">Về thương hiệu royalhome plus</h2>
                <hr>
                <p style="font-weight: 700; font-size: 17px;">Royal Home Plus - Thương hiệu kết tinh tiếp theo trong năm 2020 của Royal Home</p>
                <p style="width:80%;">Royalhome là đơn vị hoạt động chuyên nghiệp trong lĩnh vực tư vấn, thiết kế kiến trúc, xây dựng và trang trí nội thất.
                    Với phương châm tạo ra một PHONG CÁCH SỐNG SANG CHO NGƯỜI THÀNH ĐẠT, Royal Home hướng đến đối tượng khách hàng cao cấp, hiện đại và có gu thẩm mỹ.</p>
                    
                <p style="width:80%;">Đội ngũ kiến trúc sư trên 9 năm kinh nghiệm, từng thiết kế rất nhiều dự án (Vinhomes, Park Hill, Sky Lake...), cùng những công trình chất lượng cao, thể hiện giá trị và tầm nhìn thời đại, giành được nhiều cảm tình của khách hàng chính là điểm mấu chốt gây ấn tượng trong sân chơi về kiến trúc - nội thất của Royal Home.</p>
                <img style="width:80%" src="./assets/img/thuonghieu1.jpg" alt=""><br>
                <i >Buổi "Grand Opening" đã diễn ra vô cùng sôi động, hứa hẹn nhiều thành quả trong tương lai</i>
                <p style="width:80%;">Năm 2020, kết tinh tiếp theo của Royal Home - là Royal Home Plus - chính thức ra đời - như một bước phát triển tiếp theo của Royal Home, không chỉ dừng chân ở chung cư, biệt thự cao cấp

                </p>
                <img style="width:80%" src="./assets/img/thuonghieu2.jpg" alt=""><br>
                <i>Buổi "Grand Opening" đã diễn ra vô cùng sôi động, hứa hẹn nhiều thành quả trong tương lai</i>
                <p style="width:80%;">Royal Home Plus là thương hiệu "con" - chuyên phục vụ cho đối tượng khách hàng trẻ tuổi, các nhà đầu tư bất động sản cho thuê - với các gói thiết kế nội thất cực kỳ hấp dẫn.</p>
                <p>Đây chính là cơ hội vàng cho phân khúc khách hàng trẻ khát khao được trải nghiệm dịch vụ thiết kế và thi công nội thất đạt chuẩn chuyên nghiệp của Royal Home.</p>
                <p style="font-weight: 700; font-size: 17px;">Vì sao sự trải nghiệm luôn nằm trong tầm tay của tất cả mọi người, vì: </p>
                <p>Royal Home Plus tạo ra các gói thiết kế nội thất đa dạng từ 40 - 200 triệu đồng.</p>
                    <p> Hơn thế nữa, ở Royal Home Plus:
                        <ul>
                            <li>Kế thừa tinh hoa của Royal Home - chuyên thiết kế nội thất chung cư và biệt thự cao cấp</li>
                            <li>Thiết kế "siêu tốc": từ 2 - 24h làm việc</li>
                            <li>Giá thiết kế tối ưu từ 120k/m2 - Được miễn phí 100% thiết kế khi thi công</li>
                            <li>Thi công nhanh từ 3-7 ngày</li>
                            <li>Chi phí thi công tối ưu: theo các gói từ 40tr-200tr</li>
                            <li>Được trải nghiệm dịch vụ tốt từ thương hiệu cao cấp RoyalHome chuyên làm biệt thự, chung cư cao cấp</li>
                            <li>Được trải nghiệm cách thức thiết kế công nghệ kiểu mới: tiếp cận không gian thực nhà mình bằng công nghệ VR</li>
                        </ul>
                    </p>
                    <p>Hãy giữ tinh thần hứng khởi cùng Royal Home Plus xây đắp lên những công trình hạnh phúc trong tương lai nhé!</p><br>
                    <p>Căn mẫu tại:</p>
                    <p style="font-weight: 700; font-size: 17px;">S2.18.26.20 và S2.18.26.22 - Phân khu Sapphire 2 - KĐT VinHome Ocean Park</p><br>
                    <p style="font-weight: 700; font-size: 17px;">Hotline: 09 666 555 00</p>
            </div>
            <div class="col-3">
                <div style="margin-top: 80px;" class="menu_gt">
                    <a href="">Giới thiệu</a><br>
                    <a href="">Tuyển dụng</a><br>
                    <a href="">Chính sách</a><br>
            </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="row">
            <div style="margin: 30px 0 0 50px" class="col-4">
                    <img src="./assets/img/logo.png" alt="">
                    <p>Địa chỉ trụ sở chính: Số 20 LK6D, KĐT Làng Việt Kiều Châu Âu, Mỗ Lao, Hà Đông, Hà Nội</p><br>
                    <p>Địa chỉ căn mẫu tại Vinhome Ocean Park: S2.18.26.20 và S2.18.26.22 - Phân khu The Sapphire 2 - KĐT Vinhome Ocean Park - Gia Lâm</p><br>
                    <p>Xưởng CS 1: Km36 - QL1A - Phú Xuyên - Hà Nội</p>
                    <p>Xưởng CS 2: KCN Lại Yên - Hoài Đức - Hà Nội</p>
                    <br>
                    <p>Hotline: <a href="">0356776475</a></p>
                    <br>
                    <p>Email: thietkeroyalhome@gmail.com</p>
            </div>

            <div style="text-align: center; margin-top: 70px;" class="col-4">
                <img src="./assets/img/logo1.png" alt="">
                <p>Giấy phép kinh doanh: 0106706130 - ngày cấp: 02/12/2014 cơ quan quản lý thuế Hà Nội</p>
            </div>
            <div style="padding:60px 0 0 40px; " class="col-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.1669293655095!2d105.78466723611074!3d20.985944675767197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad7d840727a7%3A0xb466db7495572c1a!2sRoyalHome%20Vi%E1%BB%87t%20Nam!5e0!3m2!1svi!2s!4v1633249243061!5m2!1svi!2s" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
         </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>