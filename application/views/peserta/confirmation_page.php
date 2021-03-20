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
						<table class="table table-bordered" style="width: 34vh;margin: auto;">
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
									$u = $var1.'-'.$var2.'-'.$var3.'-'.$var4.'-'.$var5.'-'.$var6.'-'.$var7.'-'.$var8.'-'.$var9.'-'.$var10;
									$owo = array_map('trim',explode('-', $u));

									foreach ($owo as $jl) {
										$l = explode(' ', $jl);


									 ?>
									<tr class="barisnya<?php echo $jlb ?> barisss" hidden>
										<td>
											<div class="radioform">
											  <div class="radiogroup">
											    <input type="radio" id="option-onekolom<?php echo'baris'.$jlb ?>" name="selectorkolom<?php echo'baris'.$jlb ?>">
											    <label onclick="setTimeout(function(){nextquest()},500);" for="option-one<?php echo'baris'.$jlb ?>"><?php echo $l[0] ?></label>
											    <input type="radio" id="option-two<?php echo'baris'.$jlb ?>" name="selector<?php echo'baris'.$jlb ?>">
											    <label onclick="setTimeout(function(){nextquest()},500);" for="option-two<?php echo'baris'.$jlb ?>"><?php echo $l[1] ?></label>
											    <input type="radio" id="option-three<?php echo'baris'.$jlb ?>" name="selector<?php echo'baris'.$jlb ?>">
											    <label onclick="setTimeout(function(){nextquest()},500);" for="option-three<?php echo'baris'.$jlb ?>"><?php echo $l[2] ?></label>
											    <input type="radio" id="option-four<?php echo'baris'.$jlb ?>" name="selector<?php echo'baris'.$jlb ?>">
											    <label onclick="setTimeout(function(){nextquest()},500);" for="option-four<?php echo'baris'.$jlb ?>"><?php echo $l[3] ?></label>
											  </div>
											</div>
										</td>
									</tr>
								<?php 
								$jlb++;
							} ?>
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