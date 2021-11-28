<?php
shuffle($product_shuffle);

// request method post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['new_item_submit'])) { // form으로 보낸 것중 분별
        // call method addToCart
        $cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>
<section id="new-items">
    <div class="container">
        <h4 class="font-baloo font-size-20">New Items</h4>
        <hr>
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) { ?>
                <div class="item py-2 bg-light">
                    <div class="product font-baloo">
                        <a href="#"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name'] ?? "Unknown" ?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span><?php $item['item_price'] ?? 0 ?></span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <button type="submit" name="new_item_submit" class="btn btn-warning font-size-12">카트에 담기</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>