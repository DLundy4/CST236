<?php
include_once '../includes/session_Include.php';
include_once '../classes/ordersDAO.php';

// get all the get variables
$quantity = $_GET["quantity"];
$orderDetailsID = $_GET["orderDetailsID"];

// instantiate ordersDAO
$dao = new ordersDAO();

// use orderDAO function to edit an order
$dao->updateOrderItem($quantity, $orderDetailsID);

header("refresh:2;../pages/cart.php");