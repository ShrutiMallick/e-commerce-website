
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if(isset($_SESSION["email_id"])){
    header("location:products.php");
}
 require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
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
        require './includes/header.php';
        ?>
         <div id="banner-image">
            <div class="container">
                <center>
                 <div id="banner-content">
                     <h1>We sell lifestyle</h1>
                     <p>Flat 40% OFF</p>
                     <a href="products.php">
                        <button class="btn btn-danger btn-lg active">Shop now</button>
                     </a>
                 </div>
                </center>
            </div>
        </div>
        <?php
        require './includes/footer.php';
        ?>
    </body>
</html>
    
