<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinpost Express</title>
    <!-- using font GG -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!--Using CSS--------------------------->
    <link href="css/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!--fav icon--------------------------->
    <link rel="shortcut icon" href="/img/vin.ico">
    <!--Using FontAwesome------------>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="wrapper" class="wrapper">

        <!-- End Mobile toggle -->
        <!-- BACK TO TOP BTN -->
        <a href="#" onclick="topFunction()" id="back-to-top">
            <i class="fas fa-arrow-up"></i>
        </a>
        <header>
            <?php include 'header.php';?>
            

        </header>
        <section id="slider">
            <div class="slider-main">
                <div class="slideshow-container">
                    

                    <div class="mySlides fade">
                        <img src="../img/banner2.png" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img src="../img/banner.jpg" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img src="../img/banner1.jpg" style="width:100%">
                    </div>
<div class="mySlides fade">
                        <img src="../img/banner1.jpg" style="width:100%">
                    </div>

                    <a class="prev" onclick="plusSlides(-1)"><i class="fas fa-chevron-left"></i></a>
                    <a class="next" onclick="plusSlides(1)"><i class="fas fa-chevron-right"></i></a>

                </div>
            
            </div>

            <div class="tracking">
                <div class="container">
                    <div class="tracking-search">
                        <p>Tra cứu đơn</p>
                        <div class="search">
                            <input type="text" placeholder="Nhập vào đơn hàng cần tìm...">
                            <a href="#"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                    <div class="tracking-text">
                        <span>
                            <p>* Tìm kiếm đơn hàng của bạn để biết được trang thái đơn hàng
                            tại VinPost</p>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <section id="sevice">
            <div class="container">
                <div class="sevice-title">
                    <h1>Dịch vụ nổi bật</h1>
                </div>
                <div class="sevice-list">
                    <div class="sevice-item">
                        <i class="far fa-paper-plane"></i>
                        <p>Nhanh - An toàn - chính xác</p>
                        <h3>Chuyển phát Nhanh</h3>
                        <h2><a href="#">VCN</a></h2>
                    </div>
                    <div class="sevice-item">
                        <i class="far fa-paper-plane"></i>
                        <!-- <i class="fas fa-hand-holding-usd"></i> -->
                        <p>An tâm - tiết kiệm - kịp thời</p>
                        <h3>Chuyển phát Tiết Kiệm</h3>
                        <h2><a href="#">VTK</a></h2>
                    </div>
                    <div class="sevice-item">
                        <i class="far fa-paper-plane"></i>
                        <!-- <i class="fas fa-rocket"></i> -->
                        <p>Giao ngay trong 24h</p>
                        <h3>Chuyển phát Hỏa Tốc</h3>
                        <h2><a href="#">VHT</a></h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="post-offices" class="post-offices">
            <div class="container">
                <div class="post-left">
                    <h1>
                        Mạng lưới bưu cục trên <br>63 tỉnh thành
                    </h1>
                    <hr>
                    <span>
                        <p><b>Mạng lưới chuyển phát của VinPost </b>phủ sóng khắp<br> 63 tỉnh thành trên lãnh thổ Việt
                            Nam</p>
                    </span>
                    <div class="btn-hotline">
                        <i class="fas fa-phone-alt"></i>
                        <div class="hotline">
                            <p>hotline</p>
                            <h3>09xx.xxxx.xxx</h3>
                        </div>
                    </div>
                </div>
                <div class="post-right">
                    <div class="post-update">
                        <div class="post-update__user">
                            <i class="fas fa-user-tie"></i>
                            <div class="post-update__text">
                                <h2>328.252</h2>
                                <p>Khách hàng tin dùng</p>
                            </div>
                        </div>
                        <div class="post-update__user">
                            <i class="fas fa-cubes"></i>
                            <div class="post-update__text">
                                <h2>328.252</h2>
                                <p>Đơn hàng đang vận chuyển</p>
                            </div>
                        </div>
                    </div>
                    <div class="post-img">
                        <img src="./img/buucuc4.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="shipping-process" class="shipping-process">
            <div class="container">
                <div class="shipping-title">
                    <h1>Quy trình chuyển hàng</h1>
                </div>
                <div class="shipping-steps">
                    <div class="shipping-step__item">
                        <i class="far fa-file-alt"></i>
                        <p>1. Nhận báo giá</p>
                    </div>
                    <div class="shipping-step__item">
                        <i class="fas fa-box-open"></i>
                        <p>2. Đóng gói hàng hóa</p>
                    </div>
                    <div class="shipping-step__item">
                        <i class="fas fa-shipping-fast"></i>
                        <p>3. Vận chuyển hàng</p>
                    </div>
                    <div class="shipping-step__item">
                        <i class="fas fa-file-signature"></i>
                        <p>4. Ký nhận hàng</p>
                    </div>
                    <div class="shipping-step__item">
                        <i class="fas fa-people-carry"></i>
                        <p>5. Giao hàng tận tay</p>
                    </div>
                </div>
                <div class="shipping-info">
                    <div class="shipping-address">
                        <div class="shipping-btn">
                            <button class="active2">Hồ chí minh</button>
                            <button>Hà nội</button>
                            <button>Đà nẵng</button>
                        </div>
                        <div class="shipping-text">
                            <p>Địa chỉ:28 Vũ Ngọc Phan, P.13, Q.Bình Thạnh, TP.HCM</p>
                            <p>Điện thoại:09028454</p>
                        </div>
                        <div class="shipping-map">
                            <img src="/img/buucuc4.png" alt="">
                        </div>
                    </div>
                    <div class="shipping-form">
                        <div class="shipping-form__title">
                            Đăng kí chuyển hàng
                        </div>
                        <div class="shipping-form__input">
                            <input type="text" placeholder="Vui lòng nhập họ tên(*)">
                            <input type="number" placeholder="Vui lòng nhập số điện thoại(*)">
                            <input type="text" placeholder="Vui lòng nhập email(*)">
                            <input type="text" placeholder="Hãy cho chúng tôi biết yêu cầu của bạn(*)">

                            <button>Gửi</button>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section id="partner" class="partner">
            <div class="container">
                <div class="partner-title">
                    <h1>Đối tác</h1>
                </div>
                <div class="partner-brands">
                    <div class="carousel">
                        <div class="carousel-row">
                            <div class="carousel-tile"><img src="/img/fedex.png" alt=""></div>
                            <div class="carousel-tile"><img src="/img/fedex.png" alt=""></div>
                            <div class="carousel-tile"><img src="/img/fedex.png" alt=""></div>
                            <div class="carousel-tile"><img src="/img/fedex.png" alt=""></div>
                            <div class="carousel-tile"><img src="/img/fedex.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <?php include 'footer.php'; ?>
            
        </footer>
    </div>
    <script src="js/app.js"></script>
</body>

</html>