<?php
shuffle($product_shuffle);
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
                            <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>