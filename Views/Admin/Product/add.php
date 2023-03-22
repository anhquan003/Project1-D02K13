<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
    <h1 align="center">Thêm sản phẩm</h1>
    <div class="container">
        <form method="post" enctype="multipart/form-data" action="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=store" >
            <div>
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div>
                <label for="price" class="form-label">Giá sản phẩm</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div>
                <label for="quantity" class="form-label">Số lượng</label>
                <input type="text" class="form-control" id="quantity" name="quantity">
            </div>
            <div>
                <label for="image" class="form-label">Ảnh sản phẩm</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div>
                <label for="featured" class="form-label">Sản phẩm nổi bật</label>
                <input type="checkbox" id="featured" name="featured">
            </div>
            <div>Mô tả sản phẩm</div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Thêm vào</button>
            <button type="reset" class="btn btn-warning">Nhập lại</button>
        </form>
    </div>
</body>
<script>CKEDITOR.replace('description')</script>
</html>