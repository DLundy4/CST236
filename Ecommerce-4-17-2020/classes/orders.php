<!-- Business Layer class that utilizes ordersDAO in the Data Access Layer -->

<?php
include_once '../classes/ordersDAO.php';

class orders extends ordersDAO
{
    public function get_All_Cart_Items()
    {
        // all_data will contain the data results from the query
        $all_data = $this->getAllCartItems();
        
        // Now create the array that will be sent to the presentation layer
        foreach ($all_data as $row) {
            // Put the result rows in arrary
            $data[] = $row;
        }
        // Returns the array
        return $data;
    }
    
    function get_Current_Users_Order_IDs()
    {
        // all_data will contain the data results from the query
        $all_data = $this->getCurrentUsersOrderIDs();
        
        $numRows = $all_data->num_rows;
        
        // if results are not empty
        if ($numRows > 0) {
            // Now create the array that will be sent to the presentation layer
            foreach ($all_data as $row) {
                // Put the result rows in arrary
                $data[] = $row;
            }
            // Returns the array
            return $data;
        }
    }
    
    function get_Order_Details_IDs_For_Current_User() {
        return $this->getOrderDetailsIDsForCurrentUser();
    }
    
    function get_Order_IDs_For_Current_User() {
        return $this->getOrderIDsForCurrentUser();
    }
}