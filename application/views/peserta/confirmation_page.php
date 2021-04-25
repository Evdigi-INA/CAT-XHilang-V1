<div class="container contain-wrapper" style="width: 100%;">
	<div class="container">
		<div class="confirmation-wrapper" style="margin: auto; max-width: 870px;">
			<form role="form" method="POST" action="" method="post" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						<h4 id="judulcard">Konfirmasi Mulai Test</h4><p><span id="jenissoalnya"></span><span class="badge badge-pill badge-success" id="countdownkolom">Mulai</span></p>
					</div>
					<div class="card-body" id="bodycard">
						<div id="loader">
							
						</div>
						<p class="brieftext">
							Sebelum mengerjakan, pastikan peserta memahami cara mengerjakan dengan melihat video dibawah ini dan menunggu penjelasan dari instruktur selesai, jika sudah silahkaan klik <b>Mulai Test</b>.<br>
							<center><span class="gambarpetunjuk"><img class="img-fluid" src="<?php echo base_url('assets/web-images/petunjuk.gif')?>"></span></center>
							<div hidden="true">
							<?php foreach ($qinfo as $v) {
								# code...
							} ?>
								<input type="text" name="tbiduser" id="tbiduser" value="<?php echo $v->id_user ?>">
								<input type="text" name="tbusername" id="tbusername" value="<?php echo $v->username ?>">
								<input type="text" name="tbnilaiS0JL" id="tbnilaiS0JL" value="">
								<input type="text" name="tbnilaiS1JL" id="tbnilaiS1JL" value="">
								<input type="text" name="tbnilaiS2JL" id="tbnilaiS2JL" value="">
								<input type="text" name="tbS0JLcorrect" id="tbS0JLcorrect" value="">
								<input type="text" name="tbS0JLwrong" id="tbS0JLwrong" value="">
								<input type="text" name="tbS0JLanswered" id="tbS0JLanswered" value="">
								<input type="text" name="tbS0JLnotanswered" id="tbS0JLnotanswered" value="">
								<input type="text" name="tbS1JLcorrect" id="tbS1JLcorrect" value="">
								<input type="text" name="tbS1JLwrong" id="tbS1JLwrong" value="">
								<input type="text" name="tbS1JLanswered" id="tbS1JLanswered" value="">
								<input type="text" name="tbS1JLnotanswered" id="tbS1JLnotanswered" value="">
								<input type="text" name="tbS2JLcorrect" id="tbS2JLcorrect" value="">
								<input type="text" name="tbS2JLwrong" id="tbS2JLwrong" value="">
								<input type="text" name="tbS2JLanswered" id="tbS2JLanswered" value="">
								<input type="text" name="tbS2JLnotanswered" id="tbS2JLnotanswered" value="">
								<input type="text" name="tbperformanceS0JL" id="tbperformanceS0JL" value="">
								<input type="text" name="tbperformanceS1JL" id="tbperformanceS1JL" value="">
								<input type="text" name="tbperformanceS2JL" id="tbperformanceS2JL" value="">
							</div>
						</p>
						<div class="container-fluid">
							<div class="row">
								<div id="scoreresultLeft" class="col-md-8" style="display: none;">
									<table>
										<tr>
											<td>Benar</td>
											<td>:</td>
											<td id="JBenar"></td>
										</tr>
										<tr>
											<td>Salah</td>
											<td>:</td>
											<td id="JSalah"></td>
										</tr>
										<tr>
											<td>Tidak Dijawab</td>
											<td>:</td>
											<td id="JTidakDijawab"></td>
										</tr>
									</table>
								</div>
								<div id="scoreresultRight" class="col-md-4" style="display: none;">
									<h4>Skor Anda</h4>
									<h3 id="Nilainya"></h3>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12" id="scorechartgraph" style="display: none;">
									<div class="table-responsive">
										<canvas id="score-chart" style="min-height: 200px !important;" class="table"></canvas>
									</div>
								</div>
							</div>
						</div>
						<?php
						$arrayNumber = range(1, 900);
						$baris = $arrayNumber;
						?>
						<table class="table table-bordered tabelsoal" style="width: 34vh;margin: auto; font-weight: bold;" hidden="true">
							<tr>
								<td>A</td>
								<td>B</td>
								<td>C</td>
								<td>D</td>
								<td>E</td>
							</tr>
							<?php 
								$x = 1;
								foreach ($soalkolom as $sk) {
								$so = explode('-', $sk->soal,1); //its fucking weird, why i need this?
								foreach ($so as $se) {
									$s = explode('-', $se);
							?>
							<tr class="soalke<?php echo $x ?> soaltest" hidden>
								<td><?php echo $s[0]; ?></td>
								<td><?php echo $s[1]; ?></td>
								<td><?php echo $s[2]; ?></td>
								<td><?php echo $s[3]; ?></td>
								<td><?php echo $s[4]; ?></td>
							</tr>
							<?php 	}
								$x++;
							}

							?>
						</table>
						<div class="message-wrapper">
							<div class="soalkolom kolomnya" style="padding-top: 20px;">
								<table class="soalny" style="margin: auto; width: 30vh;text-align: center; font-size: 24px; font-weight: bold;">

									<?php
									$jlb = 1;


									$var1 = '';
									$var2 = '';
									$var3 = '';
									$var4 = '';
									$var5 = '';
									$var6 = '';
									$var7 = '';
									$var8 = '';
									$var9 = '';
									$var10 = '';
									$var11 = '';
									$var12 = '';
									$var13 = '';
									$var14 = '';
									$var15 = '';
									$var16 = '';
									$var17 = '';
									$var18 = '';
									$var19 = '';
									$var20 = '';
									$var21 = '';
									$var22 = '';
									$var23 = '';
									$var24 = '';
									$var25 = '';
									$var26 = '';
									$var27 = '';
									$var28 = '';
									$var29 = '';
									$var30 = '';
									
									foreach ($datajawabanlistkolom1a as $k1) {
										$var1 = $k1->listjawaban;
									}
									foreach ($datajawabanlistkolom2a as $k2) {
										$var2 = $k2->listjawaban;
									}
									foreach ($datajawabanlistkolom3a as $k3) {
										$var3 = $k3->listjawaban;
									}
									foreach ($datajawabanlistkolom4a as $k4) {
										$var4 = $k4->listjawaban;
									}
									foreach ($datajawabanlistkolom5a as $k5) {
										$var5 = $k5->listjawaban;
									}
									foreach ($datajawabanlistkolom6a as $k6) {
										$var6 = $k6->listjawaban;
									}
									foreach ($datajawabanlistkolom7a as $k7) {
										$var7 = $k7->listjawaban;
									}
									foreach ($datajawabanlistkolom8a as $k8) {
										$var8 = $k8->listjawaban;
									}
									foreach ($datajawabanlistkolom9a as $k9) {
										$var9 = $k9->listjawaban;
									}
									foreach ($datajawabanlistkolom10a as $k10) {
										$var10 = $k10->listjawaban;
									}
									foreach ($datajawabanlistkolom1b as $k11) {
										$var11 = $k11->listjawaban;
									}
									foreach ($datajawabanlistkolom2b as $k12) {
										$var12 = $k12->listjawaban;
									}
									foreach ($datajawabanlistkolom3b as $k13) {
										$var13 = $k13->listjawaban;
									}
									foreach ($datajawabanlistkolom4b as $k14) {
										$var14 = $k14->listjawaban;
									}
									foreach ($datajawabanlistkolom5b as $k15) {
										$var15 = $k15->listjawaban;
									}
									foreach ($datajawabanlistkolom6b as $k16) {
										$var16 = $k16->listjawaban;
									}
									foreach ($datajawabanlistkolom7b as $k17) {
										$var17 = $k17->listjawaban;
									}
									foreach ($datajawabanlistkolom8b as $k18) {
										$var18 = $k18->listjawaban;
									}
									foreach ($datajawabanlistkolom9b as $k19) {
										$var19 = $k19->listjawaban;
									}
									foreach ($datajawabanlistkolom10b as $k20) {
										$var20 = $k20->listjawaban;
									}
									foreach ($datajawabanlistkolom1c as $k21) {
										$var21 = $k21->listjawaban;
									}
									foreach ($datajawabanlistkolom2c as $k22) {
										$var22 = $k22->listjawaban;
									}
									foreach ($datajawabanlistkolom3c as $k23) {
										$var23 = $k23->listjawaban;
									}
									foreach ($datajawabanlistkolom4c as $k24) {
										$var24 = $k24->listjawaban;
									}
									foreach ($datajawabanlistkolom5c as $k25) {
										$var25 = $k25->listjawaban;
									}
									foreach ($datajawabanlistkolom6c as $k26) {
										$var26 = $k26->listjawaban;
									}
									foreach ($datajawabanlistkolom7c as $k27) {
										$var27 = $k27->listjawaban;
									}
									foreach ($datajawabanlistkolom8c as $k28) {
										$var28 = $k28->listjawaban;
									}
									foreach ($datajawabanlistkolom9c as $k29) {
										$var29 = $k29->listjawaban;
									}
									foreach ($datajawabanlistkolom10c as $k30) {
										$var30 = $k30->listjawaban;
									}

									$x = 1;
									foreach ($soalkolom as $sk) {
										$so = explode('-', $sk->soal,1); //its fucking weird, why i need this?
										foreach ($so as $se) {
											$s = explode('-', $se);
										}
										$x++;
									}
									$u = $var1.'-'.$var2.'-'.$var3.'-'.$var4.'-'.$var5.'-'.$var6.'-'.$var7.'-'.$var8.'-'.$var9.'-'.$var10.'-'.$var11.'-'.$var12.'-'.$var13.'-'.$var14.'-'.$var15.'-'.$var16.'-'.$var17.'-'.$var18.'-'.$var19.'-'.$var20.'-'.$var21.'-'.$var22.'-'.$var23.'-'.$var24.'-'.$var25.'-'.$var26.'-'.$var27.'-'.$var28.'-'.$var29.'-'.$var30;
									$owo = array_map('trim',explode('-', $u));
									//$anl = array_map('trim',explode('-', $ans));

									foreach ($owo as $jl) {
										$l = explode(' ', $jl);

									 ?>
									<tr class="barisnya<?php echo $jlb ?> barisss" hidden>
										<td><?php echo $l[0]; ?></td>
										<td><?php echo $l[1]; ?></td>
										<td><?php echo $l[2]; ?></td>
										<td><?php echo $l[3]; ?></td>
									</tr>
								<?php 
								$jlb++;
							} ?>
						</table>
								<?php

								$kolom1a = 1;
								$kolom2a = 51;
								$kolom3a = 101;
								$kolom4a = 151;
								$kolom5a = 201;
								$kolom6a = 251;
								$kolom7a = 301;
								$kolom8a = 351;
								$kolom9a = 401;
								$kolom10a = 451;
								$kolom1b = 501;
								$kolom2b = 551;
								$kolom3b = 601;
								$kolom4b = 651;
								$kolom5b = 701;
								$kolom6b = 751;
								$kolom7b = 801;
								$kolom8b = 851;
								$kolom9b = 901;
								$kolom10b = 951;
								$kolom1c = 1001;
								$kolom2c = 1051;
								$kolom3c = 1101;
								$kolom4c = 1151;
								$kolom5c = 1201;
								$kolom6c = 1251;
								$kolom7c = 1301;
								$kolom8c = 1351;
								$kolom9c = 1401;
								$kolom10c = 1501;


								foreach ($soal1 as $k1) {
									$h1 = explode('-', $k1->soal);
								}
								foreach ($soal2 as $k2) {
									$h2 = explode('-', $k2->soal);
								}
								foreach ($soal3 as $k3) {
									$h3 = explode('-', $k3->soal);
								}
								foreach ($soal4 as $k4) {
									$h4 = explode('-', $k4->soal);
								}
								foreach ($soal5 as $k5) {
									$h5 = explode('-', $k5->soal);
								}
								foreach ($soal6 as $k6) {
									$h6 = explode('-', $k6->soal);
								}
								foreach ($soal7 as $k7) {
									$h7 = explode('-', $k7->soal);
								}
								foreach ($soal8 as $k8) {
									$h8 = explode('-', $k8->soal);
								}
								foreach ($soal9 as $k9) {
									$h9 = explode('-', $k9->soal);
								}
								foreach ($soal10 as $k10) {
									$h10 = explode('-', $k10->soal);
								}
								foreach ($soal11 as $k11) {
									$h11 = explode('-', $k11->soal);
								}
								foreach ($soal12 as $k12) {
									$h12 = explode('-', $k12->soal);
								}
								foreach ($soal13 as $k13) {
									$h13 = explode('-', $k13->soal);
								}
								foreach ($soal14 as $k14) {
									$h14 = explode('-', $k14->soal);
								}
								foreach ($soal15 as $k15) {
									$h15 = explode('-', $k15->soal);
								}
								foreach ($soal16 as $k16) {
									$h16 = explode('-', $k16->soal);
								}
								foreach ($soal17 as $k17) {
									$h17 = explode('-', $k17->soal);
								}
								foreach ($soal18 as $k18) {
									$h18 = explode('-', $k18->soal);
								}
								foreach ($soal19 as $k19) {
									$h19 = explode('-', $k19->soal);
								}
								foreach ($soal20 as $k20) {
									$h20 = explode('-', $k20->soal);
								}
								foreach ($soal21 as $k21) {
									$h21 = explode('-', $k21->soal);
								}
								foreach ($soal22 as $k22) {
									$h22 = explode('-', $k22->soal);
								}
								foreach ($soal23 as $k23) {
									$h23 = explode('-', $k23->soal);
								}
								foreach ($soal24 as $k24) {
									$h24 = explode('-', $k24->soal);
								}
								foreach ($soal25 as $k25) {
									$h25 = explode('-', $k25->soal);
								}
								foreach ($soal26 as $k26) {
									$h26 = explode('-', $k26->soal);
								}
								foreach ($soal27 as $k27) {
									$h27 = explode('-', $k27->soal);
								}
								foreach ($soal28 as $k28) {
									$h28 = explode('-', $k28->soal);
								}
								foreach ($soal29 as $k29) {
									$h29 = explode('-', $k29->soal);
								}
								foreach ($soal30 as $k30) {
									$h30 = explode('-', $k30->soal);
								}
							?>
							<table style="margin: auto;">
							<?php
								for ($kolom1a; $kolom1a < $kolom2a; $kolom1a++) { 
									?>
									<tr class="barispilihan barispilihankolom1 listsoalke<?php echo $kolom1a ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h1[0] ?>" type="radio" id="option-one<?php echo'baris'.$kolom1a ?>" name="selector<?php echo'baris'.$kolom1a ?>" class="selector<?php echo 'baris'.$kolom1a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h1[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom1a ?>">A</label>
													<input value="<?php echo $h1[1] ?>" type="radio" id="option-two<?php echo'baris'.$kolom1a ?>" name="selector<?php echo'baris'.$kolom1a ?>" class="selector<?php echo 'baris'.$kolom1a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h1[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom1a ?>">B</label>
													<input value="<?php echo $h1[2] ?>" type="radio" id="option-three<?php echo'baris'.$kolom1a ?>" name="selector<?php echo'baris'.$kolom1a ?>" class="selector<?php echo 'baris'.$kolom1a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h1[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom1a ?>">C</label>
													<input value="<?php echo $h1[3] ?>" type="radio" id="option-four<?php echo'baris'.$kolom1a ?>" name="selector<?php echo'baris'.$kolom1a ?>" class="selector<?php echo 'baris'.$kolom1a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h1[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom1a ?>">D</label>
													<input value="<?php echo $h1[4] ?>" type="radio" id="option-five<?php echo'baris'.$kolom1a ?>" name="selector<?php echo'baris'.$kolom1a ?>" class="selector<?php echo 'baris'.$kolom1a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h1[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom1a ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom2a; $kolom2a < $kolom3a; $kolom2a++) { 
									?>
									<tr class="barispilihan barispilihankolom2 listsoalke<?php echo $kolom2a ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h2[0] ?>" type="radio" id="option-one<?php echo'baris'.$kolom2a ?>" name="selector<?php echo'baris'.$kolom2a ?>" class="selector<?php echo 'baris'.$kolom2a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h2[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom2a ?>">A</label>
													<input value="<?php echo $h2[1] ?>" type="radio" id="option-two<?php echo'baris'.$kolom2a ?>" name="selector<?php echo'baris'.$kolom2a ?>" class="selector<?php echo 'baris'.$kolom2a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h2[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom2a ?>">B</label>
													<input value="<?php echo $h2[2] ?>" type="radio" id="option-three<?php echo'baris'.$kolom2a ?>" name="selector<?php echo'baris'.$kolom2a ?>" class="selector<?php echo 'baris'.$kolom2a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h2[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom2a ?>">C</label>
													<input value="<?php echo $h2[3] ?>" type="radio" id="option-four<?php echo'baris'.$kolom2a ?>" name="selector<?php echo'baris'.$kolom2a ?>" class="selector<?php echo 'baris'.$kolom2a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h2[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom2a ?>">D</label>
													<input value="<?php echo $h2[4] ?>" type="radio" id="option-five<?php echo'baris'.$kolom2a ?>" name="selector<?php echo'baris'.$kolom2a ?>" class="selector<?php echo 'baris'.$kolom2a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h2[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom2a ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom3a; $kolom3a < $kolom4a; $kolom3a++) { 
									?>
									<tr class="barispilihan barispilihankolom3 listsoalke<?php echo $kolom3a ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h3[0] ?>" type="radio" id="option-one<?php echo'baris'.$kolom3a ?>" name="selector<?php echo'baris'.$kolom3a ?>" class="selector<?php echo 'baris'.$kolom3a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h3[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom3a ?>">A</label>
													<input value="<?php echo $h3[1] ?>" type="radio" id="option-two<?php echo'baris'.$kolom3a ?>" name="selector<?php echo'baris'.$kolom3a ?>" class="selector<?php echo 'baris'.$kolom3a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h3[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom3a ?>">B</label>
													<input value="<?php echo $h3[2] ?>" type="radio" id="option-three<?php echo'baris'.$kolom3a ?>" name="selector<?php echo'baris'.$kolom3a ?>" class="selector<?php echo 'baris'.$kolom3a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h3[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom3a ?>">C</label>
													<input value="<?php echo $h3[3] ?>" type="radio" id="option-four<?php echo'baris'.$kolom3a ?>" name="selector<?php echo'baris'.$kolom3a ?>" class="selector<?php echo 'baris'.$kolom3a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h3[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom3a ?>">D</label>
													<input value="<?php echo $h3[4] ?>" type="radio" id="option-five<?php echo'baris'.$kolom3a ?>" name="selector<?php echo'baris'.$kolom3a ?>" class="selector<?php echo 'baris'.$kolom3a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h3[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom3a ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
									}

								for ($kolom4a; $kolom4a < $kolom5a; $kolom4a++) { 
									?>
									<tr class="barispilihan barispilihankolom4 listsoalke<?php echo $kolom4a ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h4[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom4a ?>" name="selector<?php echo'baris'.$kolom4a ?>" class="selector<?php echo 'baris'.$kolom4a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h4[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom4a ?>">A</label>
													<input value="<?php echo $h4[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom4a ?>" name="selector<?php echo'baris'.$kolom4a ?>" class="selector<?php echo 'baris'.$kolom4a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h4[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom4a ?>">B</label>
													<input value="<?php echo $h4[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom4a ?>" name="selector<?php echo'baris'.$kolom4a ?>" class="selector<?php echo 'baris'.$kolom4a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h4[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom4a ?>">C</label>
													<input value="<?php echo $h4[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom4a ?>" name="selector<?php echo'baris'.$kolom4a ?>" class="selector<?php echo 'baris'.$kolom4a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h4[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom4a ?>">D</label>
													<input value="<?php echo $h4[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom4a ?>" name="selector<?php echo'baris'.$kolom4a ?>" class="selector<?php echo 'baris'.$kolom4a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h4[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom4a ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom5a; $kolom5a < $kolom6a; $kolom5a++) { 
									?>
									<tr class="barispilihan barispilihankolom5 listsoalke<?php echo $kolom5a ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h5[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom5a ?>" name="selector<?php echo'baris'.$kolom5a ?>" class="selector<?php echo 'baris'.$kolom5a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h5[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom5a ?>">A</label>
													<input value="<?php echo $h5[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom5a ?>" name="selector<?php echo'baris'.$kolom5a ?>" class="selector<?php echo 'baris'.$kolom5a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h5[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom5a ?>">B</label>
													<input value="<?php echo $h5[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom5a ?>" name="selector<?php echo'baris'.$kolom5a ?>" class="selector<?php echo 'baris'.$kolom5a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h5[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom5a ?>">C</label>
													<input value="<?php echo $h5[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom5a ?>" name="selector<?php echo'baris'.$kolom5a ?>" class="selector<?php echo 'baris'.$kolom5a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h5[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom5a ?>">D</label>
													<input value="<?php echo $h5[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom5a ?>" name="selector<?php echo'baris'.$kolom5a ?>" class="selector<?php echo 'baris'.$kolom5a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h5[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom5a ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom6a; $kolom6a < $kolom7a; $kolom6a++) { 
									?>
									<tr class="barispilihan barispilihankolom6 listsoalke<?php echo $kolom6a ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h6[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom6a ?>" name="selector<?php echo'baris'.$kolom6a ?>" class="selector<?php echo 'baris'.$kolom6a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h6[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom6a ?>">A</label>
													<input value="<?php echo $h6[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom6a ?>" name="selector<?php echo'baris'.$kolom6a ?>" class="selector<?php echo 'baris'.$kolom6a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h6[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom6a ?>">B</label>
													<input value="<?php echo $h6[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom6a ?>" name="selector<?php echo'baris'.$kolom6a ?>" class="selector<?php echo 'baris'.$kolom6a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h6[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom6a ?>">C</label>
													<input value="<?php echo $h6[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom6a ?>" name="selector<?php echo'baris'.$kolom6a ?>" class="selector<?php echo 'baris'.$kolom6a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h6[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom6a ?>">D</label>
													<input value="<?php echo $h6[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom6a ?>" name="selector<?php echo'baris'.$kolom6a ?>" class="selector<?php echo 'baris'.$kolom6a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h6[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom6a ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom7a; $kolom7a < $kolom8a; $kolom7a++) { 
									?>
									<tr class="barispilihan barispilihankolom7 listsoalke<?php echo $kolom7a ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h7[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom7a ?>" name="selector<?php echo'baris'.$kolom7a ?>" class="selector<?php echo 'baris'.$kolom7a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h7[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom7a ?>">A</label>
													<input value="<?php echo $h7[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom7a ?>" name="selector<?php echo'baris'.$kolom7a ?>" class="selector<?php echo 'baris'.$kolom7a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h7[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom7a ?>">B</label>
													<input value="<?php echo $h7[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom7a ?>" name="selector<?php echo'baris'.$kolom7a ?>" class="selector<?php echo 'baris'.$kolom7a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h7[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom7a ?>">C</label>
													<input value="<?php echo $h7[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom7a ?>" name="selector<?php echo'baris'.$kolom7a ?>" class="selector<?php echo 'baris'.$kolom7a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h7[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom7a ?>">D</label>
													<input value="<?php echo $h7[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom7a ?>" name="selector<?php echo'baris'.$kolom7a ?>" class="selector<?php echo 'baris'.$kolom7a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h7[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom7a ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom8a; $kolom8a < $kolom9a; $kolom8a++) { 
									?>
									<tr class="barispilihan barispilihankolom8 listsoalke<?php echo $kolom8a ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h8[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom8a ?>" name="selector<?php echo'baris'.$kolom8a ?>" class="selector<?php echo 'baris'.$kolom8a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h8[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom8a ?>">A</label>
													<input value="<?php echo $h8[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom8a ?>" name="selector<?php echo'baris'.$kolom8a ?>" class="selector<?php echo 'baris'.$kolom8a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h8[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom8a ?>">B</label>
													<input value="<?php echo $h8[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom8a ?>" name="selector<?php echo'baris'.$kolom8a ?>" class="selector<?php echo 'baris'.$kolom8a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h8[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom8a ?>">C</label>
													<input value="<?php echo $h8[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom8a ?>" name="selector<?php echo'baris'.$kolom8a ?>" class="selector<?php echo 'baris'.$kolom8a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h8[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom8a ?>">D</label>
													<input value="<?php echo $h8[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom8a ?>" name="selector<?php echo'baris'.$kolom8a ?>" class="selector<?php echo 'baris'.$kolom8a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h8[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom8a ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
									}

								for ($kolom9a; $kolom9a < $kolom10a; $kolom9a++) { 
									?>
									<tr class="barispilihan barispilihankolom9 listsoalke<?php echo $kolom9a ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h9[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom9a ?>" name="selector<?php echo'baris'.$kolom9a ?>" class="selector<?php echo 'baris'.$kolom9a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h9[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom9a ?>">A</label>
													<input value="<?php echo $h9[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom9a ?>" name="selector<?php echo'baris'.$kolom9a ?>" class="selector<?php echo 'baris'.$kolom9a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h9[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom9a ?>">B</label>
													<input value="<?php echo $h9[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom9a ?>" name="selector<?php echo'baris'.$kolom9a ?>" class="selector<?php echo 'baris'.$kolom9a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h9[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom9a ?>">C</label>
													<input value="<?php echo $h9[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom9a ?>" name="selector<?php echo'baris'.$kolom9a ?>" class="selector<?php echo 'baris'.$kolom9a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h9[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom9a ?>">D</label>
													<input value="<?php echo $h9[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom9a ?>" name="selector<?php echo'baris'.$kolom9a ?>" class="selector<?php echo 'baris'.$kolom9a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h9[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom9a ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom10a; $kolom10a < $kolom1b; $kolom10a++) { 
									?>
									<tr class="barispilihan barispilihankolom10 listsoalke<?php echo $kolom10a ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h10[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom10a ?>" name="selector<?php echo'baris'.$kolom10a ?>" class="selector<?php echo 'baris'.$kolom10a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h10[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom10a ?>">A</label>
													<input value="<?php echo $h10[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom10a ?>" name="selector<?php echo'baris'.$kolom10a ?>" class="selector<?php echo 'baris'.$kolom10a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h10[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom10a ?>">B</label>
													<input value="<?php echo $h10[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom10a ?>" name="selector<?php echo'baris'.$kolom10a ?>" class="selector<?php echo 'baris'.$kolom10a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h10[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom10a ?>">C</label>
													<input value="<?php echo $h10[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom10a ?>" name="selector<?php echo'baris'.$kolom10a ?>" class="selector<?php echo 'baris'.$kolom10a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h10[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom10a ?>">D</label>
													<input value="<?php echo $h10[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom10a ?>" name="selector<?php echo'baris'.$kolom10a ?>" class="selector<?php echo 'baris'.$kolom10a ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h10[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom10a ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								//S1JL

								for ($kolom1b; $kolom1b < $kolom2b; $kolom1b++) { 
									?>
									<tr class="barispilihan barispilihankolom11 listsoalke<?php echo $kolom1b ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h11[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom1b ?>" name="selector<?php echo'baris'.$kolom1b ?>" class="selector<?php echo 'baris'.$kolom1b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h11[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom1b ?>">A</label>
													<input value="<?php echo $h11[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom1b ?>" name="selector<?php echo'baris'.$kolom1b ?>" class="selector<?php echo 'baris'.$kolom1b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h11[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom1b ?>">B</label>
													<input value="<?php echo $h11[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom1b ?>" name="selector<?php echo'baris'.$kolom1b ?>" class="selector<?php echo 'baris'.$kolom1b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h11[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom1b ?>">C</label>
													<input value="<?php echo $h11[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom1b ?>" name="selector<?php echo'baris'.$kolom1b ?>" class="selector<?php echo 'baris'.$kolom1b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h11[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom1b ?>">D</label>
													<input value="<?php echo $h11[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom1b ?>" name="selector<?php echo'baris'.$kolom1b ?>" class="selector<?php echo 'baris'.$kolom1b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h11[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom1b ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom2b; $kolom2b < $kolom3b; $kolom2b++) { 
									?>
									<tr class="barispilihan barispilihankolom12 listsoalke<?php echo $kolom2b ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h12[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom2b ?>" name="selector<?php echo'baris'.$kolom2b ?>" class="selector<?php echo 'baris'.$kolom2b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h12[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom2b ?>">A</label>
													<input value="<?php echo $h12[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom2b ?>" name="selector<?php echo'baris'.$kolom2b ?>" class="selector<?php echo 'baris'.$kolom2b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h12[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom2b ?>">B</label>
													<input value="<?php echo $h12[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom2b ?>" name="selector<?php echo'baris'.$kolom2b ?>" class="selector<?php echo 'baris'.$kolom2b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h12[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom2b ?>">C</label>
													<input value="<?php echo $h12[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom2b ?>" name="selector<?php echo'baris'.$kolom2b ?>" class="selector<?php echo 'baris'.$kolom2b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h12[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom2b ?>">D</label>
													<input value="<?php echo $h12[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom2b ?>" name="selector<?php echo'baris'.$kolom2b ?>" class="selector<?php echo 'baris'.$kolom2b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h12[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom2b ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom3b; $kolom3b < $kolom4b; $kolom3b++) { 
									?>
									<tr class="barispilihan barispilihankolom13 listsoalke<?php echo $kolom3b ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h13[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom3b ?>" name="selector<?php echo'baris'.$kolom3b ?>" class="selector<?php echo 'baris'.$kolom3b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h13[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom3b ?>">A</label>
													<input value="<?php echo $h13[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom3b ?>" name="selector<?php echo'baris'.$kolom3b ?>" class="selector<?php echo 'baris'.$kolom3b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h13[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom3b ?>">B</label>
													<input value="<?php echo $h13[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom3b ?>" name="selector<?php echo'baris'.$kolom3b ?>" class="selector<?php echo 'baris'.$kolom3b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h13[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom3b ?>">C</label>
													<input value="<?php echo $h13[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom3b ?>" name="selector<?php echo'baris'.$kolom3b ?>" class="selector<?php echo 'baris'.$kolom3b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h13[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom3b ?>">D</label>
													<input value="<?php echo $h13[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom3b ?>" name="selector<?php echo'baris'.$kolom3b ?>" class="selector<?php echo 'baris'.$kolom3b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h13[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom3b ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
									}

								for ($kolom4b; $kolom4b < $kolom5b; $kolom4b++) { 
									?>
									<tr class="barispilihan barispilihankolom14 listsoalke<?php echo $kolom4b ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h14[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom4b ?>" name="selector<?php echo'baris'.$kolom4b ?>" class="selector<?php echo 'baris'.$kolom4b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h14[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom4b ?>">A</label>
													<input value="<?php echo $h14[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom4b ?>" name="selector<?php echo'baris'.$kolom4b ?>" class="selector<?php echo 'baris'.$kolom4b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h14[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom4b ?>">B</label>
													<input value="<?php echo $h14[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom4b ?>" name="selector<?php echo'baris'.$kolom4b ?>" class="selector<?php echo 'baris'.$kolom4b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h14[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom4b ?>">C</label>
													<input value="<?php echo $h14[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom4b ?>" name="selector<?php echo'baris'.$kolom4b ?>" class="selector<?php echo 'baris'.$kolom4b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h14[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom4b ?>">D</label>
													<input value="<?php echo $h14[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom4b ?>" name="selector<?php echo'baris'.$kolom4b ?>" class="selector<?php echo 'baris'.$kolom4b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h14[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom4b ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom5b; $kolom5b < $kolom6b; $kolom5b++) { 
									?>
									<tr class="barispilihan barispilihankolom15 listsoalke<?php echo $kolom5b ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h15[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom5b ?>" name="selector<?php echo'baris'.$kolom5b ?>" class="selector<?php echo 'baris'.$kolom5b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h15[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom5b ?>">A</label>
													<input value="<?php echo $h15[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom5b ?>" name="selector<?php echo'baris'.$kolom5b ?>" class="selector<?php echo 'baris'.$kolom5b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h15[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom5b ?>">B</label>
													<input value="<?php echo $h15[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom5b ?>" name="selector<?php echo'baris'.$kolom5b ?>" class="selector<?php echo 'baris'.$kolom5b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h15[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom5b ?>">C</label>
													<input value="<?php echo $h15[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom5b ?>" name="selector<?php echo'baris'.$kolom5b ?>" class="selector<?php echo 'baris'.$kolom5b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h15[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom5b ?>">D</label>
													<input value="<?php echo $h15[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom5b ?>" name="selector<?php echo'baris'.$kolom5b ?>" class="selector<?php echo 'baris'.$kolom5b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h15[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom5b ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom6b; $kolom6b < $kolom7b; $kolom6b++) { 
									?>
									<tr class="barispilihan barispilihankolom16 listsoalke<?php echo $kolom6b ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h16[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom6b ?>" name="selector<?php echo'baris'.$kolom6b ?>" class="selector<?php echo 'baris'.$kolom6b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h16[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom6b ?>">A</label>
													<input value="<?php echo $h16[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom6b ?>" name="selector<?php echo'baris'.$kolom6b ?>" class="selector<?php echo 'baris'.$kolom6b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h16[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom6b ?>">B</label>
													<input value="<?php echo $h16[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom6b ?>" name="selector<?php echo'baris'.$kolom6b ?>" class="selector<?php echo 'baris'.$kolom6b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h16[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom6b ?>">C</label>
													<input value="<?php echo $h16[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom6b ?>" name="selector<?php echo'baris'.$kolom6b ?>" class="selector<?php echo 'baris'.$kolom6b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h16[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom6b ?>">D</label>
													<input value="<?php echo $h16[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom6b ?>" name="selector<?php echo'baris'.$kolom6b ?>" class="selector<?php echo 'baris'.$kolom6b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h16[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom6b ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom7b; $kolom7b < $kolom8b; $kolom7b++) { 
									?>
									<tr class="barispilihan barispilihankolom17 listsoalke<?php echo $kolom7b ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h17[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom7b ?>" name="selector<?php echo'baris'.$kolom7b ?>" class="selector<?php echo 'baris'.$kolom7b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h16[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom7b ?>">A</label>
													<input value="<?php echo $h17[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom7b ?>" name="selector<?php echo'baris'.$kolom7b ?>" class="selector<?php echo 'baris'.$kolom7b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h16[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom7b ?>">B</label>
													<input value="<?php echo $h17[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom7b ?>" name="selector<?php echo'baris'.$kolom7b ?>" class="selector<?php echo 'baris'.$kolom7b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h16[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom7b ?>">C</label>
													<input value="<?php echo $h17[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom7b ?>" name="selector<?php echo'baris'.$kolom7b ?>" class="selector<?php echo 'baris'.$kolom7b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h16[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom7b ?>">D</label>
													<input value="<?php echo $h17[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom7b ?>" name="selector<?php echo'baris'.$kolom7b ?>" class="selector<?php echo 'baris'.$kolom7b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h16[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom7b ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom8b; $kolom8b < $kolom9b; $kolom8b++) { 
									?>
									<tr class="barispilihan barispilihankolom18 listsoalke<?php echo $kolom8b ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h18[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom8b ?>" name="selector<?php echo'baris'.$kolom8b ?>" class="selector<?php echo 'baris'.$kolom8b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h18[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom8b ?>">A</label>
													<input value="<?php echo $h18[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom8b ?>" name="selector<?php echo'baris'.$kolom8b ?>" class="selector<?php echo 'baris'.$kolom8b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h18[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom8b ?>">B</label>
													<input value="<?php echo $h18[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom8b ?>" name="selector<?php echo'baris'.$kolom8b ?>" class="selector<?php echo 'baris'.$kolom8b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h18[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom8b ?>">C</label>
													<input value="<?php echo $h18[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom8b ?>" name="selector<?php echo'baris'.$kolom8b ?>" class="selector<?php echo 'baris'.$kolom8b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h18[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom8b ?>">D</label>
													<input value="<?php echo $h18[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom8b ?>" name="selector<?php echo'baris'.$kolom8b ?>" class="selector<?php echo 'baris'.$kolom8b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h18[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom8b ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
									}

								for ($kolom9b; $kolom9b < $kolom10b; $kolom9b++) { 
									?>
									<tr class="barispilihan barispilihankolom19 listsoalke<?php echo $kolom9b ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h19[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom9b ?>" name="selector<?php echo'baris'.$kolom9b ?>" class="selector<?php echo 'baris'.$kolom9b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h19[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom9b ?>">A</label>
													<input value="<?php echo $h19[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom9b ?>" name="selector<?php echo'baris'.$kolom9b ?>" class="selector<?php echo 'baris'.$kolom9b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h19[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom9b ?>">B</label>
													<input value="<?php echo $h19[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom9b ?>" name="selector<?php echo'baris'.$kolom9b ?>" class="selector<?php echo 'baris'.$kolom9b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h19[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom9b ?>">C</label>
													<input value="<?php echo $h19[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom9b ?>" name="selector<?php echo'baris'.$kolom9b ?>" class="selector<?php echo 'baris'.$kolom9b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h19[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom9b ?>">D</label>
													<input value="<?php echo $h19[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom9b ?>" name="selector<?php echo'baris'.$kolom9b ?>" class="selector<?php echo 'baris'.$kolom9b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h19[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom9b ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom10b; $kolom10b < $kolom1c; $kolom10b++) { 
									?>
									<tr class="barispilihan barispilihankolom20 listsoalke<?php echo $kolom10b ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h20[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom10b ?>" name="selector<?php echo'baris'.$kolom10b ?>" class="selector<?php echo 'baris'.$kolom10b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h20[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom10b ?>">A</label>
													<input value="<?php echo $h20[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom10b ?>" name="selector<?php echo'baris'.$kolom10b ?>" class="selector<?php echo 'baris'.$kolom10b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h20[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom10b ?>">B</label>
													<input value="<?php echo $h20[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom10b ?>" name="selector<?php echo'baris'.$kolom10b ?>" class="selector<?php echo 'baris'.$kolom10b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h20[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom10b ?>">C</label>
													<input value="<?php echo $h20[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom10b ?>" name="selector<?php echo'baris'.$kolom10b ?>" class="selector<?php echo 'baris'.$kolom10b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h20[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom10b ?>">D</label>
													<input value="<?php echo $h20[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom10b ?>" name="selector<?php echo'baris'.$kolom10b ?>" class="selector<?php echo 'baris'.$kolom10b ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h20[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom10b ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
									}
									//S2JL

									for ($kolom1c; $kolom1c < $kolom2c; $kolom1c++) { 
									?>
									<tr class="barispilihan barispilihankolom21 listsoalke<?php echo $kolom1c ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h21[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom1c ?>" name="selector<?php echo'baris'.$kolom1c ?>" class="selector<?php echo 'baris'.$kolom1c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h21[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom1c ?>">A</label>
													<input value="<?php echo $h21[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom1c ?>" name="selector<?php echo'baris'.$kolom1c ?>" class="selector<?php echo 'baris'.$kolom1c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h21[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom1c ?>">B</label>
													<input value="<?php echo $h21[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom1c ?>" name="selector<?php echo'baris'.$kolom1c ?>" class="selector<?php echo 'baris'.$kolom1c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h21[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom1c ?>">C</label>
													<input value="<?php echo $h21[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom1c ?>" name="selector<?php echo'baris'.$kolom1c ?>" class="selector<?php echo 'baris'.$kolom1c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h21[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom1c ?>">D</label>
													<input value="<?php echo $h21[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom1c ?>" name="selector<?php echo'baris'.$kolom1c ?>" class="selector<?php echo 'baris'.$kolom1c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h21[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom1c ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom2c; $kolom2c < $kolom3c; $kolom2c++) { 
									?>
									<tr class="barispilihan barispilihankolom22 listsoalke<?php echo $kolom2c ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h22[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom2c ?>" name="selector<?php echo'baris'.$kolom2c ?>" class="selector<?php echo 'baris'.$kolom2c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h22[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom2c ?>">A</label>
													<input value="<?php echo $h22[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom2c ?>" name="selector<?php echo'baris'.$kolom2c ?>" class="selector<?php echo 'baris'.$kolom2c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h22[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom2c ?>">B</label>
													<input value="<?php echo $h22[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom2c ?>" name="selector<?php echo'baris'.$kolom2c ?>" class="selector<?php echo 'baris'.$kolom2c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h22[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom2c ?>">C</label>
													<input value="<?php echo $h22[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom2c ?>" name="selector<?php echo'baris'.$kolom2c ?>" class="selector<?php echo 'baris'.$kolom2c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h22[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom2c ?>">D</label>
													<input value="<?php echo $h22[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom2c ?>" name="selector<?php echo'baris'.$kolom2c ?>" class="selector<?php echo 'baris'.$kolom2c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h22[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom2c ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom3c; $kolom3c < $kolom4c; $kolom3c++) { 
									?>
									<tr class="barispilihan barispilihankolom23 listsoalke<?php echo $kolom3c ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h23[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom3c ?>" name="selector<?php echo'baris'.$kolom3c ?>" class="selector<?php echo 'baris'.$kolom3c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h23[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom3c ?>">A</label>
													<input value="<?php echo $h23[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom3c ?>" name="selector<?php echo'baris'.$kolom3c ?>" class="selector<?php echo 'baris'.$kolom3c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h23[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom3c ?>">B</label>
													<input value="<?php echo $h23[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom3c ?>" name="selector<?php echo'baris'.$kolom3c ?>" class="selector<?php echo 'baris'.$kolom3c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h23[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom3c ?>">C</label>
													<input value="<?php echo $h23[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom3c ?>" name="selector<?php echo'baris'.$kolom3c ?>" class="selector<?php echo 'baris'.$kolom3c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h23[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom3c ?>">D</label>
													<input value="<?php echo $h23[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom3c ?>" name="selector<?php echo'baris'.$kolom3c ?>" class="selector<?php echo 'baris'.$kolom3c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h23[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom3c ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
									}

								for ($kolom4c; $kolom4c < $kolom5c; $kolom4c++) { 
									?>
									<tr class="barispilihan barispilihankolom24 listsoalke<?php echo $kolom4c ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h24[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom4c ?>" name="selector<?php echo'baris'.$kolom4c ?>" class="selector<?php echo 'baris'.$kolom4c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h24[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom4c ?>">A</label>
													<input value="<?php echo $h24[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom4c ?>" name="selector<?php echo'baris'.$kolom4c ?>" class="selector<?php echo 'baris'.$kolom4c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h24[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom4c ?>">B</label>
													<input value="<?php echo $h24[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom4c ?>" name="selector<?php echo'baris'.$kolom4c ?>" class="selector<?php echo 'baris'.$kolom4c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h24[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom4c ?>">C</label>
													<input value="<?php echo $h24[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom4c ?>" name="selector<?php echo'baris'.$kolom4c ?>" class="selector<?php echo 'baris'.$kolom4c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h24[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom4c ?>">D</label>
													<input value="<?php echo $h24[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom4c ?>" name="selector<?php echo'baris'.$kolom4c ?>" class="selector<?php echo 'baris'.$kolom4c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h24[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom4c ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom5c; $kolom5c < $kolom6c; $kolom5c++) { 
									?>
									<tr class="barispilihan barispilihankolom25 listsoalke<?php echo $kolom5c ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h25[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom5c ?>" name="selector<?php echo'baris'.$kolom5c ?>" class="selector<?php echo 'baris'.$kolom5c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h25[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom5c ?>">A</label>
													<input value="<?php echo $h25[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom5c ?>" name="selector<?php echo'baris'.$kolom5c ?>" class="selector<?php echo 'baris'.$kolom5c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h25[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom5c ?>">B</label>
													<input value="<?php echo $h25[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom5c ?>" name="selector<?php echo'baris'.$kolom5c ?>" class="selector<?php echo 'baris'.$kolom5c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h25[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom5c ?>">C</label>
													<input value="<?php echo $h25[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom5c ?>" name="selector<?php echo'baris'.$kolom5c ?>" class="selector<?php echo 'baris'.$kolom5c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h25[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom5c ?>">D</label>
													<input value="<?php echo $h25[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom5c ?>" name="selector<?php echo'baris'.$kolom5c ?>" class="selector<?php echo 'baris'.$kolom5c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h25[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom5c ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom6c; $kolom6c < $kolom7c; $kolom6c++) { 
									?>
									<tr class="barispilihan barispilihankolom26 listsoalke<?php echo $kolom6c ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h26[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom6c ?>" name="selector<?php echo'baris'.$kolom6c ?>" class="selector<?php echo 'baris'.$kolom6c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h25[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom6c ?>">A</label>
													<input value="<?php echo $h26[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom6c ?>" name="selector<?php echo'baris'.$kolom6c ?>" class="selector<?php echo 'baris'.$kolom6c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h25[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom6c ?>">B</label>
													<input value="<?php echo $h26[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom6c ?>" name="selector<?php echo'baris'.$kolom6c ?>" class="selector<?php echo 'baris'.$kolom6c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h25[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom6c ?>">C</label>
													<input value="<?php echo $h26[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom6c ?>" name="selector<?php echo'baris'.$kolom6c ?>" class="selector<?php echo 'baris'.$kolom6c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h25[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom6c ?>">D</label>
													<input value="<?php echo $h26[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom6c ?>" name="selector<?php echo'baris'.$kolom6c ?>" class="selector<?php echo 'baris'.$kolom6c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h25[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom6c ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom7c; $kolom7c < $kolom8c; $kolom7c++) { 
									?>
									<tr class="barispilihan barispilihankolom27 listsoalke<?php echo $kolom7c ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h27[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom7c ?>" name="selector<?php echo'baris'.$kolom7c ?>" class="selector<?php echo 'baris'.$kolom7c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h27[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom7c ?>">A</label>
													<input value="<?php echo $h27[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom7c ?>" name="selector<?php echo'baris'.$kolom7c ?>" class="selector<?php echo 'baris'.$kolom7c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h27[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom7c ?>">B</label>
													<input value="<?php echo $h27[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom7c ?>" name="selector<?php echo'baris'.$kolom7c ?>" class="selector<?php echo 'baris'.$kolom7c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h27[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom7c ?>">C</label>
													<input value="<?php echo $h27[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom7c ?>" name="selector<?php echo'baris'.$kolom7c ?>" class="selector<?php echo 'baris'.$kolom7c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h27[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom7c ?>">D</label>
													<input value="<?php echo $h27[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom7c ?>" name="selector<?php echo'baris'.$kolom7c ?>" class="selector<?php echo 'baris'.$kolom7c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h27[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom7c ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom8c; $kolom8c < $kolom9c; $kolom8c++) { 
									?>
									<tr class="barispilihan barispilihankolom28 listsoalke<?php echo $kolom8c ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h28[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom8c ?>" name="selector<?php echo'baris'.$kolom8c ?>" class="selector<?php echo 'baris'.$kolom8c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h28[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom8c ?>">A</label>
													<input value="<?php echo $h28[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom8c ?>" name="selector<?php echo'baris'.$kolom8c ?>" class="selector<?php echo 'baris'.$kolom8c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h28[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom8c ?>">B</label>
													<input value="<?php echo $h28[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom8c ?>" name="selector<?php echo'baris'.$kolom8c ?>" class="selector<?php echo 'baris'.$kolom8c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h28[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom8c ?>">C</label>
													<input value="<?php echo $h28[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom8c ?>" name="selector<?php echo'baris'.$kolom8c ?>" class="selector<?php echo 'baris'.$kolom8c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h28[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom8c ?>">D</label>
													<input value="<?php echo $h28[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom8c ?>" name="selector<?php echo'baris'.$kolom8c ?>" class="selector<?php echo 'baris'.$kolom8c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h28[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom8c ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
									}

								for ($kolom9c; $kolom9c < $kolom10c; $kolom9c++) { 
									?>
									<tr class="barispilihan barispilihankolom29 listsoalke<?php echo $kolom9c ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h29[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom9c ?>" name="selector<?php echo'baris'.$kolom9c ?>" class="selector<?php echo 'baris'.$kolom9c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h29[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom9c ?>">A</label>
													<input value="<?php echo $h29[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom9c ?>" name="selector<?php echo'baris'.$kolom9c ?>" class="selector<?php echo 'baris'.$kolom9c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h29[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom9c ?>">B</label>
													<input value="<?php echo $h29[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom9c ?>" name="selector<?php echo'baris'.$kolom9c ?>" class="selector<?php echo 'baris'.$kolom9c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h29[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom9c ?>">C</label>
													<input value="<?php echo $h29[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom9c ?>" name="selector<?php echo'baris'.$kolom9c ?>" class="selector<?php echo 'baris'.$kolom9c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h29[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom9c ?>">D</label>
													<input value="<?php echo $h29[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom9c ?>" name="selector<?php echo'baris'.$kolom9c ?>" class="selector<?php echo 'baris'.$kolom9c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h29[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom9c ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}

								for ($kolom10c; $kolom10c < 901; $kolom10c++) { 
									?>
									<tr class="barispilihan barispilihankolom30 listsoalke<?php echo $kolom10c ?>" hidden>
										<td>
											<div class="radioform">
												<div class="radiogroup">
													<input value="<?php echo $h30[0]; ?>" type="radio" id="option-one<?php echo'baris'.$kolom10c ?>" name="selector<?php echo'baris'.$kolom10c ?>" class="selector<?php echo 'baris'.$kolom10c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h30[0] ?>')},170);" for="option-one<?php echo'baris'.$kolom10c ?>">A</label>
													<input value="<?php echo $h30[1]; ?>" type="radio" id="option-two<?php echo'baris'.$kolom10c ?>" name="selector<?php echo'baris'.$kolom10c ?>" class="selector<?php echo 'baris'.$kolom10c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h30[1] ?>')},170);" for="option-two<?php echo'baris'.$kolom10c ?>">B</label>
													<input value="<?php echo $h30[2]; ?>" type="radio" id="option-three<?php echo'baris'.$kolom10c ?>" name="selector<?php echo'baris'.$kolom10c ?>" class="selector<?php echo 'baris'.$kolom10c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h30[2] ?>')},170);" for="option-three<?php echo'baris'.$kolom10c ?>">C</label>
													<input value="<?php echo $h30[3]; ?>" type="radio" id="option-four<?php echo'baris'.$kolom10c ?>" name="selector<?php echo'baris'.$kolom10c ?>" class="selector<?php echo 'baris'.$kolom10c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h30[3] ?>')},170);" for="option-four<?php echo'baris'.$kolom10c ?>">D</label>
													<input value="<?php echo $h30[4]; ?>" type="radio" id="option-five<?php echo'baris'.$kolom10c ?>" name="selector<?php echo'baris'.$kolom10c ?>" class="selector<?php echo 'baris'.$kolom10c ?>">
													<label onclick="setTimeout(function(){nextquest('<?php echo $h30[4] ?>')},170);" for="option-five<?php echo'baris'.$kolom10c ?>">E</label>
												</div>
											</div>
										</td>
									</tr>
									<?php
								}
								?>
								</table>
								<table class="tabledijawab" hidden="true">
									<?php 
									$brs = 1;
									do {
										?> 
										<tr class="barisdijawab<?php echo $brs ?>">
											<td class="answered"></td>
										</tr>
										<?php
										$brs++;
									} 
									while ($brs <= 1500)?>
								</table>
							</div>
						</div>
					</div>
					<div class="card-footer" id="footercard">
						<button class="btn btn-primary btn-md" id="startbuttontest" type="button" style="float: right;">Mulai Test</button>
						<button class="btn btn-primary btn-md" id="menjelangendbutton" type="button" style="float: right; display: none;">Akhiri Test</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>