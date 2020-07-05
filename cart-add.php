<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
<?php
    require './includes/common.php';
    $item_id = $_GET["id"];
    $user_id = $_SESSION["id"];
    $query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";

    $query_result = mysqli_query($con, $query);

    header("location: products.php");
?>