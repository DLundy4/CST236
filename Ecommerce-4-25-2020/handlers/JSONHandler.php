<?php
include_once '../includes/session_Include.php';
include_once '../classes/orders.php';

// get all the get variables
$rangeInput1 = $_GET["rangeInput1"];
$rangeInput2 = $_GET["rangeInput2"];

// instantiate orderDAO
$orders = new orders();

// use orderDAO function to get sales report
$results = $orders->get_Sales_Report($rangeInput1, $rangeInput2);

$results2 = json_encode($results, JSON_PRETTY_PRINT);
echo $results2;
header('Content-Type: application/json');