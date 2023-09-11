<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login/Register</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/login/css/sourcesanspro-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?= base_url() ?>template/login/css/style.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="path-to-bootstrap-css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body class="form-v8">
	<div class="page-content">
		<div class="header">
			<h1 style="color: white;">Sign In/ Sign/ Up</h1>
			<div class="navigation">
			<nav class="d-flex justify-content-center align-items-center">
				<h5 style="text-align: center;"><a href="<?= base_url('/') ?>template/olshop/index.html"><span class="lnr lnr-arrow-right"></span> Home </a></h5>
			</nav>
		</div>

		</div>
	</div>
	<div class="page-content">
		<div class="form-v8-content">
			<div class="form-left">
				<img src="<?= base_url() ?>template/login/images/login1.jpeg" alt="form">
			</div>
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-in')">Sign In</button>
					</div>
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Sign Up</button>
					</div>
				</div>
				
				<?php 
         echo validation_errors('<div class="alert alert-warning alert-dismissible">                   
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>                   
         <h5><i class="icon fas fa-exclamation-triangle"></i> Notification!</h5>', '</div>');

         if ($this->session->flashdata('error')) {
              echo '<div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i> Notification!</h5>';
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



			<form class="form-detail" action="<?= site_url('auth/login_user') ?>" method="post">

				
					<div class="tabcontent" id="sign-in">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="username" id="username" class="input-text" required>
								<span class="label">Username</span>
  								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
					
						<div class="form-row">
							<div class="col-6">
								<a href="<?= base_url() ?>" class="btn btn-success btn-block">Website</a>
							</div>
							<div class="col-6">
								<input type="submit" name="login" class="btn btn-primary btn-block" value="Sign In">
							</div>
						</div>

					</div>
				</form>

				

				<form class="form-detail" action="<?= site_url('auth/register_user') ?>" method="post">

				
					<div class="tabcontent" id="sign-up">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="full_name" id="full_name" class="input-text" required>
								<span class="label">Full Name</span>
  								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="email" id="email" class="input-text" required>
								<span class="label">E-Mail</span>
  								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="confirm_password" id="confirm_password" class="input-text" required>
								<span class="label">Confirm Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row-last">
							<input type="submit" name="register" class="register" value="Register">
						</div>
					</div>
				</form>

				</div>
			</div>
		</div>
	</div>
		
	<script type="text/javascript">
        function closeAlert(button) {
            const alert = button.parentElement;
            alert.style.display = "none"; // Menyembunyikan elemen alert saat tombol close diklik
        }

        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
            
            // Simpan status tab yang sedang aktif ke dalam cookie
            document.cookie = "activeTab=" + cityName;
        }
				// Fungsi untuk mendapatkan nilai cookie berdasarkan namanya
		function getCookie(name) {
			const value = "; " + document.cookie;
			const parts = value.split("; " + name + "=");
			if (parts.length === 2) {
				return parts.pop().split(";").shift();
			}
		}

		// Fungsi untuk menampilkan tab yang sesuai berdasarkan nilai cookie
		function displayActiveTab() {
			const activeTab = getCookie("activeTab");
			if (activeTab) {
				// Hanya tampilkan tab yang sesuai jika ada nilai cookie "activeTab"
				openCity({ currentTarget: document.querySelector(`button[onclick="openCity(event, '${activeTab}')]`) }, activeTab);
			} else {
				// Jika tidak ada cookie "activeTab", secara default, tampilkan tab Sign Up
				document.getElementById("defaultOpen").click();
			}
		}

		// Panggil fungsi displayActiveTab saat dokumen selesai dimuat
		document.addEventListener("DOMContentLoaded", displayActiveTab);

		// Saat halaman dimuat ulang, panggil fungsi displayActiveTab lagi
		window.addEventListener("beforeunload", () => {
			displayActiveTab();
		});
		</script>
		<script>
        window.setTimeout(function() {
            $('.alert').fadeTo(500,0).slideUp(500,function() {
                $(this).remove();
            });
        }, 3000)
    </script>   

</body>
</html>
