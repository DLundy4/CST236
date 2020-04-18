<?php
include_once '../includes/session_Include.php';
include_once '../classes/userDAO.php';

// get all the posted variables
$id = $_POST["id_user"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];

// instantiate userDAO
$dao = new userDAO();

// use userDAO function to update a user
$dao->updateUser($id, $firstname, $lastname, $password, $email);

header("refresh:2;../pages/admin_home.php");
