<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    function check_if_added_to_cart($item_id){
        require 'common.php';
        $user_id = $_SESSION["id"];
        $query = "SELECT * FROM users_items WHERE item_id = '$item_id' AND user_id = '$user_id' AND status = 'Added to cart'";
        
        $query_result = mysqli_query($con, $query);
        if(mysqli_num_rows($query_result) >= 1){
            return TRUE;
        }else{
            return FALSE;
        }
    }
?>
