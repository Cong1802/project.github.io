<?php
$this->fileLayout = "LayoutTrangChu.php";
?>
    
    <div class="watch col-4 d-flex align-items-center justify-content-center my-3 py-1">
        <a href="">CÓ THỂ BẠN SẼ THÍCH</a>
    </div>
    
    <!--hotproducts-->

    <div class="apple_product d-flex flex-wrap justify-content-around">
        <?php
            $hotproduct = $this->modelHotProducts(); 
        ?>
        <?php foreach($hotproduct as $rows):?>
        <div class="card d-flex my-sm-2 my-md-2 ">
            <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
            <img  class="sale_hot" src="assets/frontend/home/images/gia-soc.png">
            <div class="card_sale"><i class="fas fa-bolt"></i> <span>Giảm giá <?php echo number_format($rows->price - (($rows->price - ($rows->price * $rows->discount)/100))) ?>đ</span></div>
            <img src="assets/frontend/home/images/apple.png" class="p-2" width="35%">
            <img class="card-img-top img" src="assets/upload/products/<?php echo $rows->photo ?>"  alt="Card image cap">
            <div class="card-body body_custom">
                <p class="card-title font-weight-bold text-center"><?php echo $rows->name?></p>
                <p class="card-text text-center"><span class="text-danger font-weight-bold"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100) ?> </span><strike><?php echo number_format($rows-> price )?></strike></p>
            </div>
            <span type="button" class="p-2" style="font-size: 8px;" data-placement="top" title="">
            <span style="background-color:#f7941e ; font-size: 8px;border-radius: 20%;"class="text-white p-1">KM</span>Giảm thêm 1.000.000đ khi thu cũ và đổi ...
            </span>
            </a>
        </div> 
        <?php endforeach ?>
    </div>

    <!--hotproducts-->
    <div class="watch col-4 d-flex align-items-center justify-content-center my-3 py-1">
        <a href="">APPLE AUTHORISED RESELLER</a>
    </div>
    <!--apple-->
    <div class="apple_product d-flex flex-wrap justify-content-around">
        <div class="card d-flex my-sm-2 my-md-2 ">
            <a href="assets/frontend/home/assets/frontend/home/product/layout/thongtinsp.html">
            <img  class="sale_hot" src="assets/frontend/home/images/gia-soc.png">
            <div class="card_sale"><i class="fas fa-bolt"></i> <span>giảm 6.300.000đ</span></div>
            <img src="assets/frontend/home/images/apple.png" class="p-2" width="35%">
            <img class="card-img-top img" src="assets/frontend/home/images/ip2.png"  alt="Card image cap">
            <div class="card-body body_custom">
                <p class="card-title font-weight-bold text-center">Apple iPhone 12 Pro Max - 512GB - Chính hãng VN/A</p>
                <p class="card-text text-center"><span class="text-danger font-weight-bold">13.690.000đ </span><strike>19.990.000đ</strike></p>
            </div>
            <span type="button" class="p-2" style="font-size: 8px;" data-placement="top" title="">
            <span style="background-color:#f7941e ; font-size: 8px;border-radius: 20%;"class="text-white p-1">KM</span>Giảm thêm 1.000.000đ khi thu cũ và đổi ...
            </span>
            </a>
        </div>
        <div class="card d-flex my-sm-2 my-md-2 ">
            <a href="">
            <img  class="sale_hot" src="/images/gia-soc.png">
            <div class="card_sale"><i class="fas fa-bolt"></i> <span>giảm 6.300.000đ</span></div>
            <img src="assets/frontend/home/images/apple.png" class="p-2" width="35%">
            <img class="card-img-top img" src="assets/frontend/home/images/se-40.png"  alt="Card image cap">
            <div class="card-body body_custom">
                <p class="card-title font-weight-bold text-center">Apple iPhone 11 - 64GB - Chính hãng VN/ACard title</p>
                <p class="card-text text-center"><span class="text-danger font-weight-bold">13.690.000đ </span><strike>19.990.000đ</strike></p>
            </div>
            <span type="button" class="p-2" style="font-size: 8px;" data-placement="top" title="">
            <span style="background-color:#f7941e ; font-size: 8px;border-radius: 20%;"class="text-white p-1">KM</span>Giảm thêm 1.000.000đ khi thu cũ và đổi ...
            </span>
            </a>
        </div>
        <div class="card d-flex my-sm-2 my-md-2 ">
            <a href="">
            <img  class="sale_hot" src="assets/frontend/home/images/gia-soc.png">
            <div class="card_sale"><i class="fas fa-bolt"></i> <span>giảm 6.300.000đ</span></div>
            <img src="assets/frontend/home/images/apple.png" class="p-2" width="35%">
            <img class="card-img-top img" src="assets/frontend/home/images/se-41.png"  alt="Card image cap">
            <div class="card-body body_custom">
                <p class="card-title font-weight-bold text-center">Apple iPhone 11 - 64GB - Chính hãng VN/ACard title</p>
                <p class="card-text text-center"><span class="text-danger font-weight-bold">13.690.000đ </span><strike>19.990.000đ</strike></p>
            </div>
            <span type="button" class="p-2" style="font-size: 8px;" data-placement="top" title="">
            <span style="background-color:#f7941e ; font-size: 8px;border-radius: 20%;"class="text-white p-1">KM</span>Giảm thêm 1.000.000đ khi thu cũ và đổi ...
            </span>
            </a>
        </div>
        <div class="card d-flex my-sm-2 my-md-2 ">
            <a href="">
            <img  class="sale_hot" src="assets/frontend/home/images/gia-soc.png">
            <div class="card_sale"><i class="fas fa-bolt"></i> <span>giảm 6.300.000đ</span></div>
            <img src="assets/frontend/home/images/apple.png" class="p-2" width="35%">
            <img class="card-img-top img" src="assets/frontend/home/images/se-42.png"  alt="Card image cap">
            <div class="card-body body_custom">
                <p class="card-title font-weight-bold text-center">Apple iPhone 11 - 64GB - Chính hãng VN/ACard title</p>
                <p class="card-text text-center"><span class="text-danger font-weight-bold">13.690.000đ </span><strike>19.990.000đ</strike></p>
            </div>
            <span type="button" class="p-2" style="font-size: 8px;" data-placement="top" title="">
            <span style="background-color:#f7941e ; font-size: 8px;border-radius: 20%;"class="text-white p-1">KM</span>Giảm thêm 1.000.000đ khi thu cũ và đổi ...
            </span>
            </a>
        </div>
        <div class="card d-flex my-sm-2 my-md-2 ">
            <a href="">
            <img  class="sale_hot" src="assets/frontend/home/images/gia-soc.png">
            <div class="card_sale"><i class="fas fa-bolt"></i> <span>giảm 6.300.000đ</span></div>
            <img src="assets/frontend/home/images/apple.png" class="p-2" width="35%">
            <img class="card-img-top img" src="assets/frontend/home/images/se-49.png"  alt="Card image cap">
            <div class="card-body body_custom">
                <p class="card-title font-weight-bold text-center">Apple iPhone 11 - 64GB - Chính hãng VN/ACard title</p>
                <p class="card-text text-center"><span class="text-danger font-weight-bold">13.690.000đ </span><strike>19.990.000đ</strike></p>
            </div>
            <span type="button" class="p-2" style="font-size: 8px;" data-placement="top" title="">
            <span style="background-color:#f7941e ; font-size: 8px;border-radius: 20%;"class="text-white p-1">KM</span>Giảm thêm 1.000.000đ khi thu cũ và đổi ...
            </span>
            </a>
        </div>
        <div class="card d-flex my-sm-2 my-md-2 ">
            <a href="">
            <img  class="sale_hot" src="assets/frontend/home/images/gia-soc.png">
            <div class="card_sale"><i class="fas fa-bolt"></i> <span>giảm 6.300.000đ</span></div>
            <img src="/images/apple.png" class="p-2" width="35%">
            <img class="card-img-top img" src="assets/frontend/home/images/se-44.png"  alt="Card image cap">
            <div class="card-body body_custom">
                <p class="card-title font-weight-bold text-center">Apple iPhone 11 - 64GB - Chính hãng VN/ACard title</p>
                <p class="card-text text-center"><span class="text-danger font-weight-bold">13.690.000đ </span><strike>19.990.000đ</strike></p>
            </div>
            <span type="button" class="p-2" style="font-size: 8px;" data-placement="top" title="">
            <span style="background-color:#f7941e ; font-size: 8px;border-radius: 20%;"class="text-white p-1">KM</span>Giảm thêm 1.000.000đ khi thu cũ và đổi ...
            </span>
            </a>
        </div>
        <div class="card d-flex my-sm-2 my-md-2 ">
            <a href="">
            <img  class="sale_hot" src="assets/frontend/home/images/gia-soc.png">
            <div class="card_sale"><i class="fas fa-bolt"></i> <span>giảm 6.300.000đ</span></div>
            <img src="assets/frontend/home/images/apple.png" class="p-2" width="35%">
            <img class="card-img-top img" src="assets/frontend/home/images/se-45.png"  alt="Card image cap">
            <div class="card-body body_custom">
                <p class="card-title font-weight-bold text-center">Apple iPhone 11 - 64GB - Chính hãng VN/ACard title</p>
                <p class="card-text text-center"><span class="text-danger font-weight-bold">13.690.000đ </span><strike>19.990.000đ</strike></p>
            </div>
            <span type="button" class="p-2" style="font-size: 8px;" data-placement="top" title="">
            <span style="background-color:#f7941e ; font-size: 8px;border-radius: 20%;"class="text-white p-1">KM</span>Giảm thêm 1.000.000đ khi thu cũ và đổi ...
            </span>
            </a>
        </div>
        <div class="card d-flex my-sm-2 my-md-2 ">
            <a href="">
            <img  class="sale_hot" src="assets/frontend/home/images/gia-soc.png">
            <div class="card_sale"><i class="fas fa-bolt"></i> <span>giảm 6.300.000đ</span></div>
            <img src="assets/frontend/home/images/apple.png" class="p-2" width="35%">
            <img class="card-img-top img" src="assets/frontend/home/images/se-46.png"  alt="Card image cap">
            <div class="card-body body_custom">
                <p class="card-title font-weight-bold text-center">Apple iPhone 11 - 64GB - Chính hãng VN/ACard title</p>
                <p class="card-text text-center"><span class="text-danger font-weight-bold">13.690.000đ </span><strike>19.990.000đ</strike></p>
            </div>
            <span type="button" class="p-2" style="font-size: 8px;" data-placement="top" title="">
            <span style="background-color:#f7941e ; font-size: 8px;border-radius: 20%;"class="text-white p-1">KM</span>Giảm thêm 1.000.000đ khi thu cũ và đổi ...
            </span>
            </a>
        </div>
        <div class="card d-flex my-sm-2 my-md-2 ">
            <a href="">
            <img  class="sale_hot" src="assets/frontend/home/images/gia-soc.png">
            <div class="card_sale"><i class="fas fa-bolt"></i> <span>giảm 6.300.000đ</span></div>
            <img src="assets/frontend/home/images/apple.png" class="p-2" width="35%">
            <img class="card-img-top img" src="assets/frontend/home/images/se-47.png"  alt="Card image cap">
            <div class="card-body body_custom">
                <p class="card-title font-weight-bold text-center">Apple iPhone 11 - 64GB - Chính hãng VN/ACard title</p>
                <p class="card-text text-center"><span class="text-danger font-weight-bold">13.690.000đ </span><strike>19.990.000đ</strike></p>
            </div>
            <span type="button" class="p-2" style="font-size: 8px;" data-placement="top" title="">
            <span style="background-color:#f7941e ; font-size: 8px;border-radius: 20%;"class="text-white p-1">KM</span>Giảm thêm 1.000.000đ khi thu cũ và đổi ...
            </span>
            </a>
        </div>
        <div class="card d-flex my-sm-2 my-md-2 ">
            <a href="">
            <img  class="sale_hot" src="assets/frontend/home/images/gia-soc.png">
            <div class="card_sale"><i class="fas fa-bolt"></i> <span>giảm 6.300.000đ</span></div>
            <img src="assets/frontend/home/images/apple.png" class="p-2" width="35%">
            <img class="card-img-top img" src="assets/frontend/home/images/se-48.png"  alt="Card image cap">
            <div class="card-body body_custom">
                <p class="card-title font-weight-bold text-center">Apple iPhone 11 - 64GB - Chính hãng VN/ACard title</p>
                <p class="card-text text-center"><span class="text-danger font-weight-bold">13.690.000đ </span><strike>19.990.000đ</strike></p>
            </div>
            <span type="button" class="p-2" style="font-size: 8px;" data-placement="top" title="">
            <span style="background-color:#f7941e ; font-size: 8px;border-radius: 20%;"class="text-white p-1">KM</span>Giảm thêm 1.000.000đ khi thu cũ và đổi ...
            </span>
            </a>
        </div>
    </div>
    <!--apple-->

    <div class="banner2 my-3">
        <a href="" ><img width="100%" src="assets/frontend/home/images/wifi.gif"></a>
    </div>
    <div class="watch col-4 d-flex align-items-center justify-content-center my-3 py-1">
        <a href="">ĐỒNG HỒ THÔNG MINH</a>
    </div>

    <div class="slide_watch d-flex justify-content-around mb-5 text-center">
        
            <div id="carouselExampleControls" class="carousel slide col-3 " data-ride="carousel">
                        
                        <a class="carousel-inner d-flex justify-content-center">
                            <div class="carousel-item  active ">
                                <img class="pl-5" src="assets/frontend/home/images/watch1.png" alt="First slide">
                                <p>Apple Watch SE GPS + Cellular</p>
                                <h6 class="giasale">2.050.000đ <strike class="giagoc">2.950.000đ</strike></h6>
                            </div>
                            <div class="carousel-item   ">
                            <img class="pl-5" src="assets/frontend/home/images/watch2.png" alt="Second slide">
                                <p>Đồng hồ thông minh Đồng hồ Garmin Vivoactive 4S</p>
                                <h6 class="giasale">3.750.000đ <strike class="giagoc">4.150.000đ</strike></h6>
                            </div>
                            <div class="carousel-item  ">
                            <img class="pl-5" src="assets/frontend/home/images/watch9.png" alt="Second slide">
                                <p>Đồng hồ thông minh Apple Watch Series 6 (GPS)</p>
                                <h6 class="giasale">4.150.000đ <strike class="giagoc">4.950.000đ</strike></h6>
                            </div>
                    </a>
            </div>

            <div id="carouselExampleControls" class="carousel slide d-flex col-3" data-ride="carousel">
                        <a class="carousel-inner d-flex justify-content-center">
                            <div class="carousel-item  active ">
                            <img class="pl-5" src="assets/frontend/home/images/watch3.png" alt="First slide">
                                <p>Vòng đeo tay thông minh Xiaomi Mi Band 6 - Chính hãng</p>
                                <h6 class="giasale">5.550.000đ <strike class="giagoc">6.950.000đ</strike></h6>
                            </div>
                            <div class="carousel-item  ">
                            <img class="pl-5" src="assets/frontend/home/images/watch4.png" alt="Second slide">
                                <p>Vòng đeo tay thông minh Huawei Band 6 - Chính hãng</p>
                                <h6 class="giasale">4.250.000đ <strike class="giagoc">5.750.000đ</strike></h6>
                            </div>
                            <div class="carousel-item  ">
                            <img class="pl-5" src="assets/frontend/home/images/watch10.png" alt="Second slide">
                                <p>Đồng hồ thông minh Garmin Venu - Chính hãng FPT</p>
                                <h6 class="giasale">1.550.000đ <strike class="giagoc">2.050.000đ</strike></h6>
                            </div>
                    </a>
            </div>
            
                <div id="carouselExampleControls" class="carousel slide d-flex col-3" data-ride="carousel">
                        <a class="carousel-inner d-flex justify-content-center">
                            <div class="carousel-item  active ">
                            <img class="pl-5" src="assets/frontend/home/images/watch5.png" alt="First slide">
                                <p>Đồng hồ thông minh Đồng hồ Huami Amazfit GTS 2</p>
                                <h6 class="giasale">2.550.000đ <strike class="giagoc">2.950.000đ</strike></h6>
                            </div>
                            <div class="carousel-item  ">
                            <img class="pl-5" src="assets/frontend/home/images/watch6.png" alt="Second slide">
                                <p>Đồng hồ thông minh Samsung Galaxy Watch Active 2</p>
                                <h6 class="giasale">3.100.000đ <strike class="giagoc">4.050.000đ</strike></h6>
                            </div>
                            <div class="carousel-item  ">
                            <img class="pl-5" src="assets/frontend/home/images/watch11.png" alt="Second slide">
                                <p>Đồng hồ thông minh Garmin Vivoactive 4 - Chính hãng FPT</p>
                                <h6 class="giasale">2.650.000đ <strike class="giagoc">3.950.000đ</strike></h6>
                            </div>
                    </a>
            </div>

            <div id="carouselExampleControls" class="carousel slide d-flex col-3" data-ride="carousel">
                        <a class="carousel-inner d-flex justify-content-center">
                            <div class="carousel-item active ">
                            <img class=" pl-5" src="assets/frontend/home/images/watch8.png" alt="First slide">
                                <p>Đồng hồ thông minh Garmin Venu SQ - Chính hãng FPT</p>
                                <h6 class="giasale">5.050.000đ <strike class="giagoc">7.950.000đ</strike></h6>
                            </div>
                            <div class="carousel-item  ">
                            <img class="pl-5" src="assets/frontend/home/images/watch7.png" alt="Second slide">
                                <p>Đồng hồ thông minh Garmin Forerunner 45 - Chính hãng FPT</p>
                                <h6 class="giasale">3.450.000đ <strike class="giagoc">4.350.000đ</strike></h6>
                            </div>
                            <div class="carousel-item  ">
                            <img class=" pl-5" src="assets/frontend/home/images/watch12.png" alt="Second slide">
                                <p>Đồng hồ thông minh Samsung Galaxy Watch Active 2</p>
                                <h6 class="giasale">3.650.000đ <strike class="giagoc">5.900.000đ</strike></h6>
                            </div>
                    </a>
            </div>
    </div>
    <div class="banner3">
        <img src="assets/frontend/home/images/hotsale-giam-soc-venu-sq.jpg" width="100%">
    </div>
    <div class="watch col-4 d-flex align-items-center justify-content-center my-3 py-1">
        <a href="">LOA TAI NGHE NỔI BẬT</a>
    </div>
    <div class="slide_watch d-flex justify-content-around mb-5 text-center">
            <div id="carouselExampleControls" class="carousel slide col-3" data-ride="carousel">     
                        <a class="carousel-inner d-flex justify-content-center">
                            <div class="carousel-item  active ">
                                <img class="d-block w-55 pl-5" src="assets/frontend/home/images/Tai1 .png" alt="First slide">
                                <p>Tai nghe Samsung Galaxy Buds+ (SM-R175) - Chính Hãng</p>
                                <h6 class="giasale">1.150.000đ <strike class="giagoc">2.350.000đ</strike></h6>
                            </div>
                            <div class="carousel-item   ">
                            <img class="d-block pl-5 w-55" src="assets/frontend/home/images/Tai2.png" alt="Second slide">
                                <p>Tai nghe Galaxy Buds Pro - Chính hãng</p>
                                <h6 class="giasale">3.050.000đ <strike class="giagoc">4.150.000đ</strike></h6>
                            </div>
                            <div class="carousel-item  ">
                            <img class="d-block pl-5 w-55" src="assets/frontend/home/images/Tai9.png" alt="Second slide">
                                <p>Tai nghe Apple AirPods 2 - Case sạc thường chính hãng VN/A (MV7N2VN/A)</p>
                                <h6 class="giasale">2.150.000đ <strike class="giagoc">3.950.000đ</strike></h6>
                            </div>
                    </a>
            </div>

            <div id="carouselExampleControls" class="carousel slide d-flex col-3" data-ride="carousel">
                        <a class="carousel-inner d-flex justify-content-center">
                            <div class="carousel-item  active ">
                            <img class="d-block pl-5 w-55" src="assets/frontend/home/images/Tai3.png" alt="First slide">
                                <p>Loa Harman Kardon Soundstick 4 - Chính hãng</p>
                                <h6 class="giasale">5.550.000đ <strike class="giagoc">7.950.000đ</strike></h6>
                            </div>
                            <div class="carousel-item  ">
                            <img class="d-block pl-5 w-55" src="assets/frontend/home/images/Tai4.png" alt="Second slide">
                                <p>Tai nghe Tai Nghe Bluetooth JBL T110BT - Chính hãng</p>
                                <h6 class="giasale">550.000đ <strike class="giagoc">750.000đ</strike></h6>
                            </div>
                            <div class="carousel-item  ">
                            <img class="d-block pl-5 w-55" src="assets/frontend/home/images/Tai10.png" alt="Second slide">
                                <p>Loa Harman Kardon Neo chính hãng</p>
                                <h6 class="giasale">1.550.000đ <strike class="giagoc">2.050.000đ</strike></h6>
                            </div>
                    </a>
            </div>
            
                <div id="carouselExampleControls" class="carousel slide d-flex col-3" data-ride="carousel">
                        <a class="carousel-inner d-flex justify-content-center">
                            <div class="carousel-item  active ">
                            <img class="d-block pl-5 w-55" src="assets/frontend/home/images/Tai5.png" alt="First slide">
                                <p>Loa Bluetooth LG XBoom PL7 - chính hãng</p>
                                <h6 class="giasale">2.550.000đ <strike class="giagoc">2.950.000đ</strike></h6>
                            </div>
                            <div class="carousel-item  ">
                            <img class="d-block pl-5 w-55" src="assets/frontend/home/images/Tai6.png" alt="Second slide">
                                <p>Tai nghe LG Bluetooth Tone Free HBS-FN4 Chính hãng</p>
                                <h6 class="giasale">700.000đ <strike class="giagoc">2.050.000đ</strike></h6>
                            </div>
                            <div class="carousel-item  ">
                            <img class="d-block pl-5 w-55" src="assets/frontend/home/images/Tai11.png" alt="Second slide">
                                <p>Tai nghe True Wireless Sony WF-1000XM3 - Chính hãng</p>
                                <h6 class="giasale">2.650.000đ <strike class="giagoc">3.950.000đ</strike></h6>
                            </div>
                    </a>
            </div>

            <div id="carouselExampleControls" class="carousel slide d-flex col-3" data-ride="carousel">
                        <a class="carousel-inner d-flex justify-content-center">
                            <div class="carousel-item active ">
                            <img class="d-block pl-5 w-55" src="assets/frontend/home/images/Tai8.png" alt="First slide">
                                <p>Apple AirPods Pro - Chính Hãng VN/A</p>
                                <h6 class="giasale">5.050.000đ <strike class="giagoc">7.950.000dd</strike></h6>
                            </div>
                            <div class="carousel-item  ">
                            <img class="d-block pl-5 w-55" src="assets/frontend/home/images/Tai7.png" alt="Second slide">
                                <p>Tai nghe không dây Huawei Freebuds 4i - Chính hãng</p>
                                <h6 class="giasale">1.450.000đ <strike class="giagoc">2.350.000dd</strike></h6>
                            </div>
                            <div class="carousel-item  ">
                            <img class="d-block pl-5 w-55" src="assets/frontend/home/images/Tai12.png" alt="Second slide">
                                <p>Tai nghe Sony WH-1000XM4 - Chính hãng</p>
                                <h6 class="giasale">3.650.000đ <strike class="giagoc">4.900.000dd</strike></h6>
                            </div>
                    </a>
            </div>
        </div>
        <div class="watch col-4 d-flex align-items-center justify-content-center my-3 py-1">
            <a href="">PHỤ KIỆN</a>
        </div>

        <div class="slide_watch d-flex flex-wrap justify-content-around mb-5 p-1 p-lg-5 text-center">
            <div class="item col-6 col-md-4  col-lg-2">
                <img src="assets/frontend/home/images/pk1.png" class="p-4">
                <p>Thẻ nhớ - USB</p>
            </div>
            <div class="item col-6 col-md-4 col-lg-2 ">
                <img src="assets/frontend/home/images/pk2.png" class="p-4">
                <p>Tai nghe</p>
            </div>
            <div class="item col-6 col-md-4 col-lg-2">
                <img src="assets/frontend/home/images/pk3.png" class="p-4">
                <p>Sạc dự phòng</p>
            </div>
            <div class="item col-6 col-md-4 col-lg-2">
                <img src="assets/frontend/home/images/pk4.png" class="p-4">
                <p>Quạt để bàn</p>
            </div>
            <div class="item col-6 col-md-4 col-lg-2">
                <img src="assets/frontend/home/images/pk5.png" class="p-4">
                <p>Loa</p>
            </div>
            <div class="item col-6 col-md-4 col-lg-2">
                <img src="assets/frontend/home/images/pk6.png" class="p-4">
                <p>Củ sạc</p>
            </div>
            <div class="item col-6 col-md-4 col-lg-2">
                <img src="assets/frontend/home/images/pk7.png" class="p-4">
                <p>Camera</p>
            </div>
            <div class="item col-6 col-md-4 col-lg-2">
                <img src="assets/frontend/home/images/pk8.png" class="p-4">
                <p>Bộ phát wifi</p>
            </div>
            <div class="item col-6 col-md-4 col-lg-2">
                <img src="assets/frontend/home/images/pk9.png" class="p-4">
                <p>Apple</p>
            </div>
            <div class="item col-6 col-md-4 col-lg-2">
                <img src="assets/frontend/home/images/pk10.png" class="p-4">
                <p>Ốp lưng</p>
            </div>
            <div class="item col-6 col-md-4 col-lg-2">
                <img src="assets/frontend/home/images/pk12.png" class="p-4">
                <p>Máy lọc khí</p>
            </div>
            <div class="item col-6 col-md-4 col-lg-2">
                <img src="assets/frontend/home/images/pk11.png" class="p-4">
                <p>Robot</p>
            </div>
        </div>
        