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
				<div class="card">
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
								<h2 style="text-align: center;">'.$nilai1.'</h2><br>
								<p>Skor Nilai Angka Hilang</p>
							';
						} elseif ($nilai2 > $nilai1 && $nilai2 > $nilai1) {
							echo '
								<h2 style="text-align: center;">'.$nilai2.'</h2><br>
								<p>Skor Nilai Huruf Hilang</p>
							';
						} else {
							echo '
								<h2 style="text-align: center;">'.$nilai3.'</h2><br>
								<p>Skor Nilai Simbol Hilang</p>
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
	<br>
	<div class="container">
		<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Nilai
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="tabelnilaipeserta" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th hidden="true">No.</th>
                    <th hidden="true">Username</th>
                    <th>Nilai Soal Angka</th>
                    <th>Nilai Soal Huruf</th>
                    <th>Nilai Soal Simbol</th>
                    <th>Rata-Rata</th>
                    <th>Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach($dtlnilailist as $u)
                  {
                  	$rata2 = (intval($u->nilai1)+intval($u->nilai2)+intval($u->nilai3))/3;
                   ?>
                  <tr>
                      <td hidden="true"><?php echo $no++ ?></td>
                      <td hidden="true"><?php echo $u->username; ?></td>
                      <td><?php echo $u->nilai1; ?></td>
                      <td><?php echo $u->nilai2; ?></td>
                      <td><?php echo $u->nilai3; ?></td>
                      <td><?php echo $rata2; ?></td>
                      <td><?php echo $u->tanggal; ?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
	</div>
</div>