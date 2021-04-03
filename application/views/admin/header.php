<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

  	<!-- LOAD CUSTOM TEMPLATE STYLE DISINI -->
	<link rel="stylesheet" href="<?php echo base_url('css/sb-admin.css') ?> ">

  	<script src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
  	<!-- LOAD DATATABLE PLUGIN CSS DISINI -->
  	
	<link rel="stylesheet" href="<?php echo base_url('assets/datatables/jquery.dataTables.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css') ?>">
  	<link rel="stylesheet" href="<?php echo base_url('assets/datatables/buttons.dataTables.min.css') ?>">

  	<script type="text/javascript" src="<?php echo base_url('js/scriptsoal.js');?>"></script>

</head>
<style type="text/css">
	.account-button-wrapper {
	    width: auto;
	    height: 100%;
	    padding: 6px 0;
	}

</style>
<body>
	
	<div class="header" style="position: sticky !important;top: 0;z-index: 999;">
    	<?php
			foreach ($qinfo as $o) 
			    {
				    ?>
		<div class="navigation-headbar">
			<nav class="navbar navbar-dark bg-dark" style="display: flex;flex-direction: row;align-items: flex-start;flex-wrap: nowrap;padding: 0 2vh;height: 50px;line-height: 2;">
			  <div class="container-fluid">
			    <a class="navbar-brand" href="<?php echo base_url().'admin/Admin_Controller/index' ?>">
			      <span style="margin-right: 10px;"><i class="fas fa-file fa-fw"></i></span>
			      CAT Tes Sikap Kerja 
			    </a>
			  </div>
			  <div class="account-button-wrapper"><h6 style="color: white; font-size: 15px;"><?php
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
            ?>, <?php echo $o->username; ?></h6>
            <input type="text" name="iduser" value="<?php echo $o->id_user ?>" hidden>
			  </div>
			  <div class="btn-logout-wrapper">
			  	<a href="<?php echo base_url().'Verification/logoutkeun' ?>" style="line-height: 3;"><span style="color: white;"><i class="fas fa-sign-out-alt"></i></span></a>
			  </div>
			</nav>
		</div>
		<?php
		}
		?>
	</div>
	<div class="body" id="body" style="flex: auto 1 0; margin-top: 10px;">