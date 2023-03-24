<!--	Feature Product	-->
<div class="products">
    <h3>Sản phẩm nổi bật</h3>
    <div class="product-list row">
        <?php
        foreach ($arr['featured'] as $item) {
        ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                <div class="product-item card text-center">
                    <a href="?redirect=product&id=<?= $item['id'] ?>"><img src="images/<?= $item['image'] ?>"></a>
                    <h4><a href="?redirect=product&id=<?= $item['id'] ?>"><?= $item['name'] ?></a></h4>
                    <p>Giá Bán: <span><?= number_format($item['price']); ?>đ</span></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!--	End Feature Product	-->
<!--	Latest Product	-->
<div class="products">
    <h3>Sản phẩm mới</h3>
    <div class="product-list row">
        <?php
        foreach ($arr['new'] as $item) {
        ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                <div class="product-item card text-center">
                    <a href="?redirect=product&id=<?= $item['id'] ?>"><img src="images/<?= $item['image'] ?>"></a>
                    <h4><a href="?redirect=product&id=<?= $item['id'] ?>"><?= $item['name'] ?></a></h4>
                    <p>Giá Bán: <span><?= number_format($item['price']); ?>đ</span></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!--	End Latest Product	-->