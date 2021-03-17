<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<!--CUSTOM CSS -->
  	<link rel="stylesheet" href="<?php echo base_url('css/login-style.css') ?>">
  	<!-- LOAD CUSTOM FONTS DISINI -->
	<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>">

	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

	<!-- LOAD JAVASCRIPT INTI DARI BOOTSTRAP  -->
	<script src="<?php echo base_url('js/jquery-3.6.0.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  	<!--LOAD FAVICON-->
  	<link rel="icon" href="<?php echo base_url('assets/web-images/lock.png') ?>" sizes="16x16" type="image/png">

</head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<img src="<?php echo base_url('assets/web-images/polri_logo.png'); ?>" class="img-fluid" style="width: 90px; height: auto;"/>
				</div>
				<div class="col-9">
					
				</div>
			</div>
		</div>
	</div>
	<div class="body" style="flex: auto 1 0;">
		<div class="container" style="width: 320px;height: auto;margin: auto; background-color: #fff; padding: 18px; border-radius: 20px;">
			<center>
				<h1 style="font-size: 17px;">Selamat datang</h1>
				<h5 style="font-size: 14px;">Silahkan masukan data login anda</h3>
			</center>
			<div class="login-wrapper">
				<p class="warning"></p>
				<div class="container" style="height: auto;">
					<form id="form-login" action="<?php echo base_url('Verification/loginkeun/'); ?>" method="post" name="form-login" enctype="multipart/form-data">
						<div class="form">
								<input type="text" name="tbusername" autocomplete="off" required>
				        		<label for="nama" class="label-nama">
				            		<span class="content-nama">Username</span>
				        		</label>	
						</div>
						<div class="form">
								<input type="password" name="tbpassword" autocomplete="off" required>
				        		<label for="tbpassword" class="label-nama">
				            		<span class="content-nama">Password</span>
				        		</label>	
						</div>
						<div class="button-wrapper">
							<div class="button-container">
								<input class="button" type="submit" value="Login">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<p style="font-size: 10px;">© <span class="uwu">create with <3</span> | Dev-Mode, Version: 0.0.1 (Latest Beta-Build.R2 - 13/03/2021 ) see <a href="update_history.txt">this log</a> for update history </p>
	</div>
	
	<script type="text/javascript" src="<?php echo base_url('assets/web-js/login.js'); ?>"></script>
</body>
</html>