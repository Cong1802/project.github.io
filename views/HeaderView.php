<!--top start-->
<div class="top">
        <div class="container menu_top ">
            <ul class="row justify-content-between">
                <li>
                    <a href="#">Bản mobi</a>
                </li>
                <li>
                    <a href="#">Giới thiệu</a>
                </li>
                <li>
                    <a href="#">Sản phẩm đã xem</a>
                </li>
                <li>
                    <a href="#">Trung tâm bảo hành</a>
                </li>
                <li>
                    <a href="#">Tra cứu đơn hàng</a>
                </li>
                <li>
                    <a href="#">Đăng nhập</a>
                </li>
            </ul>
        </div>
    </div>
<!--top start-->
<div class="containerx">
<!--Topmain start-->
    <div class="top_main d-flex align-items-center justify-content-between py-2 py-md-4 flex-wrap">
        <div class="side_bar d-md-none d-block col-2 col-md-1">
                <button type="button" class="btn_sidebar">
                    <i class="fas fa-th-list"></i>
                </button>
        </div>
        <div class="logo col-xl-3 col-md-3 col-8 ">
            <a href="assets/frontend/home/layout/home.html"><img src="assets/frontend/home/images/Capture.PNG" class="img-fluid" alt="Responsive image"></a>
        </div>
        <div class="cart col-2 col-md-1 text-right ">
                <a href="">
                    <i class="fal fa-cart-arrow-down"></i>
                </a>
        </div>
        <div class="search col-xl-6 col-md-5 col-12">
            <form>
                <input type="text" name="text">
                <button type="button" name="search"><i class="fal fa-search text-white"></i></button>
            </form>
        </div>
        
        <div class="check_don col-2 ">
            <div class="oder p-1 text-white d-flex justify-content-center">
                <a href="" class="text-white">
                    <div ><i  class="fal fa-truck-moving"></i></div>
                    <div ><span >Kiểm tra đơn hàng</span></div>
                </a>
            </div>
        </div>
        
    </div>
<!--Topmain end-->
<!--menu start-->
    <div class="menu_main ">
        <div class="menu">
            <ul class="justify-content-around text-center align-items-center ul-menu">
                <li><a href=""><i class="fad fa-mobile-android-alt"></i><br/>Điệu thoại</a>
                    <div class="submenu py-5">
                        <div class="d-flex justify-content-around">
                            <div class="item">
                                <ul>
                                    <span>Hãng sản xuất</span>
                                    <?php 
                                        $conn = Connection::getInstance();
                                        $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
                                        $categories = $query->fetchAll();
                                    ?>  
                                    <?php foreach($categories as $rows): ?>
                                        <li><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
                                        <?php 
                                            $querySub = $conn->query("select * from categories where parent_id = {$rows->id} order by id desc");
                                            $categoriesSub = $querySub->fetchAll();
                                        ?>
                                            <?php foreach($categoriesSub as $rowsSub): ?>
                                                <li style="padding-left:20px;"><a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
                                            <?php endforeach; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="item ">
                                <ul>
                                    <span></span>
                                    <li><a href="">Samsung</a></li>
                                    <li><a href="">Realme</a></li>
                                    <li><a href="">Blackberry</a></li>
                                    <li><a href="">Huawei </a></li>
                                    <li><a href="">Itel </a></li>
                                </ul>
                            </div>
                            <div class="item ">
                                <ul>
                                    <li><a href="">Xiaomi</a></li>
                                    <li><a href="">NOKIA</a></li>
                                    <li><a href="">Philips</a></li>
                                    <li><a href="">Energiez </a></li>
                                </ul>
                            </div>
                            <div class="item ">
                                <ul>
                                    <span >Mức giá</span>
                                    <li><a href="">Dưới 1 triệu</a></li>
                                    <li><a href="">Từ 2 đến 3 triệu</a></li>
                                    <li><a href="">Từ 6 đến 8 triệu</a></li>
                                    <li><a href="">Từ 8 đến 12 triệu</a></li>
                                    <li><a href="">Trên 12 triệu</a></li>
                                </ul>
                            </div>
                            <div class="item ">
                                <ul>
                                    <span>Quan tâm nhất</span>
                                    <li><a href="">Hôm nay</a></li>
                                    <li><a href="">Tuần này</a></li>
                                    <li><a href="">Tháng này</a></li>
                                </ul>
                            </div>                     
                        </div>
                    </div>
                </li>
                <li><a href=""><i class="fal fa-watch"></i><br/>Đồng hồ</a>
                    <div class="submenu py-5">
                        <div class="d-flex justify-content-around">
                            <div class="item">
                                <ul>
                                    <li><a href="">Apple watch</a></li>
                                    <li><a href="">Amafiz</a></li>
                                    <li><a href="">OPPO</a></li>
                                </ul>
                            </div>
                            <div class="item ">
                                <ul>
                                    <li><a href="">Samsung</a></li>
                                    <li><a href="">Realme</a></li>
                                    <li><a href="">Đồng hồ trẻ em</a></li>
                                </ul>
                            </div>
                            <div class="item ">
                                <ul>
                                    <li><a href="">Xiaomi</a></li>
                                    <li><a href="">Huawei</a></li>
                                    <li><a href="">Garmin</a></li>
                                </ul>
                            </div>
                            <div class="item ">
                                <ul>
                                    <li><a href="">Tic watch</a></li>
                                    <li><a href="">Masstel</a></li>
                                    <li><a href="">Fitbit</a></li>
                                </ul>
                            </div>                      
                        </div>
                    </div>
                </li>
                <li><a href=""><i class="fal fa-laptop"></i><br/>Laptpo</a>
                    <div class="submenu py-5">
                        <div class="d-flex justify-content-around">
                        <div class="item">
                            <ul>
                                <li><a href=""><span>IMAC 2021</span></a></li>
                                <li><a href=""><span>MACBOOK</span></a></li>
                                <li><a href=""><span>MICROSOFT</span></a></li>
                            </ul>
                        </div>                    
                        </div>
                    </div>
                </li>
                <li><a href=""><i class="fal fa-tablet-android"></i><br/>Tablet</a>
                    <div class="submenu py-5">
                        <div class="d-flex justify-content-around">
                        <div class="item">
                            <ul>
                                <li><a href=""><span>IPAD</span></a></li>
                                <li><a href=""><span>SAMSUNG</span></a></li>
                                <li><a href=""><span>XIAOMI</span></a></li>
                            </ul>
                        </div>                    
                        </div>
                    </div>
                </li>
                <li><a href=""><i class="fal fa-headphones"></i><br/>Âm thanh </a>
                    <div class="submenu py-5">
                        <div class="d-flex justify-content-around">
                        <div class="item">
                            <ul>
                                <span>LOA</span>
                                <li><a href="">Energizer</a></li>
                                <li><a href="">LG</a></li>
                                <li><a href="">Tenki</a></li>
                                <li><a href="">Samsung</a></li>
                                <li><a href="">Divoom</a></li>
                                <li><a href="">Kardon</a></li>
                            </ul>
                        </div>
                        <div class="item ">
                            <ul>
                                <li><a href="">Huawei</a></li>
                                <li><a href="">Marshall</a></li>
                                <li><a href="">JBL</a></li>
                                <li><a href="">SONY</a></li>
                                <li><a href="">Apple</a></li>
                                <li><a href="">Anker</a></li>
                            </ul>
                        </div>
                        <div class="item ">
                            <ul>
                                <span>TAI NGHE</span>
                                <li><a href="">SONY</a></li>
                                <li><a href="">AKG</a></li>
                                <li><a href="">Huawei</a></li>
                                <li><a href="">Motorola</a></li>
                                <li><a href="">Pensen</a></li>
                                <li><a href="">Samsung</a></li>
                            </ul>
                        </div>
                        <div class="item ">
                            <ul>
                                <li><a href="">JBL</a></li>
                                <li><a href="">Apple Airpods</a></li>
                                <li><a href="">Iwakl</a></li>
                                <li><a href="">NOKIA</a></li>
                                <li><a href="">Plantronic</a></li>
                                <li><a href="">Sennheier</a></li>
                            </ul>
                        </div>                      
                        </div>
                    </div>
                </li>
                <li><a href=""><i class="fal fa-charging-station"></i><br/>Phụ kiện</a></li>
                <li><a href=""><i class="fal fa-gamepad"></i><br/>Đồ chơi công nghệ</a></li>
                <li><a href=""><i class="fal fa-home"></i><br/>Smart Home</a></li>
                <li><a href=""><i class="fab fa-buromobelexperte"></i><br/>Máy trôi</a></li>
                <li><a href=""><i class="fal fa-tools"></i><br/>Sửa chữa</a></li>
                <li><a href=""><i class="fal fa-sim-card"></i><br/>Sim thẻ</a></li>
                <li><a href=""><i class="fal fa-newspaper"></i><br/>Tin tức </a></li>
                <li><a href=""><i class="far fa-scroll"></i><br/>Flash sale</a></li>
                <li><a href=""><i class="fab fa-hotjar"></i><br/> Ct khuyến mại</a></li>
            </ul>
        </div>
    </div>
    <!--menu end-->
</div>