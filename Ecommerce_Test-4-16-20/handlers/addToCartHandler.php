<?php
include_once '../includes/session_Include.php';
include_once '../classes/db_connect.php';
include_once '../classes/ordersDAO.php';

$product_id = $_POST["product_id"];
$qty = $_POST["qty"];

$dao = new ordersDAO();

$dao->createOrderItem($product_id, $product_id, $qty);

header("refresh:2;../pages/product_search.php");
?>