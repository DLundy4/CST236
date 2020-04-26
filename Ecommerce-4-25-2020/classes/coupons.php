<!-- Business Layer class that utilizes couponDAO in the Data Access Layer -->
<?php
include_once 'classes/couponDAO.php';
/*
 *  This is in the business layer
 */
//
class coupons extends couponDAO
{
    // Function for deleting a coupon.
    public function delete_Coupon($id)
    {
        return $this->deleteCoupon($id);
    }
    
    // Function for inserting a coupon.
    public function create_Coupon($deal, $code) {
        return $this->createCoupon($deal, $code);
    }
    
    public function check_Coupon($code)
    {
        return $this->checkCoupon($code);
    }
}

