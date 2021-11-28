<?php
// MySQL 연결 요청
require('database/DBController.php');

// product 클래스 요청
require('database/Product.php');


// DBController 객체
$db = new DBController();

// product 객체
$product = new Product($db);
