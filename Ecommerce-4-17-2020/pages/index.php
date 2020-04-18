<?php
include_once '../includes/header.php';
include_once '../includes/index_body.php';
if (!$_SESSION["principle"]) { ?>
	<div class="col-sm-4  box_color">
		<h3>Login</h3>
		<p>
		<form action="../handlers/login_handler.php" method="post">
			<div class="form-group">
				Username:
				<input type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				Password:
				<input type="password" class="form-control" name="password">
			</div>
			<button type="submit" class="btn btn-primary" id="login">Submit</button>
		</form>
		</p>
	</div>
<?php } ?>
</div>
</div>

<script src="Styles/bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</body>
</html>