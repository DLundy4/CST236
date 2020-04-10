<?php
include_once '../includes/session_Include.php';
include_once '../classes/userDAO.php';

$id = $_GET['id_user'];

$ds = new userDAO();

$ds->deleteUser($id);

echo "Deleted user: " . $id;

header("refresh:2;../pages/admin_home.php");