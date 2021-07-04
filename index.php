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
        <!-- Header -->
        <?php include 'header.php';?>
        
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
                            <i>* Tra đơn hàng để biết được trạng thái đơn hàng của bạn</i>
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
                    <div class="sevice-item left-to-right play-on-scroll">
                        <i class="fas fa-paper-plane"></i>
                        <p>Nhanh - An toàn - chính xác</p>
                        <h3>Chuyển phát Nhanh</h3>
                        <h2><a href="#">VCN</a></h2>
                    </div>
                    <div class="sevice-item">
                        <i class="fas fa-hand-holding-usd"></i>
                        <!-- <i class="fas fa-hand-holding-usd"></i> -->
                        <p>An tâm - tiết kiệm - kịp thời</p>
                        <h3>Chuyển phát Tiết Kiệm</h3>
                        <h2><a href="#">VTK</a></h2>
                    </div>
                    <div class="sevice-item right-to-left play-on-scroll">

                        <i class="fas fa-rocket"></i>
                        <p>Giao ngay trong 24h</p>
                        <h3>Chuyển phát Hỏa Tốc</h3>
                        <h2><a href="#">VHT</a></h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="post-offices" class="post-offices">
            <div class="container">
                <div class="post-left p">
                    <h1>
                        Mạng lưới bưu cục trên <br>63 tỉnh thành
                    </h1>
                    <hr>
                    <span>
                        <p><b>Mạng lưới chuyển phát của VinPost </b>phủ sóng khắp<br> 63 tỉnh thành trên lãnh thổ Việt
                            Nam</p>
                    </span>
                    <div class="btn-hotline">
                        <i class="fas fa-phone-alt faa-ring animated fa-5x"></i>
                        <div class="hotline">
                            <p>hotline</p>
                            <h3><a href="tel:0345883555" style="color: #fff;">0345883555</a> </h3>
                        </div>
                    </div>
                </div>
                <div class="post-right">
                    <div class="post-update">
                        <div class="post-update__user">
                            <i class="fas fa-user-tie"></i>
                            <div class="post-update__text">
                                <h2 id="display-counter" class="play-on-scroll">328.252</h2>
                                <p>Khách hàng tin dùng</p>
                            </div>
                        </div>
                        <div class="post-update__user">
                            <i class="fas fa-cubes"></i>
                            <div class="post-update__text">
                                <h2 id="display-couter">328.252</h2>
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
                    <div class="shipping-step__item zoom play-on-scroll">
                        <i class="far fa-file-alt "></i>
                        <p>1. Nhận báo giá</p>
                    </div>
                    <div class="shipping-step__item zoom delay-2 play-on-scroll">
                        <i class="fas fa-box-open"></i>
                        <p>2. Đóng gói hàng hóa</p>
                    </div>
                    <div class="shipping-step__item zoom delay-4 play-on-scroll">
                        <i class="fas fa-shipping-fast"></i>
                        <p>3. Vận chuyển hàng</p>
                    </div>
                    <div class="shipping-step__item zoom delay-6 play-on-scroll">
                        <i class="fas fa-file-signature"></i>
                        <p>4. Ký nhận hàng</p>
                    </div>
                    <div class="shipping-step__item zoom delay-8 play-on-scroll">
                        <i class="fas fa-people-carry"></i>
                        <p>5. Giao hàng tận tay</p>
                    </div>
                </div>
                <div class="shipping-info">
                    <div class="shipping-address">
                        <div class="shipping-btn">
                            <button class=" btn-address active2"> Hồ chí minh</button>
                            <button class=" btn-address ">Hà nội</button>
                        </div>
                        <div class="shipping-text">
                            <p>Địa chỉ: A75/6C/7 Bạch Đằng, phường 2, quận Tân Bình, TP.HCM</p>
                            <p>Điện thoại: 0972827996</p>
                        </div>
                        <div class="shipping-text1">
                            <p>Địa chỉ: Số 22A, ngõ 95, phố Vũ Xuân Thiệu, phường Phúc Lợi, quận Long Biên, Hà Nội</p>
                            <p>Điện thoại: 0972827996</p>
                        </div>
                        <div class="shipping-map">
                            <!-- <img src="/img/buucuc4.png" alt=""> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244.93367941283796!2d106.67153411471745!3d10.8159901449415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175291ec470c209%3A0xb2a5a5c05bcd70e0!2zQTc1LzZDLzcgxJAuIELhuqFjaCDEkOG6sW5nLCBQaMaw4budbmcgMiwgVMOibiBCw6xuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1625393529217!5m2!1svi!2s" width="100%" height="240" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="shipping-form">
                        <div class="shipping-form__title">
                            Đăng kí chuyển hàng
                        </div>
                        <div class="shipping-form__input">
                            <form action="">
                            <input type="text" placeholder="Vui lòng nhập họ tên(*)">
                            <input type="number" placeholder="Vui lòng nhập số điện thoại(*)">
                            <input type="text" placeholder="Vui lòng nhập email(*)">

                            <textarea rows="4" cols="30" 
                                placeholder="Hãy cho chúng tôi biết yêu cầu của bạn"></textarea>
                            <button>Gửi</button>
                        </form>
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
        <!-- Footer -->
        <?php include 'footer.php'; ?>
        
    </div>
    <script src="js/app.js"></script>
    <script src="js/index.js"></script>
</body>

</html>