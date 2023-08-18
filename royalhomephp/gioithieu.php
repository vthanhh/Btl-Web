<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./aseets/css/style.css">
    <title>Giới thiệu</title>
    <link rel="icon" href="https://thietkeroyalhome.com/images/config/favicon_1545042774.ico">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./aseets/fonts/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <style>
        .intro-gt a{
            color: black;
            text-decoration: none;
        }

        .intro-gt {
            border-bottom: 2px solid #dca500;
            margin-bottom: 30px;
        }

        .list-gioithieu ul {
            list-style: none;
        }
        

        .view-item img{
            float: left;
            width: 207px;
            height: 104px;
            margin: 0px 20px 40px  0px;
        }
        .view-item a{
            text-decoration: none;
            color: black;
            margin-left: 20px;
        }
        .view-item  h3{
            color: black;
            margin-top: -30px;
            font-size: 20px;
            font-weight: bold;
        }
        .view-item  h3:hover{
            color: rgb(218, 218, 54);
        }
        .text-view p{
            color: black;
        }
        .view a{
            text-decoration: none;
            color: tomato;
        }
        footer{
            clear: both;
        }
    </style>
    <div class="page">
<header>
    <div class="row">
        <div class="col-3">
            <h1><img src="./assets/img/logo90_1545626799.png"></h1>
        </div>
        <div class="col-7">
            <ul class="nav" style="display: block;">
                <li><a href="index.html" >Trang chủ</a></li>
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
        <div id="intro1" style="margin-top:120px;margin-bottom: 20px;">
            <div class="container" style="width: 1170px;">
                <div class="row">
                    <div class="col-9">
                        <div class="intro-gioithieu">
                            <div class="intro-gt" style="padding-top: 20px;">
                                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="gioithieu.php">Giới thiệu</a></li>
                                </ol>
                                </nav>
                                </div>
                        </div>
                        <h2> <img src="./assets/img/logo2.png" alt="">GIỚI THIỆU</h2>
                        <hr>
                        <div class="list-gioithieu">
                            <ul>
                                <li>
                                    <div class="view-item" >
                                        <a href="gioithieuchung.php">
                                            <img src="./assets/img/gioithieu1.jfif" alt="">
                                            <h3>Giới thiệu chung</h3>
                                        </a>
                                    </div>
                                    <div class="text-view">
                                        <p>ROYALHOME – NÂNG TẦM ĐẲNG CẤP</p>
                                        
                                    </div>
                                </li>   
                                <div class="gg" style="clear: both;">
                                    <hr>
                                </div>                      
                                <li>
                                    <div class="view-item" style="clear: both;">
                                        <a href="tamnhin.php">
                                            <img src="./assets/img/tamnhin.jfif" alt="">
                                            <h3>Tầm nhìn - sứ mệnh</h3>
                                        </a>                                     
                                    </div>
                                </li>
                                <div class="gg" style="clear: both;">
                                    <hr>
                                </div>  
                                <li>
                                    <div class="view-item" style="clear: both;">
                                        <a href="giatricotloi.php">
                                            <img src="./assets/img/giatricotloi.jpg" alt="">
                                            <h3>Giá trị cốt lõi</h3>
                                        </a>
                                    </div>
                                </li>
                                <div class="gg" style="clear: both;">
                                    <hr>
                                </div>  
                                <li>
                                    <div class="view-item" style="clear: both;">
                                        <a href="vanhoadoanhnghiep.php">
                                            <img src="./assets/img/vanhoadoanhnghiep.jpg" alt="">
                                            <h3>Văn hóa doanh nghiệp</h3>
                                        </a>
                                    </div>
                                </li>
                                <div class="gg" style="clear: both;">
                                    <hr>
                                </div>  
                            </ul>
                        </div>
                    </div>
                    <div class="col-3" style="margin:30px 0px 0px  0px">
                        <div class="view">
                            <a href="#">GIỚI THIỆU</a>
                        </div>
                        <div class="view">
                            <a href="#">TUYỂN DỤNG</a>
                        </div>
                        <div class="view">
                            <a href="#">CHÍNH SÁCH</a>
                        </div>
                    </div>
                </div>
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
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</html>
