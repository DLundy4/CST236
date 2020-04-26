<!-- Business Layer class that utilizes ordersDAO in the Data Access Layer -->

<?php
include_once '../classes/orderDAO.php';

class orders extends orderDAO
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
    
    // Function for deleting an order.
    function delete_Order_Item($orderID, $orderDetailsID)
    {
        return $this->deleteOrderItem($orderID, $orderDetailsID);
    }
    
    // Function for updating an order
    function update_Order_Item($quantity, $orderDetailsID)
    {
        return $this->updateOrderItem($quantity, $orderDetailsID);
    }
    
    // Function for inserting an order.
    function create_Order_Item($product_id, $quantity)
    {
        return $this->createOrderItem($product_id, $quantity);
    }
    
    // Function for inserting an orderhistory.
    function create_Order_History($orderIDsString) {
        return $this->createOrderHistory($orderIDsString);
    }
    
    // Function for selecting the product's ids, names, and quantities (from products AND orderDetails)
    // that are from orders from a certain date.
    function get_Sales_Report($rangeInput1, $rangeInput2) {
        return $this->getSalesReport($rangeInput1, $rangeInput2);
    }
}