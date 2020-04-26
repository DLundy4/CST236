<?php
include_once '../classes/orders.php';
include_once '../includes/header_table.php';

$rangeInput1 = $_GET["rangeInput1"];
$rangeInput2 = $_GET["rangeInput2"];
?>
<form action="salesReport.php" method="get">
	<div style="color: white; font-weight: bold;">
        Enter a date range to retrieve records from:<br/>
        Date 1:<br>
    </div>
    <div style="color: black;">
    	<input type="date" name="rangeInput1" style="width: 300px; text-align: center;"/>
    </div>
    <br/>
    <div style="color: white; font-weight: bold;">
    	Date 2:<br>
    </div>
    <div style="color: black;">
    	<input type="date" name="rangeInput2" style="width: 300px; text-align: center;"/>
    </div>
    <br/>
    <button type="submit">Submit</button>
</form>

<br/><br/>

<?php
if (isset($_GET["rangeInput1"]) && isset($_GET["rangeInput2"])) {
?>
<form action="../handlers/JSONHandler.php" method="get">
	<input type="hidden" name="rangeInput1" value="<?php echo $rangeInput1; ?>"/>
	<input type="hidden" name="rangeInput2" value="<?php echo $rangeInput2; ?>"/>
	<button type="submit">Get JSON</button>
</form>
<?php } else { ?>
    <form action="../handlers/JSONHandler.php" method="get">
        <input type="hidden" name="rangeInput1" value="<?php echo $rangeInput1; ?>"/>
        <input type="hidden" name="rangeInput2" value="<?php echo $rangeInput2; ?>"/>
        <button type="submit" disabled>Get JSON</button>
    </form>
    <br/>
<?php }

$orders = new orders();
$results = $orders->get_Sales_Report($rangeInput1, $rangeInput2);

?>

<div align="center">
    <table>

    <tr>
        <th>Product Ids</th>
        <th>Product Names</th>
        <th>Quantities</th>
    </tr>
    
    <?php
    for ($x = 0; $x < count($results); $x++){
        echo "<tr>";
        echo "<td>" . $results[$x]['products_id'] . "</td>";
        echo "<td>" . $results[$x]['product_name'] . "</td>";
        echo "<td>" . $results[$x]['quantity'] . "</td>";
        echo "</tr>";
    } ?>
    </table>
</div>

</body>
</html>