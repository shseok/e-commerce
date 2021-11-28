<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">장바구니</h5>
        <!-- 장바구니 아이템 -->
        <div class="row">
            <div class="col-sm-9">
                <!-- 아이템 -->
                <?php
                foreach ($product->getData('cart') as $item) : // 두번 반복문을 돌린 이유 : 처음 array의 array를 가져오고 cart의 번호와 같은 것을 고르기 위함
                    $cartPram = $product->getProduct($item['item_id']); // return 값이 array의 array
                    $subTotal[] = array_map(function ($item) {
                        // array_map(function ($item) {
                ?>
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" style="height: 120px" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ??  "Unknown" ?></h5>
                                <small>by <?php echo $item['item_brand'] ??  "Brand" ?></small>
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-baloo font-size-14">20,543 ratings</a>
                                </div>
                                <div class="qty d-flex pt-2">
                                    <div class="d-flex font-baloo w-25">
                                        <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                        <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                    <button type="submit" class="btn font-baloo text-danger px-3 border-right">삭제</button>
                                    <button type="submit" class="btn font-baloo text-danger">Save for
                                        Later</button>
                                </div>
                            </div>
                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    <span class="product_price"><?php echo $item['item_price'] ??  0  ?></span>원
                                </div>
                            </div>
                        </div>
                <?php
                        return $item['item_price'];
                    }, $cartPram);
                endforeach;
                ?>
                <!-- 아이템 -->
            </div>
            <!-- subtotal -->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-baloo text-success py-3"><i class="fas fa-check"></i>해당 주문 금액으로
                        무료 배송 가능</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal (<?php echo count($subTotal) ?? 0; ?>):&nbsp;<span class="text-danger">
                                <span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $cart->getSum($subTotal) : 0; ?>원</span></span></h5>
                        <button class="btn btn-warning mt-3">구매진행</button>
                    </div>
                </div>
            </div>
            <!-- subtotal -->
        </div>
    </div>
</section>