<?php
include_once '../classes/db_connect.php';

class productDAO extends db_connect
{
    // Function for deleting a product.
    function deleteProduct($id)
    {
        $sql = "DELETE FROM tbl_ecommerce WHERE id_products='" . $id . "'";
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Delete Successful";
        }
    }

    // Function for updating a Product
    function updateProduct($id, $productName, $price, $imageName, $shortDesc, $longDesc, $category, $inventory)
    {
        $sql = "UPDATE tbl_ecommerce SET id_products='" . $id . "', product_name='" . $productName . "', price='" . $price . "', image_name='" . $imageName . "', short_description='" . $shortDesc . "', long_description='" . $longDesc . "', category='" . $category . "', inventory='" . $inventory . "'WHERE id_products='" . $id . "'";
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Update Successful";
        }
    }
    
    function createProduct($productName, $price, $imageName, $shortDesc, $longDesc, $category, $inventory) {
        $sql = "INSERT INTO tbl_ecommerce (product_name, price, image_name, short_description, long_description, category, inventory) VALUES('$productName', '$price', '$imageName', '$shortDesc', '$longDesc', '$category', '$inventory')";
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Insert Successful";
        }
    }
}