<?php 
$product_name = $_GET["product_name"];
$quantity = $_GET["quantity"];
$orderDetailsID = $_GET["orderDetailsID"];
?>

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
    	<form action="../handlers/editOrderHandler.php" method="GET">
    		<div style="color: white;">
    			<b>Product:</b><br>
        			<div style="font-size: 25px;">
        				<b><?php echo $product_name; ?></b>
        			</div>
    			</br>
    			<b>Quantity:</b> 
    		</div>
    		<input type="text" name="quantity" value="<?php echo $quantity; ?>" />
    		
    		<input type="hidden" name="orderDetailsID" value="<?php echo $orderDetailsID; ?>" />
    		</br></br>
    		<button type="submit">Edit Order</button>
    	</form>
	</div>
</body>
</html>