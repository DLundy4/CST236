<?php
include_once '../includes/session_Include.php';
include_once '../classes/ordersDAO.php';

$orderDetailsID = $_GET['orderDetailsID'];
$orderID = $_GET['orderID'];

$orderDAO = new ordersDAO();

$orderDAO->deleteOrderItem($orderID, $orderDetailsID);

echo "Deleted order: " . $orderID . " and " . $orderDetailsID;

header("refresh:2;../pages/cart.php");