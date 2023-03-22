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
    <?php foreach($record as $item) { ?>
<form method="post" action="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=update">
    <?php if(isset($errorr)) {echo $errorr;} ?>
    <h1 align="center">Sửa thành viên <?= $item['fullname'] ?></h1>
    <div class="mb-3">
        <input type="hidden" id="id" name="id" class="form-control" value="<?= $item['id'] ?>" readonly>
    </div>
    <div class="mb-3">
      <label for="username" class="form-label">Tài khoản</label>
      <input type="text" id="username" name="username" class="form-control" value="<?= $item['username'] ?>" required>
    </div>
    <div class="mb-3">
      <label for="fullname" class="form-label">Họ & tên</label>
      <input type="text" id="fullname" name="fullname" class="form-control" value="<?= $item['fullname'] ?>" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Mật khẩu</label>
      <input type="password" id="password" name="password" class="form-control" value="<?= $item['password'] ?>" required>
    </div>
    <div class="mb-3">
      <label for="re_password" class="form-label">Nhập lại mật khẩu</label>
      <input type="password" id="re_password" name="re_password" class="form-control" value="<?= $item['password'] ?>">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Sửa</button>
    <button type="reset" name="reset" class="btn btn-warning">Nhập lại</button>
</form>
    <?php } ?>
</div>
</body>
</html>