<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ quản trị</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
</head>
<body>
    <h1 align="center">Trang Chủ Quản Trị</h1>
    <div class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h1>AH - Store</h1>
                </div>
                <div class="col-md-3 text-right">
                    <a href="?controller=login&action=logout" class="btn btn-info">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        Trang chủ
                    </a>
                    <a href="?controller=admin&redirect=user" class="list-group-item list-group-item-action">Quản lý thành viên</a>
                    <a href="?controller=admin&redirect=product" class="list-group-item list-group-item-action">Quản lý sản phẩm</a>
                    <a href="#" class="list-group-item list-group-item-action">Quản lý đơn hàng</a>
                </div>
            </div>
            <div class="col-md-9">
                <h2>Giao diện Content</h2>
            </div>
        </div>
    </div>
</body>
</html>