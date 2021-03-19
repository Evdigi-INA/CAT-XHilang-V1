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
						$arrayNumber = range(1, 300);
						$baris = $arrayNumber;

						$kolom = array(1,2,3,4,5,6,7,8,9.10);
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
									foreach ($baris as $b) {

									 ?>
									<tr class="barisnya<?php echo $b ?> barisss" hidden>
										<td>
											<div class="radioform">
											  <div class="radiogroup">
											    <input type="radio" id="option-onekolom<?php echo'baris'.$b ?>" name="selectorkolom<?php echo'baris'.$b ?>">
											    <label for="option-one<?php echo'baris'.$b ?>">A</label>
											    <input type="radio" id="option-two<?php echo'baris'.$b ?>" name="selector<?php echo'baris'.$b ?>">
											    <label for="option-two<?php echo'baris'.$b ?>">B</label>
											    <input type="radio" id="option-three<?php echo'baris'.$b ?>" name="selector<?php echo'baris'.$b ?>">
											    <label for="option-three<?php echo'baris'.$b ?>">C</label>
											    <input type="radio" id="option-four<?php echo'baris'.$b ?>" name="selector<?php echo'baris'.$b ?>">
											    <label for="option-four<?php echo'baris'.$b ?>">D</label>
											    <input type="radio" id="option-five<?php echo'baris'.$b ?>" name="selector<?php echo'baris'.$b ?>">
											    <label for="option-five<?php echo'baris'.$b ?>">E</label>
											  </div>
											</div>
										</td>
									</tr>
								<?php } ?>
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