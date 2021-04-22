	</div>
	<div class="footer">
		<p style="font-size: 10px; margin-top: 15px; text-align: center;">© PT. Evdigi Indonesia | Contact US 0838-7473-1480</p>
	</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="<?php echo base_url('js/moment-with-locales.js') ?>"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		var chartLabels = ['Kolom 1', 'Kolom 2', 'Kolom 3', 'Kolom 4', 'Kolom 5', 'Kolom 6', 'Kolom 7', 'Kolom 8', 'Kolom 9', 'Kolom 10'];
		var lineChart
		var scalesOptions = {
					xAxes: [
					{
						gridLines:
						{
							display: false
						}
					}],
					yAxes: [
					{
						gridLines:
						{
							color: '#eff3f6',
							drawBorder: false,
						},
					}]
				};

		var ctxLineChart = document.getElementById("score-chart").getContext("2d");
		lineChart = new Chart(ctxLineChart,
		{
			type: 'line',
			data:
			{
				labels: chartLabels,
				<?php foreach ($infop as $key) {
					?>
				datasets: [
				{
					data: [<?php echo $key->s0jlcorrect; ?>],
					label: 'Jawaban Benar',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#1ce633',
					backgroundColor: '#fff',
				},
				{
					data: [<?php echo $key->s0jlwrong; ?>],
					label: 'Jawaban Salah',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#f04832',
					backgroundColor: '#fff',
				},
				{
					data: [<?php echo $key->s0jlanswered; ?>],
					label: 'Dijawab',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#45aeef',
					backgroundColor: '#fff',
				},
				{
					data: [<?php echo $key->s0jlnotanswered; ?>],
					label: 'Tidak Dijawab',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#f0e813',
					backgroundColor: '#fff',
				}]
				<?php
				} ?>
			},
			options:
			{
				responsive: true,
				scales: scalesOptions,
			}
		});

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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-html5-1.7.0/b-print-1.7.0/datatables.min.js"></script>

<!-- LOAD CUSTOM SCRIPT UNTUK SEMUA YANG ADA DI LAMAN INI -->
<script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
</body>
</html>