<?php
include '../php/noCache.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title id="tittleSite">Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('../images/home_background_1.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" id="formSigIn">
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="username" placeholder="username or email" autocomplete="off">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="pass" placeholder="password" autocomplete="off">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Sign In
					</button>
				</div>

                <br>

				<div class="text-center">
					<a href="#" class="txt2 hov1" onclick="showSignUp();">
						Sign Up
					</a>
				</div>
			</form>

            <form class="login100-form collapse" id="formSignUp">
                <span class="login100-form-title p-b-37">
					Sign Up
				</span>


                <div class="wrap-input100  form-group">
                    <input class="input100" type="text"  placeholder="Id" autocomplete="off">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 form-group">
                    <input class="input100" type="text"  placeholder="Name" autocomplete="off">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100  form-group">
                    <input class="input100" type="text"  placeholder="Email" autocomplete="off">
                    <span class="focus-input100"></span>
                </div>



                <div class="wrap-input100  form-group">
                    <input class="input100" type="password"  placeholder="Password" autocomplete="off">
                    <span class="focus-input100"></span>
                </div>


                <div class="container-login100-form-btn form-group">
                    <button class="login100-form-btn">
                        Sign Up
                    </button>
                </div>

                <div class="text-center">
                    <a href="#" class="txt2 hov1" onclick="showSignIn();">
                        Sign In
                    </a>
                </div>
            </form>
			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
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
	<script src="js/validar.js"></script>

</body>
</html>