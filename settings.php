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
    }
?>

<html>
   <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <script src="bootstrap/js/jquery-3.5.0.min.js"></script>
         <script src="bootstrap/js/bootstrap.min.js" ></script>
         <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <?php
         require'./includes/header.php';
        ?>
        <div class="container panel-margin">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Change Password</h2>
                    <form action="settings_script.php" method="post">
                            <div class="form-group">
                                <input type="password" class="form-control" name="old_pass" placeholder="Old Password" required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="new_pass" placeholder="New Password" required="true">  
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="retype_new_pass" placeholder="Re-type New Password" required="true">  
                            </div>
                            <button type="submit" class="btn btn-primary">Change</button>
                        </form>
                </div>
            </div>
        </div>
         <?php
            require"./includes/footer.php";
         ?>
    </body>
</html>
