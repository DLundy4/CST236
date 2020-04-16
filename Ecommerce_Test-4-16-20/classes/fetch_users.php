<?php
class fetch_users extends db_connect
{
    function getAllUsers()
    {
        // Enter the query in the Data Access Layer
        $sql = "SELECT * FROM users";
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