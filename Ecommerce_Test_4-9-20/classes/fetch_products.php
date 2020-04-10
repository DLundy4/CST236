<?php
//require_once('db_connect.php');

// Inheritance - use of extends means that we inherite db_connect and all the properties and methods of the class.
// All protected and public methods and properties are now available in fetch_all_products.
class fetch_products extends db_connect
{
    
    function getAllProducts()
    {
        // Enter the query in the Data Access Layer
        $sql = "SELECT * FROM tbl_ecommerce";
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
    function get_all_products_offset($offset)
    {
        // Enter the query in the Data Access Layer
        $sql = "SELECT * FROM tbl_ecommerce ORDER BY id_products LIMIT 3 OFFSET " . $offset;
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
    function get_product_details($product_id)
    {
        // Enter the query in the Data Access Layer
        $sql = "SELECT * FROM tbl_ecommerce WHERE id_products = '" . $product_id . "'";
        
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
    function get_product_search($product_name)
    {
        // Enter the query in the Data Access Layer
        $sql = "SELECT * FROM tbl_ecommerce WHERE product_name LIKE '%" . $product_name . "%'";
        
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


