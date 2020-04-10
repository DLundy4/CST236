<?php
include_once '../includes/session_Include.php';
include_once '../classes/security_service.php';

// Save our Form Data
$username = $_POST["username"];
$password = $_POST["password"];

// Make sure posted Form Data is valid before selecting from the database
if ($username == NULL || trim($username) == "")
{
    exit("User Name is a required field");
}
if ($password == NULL || trim($password) == "")
{
    exit("Password is a required field");
}

// Create a Security Service and authenticate the User
$service = new SecurityService($username, $password);
if ($service->authenticate())
{
    $_SESSION["principle"] = true;
    include "../pages/loginPassed.php";
}
else
{
    $_SESSION["principle"] = false;
    include "../pages/loginFailed.php";
}