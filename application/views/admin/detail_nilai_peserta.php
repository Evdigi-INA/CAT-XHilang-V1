<div class="container" style="background-color: #ececec;
    border-radius: 5px;">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/Admin_Controller/index' ?>">Menu Utama</a></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/Admin_Controller/daftar_peserta' ?>">Daftar Peserta</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Peserta</li>
    </ol>
  </nav>
</div>

<div class="container">
	<div class="container">
		<div class="row">
			<?php 
			foreach ($infop as $uwu) {
			
			?>
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<h2 class="card-title">Data Peserta</h2>
					</div>
					<div class="card-body">
						<table class="table table-bordered">
							<tr>
								<td style="font-weight: bold;">No. KTP</td>
								<td><?php echo $uwu->noktp; ?></td>
							</tr>
							<tr>
								<td style="font-weight: bold;">Nama Lengkap</td>
								<td><?php echo $uwu->namleng; ?></td>
							</tr>
							<tr>
								<td style="font-weight: bold;">Jenis Kelamin</td>
								<td><?php echo $uwu->jk; ?></td>
							</tr>
							<tr>
								<td style="font-weight: bold;">Alamat</td>
								<td><?php echo $uwu->almt; ?></td>
							</tr>
							<tr>
								<td style="font-weight: bold;">Username</td>
								<td><?php echo $uwu->username; ?></td>
							</tr>
							<tr>
								<td style="font-weight: bold;">Role</td>
								<td><?php echo $uwu->role; ?></td>
							</tr>
						</table>		
					</div>
				</div>
				
			</div>
			<div class="col-md-4">
				<div class="card"  style="height: 100%">
					<div class="card-header">
						<h3><span><i class="fas fa-trophy fa-fw fa-md"></i></span> Skor Tertinggi</h3>
					</div>
					<div class="card-body">
						<?php 
						$nilai1 = $uwu->n1;
						$nilai2 = $uwu->n2;
						$nilai3 = $uwu->n3;
						if ($nilai1 > $nilai2 && $nilai1 > $nilai3) {
							echo '
								<h2 style="text-align: center; padding: 15px; font-size: 90px;">'.$nilai1.'</h2><br>
								<p style="text-align: center;">Skor Nilai Angka Hilang</p>
							';
						} elseif ($nilai2 > $nilai1 && $nilai2 > $nilai1) {
							echo '
								<h2 style="text-align: center;padding: 15px; font-size: 90px;">'.$nilai2.'</h2><br>
								<p style="text-align: center;">Skor Nilai Huruf Hilang</p>
							';
						} else {
							echo '
								<h2 style="text-align: center;padding: 15px; font-size: 90px;">'.$nilai3.'</h2><br>
								<p style="text-align: center;">Skor Nilai Simbol Hilang</p>
							';
						} ?>
					</div>
				</div>
			</div>
			<?php 
					}
					?>
		</div>
	</div>
	<div class="container-fluid" style="margin-top: 20px;">
		<div class="row">
			<div class="col-md-4">
				<div class="card mb-3">
		          <div class="card-header">
		            <i class="fas fa-table"></i>
		            Data Nilai
		          </div>
		          <div class="card-body">
		            
			          <table class="table table-bordered" id="tabelnilaipeserta" style="width: 100%">
			            <thead>
			              <tr>
			                <th>No.</th>
			                <th hidden="true">Username</th>
			                <th hidden="true">Nilai Soal Angka</th>
			                <th hidden="true">Nilai Soal Huruf</th>
			                <th hidden="true">Nilai Soal Simbol</th>
			                <th hidden="true">Rata-Rata</th>
			                <th>Tanggal</th>
			                <th hidden="true">1</th>
			                <th hidden="true">1</th>
			                <th hidden="true">1</th>
			                <th hidden="true">1</th>
			                <th hidden="true">1</th>
			                <th hidden="true">1</th>
			                <th hidden="true">1</th>
			                <th hidden="true">1</th>
			                <th hidden="true">1</th>
			                <th hidden="true">1</th>
			                <th hidden="true">1</th>
			                <th hidden="true">1</th>
			                <th hidden="true">1</th>
			                <th hidden="true">1</th>
			                <th hidden="true">1</th>
			              </tr>
			            </thead>
			            <tbody>
			              <?php
			              $no = 1;
			              foreach($dtlnilailist as $u)
			              {
			              	$rata2 = (floatval($u->nilai1)+floatval($u->nilai2)+floatval($u->nilai3))/3;
			               ?>
			              <tr style="cursor: pointer;">
			                  <td><?php echo $no++ ?></td>
			                  <td hidden="true"><?php echo $u->username; ?></td>
			                  <td hidden="true"><?php echo $u->nilai1; ?></td>
			                  <td hidden="true"><?php echo $u->nilai2; ?></td>
			                  <td hidden="true"><?php echo $u->nilai3; ?></td>
			                  <td hidden="true"><?php echo $rata2; ?></td>
			                  <td><?php echo $u->tanggal; ?></td>
			                  <td hidden="true"><?php echo $u->s0jlcorrect; ?></td>
			                  <td hidden="true"><?php echo $u->s0jlwrong; ?></td>
			                  <td hidden="true"><?php echo $u->s0jlanswered; ?></td>
			                  <td hidden="true"><?php echo $u->s0jlnotanswered; ?></td>
			                  <td hidden="true"><?php echo $u->s1jlcorrect; ?></td>
			                  <td hidden="true"><?php echo $u->s1jlwrong; ?></td>
			                  <td hidden="true"><?php echo $u->s1jlanswered; ?></td>
			                  <td hidden="true"><?php echo $u->s1jlnotanswered; ?></td>
			                  <td hidden="true"><?php echo $u->s2jlcorrect; ?></td>
			                  <td hidden="true"><?php echo $u->s2jlwrong; ?></td>
			                  <td hidden="true"><?php echo $u->s2jlanswered; ?></td>
			                  <td hidden="true"><?php echo $u->s2jlnotanswered; ?></td>
			                  <td hidden="true"><?php echo $u->performancescores0jl; ?></td>
			                  <td hidden="true"><?php echo $u->performancescores1jl; ?></td>
			                  <td hidden="true"><?php echo $u->performancescores2jl; ?></td>
			              </tr>
			            <?php } ?>
			            </tbody>
			          </table>
		            
		          </div>
		          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
		        </div>
			</div>
			<div class="col-md-8">
				<div id="card-chart"></div>
				<div class="container">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<h4>Nilai</h4>
									<canvas id="graph1" class="graphnilaialljs" height="250"></canvas>
								</div>
								<div class="col-md-6">
									<canvas id="graph2" class="graphjsclasified" height="300"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container" style="margin-top: 20px;">
					<div class="card" style="height: 100%">
						<div class="card-header">
							<h3><span><i class="fas fa-chart-bar fa-fw fa-md"></i></span> Grafik Keseluruhan dan Performa</h3>
						</div>
						<div class="card-body">
							<ul class="nav nav-pills" style="margin-bottom: 20px; padding: 0 15vh;">
							    <li style="margin: auto;"><a class="btn btn-primary active" data-toggle="pill" href="#soalangka">Soal Angka</a></li>
							    <li style="margin: auto;"><a class="btn btn-primary" data-toggle="pill" href="#soalhuruf">Soal Huruf</a></li>
							    <li style="margin: auto;"><a class="btn btn-primary" data-toggle="pill" href="#soalsimbol">Soal Angka</a></li>
							  </ul>
							  
							  <div class="tab-content" style="position: relative;">
							  	<div class="block" style="display: block;
			    background: rgb(76 76 76 / 69%);;
			    height: 100%;
			    width: 100%;
			    margin: auto;
			    position: absolute;
			    left: -2px;
			    z-index: 9999;">
									<div style="margin-top: 25%;text-align: center; color: white;"><h2><i class="fas fa-exclamation-triangle fa-fw"></i> Pilih Data Nilai Terlebih dahulu</h2></div>
								</div>
							    <div id="soalangka" class="tab-pane fade in active show">
							    	<div class="container score-chart-wrapper" style="position: relative;">
										<center><h3>Soal Huruf</h3></center>
										<canvas id="score-chart-s0jl" class="charteachscorecolumn" height="190"></canvas>
										<canvas id="performance-s0jl" height="190"></canvas>
									</div>
							    </div>
							    <div id="soalhuruf" class="tab-pane fade">
							    	<div class="container score-chart-wrapper" style="position: relative;">
										<center><h3>Soal Angka</h3></center>
							      		<canvas id="score-chart-s1jl" class="charteachscorecolumn" height="190"></canvas>
							      		<canvas id="performance-s1jl" height="190"></canvas>
							  		</div>
							    </div>
							    <div id="soalsimbol" class="tab-pane fade">
							      	<div class="container score-chart-wrapper" style="position: relative;">
							      		<center><h3>Soal Simbol</h3></center>
							      		<canvas id="score-chart-s2jl" class="charteachscorecolumn" height="190"></canvas>
							      		<canvas id="performance-s2jl" height="190"></canvas>
							 		</div>
							    </div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<br>
	<div class="container">
		
	</div>
</div>