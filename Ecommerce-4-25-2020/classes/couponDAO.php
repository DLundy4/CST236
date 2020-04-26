<?php
include_once 'db_connect.php';

class couponDAO extends db_connect
{
    // Function for deleting a coupon.
    function deleteCoupon($id)
    {
        $sql = "DELETE FROM coupons_unused WHERE coupons_id = '" . $id . "'";
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Delete Successful";
        }
    }
    
    // Function for inserting a coupon.
    function createCoupon($deal, $code) {
        $sql = "INSERT INTO coupons (deal, code) VALUES('$deal', '$code')";
        $stmt = $this->connect()->query($sql);
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit();
        } else {
            echo "Insert Successful";
            $lastInsertID = $this->connect()->insert_id;
            $sql2 = "INSERT INTO coupons_unused (coupons_id) VALUES('$lastInsertID')";
            $stmt = $this->connect()->query($sql2);
            if (!$stmt) {
                echo "Something wrong in the binding process. sql error?";
                exit();
            } else {
                echo "Insert Successful";
            }
        }
    }
    
    function checkCoupon($code)
    {
        // Enter the query in the Data Access Layer
        $sql = "SELECT * FROM coupons a JOIN coupons_unused b ON a.id_coupons = b.coupons_id WHERE code = ". $code;
        $results = $this->connect()->query($sql);
        // Get the number of rows that were returned
        return $results->fetch_assoc();
    }
}