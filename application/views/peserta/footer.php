	</div>
	<div class="footer">
		<p style="font-size: 10px; text-align: center;">© <span class="uwu">create with <3</span> | Dev-Mode, Version: 0.0.1 (Latest Beta-Build.R2 - 13/03/2021 ) see <a href="update_history.txt">this log</a> for update history </p>
	</div>

<script type="text/javascript">
	
	$(document).ready(function(){
		
		function range(awal, akhir) {
		  	return Array(akhir - awal + 1).fill().map((_, idx) => awal + idx);
		}



		var barisny = range(1, 900); // array sampe 900 (untuk baris jawaban list)
		var index = -1;
		var counter = $(this).index();
		var max = $(barisny).length;

		var indexsoal = 0;

		var columnsoalcheckpoint = Array.from({length:31}, (v, i) => i * 30 + 1); //mulai dari 0, untuk index naekin 1


		$('#nextbutton').click(function(){
			$('.soaltest').attr('hidden','true');
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

			if (index < columnsoalcheckpoint[1]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke1').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[2]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke2').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[3]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke3').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[4]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke4').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[5]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke5').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[6]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke6').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[7]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke7').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[8]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke8').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[9]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke9').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[10]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke10').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[11]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke11').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[12]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke12').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[13]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke13').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[14]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke14').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[15]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke15').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[16]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke16').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[17]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke17').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[18]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke18').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[19]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke19').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[20]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke20').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[21]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke21').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[22]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke22').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[23]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke23').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[24]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke24').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[25]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke25').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[26]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke26').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[27]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke27').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[28]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke28').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[29]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke29').removeAttr('hidden');
			} else {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke30').removeAttr('hidden');
			}
		})

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
			
			if (index < columnsoalcheckpoint[1]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke1').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[2]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke2').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[3]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke3').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[4]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke4').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[5]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke5').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[6]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke6').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[7]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke7').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[8]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke8').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[9]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke9').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[10]) {
				$('#jenissoalnya').text('Soal Angka');
				$('.soalke10').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[11]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke11').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[12]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke12').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[13]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke13').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[14]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke14').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[15]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke15').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[16]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke16').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[17]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke17').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[18]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke18').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[19]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke19').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[20]) {
				$('#jenissoalnya').text('Soal Huruf');
				$('.soalke20').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[21]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke21').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[22]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke22').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[23]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke23').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[24]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke24').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[25]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke25').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[26]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke26').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[27]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke27').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[28]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke28').removeAttr('hidden');
			} else if (index < columnsoalcheckpoint[29]) {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke29').removeAttr('hidden');
			} else {
				$('#jenissoalnya').text('Soal Simbol');
				$('.soalke30').removeAttr('hidden');
			}

		})	
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