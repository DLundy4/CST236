<?php
include_once '../includes/session_Include.php';
include_once '../classes/ordersDAO.php';

// get all the posted variables
$card_number = $_POST['card_number'];
$card_expiration = $_POST['card_expiration'];
$card_cvv = $_POST['card_cvv'];
$orderIDString = $_POST['orderIDString'];

// instantiate ordersDAO
$ordersDAO = new ordersDAO();

// use ordersDAO function to create an orderhistory
$ordersDAO->createOrderHistory($orderIDString);

echo "<br>" . $card_number . "</br>";
echo $card_expiration . "</br>";
echo $card_cvv . "</br></br>";

echo "Order Complete! Going back to Home...";

header("refresh:4;../pages/index.php");