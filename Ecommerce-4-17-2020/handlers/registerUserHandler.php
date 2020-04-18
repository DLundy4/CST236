<?php 
include_once '../includes/session_Include.php';
include_once '../classes/userDAO.php';

// get all the posted variables
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

// instantiate userDAO
$dao = new userDAO();

// use userDAO function to insert a user
$dao->createUser($firstname, $lastname, $email, $username, $password);

header("refresh:2;../pages/index.php");
?>