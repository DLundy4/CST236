<?php
include_once '../classes/fetch_orders.php';

class orders extends fetch_orders
{

    public function get_All_Cart_Items()
    {
        $all_data = $this->getAllCartItems();
        
        foreach ($all_data as $row) {
            $data[] = $row;
        }
        
        return $data;
    }

    function get_Current_Users_Order_IDs()
    {
        $all_data = $this->getCurrentUsersOrderIDs();
        $numRows = $all_data->num_rows;
        if ($numRows > 0) {
            foreach ($all_data as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function get_Quantity($id)
    {
        return $this->getQuantity($id);
    }
    
    function get_Order_Details_IDs_For_Current_User() {
        return $this->getOrderDetailsIDsForCurrentUser();
    }
    
    function get_Order_IDs_For_Current_User() {
        return $this->getOrderIDsForCurrentUser();
    }
}