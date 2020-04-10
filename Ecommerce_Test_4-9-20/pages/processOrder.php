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

<?php
    include_once("../includes/navbar_LoggedIn.php");
?>

<div align="center">
<form action="../handlers/orderProcessingHandler.php" method="post">
<div style="color: white">
Credit Card Number:
</div>
<input type="text" name="card_number"/></br>
<div style="color: white">
Card Expiration:
</div>
<input type="text" name="card_expiration" placeholder="xx/xx" style="width: 3%;"/></br>
<div style="color: white">
CVV:
</div>
<input type="text" name="card_cvv" style="width: 3%;"/></br></br>
<button type="submit">Confirm Purchase</button>
</form>

</div>
	
</body>
</html>