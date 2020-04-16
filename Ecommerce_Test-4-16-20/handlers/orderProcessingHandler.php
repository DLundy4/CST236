<?php
include_once '../classes/ordersDAO.php';

$card_number = $_POST['card_number'];
$card_expiration = $_POST['card_expiration'];
$card_cvv = $_POST['card_cvv'];
$orderIDString = $_POST['orderIDString'];

$ordersDAO = new ordersDAO();
$ordersDAO->createOrderHistory($orderIDString);

echo "<br>" . $card_number . "</br>";
echo $card_expiration . "</br>";
echo $card_cvv . "</br></br>";

echo "Order Complete! Going back to Home...";

header("refresh:4;../pages/index.php");