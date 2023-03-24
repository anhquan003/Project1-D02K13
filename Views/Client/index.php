<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Home</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/home.css">
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>

<!--	Header	-->
<div id="header">
	<div class="container">
    	<div class="row">
        	<div id="logo" class="col-lg-3 col-md-3 col-sm-12">
            	<h1><a href="#"><img src="images/logo.png" style="width:200px;"></a></h1>
            </div>
            <div id="search" class="col-lg-6 col-md-6 col-sm-12">
                <form class="form-inline">
                    <input class="form-control mt-3" type="search" placeholder="Tìm kiếm" aria-label="Search">
                    <button class="btn btn-danger mt-3" type="submit">Tìm kiếm</button>
                </form>
            </div>
            <div id="cart" class="col-lg-3 col-md-3 col-sm-12">
            	<a class="mt-4 mr-2" href="#">giỏ hàng</a><span class="mt-3">8</span>
            </div>
        </div>
    </div>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#menu">
    	<span class="navbar-toggler-icon"></span>
    </button>
</div>
<!--	End Header	-->

<!--	Body	-->
<div id="body">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<nav>
                	<div id="menu" class="collapse navbar-collapse">
                        <ul>
                            <?php
                            foreach($arr['category'] as $item) {
                            ?>
                            <li class="menu-item"><a href="#"><?= $item['name'] ?></a></li>
                            <?php } ?>
                            <!-- <li class="menu-item"><a href="#">Samsung</a></li>
                            <li class="menu-item"><a href="#">HTC</a></li>
                            <li class="menu-item"><a href="#">Nokia</a></li>
                            <li class="menu-item"><a href="#">Sony</a></li>
                            <li class="menu-item"><a href="#">Blackberry</a></li> -->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
        	<div id="main" class="col-lg-8 col-md-12 col-sm-12">
            	<!--	Slider	-->
                
                <!--	End Slider	-->
                
                <!--	Feature Product	-->
                <div class="products">
                    <h3>Sản phẩm nổi bật</h3>
                    <div class="product-list row">
                        <?php
                        foreach($arr['featured'] as $item) {
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/<?= $item['image'] ?>"></a>
                                <h4><a href="#"><?= $item['name'] ?></a></h4>
                                <p>Giá Bán: <span><?= number_format($item['price']); ?>đ</span></p>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-2.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-3.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-4.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-5.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-6.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!--	End Feature Product	-->
                
                
                <!--	Latest Product	-->
                <div class="products">
                    <h3>Sản phẩm mới</h3>
                    <div class="product-list row">
                    <?php
                        foreach($arr['new'] as $item) {
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/<?= $item['image'] ?>"></a>
                                <h4><a href="#"><?= $item['name'] ?></a></h4>
                                <p>Giá Bán: <span><?= number_format($item['price']); ?>đ</span></p>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-1.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-2.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-3.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-4.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-5.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                            <div class="product-item card text-center">
                                <a href="#"><img src="images/product-6.png"></a>
                                <h4><a href="#">iPhone Xs Max 2 Sim - 256GB</a></h4>
                                <p>Giá Bán: <span>32.990.000đ</span></p>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!--	End Latest Product	-->
                
            </div>
            
            <div id="sidebar" class="col-lg-4 col-md-12 col-sm-12">
            	<div id="banner">
                	<div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-1.png"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-2.png"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-3.png"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-4.png"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-5.png"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner-6.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--	End Body	-->

<div id="footer-top">
	<div class="container">
    	<div class="row">
        	<div id="logo-2" class="col-lg-3 col-md-6 col-sm-12">
            	<h2><a href="#"><img src="images/logo.png" style="width:255px;"></a></h2>
                <p>
                	Chương trình Học viện Công nghệ BKACAD, Đại học Bách Khoa Hà Nội tiền thân là Học viện mạng Cisco Bách Khoa được thành lập theo Quyết định số 4251/QĐ-ĐHBK-TTĐTSĐH do Hiệu trưởng trường ĐH Bách Khoa HN ký ngày 05/11/2004. Đây là Chương trinh hợp tác chính thức của Trường Đại học Bách khoa Hà Nội với Tập đoàn Cisco Systems. 
                </p>
            </div>
            <div id="address" class="col-lg-3 col-md-6 col-sm-12">
            	<h3>Địa chỉ</h3>
                <p>Tòa nhà A17 Bách Khoa, 17 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội </p>
            </div>
            <div id="service" class="col-lg-3 col-md-6 col-sm-12">
            	<h3>Dịch vụ</h3>
            	<p>Bảo hành rơi vỡ, ngấm nước Care Diamond</p>
            	<p>Bảo hành Care X60 rơi vỡ ngấm nước vẫn Đổi mới</p>
            </div>
            <div id="hotline" class="col-lg-3 col-md-6 col-sm-12">
            	<h3>Hotline</h3>
            	<p>Phone Sale: 024 6650 7260</p>
                <p>Website: bkacad.edu.vn</p>
            </div>
        </div>
    </div>
</div>

<!--	Footer	-->
<div id="footer-bottom">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<p>
                    2023 © BKACAD Academy. All rights reserved. Developed by Hainp(Instrutor).
                </p>
            </div>
        </div>
    </div>
</div>
<!--	End Footer	-->
</body>
</html>
