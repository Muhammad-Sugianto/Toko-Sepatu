<!DOCTYPE html>
<html lang="en">
<head>
	<title> Login | </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url() ?>template/admin/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/admin/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/admin/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/admin/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/admin/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/admin/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/admin/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/admin/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/admin/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/admin/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font">dmin</i>
					</span>

        <?php 
        echo form_open('auth/login_user')
        ?>


					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
                    <div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>  
         <?php echo form_close()?> 
         
					<div class="text-center p-t-50">
                    <div class="text-center p-t-10">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

    <div id="dropDownSelect1"></div>
	
    <!--===============================================================================================-->
        <script src="<?= base_url() ?>template/admin/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="<?= base_url() ?>template/admin/login/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="<?= base_url() ?>template/admin/login/vendor/bootstrap/js/popper.js"></script>
        <script src="<?= base_url() ?>template/admin/login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="<?= base_url() ?>template/admin/login/vendor/select2/select2.min.js"></script>
    <!--=============<?= base_url() ?>templa==================================================================================-->
        <script src="<?= base_url() ?>template/admin/login/vendor/daterangepicker/moment.min.js"></script>
        <script src="<?= base_url() ?>template/admin/login/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="<?= base_url() ?>template/admin/login/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script src="<?= base_url() ?>template/admin/login/js/main.js"></script>
    
</body>
</html