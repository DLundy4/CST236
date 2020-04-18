<?php 
?>
<!-- Navigation Menu -->
<div class="container">
    <nav class="navbar navbar-default navbar_bg_color">
      <div class="container-fluid">
        
        <ul class="nav navbar-nav">
          	<li class="active"><a href="../pages/index.php">Home</a></li>
          	<li><a class="navbar_text" href="../pages/view_products.php">Products</a></li>
          	<li><a class="navbar_text" href="../pages/cart.php">Cart</a></li>
        	<?php if ($_SESSION["admin"]) { ?>
     		<li><a class="navbar_text" href="../pages/admin_home.php">Admin Home</a></li>
     		<li><a class="navbar_text" href="../pages/salesReport.php">Sales Report</a></li>
            <?php } ?>
            <li><a class="navbar_text" href="../handlers/logoutHandler.php">Logout</a></li>
        </ul>
      </div>
    </nav>
</div>
<!-- End - Navigation Menu -->