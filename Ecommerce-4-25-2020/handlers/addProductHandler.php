<?php
include_once '../includes/header.php';
include_once '../classes/products.php';

// get all the posted variables
$productName = $_POST["product_name"];
$price = $_POST["price"];
$imageName = $_POST["image_name"];
$shortDesc = $_POST["short_description"];
$longDesc = $_POST["long_description"];
$category = $_POST["category"];
$inventory = $_POST["inventory"];

// instantiate products
$bs = new products();

// use productDAO function to create a product
$bs->create_Product($productName, $price, $imageName, $shortDesc, $longDesc, $category, $inventory);

// go to admin_home.php
header("refresh:2;../pages/admin_home.php");
?>