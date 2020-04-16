<?php
include_once '../classes/db_connect.php';
include_once '../classes/fetch_orders.php';

class ordersDAO extends db_connect
{

    // Function for deleting a product.
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

    // Function for updating a Product
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
}