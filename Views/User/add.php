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
<div class="container">
    <form method="post" action="?controller=<?= $controller ?>&action=store">
        <?php if(isset($errorr)) {echo $errorr;} ?>
        <h1 align="center">Thêm mới thành viên</h1>
        <div class="mb-3">
            <label for="username" class="form-label">Tài khoản</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Nhập tài khoản..." required>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">Họ & tên</label>
            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Nhập Họ & tên..." required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mật khẩu</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Nhập mật khẩu..." required>
        </div>
        <div class="mb-3">
            <label for="re_password" class="form-label">Nhập lại mật khẩu</label>
            <input type="password" id="re_password" name="re_password" class="form-control" placeholder="Nhập lại mật khẩu...">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Thêm mới</button>
        <button type="reset" name="reset" class="btn btn-warning">Nhập lại</button>
    </form>
</div>
</body>
</html>