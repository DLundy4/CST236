<?php 
include_once '../includes/session_Include.php';
include_once '../classes/products.php';
include_once '../classes/users.php';
include_once '../includes/header_table.php';

$users = new users();
$results = $users->Get_All_Users();
?>

<div align="center">
    <a href="../pages/addCoupon.php">Add Coupon</a><br/><br/>
    
    <table>
        <tr>
        <th>ID_user</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        </tr>
        
        <?php
        for ($x = 0; $x < count($results); $x++){
            echo "<tr>";
            echo "<td>" . $results[$x]['id_user'] . "</td>";
            echo "<td>" . $results[$x]['FirstName'] . "</td>";
            echo "<td>" . $results[$x]['LastName'] . "</td>";
            echo "<td>" . $results[$x]['Email'] . "</td>";
            echo "<td>" . $results[$x]['Username'] . "</td>";
            echo "<td>" . $results[$x]['Password'] . "</td>";
            echo "<td><a href='../pages/editUser.php?id_user=" . $results[$x]['ID_user'] . "&firstname="  . $results[$x]['FirstName'] . "&lastname="  . $results[$x]['LastName'] . "&email="  . $results[$x]['Email'] . "&username="  . $results[$x]['Username'] . "&password=" . $results[$x]['Password'] . "'" . ">Edit</a></td>";
            $id = $results[$x]['ID_user'];
            echo "<td><a href='../handlers/deleteUserHandler.php?id_user=" . $results[$x]['ID_user'] . "'>Delete</a></td>";
            echo "</tr>";
        } ?>
    </table>
</div>
<br><br>
<?php 
$products = new products();
$results = $products->Get_All_Products();
?>

<div align="center">
	<a href="../pages/addProduct.php">Add Product</a><br/>
    <table>
        <tr>
            <th >id_products</th>
            <th>product_name</th>
            <th>price</th>
            <th>category</th>
            <th>inventory</th>
        </tr>
        
        <?php
        for ($x = 0; $x < count($results); $x++){
            echo "<tr>";
            echo "<td>" . $results[$x]['id_products'] . "</td>";
            echo "<td>" . $results[$x]['product_name'] . "</td>";
            echo "<td>" . $results[$x]['price'] . "</td>";
            echo "<td>" . $results[$x]['category'] . "</td>";
            echo "<td>" . $results[$x]['inventory'] . "</td>";
            echo "<td><a href='../pages/editProduct.php?id_products=" . $results[$x]['id_products'] . "&product_name="  . $results[$x]['product_name'] . "&price=" . $results[$x]['price'] . "&image_name=" . $results[$x]['image_name'] . "&short_description=" . $results[$x]['short_description'] . "&long_description=" . $results[$x]['long_description'] . "&category="  . $results[$x]['category'] . "&inventory="  . $results[$x]['inventory'] . "'" . ">Edit</a></td>";
            $id = $results[$x]['id_products'];
            echo "<td><a href='../handlers/deleteProductHandler.php?id_product=" . $id . "'" . ">Delete</a></td>";
            echo "</tr>";
        } ?>
    </table>
</div>
</body>
</html>