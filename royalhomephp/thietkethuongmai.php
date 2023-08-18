<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thiết kế thương mại</title>
    <link rel="icon" href="https://thietkeroyalhome.com/images/config/favicon_1545042774.ico">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./aseets/fonts/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        .backgroundbt img {
            position: relative;
            width: 100%;
        }
        .backgroundbt > p{
            position: absolute;
            top: 120px;
            color: #fff;
            font-size: 30px;
            margin-left: 800px;
            margin-top: 110px;
     
        }
        .intro-gt a{
            color: black;
            text-decoration: none;
        }
        .intro-gt {
            border-bottom: 2px solid #dca500;
            margin: 0 auto 30px auto;
        }
        .navi a {
            text-decoration: none;
            color: black;
            font-weight: 700;
            font-size: 23px;
            padding:  0 50px 0 50px;
            border-right: 3px solid black;
            border-left: 3px solid black;
        }
        .navi a:hover {
            transform: scale(1.02);
            transition:ease-in 0.60s ;
            color: orange;
        }
        .container img:hover {
            border-bottom:4px solid orange  ;
            transform: scale(1.02);
            transition:ease-in 0.20s ;
        }
        .navi li { 
            display: inline;
        }
        .navi > ul{
            margin: 15px 0 0px 320px;
        }
        #content-vp{
            width: 1200px;
            margin: auto;
            padding: 0;
            margin-bottom: 30px;
        }
        .col-4 a{
            text-decoration: none;
            color: black;
        }

        #content-vp .row .col-4 {
            padding-bottom: 10px;
        }

        #content-vp .row img {
            margin: 25px 0 5px 0;
        }

        .row h2{
            font-size: 25px;
            color: black;
            text-align: center;
            font-weight: bold;
            margin: 20px 0px 50px 0px;
        }
        .row img:hover {
            transform: scale(1.02);
            transition:ease-in 0.20s ;
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
    <div class="backgroundbt" style="margin-top: 105px;" >
        <img src="./assets/img/background.png" alt="">
        <p>THIẾT KẾ & THI CÔNG</p>
        <div class="navi" style="margin-left: 100px;">   
            <ul>
                <li><a href="" >THI CÔNG NỘI THẤT</a></li>
                <li><a href="" style="color:rgb(255, 204, 51);">THIẾT KẾ NỘI THẤT</a></li>
                <li><a href="">ROYALHOME PLUS</a></li>
            </ul>
        </div> 
        <div class="intro-gioithieu">
            <div class="intro-gt" style="padding-top: 20px; width: 1200px;">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="">Thiết kế & thi công</a></li>
                <li class="breadcrumb-item"><a href="thietkethuongmai.php">Thiết kế công trình thương mại - hội trường</a></li>
                </ol>
                </nav>
                </div>
        </div>
    </div>   
    <div id="content-vp">
            <div class="row">
                <p style="font-weight: bold;">Thiết kế công trình thương mại đòi hỏi tính thẩm mỹ cao, phù hợp với xu thế phát triển của xã hội, đồng thời còn phải phù hợp với cảnh quan khu vực. Cũng bởi những đòi hỏi mang tính chuyên nghiệp cao như thế, các kiến trúc sư của RoyalHome đã nghiên cứu và đưa ra các giải pháp nhằm đáp ứng nhu cầu công năng sử dụng cũng như hình thức kiến trúc. Với sự sáng tạo không ngừng, RoyalHome luôn tạo ra những sản phẩm riêng biệt, độc đáo, tiện nghi và chất lượng nhất.</p>
                <h2>THIẾT KẾ CÔNG TRÌNH THƯƠNG MẠI - HỘI TRƯỜNG</h2>
                <hr>
                <?php
                    require "../admin/config.php";
                    $sql = "select * from tbl_structures where Cate_ID = '7'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='col-4'>";
                            echo "<a href='struc_detail.php?struc_id=".$row["Struc_ID"]."'><img src='".$row["Image"]."' class='d-block w-100'>";
                            echo "<p>".$row["Struc_Name"]."</p></a>";
                            echo "</div>";
                        }
                    } 
                    else {
                        echo "0 results";
                    }

                ?>
            </div>
    </div>
            <div id="footer">
                <div class="container" style="width: 1170px;">
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
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>