<?php
include_once '../includes/session_Include.php';
include_once '../classes/productDAO.php';

// get all the get variables
$id = $_GET['id_product'];

// instantiate productDAO
$ds = new productDAO();

// use productDAO function to delete a product
$ds->deleteProduct($id);

echo "Deleted product: " . $id;

header("refresh:2;../pages/admin_home.php");