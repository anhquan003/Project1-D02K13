<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<a href="index.php" class="btn btn-info">Trang chủ</a>
<div><a class="btn btn-success m-5" href="?controller=<?= $controller ?>&action=create">+ Thêm thành viên</a></div>
<h1 align="center">Danh sách thành viên</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tài khoản</th>
        <th scope="col">Họ & tên</th>
        <th scope="col">Tác vụ</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $stt = 1;
    foreach($record as $item) {
        ?>
        <tr>
            <th scope="row"><?= $stt ?></th>
            <td><?= $item['username'] ?></td>
            <td><?= $item['fullname'] ?></td>
            <td>
                <a href="?controller=<?= $controller ?>&action=edit&id=<?= $item['id'] ?>" class="btn btn-info mr-2">Sửa</a>
                <a href="?controller=<?= $controller ?>&action=destroy&id=<?= $item['id'] ?>" class="btn btn-danger mr-2">Xóa</a>
            </td>
        </tr>
        <?php $stt++; } ?>
    </tbody>
</table>
</body>
</html>