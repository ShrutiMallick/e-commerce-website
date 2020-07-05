<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require './includes/common.php';
    if(!isset($_SESSION["email_id"])){
        header("location: login.php");
    }
?>
<html>
     <head>
        <title>My Cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <script src="bootstrap/js/jquery-3.5.0.min.js"></script>
         <script src="bootstrap/js/bootstrap.min.js" ></script>
         <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <?php
        require './includes/header.php';
        $user_id=$_SESSION["id"]; 
        $query="SELECT p.id,p.name,p.price FROM items p INNER JOIN users_items up ON 
              up.item_id=p.id WHERE up.user_id='$user_id'AND up.status='Added to cart'";
        $result=mysqli_query($con,$query) or die(mqsqli_error($con));
        if(mysqli_num_rows($result)==0){
            echo'<h4 class="container panel-margin">Add products to cart first.Goto
             <a href="products.php">Products</a>page.</h4>';
        }else{
            $total=0;      
        ?>
    <div class="container panel-margin">
            <table class="table table-hover">
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                <?php
                    while($row=mysqli_fetch_array($result)){ 
                 ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"] ?> </td>
                    <td><?php $total+=$row["price"]; echo $row["price"] ?></td>
                    <td><a href="cart-remove.php?id=<?php echo $row["id"];?>">Remove</a></td>
                </tr>
                <?php
                    }
                 ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total:<i class="fa fa-rupee"></i><?php echo $total; ?></td>
                    <td><a href="success.php" class="btn btn-primary">Confirm Order</a></td>
                </tr>
            </table>
        </div>
    <?php
        }
        require './includes/footer.php';
    ?>
</body>
</html>
