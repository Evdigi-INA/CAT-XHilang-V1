<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<div class="trail">
		<canvas id="world" width="876" height="657"></canvas>
	</div>
	<div class="container" style="opacity:1;">
	  	<div class="row-fluid" style="padding-top: 25%;">
	  		<div class="col-sm-offset-2 col-md-offset-4 col-sm-8 col-md-4 col-xs-12 login-form">
	  			<div class="row-fluid">
	  				<div class="col-sm-12 logo-login-form" style="text-align: center; margin: 4vh 0;">
	  					<img class="img-fluid center-block" src="<?php echo base_url('assets/web-images/polri_logo.png'); ?>"/>
	  				</div>
	  			</div>
	  			<div class="row-fluid">
	  				<div class="col-sm-12">
	  					<center>
				<h1 style="font-size: 17px;"><?php
            $t = date("H");

            if ($t < "11") {
              echo "Selamat Pagi";
            } elseif ($t < "15") {
              echo "Selamat Siang";
            } elseif ($t < "18") {
              echo "Selamat Sore";
            } else {
              echo "Selamat Malam";
            }
            ?></h1>
				<h5 style="font-size: 14px;" class="welcometext">Silahkan masukan data login anda</h3>
			</center>
			<p class="warning"></p>
	  					<div id="form-login" name="form-login">
						<div class="form tbusernamenya">
							<input type="text" name="tbusername" id="tbusername" autocomplete="off" required>
			        		<label for="nama" class="label-nama">
			            		<span class="content-nama">Username</span>
			        		</label>	
						</div>
						<div class="form tbpasswordnya">
							<input type="password" name="tbpassword" id="tbpassword" autocomplete="off" required>
			        		<label for="tbpassword" class="label-nama">
			            		<span class="content-nama">Password</span>
			        		</label>	
						</div>
						<div class="form tbtokenform" style="display: none">
							<input type="text" name="tbtoken" id="tbtoken" autocomplete="off" required>
			        		<label for="nama" class="label-nama">
			            		<span class="content-nama">Ketik disini</span>
			        		</label>		
						</div>
						<div class="button-wrapper" style="margin-bottom: 10px;">
							<div class="button-container">
								<input class="button" type="submit" value="Login" id="btn-login">
								<input class="button" type="submit" value="Validasi" id="buttonvalidate" style="display: none;">
							</div>
						</div>
					</div>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	</div>
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
	<script type="text/javascript">
		var baseUrl = "<?= base_url();?>";
    	var siteUrl = "<?= site_url();?>";
	</script>
	<script type="text/javascript" src="<?php echo base_url('assets/web-js/login-js.js'); ?>"></script>
</body>
</html>