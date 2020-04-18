<?php 
$productID = $_GET["id_products"];
$productName = $_GET["product_name"];
$price = $_GET["price"];
$imageName = $_GET["image_name"];
$shortDesc = $_GET["short_description"];
$longDesc = $_GET["long_description"];
$category = $_GET["category"];
$inventory = $_GET["inventory"];
include_once '../includes/header.php'; ?>

<div class="box_color" align="center" style="border-style: solid; border-radius: 15px; text-align: center;">
	<form action="../handlers/editProductHandler.php" method="post">
	<div class="form-group">
		<input type="hidden" name="id_products" value="<?php echo $productID; ?>">
		Product Name:<br>
			<input type="text" name="product_name" value="<?php echo $productName; ?>">
			</div>
			<div class="form-group">
		Price:<br>
			<input type="text" name="price" value="<?php echo $price; ?>">
			</div>
			<div class="form-group">
		Image Path:<br>
			<input type="text" name="image_name" value="<?php echo $imageName; ?>">
			</div>
			<div class="form-group">
		Short Description:<br>
			<input type="text" name="short_description" value="<?php echo $shortDesc; ?>">
			</div>
			<div class="form-group">
		Long Description:<br>
			<input type="text" name="long_description" value="<?php echo $longDesc; ?>">
			</div>
			<div class="form-group">
		Category:<br>
		<?php 
		switch ($category) {
		    case "GPU":
		        echo "<input type='radio' name='category' value='GPU' checked> GPU<br>";
		        echo "<input type='radio' name='category' value='CPU'> CPU<br>";
		        echo "<input type='radio' name='category' value='CASE'> CASE<br>";
		        break;
		    case "CPU":
		        echo "<input type='radio' name='category' value='GPU'> GPU<br>";
		        echo "<input type='radio' name='category' value='CPU' checked> CPU<br>";
		        echo "<input type='radio' name='category' value='CASE'> CASE<br>";
		        break;
		    case "CASE":
		        echo "<input type='radio' name='category' value='GPU'> GPU<br>";
		        echo "<input type='radio' name='category' value='CPU'> CPU<br>";
		        echo "<input type='radio' name='category' value='CASE' checked> CASE<br>";
		        break;
		    default:
		        break;
		}
		
		?>
			</div>
			<div class="form-group">
		Inventory:<br>
			<input type="text" name="inventory" value="<?php echo $inventory; ?>">
			</div>
			<button type="submit">Update</button>
	</form>
	</div>
</body>
</html>