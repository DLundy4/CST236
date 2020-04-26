<?php
include_once '../includes/header.php';
include_once '../classes/users.php';

// get all the posted variables
$id = $_POST["id_user"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];

// instantiate userDAO
$bs = new users();

// use userDAO function to update a user
$bs->update_User($id, $firstname, $lastname, $password, $email);

header("refresh:2;../pages/admin_home.php");
