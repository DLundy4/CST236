<?php 
include_once '../includes/session_Include.php';
include_once '../classes/db_connect.php';
include_once '../classes/userDAO.php';

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

$dao = new userDAO();

$dao->createUser($firstname, $lastname, $email, $username, $password);

header("refresh:2;../pages/index.php");
?>