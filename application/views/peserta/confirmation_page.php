<div class="container contain-wrapper">
	<div class="container">
		<div class="confirmation-wrapper" style="margin: auto;">
			<form role="form" method="POST" action="" method="post" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						<h4 id="judulcard">Konfirmasi Mulai Test</h4><p><span id="jenissoalnya"></span><span class="badge badge-pill badge-success" id="countdownkolom">Mulai</span></p>
					</div>
					<div class="card-body" id="bodycard">
						<p class="brieftext">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<?php
						$arrayNumber = range(1, 900);
						$baris = $arrayNumber;
						?>
						<table class="table table-bordered tabelsoal" style="width: 34vh;margin: auto;" hidden="true">
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
							<div class="soalkolom kolomnya">
								<table style="margin: auto;">

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
									$var1answer = '';
									$var2answer = '';
									$var3answer = '';
									$var4answer = '';
									$var5answer = '';
									$var6answer = '';
									$var7answer = '';
									$var8answer = '';
									$var9answer = '';
									$var10answer = '';
									$var11answer = '';
									$var12answer = '';
									$var13answer = '';
									$var14answer = '';
									$var15answer = '';
									$var16answer = '';
									$var17answer = '';
									$var18answer = '';
									$var19answer = '';
									$var20answer = '';
									$var21answer = '';
									$var22answer = '';
									$var23answer = '';
									$var24answer = '';
									$var25answer = '';
									$var26answer = '';
									$var27answer = '';
									$var28answer = '';
									$var29answer = '';
									$var30answer = '';

									foreach ($datajawabanlistkolom1a as $k1) {
										$var1 = $k1->listjawaban;
										$var1answer = $k1->jawabanbenar;
									}
									foreach ($datajawabanlistkolom2a as $k2) {
										$var2 = $k2->listjawaban;
										$var2answer = $k2->jawabanbenar;
									}
									foreach ($datajawabanlistkolom3a as $k3) {
										$var3 = $k3->listjawaban;
										$var3answer = $k3->jawabanbenar;
									}
									foreach ($datajawabanlistkolom4a as $k4) {
										$var4 = $k4->listjawaban;
										$var4answer = $k4->jawabanbenar;
									}
									foreach ($datajawabanlistkolom5a as $k5) {
										$var5 = $k5->listjawaban;
										$var5answer = $k5->jawabanbenar;
									}
									foreach ($datajawabanlistkolom6a as $k6) {
										$var6 = $k6->listjawaban;
										$var6answer = $k6->jawabanbenar;
									}
									foreach ($datajawabanlistkolom7a as $k7) {
										$var7 = $k7->listjawaban;
										$var7answer = $k7->jawabanbenar;
									}
									foreach ($datajawabanlistkolom8a as $k8) {
										$var8 = $k8->listjawaban;
										$var8answer = $k8->jawabanbenar;
									}
									foreach ($datajawabanlistkolom9a as $k9) {
										$var9 = $k9->listjawaban;
										$var9answer = $k9->jawabanbenar;
									}
									foreach ($datajawabanlistkolom10a as $k10) {
										$var10 = $k10->listjawaban;
										$var10answer = $k10->jawabanbenar;
									}
									foreach ($datajawabanlistkolom1b as $k11) {
										$var11 = $k11->listjawaban;
										$var11answer = $k11->jawabanbenar;
									}
									foreach ($datajawabanlistkolom2b as $k12) {
										$var12 = $k12->listjawaban;
										$var12answer = $k12->jawabanbenar;
									}
									foreach ($datajawabanlistkolom3b as $k13) {
										$var13 = $k13->listjawaban;
										$var13answer = $k13->jawabanbenar;
									}
									foreach ($datajawabanlistkolom4b as $k14) {
										$var14 = $k14->listjawaban;
										$var14answer = $k14->jawabanbenar;
									}
									foreach ($datajawabanlistkolom5b as $k15) {
										$var15 = $k15->listjawaban;
										$var15answer = $k15->jawabanbenar;
									}
									foreach ($datajawabanlistkolom6b as $k16) {
										$var16 = $k16->listjawaban;
										$var16answer = $k16->jawabanbenar;
									}
									foreach ($datajawabanlistkolom7b as $k17) {
										$var17 = $k17->listjawaban;
										$var17answer = $k17->jawabanbenar;
									}
									foreach ($datajawabanlistkolom8b as $k18) {
										$var18 = $k18->listjawaban;
										$var18answer = $k18->jawabanbenar;
									}
									foreach ($datajawabanlistkolom9b as $k19) {
										$var19 = $k19->listjawaban;
										$var19answer = $k19->jawabanbenar;
									}
									foreach ($datajawabanlistkolom10b as $k20) {
										$var20 = $k20->listjawaban;
										$var20answer = $k20->jawabanbenar;
									}
									foreach ($datajawabanlistkolom1c as $k21) {
										$var21 = $k21->listjawaban;
										$var21answer = $k21->jawabanbenar;
									}
									foreach ($datajawabanlistkolom2c as $k22) {
										$var22 = $k22->listjawaban;
										$var22answer = $k22->jawabanbenar;
									}
									foreach ($datajawabanlistkolom3c as $k23) {
										$var23 = $k23->listjawaban;
										$var23answer = $k23->jawabanbenar;
									}
									foreach ($datajawabanlistkolom4c as $k24) {
										$var24 = $k24->listjawaban;
										$var24answer = $k24->jawabanbenar;
									}
									foreach ($datajawabanlistkolom5c as $k25) {
										$var25 = $k25->listjawaban;
										$var25answer = $k25->jawabanbenar;
									}
									foreach ($datajawabanlistkolom6c as $k26) {
										$var26 = $k26->listjawaban;
										$var26answer = $k26->jawabanbenar;
									}
									foreach ($datajawabanlistkolom7c as $k27) {
										$var27 = $k27->listjawaban;
										$var27answer = $k27->jawabanbenar;
									}
									foreach ($datajawabanlistkolom8c as $k28) {
										$var28 = $k28->listjawaban;
										$var28answer = $k28->jawabanbenar;
									}
									foreach ($datajawabanlistkolom9c as $k29) {
										$var29 = $k29->listjawaban;
										$var29answer = $k29->jawabanbenar;
									}
									foreach ($datajawabanlistkolom10c as $k30) {
										$var30 = $k30->listjawaban;
										$var30answer = $k30->jawabanbenar;
									}
									$u = $var1.'-'.$var2.'-'.$var3.'-'.$var4.'-'.$var5.'-'.$var6.'-'.$var7.'-'.$var8.'-'.$var9.'-'.$var10.'-'.$var11.'-'.$var12.'-'.$var13.'-'.$var14.'-'.$var15.'-'.$var16.'-'.$var17.'-'.$var18.'-'.$var19.'-'.$var20.'-'.$var21.'-'.$var22.'-'.$var23.'-'.$var24.'-'.$var25.'-'.$var26.'-'.$var27.'-'.$var28.'-'.$var29.'-'.$var30;
									$ans = $var1answer.'-'.$var2answer.'-'.$var3answer.'-'.$var4answer.'-'.$var5answer.'-'.$var6answer.'-'.$var7answer.'-'.$var8answer.'-'.$var9answer.'-'.$var10answer.'-'.$var11answer.'-'.$var12answer.'-'.$var13answer.'-'.$var14answer.'-'.$var15answer.'-'.$var16answer.'-'.$var17answer.'-'.$var18answer.'-'.$var19answer.'-'.$var20answer.'-'.$var21answer.'-'.$var22answer.'-'.$var23answer.'-'.$var24answer.'-'.$var25answer.'-'.$var26answer.'-'.$var27answer.'-'.$var28answer.'-'.$var29answer.'-'.$var30answer;

									$owo = array_map('trim',explode('-', $u));
									$anl = array_map('trim',explode('-', $ans));

									foreach ($owo as $jl) {
										$l = explode(' ', $jl);

									 ?>
									<tr class="barisnya<?php echo $jlb ?> barisss" hidden>
										<td>
											<div class="jawabanlist" style="width: 100%; margin-top: 3vh">
												<div class="jawabanlisgroup" style="display: flex; flex-direction: row; width: 100%;">
													<div class="wrapperjawabanlist" style="justify-content: space-between;width: 30%;text-align: center;">
														<h6><?php echo $l[0] ?></h6>
													</div>
													<div class="wrapperjawabanlist" style="justify-content: space-between;width: 30%;text-align: center;">
														<h6><?php echo $l[1] ?></h6>
													</div>
													<div class="wrapperjawabanlist" style="justify-content: space-between;width: 30%;text-align: center;">
														<h6><?php echo $l[2] ?></h6>
													</div>
													<div class="wrapperjawabanlist" style="justify-content: space-between;width: 30%;text-align: center;">
														<h6><?php echo $l[3] ?></h6>
													</div>
												</div>
											</div>
											<div class="radioform">
												<div class="radiogroup">
													<input value="A" type="radio" id="option-one<?php echo'baris'.$jlb ?>" name="selector<?php echo'baris'.$jlb ?>" class="selector<?php echo 'baris'.$jlb ?>">
													<label onclick="setTimeout(function(){nextquest()},500);" for="option-one<?php echo'baris'.$jlb ?>">A</label>
													<input value="B" type="radio" id="option-two<?php echo'baris'.$jlb ?>" name="selector<?php echo'baris'.$jlb ?>" class="selector<?php echo 'baris'.$jlb ?>">
													<label onclick="setTimeout(function(){nextquest()},500);" for="option-two<?php echo'baris'.$jlb ?>">B</label>
													<input value="C" type="radio" id="option-three<?php echo'baris'.$jlb ?>" name="selector<?php echo'baris'.$jlb ?>" class="selector<?php echo 'baris'.$jlb ?>">
													<label onclick="setTimeout(function(){nextquest()},500);" for="option-three<?php echo'baris'.$jlb ?>">C</label>
													<input value="D" type="radio" id="option-four<?php echo'baris'.$jlb ?>" name="selector<?php echo'baris'.$jlb ?>" class="selector<?php echo 'baris'.$jlb ?>">
													<label onclick="setTimeout(function(){nextquest()},500);" for="option-four<?php echo'baris'.$jlb ?>">D</label>
												</div>
											</div>
										</td>
									</tr>
								<?php 
								$jlb++;
							} ?>
								</table>
								<table hidden="true">
									<?php 

									$g = 0;
									foreach ($anl as $keyan) {
										$a = explode(' ', $keyan);
										?>
										<tr class="barisjawabandandijawab">
											<td class="realanswer"><?php echo $a[$g] ?></td>
											<td class="answered">-</td>
										</tr>
										<?php
									}


									?>
								</table>
								<table class="tabelbesttime">
									<tr>
										<td></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="card-footer" id="footercard">
						<button class="btn btn-primary btn-md" id="startbuttontest" type="button" style="float: right;">Mulai Test</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>