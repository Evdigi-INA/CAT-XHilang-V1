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
			<div class="col-8">
				<div class="card">
					<div class="card-header">
						<h2 class="card-title">Data Peserta</h2>
					</div>
					<div class="card-body">
						<table class="table table-bordered">
							<tr>
								<td>No. KTP</td>
								<td>:</td>
								<td><?php echo $uwu->noktp; ?></td>
							</tr>
							<tr>
								<td>Nama Lengkap</td>
								<td>:</td>
								<td><?php echo $uwu->namleng; ?></td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td>:</td>
								<td><?php echo $uwu->jk; ?></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td>:</td>
								<td><?php echo $uwu->almt; ?></td>
							</tr>
							<tr>
								<td>Username</td>
								<td>:</td>
								<td><?php echo $uwu->username; ?></td>
							</tr>
							<tr>
								<td>Role</td>
								<td>:</td>
								<td><?php echo $uwu->role; ?></td>
							</tr>
						</table>		
					</div>
				</div>
				
			</div>
			<div class="col-4">
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
	<br id="card-chart">
	<div class="container">
		<div class="card" style="height: 100%">
			<div class="card-header">
				<h3><span><i class="fas fa-chart-bar fa-fw fa-md"></i></span> Grafik Nilai</h3>
			</div>
			<div class="card-body">
				<div class="container score-chart-wrapper" style="position: relative;">
					<div class="block" style="display: block;
    background: rgb(76 76 76 / 69%);;
    height: 100%;
    width: 100%;
    margin: auto;
    position: absolute;
    left: -2px;
    z-index: 9999;">
						<div style="margin-top: 15%;text-align: center; color: white;"><h2><i class="fas fa-exclamation-triangle fa-fw"></i> Pilih Data Nilai Terlebih dahulu</h2></div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<canvas id="score-chart-s0jl" class="charteachscorecolumn" height="350" style="margin-top: 50px;"></canvas>
							<center><p>Soal Angka</p></center>
						</div>
						<div class="col-sm-4">
							<canvas id="score-chart-s1jl" class="charteachscorecolumn" height="400"></canvas>
							<center><p>Soal Huruf</p></center>
						</div>
						<div class="col-sm-4">
							<canvas id="score-chart-s2jl" class="charteachscorecolumn" height="350" style="margin-top: 50px;"></canvas>
							<center><p>Soal Simbol</p></center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Nilai
          </div>
          <div class="card-body">
            
	          <table class="table table-bordered" id="tabelnilaipeserta" style="width: 100%">
	            <thead>
	              <tr>
	                <th hidden="true">No.</th>
	                <th hidden="true">Username</th>
	                <th>Nilai Soal Angka</th>
	                <th>Nilai Soal Huruf</th>
	                <th>Nilai Soal Simbol</th>
	                <th>Rata-Rata</th>
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
	                  <td hidden="true"><?php echo $no++ ?></td>
	                  <td hidden="true"><?php echo $u->username; ?></td>
	                  <td><?php echo $u->nilai1; ?></td>
	                  <td><?php echo $u->nilai2; ?></td>
	                  <td><?php echo $u->nilai3; ?></td>
	                  <td><?php echo $rata2; ?></td>
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
	              </tr>
	            <?php } ?>
	            </tbody>
	          </table>
            
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
	</div>
</div>