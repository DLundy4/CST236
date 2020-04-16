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

<div class="jumbotron-fluid">
   <img class="img-responsive" src="../images/jumbo.jpg" alt="Corvette"> 
</div>
<br>

<div class="container">
  <div class="row">
    <div class="col-sm-4 box_color">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4  box_color">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
     <?php if (!$_SESSION["principle"]) { ?>
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