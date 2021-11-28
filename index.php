<?php
ob_start();
// include header.php
include('header.php');
?>

<?php

// include banner.php
include('Template/_banner-area.php');

// include top sale.php
include('Template/_top-sale.php');

// include top sale.php
include('Template/_special-price.php');

// include top sale.php
include('Template/_banner_adds.php');

// include top sale.php
include('Template/_new-items.php');

// include top sale.php
include('Template/_blogs.php'); // blogs -> review

?>

<?php
// include footer.php
include('footer.php');
?>