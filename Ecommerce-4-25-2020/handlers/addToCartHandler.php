<?php
include_once '../includes/header.php';
include_once '../classes/orders.php';

// get all the posted variables
$product_id = $_POST["product_id"];
$qty = $_POST["qty"];

// instantiate orderDAO
$bs = new orders();

// use orderDAO function to create an order
$bs->create_Order_Item($product_id, $qty);

// go to product_search.php
header("refresh:2;../pages/view_products.php");
?>