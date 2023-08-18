<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thi công nội thất</title>
    <link rel="icon" href="https://thietkeroyalhome.com/images/config/favicon_1545042774.ico">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./aseets/fonts/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
         .intro-gt a{
            color: black;
            text-decoration: none;
        }
        .intro-gt {
            border-bottom: 2px solid #dca500;
            margin: 0 auto 30px auto;
        }
        .backgroundbt img{
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
        .navi a {
            text-decoration: none;
            color: black;
            font-weight: 700;
            font-size: 23px;
            padding:  0 50px 0 50px;
            border-right: 3px solid black;
            border-left: 3px solid black;
        }
        .navi li { 
            display: inline;
        }
        .navi > ul{
            margin: 15px 0 0px 320px;
        }
        .navi a:hover {
            transform: scale(1.02);
            transition:ease-in 0.60s ;
            color: orange;
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
    <img src="./assets/img/bancat_1545301956.png" alt="">
    <p>THIẾT KẾ & THI CÔNG</p>
    <div class="navi" style="margin-left: 100px;"> 
        <ul>
            <li><a href="" style="color:rgb(255, 204, 51);">THI CÔNG NỘI THẤT</a></li>
            <li><a href="" >THIẾT KẾ NỘI THẤT</a></li>
            <li><a href="">ROYALHOME PLUS</a></li>
        </ul>
    </div> 
    <div class="intro-gioithieu">
        <div class="intro-gt" style="padding-top: 20px; width: 1200px;">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="">Thiết kế & thi công</a></li>
            <li class="breadcrumb-item"><a href="thicong.php">Thi công nội thất</a></li>
            </ol>
            </nav>
            </div>
    </div>
  </div>
  <div class="content23" style="text-align: center; margin-bottom: 50px;margin-top: 10px;">
    <a style=" text-decoration: none; color: black; font-size: 25px;font-weight: 600;padding-bottom: 15px; border-bottom: dashed 1px;" href="">THI CÔNG</a>
  </div>
  <div class="content_main">
   <div class="container" style="width: 1170px;">
    <div class="item_store">
      <div class="title">
          <h2 class="title_main"><a href=""><img src="./assets/img/logo2.png" alt="">Công trình đã thi công</a></h2>
      </div>
      <div class="row">
          <div class="col-12">
              <div id="carouselExampleControlsNoTouching6" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="row">
                          <div class="col-4">
                              <a href="" >
                                  <img src="./assets/img/cttc1.jpg" class="d-block w-100 img_m" alt="...">
                              </a>
                              <a href="" class="name_main">Thi công Biệt thự Harmony (Vinhomes Riverside giai đoạn 2)</a>
                          </div>

                          <div class="col-4">
                              <a href="">
                                  <img src="./assets/img/cttc2.jpg" class="d-block w-100 img_m" alt="...">
                              </a>
                              <a href="" class="name_main">Thi công Biệt thự Hoa Anh Đào Vinhomes Riverside</a>
                          </div>

                          <div class="col-4">
                              <a href="">
                                  <img src="./assets/img/cttc3.jpg" class="d-block w-100 img_m" alt="...">
                              </a>
                              <a href="" class="name_main">Thi công phòng khách nha lo 71 Lê Văn Lương - Anh Bắc</a>
                          </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row">
                          <div class="col-4">
                              <a href="">
                                  <img src="./assets/img/cttc4.jpg" class="d-block w-100 img_m" alt="...">
                              </a>
                              <a href="" class="name_main">Thi công Biệt thự VinHomes Thăng Long - Anh Hiền</a>
                          </div>

                          <div class="col-4">
                              <a href="">
                                  <img src="./assets/img/cttc5.jpg" class="d-block w-100 img_m" alt="...">
                              </a>
                              <a href="" class="name_main">Thi công phòng bếp nhà lô 71 Lê Văn Lương - Anh Bắc</a>
                          </div>

                          <div class="col-4">
                              <a href="">
                                  <img src="./assets/img/cttc6.jpg" class="d-block w-100 img_m" alt="...">
                              </a>
                              <a href="" class="name_main">Thi công phòng thờ nhà lô 71 Lê Văn Lương - Anh Bắc</a>
                          </div>
                      </div>
                    </div>

                  </div>
                  <button class="carousel-control-prev" style="margin: 160px 0px;" type="button" data-bs-target="#carouselExampleControlsNoTouching6" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" style="margin: 160px 0px;" type="button" data-bs-target="#carouselExampleControlsNoTouching6" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
          </div>
      </div>
      <div class="more">
          <a href="contrinhthicong.php">
              <span>››</span>
              Xem thêm
          </a>
      </div>
    </div>
    <div class="item_store">
      <div class="title">
          <h2 class="title_main"><a href=""><img src="./assets/img/logo2.png" alt="">Biệt thự</a></h2>
      </div>
      <div class="row">
          <div class="col-12">
              <div id="carouselExampleControlsNoTouching5" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="row">
                          <div class="col-4">
                              <a href="" >
                                  <img src="./assets/img/cttc7.jpg" class="d-block w-100 img_m" alt="...">
                              </a>
                              <a href="" class="name_main">Thi công Biệt thự Hoa Anh Đào Vinhomes Riverside</a>
                          </div>

                          <div class="col-4">
                              <a href="">
                                  <img src="./assets/img/cttc8.jpg" class="d-block w-100 img_m" alt="...">
                              </a>
                              <a href="" class="name_main">Thi công phòng khách nha lo 71 Lê Văn Lương - Anh Bắc</a>
                          </div>

                          <div class="col-4">
                              <a href="">
                                  <img src="./assets/img/cttc9.jpg" class="d-block w-100 img_m" alt="...">
                              </a>
                              <a href="" class="name_main">Thi công Biệt thự VinHomes Thăng Long - Anh Hiền</a>
                          </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row">
                          <div class="col-4">
                              <a href="">
                                  <img src="./assets/img/cttc10.jpg" class="d-block w-100 img_m" alt="...">
                              </a>
                              <a href="" class="name_main">Thi công Biệt thự BT27 - TT4 - TP. Giao Lưu - Anh Tuấn</a>
                          </div>

                          <div class="col-4">
                              <a href="">
                                  <img src="./assets/img/cttc11.jpg" class="d-block w-100 img_m" alt="...">
                              </a>
                              <a href="" class="name_main">Thi công Biệt thự BT23 - TT4 - TP. Giao Lưu - Anh Hồng</a>
                          </div>

                          <div class="col-4">
                              <a href="">
                                  <img src="./assets/img/cttc12.jpg" class="d-block w-100 img_m" alt="...">
                              </a>
                              <a href="" class="name_main">ẢNH HOÀN CÔNG NỘI THẤT BIỆT THỰ VINHOME THĂNG LONG - ANH HIỂN</a>
                          </div>
                      </div>
                    </div>

                  </div>
                  <button class="carousel-control-prev" style="margin: 160px 0px;" type="button" data-bs-target="#carouselExampleControlsNoTouching5" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" style="margin: 160px 0px;" type="button" data-bs-target="#carouselExampleControlsNoTouching5" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
          </div>
      </div>
      <div class="more">
          <a href="thicongbietthu.php">
              <span>››</span>
              Xem thêm
          </a>
      </div>
  </div>
  <div class="item_store">
    <div class="title">
        <h2 class="title_main"><a href=""><img src="./assets/img/logo2.png" alt="">Chung cư</a></h2>
    </div>
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleControlsNoTouching7" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                        <div class="col-4">
                            <a href="" >
                                <img src="./assets/img/cttc13.jpg" class="d-block w-100 img_m" alt="...">
                            </a>
                            <a href="" class="name_main">Ảnh thực tế căn hộ 2PN+1wc tại Vinhome Ocean Park</a>
                        </div>

                        <div class="col-4">
                            <a href="">
                                <img src="./assets/img/cttc14.jpg" class="d-block w-100 img_m" alt="...">
                            </a>
                            <a href="" class="name_main">Thi công Chung cư Mul</a>
                        </div>

                        <div class="col-4">
                            <a href="">
                                <img src="./assets/img/cttc15.jpg" class="d-block w-100 img_m" alt="...">
                            </a>
                            <a href="" class="name_main">Thi công Chung cư Golden Land </a>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                        <div class="col-4">
                            <a href="">
                                <img src="./assets/img/cttc16.jpg" class="d-block w-100 img_m" alt="...">
                            </a>
                            <a href="" class="name_main">Thi công Chung cư Mandarin - Anh Phong</a>
                        </div>

                        <div class="col-4">
                            <a href="">
                                <img src="./assets/img/cttc17.jpg" class="d-block w-100 img_m" alt="...">
                            </a>
                            <a href="" class="name_main">Thi công Chung cư Green Stars - Anh Hiếu</a>
                        </div>

                        <div class="col-4">
                            <a href="">
                                <img src="./assets/img/cttc18.jpg" class="d-block w-100 img_m" alt="...">
                            </a>
                            <a href="" class="name_main">Thi công Chung cư Mipec Long Biên - Anh Hùng</a>
                        </div>
                    </div>
                  </div>

                </div>
                <button class="carousel-control-prev" style="margin: 160px 0px;" type="button" data-bs-target="#carouselExampleControlsNoTouching7" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" style="margin: 160px 0px;" type="button" data-bs-target="#carouselExampleControlsNoTouching7" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
    <div class="more">
        <a href="thicongchungcu.php">
            <span>››</span>
            Xem thêm
        </a>
    </div>
</div>
<div class="item_store">
  <div class="title">
      <h2 class="title_main"><a href=""><img src="./assets/img/logo2.png" alt="">Thi công nhà phố</a></h2>
  </div>
  <div class="row">
      <div class="col-12">
          <div id="carouselExampleControlsNoTouching8" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                      <div class="col-4">
                          <a href="" >
                              <img src="./assets/img/cttc19.jpg" class="d-block w-100 img_m" alt="...">
                          </a>
                          <a href="" class="name_main">THI CÔNG NỘI THẤT NHÀ LIỀN KỀ GAMUDA GARDEN - CHỊ HOA</a>
                      </div>

                      <div class="col-4">
                          <a href="">
                              <img src="./assets/img/cttc20.jpg" class="d-block w-100 img_m" alt="...">
                          </a>
                          <a href="" class="name_main">Thi công phòng bếp nhà lô 71 Lê Văn Lương - Anh Bắc</a>
                      </div>

                      <div class="col-4">
                          <a href="">
                              <img src="./assets/img/cttc21.png" class="d-block w-100 img_m" alt="...">
                          </a>
                          <a href="" class="name_main">Thi công phòng thờ nhà lô 71 Lê Văn Lương - Anh Bắc</a>
                      </div>
                  </div>
                </div>
        

              </div>
              <button class="carousel-control-prev" style="margin: 160px 0px;" type="button" data-bs-target="#carouselExampleControlsNoTouching8" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" style="margin: 160px 0px;" type="button" data-bs-target="#carouselExampleControlsNoTouching8" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
      </div>
  </div>
  <div class="more">
      <a href="thicongnhapho.php">
          <span>››</span>
          Xem thêm
      </a>
  </div>
  <div class="item_store">
    <div class="title">
        <h2 class="title_main"><img src="./assets/img/logo2.png" alt=""><a href="">Thi công Công trình thương mại - Hội trường</a></h2>
    </div>
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleControlsNoTouching9" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                        <div class="col-4">
                            <a href="" >
                                <img src="./assets/img/cttc24.jpg" class="d-block w-100 img_m" alt="...">
                            </a>
                            <a href="" class="name_main">THI CÔNG NỘI THẤT NHÀ HÀNG NƯỚNG NHẬT BẢN ROYAL CITY</a>
                        </div>

                        <div class="col-4">
                            <a href="">
                                <img src="./assets/img/cttc25.jpg" class="d-block w-100 img_m" alt="...">
                            </a>
                            <a href="" class="name_main">Thi công Văn phòng Nước mặt Sông Hồng</a>
                        </div>

                        <div class="col-4">
                            <a href="">
                                <img src="./assets/img/cttc26.jpg" class="d-block w-100 img_m" alt="...">
                            </a>
                            <a href="" class="name_main">Tòa nhà Northern Diamond - Dự án Sông Hồng</a>
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                        <div class="col-4">
                            <a href="">
                                <img src="./assets/img/cttc27.jpg" class="d-block w-100 img_m" alt="...">
                            </a>
                            <a href="" class="name_main">Thi công công trình Thương mại - Khu phức hợp Sơn La</a>
                        </div>

                        <div class="col-4">
                            <a href="">
                                <img src="./assets/img/cttc28.jpg" class="d-block w-100 img_m" alt="...">
                            </a>
                            <a href="" class="name_main">Thi công Văn phòng Hapro</a>
                        </div>

                        <div class="col-4">
                            <a href="">
                                <img src="./assets/img/cttc29.jpg" class="d-block w-100 img_m" alt="...">
                            </a>
                            <a href="" class="name_main">Thi công phòng họp, phòng làm việc nhà lô 71 Lê Văn Lương - Anh Bắc</a>
                        </div>
                    </div>
                  </div>

                </div>
                <button class="carousel-control-prev" style="margin: 160px 0px;" type="button" data-bs-target="#carouselExampleControlsNoTouching9" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" style="margin: 160px 0px;" type="button" data-bs-target="#carouselExampleControlsNoTouching9" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
    <div class="more">
        <a href="thiconghoitruong.php">
            <span>››</span>
            Xem thêm
        </a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>