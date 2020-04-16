<?php
include_once '../includes/session_Include.php';
include_once '../classes/productDAO.php';

$id = $_GET['id_product'];

$ds = new productDAO();

$ds->deleteProduct($id);

echo "Deleted product: " . $id;

header("refresh:2;../pages/admin_home.php");