<?php include_once '../includes/header.php'; ?>
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