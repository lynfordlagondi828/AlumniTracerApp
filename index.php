<?php
	require_once 'inc/DbFunctions.php';
	$database = new DbFunctions();
	$message  = "";

	if(isset($_POST["submit"])){

		$username = trim($_POST["username"]);
		$password = trim($_POST["password"]);

		$users = $database->user_login($username,$password);

		if($users != FALSE){

			session_start();

			$_SESSION["IsloggedIn"] = TRUE;
			$_SESSION["username"] = $username;
            header('location:dashboard.php');
            exit();
		}else {
			$message ="Login Failed!!!";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" href="img/logo.png" type="image/png"> 
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_style/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_style/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_style/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_style/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_style/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_style/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_style/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_style/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_style/css/util.css">
	<link rel="stylesheet" type="text/css" href="login_style/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-43">
                        <img src="img/logo.png" width="100" height="100"><br>
						<h3>NORSU-BSC Alumni Tracer</h3><br> Account Login
					</span>
					
					<div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username">
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<button name="submit" class="login100-form-btn">
							Sign in
						</button>
					</div>
					
					<div class="text-center w-full p-t-23">
						<h3 style="color: red;">
							<?php echo $message; ?>
						</h3>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
  
    <?php
    require_once 'footer.php';
?>
</body>
</html>