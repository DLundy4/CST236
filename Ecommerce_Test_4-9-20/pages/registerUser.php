<html>
<head><title>Register</title>
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
	<form action="../handlers/registerUserHandler.php" method="post">
	<div class="form-group">
		First Name:<br>
			<input type="text" name="firstname">
			</div>
			<div class="form-group">
		Last Name:<br>
			<input type="text" name="lastname">
			</div>
			<div class="form-group">
		Email:<br>
			<input type="email" name="email">
			</div>
			<div class="form-group">
		Username:<br>
			<input type="text" name="username">
			</div>
			<div class="form-group">
		Password:<br>
			<input type="text" name="password">
			</div>
			<button type="submit" id="login">Register</button>
	</form>
	</div>
</body>
</html>