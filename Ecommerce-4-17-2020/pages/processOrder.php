<?php 
include_once '../includes/session_Include.php';

$orderIDString = $_POST["orderIDString"];

include_once '../includes/header.php';
?>

<div align="center">
<form action="../handlers/orderProcessingHandler.php" method="post">
<div style="color: white">
<input type="hidden" name="orderIDString" value="<?php echo $orderIDString;?>" />
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