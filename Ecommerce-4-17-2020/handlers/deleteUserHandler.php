<?php
include_once '../includes/session_Include.php';
include_once '../classes/userDAO.php';

// get all the get variables
$id = $_GET['id_user'];

// instantiate userDAO
$ds = new userDAO();

// use userDAO function to delete a user
$ds->deleteUser($id);

echo "Deleted user: " . $id;

header("refresh:2;../pages/admin_home.php");