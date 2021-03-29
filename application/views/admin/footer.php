	</div>
	<div class="footer">
		<p style="font-size: 10px; margin-top: 15px; text-align: center;">© PT. Evdigi Indonesia | Contact US 0838-7473-1480</p>
	</div>

<script type="text/javascript">
	
	$(document).ready(function() {
    	$('#dataTablePeserta').DataTable({
    		"scrollY":        "45vh",
	        "scrollCollapse": true,
	        "paging":         true
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

<!--LOAD DEMO DATATABLES-->
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>

<!-- LOAD CUSTOM SCRIPT UNTUK SEMUA YANG ADA DI LAMAN INI -->
<script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
</body>
</html>