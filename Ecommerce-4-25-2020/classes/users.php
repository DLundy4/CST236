<!-- Business Layer class that utilizes userDAO in the Data Access Layer -->
<?php
include_once 'userDAO.php';
class users extends userDAO
{
    // Function for deleting a user.
    function delete_User($id)
    {
        return $this->deleteUser($id);
    }
    
    // Function for updating a user.
    function update_User($id, $FirstName, $LastName, $password, $email)
    {
        return $this->updateUser($id, $FirstName, $LastName, $password, $email);
    }
    
    // Function for inserting a user.
    function create_User($firstname, $lastname, $email, $username, $password) {
        return $this->createUser($firstname, $lastname, $email, $username, $password);
    }
    
    function Get_All_Users()
    {
        // all_data will contain the data results from the query
        $all_data = $this->getAllUsers();
        // Get the number of rows that were returned
        $numRows = $all_data->num_rows;
        // Now create the array that will be sent to the presentation layer
        foreach ($all_data as $row)
        {
            // Put the result rows in arrary
            $data[] = $row;
        }
        // Returns the array
        return $data;
    }
}