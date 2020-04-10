<?php 
// Include all the classes needed
// Instantiate
// When you instantiate a class, you create an instance of it.
include_once '../classes/db_connect.php';
include_once '../classes/fetch_products.php';
include_once '../classes/products.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>View Product</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous"> -->

<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> -->

<!-- <link rel="stylesheet" href="Styles/bootstrap/css/bootstrap.min.css"> -->

<link rel="stylesheet" href="../Styles/main.css">
</head>
<body>

	<!-- Header for logo and login -->
	<div class="row">
		<div class="col-sm-6 box_color_img_black">
			<img src="../images/logo.jpg" alt="logo" class="img_left"> 
		</div>
	</div>

<!-- Include for Navigation bar -->
<?php include_once("../includes/navbar_pages.php"); ?>

<!-- Need to be able to go back to product page -->
<div class="container">
    
    <button onclick="location.href='view_products.php'" type="button">Return to Products
    </button>
    <br><br>
</div>

<!-- This is the section used to display the products in a grid -->
<div class="container box_color">
  <div class="row">
  <?php 

  // When instantiating a class you must use the new keyword to create an object out of a class.
  // Notice this is not needed when using the extends.
  $users = new products();
  // Get_All_Products is a method of the object.
  // We need to get the product id from the url parameter
  
  $datas = $users->product_details($_GET['product']);
  // Place the array value in $data so we can use it.
  $data = $datas[0];
      ?>
      
      <!-- This is where we put in the html code to show the products -->
    <div class="col-sm-8 box_color">
      <h3><?php echo $data['product_name']; ?></h3>
      <div class="thumbnail">
      	<p>
      		<img src="<?php echo $data['image_name']; ?>" width='500px' height='500px'>
      	</p>
      </div>
      
    </div>
    <!-- This div will contain the qty and add to cart button -->
    <div class="col-sm-4 box_color">
    
        <form action="../handlers/addToCartHandler.php" method = "post">
        <br><br><br>
        <p><?php echo "$" . $data['price']; ?></p>
        	Qty: <input type="text" name="qty" size="3"> <br><br>
        	<input type="submit" value="Add To Cart"><br>
        	<input type="hidden" name="product_id" value="<?php echo $data['id_products']; ?>">
        	<br><br><br>
        	<p><?php echo $data['long_description']; ?></p>
        	<br><br><br>
        </form>
    </div>
  <?php    
      
  //}
  
  ?>
  </div>
</div>

<script src="Styles/bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</body>
</html>