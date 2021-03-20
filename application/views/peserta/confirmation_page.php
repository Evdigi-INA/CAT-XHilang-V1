<div class="container contain-wrapper">
	<div class="container">
		<div class="confirmation-wrapper" style="margin: auto;">
			<form role="form" method="POST" action="" method="post" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						<h4 id="judulcard">Konfirmasi Mulai Test <p id="jenissoalnya"></p></h4>
					</div>
					<div class="card-body" id="bodycard">
						<?php
						$arrayNumber = range(1, 900);
						$baris = $arrayNumber;
						?>
						<table class="table table-bordered">
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

									foreach ($datajawabanlistkolom1a as $k1) {
										$var1 = $k1->listjawaban;
									}
									foreach ($datajawabanlistkolom1a as $k1) {
										$var1 = $k1->listjawaban;
									}
									foreach ($datajawabanlistkolom1a as $k1) {
										$var1 = $k1->listjawaban;
									}
									foreach ($datajawabanlistkolom1a as $k1) {
										$var1 = $k1->listjawaban;
									}
									foreach ($datajawabanlistkolom1a as $k1) {
										$var1 = $k1->listjawaban;
									}
									foreach ($datajawabanlistkolom1a as $k1) {
										$var1 = $k1->listjawaban;
									}
									foreach ($datajawabanlistkolom1a as $k1) {
										$var1 = $k1->listjawaban;
									}
									foreach ($datajawabanlistkolom1a as $k1) {
										$var1 = $k1->listjawaban;
									}
									foreach ($datajawabanlistkolom1a as $k1) {
										$var1 = $k1->listjawaban;
									}
									echo $var1;

									foreach ($jawabanlist as $jl) {
										$jlarray1 = explode('-', $jl->listjawaban);

										foreach ($jlarray1 as $kjla1) {
											$l = explode(' ', $kjla1);

									 ?>
									<tr class="barisnya<?php echo $jlb ?> barisss" hidden>
										<td>
											<div class="radioform">
											  <div class="radiogroup">
											    <input type="radio" id="option-onekolom<?php echo'baris'.$jlb ?>" name="selectorkolom<?php echo'baris'.$jlb ?>">
											    <label for="option-one<?php echo'baris'.$jlb ?>"><?php echo $l[0] ?></label>
											    <input type="radio" id="option-two<?php echo'baris'.$jlb ?>" name="selector<?php echo'baris'.$jlb ?>">
											    <label for="option-two<?php echo'baris'.$jlb ?>"><?php echo $l[1] ?></label>
											    <input type="radio" id="option-three<?php echo'baris'.$jlb ?>" name="selector<?php echo'baris'.$jlb ?>">
											    <label for="option-three<?php echo'baris'.$jlb ?>"><?php echo $l[2] ?></label>
											    <input type="radio" id="option-four<?php echo'baris'.$jlb ?>" name="selector<?php echo'baris'.$jlb ?>">
											    <label for="option-four<?php echo'baris'.$jlb ?>"><?php echo $l[3] ?></label>
											    <input type="radio" id="option-five<?php echo'baris'.$jlb ?>" name="selector<?php echo'baris'.$jlb ?>">
											    <label for="option-five<?php echo'baris'.$jlb ?>"><?php echo $l[4] ?></label>
											  </div>
											</div>
										</td>
									</tr>
								<?php 
								$jlb++;
								}
								break;
							} ?>
								</table>
							</div>
						</div>
					</div>
					<div class="card-footer" id="footercard">
						<button class="btn btn-primary btn-md" id="tombolnya" style="float: right; display: none;">Mulai Test</button>
						<button class="btn btn-primary btn-md" id="nextbutton" type="button" style="float: right;">Selanjutnya</button>
						<button class="btn btn-primary btn-md" id="prevbutton" type="button" style="float: right;">Sebelumnya</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>