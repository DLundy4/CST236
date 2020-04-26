<?php
include_once '../includes/header.php';
include_once '../classes/orders.php';

// get all the get variables
$orderDetailsID = $_GET['orderDetailsID'];
$orderID = $_GET['orderID'];

// instantiate orderDAO
$bs = new orders();

// use orderDAO function to delete an order
$bs->delete_Order_Item($orderID, $orderDetailsID);

echo "Deleted order: " . $orderID . " and " . $orderDetailsID;

// go to cart.php
header("refresh:2;../pages/cart.php");