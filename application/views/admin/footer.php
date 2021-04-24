	</div>
	<div class="footer">
		<p style="font-size: 10px; margin-top: 15px; text-align: center;">© PT. Evdigi Indonesia | Contact US 0838-7473-1480</p>
	</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="<?php echo base_url('js/moment-with-locales.js') ?>"></script>
<script type="text/javascript">

	$(document).ready(function() {
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

		var chartLabels = ['Kolom 1', 'Kolom 2', 'Kolom 3', 'Kolom 4', 'Kolom 5', 'Kolom 6', 'Kolom 7', 'Kolom 8', 'Kolom 9', 'Kolom 10'];
		var lineCharts0jl;
		var lineCharts1jl;
		var lineCharts2jl;
		var performances0jl;
		var performances1jl;
		var performances2jl;
		var barChartAlljs;
		var barChartHorizAlljs;
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
		var ctxLineChartS0JL = document.getElementById("score-chart-s0jl").getContext("2d");
		var ctxLineChartS1JL = document.getElementById("score-chart-s1jl").getContext("2d");
		var ctxLineChartS2JL = document.getElementById("score-chart-s2jl").getContext("2d");
		var ctxPerformanceS0JL = document.getElementById("performance-s0jl").getContext("2d");
		var ctxPerformanceS1JL = document.getElementById("performance-s1jl").getContext("2d");
		var ctxPerformanceS2JL = document.getElementById("performance-s2jl").getContext("2d");
		var ctxbarChartallJS = document.getElementById("graph2").getContext("2d");
		var ctxbarHorizallJS = document.getElementById("graph1").getContext("2d");

		barChartHorizAlljs		= new Chart(ctxbarHorizallJS,{
				type: 'horizontalBar',
				data: {
					labels: ['Soal Angka','Soal Huruf','Soal Simbol'],
					datasets: [{
						label: "Nilai",
						data: [0,0,0],
						backgroundColor: 'rgba(255, 23, 68, 0.62)',
						borderColor: '#FF1744',
						borderWidth: 2
					}]
				},
				options: {
					legend: {
            display: false
         },
					responsive: true,
					scales: {
  xAxes: [{                                 
    ticks: {                                        
      beginAtZero:true
    }                                   
  }],                       
  yAxes: [{
    ticks: {                                        
      beginAtZero:true
    }
  }]
}
				},
		});

		barChartAlljs		 = new Chart(ctxbarChartallJS,{
			type: 'bar',
			data: {
				labels: ['Soal Angka','Soal Huruf', 'Soal Simbol'],
				datasets: [
				{
					label: 'Terjawab',
					data: [0,0,0],
					backgroundColor: 'rgba(110, 246, 112, 0.79)',
			        borderColor: '#1CE720',
			        borderWidth: 2
				},
				{
					label: 'Tidak Terjawab',
					data: [0,0,0],
					backgroundColor: 'rgba(248, 63, 63, 0.62)',
			        borderColor: '#F83F3F',
			        borderWidth: 2
				}]
			},
			options: {
				plugins: {
					legend: {
						position: 'top',
					}
				},
				scales: {
					xAxes: [{ stacked: true }],
					yAxes: [{ stacked: true }]
				}
			},
		});
		lineCharts0jl = new Chart(ctxLineChartS0JL,
		{
			type: 'line',
			data:
			{
				labels: chartLabels,
				datasets: [
				{
					data: JSON.parse("[0,0,0,0,0,0,0,0,0,0]"),
					label: 'Jawaban Benar',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#1ce633',
					backgroundColor: '#fff',
				},
				{
					data: JSON.parse("[0,0,0,0,0,0,0,0,0,0]"),
					label: 'Jawaban Salah',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#f04832',
					backgroundColor: '#fff',
				},
				{
					data: JSON.parse("[0,0,0,0,0,0,0,0,0,0]"),
					label: 'Dijawab',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#45aeef',
					backgroundColor: '#fff',
				},
				{
					data: JSON.parse("[0,0,0,0,0,0,0,0,0,0]"),
					label: 'Tidak Dijawab',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#f0e813',
					backgroundColor: '#fff',
				}]
			},
			options:
			{
				responsive: true,
				scales: scalesOptions,
			}
		});

		lineCharts1jl = new Chart(ctxLineChartS1JL,
		{
			type: 'line',
			data:
			{
				labels: chartLabels,
				datasets: [
				{
					data: JSON.parse("[0,0,0,0,0,0,0,0,0,0]"),
					label: 'Jawaban Benar',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#1ce633',
					backgroundColor: '#fff',
				},
				{
					data: JSON.parse("[0,0,0,0,0,0,0,0,0,0]"),
					label: 'Jawaban Salah',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#f04832',
					backgroundColor: '#fff',
				},
				{
					data: JSON.parse("[0,0,0,0,0,0,0,0,0,0]"),
					label: 'Dijawab',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#45aeef',
					backgroundColor: '#fff',
				},
				{
					data: JSON.parse("[0,0,0,0,0,0,0,0,0,0]"),
					label: 'Tidak Dijawab',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#f0e813',
					backgroundColor: '#fff',
				}]
			},
			options:
			{
				responsive: true,
				scales: scalesOptions,
			}
		});

		lineCharts2jl = new Chart(ctxPerformanceS2JL,
		{
			type: 'line',
			data:
			{
				labels: chartLabels,
				datasets: [
				{
					data: JSON.parse("[0,0,0,0,0,0,0,0,0,0]"),
					label: 'Jawaban Benar',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#1ce633',
					backgroundColor: '#fff',
				},
				{
					data: JSON.parse("[0,0,0,0,0,0,0,0,0,0]"),
					label: 'Jawaban Salah',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#f04832',
					backgroundColor: '#fff',
				},
				{
					data: JSON.parse("[0,0,0,0,0,0,0,0,0,0]"),
					label: 'Dijawab',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#45aeef',
					backgroundColor: '#fff',
				},
				{
					data: JSON.parse("[0,0,0,0,0,0,0,0,0,0]"),
					label: 'Tidak Dijawab',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#f0e813',
					backgroundColor: '#fff',
				}]
			},
			options:
			{
				responsive: true,
				scales: scalesOptions,
			}
		});

		performances0jl = new Chart(ctxPerformanceS0JL,
		{
			type: 'line',
			data:
			{
				labels: 'Performa Pengerjaan',
				datasets: [
				{
					data: JSON.parse("[0,0,0,0,0,0,0,0,0,0]"),
					label: 'Skor',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#1ce633',
					backgroundColor: '#fff',
				}]
			},
			options:
			{
				responsive: true,
				scales: scalesOptions,
			}
		});

		performances1jl = new Chart(ctxPerformanceS1JL,
		{
			type: 'line',
			data:
			{
				labels: 'Performa Pengerjaan',
				datasets: [
				{
					data: JSON.parse("[0,0,0,0,0,0,0,0,0,0]"),
					label: 'Skor',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#1ce633',
					backgroundColor: '#fff',
				}]
			},
			options:
			{
				responsive: true,
				scales: scalesOptions,
			}
		});

		performances2jl = new Chart(ctxPerformanceS2JL,
		{
			type: 'line',
			data:
			{
				labels: 'Performa Pengerjaan',
				datasets: [
				{
					data: JSON.parse("[0,0,0,0,0,0,0,0,0,0]"),
					label: 'Skor',
					fill: false,
					borderWidth: 2,
					pointRadius: 3,
					pointHoverRadius: 5,
					borderColor: '#1ce633',
					backgroundColor: '#fff',
				}]
			},
			options:
			{
				responsive: true,
				scales: scalesOptions,
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

        $('#tabelnilaipeserta tbody').on('click','tr', function () {
        	$('html, body').animate({
		        scrollTop: $("#card-chart").offset().top -100
		    }, 500);
	        lineCharts0jl.data.datasets[0].data = JSON.parse("[" + $(this).find('td:eq(8)').text() + "]");
		    lineCharts0jl.data.datasets[1].data = JSON.parse("[" + $(this).find('td:eq(9)').text() + "]");
		    lineCharts0jl.data.datasets[2].data = JSON.parse("[" + $(this).find('td:eq(10)').text() + "]");
		    lineCharts0jl.data.datasets[3].data = JSON.parse("[" + $(this).find('td:eq(11)').text() + "]");
		    lineCharts1jl.data.datasets[0].data = JSON.parse("[" + $(this).find('td:eq(12)').text() + "]");
		    lineCharts1jl.data.datasets[1].data = JSON.parse("[" + $(this).find('td:eq(13)').text() + "]");
		    lineCharts1jl.data.datasets[2].data = JSON.parse("[" + $(this).find('td:eq(14)').text() + "]");
		    lineCharts1jl.data.datasets[3].data = JSON.parse("[" + $(this).find('td:eq(15)').text() + "]");
		    lineCharts2jl.data.datasets[0].data = JSON.parse("[" + $(this).find('td:eq(16)').text() + "]");
		    lineCharts2jl.data.datasets[1].data = JSON.parse("[" + $(this).find('td:eq(17)').text() + "]");
		    lineCharts2jl.data.datasets[2].data = JSON.parse("[" + $(this).find('td:eq(18)').text() + "]");
		    lineCharts2jl.data.datasets[3].data = JSON.parse("[" + $(this).find('td:eq(19)').text() + "]");
		    performances0jl.data.datasets[0].data = JSON.parse("[" + $(this).find('td:eq(19)').text() + "]");
		    performances1jl.data.datasets[1].data = JSON.parse("[" + $(this).find('td:eq(19)').text() + "]");
		    performances2jl.data.datasets[2].data = JSON.parse("[" + $(this).find('td:eq(19)').text() + "]");
		    barChartAlljs.data.datasets[0].data = JSON.parse("[" + $(this).find('td:eq(8)').text() + "," + $(this).find('td:eq(12)').text() + "," + $(this).find('td:eq(16)').text() + "]");
		    barChartAlljs.data.datasets[1].data = JSON.parse("[" + $(this).find('td:eq(9)').text() + "," + $(this).find('td:eq(13)').text() +"," + $(this).find('td:eq(17)').text() + "]");
		    barChartHorizAlljs.data.datasets[0].data = JSON.parse("[" + $(this).find('td:eq(3)').text() + "," + $(this).find('td:eq(4)').text() +"," + $(this).find('td:eq(5)').text() + "]");
		    lineCharts0jl.update();
		    lineCharts1jl.update();
		    lineCharts2jl.update();
		    barChartAlljs.update();
		    barChartHorizAlljs.update();

	        if ($(this).hasClass('selected') ) {
	            $(this).removeClass('selected');
	            lineCharts0jl.data.datasets[0].data = JSON.parse("[0,0,0,0,0,0,0,0,0,0]");
			    lineCharts0jl.data.datasets[1].data = JSON.parse("[0,0,0,0,0,0,0,0,0,0]");
			    lineCharts0jl.data.datasets[2].data = JSON.parse("[0,0,0,0,0,0,0,0,0,0]");
			    lineCharts0jl.data.datasets[3].data = JSON.parse("[0,0,0,0,0,0,0,0,0,0]");
			    lineCharts1jl.data.datasets[0].data = JSON.parse("[0,0,0,0,0,0,0,0,0,0]");
			    lineCharts1jl.data.datasets[1].data = JSON.parse("[0,0,0,0,0,0,0,0,0,0]");
			    lineCharts1jl.data.datasets[2].data = JSON.parse("[0,0,0,0,0,0,0,0,0,0]");
			    lineCharts1jl.data.datasets[3].data = JSON.parse("[0,0,0,0,0,0,0,0,0,0]");
			    lineCharts2jl.data.datasets[0].data = JSON.parse("[0,0,0,0,0,0,0,0,0,0]");
			    lineCharts2jl.data.datasets[1].data = JSON.parse("[0,0,0,0,0,0,0,0,0,0]");
			    lineCharts2jl.data.datasets[2].data = JSON.parse("[0,0,0,0,0,0,0,0,0,0]");
			    lineCharts2jl.data.datasets[3].data = JSON.parse("[0,0,0,0,0,0,0,0,0,0]");
			    barChartAlljs.data.datasets[0].data = JSON.parse("[0,0,0]");
			    barChartAlljs.data.datasets[1].data = JSON.parse("[0,0,0]");
			    barChartHorizAlljs.data.datasets[0].data = JSON.parse("[0,0,0]");
			    lineCharts0jl.update();
			    lineCharts1jl.update();
			    lineCharts2jl.update();
			    barChartAlljs.update();
			    barChartHorizAlljs.update();
			    $('.block').css('display','block');
	        }
	        else {
	            $('#tabelnilaipeserta tbody tr.selected').removeClass('selected');
	            $(this).addClass('selected');
	            $('.block').css('display','none');
	        }
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