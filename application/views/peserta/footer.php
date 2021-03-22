	</div>
	<div class="footer">
		<p style="font-size: 10px; text-align: center;">© <span class="uwu">create with <3</span> | Dev-Mode, Version: 0.0.1 (Latest Beta-Build.R2 - 13/03/2021 ) see <a href="update_history.txt">this log</a> for update history </p>
	</div>

<script type="text/javascript">
	
	function range(awal, akhir) {
	  	return Array(akhir - awal + 1).fill().map((_, idx) => awal + idx);
	}

	function detectClassRunningOut() {
		if ($('#countdownkolom').hasClass('runningout')) {
			$('#countdownkolom').removeClass('runningout');
		}
	}

	var barisny = range(1, 900); // array sampe 900 (untuk baris jawaban list)
	var index = -1; //baris
	var counter = $(this).index();
	var max = $(barisny).length;

	var indexsoal = 0;
	var status = '';
	var jenissoal = '';
	var soalke = '1';

	var interval;

	var barisjawabancheckpoint = Array.from({length:31}, (v, i) => i * 30 + 1); //mulai dari 0, untuk index naekin 1

	var columnsoalcheckpoint = Array.from({length:31}, (v, i) => i * 30); //mulai dari 0, untuk index naekin 1
	$(document).ready(function(){
		
		$('#startbuttontest').click(function(){
			$('.soaltest').attr('hidden','true');
			$('.barisss').attr('hidden','true');
			if(jenissoal == 'S1JL') {
				$('#jenissoalnya').text('Soal Huruf - Kolom 1');
				$('.soalke11').removeAttr('hidden');
				$('#countdownkolom').css('display','unset');
			} else if (jenissoal == 'S2JL') {
				$('#jenissoalnya').text('Soal Simbol - Kolom 1');
				$('.soalke21').removeAttr('hidden');
				$('#countdownkolom').css('display','unset');
			} else {
				$('#jenissoalnya').text('Soal Angka - Kolom 1');
				$('.soalke1').removeAttr('hidden');
				$('#countdownkolom').css('display','unset');
			}
			$('.tabelsoal').removeAttr('hidden');
			$('.brieftext').css('display','none');
			index++;
			$(this).css('display','none');
			$('.barisnya' + barisny[index]).removeAttr('hidden');
			$('#judulcard').text('Soal '+barisny[index]);
			$( "#countdownkolom" ).removeClass("break");
			status = 'Mengerjakan';
			runTimer();
		});
	});

	function nextquest(){
		$('.soaltest').attr('hidden','true');
		$('.barisss').attr('hidden','true');
		if (index <= max) {
			if (index == 299 || index == 599 || index === 899){
				status = 'Break';
				console.log('Status: Break');
				console.log(index);
			} else {
				status = 'Mengerjakan';
				console.log('Status: Mengerjakan');
				index++;
				$('.barisnya' + barisny[index]).removeAttr('hidden');
				$('#judulcard').text('Soal ' + barisny[index]);
				console.log(index);	
			}
		} else {
			alert("mentok kekanan");
		}

		if (index < columnsoalcheckpoint[1] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 1');
			$('.soalke1').removeAttr('hidden');
			/*if (index == columnsoalcheckpoint[1]) {
				runTimer();
				console.log('Restarted')
			}*/
			soalke = '1';
		} else if (index < columnsoalcheckpoint[2] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 2');
			$('.soalke2').removeAttr('hidden');
			if (index == columnsoalcheckpoint[1]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '2';
		} else if (index < columnsoalcheckpoint[3] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 3');
			$('.soalke3').removeAttr('hidden');
			if (index == columnsoalcheckpoint[2]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '3';
		} else if (index < columnsoalcheckpoint[4] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 4');
			$('.soalke4').removeAttr('hidden');
			if (index == columnsoalcheckpoint[3]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '4';
		} else if (index < columnsoalcheckpoint[5] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 5');
			$('.soalke5').removeAttr('hidden');
			if (index == columnsoalcheckpoint[4]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '5';
		} else if (index < columnsoalcheckpoint[6] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 6');
			$('.soalke6').removeAttr('hidden');
			if (index == columnsoalcheckpoint[5]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '6';
		} else if (index < columnsoalcheckpoint[7] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 7');
			$('.soalke7').removeAttr('hidden');
			if (index == columnsoalcheckpoint[6]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '7';
		} else if (index < columnsoalcheckpoint[8] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 8');
			$('.soalke8').removeAttr('hidden');
			if (index == columnsoalcheckpoint[7]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '8';
		} else if (index < columnsoalcheckpoint[9] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 9');
			$('.soalke9').removeAttr('hidden');
			if (index == columnsoalcheckpoint[8]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '9';
		} else if (index < columnsoalcheckpoint[10] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 10');
			$('.soalke10').removeAttr('hidden');
			if (index == columnsoalcheckpoint[9]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '10';
		} else if (index == 299 && status=='Break') {
			jenissoal = 'S1JL';
			clearInterval(interval);
			$('#jenissoalnya').text('Hasil Pengerjaan Soal Angka');
			$('.brieftext').css('display','block');
			$('.brieftext').text('Silahkan klik tombol hitung hasil untuk melihat nilai anda');
			$('.soalke10').attr('hidden','true');
			$('#startbuttontest').css('display','block');
			$('#judulcard').text('Soal Angka Selesai');
			$('.tabelsoal').attr('hidden','true');
			$( "#countdownkolom" ).addClass("break");
			$( "#countdownkolom" ).text("jeda");
			detectClassRunningOut();
		} else if (index < columnsoalcheckpoint[11] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 1');
			$('.soalke11').removeAttr('hidden');
			if (index == columnsoalcheckpoint[10]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			$('#startbuttontest').css('display','none');
			soalke = '11';
		} else if (index < columnsoalcheckpoint[12] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 2');
			$('.soalke12').removeAttr('hidden');
			if (index == columnsoalcheckpoint[11]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '12';
		} else if (index < columnsoalcheckpoint[13] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 3');
			$('.soalke13').removeAttr('hidden');
			if (index == columnsoalcheckpoint[12]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '13';
		} else if (index < columnsoalcheckpoint[14] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 4');
			$('.soalke14').removeAttr('hidden');
			if (index == columnsoalcheckpoint[13]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '14';
		} else if (index < columnsoalcheckpoint[15] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 5');
			$('.soalke15').removeAttr('hidden');
			if (index == columnsoalcheckpoint[14]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '15';
		} else if (index < columnsoalcheckpoint[16] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 6');
			$('.soalke16').removeAttr('hidden');
			if (index == columnsoalcheckpoint[15]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '16';
		} else if (index < columnsoalcheckpoint[17] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 7');
			$('.soalke17').removeAttr('hidden');
			if (index == columnsoalcheckpoint[16]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '17';
		} else if (index < columnsoalcheckpoint[18] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 8');
			$('.soalke18').removeAttr('hidden');
			if (index == columnsoalcheckpoint[17]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '18';
		} else if (index < columnsoalcheckpoint[19] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 9');
			$('.soalke19').removeAttr('hidden');
			if (index == columnsoalcheckpoint[18]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '19';
		} else if (index < columnsoalcheckpoint[20] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 10');
			$('.soalke20').removeAttr('hidden');
			if (index == columnsoalcheckpoint[19]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '20';
		} else if (index == 599 && status=='Break') {
			jenissoal = 'S2JL';
			clearInterval(interval);
			$('#jenissoalnya').text('Hasil Pengerjaan Soal Huruf');
			$('.brieftext').css('display','block');
			$('.brieftext').text('Silahkan klik tombol hitung hasil untuk melihat nilai anda');
			$('.soalke20').attr('hidden','true');
			$('#startbuttontest').css('display','block');
			$('#judulcard').text('Soal Huruf Selesai');
			$('.tabelsoal').attr('hidden','true');
			$( "#countdownkolom" ).addClass("break");
			$( "#countdownkolom" ).text("jeda");
			detectClassRunningOut();
		} else if (index < columnsoalcheckpoint[21] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 1');
			$('.soalke21').removeAttr('hidden');
			if (index == columnsoalcheckpoint[20]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			$('#startbuttontest').css('display','none');
			soalke = '21';
		} else if (index < columnsoalcheckpoint[22] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 2');
			$('.soalke22').removeAttr('hidden');
			if (index == columnsoalcheckpoint[21]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '22';
		} else if (index < columnsoalcheckpoint[23] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 3');
			$('.soalke23').removeAttr('hidden');
			if (index == columnsoalcheckpoint[22]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '23';
		} else if (index < columnsoalcheckpoint[24] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 4');
			$('.soalke24').removeAttr('hidden');
			if (index == columnsoalcheckpoint[23]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '24';
		} else if (index < columnsoalcheckpoint[25] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 5');
			$('.soalke25').removeAttr('hidden');
			if (index == columnsoalcheckpoint[24]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '25';
		} else if (index < columnsoalcheckpoint[26] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 6');
			$('.soalke26').removeAttr('hidden');
			if (index == columnsoalcheckpoint[25]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '26';
		} else if (index < columnsoalcheckpoint[27] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 7');
			$('.soalke27').removeAttr('hidden');
			if (index == columnsoalcheckpoint[26]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '27';
		} else if (index < columnsoalcheckpoint[28] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 8');
			$('.soalke28').removeAttr('hidden');
			if (index == columnsoalcheckpoint[27]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '28';
		} else if (index < columnsoalcheckpoint[29] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 9');
			$('.soalke29').removeAttr('hidden');
			if (index == columnsoalcheckpoint[28]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '29';
		} else if (index < columnsoalcheckpoint[30] && status=='Mengerjakan'){
			$('#jenissoalnya').text('Soal Simbol - Kolom 10');
			$('.soalke30').removeAttr('hidden');
			if (index == columnsoalcheckpoint[29]) {
				runTimer();
				console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '30';
		} else {
			$('#jenissoalnya').text('Hasil Pengerjaan Soal Huruf');
			$('.brieftext').css('display','block');
			$('.brieftext').text('Silahkan klik tombol hitung hasil untuk melihat nilai anda');
			$('.soalke30').attr('hidden','true');
			$('#startbuttontest').css('display','block');
			$('#judulcard').text('Soal Huruf Selesai');
			$('.tabelsoal').attr('hidden','true');
			$( "#countdownkolom" ).addClass("break");
			$( "#countdownkolom" ).text("jeda");
			detectClassRunningOut();
		}

		$('table:nth-child(2) > tbody > tr:nth-child(' + index + ') > td.answered').text($('.selectorbaris' + index + ':checked').val());
		//console.log('table:nth-child(2) > tbody > tr:nth-child(' + index + ') > td.answered? also selector' + index + ':checked');
	}

	function refreshQuest() {
		$('.barisnya' + barisny[index]).removeAttr('hidden');
		$('#judulcard').text('Soal ' + barisny[index]);
	}

	function pindahKolom() {
		$('.soaltest').attr('hidden','true');
		$('.barisss').attr('hidden','true');
		if (soalke == '1') 
		{
			index = columnsoalcheckpoint[1];				
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Angka - Kolom 2');
			$('.soalke2').removeAttr('hidden');
			soalke = '2';
		} else if (soalke == '2') {
			index = columnsoalcheckpoint[2];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Angka - Kolom 3');
			$('.soalke3').removeAttr('hidden');
			soalke = '3';
		} else if (soalke == '3') {
			index = columnsoalcheckpoint[3];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Angka - Kolom 4');
			$('.soalke4').removeAttr('hidden');
			soalke = '4';
		} else if (soalke == '4') {
			index = columnsoalcheckpoint[4];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Angka - Kolom 5');
			$('.soalke5').removeAttr('hidden');
			soalke = '5';
		} else if (soalke == '5') {
			index = columnsoalcheckpoint[5];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Angka - Kolom 6');
			$('.soalke6').removeAttr('hidden');
			soalke = '6';
		} else if (soalke == '6') {
			index = columnsoalcheckpoint[6];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Angka - Kolom 7');
			$('.soalke7').removeAttr('hidden');
			soalke = '7';
		} else if (soalke == '7') {
			index = columnsoalcheckpoint[7];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Angka - Kolom 8');
			$('.soalke8').removeAttr('hidden');
			soalke = '8';
		} else if (soalke == '8') {
			index = columnsoalcheckpoint[8];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Angka - Kolom 9');
			$('.soalke9').removeAttr('hidden');
			soalke = '9';
		} else if (soalke == '9') {
			index = columnsoalcheckpoint[9];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Angka - Kolom 10');
			$('.soalke10').removeAttr('hidden');
			soalke = '10';
		} else if (soalke == '10') {
			jenissoal = 'S1JL';
			$('#jenissoalnya').text('Hasil Pengerjaan Soal Angka');
			$('.brieftext').css('display','block');
			$('.brieftext').text('Silahkan klik tombol hitung hasil untuk melihat nilai anda');
			$('.soalke10').attr('hidden','true');
			$('#startbuttontest').css('display','block');
			$('#judulcard').text('Soal Angka Selesai');
			$('.tabelsoal').attr('hidden','true');
			$( "#countdownkolom" ).addClass("break");
			$( "#countdownkolom" ).text("jeda");
			soalke = '11'
		} else if (soalke == '11') {
			index = columnsoalcheckpoint[11];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Huruf - Kolom 2');
			$('.soalke12').removeAttr('hidden');
			soalke = '12';
		} else if (soalke == '12') {
			index = columnsoalcheckpoint[12];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Huruf - Kolom 3');
			$('.soalke13').removeAttr('hidden');
			soalke = '13';
		} else if (soalke == '13') {
			index = columnsoalcheckpoint[13];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Huruf - Kolom 4');
			$('.soalke14').removeAttr('hidden');
			soalke = '14';
		} else if (soalke == '14') {
			index = columnsoalcheckpoint[14];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Huruf - Kolom 5');
			$('.soalke15').removeAttr('hidden');
			soalke = '15';
		} else if (soalke == '15') {
			index = columnsoalcheckpoint[15];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Huruf - Kolom 6');
			$('.soalke16').removeAttr('hidden');
			soalke = '16';
		} else if (soalke == '16') {
			index = columnsoalcheckpoint[16];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Huruf - Kolom 7');
			$('.soalke17').removeAttr('hidden');
			soalke = '17';
		} else if (soalke == '17') {
			index = columnsoalcheckpoint[17];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Huruf - Kolom 8');
			$('.soalke18').removeAttr('hidden');
			soalke = '18';
		} else if (soalke == '18') {
			index = columnsoalcheckpoint[18];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Huruf - Kolom 9');
			$('.soalke19').removeAttr('hidden');
			soalke = '19';
		} else if (soalke == '19') {
			index = columnsoalcheckpoint[19];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Huruf - Kolom 10');
			$('.soalke20').removeAttr('hidden');
			soalke = '20';
		} else if (index == '20' && status=='Break') {
			jenissoal = 'S2JL';
			$('#jenissoalnya').text('Hasil Pengerjaan Soal Huruf');
			$('.brieftext').css('display','block');
			$('.brieftext').text('Silahkan klik tombol hitung hasil untuk melihat nilai anda');
			$('.soalke20').attr('hidden','true');
			$('#startbuttontest').css('display','block');
			$('#judulcard').text('Soal Huruf Selesai');
			$('.tabelsoal').attr('hidden','true');
			$( "#countdownkolom" ).addClass("break");
			$( "#countdownkolom" ).text("jeda");
			soalke = '21';
		} else if (soalke == '21') {
			index = columnsoalcheckpoint[21];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Simbol - Kolom 2');
			$('.soalke22').removeAttr('hidden');
			soalke = '22';
		} else if (soalke == '22') {
			index = columnsoalcheckpoint[22];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Simbol - Kolom 3');
			$('.soalke23').removeAttr('hidden');
			soalke = '23';
		} else if (soalke == '13') {
			index = columnsoalcheckpoint[23];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Simbol - Kolom 4');
			$('.soalke24').removeAttr('hidden');
			soalke = '24';
		} else if (soalke == '14') {
			index = columnsoalcheckpoint[24];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Simbol - Kolom 5');
			$('.soalke25').removeAttr('hidden');
			soalke = '25';
		} else if (soalke == '25') {
			index = columnsoalcheckpoint[25];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Simbol - Kolom 6');
			$('.soalke26').removeAttr('hidden');
			soalke = '26';
		} else if (soalke == '26') {
			index = columnsoalcheckpoint[26];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Simbol - Kolom 7');
			$('.soalke27').removeAttr('hidden');
			soalke = '27';
		} else if (soalke == '27') {
			index = columnsoalcheckpoint[27];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Simbol - Kolom 8');
			$('.soalke28').removeAttr('hidden');
			soalke = '28';
		} else if (soalke == '28') {
			index = columnsoalcheckpoint[28];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Simbol - Kolom 9');
			$('.soalke29').removeAttr('hidden');
			soalke = '29';
		} else if (soalke == '29') {
			index = columnsoalcheckpoint[29];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Simbol - Kolom 10');
			$('.soalke30').removeAttr('hidden');
			soalke = '30';
		} else {
			$('#jenissoalnya').text('Hasil Pengerjaan Soal Huruf');
			$('.brieftext').css('display','block');
			$('.brieftext').text('Silahkan klik tombol hitung hasil untuk melihat nilai anda');
			$('.soalke30').attr('hidden','true');
			$('#startbuttontest').css('display','block');
			$('#judulcard').text('Soal Huruf Selesai');
			$('.tabelsoal').attr('hidden','true');
			$( "#countdownkolom" ).addClass("break");
			$( "#countdownkolom" ).text("jeda");
		}
		
	}

	
	function runTimer() {
		clearInterval(interval);
		var timernya = "1:00";
		interval = setInterval(function() {
			var timer = timernya.split(':');
			//by parsing integer, I avoid all extra string processing
			var minutes = parseInt(timer[0], 10);
			var seconds = parseInt(timer[1], 10);
			--seconds;
			minutes = (seconds < 0) ? --minutes : minutes;
			seconds = (seconds < 0) ? 59 : seconds;
			seconds = (seconds < 10) ? '0' + seconds : seconds;
			//minutes = (minutes < 10) ?  minutes : minutes;
			$('#countdownkolom').html(minutes + ':' + seconds);
			if (minutes < 0) {
				clearInterval(interval);
			}

			if (seconds < 10) {
				$( "#countdownkolom" ).addClass( "runningout" );
			}
			//check if both minutes and seconds are 0
			if ((seconds <= 0) && (minutes <= 0)){
				if (status == 'Break') {
					clearInterval(interval);	
				} else {
					$('#countdownkolom').removeClass('runningout');
					console.log('Clearing running out');
					clearInterval(interval);
					pindahKolom();
				}
			};
			timernya = minutes + ':' + seconds;
		}, 1000);
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