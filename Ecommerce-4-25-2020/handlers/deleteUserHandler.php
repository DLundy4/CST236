<?php
include_once '../includes/header.php';
include_once '../classes/users.php';

// get all the get variables
$id = $_GET['id_user'];

// instantiate userDAO
$ds = new users();

// use userDAO function to delete a user
$ds->delete_User($id);

echo "Deleted user: " . $id;

header("refresh:2;../pages/admin_home.php");