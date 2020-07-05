<?php
	if(isset($_SESSION["id"])){
		header("location: products.php");
	}
	require "./includes/common.php";
?>
<!DOCTYPE html>
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
		?>
	<div class="container panel-margin">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <h2>SIGN UP</h2>
                     <form action="signup_script.php" method="post">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Signup</button>
                        </form>
                </div>
                                <div class="panel-footer">
                                    Already have an account?Click <a href="login.php">here</a> to create one.
				</div>
            </div>
        </div>
		<?php
			require "./includes/footer.php";
		?>
	</body>
</html>