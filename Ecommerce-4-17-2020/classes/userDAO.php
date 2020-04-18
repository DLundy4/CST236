<?php
include_once 'db_connect.php';

class userDAO extends db_connect
{
    // Function for deleting a user.
    function deleteUser($id)
    {
        $sql = "DELETE FROM users WHERE ID_user=" . $id . " LIMIT 1";
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
            echo $sql . "<br>";
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Delete Successful";
        }
    }

    // Function for updating a user.
    function updateUser($id, $FirstName, $LastName, $password, $email)
    {
        $sql = "UPDATE users SET ID_user='" . $id . "', FirstName='" . $FirstName . "',
               LastName='" . $LastName . "', Password='" . $password . "', email='" . $email . "'WHERE ID_user='" . $id . "'";
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Update Successful";
        }
    }
    
    // Function for inserting a user.
    function createUser($firstname, $lastname, $email, $username, $password) {
        $sql = "INSERT INTO users (FirstName, LastName, Email, Username, Password, Role) VALUES('$firstname', '$lastname', '$email', '$username', '$password', '0')";
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Insert Successful";
        }
    }
    
    // Function for getting all the users.
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
?>