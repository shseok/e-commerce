<?php
// "Warning: Cannot modify header information - headers already sent by" error 해결
ob_start();
// include header
include('header.php');
?>

<?php

// include cart template
include('./Template/_cart-template.php');

// include new items
include('Template/_new-items.php');

?>

<?php
// include footer
include('footer.php');
?>