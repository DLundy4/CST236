<?php
include_once '../includes/session_Include.php';

if ($_SESSION["principle"]) {
    $_SESSION["principle"] = false;
    $_SESSION["admin"] = false;
    echo "Logging out...";
    header("refresh:2;../pages/index.php");
}