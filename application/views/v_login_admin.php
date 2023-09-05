<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title> | <?= $title ?></title>
	<!--
		CSS
		============================================= -->
	<link  href="<?= base_url() ?>template/olshop/css/linearicons.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/font-awesome.min.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/themify-icons.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/bootstrap.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/owl.carousel.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/nice-select.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/nouislider.min.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/ion.rangeSlider.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/magnific-popup.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/main.css" rel="stylesheet">
</head>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="<?= base_url() ?>template/olshop/index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="<?= base_url() ?>template/olshop/category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?= base_url() ?>template/olshop/img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="<?= base_url() ?>template/olshop/registration.html">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
					<?php 
         echo validation_errors('<div class="alert alert-warning alert-dismissible">                   
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>                   
         <h5><i class="icon fas fa-exclamation-triangle"></i> Nintifications!</h5>', '</div>');

         if ($this->session->flashdata('error')) {
              echo '<div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i> Nintifications!</h5>';
              echo $this->session->flashdata('error');
              echo '</div>';
         }

         if ($this->session->flashdata('pesan')) {
              echo '<div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i>Succes!!</h5>';
              echo $this->session->flashdata('pesan');
              echo '</div>';
         }?>

						<h3>Log in to enter</h3>
						
						<?php 
							echo form_open('auth/login_user')
						?>
						
							<div class="col-md-12 form-group">
							<input type="text" class="form-control" id="username" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'admin'">
							</div>
							<div class="col-md-12 form-group">
							<input type="text" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'admin'">
							</div>
							<div class="col-md-12 form-group">
								
							<a href="" class="btn btn-success">Website</a>
								<button type="submit" value="submit" class="primary-btn">Log In</button>
								<a href="<?= base_url() ?> ">Forgot Password?</a>
								</div>	
						<?php
							echo form_close()
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
	
	
<script src="<?= base_url() ?>template/olshop/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="<?= base_url() ?>template/olshop/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="<?= base_url() ?>template/olshop/js/vendor/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>template/olshop/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?= base_url() ?>template/olshop/js/jquery.nice-select.min.js"></script>
	<script src="<?= base_url() ?>template/olshop/js/jquery.sticky.js"></script>
	<script src="<?= base_url() ?>template/olshop/js/nouislider.min.js"></script>
	<script src="<?= base_url() ?>template/olshop/js/countdown.js"></script>
	<script src="<?= base_url() ?>template/olshop/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url() ?>template/olshop/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="<?= base_url() ?>template/olshop/ttps://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="<?= base_url() ?>template/olshop/js/gmaps.min.js"></script>
	<script src="<?= base_url() ?>template/olshop/js/main.js"></script>
</body>

</html>	