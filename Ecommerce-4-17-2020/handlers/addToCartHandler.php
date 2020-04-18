<?php
include_once '../includes/session_Include.php';
include_once '../classes/ordersDAO.php';

// get all the posted variables
$product_id = $_POST["product_id"];
$qty = $_POST["qty"];

// instantiate ordersDAO
$dao = new ordersDAO();

// use orderDAO function to create an order
$dao->createOrderItem($product_id, $qty);

// go to product_search.php
header("refresh:2;../pages/product_search.php");
?>