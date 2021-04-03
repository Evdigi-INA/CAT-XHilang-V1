<div class="container" style="background-color: #ececec;
    border-radius: 5px;">
	<nav aria-label="breadcrumb">
	  	<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url().'admin/Admin_Controller/index' ?>">Menu Utama</a></li>
			<li class="breadcrumb-item active" aria-current="page">Kelola Soal</li>
		</ol>
	</nav>
</div>
<div class="container" style="padding: 8vh 13vh;">
	<div class="row">
		<div class="col-sm-3 card-wrapper">
			<div class="each-card-wrap">
				<a href="<?php echo "kelola_soal/S001" ?>" style="text-decoration: none;">
					<div class="img-card-wrapper">
					<img src="<?php echo base_url('assets/web-images/029-fillingcabinet.png') ?>" style="height: auto;width: 100%;">
					</div>
					<div class="title-card-wrapper">
						<h3>Soal Angka</h3>
					</div>
				</a>
				
			</div>
		</div>
		<div class="col-sm-3 card-wrapper">
			<div class="each-card-wrap">
				<a href="<?php echo "kelola_soal/S002" ?>" style="text-decoration: none;">
					<div class="img-card-wrapper">
						<img src="<?php echo base_url('assets/web-images/029-fillingcabinet.png') ?>" style="height: auto;width: 100%;">
					</div>
					<div class="title-card-wrapper">
						<h3>Soal Huruf</h3>
					</div>
				</a>
			</div>
		</div>
		<div class="col-sm-3 card-wrapper">
			<div class="each-card-wrap">
				<a href="<?php echo "kelola_soal/S003" ?>" style="text-decoration: none;">
					<div class="img-card-wrapper">
					<img src="<?php echo base_url('assets/web-images/029-fillingcabinet.png') ?>" style="height: auto;width: 100%;">
					</div>
					<div class="title-card-wrapper">
						<h3>Soal Simbol</h3>
					</div>
				</a>
			</div>
		</div>
		<div class="col-sm-3 card-wrapper">
			<div class="each-card-wrap">
				<a href="#" data-toggle="modal" data-target="#uploadexcelModalCenter" style="text-decoration: none;">
					<div class="img-card-wrapper">
					<img src="<?php echo base_url('assets/web-images/import-file-64.png') ?>" style="height: auto;width: 100%;">
					</div>
					<div class="title-card-wrapper">
						<h3>Import Soal</h3>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="uploadexcelModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    	<form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/upload')?>" method="post" enctype="multipart/form-data">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Upload Soal</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        
			<input type="file" name="fileexcel" accept=".xlsx,.xls,.csv" class="excelupload" />
			<p class="help">* Gunakan file dengan extensi .xlsx/.xls/.csv</p>
			
		    
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" name="submit" class="btn btn-primary" id="submituploadfile" value="upload">Upload... </button>
	      </div>
      </form>
    </div>
  </div>
</div>