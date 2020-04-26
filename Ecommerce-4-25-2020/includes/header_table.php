<?php
include_once '../includes/session_Include.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Index</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous"> -->
<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> -->

<!-- <link rel="stylesheet" href="Styles/bootstrap/css/bootstrap.min.css"> -->

<link rel="stylesheet" href="../Styles/main.css">

<style>
table, th, td {
    border: 1px solid black;
    background-color: white;
}

</style>
</head>
<body>
	<br>
	<div class="row">
			<img src="../images/logo2.jpg" alt="logo" class="center" style="border-style:solid; border-color:#656565; border-width:medium; border-radius: 50px"> 
<!-- 		<div class="col-sm-6 box_color_black"> -->
<!-- 			<img src="images/login.jpg" alt="logo" class="img_right_center"> -->
<!-- 		</div> -->
		
	</div>
	<br>

<?php if (!$_SESSION["principle"]) {
    include_once("../includes/navbar_notLoggedIn.php"); 
}
else {
    include_once("../includes/navbar_LoggedIn.php"); 
}
?>