<?php 
$product_name = $_GET["product_name"];
$quantity = $_GET["quantity"];
$orderDetailsID = $_GET["orderDetailsID"];
include_once '../includes/header.php'; ?>

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