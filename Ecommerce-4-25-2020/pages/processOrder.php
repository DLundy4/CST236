<?php 
$orderIDString = $_POST["orderIDString"];
$total = $_POST['total'];
$code = $_POST['code'];

include_once '../includes/header.php';
?>

<div align="center">
<form action="../handlers/orderProcessingHandler.php" method="post">
    <input type="hidden" name="orderIDString" value="<?php echo $orderIDString;?>" />
    <input type="hidden" name="total" value="<?php echo $total; ?>" />
    <input type="hidden" name="code" value="<?php echo $code; ?>"/>
    <div style="color: white">Credit Card Number:</div>
    <input type="text" name="card_number"/></br>
    <div style="color: white">Card Expiration:</div>
    <input type="text" name="card_expiration" placeholder="xx/xx" style="width: 3%;"/></br>
    <div style="color: white">CVV:</div>
    <input type="text" name="card_cvv" style="width: 3%;"/>
    </br></br>
    <button type="submit">Confirm Purchase</button>
</form>

</div>
</body>
</html>