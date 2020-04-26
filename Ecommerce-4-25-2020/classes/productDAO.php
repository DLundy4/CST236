<!-- Class for  -->
<?php
include_once 'db_connect.php';

class productDAO extends db_connect
{
    // Function for deleting a product.
    function deleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE id_products='" . $id . "'";
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Delete Successful";
        }
    }

    // Function for updating a product
    function updateProduct($id, $productName, $price, $imageName, $shortDesc, $longDesc, $category, $inventory)
    {
        $sql = "UPDATE products SET id_products='" . $id . "', product_name='" . $productName . "', price='" . $price . "', image_name='" . $imageName . "', short_description='" . $shortDesc . "', long_description='" . $longDesc . "', category='" . $category . "', inventory='" . $inventory . "'WHERE id_products='" . $id . "'";
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Update Successful";
        }
    }
    
    // Function for inserting a product.
    function createProduct($productName, $price, $imageName, $shortDesc, $longDesc, $category, $inventory) {
        $sql = "INSERT INTO products (product_name, price, image_name, short_description, long_description, category, inventory) VALUES('$productName', '$price', '$imageName', '$shortDesc', '$longDesc', '$category', '$inventory')";
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Insert Successful";
        }
    }
    
    // function for getting all the products
    function getAllProducts()
    {
        // Enter the query in the Data Access Layer
        $sql = "SELECT * FROM products";
        // Make the connection and run the query on the SQL statement.  query is built in function to PHP
        // This is where the inheritance is used.  Notice we do not need to create an object out of the class like we would
        // like we would be required if we used the require_once....
        // Inheritance can make your code lighter.
        $results = $this->connect()->query($sql);
        // Get the number of rows that were returned
        $numRows = $results->num_rows;
        // Return results only if number of rows is greater than 0
        if ($numRows > 0)
        {
            // fetch_assoc is built in method that will fetch all the results.
            //while ($row = $results->fetch_assoc())
            //{
            //    // define an array and put each row of data into the array.
            //  $data[] = $row;
            //}
            // Pass the results of the query to the next class
            return $results;
        }
    }
    
    // Get a range of products
    function getAllProductsOffset($offset)
    {
        // Enter the query in the Data Access Layer
        $sql = "SELECT * FROM products ORDER BY id_products LIMIT 3 OFFSET " . $offset;
        // Make the connection and run the query on the SQL statement.  query is built in function to PHP
        // This is where the inheritance is used.  Notice we do not need to create an object out of the class like we would
        // like we would be required if we used the require_once....
        // Inheritance can make your code lighter.
        $results = $this->connect()->query($sql);
        // Get the number of rows that were returned
        $numRows = $results->num_rows;
        // Return results only if number of rows is greater than 0
        if ($numRows > 0)
        {
            // fetch_assoc is built in method that will fetch all the results.
            //while ($row = $results->fetch_assoc())
            //{
            //    // define an array and put each row of data into the array.
            //  $data[] = $row;
            //}
            // Pass the results of the query to the next class
            return $results;
        }
    }
    
    // Just get the details of one product
    function getProductDetails($product_id)
    {
        // Enter the query in the Data Access Layer
        $sql = "SELECT * FROM products WHERE id_products = '" . $product_id . "'";
        
        // Make the connection and run the query on the SQL statement.  query is built in function to PHP
        // This is where the inheritance is used.  Notice we do not need to create an object out of the class like we would
        // like we would be required if we used the require_once....
        // Inheritance can make your code lighter.
        $results = $this->connect()->query($sql);
        // Get the number of rows that were returned
        $numRows = $results->num_rows;
        // Return results only if number of rows is greater than 0
        
        if ($numRows > 0)
        {
            // fetch_assoc is built in method that will fetch all the results.
            //while ($row = $results->fetch_assoc())
            //{
            //    // define an array and put each row of data into the array.
            //  $data[] = $row;
            //}
            // Pass the results of the query to the next class
            return $results;
        }
    }
    
    // Search for product by name
    function getProductSearch($product_name)
    {
        // Enter the query in the Data Access Layer
        $sql = "SELECT * FROM products WHERE product_name LIKE '%" . $product_name . "%'";
        
        // Make the connection and run the query on the SQL statement.  query is built in function to PHP
        // This is where the inheritance is used.  Notice we do not need to create an object out of the class like we would
        // like we would be required if we used the require_once....
        // Inheritance can make your code lighter.
        $results = $this->connect()->query($sql);
        // Get the number of rows that were returned
        $numRows = $results->num_rows;
        // Return results only if number of rows is greater than 0
        
        if ($numRows > 0)
        {
            // fetch_assoc is built in method that will fetch all the results.
            //while ($row = $results->fetch_assoc())
            //{
            //    // define an array and put each row of data into the array.
            //  $data[] = $row;
            //}
            // Pass the results of the query to the next class
            return $results;
        }
    }
}