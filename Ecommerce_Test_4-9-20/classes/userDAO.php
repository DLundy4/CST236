<?php
include_once '../classes/db_connect.php';

class userDAO extends db_connect
{
    // Function for deleting a user.
    function deleteUser($id)
    {
        $sql = "DELETE FROM users WHERE ID_user='" . $id . "'";
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
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
    
    function createUser($firstname, $lastname, $email, $username, $password) {
        $sql = "INSERT INTO users (FirstName, LastName, Email, Username, Password) VALUES('$firstname', '$lastname', '$email', '$username', '$password')";
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Insert Successful";
        }
    }
}
?>