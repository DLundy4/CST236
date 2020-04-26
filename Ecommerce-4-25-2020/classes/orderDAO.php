<?php
include_once 'db_connect.php';

class orderDAO extends db_connect
{

    // Function for deleting an order.
    function deleteOrderItem($orderID, $orderDetailsID)
    {
        $sql = "DELETE FROM orders WHERE id_orders = '" . $orderID . "'";
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Delete Successful</br>";
        }
        
        $sql2 = "DELETE FROM orders_orderdetails WHERE id_orders_orderdetails = '" . $orderDetailsID . "'";
        $stmt2 = $this->connect()->query($sql2);
        if (!$stmt2) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Delete Successful</br>";
        }
    }

    // Function for updating an order
    function updateOrderItem($quantity, $orderDetailsID)
    {
        $sql = "UPDATE orders_orderdetails SET quantity = '" . $quantity . "' WHERE id_orders_orderdetails = " . $orderDetailsID;
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Update Successful";
        }
    }

    // Function for inserting an order.
    function createOrderItem($product_id, $quantity)
    {
        $currentUserID = $_SESSION["currentUserID"];

        $sql2 = "INSERT INTO orders_orderdetails (products_id, quantity) VALUES('$product_id', '$quantity')";
        $result2 = $this->connect()->query($sql2);
        
        if (!$result2) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Insert Successful\n";
            
            $lastInsertID = $this->connect()->insert_id;
            
            $sql = "INSERT INTO orders (user_id, orders_orderdetails_id) VALUES('$currentUserID', '$lastInsertID')";
            $stmt = $this->connect()->query($sql);
            if (!$stmt) {
                echo "Something wrong in the binding process. sql error?";
                exit();
            } else {
                echo "Insert Successful 3\n";
            }
        }
    }
    
    // Function for inserting an orderhistory.
    function createOrderHistory($orderIDsString) {
        $currentDateTime = date('Y-m-d H:i:s');
        $sql = "INSERT INTO orderhistory (event_date, orders_ids) VALUES('$currentDateTime', '$orderIDsString')";
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Insert Successful 3\n";
        }
    }
    
    // Function for selecting the product's ids, names, and quantities (from products AND orderDetails) 
    // that are from orders from a certain date.
    function getSalesReport($rangeInput1, $rangeInput2) {
        $sql1 = "SELECT * FROM orderhistory WHERE event_date BETWEEN '" . $rangeInput1. "' AND '" . $rangeInput2. "'";
        $result = $this->connect()->query($sql1);
        
        foreach ($result as $row)
        {
            // Put the result rows in arrary
            $data[] = $row;
        }
        
        $orderDetails_IDArray = array();
        foreach ($result as $data) {
            $order_IDArrayStringsArray[] = $data['orders_ids'];
        }
        
        $combinedArrayStrings = implode(", ", $order_IDArrayStringsArray);
        
        $sql2 = "SELECT * FROM orders WHERE id_orders IN ($combinedArrayStrings)";
        $result2 = $this->connect()->query($sql2);
        foreach ($result2 as $row)
        {
            // Put the result rows in arrary
            $data[] = $row;
        }
        
        $orderDetails_IDArray = array();
        foreach ($result2 as $data) {
            $orderDetails_IDArray[] = $data['orders_orderdetails_id'];
        }
        $orderDetails_IDArrayString = implode(", ", $orderDetails_IDArray);
        
        $sql3 = "SELECT a.products_id, a.quantity, b.product_name FROM orders_orderdetails a JOIN products b ON a.products_id = b.id_products WHERE a.id_orders_orderdetails IN ($orderDetails_IDArrayString)";
        $result3 = $this->connect()->query($sql3);
        
        foreach ($result3 as $row) {
            $data[] = $row;
        }
        
        return $data;
    }
    
    // function for getting all of the current user's cart items
    function getAllCartItems()
    {
        // Enter the query in the Data Access Layer
        $sql = "SELECT * FROM orders WHERE user_id = " . $_SESSION["currentUserID"];
        $result = $this->connect()->query($sql);
        
        foreach ($result as $row)
        {
            // Put the result rows in arrary
            $data[] = $row;
        }
        
        $orderDetailsIDArray = array();
        foreach ($result as $data) {
            $orderDetailsIDArray[] = $data['orders_orderdetails_id'];
        }
        
        $orderDetailsIDArrayString = implode(", ", $orderDetailsIDArray);
        
        $sql2 = "SELECT a.product_name, a.price, a.category, b.quantity FROM products a JOIN orders_orderdetails b ON a.id_products = b.products_id WHERE b.id_orders_orderdetails IN ($orderDetailsIDArrayString)";
        $result2 = $this->connect()->query($sql2);
        return $result2;
    }
    
    // function for getting OrderDetailsIDs for current user
    function getOrderDetailsIDsForCurrentUser() {
        // Enter the query in the Data Access Layer
        $sql = "SELECT * FROM orders WHERE user_id = " . $_SESSION["currentUserID"];
        $result = $this->connect()->query($sql);
        
        foreach ($result as $row)
        {
            // Put the result rows in arrary
            $data[] = $row;
        }
        
        $orderDetailsIDArray = array();
        foreach ($result as $data) {
            $orderDetailsIDArray[] = $data['orders_orderdetails_id'];
        }
        return $orderDetailsIDArray;
    }
    
    // function for getting OrderIDs for current user
    function getOrderIDsForCurrentUser() {
        // Enter the query in the Data Access Layer
        $sql = "SELECT * FROM orders WHERE user_id = " . $_SESSION["currentUserID"];
        $result = $this->connect()->query($sql);
        
        foreach ($result as $row)
        {
            // Put the result rows in arrary
            $data[] = $row;
        }
        
        $orderIDArray = array();
        foreach ($result as $data) {
            $orderIDArray[] = $data['id_orders'];
        }
        return $orderIDArray;
    }
    
}