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
<style type="text/css">
	.account-button-wrapper {
		display: flex;
		width: auto;
		margin-right: 6vh;
		height: 100%;
		padding: 10px 0px;
	}

	.account-menu {
		position: absolute;
	    right: 5vh;
	    background-color: #f9f9f9;
	    min-width: 160px;
	    height: 0px;
	    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	    z-index: 9999;
	    display: flex;
	    flex-direction: column;
	    top: 3em;
	    transition: all 250ms ease-in-out;
	    overflow-y: hidden;
	}

	.account-button-wrapper > .account-menu a {
		text-decoration: none;
		color: black;
		padding: 10px 14px;
		display: block;
	}

	.account-button-wrapper:hover > .account-menu {
		transition: all 250ms ease-in-out;
		height: 120px;
		display: block;
	}


</style>
<body>
	
	<div class="header" style="position: sticky !important;
    top: 0;">
    	<?php
			foreach ($qinfo as $o) 
			    {
				    ?>
		<div class="navigation-headbar">
			<nav class="navbar navbar-dark bg-dark" style="display: flex;flex-direction: row;align-items: flex-start;flex-wrap: nowrap;padding: 0 2vh;height: 50px;line-height: 2;">
			  <div class="container-fluid">
			    <a class="navbar-brand" href="<?php echo base_url().'admin/Admin_Controller/pilih_kelola_soal' ?>">
			      <span style="margin-right: 10px;"><i class="fas fa-file fa-fw"></i></span>
			      CAT X Hilang Dashboard 
			    </a>
			  </div>
			  <div class="account-button-wrapper">
			  	<span style="float: left; margin-right: 10px;"><i class="fas fa-user-circle fa-fw" style="color: white"></i></span><h6 style="color: white;line-height: 2;"><?php echo $o->username; ?></h6>
			  	<div class="account-menu">
			  		<a href="#">Report Bug</a>
			  		<a href="#">Logout</a>
			  	</div>
			  </div>
			</nav>
		</div>
		<?php
		}
		?>
	</div>
	<div class="body" id="body" style="flex: auto 1 0; margin-top: 10px;">