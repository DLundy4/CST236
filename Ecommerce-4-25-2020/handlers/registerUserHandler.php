<?php 
include_once '../includes/session_Include.php';
include_once '../classes/users.php';

// get all the posted variables
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

// instantiate users
$bs = new users();

// use userDAO function to insert a user
$bs->create_User($firstname, $lastname, $email, $username, $password);

header("refresh:2;../pages/index.php");
?>