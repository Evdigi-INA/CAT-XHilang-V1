	</div>
	<div class="footer">
		<p style="font-size: 10px; text-align: center;">© <span class="uwu">create with <3</span> | Dev-Mode, Version: 0.0.1 (Latest Beta-Build.R2 - 13/03/2021 ) see <a href="update_history.txt">this log</a> for update history </p>
	</div>

<script type="text/javascript">
	
	$(document).ready(function() {
    	$('#dataTablePeserta').DataTable({
    		"scrollY":        "45vh",
	        "scrollCollapse": true,
	        "paging":         true
    	});
    	// Set new default font family and font color to mimic Bootstrap's default styling
		Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
		Chart.defaults.global.defaultFontColor = '#292b2c';

		// Area Chart Example
		var ctx = document.getElementById("myAreaChart");
		var myLineChart = new Chart(ctx, {
		  type: 'line',
		  data: {
		    labels: ["Mar 1", "Mar 2", "Mar 3", "Mar 4", "Mar 5", "Mar 6", "Mar 7", "Mar 8", "Mar 9", "Mar 10", "Mar 11", "Mar 12", "Mar 13"],
		    datasets: [{
		      label: "Sessions",
		      lineTension: 0.3,
		      backgroundColor: "rgba(2,117,216,0.2)",
		      borderColor: "rgba(2,117,216,1)",
		      pointRadius: 5,
		      pointBackgroundColor: "rgba(2,117,216,1)",
		      pointBorderColor: "rgba(255,255,255,0.8)",
		      pointHoverRadius: 5,
		      pointHoverBackgroundColor: "rgba(2,117,216,1)",
		      pointHitRadius: 50,
		      pointBorderWidth: 2,
		      data: [10000, 30162, 26263, 18394, 18287, 28682, 31274, 33259, 25849, 24159, 32651, 31984, 38451],
		    }],
		  },
		  options: {
		    scales: {
		      xAxes: [{
		        time: {
		          unit: 'date'
		        },
		        gridLines: {
		          display: false
		        },
		        ticks: {
		          maxTicksLimit: 7
		        }
		      }],
		      yAxes: [{
		        ticks: {
		          min: 0,
		          max: 40000,
		          maxTicksLimit: 5
		        },
		        gridLines: {
		          color: "rgba(0, 0, 0, .125)",
		        }
		      }],
		    },
		    legend: {
		      display: false
		    }
		  }
		});

	});

</script>

<!-- LOAD JAVASCRIPT PLUGIN INTI -->
<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- LOAD PLUGIN JAVASCRIPT UNTUK TABEL -->

<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/buttons.print.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/buttons.html5.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jszip.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/datatables.min.js') ?>"></script>

<!--LOAD DEMO DATATABLES-->
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>

<!-- LOAD CUSTOM SCRIPT UNTUK SEMUA YANG ADA DI LAMAN INI -->
<script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
</body>
</html>