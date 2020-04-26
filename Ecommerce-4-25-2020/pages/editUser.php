<?php 
$id = $_GET["id_user"];
$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];
$email = $_GET["email"];
$username = $_GET["username"];
$password = $_GET["password"];
include_once '../includes/header.php'; ?>

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