<?php
include_once '../includes/session_Include.php';
include_once '../classes/products.php';

// get all the posted variables
$id = $_POST["id_products"];
$productName = $_POST["product_name"];
$price = $_POST["price"];
$imageName = $_POST["image_name"];
$shortDesc = $_POST["short_description"];
$longDesc = $_POST["long_description"];
$category = $_POST["category"];
$inventory = $_POST["inventory"];

// instantiate productDAO
$bs = new products();

// use productDAO function to update a product
$bs->update_Product($id, $productName, $price, $imageName, $shortDesc, $longDesc, $category, $inventory);

header("refresh:2;../pages/admin_home.php");