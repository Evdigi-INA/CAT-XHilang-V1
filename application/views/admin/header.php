<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title ?></title>
	<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<!--CUSTOM CSS -->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/admin-style.css') ?>">
  	<!-- LOAD CUSTOM FONTS DISINI -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>">

	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

	<!-- LOAD JAVASCRIPT INTI DARI BOOTSTRAP  -->
	<script src="<?php echo base_url('js/jquery-3.6.0.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  	<!--LOAD FAVICON-->
  	<link rel="icon" href="<?php echo base_url('assets/web-images/lock.png') ?>" sizes="16x16" type="image/png">

  	<script type="text/javascript" src="<?php echo base_url('js/scriptsoal.js');?>"></script>

</head>
<body>
	
	<div class="header" style="height: 80px;">
		<div class="container" style="margin-top: 2%;">
			<div class="row">
				<div class="col-3">
					<img src="<?php echo base_url('assets/web-images/polri_logo.png'); ?>" class="img-fluid" style="width: 80px; height: auto;"/>
				</div>
				<div class="col-9">
					<?php
				    foreach ($qinfo as $o) 
				    {
				    ?>
					<h3 style="margin-top: 30px;">Dashboard - <?php echo $o->username; ?></h3>	
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="body" id="body" style="flex: auto 1 0; margin-top: 55px;">