<?php
include_once '../includes/session_Include.php';
include_once '../classes/ordersDAO.php';

// get all the get variables
$orderDetailsID = $_GET['orderDetailsID'];
$orderID = $_GET['orderID'];

// instantiate ordersDAO
$orderDAO = new ordersDAO();

// use ordersDAO function to delete an order
$orderDAO->deleteOrderItem($orderID, $orderDetailsID);

echo "Deleted order: " . $orderID . " and " . $orderDetailsID;

// go to cart.php
header("refresh:2;../pages/cart.php");