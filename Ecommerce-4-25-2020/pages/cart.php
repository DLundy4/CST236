<?php
include_once '../classes/orders.php';
include_once '../includes/header_table.php';

$orders = new Orders();
$results = $orders->get_All_Cart_Items();
$orderDetailsIDArray = $orders->get_Order_Details_IDs_For_Current_User();
$orderIDArray = $orders->get_Order_IDs_For_Current_User();
?>

<div align="center">
<table>

<tr>
<th>product_name</th>
<th>price</th>
<th>category</th>
<th>quantity</th>
</tr>

<?php
$total = 0;

for ($x = 0; $x < count($results); $x++){
    echo "<tr>";
    echo "<td>" . $results[$x]['product_name'] . "</td>";
    echo "<td>" . $results[$x]['price'] . "</td>";
    echo "<td>" . $results[$x]['category'] . "</td>";
    echo "<td>" . $results[$x]['quantity'] . "</td>";
    $total += $results[$x]['price'] * $results[$x]['quantity'];
    echo "<td><a href='../pages/editOrder.php?&product_name=" . $results[$x]['product_name'] . "&quantity="  . $results[$x]['quantity'] . "&orderDetailsID="  . $orderDetailsIDArray[$x] . "'" . ">Edit</a></td>";
    echo "<td><a href='../handlers/deleteOrderHandler.php?orderDetailsID="  . $orderDetailsIDArray[$x] . "&orderID="  . $orderIDArray[$x] . "'" . ">Delete</a></td>";
    echo "</tr>";
} ?>
</table>
</br>
<form action="../pages/processOrder.php" method="post">
<div style="color: white;"><b>Coupon Code: </b></div>
<input type="text" name="code"/>
</br></br>
<div style="background-color: white; width: 15%;">
	<b>Total: </b> $<?php echo $total; ?> </br>
</div>
</br>
<?php 
$orderIDsString = "";

for ($x = 0; $x < count($orderIDArray); $x++) {
    if ($x < count($orderIDArray) - 1) {
        $orderIDsString .= $orderIDArray[$x] . ", ";
    } else {
        $orderIDsString .= $orderIDArray[$x];
    }
}
?>
<input type="hidden" name="orderIDString" value="<?php echo $orderIDsString; ?>" />
<input type="hidden" name="total" value="<?php echo $total; ?>"/>
<button type="submit">Order Now</button>
</form>
</div>