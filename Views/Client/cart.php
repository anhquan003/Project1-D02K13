
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/success.css">
    <link rel="stylesheet" href="css/cart.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>

    <!--	Header	-->
    <div id="header">
        <div class="container">
            <div class="row">
                <div id="logo" class="col-lg-3 col-md-3 col-sm-12">
                    <h1><a href="/d02k13"><img src="images/logo.png" style="width:200px;"></a></h1>
                </div>
                <div id="search" class="col-lg-6 col-md-6 col-sm-12">
                    <form class="form-inline">
                        <input class="form-control mt-3" type="search" placeholder="Tìm kiếm" aria-label="Search">
                        <button class="btn btn-danger mt-3" type="submit">Tìm kiếm</button>
                    </form>
                </div>
                <div id="cart" class="col-lg-3 col-md-3 col-sm-12">
                    <a class="mt-4 mr-2" href="?redirect=cart">giỏ hàng</a>
                    <span class="mt-3">
                        <?php
                        // Hiển thị số lượng sản phẩm theo mã sản phẩm
                        if(isset($_SESSION["cart"])){
                            $totals = 0;
                            foreach($arr['product'] as $prd_id=>$qtt){
                                $totals++;
                            }
                            echo $totals;
                        }
                        else{
                            echo 0;
                        }
                        ?>
                    </span>
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
                                foreach ($arr['category'] as $item) {
                                ?>
                                    <li class="menu-item"><a href="#"><?= $item['name'] ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div id="main" class="col-lg-8 col-md-12 col-sm-12">
                    <!--	Slider	-->
                    <!--	End Slider	-->
                    <?php
                    if(isset($_SESSION['cart'])) {
                    ?>
                    <!--	Cart	-->
                    <div id="my-cart">
                        <div class="row">
                            <div class="cart-nav-item col-lg-7 col-md-7 col-sm-12">Thông tin sản phẩm</div>
                            <div class="cart-nav-item col-lg-2 col-md-2 col-sm-12">Tùy chọn</div>
                            <div class="cart-nav-item col-lg-3 col-md-3 col-sm-12">Giá</div>
                        </div>
                        <form method="post" action="?redirect=<?= $redirect ?>&action=update">
                            <?php
                            $total_price_all = 0;
                            foreach ($arr['product'] as $productID => $item) {
                                $total_price = $item['amount'] * $item["price"];
                                $total_price_all += $total_price; // Tính tổng tiền sản phẩm trong giỏ hành
                            ?>
                                <div class="cart-item row">
                                    <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                        <img src="images/<?= $item['image'] ?>">
                                        <h4><?= $item['name'] ?></h4>
                                    </div>

                                    <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                        <input type="number" id="quantity" name="qtt[<?= $productID ?>]" class="form-control form-blue quantity" value="<?= $item['amount'] ?>" min="1" max="<?= $item['quantity'] ?>">
                                    </div>
                                    <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b><?= number_format($item['price']); ?>đ</b><a href="?redirect=cart&action=del&id=<?= $productID ?>">Xóa</a></div>
                                </div>
                            <?php } ?>
                            <div class="row">
                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <button id="update-cart" class="btn btn-success" type="submit" name="sbm">Cập nhật giỏ hàng</button>
                                </div>
                                <div class="cart-total col-lg-2 col-md-2 col-sm-12"><b>Tổng cộng:</b></div>
                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b><?= number_format($total_price_all); ?>đ</b></div>
                            </div>
                        </form>

                    </div>
                    <!--	End Cart	-->

                    <!--	Customer Info	-->
                    <div id="customer">
                        <form method="post">
                            <div class="row">

                                <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Họ và tên (bắt buộc)" type="text" name="name" class="form-control" required>
                                </div>
                                <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Số điện thoại (bắt buộc)" type="text" name="phone" class="form-control" required>
                                </div>
                                <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Email (bắt buộc)" type="text" name="mail" class="form-control" required>
                                </div>
                                <div id="customer-add" class="col-lg-12 col-md-12 col-sm-12">
                                    <input placeholder="Địa chỉ nhà riêng hoặc cơ quan (bắt buộc)" type="text" name="add" class="form-control" required>
                                </div>

                            </div>
                        </form>
                        <div class="row">
                            <div class="by-now col-lg-6 col-md-6 col-sm-12">
                                <a href="#">
                                    <b>Mua ngay</b>
                                    <span>Giao hàng tận nơi siêu tốc</span>
                                </a>
                            </div>
                            <div class="by-now col-lg-6 col-md-6 col-sm-12">
                                <a href="#">
                                    <b>Trả góp Online</b>
                                    <span>Vui lòng call (+84) 0988 550 553</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--	End Customer Info	-->
                    <?php }else {
                        echo '<div class="alert alert-danger mt-3">Giỏ hàng của bạn hiện không có sản phẩm nào !</div>';
                    } ?>
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
