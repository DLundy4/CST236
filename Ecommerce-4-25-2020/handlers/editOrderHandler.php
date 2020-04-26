<?php
include_once '../includes/session_Include.php';
include_once '../classes/orders.php';

// get all the get variables
$quantity = $_GET["quantity"];
$orderDetailsID = $_GET["orderDetailsID"];

// instantiate orderDAO
$bs = new orders();

// use orderDAO function to edit an order
$bs->update_Order_Item($quantity, $orderDetailsID);

header("refresh:2;../pages/cart.php");