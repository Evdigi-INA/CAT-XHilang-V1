	</div>
	<div class="footer">
		<p style="font-size: 10px; margin-top: 15px; text-align: center;">© PT. Evdigi Indonesia | Contact US 0838-7473-1480</p>
	</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="<?php echo base_url('js/moment-with-locales.js') ?>"></script>
<script type="text/javascript">
	
	$(document).ready(function() {

		$('#timeexpiredslider').on('input', function(){
			if ($(this).val() == 0) {
				$('#timeexpiredvalue').text('10 Menit');
			} else if($(this).val() == 1) {
				$('#timeexpiredvalue').text('30 Menit');
			} else if($(this).val() == 2) {
				$('#timeexpiredvalue').text('1 Jam');
			} else if($(this).val() == 3) {
				$('#timeexpiredvalue').text('6 Jam');
			} else if($(this).val() == 4) {
				$('#timeexpiredvalue').text('12 Jam');
			}else {
				$('#timeexpiredvalue').text('24 Jam');
			}
		});

    	$('#dataTablePeserta').DataTable({
    		"scrollY":        "45vh",
	        "scrollCollapse": true
    	});

    	$('#tabelnilaipeserta').DataTable({
    		"scrollY":        "45vh",
	        "scrollCollapse": true,
	        "paging":         true,
	        dom: 'Bfrtip',
	        buttons: [
	            {
	                extend: 'print',
	                title: 'Report by <?php echo $this->session->userdata('iduser') ?>'
	            },
	            {
	                extend: 'csv',
	                title: 'Report by <?php echo $this->session->userdata('iduser') ?>'
	            },
	            {
	                extend: 'excel',
	                title: 'Report by <?php echo $this->session->userdata('iduser') ?>'
	            }
            ]
        });

        $("#btnupdatetoken").click(function(){
        	const Toast = Swal.mixin({
			  toast: true,
			  position: 'top-end',
			  showConfirmButton: false,
			  timer: 3000,
			  timerProgressBar: true,
			  didOpen: (toast) => {
			    toast.addEventListener('mouseenter', Swal.stopTimer)
			    toast.addEventListener('mouseleave', Swal.resumeTimer)
			  }
			})

            var token = $("#tbtokenpeserta").val();
            var timeexpiredvalue = $("#timeexpiredslider").val();
			if ($("#tbtokenold").val() == token ) {
				$('#tokenalertnganu').html(`<div class="alert alert-warning alert-dismissible fade show" role="alert">
										  Disarankan untuk tidak menggunakan <strong>token lama</strong>  
										  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										    <span aria-hidden="true">&times;</span>
										  </button>
										</div>`);
				return false;
			}

	      	$.ajax({
	            type : "POST",
	            url  : "<?php echo base_url("admin/Admin_Controller/update_token") ?>",
	            dataType : "JSON",
	            data : {token:token,timeexpiredvalue:timeexpiredvalue},
	            success: function(data){
	            }
	        })
	        Toast.fire({
			  icon: 'success',
			  title: 'Refresh Data Token Berhasil'
			})
			$("#timeupdatedtoken").text(moment().format('YYYY-MM-DD kk:mm:ss'));
			$('#tokenalertnganu').html(``);
        });

        $("#submituploadfile").click(function(){
        	let timerInterval
			Swal.fire({
			  title: 'Mohon Tunggu',
			  html: 'Sedang Memvalidasi isi file soal.',
			  timer: 50000,
			  timerProgressBar: true,
			  allowOutsideClick: false,
			  didOpen: () => {
			    Swal.showLoading()
			    timerInterval = setInterval(() => {
			      
			    }, 1000)
			  },
			  willClose: () => {
			    clearInterval(timerInterval)
			  }
			}).then((result) => {
			  /* Read more about handling dismissals below */
			  if (result.dismiss === Swal.DismissReason.timer) {
			    console.log('I was closed by the timer')
			  }
			})
        });
	});

</script>

<!-- LOAD JAVASCRIPT PLUGIN INTI -->
<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- LOAD PLUGIN JAVASCRIPT UNTUK TABEL -->

<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/buttons.print.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jszip.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/pdfmake.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/vfs_fonts.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/buttons.html5.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jszip.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/datatables.min.js') ?>"></script>

<!-- LOAD CUSTOM SCRIPT UNTUK SEMUA YANG ADA DI LAMAN INI -->
<script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
</body>
</html>