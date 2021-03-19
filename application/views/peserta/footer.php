	</div>
	<div class="footer">
		<p style="font-size: 10px; text-align: center;">© <span class="uwu">create with <3</span> | Dev-Mode, Version: 0.0.1 (Latest Beta-Build.R2 - 13/03/2021 ) see <a href="update_history.txt">this log</a> for update history </p>
	</div>

<script type="text/javascript">
	
	$(document).ready(function(){
		
		
		var kolom = $('.kolomnya');
		var barisny = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30];
		var kolomny = [1,2,3,4,5,6,7,8,9,10];
		var index = -1;
		var counter = $(this).index();
		var max = $(barisny).length;

		$('#nextbutton').click(function(){
			$('.soaltest').att
			$('.barisss').attr('hidden','true');
			if (index <= max) {
				index++;
				$('.barisnya' + barisny[index]).removeAttr('hidden');
				$('#judulcard').text('Soal '+barisny[index]);
				console.log(index);
			}else{
				alert("mentok kekanan")
				$('.barisnya' + barisny[index]).removeAttr('hidden');
				$('#judulcard').text('Soal '+barisny[index]);
				console.log(index);
			}

			if (index <= 101) {
				$('#jenissoalnya').text('Soal Angka');
			} else if (index <= 201) {
				$('#jenissoalnya').text('Soal Huruf');
			} else {
				$('#jenissoalnya').text('Soal Simbol')
			}
		});

		$('#prevbutton').click(function(){
			$('.barisss').attr('hidden','true');
			if (index >= 1) {
				index--;
				$('.barisnya' + barisny[index]).removeAttr('hidden');
				$('#judulcard').text('Soal '+barisny[index]);
				console.log(index);
			} else {
				alert("mentok kekiri");
				$('.barisnya' + barisny[index]).removeAttr('hidden');
				$('#judulcard').text('Soal '+barisny[index]);
				console.log(index);
			}
			
			if (index <= 101) {
				$('#jenissoalnya').text('Soal Angka');
			} else if (index <= 201) {
				$('#jenissoalnya').text('Soal Huruf');
			} else {
				$('#jenissoalnya').text('Soal Simbol')
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

<!-- LOAD CUSTOM SCRIPT UNTUK SEMUA YANG ADA DI LAMAN INI -->
<script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
</body>
</html>