<?php include_once '../includes/header.php'; ?>
<div class="box_color" align="center" style="border-style: solid; border-radius: 15px; text-align: center;">
	<form action="../handlers/addCouponHandler.php" method="post">
	<div class="form-group">
		Coupon Deal:<br>
			<input type="text" required name="deal" onkeypress="if(event.which &lt; 48 || event.which &gt; 57) return false;">
			</div>
			<div class="form-group">
		Coupon Code:<br>
			<input type="text" required name="code" placeholder="Enter a large number..." onkeypress="if(event.which &lt; 48 || event.which &gt; 57) return false;">
			</div>
		<button type="submit">Add Coupon</button>
	</form>
	</div>
</body>
</html>