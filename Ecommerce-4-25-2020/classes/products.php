<!-- Business Layer class that utilizes productDAO in the Data Access Layer -->
<?php
include_once 'productDAO.php';
/*
 *  This is in the business layer
 */
//
class products extends productDAO
{
    // Method to get all products and put into an array.
    //public actually allows us to go our html file and pull out data.
    public function Get_All_Products()
    {
        // all_data will contain the data results from the query
        $all_data = $this->getAllProducts();
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
    
    // Method to get all offset products and put into an array.
    //public actually allows us to go our html file and pull out data.
    public function get_offset_products($offset)
    {
        // all_data will contain the data results from the query
        $all_data = $this->getAllProductsOffset($offset);
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
    
    // Method to return array for product details
    public function product_details($product_id)
    {
        // all_data will contain the data results from the query
        $all_data = $this->getProductDetails($product_id);
        
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
    
    // Method to return array for product search
    public function product_search($product_name)
    {
        // all_data will contain the data results from the query
        $all_data = $this->getProductSearch($product_name);
        
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
    
    // Function for deleting a product.
    function delete_Product($id)
    {
        return $this->deleteProduct($id);
    }
    
    // Function for updating a product
    function update_Product($id, $productName, $price, $imageName, $shortDesc, $longDesc, $category, $inventory)
    {
        return $this->updateProduct($id, $productName, $price, $imageName, $shortDesc, $longDesc, $category, $inventory);
    }
    
    // Function for inserting a product.
    function create_Product($productName, $price, $imageName, $shortDesc, $longDesc, $category, $inventory) {
        return $this->createProduct($productName, $price, $imageName, $shortDesc, $longDesc, $category, $inventory);
    }
}

