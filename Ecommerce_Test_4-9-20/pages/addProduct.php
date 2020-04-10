<html>
<head><title>Add Product</title>
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
	<form action="../handlers/addProductHandler.php" method="post">
	<div class="form-group">
		Product Name:<br>
			<input type="text" name="product_name">
			</div>
			<div class="form-group">
		Price:<br>
			<input type="text" name="price">
			</div>
			<div class="form-group">
		Image Path:<br>
			<input type="text" name="image_name">
			</div>
			<div class="form-group">
		Short Description:<br>
			<input type="text" name="short_description">
			</div>
			<div class="form-group">
		Long Description:<br>
			<input type="text" name="long_description">
			</div>
			<div class="form-group">
		Category:<br>
			<input type="radio" name="category" value="GPU"> GPU<br>
			<input type="radio" name="category" value="CPU"> CPU<br>
			<input type="radio" name="category" value="CASE"> CASE<br>
			</div>
			<div class="form-group">
		Inventory:<br>
			<input type="text" name="inventory">
			</div>
			<button type="submit" id="login">Register</button>
	</form>
	</div>
</body>
</html>