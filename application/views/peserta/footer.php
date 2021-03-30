	</div>
	<div class="footer">
		<p style="font-size: 10px; text-align: center;">© PT. Evdigi Indonesia | Contact US 0838-7473-1480</p>
	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
<script type="text/javascript">
	
	function range(awal, akhir) {
	  	return Array(akhir - awal + 1).fill().map((_, idx) => awal + idx);
	}

	function detectClassRunningOut() {
		if ($('#countdownkolom').hasClass('runningout')) {
			$('#countdownkolom').removeClass('runningout');
		}
	}

	$("#logoutlink").click(function(e){
		e.preventDefault(); // <--- prevent form from submitting
		Swal.fire({
		  title: 'Yakin ingin Logout?',
		  text: "Anda dapat mengulang test ini nanti dan mulai dari awal.",
		  type: "question",
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Ya'
		}).then((result) => {
		  if (result.value) {
		  	Swal.fire('Logout Sukses','Test diakhiri','success').then(function() {
	          window.location.href = "<?php echo base_url().'Verification/logoutkeun' ?>";// <--- submit for prmogrammatically
	        });
		    
		  }
		})
	});


	var barisny = range(1, 900); // array sampe 900 (untuk baris jawaban list)
	var index = -1; //baris
	var max = $(barisny).length;

	var status = 'Mengerjakan';
	var jenissoal = 'S0JL'; //INITIALIZE JENIS SOAL ANGKA
	var soalke = '1';

	var interval;

	
	var S1JLSalah = 0;
	var S1JLBenar = 0;
	var nilaiS1JL = 0;
	var S2JLSalah = 0;
	var S2JLBenar = 0;
	var nilaiS2JL = 0;

	var columnsoalcheckpoint = Array.from({length:31}, (v, i) => i * 30); //mulai dari 0, untuk index naekin 1
	$(document).ready(function(){
		
		$('#startbuttontest').click(function(){
			$('.soaltest').attr('hidden','true');
			$('.barisss').attr('hidden','true');
			$('.barispilihan').attr('hidden','true');

			if(jenissoal == 'S1JL') {
				$('#jenissoalnya').text('Soal Huruf - Kolom 1');
				$('.soalke11').removeAttr('hidden');
				$('.listsoalke301').removeAttr('hidden');
				$('#countdownkolom').css('display','unset');
				$(document).attr("title", "Soal Huruf");
			} else if (jenissoal == 'S2JL') {
				$('#jenissoalnya').text('Soal Simbol - Kolom 1');
				$('.soalke21').removeAttr('hidden');
				$('.listsoalke601').removeAttr('hidden');
				$('#countdownkolom').css('display','unset');
				$(document).attr("title", "Soal Simbol");
			} else {
				var tbiduser = $('#tbiduser').val();
            	var tbusername = $('#tbusername').val();
            	$(document).attr("title", "Soal Angka");
            	var tbstatus = 'SM'; //seddang mengerjakkan
				$('#jenissoalnya').text('Soal Angka - Kolom 1');
				$('.soalke1').removeAttr('hidden');
				$('.listsoalke1').removeAttr('hidden');
				$('.gambarpetunjuk').css('display','none');
				$('#countdownkolom').css('display','unset');
	            $.ajax({
	                type : "POST",
	                url  : "<?php echo site_url('/peserta/Peserta_Controller/update_status')?>",
	                dataType : "JSON",
	                data : {tbiduser:tbiduser,tbusername:tbusername,tbstatus:tbstatus},
	                success: function(data){
	                	
	                }
	            });
			}
			index++;
			$('.tabelsoal').removeAttr('hidden');
			$('.brieftext').css('display','none');
			$(this).css('display','none');
			$('.barisnya' + barisny[index]).removeAttr('hidden');
			$('#judulcard').text('Soal '+barisny[index]);
			$( "#countdownkolom" ).removeClass("break");
			status = 'Mengerjakan';
			runTimer();
			$('#scoreresultLeft').css('display','none');
			$('#scoreresultRight').css('display','none');
		});

		$('#menjelangendbutton').click(function(){
			forceHide();
			$('#loader').css('display','none');
			var tbnilai1 = $('#tbnilaiS0JL').val();
            var tbnilai2 = $('#tbnilaiS1JL').val();
            var tbnilai3 = $('#tbnilaiS2JL').val();
            var tbiduser = $('#tbiduser').val();
            var tbusername = $('#tbusername').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('/peserta/Peserta_Controller/simpan_nilai')?>",
                dataType : "JSON",
                data : {tbnilai1:tbnilai1 , tbnilai2:tbnilai2, tbnilai3:tbnilai3, tbiduser:tbiduser,tbusername:tbusername},
                success: function(data){
                }
            });
            var tbstatus = 'DONE'; //Selesai Mengerjaaakan
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('/peserta/Peserta_Controller/update_status')?>",
                dataType : "JSON",
                data : {tbiduser:tbiduser,tbusername:tbusername,tbstatus:tbstatus},
                success: function(data){
                }
            });
            $(document).attr("title", "Test Selesai");
            $('#scoreresultLeft').css('display','none');
			$('#scoreresultRight').css('display','none');
            $('#judulcard').text('Test Telah Selesai');
			$('#jenissoalnya').text('Anda bisa logout sekarang');
			$('.brieftext').css('display','block');
			$('.brieftext').text('Anda Bisa Logout sekarang dengan mengklik ikon di pojok kanan atas.');
			$(this).css('display','none');

		});
	});

	function nextquest(){
		$('.soaltest').attr('hidden','true');
		$('.barisss').attr('hidden','true');
		$('.barispilihan').attr('hidden','true');
		if (index <= max) {
			if (index == 299 || index == 599 || index == 899){
				status = 'Break';
				//console.log('Status: Break');
				//console.log(index);
			} else {
				status = 'Mengerjakan';
				index++;
				$('.barisnya' + barisny[index]).removeAttr('hidden');
				$('.listsoalke' + barisny[index]).removeAttr('hidden');
				$('#judulcard').text('Soal ' + barisny[index]);
				//console.log(index + '(Telah Dikerjakan)');	

			}
		} else {
			alert("mentok kekanan");
		}

		if (index < columnsoalcheckpoint[1] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 1');
			$('.soalke1').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[1]) {
				runTimer();
				//console.log('Restarted')
				detectClassRunningOut();
			}
			soalke = '1';
		} else if (index < columnsoalcheckpoint[2] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 2');
			$('.soalke2').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[1]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '2';
		} else if (index < columnsoalcheckpoint[3] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 3');
			$('.soalke3').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[2]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '3';
		} else if (index < columnsoalcheckpoint[4] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 4');
			$('.soalke4').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[3]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '4';
		} else if (index < columnsoalcheckpoint[5] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 5');
			$('.soalke5').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[4]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '5';
		} else if (index < columnsoalcheckpoint[6] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 6');
			$('.soalke6').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[5]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '6';
		} else if (index < columnsoalcheckpoint[7] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 7');
			$('.soalke7').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[6]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '7';
		} else if (index < columnsoalcheckpoint[8] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 8');
			$('.soalke8').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[7]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '8';
		} else if (index < columnsoalcheckpoint[9] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 9');
			$('.soalke9').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[8]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '9';
		} else if (index < columnsoalcheckpoint[10] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Angka - Kolom 10');
			$('.soalke10').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[9]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '10';
		} else if (index == 299 && status=='Break') {
			jenissoal = 'S1JL';
			$('#loader').css('display','block');
			$('#judulcard').text('Mengumpulkan Hasil');
			$('#jenissoalnya').text('Mohon Menunggu');
			$('.tabelsoal').attr('hidden','true');
			clearInterval(interval);
			setTimeout(function(){
				$('#loader').css('display','none');
				$('#jenissoalnya').text('Hasil Pengerjaan Soal Angka');
				$('.brieftext').css('display','block');
				$('.brieftext').text('Berikut adalah hasil pengerjaan');
				$('.soalke10').attr('hidden','true');
				
				$('#startbuttontest').css('display','block');
				$('#judulcard').text('Soal Angka Selesai');
				$('.tabelsoal').attr('hidden','true');
				$( "#countdownkolom" ).addClass("break");
				$( "#countdownkolom" ).text("jeda");
				
				//saat tepat sekali user ngisi soal pas waktu dah deket, pastikan soal selanjutnya ga keliatan [kode ini hanya sesaat, soon it will be implemented (for debugging purpose)]
				forceHide();

				fetchNilai('S0JL');
				detectClassRunningOut();
				clearInterval(interval);
				},3000);

		} else if (index < columnsoalcheckpoint[11] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 1');
			$('.soalke11').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[10]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '11';
		} else if (index < columnsoalcheckpoint[12] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 2');
			$('.soalke12').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[11]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '12';
		} else if (index < columnsoalcheckpoint[13] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 3');
			$('.soalke13').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[12]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '13';
		} else if (index < columnsoalcheckpoint[14] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 4');
			$('.soalke14').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[13]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '14';
		} else if (index < columnsoalcheckpoint[15] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 5');
			$('.soalke15').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[14]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '15';
		} else if (index < columnsoalcheckpoint[16] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 6');
			$('.soalke16').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[15]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '16';
		} else if (index < columnsoalcheckpoint[17] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 7');
			$('.soalke17').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[16]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '17';
		} else if (index < columnsoalcheckpoint[18] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 8');
			$('.soalke18').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[17]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '18';
		} else if (index < columnsoalcheckpoint[19] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 9');
			$('.soalke19').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[18]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '19';
		} else if (index < columnsoalcheckpoint[20] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Huruf - Kolom 10');
			$('.soalke20').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[19]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '20';
		} else if (index == 599 && status=='Break') {
			jenissoal = 'S2JL';
			$('#loader').css('display','block');
			$('#judulcard').text('Mengumpulkan Hasil');
			$('#jenissoalnya').text('Mohon Menunggu');
			$('.tabelsoal').attr('hidden','true');
			clearInterval(interval);
			setTimeout(function(){
				$('#loader').css('display','none');
				$('#jenissoalnya').text('Hasil Pengerjaan Soal Huruf');
				$('.brieftext').css('display','block');
				$('.brieftext').text('Berikut adalah hasil pengerjaan');
				$('.soalke20').attr('hidden','true');
				$('#startbuttontest').css('display','block');
				$('#judulcard').text('Soal Huruf Selesai');
				$('.tabelsoal').attr('hidden','true');
				$( "#countdownkolom" ).addClass("break");
				$( "#countdownkolom" ).text("jeda");

				//saat tepat sekali user ngisi soal pas waktu dah deket, pastikan soal selanjutnya ga keliatan [kode ini hanya sesaat, soon it will be implemented (for debugging purpose)]
				forceHide();

				fetchNilai('S1JL');
				detectClassRunningOut();
				clearInterval(interval);
				},3000);
		} else if (index < columnsoalcheckpoint[21] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 1');
			$('.soalke21').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[20]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			$('#startbuttontest').css('display','none');
			soalke = '21';
		} else if (index < columnsoalcheckpoint[22] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 2');
			$('.soalke22').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[21]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '22';
		} else if (index < columnsoalcheckpoint[23] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 3');
			$('.soalke23').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[22]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '23';
		} else if (index < columnsoalcheckpoint[24] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 4');
			$('.soalke24').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[23]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '24';
		} else if (index < columnsoalcheckpoint[25] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 5');
			$('.soalke25').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[24]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '25';
		} else if (index < columnsoalcheckpoint[26] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 6');
			$('.soalke26').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[25]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '26';
		} else if (index < columnsoalcheckpoint[27] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 7');
			$('.soalke27').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[26]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '27';
		} else if (index < columnsoalcheckpoint[28] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 8');
			$('.soalke28').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[27]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '28';
		} else if (index < columnsoalcheckpoint[29] && status=='Mengerjakan') {
			$('#jenissoalnya').text('Soal Simbol - Kolom 9');
			$('.soalke29').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[28]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '29';
		} else if (index < columnsoalcheckpoint[30] && status=='Mengerjakan'){
			$('#jenissoalnya').text('Soal Simbol - Kolom 10');
			$('.soalke30').removeAttr('hidden');
			
			if (index == columnsoalcheckpoint[29]) {
				runTimer();
				//console.log('Restarted');
				detectClassRunningOut();
			}
			soalke = '30';
		} else {
			$('#loader').css('display','block');
			$('#judulcard').text('Mengumpulkan Hasil');
			$('#jenissoalnya').text('Mohon Menunggu');
			$('.tabelsoal').attr('hidden','true');
			clearInterval(interval);
			setTimeout(function(){
				$('#loader').css('display','none');
				$('#jenissoalnya').text('Hasil Pengerjaan Soal Simbol');
				$('.brieftext').css('display','block');
				$('.brieftext').text('Berikut adalah hasil pengerjaan');
				$('.soalke30').attr('hidden','true');
				$('#menjelangendbutton').css('display','block');
				$('#judulcard').text('Soal Simbol Selesai');
				$('.tabelsoal').attr('hidden','true');
				$( "#countdownkolom" ).addClass("break");
				$( "#countdownkolom" ).text("jeda");

				//saat tepat sekali user ngisi soal pas waktu dah deket, pastikan soal selanjutnya ga keliatan [kode ini hanya sesaat, soon it will be implemented (for debugging purpose)]
				forceHide();

				fetchNilai('S2JL');
				detectClassRunningOut();
				clearInterval(interval);
				},3000);
		}

		//put the selected radio to table
		$('table.tablebarisjawabandandijawab > tbody > tr:nth-child(' + index + ') > td.answered').text($('.selectorbaris' + index + ':checked').val());
		////console.log('table.tablebarisjawabandandijawab > tbody > tr:nth-child(' + index + ') > td.answered? also selector' + index + ':checked')
	

		//console.log(index + ' Selesai');
		//console.warn('Soal ke :' + soalke);
		//console.warn('Jenis Soal :' + jenissoal);
	}

	function refreshQuest() {
		$('.barisnya' + barisny[index]).removeAttr('hidden');
		$('.listsoalke' + barisny[index]).removeAttr('hidden');
		$('#judulcard').text('Soal ' + barisny[index]);
	}

	function pindahKolom() {
		$('.soaltest').attr('hidden','true');
		$('.barisss').attr('hidden','true');
		$('.barispilihan').attr('hidden','true');
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
			index = columnsoalcheckpoint[10];
			jenissoal = 'S1JL';
			$('#loader').css('display','block');
			$('#judulcard').text('Mengumpulkan Hasil');
			$('#jenissoalnya').text('Mohon Menunggu');
			$('.tabelsoal').attr('hidden','true');
			clearInterval(interval);
			setTimeout(function(){
				$('#loader').css('display','none');
				$('#jenissoalnya').text('Hasil Pengerjaan Soal Angka');
				$('.brieftext').css('display','block');
				$('.brieftext').text('Berikut adalah hasil pengerjaan');
				
				$('.soalke10').attr('hidden','true');
				$('#startbuttontest').css('display','block');
				$('#judulcard').text('Soal Angka Selesai');
				$('.tabelsoal').attr('hidden','true');
				$( "#countdownkolom" ).addClass("break");
				$( "#countdownkolom" ).text("jeda");

				//saat tepat sekali user ngisi soal pas waktu dah deket, pastikan soal selanjutnya ga keliatan [kode ini hanya sesaat, soon it will be implemented (for debugging purpose)]
				forceHide();

				fetchNilai('S0JL');
				detectClassRunningOut();
				clearInterval(interval);
				},3000);
			soalke = '11';
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
		} else if (soalke == '20') {
			index = columnsoalcheckpoint[20];
			jenissoal = 'S2JL';
			$('#loader').css('display','block');
			$('#judulcard').text('Mengumpulkan Hasil');
			$('#jenissoalnya').text('Mohon Menunggu');
			$('.tabelsoal').attr('hidden','true');
			clearInterval(interval);
			setTimeout(function(){
				$('#loader').css('display','none');
				$('#jenissoalnya').text('Hasil Pengerjaan Soal Huruf');
				$('.brieftext').css('display','block');
				$('.brieftext').text('Berikut adalah hasil pengerjaan');
				$('.soalke20').attr('hidden','true');
				$('#startbuttontest').css('display','block');
				$('#judulcard').text('Soal Huruf Selesai');
				$('.tabelsoal').attr('hidden','true');
				$( "#countdownkolom" ).addClass("break");
				$( "#countdownkolom" ).text("jeda");

				//saat tepat sekali user ngisi soal pas waktu dah deket, pastikan soal selanjutnya ga keliatan [kode ini hanya sesaat, soon it will be implemented (for debugging purpose)]
				forceHide();

				fetchNilai('S1JL');
				detectClassRunningOut();
				clearInterval(interval);
				},3000);
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
		} else if (soalke == '23') {
			index = columnsoalcheckpoint[23];
			runTimer();
			refreshQuest();
			$('#jenissoalnya').text('Soal Simbol - Kolom 4');
			
			$('.soalke24').removeAttr('hidden');
			soalke = '24';
		} else if (soalke == '24') {
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
		} else if (soalke == '30') {
			index = columnsoalcheckpoint[30];
			$('#loader').css('display','block');
			$('#judulcard').text('Mengumpulkan Hasil');
			$('#jenissoalnya').text('Mohon Menunggu');
			$('.tabelsoal').attr('hidden','true');
			clearInterval(interval);
			setTimeout(function(){
				$('#loader').css('display','none');
				$('#jenissoalnya').text('Hasil Pengerjaan Soal Simbol');
				$('.brieftext').css('display','block');
				$('.brieftext').text('Berikut adalah hasil pengerjaan');
				$('.soalke30').attr('hidden','true');
				$('#menjelangendbutton').css('display','block');
				$('#judulcard').text('Soal Huruf Selesai');
				$('.tabelsoal').attr('hidden','true');
				$( "#countdownkolom" ).addClass("break");
				$( "#countdownkolom" ).text("jeda");

				//saat tepat sekali user ngisi soal pas waktu dah deket, pastikan soal selanjutnya ga keliatan [kode ini hanya sesaat, soon it will be implemented (for debugging purpose)]
				forceHide();

				fetchNilai('S2JL');
				detectClassRunningOut();
				clearInterval(interval);
				},3000);
		} else {
			//console.log('something wrong?');
		}
		//console.log('Index :' + index);
		//console.warn('Soal ke :' + soalke);
		//console.warn('Jenis Soal :' + jenissoal);
	}

	
	function runTimer() {
		clearInterval(interval);
		var timernya = "1:01";
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

			if ((minutes <= 0) && (seconds <= 10)) {
				$( "#countdownkolom" ).addClass( "runningout" );
			}
			//check if both minutes and seconds are 0
			if ((seconds <= 0) && (minutes <= 0)){
				if (status == 'Break') {
					clearInterval(interval);	
				} else {
					$('#countdownkolom').removeClass('runningout');
					//console.log('Clearing running out');
					clearInterval(interval);
					pindahKolom();
				}
			};
			timernya = minutes + ':' + seconds;
		}, 1000);
	}

	function forceHide() {
		$('.soaltest').attr('hidden','true');
		$('.barisss').attr('hidden','true');
	}

	function fetchNilai(jsnya) {
		var js = jsnya;

		if (js == 'S0JL') {
			var datasoal0 = Array();
			var datajawaban0 = Array();
			var gadijawab0 = 0;
			var salah0 = 0;
			var benar0 = 0;
			var nilai0 = 0;
			
			//collect data jawaban fro kolom 2
			$('table.tablebarisjawabandandijawab > tbody > tr').slice(0,300).each(function(o){
			    tds0 = $(this).find('td');
  				datajawaban0[o] = $(tds0[0]).text();
			});

			//collect data soal
			$("table.soalny > tbody > tr.barisss").slice(0,300).each(function(i, v){
			  datasoal0[i] = Array();
			  $(this).children('td').each(function(ii, vv){
			    datasoal0[i][ii] = $(this).text();
			  }); 
			});
			//console.log('soalnya : ' + datasoal);
			//console.log('jawaban : ' + datajawaban);

		    var x = 0;
		    //buat perulangan
		    for (var i = 0; i < datasoal0.length; i++) {
		    	var datajawab = datajawaban0[i];
		    	if (datasoal0[i] == datajawab) {
		    		salah++;
		    	}
		    }
			do {
				//make sure the jawaban we got ada pada salah satu index array yang mana berisi 4 value (im make it comparison or 'make sure it was included')
				if(datajawaban0[x]){ //pastikan value ada
			        if(datasoal0[x].includes(datajawaban0[x])){
								salah0++;
							} else {
			                    benar0++;
			                    nilai0+= 0.3334; //saat mendapat point
			                }
			        } else {
			        gadijawab0++;
			    }
			    x++;
			}
			while(x < 300);
			//console.log('Benar : ' + benar);
			//console.log('Salah : ' + salah);

			$('#JBenar').text('' + benar0 + '');
			$('#JSalah').text('' + salah0 + '');
			$('#JTidakDijawab').text('' + gadijawab0 + '');
			$('#Nilainya').text('' + parseFloat(nilai0).toFixed(2) + '');
			$('#tbnilaiS0JL').val(parseFloat(nilai0).toFixed(2));


			$('#scoreresultLeft').css('display','unset');
			$('#scoreresultRight').css('display','unset');

		} else if(js == 'S1JL') {
			var datasoal1 = Array();
			var datajawaban1 = Array();
			var gadijawab1 = 0;
			var salah1 = 0;
			var benar1 = 0;
			var nilai1 = 0;
			
			//collect data jawaban fro kolom 2
			$('table.tablebarisjawabandandijawab > tbody > tr').slice(300,600).each(function(o){
			    tds1 = $(this).find('td');
  				datajawaban1[o] = $(tds1[0]).text();
			});

			//collect data soal
			$("table.soalny > tbody > tr.barisss").slice(300,600).each(function(i, v){
			  datasoal1[i] = Array();
			  $(this).children('td').each(function(ii, vv){
			    datasoal1[i][ii] = $(this).text();
			  }); 
			});
			console.log(datajawaban1);
			console.log(datasoal1);
			var x = 0;
			do {
			    if(datajawaban1[x]){
			        if(datasoal1[x].includes(datajawaban1[x])){
								salah1++;
							} else {
			                    benar1++;
			                    nilai1+= 0.3334; //saat mendapat point
			                }
			        } else {
			        gadijawab1++;
			    }
			    x++;
			}
			while(x < 300);

			console.log('Benar : ' + benar1);
			console.log('Salah : ' + salah1);
			console.log('Gadijawab : ' + gadijawab1);
			$('#JBenar').text('' + benar1 + '');
			$('#JSalah').text('' + salah1 + '');
			$('#JTidakDijawab').text('' + gadijawab1 + '');
			$('#Nilainya').text('' + parseFloat(nilai1).toFixed(2) + '');
			$('#tbnilaiS1JL').val(parseFloat(nilai1).toFixed(2));


			$('#scoreresultLeft').css('display','unset');
			$('#scoreresultRight').css('display','unset');

		} else if(js == 'S2JL') {
			var datasoal2 = Array();
			var datajawaban2 = Array();
			var gadijawab2 = 0 + 1;
			var salah2 = 0;
			var benar2 = 0;
			var nilai2 = 0;
			
			//collect data jawaban fro kolom 2
			$('table.tablebarisjawabandandijawab > tbody > tr').slice(600,900).each(function(o){
			    tds2 = $(this).find('td');
  				datajawaban2[o] = $(tds2[0]).text();
			});

			//collect data soal
			$("table.soalny > tbody > tr.barisss").slice(600,900).each(function(i, v){
			  datasoal2[i] = Array();
			  $(this).children('td').each(function(ii, vv){
			    datasoal2[i][ii] = $(this).text();
			  }); 
			});
			//console.log('soalnya : ' + datasoal);
			//console.log('jawaban : ' + datajawaban);

		    var x = 0;
			do {
				if(datajawaban2[x]){
			        if(datasoal2[x].includes(datajawaban2[x])){
								salah2++;
							} else {
			                    benar2++;
			                    nilai2+= 0.3334; //saat mendapat point
			                }
			        } else {
			        gadijawab2++;
			    }
			    x++;
			}
			while(x < 300);
			//console.log('Benar : ' + benar);
			//console.log('Salah : ' + salah);

			$('#JBenar').text('' + benar2 + '');
			$('#JSalah').text('' + salah2 + '');
			$('#JTidakDijawab').text('' + gadijawab2 + '');
			$('#Nilainya').text('' + parseFloat(nilai2).toFixed(2) + '');
			$('#tbnilaiS2JL').val(parseFloat(nilai2).toFixed(2));


			$('#scoreresultLeft').css('display','unset');
			$('#scoreresultRight').css('display','unset');
		}
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