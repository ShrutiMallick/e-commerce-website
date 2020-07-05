<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require "./includes/common.php";
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
            require "./includes/header.php";
            require "./includes/check-if-added.php";
        ?>
        <div class="container panel-margin">
            <div class="jumbotron">
                <h1 style="font-style:bold;">Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
                    have all in one place.</p>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="camera" >
                        <div class="caption">
                            <h3>Cannon EOS</h3>
                            <p>Price:<i class="fa fa-rupee"></i>36,000.00</p>
                            <?php 
                                if(!isset($_SESSION["email_id"])){ 
                             ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php 
                                  }else{ 
                            ?>
                            <?php 
                                if(check_if_added_to_cart(1)){
                            ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php
                                }else{
                            ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="camera">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price:<i class="fa fa-rupee"></i>40,000.00</p>
                            <?php 
                                if(!isset($_SESSION["email_id"])){ 
                             ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php 
                                  }else{ 
                            ?>
                            <?php 
                                if(check_if_added_to_cart(2)){
                            ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php
                                }else{
                            ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php }
                            } ?>
                        </div>
                    </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="camera">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price:<i class="fa fa-rupee"></i>50,000.00</p>
                             <?php 
                                if(!isset($_SESSION["email_id"])){ 
                             ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php 
                                  }else{ 
                            ?>
                            <?php 
                                if(check_if_added_to_cart(3)){
                            ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php
                                }else{
                            ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php }
                            } ?>
                        </div>
                    </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="camera">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price:<i class="fa fa-rupee"></i>80,000.00</p>
                             <?php 
                                if(!isset($_SESSION["email_id"])){ 
                             ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php 
                                  }else{ 
                            ?>
                            <?php 
                                if(check_if_added_to_cart(4)){
                            ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php
                                }else{
                            ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/9.jpg" alt="watch" >
                        <div class="caption">
                            <h3>Titan Model #301</h3>
                            <p>Price:<i class="fa fa-rupee"></i>13,000.00</p>
                             <?php 
                                if(!isset($_SESSION["email_id"])){ 
                             ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php 
                                  }else{ 
                            ?>
                            <?php 
                                if(check_if_added_to_cart(5)){
                            ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php
                                }else{
                            ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/10.jpg" alt="watch">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price:<i class="fa fa-rupee"></i>3,000.00</p>
                             <?php 
                                if(!isset($_SESSION["email_id"])){ 
                             ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php 
                                  }else{ 
                            ?>
                            <?php 
                                if(check_if_added_to_cart(6)){
                            ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php
                                }else{
                            ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php }
                            } ?>
                        </div>
                    </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/11.jpg" alt="watch">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price:<i class="fa fa-rupee"></i>8,000.00</p>
                             <?php 
                                if(!isset($_SESSION["email_id"])){ 
                             ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php 
                                  }else{ 
                            ?>
                            <?php 
                                if(check_if_added_to_cart(7)){
                            ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php
                                }else{
                            ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php }
                            } ?>
                        </div>
                    </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/12.jpg" alt="watch">
                        <div class="caption">
                            <h3>Faber Luba #111</h3>
                            <p>Price:<i class="fa fa-rupee"></i>18,000.00</p>
                             <?php 
                                if(!isset($_SESSION["email_id"])){ 
                             ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php 
                                  }else{ 
                            ?>
                            <?php 
                                if(check_if_added_to_cart(8)){
                            ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php
                                }else{
                            ?>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                    <img src="img/7.jpg" alt="shirt" >
                    <div class="caption">
                        <h3>H&W</h3>
                        <p>Price:<i class="fa fa-rupee"></i>8,00.00</p>
                         <?php 
                                if(!isset($_SESSION["email_id"])){ 
                             ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php 
                                  }else{ 
                            ?>
                            <?php 
                                if(check_if_added_to_cart(9)){
                            ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php
                                }else{
                            ?>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php }
                            } ?>
                    </div>
                 </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                      <img src="img/6.jpg" alt="shirt">
                        <div class="caption">
                            <h3>Luis Phill</h3>
                            <p>Price:<i class="fa fa-rupee"></i>1,000.00</p>
                             <?php 
                                if(!isset($_SESSION["email_id"])){ 
                             ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php 
                                  }else{ 
                            ?>
                            <?php 
                                if(check_if_added_to_cart(10)){
                            ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php
                                }else{
                            ?>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php }
                            } ?>
                        </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/13.jpg" alt="shirt">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price:<i class="fa fa-rupee"></i>1,500.00</p>
                             <?php 
                                if(!isset($_SESSION["email_id"])){ 
                             ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php 
                                  }else{ 
                            ?>
                            <?php 
                                if(check_if_added_to_cart(11)){
                            ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php
                                }else{
                            ?>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php }
                            } ?>
                        </div>
                    </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/14.jpg" alt="shirt">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price:<i class="fa fa-rupee"></i>1,300.00</p>
                             <?php 
                                if(!isset($_SESSION["email_id"])){ 
                             ?>
                            <a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
                            <?php 
                                  }else{ 
                            ?>
                            <?php 
                                if(check_if_added_to_cart(12)){
                            ?>
                            <a href="#" class="btn btn-success" disabled>Added to cart</a>
                            <?php
                                }else{
                            ?>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary">Add to cart</a>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
        </div>
        </div>
             <?php
			require "./includes/footer.php";
		?>
    </body>
   
</html>
