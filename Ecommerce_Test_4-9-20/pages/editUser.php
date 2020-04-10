<?php 
$id = $_GET["id_user"];
$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];
$email = $_GET["email"];
$username = $_GET["username"];
$password = $_GET["password"];
?>

<html>
<head><title>Edit User</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="../Styles/main.css">
</head>
<body>
	<br>
	<div class="row">
			<img src="../images/logo2.jpg" alt="logo" class="center" style="border-style:solid; border-color:#656565; border-width:medium; border-radius: 50px"> 
	</div>
	<br>
<?php include_once("../includes/navbar_notLoggedIn.php"); ?>
<div class="box_color" align="center" style="border-style: solid; border-radius: 15px; text-align: center;">
	<form action="../handlers/editUserHandler.php" method="post">
	<div class="form-group">
		First Name:<br>
			<input type="text" name="firstname" value=<?php echo $firstname?> placeholder=<?php echo $firstname?>>
			</div>
			<div class="form-group">
		Last Name:<br>
			<input type="text" name="lastname" value=<?php echo $lastname?> placeholder=<?php echo $lastname?>>
			</div>
			<div class="form-group">
		Email:<br>
			<input type="email" name="email" value=<?php echo $email?> placeholder=<?php echo $email?>>
			</div>
			<input type="hidden" name="username" value=<?php echo $username?>>
			<div class="form-group">
		Password:<br>
			<input type="text" name="password" value=<?php echo $password?> placeholder=<?php echo $password?>>
			</div>
			<input type="hidden" name="id_user" value=<?php echo $id ?>>
			<button type="submit" id="login">Update</button>
	</form>
	</div>
</body>
</html>