	</div>
	<div class="footer">
		<p style="font-size: 10px; text-align: center;">© <span class="uwu">create with <3</span> | Dev-Mode, Version: 0.0.1 (Latest Beta-Build.R2 - 13/03/2021 ) see <a href="update_history.txt">this log</a> for update history </p>
	</div>

<script type="text/javascript">
	
	function range(awal, akhir) {
	  	return Array(akhir - awal + 1).fill().map((_, idx) => awal + idx);
	}

	var barisny = range(1, 900); // array sampe 900 (untuk baris jawaban list)
	var index = -1;
	var counter = $(this).index();
	var max = $(barisny).length;

	var indexsoal = 0;
	var status = '';
	var jenissoal = '';

	var columnsoalcheckpoint = Array.from({length:31}, (v, i) => i * 30); //mulai dari 0, untuk index naekin 1
	$(document).ready(function(){
		
		$('#startbuttontest').click(function(){
			$('.soaltest').attr('hidden','true');
			$('.barisss').attr('hidden','true');
			if(jenissoal == 'S1JL') {
				$('#jenissoalnya').text('Soal Huruf - Kolom 1');
			} else if (jenissoal == 'S2JL') {
				$('#jenissoalnya').text('Soal Simbol - Kolom 1');
			} else {
				$('#jenissoalnya').text('Soal Angka - Kolom 1');
			}
			$('.tabelsoal').removeAttr('hidden');
			$('.brieftext').css('display','none');
			index++;
			$(this).css('display','none');
			$('.barisnya' + barisny[index]).removeAttr('hidden');
			$('#judulcard').text('Soal '+barisny[index]);
			if (index == 300) {
				$('.soalke301').removeAttr('hidden');
			} else if (index == 601) {
				$('.soalke601').removeAttr('hidden');
			} else {
				$('.soalke1').removeAttr('hidden');
			}
			status = 'Mengerjakan'
		});
	});

	function nextquest(){
		$('.soaltest').attr('hidden','true');
		$('.barisss').attr('hidden','true');
		if (index <= max) {
			if (index == 300 || index == 600 || index === 900){
				status = 'Break';
			} else {
				status = 'Mengerjakan';
				index++;
				$('.barisnya' + barisny[index]).removeAttr('hidden');
				$('#judulcard').text('Soal ' + barisny[index]);
				console.log(index);	
			}
		} else {
			alert("mentok kekanan");
			$('.barisnya' + barisny[index]).removeAttr('hidden');
			$('#judulcard').text('Soal ' + barisny[index]);
			console.log(index);block		}

		if (index < columnsoalcheckpoint[1] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 1');
			$('.soalke1').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[2] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 2');
			$('.soalke2').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[3] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 3');
			$('.soalke3').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[4] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 4');
			$('.soalke4').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[5] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 5');
			$('.soalke5').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[6] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 6');
			$('.soalke6').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[7] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 7');
			$('.soalke7').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[8] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 8');
			$('.soalke8').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[9] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 9');
			$('.soalke9').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[10] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 10');
			$('.soalke10').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[11] && status=='Break') {
			$('#jenissoalnya').text('Hasil - Soal Angka');
			$('.soalke10').attr('hidden','true');
			$('#startbuttontest').css('display','block');
		} else if (index < columnsoalcheckpoint[11] && status=='Mengerjakan') {
			jenissoal = 'S1JL';
			$('#jenissoalnya').text('Soal Huruf - Kolom 1');
			$('.soalke11').removeAttr('hidden');
			$('#startbuttontest').css('display','block');
		} else if (index < columnsoalcheckpoint[12] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 2');
			$('.soalke12').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[13] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 3');
			$('.soalke13').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[14] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 4');
			$('.soalke14').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[15] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 5');
			$('.soalke15').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[16] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 6');
			$('.soalke16').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[17] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 7');
			$('.soalke17').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[18] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 8');
			$('.soalke18').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[19] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 9');
			$('.soalke19').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[20] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 10');
			$('.soalke20').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[21] && status=='Break') {
			jenissoal = 'S2JL';
			$('#jenissoalnya').text('Soal Simbol - Kolom 1');
			$('.soalke21').removeAttr('hidden');
			$('#startbuttontest').css('display','block');
		} else if (index < columnsoalcheckpoint[21] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 1');
			$('.soalke21').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[22] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 2');
			$('.soalke22').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[23] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 3');
			$('.soalke23').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[24] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 4');
			$('.soalke24').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[25] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 5');
			$('.soalke25').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[26] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 6');
			$('.soalke26').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[27] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 7');
			$('.soalke27').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[28] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 8');
			$('.soalke28').removeAttr('hidden');
		} else if (index < columnsoalcheckpoint[29] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 9');
			$('.soalke29').removeAttr('hidden');
		} else {
			$('#jenissoalnya').text('Soal Simbol - Kolom 10');
			$('.soalke30').removeAttr('hidden');
		}

		$('table:nth-child(2) > tbody > tr:nth-child(' + index + ') > td.answered').text($('.selectorbaris' + index + ':checked').val());
		//console.log('table:nth-child(2) > tbody > tr:nth-child(' + index + ') > td.answered? also selector' + index + ':checked');
	}
	    

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