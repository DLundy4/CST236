<?php
class users extends fetch_users
{
    function Get_All_Users()
    {
        // all_data will contain the data results from the query
        $all_data = $this->getAllUsers();
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
}