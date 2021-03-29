<div class="container" style="background-color: #ececec;
    border-radius: 5px;">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/Admin_Controller/index' ?>">Menu Utama</a></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/Admin_Controller/laporan_list' ?>">Laporan</a></li>
      <li class="breadcrumb-item active" aria-current="page">Peserta Belum Test</li>
    </ol>
  </nav>
</div>
<div class="wrapper-daftar-peserta" style="height: 85vh">
  <div class="container">
    
  </div>
  <div class="container">
    <div class="table-wrapper" style="background-color: #fff; padding: 12px;">
      <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Peserta Belum Test
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTablePeserta" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th hidden="true">No.</th>
                    <th>No. Identitas</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>JK</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach($listpesertabelumdinilai as $u)
                  { ?>
                  <tr>
                      <td hidden="true"><?php echo $no++ ?></td>
                      <td><a href="<?php echo base_url().'admin/Admin_Controller/detail_peserta/'.$u->id_user?>"><?php echo $u->no_ktp; ?></a></td>
                      <td><?php echo $u->nama_lengkap; ?></td>
                      <td><?php echo $u->alamat; ?></td>
                      <td><?php echo $u->jenis_kelamin; ?></td>
                      <td style="text-align: center;"><span class="badge badge-warning">Belum Test</span></td>
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
</div>

