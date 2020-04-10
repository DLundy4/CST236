<?php
include_once '../includes/session_Include.php';
include_once '../classes/ordersDAO.php';

$quantity = $_GET["quantity"];
$orderDetailsID = $_GET["orderDetailsID"];

$dao = new ordersDAO();
$dao->updateOrderItem($quantity, $orderDetailsID);

header("refresh:2;../pages/cart.php");