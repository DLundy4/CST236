<?php 
// Include all the classes needed
// Instantiate
// When you instantiate a class, you create an instance of it.
include_once '../classes/db_connect.php';
include_once '../classes/products.php';
include_once '../includes/header.php'; ?>

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
  </div>
</div>

<script src="Styles/bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</body>
</html>