<?php
	require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login to LifeStyle Stores</title>
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
		?>
	       <div class="container panel-margin">
            <div class="row">
             <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                      <p class="text-warning" style="font-style:italic;padding-left:15px;padding-top:15px">Login to make purchase</p>
                 <div class="panel-body">
                     <form action="login_submit.php" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required = "true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>                       
                      </form>
                    </div>
			<div class="panel-footer">
                            Don't have an account?<a href="signup.php">Register</a>
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