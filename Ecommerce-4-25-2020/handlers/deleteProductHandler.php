<?php
include_once '../includes/header.php';
include_once '../classes/products.php';

// get all the get variables
$id = $_GET['id_product'];

// instantiate products
$bs = new products();

// use productDAO function to delete a product
$bs->delete_Product($id);

echo "Deleted product: " . $id;

header("refresh:2;../pages/admin_home.php");