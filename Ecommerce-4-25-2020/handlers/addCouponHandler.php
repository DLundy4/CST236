<?php
include_once '../includes/header.php';
include_once '../classes/coupons.php';

// get all the posted variables
$deal = $_POST["deal"];
$code = $_POST["code"];

// instantiate products
$bs = new coupons();

// use productDAO function to create a product
$bs->create_Coupon($deal, $code);

// go to admin_home.php
header("refresh:2;../pages/admin_home.php");
?>