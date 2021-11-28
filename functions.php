<?php
// MySQL 연결 요청
require('database/DBController.php');

// product 클래스 요청
require('database/Product.php');

// cart 클래스 요청
require('database/Cart.php');

// DBController 객체
$db = new DBController();

// product 객체
$product = new Product($db);
$product_shuffle = $product->getData();

// cart 객체
$cart = new Cart($db);
print_r($cart->getCartId($product->getData('cart')));
