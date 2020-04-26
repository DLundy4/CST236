<?php
include_once '../includes/header.php';
include_once '../classes/orders.php';
include_once '../classes/coupons.php';

// get all the posted variables
$card_number = $_POST['card_number'];
$card_expiration = $_POST['card_expiration'];
$card_cvv = $_POST['card_cvv'];
$orderIDString = $_POST['orderIDString'];
$code = $_POST['code'];
$total = $_POST['total'];

// instantiate orders
$orders = new orders();
?>
<div align="center" style="color: white;">
<b>
<?php
if ($code == null || !isset($code) || $code == "") {
    echo "<br>Card Number: " . $card_number . "</br>";
    echo "Card Expiration: " . $card_expiration . "</br>";
    echo "Card CVV: " . $card_cvv . "</br></br>";
    echo "Total: $" . $total;
    echo "<br><br>Order Complete!";
    echo "<br><br><a href='../pages/index.php'>Home</a>";
}
else {
    $coupons = new coupons();
    $couponArr = $coupons->check_Coupon($code);
    if (count($couponArr) == 0) {
        echo "Coupon Invalid!";
        echo "<br><br><a href='../pages/index.php'";
    }
    else {
        $total -= $couponArr['deal'];
        $orders->create_Order_History($orderIDString);
        $coupons->delete_Coupon($couponArr['id_coupons']);
        echo "<br>Card Number: " . $card_number . "</br>";
        echo "Card Expiration: " . $card_expiration . "</br>";
        echo "Card CVV: " . $card_cvv . "</br></br>";
        echo "Total: $" . $total;
        
        echo "<br><br>Order Complete!";
        
        echo "<br><br><a href='../pages/index.php'>Home</a>";
    }
}
?>
</b>
</div>