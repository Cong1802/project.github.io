<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
   	<link rel="stylesheet" href="assets/frontend/home/style/style_home.css" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
</head>
<body>
<!-- start main -->

    <?php
        include "views/HeaderView.php";
    ?>

<!-- end main-->

<div class="containerx">
<!--Slider start-->
    <div class="sliderz">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators slide_mini row justify-content-around m-0">
                <div data-target="#carouselExampleIndicators" data-slide-to="0" class="active   ">Đặt trước Reno6 | Reno6</div>
                <div data-target="#carouselExampleIndicators" data-slide-to="1">Appe watch SE - giảm sốc</div>
                <div data-target="#carouselExampleIndicators" data-slide-to="2">S21 Series</div>
                <div data-target="#carouselExampleIndicators" data-slide-to="3">IPhone XR - giảm sốc</div>
                <div data-target="#carouselExampleIndicators" data-slide-to="4">NOkia-x10-0</div>
                <div data-target="#carouselExampleIndicators" data-slide-to="4">Sale đồ gia dụng</div>
            </ol>
            <div class="carousel-inner scroll_slider">
                <div class="carousel-item active">
                    <img class="d-block w-100" style="border-radius: 10px;" src="assets/frontend/home/images/banner-03.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="border-radius: 10px;"  src="assets/frontend/home/images/banner-web1.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="border-radius: 10px;" src="assets/frontend/home/images/hotsale-galaxy-s21-plus-5g-web.png" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="border-radius: 10px;" src="assets/frontend/home/images/hotsale-mua-ngay-keo-lo-1200x382.png" alt="four slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="border-radius: 10px;" src="assets/frontend/home/images/web-nokia-x10-01.png" alt="five slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="border-radius: 10px;" src="assets/frontend/home/images/mop-pro.png" alt="six slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> 
    </div>
<!--Slider end-->
    <div class="phone_new d-flex justify-content-between">
        <a href=""><img class="col-11" src="assets/frontend/home/images/san-pham-hot-333.png"></a>
        <a href=""><img class="col-11" src="assets/frontend/home/images/san-pham-hot-s21.png"></a>
        <a href=""><img class="col-11" src="assets/frontend/home/images/san-pham-hot-z-flip.png"></a>
        <a href=""><img class="col-11" src="assets/frontend/home/images/ok-okoook-oaaaaa-aple.png"></a>
        </div>
        <div class="banner_watch mt-3 ">
        <img width="100%" src="assets/frontend/home/images/banner-tao-1.gif">
    </div>

<!-- start main -->

    <?php
        echo $this->view;
    ?>

<!-- end main-->

<!--Suport start-->
    <div class="support d-flex justify-content-between text-center">
        <div class="item">  
                <i class="fal fa-check-circle"></i>
                <p>Sản phẩm chính hãng</p>
        </div>
        <div class="item">  
                <i class="far fa-truck-moving"></i>
                <p>Miễn phí vận chuyển toàn quốc</p>
        </div>
        <div class="item">  
                <i class="fal fa-headphones-alt"></i>
                <p>Hotline hỗ trợ 1900.1086</p>
        </div>
        <div class="item">  
                <i class="far fa-exchange"></i>
                <p>Đổi trả dễ dàng</p>
        </div>
    </div>
<!--Suport end-->

<!--Footer start-->

    <div class="footer d-flex p-3">
        <div class="col-2">
            <span>Hỗ Trợ - Dịch Vụ</span>
            <p>Mua hàng trả góp
                Hướng dẫn đặt hàng và thanh toán
                Chính sách bảo hành
                Câu hỏi thường gặp
                Tra cứu đơn hàng
                Chính sách bảo mật
                Chính sách hủy giao dịch, đổi trả
                Chính sách giải quyết khiếu nại
                Điều khoản mua bán hàng hóa
                Phạm vi, điều khoản gói bảo hành mở rộng
            </p>
        </div>
        <div class="col-2">
            <span>Thông Tin Liên Hệ</span>
            <p>Bán hàng Online
                Chăm sóc Khách Hàng
                Hỗ Trợ Kỹ thuật
                Hỗ trợ Bảo hành & Sửa chữa
                Liên hệ khối văn phòng
            </p>
        </div>
        <div class="col-2">
            <span>Hệ thống 75 siêu thị trên toàn quốc</span>
            <p>Danh sách 75 siêu thị trên toàn quốc</p>
        </div>
        <div class="col-2">
            <span>Tổng đài</span>
            <p>1900.1068
            </p>
        </div>
        <div class="col-2">
            <span>Thanh toán miễn phí</span>
            <div>
                <img  class="py-1" src="assets/frontend/home/images/logo-visa.png">
                <img class="py-1" src="assets/frontend/home/images/logo-atm.png">
                <img  class="py-1" src="assets/frontend/home/images/logo-jcb.png">
                <img  class="py-1" src="assets/frontend/home/images/logo-master.png">
                <img  class="py-1" src="assets/frontend/home/images/logo-samsungpay.png">
                <img  class="py-1" src="assets/frontend/home/images/logo-vnpay.png">
            </div>
        </div>
        <div class="col-2">
            <span>Hình thức vận chuyển</span>
            <div>
                <img width="100%" class="py-1" src="assets/frontend/home/images/logo-bct.png">
                <img  class="py-1" src="assets/frontend/home/images/nhattin.jpg">
                <img  class="py-1" src="assets/frontend/home/images/vnpost.jpg">
            </div>
        </div>
    </div>
<!--Footer end-->
</div>
</body>
    <script type="text/javascript" src="assets/frontend/home/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/frontend/home/js/js_home.js"> </script> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>