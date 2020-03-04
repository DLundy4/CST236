<?php 
include_once '../includes/session_Include.php';
include_once '../classes/db_connect.php';
include_once '../classes/fetch_products';
?>
<html>
<head>
<title>Admin Home</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="../Styles/main.css">
</head>
<body>
<?php 
$products = new products();
$results = $products->getAllProducts();
$numRows = $results->num_rows();
echo $numRows;
$row = $results->fetch_assoc();
?>
<table>

<tr>
<th>id_products</th>
<th>product_name</th>
<th>price</th>
<th>image_name</th>
<th>short_description</th>
<th>long_description</th>
<th>category</th>
<th>inventory</th>
</tr>
<tr>

<?php
for ($i = 0; i < $numRows; $i++) { ?>
<td><?php $row["id_products"]; ?></td>
<td><?php $row["product_name"]; ?></td>
<td><?php $row["price"]; ?></td>
<td><?php $row["image_name"]; ?></td>
<td><?php $row["short_description"]; ?></td>
<td><?php $row["long_description"]; ?></td>
<td><?php $row["category"]; ?></td>
<td><?php $row["inventory"]; ?></td>
<?php } ?>

</table>

</body>
</html>