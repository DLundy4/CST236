<?php

class fetch_orders extends db_connect
{
    function getAllCartItems()
    {
        // Enter the query in the Data Access Layer
        $sql = "SELECT * FROM orders WHERE user_id = " . $_SESSION["currentUserID"];
        $result = $this->connect()->query($sql);
        
        foreach ($all_data as $row)
        {
            // Put the result rows in arrary
            $data[] = $row;
        }
        
        $orderDetailsIDArray = array();
        foreach ($result as $data) {
            $orderDetailsIDArray[] = $data['orders_orderDetails_id'];
        }
        
        $orderDetailsIDArrayString = implode(", ", $orderDetailsIDArray);
        
        $sql2 = "SELECT * FROM tbl_ecommerce INNER JOIN orders_orderDetails ON tbl_ecommerce.id_products = orders_orderDetails.product_ids WHERE orders_orderDetails.ID_order_orderDetails IN ($orderDetailsIDArrayString)";
        $result2 = $this->connect()->query($sql2);
        return $result2;
    }
    
    function getQuantity($id) {
        $sql = "SELECT quantity FROM orders_orderDetails WHERE product_ids = " . $id;
        $result = $this->connect()->query($sql);
        $fetchedArray = $result->fetch_assoc(); 
        return $fetchedArray['quantity'];
    }
    
    function getOrderDetailsIDsForCurrentUser() {
        // Enter the query in the Data Access Layer
        $sql = "SELECT * FROM orders WHERE user_id = " . $_SESSION["currentUserID"];
        $result = $this->connect()->query($sql);
        
        foreach ($all_data as $row)
        {
            // Put the result rows in arrary
            $data[] = $row;
        }
        
        $orderDetailsIDArray = array();
        foreach ($result as $data) {
            $orderDetailsIDArray[] = $data['orders_orderDetails_id'];
        }
        return $orderDetailsIDArray;
    }
    
    function getOrderIDsForCurrentUser() {
        // Enter the query in the Data Access Layer
        $sql = "SELECT * FROM orders WHERE user_id = " . $_SESSION["currentUserID"];
        $result = $this->connect()->query($sql);
        
        foreach ($all_data as $row)
        {
            // Put the result rows in arrary
            $data[] = $row;
        }
        
        $orderIDArray = array();
        foreach ($result as $data) {
            $orderIDArray[] = $data['ID_orders'];
        }
        return $orderIDArray;
    }
}

