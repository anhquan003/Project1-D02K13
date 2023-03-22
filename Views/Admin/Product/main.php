<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        img {
            width: 50px;
            height: auto;
        }
    </style>
</head>
<body>
    <a href="?controller=admin" class="btn btn-info">Trang chủ</a>
    <h1 align="center">Danh sách sản phẩm</h1>
    <div class="container">
        <a href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=create" class="btn btn-success mb-3">+ Thêm sản phẩm</a>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá tiền</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Ảnh sản phẩm</th>
                    <th scope="col" colspan="2">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stt = 1;
                foreach($record as $item) {
                ?>
                <tr>
                    <th scope="row"><?= $stt; ?></th>
                    <td><?= $item['name']; ?></td>
                    <td><?= number_format($item['price']); ?>đ</td>
                    <td><?= $item['quantity']; ?></td>
                    <?php
                    if($item['featured'] == 1) {
                        echo '<td class="text-danger">Nổi bật</td>';
                    }else {
                        echo '<td>Không nổi bật</td>';
                    }
                    ?>
                    <td><img src="images/<?= $item['image']; ?>"></td>
                    <td><a href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=edit&id=<?= $item['id']; ?>" class="btn btn-info">Sửa</a></td>
                    <td><a onClick="confirm('Bạn có chắc chắn xóa sản phẩm không?')" href="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=destroy&id=<?= $item['id']; ?>" class="btn btn-danger">Xóa</a></td>
                </tr>
                <?php $stt++; } ?>
            </tbody>
        </table>
    </div>
</body>
</html>