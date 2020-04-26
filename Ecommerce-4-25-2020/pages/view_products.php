<?php 
// Include all the classes needed
// Instantiate
// When you instantiate a class, you create an instance of it.
include_once '../classes/db_connect.php';
include_once '../classes/products.php';
include_once '../includes/header.php'; ?>

<!-- Product Search -->
<div class="container">
<div class="row">
<div class="col-sm-6">
<form action="product_search.php" method = "post">
	<p style='color: white'>Product Search: <input type="text" name="product" size="20" style='color: black'>
    <input type="submit" value="Search Now!" style='color: black'></p>
</form>
</div>
<div id="show_next" class="col-sm-6">
<button onclick="window.location.href = 'view_products.php?offset=3';">Next 3</button>

</div>
<div id="show_previous" class="col-sm-6">
<button onclick="window.location.href = 'view_products.php?offset=0';">First Page</button>

</div>
</div>
</div>

<!-- This is the section used to display the products in a grid -->
<div class="container box_color">
  <div class="row">
  <?php 
  //
  
  // Get the offset value
  if (!isset($_GET['offset']) || ($_GET['offset'] == '0') )
  {
      // Var was not set
      $offset = 0; ?>
      <style type="text/css">#show_next{display:block;}</style>
      <style type="text/css">#show_previous{display:none;}</style>
  <?php } elseif ($_GET['offset'] == '3') {
      $offset = 3;
      ?>
      <style type="text/css">#show_next{display:none;}</style>
      <style type="text/css">#show_previous{display:block;}</style>
      <?php
  }
  
  // When instantiating a class you must use the new keyword to create an object out of a class.
  // Notice this is not needed when using the extends.
  $users = new products();
  // Get_All_Products is a method of the object.
  $datas = $users->get_offset_products($offset);
  
  //echo ("<br>hereqqqqq222......: " . $users . "<br>");
  
  foreach ($datas as $data) { ?>
      <!-- This is where we put in the html code to show the products -->
    <div class="col-sm-3 box_color">
      <h3><?php echo $data['product_name']; ?></h3>
      <p><?php echo "$" . $data['price']; ?></p>
      <div class="thumbnail">
      	<p>
      	<a href="view_product_details.php?product=<?php echo $data['id_products']; ?>">
      	<img alt="" src="<?php echo $data['image_name']; ?>" width='350px' height='215px'>
      	</a>
      	</p>
      </div>
      <p><?php echo $data['short_description']; ?></p>
    </div>
    
   <?php } ?>
   
  </div>
</div>

<script src="Styles/bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</body>
</html>