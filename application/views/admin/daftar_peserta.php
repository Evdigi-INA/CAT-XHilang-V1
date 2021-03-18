<div class="wrapper-daftar-peserta" style="height: 85vh">
  <div class="container">
    
  </div>
  <div class="container">
    <div class="table-wrapper" style="background-color: #fff; padding: 12px;">
      <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example
            <div style="float: right;">
              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalTambahPeserta"><span><i class="fas fa-plus fa-fw"></i></span></button>
            </div></div>
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
                    <th>Tindakan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach($listpeserta as $u)
                  { ?>
                  <tr>
                      <td hidden="true"><?php echo $no++ ?></td>
                      <td><?php echo $u->no_ktp; ?></td>
                      <td><?php echo $u->nama_lengkap; ?></td>
                      <td><?php echo $u->alamat; ?></td>
                      <td><?php echo $u->jenis_kelamin; ?></td>
                      <td style="text-align: center;"><div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn btn-primary"><span><i class="fas fa-eye fa-fw"></i></span></button>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="<?php echo "#modalEditPeserta".$u->id_user;?>"><span><i class="fas fa-edit fa-fw"></i></span></button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="<?php echo "#exampleModal".$u->id_user;?>"><span><i class="fas fa-trash fa-fw"></i></span></button>
                      </div></td>
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

<?php
foreach ($listpeserta as $k) {

 ?>
<div class="modal fade" id="exampleModal<?php echo $k->id_user; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        Yakin ingin menghapus peserta <b><?php echo $k->nama_lengkap;?>?</b>
                        <p style="color: red; font-size: 10px;">*Harap hati-hati dengan tindakan ini</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <?php
                        echo "<a class='btn btn-danger' href='hapus_peserta/$k->id_user'>Ya</a>";
                    ?>
                </div>
            </div>
        </div>
    </div>

  <?php } ?>

  <div id="modalTambahPeserta" class="modal fade tambahPesertamodal">
    <div class="modal-dialog modal-lg" role="document">
      <form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/tambah_peserta') ?>" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Tambah Peserta</h1>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                        <label class="control-label">Nomor Identitas</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="tbidnomor" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nama Lengkap</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="tbnamalengkap" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Jenis Kelamin</label>
                        <div>
                            <select class="custom-select custom-select-sm" name="tbjeniskelamin">
                              <option value="Laki-Laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Alamat</label>
                        <div>
                            <textarea name="tbalamat"></textarea>
                        </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Data Login</h2>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="control-label">ID User</label>
                                    <div>
                                        <input type="text" class="form-control input-lg" name="tbiduser" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Username</label>
                                    <div>
                                        <input type="text" class="form-control input-lg" name="tbusername">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Password</label>
                                    <div>
                                        <input type="text" class="form-control input-lg" name="tbpassword">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Role</label>
                                    <div>
                                        <select class="custom-select custom-select-sm" name="tbrole">
                                          <option value="admin">Admin</option>
                                          <option value="peserta">Peserta Test</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
                </div>
              </div>
            </div><!-- /.modal-content -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->