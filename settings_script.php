<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
	require './includes/common.php';
	
	if(!isset($_SESSION["email_id"])){
		header("location: index.php");
    }else{
        
        $user_id = $_SESSION["id"];
        $email = $_SESSION["email_id"];

        
        $new_password = md5(mysqli_real_escape_string($con, $_POST["new_pass"]));
        $retype_pass = md5(mysqli_real_escape_string($con, $_POST["retype_new_pass"]));

        
        if($new_password != $retype_pass){
            echo "The passwords do not match. Try again.";
        }else{
            $query = "UPDATE users SET password = '$new_password' WHERE email = '$email' AND id = '$user_id'";

            $result = mysqli_query($con, $query) or die(mysqli_error($con));

            header("location: logout.php");
        }
    }
?>