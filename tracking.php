<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinpost Express/Tracking</title>
    <!-- using font GG -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!--Using CSS--------------------------->
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
        <?php include 'header.php';?>
        <section id="slug">
            <div class="container">
                <div class="slug-link">
                    <a href="index.html" class="slug-lv1">Trang chủ </a><i class="fas fa-caret-right"></i><a
                        class="slug-lv2" href=""> Tra cứu đơn hàng</a></i>
                </div>
            </div>
        </section>
        <section id="banner-sevice">
            <div class="banner-img">
                <img src="/img/background2.png" alt="">
                <div class="container">
                    <div class="tracking-banner-text">
                        <h1>Tra cứu đơn hàng</h1>
                        <p> Công cụ theo dõi của chúng tôi cung cấp cho <br> bạn quyền kiểm soát lô hàng bằng cách liên tục <br> thông báo để bạn có thể an tâm vận chuyển.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="track-wrapper">
            <div class="container">
                <div class="track-title">
                    <h1>
                        Nhập vào mã đơn hàng của Vinpost mà bạn cần tra cứu.
                    </h1>
                    <div class="track-btnId">
                        <div class="input-block">
                            <input type="text" name="input-text" id="input-text" required spellcheck="false">
                            <span class="placeholder">
                              Mã Đơn Hàng
                            </span>
                          </div>
                        <a href="#"><i class="fas fa-search"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="track-result">
            <div class="container">
                <div class="track-result__title"><h2>Thông tin đơn hàng</h2></div>
                <b>#DH56465456</b>
                <h3>Thời gian dự kiến:</h3>
                <p>Thứ ba, 24/7/2021 khoảng 16:30</p>
                <div class="track-processBar">
                    <ul>
                        <li>
                            <img src="../img/mouse-icon.png" alt=""><br>
                            <i class="fas fa-check"></i>
                            <p>Xác nhận đơn hàng</p>
                        </li>
                        <li>
                            <img src="../img/order1-icon.png" alt=""><br>
                            <i class="fas fa-sync-alt"></i>
                            <p>Đóng gói đơn hàng</p>
                        </li>
                        <li>
                            <img src="../img/delivery-icon.png" alt=""><br>
                            <i class="fas fa-times"></i>
                            <p>Vận chuyển đơn hàng</p>
                        </li>
                        <li>
                            <img src="../img/delivery-success-icon.png" alt=""><br>
                            <i class="fas fa-times"></i>
                            <p>Đã giao thành công</p>
                        </li>
                    </ul>
                </div>
                <div class="track-result__way">
                    <span><b style="White-space: nowrap;">Nhận từ</b><p>đường số 6, Linh Xuân, Thủ đức, HCM</p></span>
                    <span><b style="White-space: nowrap;">Giao đến</b><p>Thăng long,sdasdsadsaadss Hà nội</p></span>
                </div>
            </div>
            </div>
        </section>
        
            <?php include 'footer.php'; ?>
            
    </div>
    <script src="js/app.js"></script>
</body>

</html>