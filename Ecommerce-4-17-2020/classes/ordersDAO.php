<!-- Class for  -->
<?php
include_once 'db_connect.php';

class ordersDAO extends db_connect
{

    // Function for deleting an order.
    function deleteOrderItem($orderID, $orderDetailsID)
    {
        $sql = "DELETE FROM orders WHERE ID_orders = '" . $orderID . "'";
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Delete Successful</br>";
        }
        
        $sql2 = "DELETE FROM orders_orderDetails WHERE ID_order_OrderDetails = '" . $orderDetailsID . "'";
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
        $sql = "UPDATE orders_orderDetails SET quantity = '" . $quantity . "' WHERE ID_order_orderDetails = " . $orderDetailsID;
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

        $sql2 = "INSERT INTO orders_orderDetails (product_ids, quantity) VALUES('$product_id', '$quantity')";
        $result2 = $this->connect()->query($sql2);
        
        if (!$result2) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Insert Successful\n";
            
            $lastInsertID = $this->connect()->insert_id;
            
            $sql = "INSERT INTO orders (orders_orderDetails_id, user_id) VALUES('$lastInsertID', '$currentUserID')";
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
        $sql = "INSERT INTO orderhistory (event_date, orders_id) VALUES('$currentDateTime', '$orderIDsString')";
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Insert Successful 3\n";
        }
    }
    
    // Function for selecting the product's ids, names, and quantities (from tbl_ecommerce AND orderDetails) 
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
            $order_IDArrayStringsArray[] = $data['orders_id'];
        }
        
        $combinedArrayStrings = implode(", ", $order_IDArrayStringsArray);
        
        $sql2 = "SELECT * FROM orders WHERE ID_orders IN ($combinedArrayStrings)";
        $result2 = $this->connect()->query($sql2);
        foreach ($result2 as $row)
        {
            // Put the result rows in arrary
            $data[] = $row;
        }
        
        $orderDetails_IDArray = array();
        foreach ($result2 as $data) {
            $orderDetails_IDArray[] = $data['orders_orderDetails_id'];
        }
        $orderDetails_IDArrayString = implode(", ", $orderDetails_IDArray);
        
        $sql3 = "SELECT a.product_ids, a.quantity, b.product_name FROM orders_orderDetails a JOIN tbl_ecommerce b ON a.product_ids = b.id_products WHERE a.ID_order_orderDetails IN ($orderDetails_IDArrayString)";
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
        
        $sql2 = "SELECT a.product_name, a.price, a.category, b.quantity FROM tbl_ecommerce a JOIN orders_orderDetails b ON a.id_products = b.product_ids WHERE b.ID_order_orderDetails IN ($orderDetailsIDArrayString)";
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
            $orderDetailsIDArray[] = $data['orders_orderDetails_id'];
        }
        return $orderDetailsIDArray;
    }
    
    // function for getting OrderIDs for current user
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