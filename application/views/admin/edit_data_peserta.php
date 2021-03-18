     <?php
        foreach ($qeditpeserta as $u) 
        {
        ?>

<!-- Modal HTML Markup -->
<div id="modalEditPeserta<?php echo "$u->id_user"?>" class="modal fade editPesertamodal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form role="form" method="POST" action="<?php echo site_url('admin/Admin_Controller/update_peserta') ?>" enctype="multipart/form-data">
                <div class="modal-header">
                    <h1 class="modal-title">Edit Data Peserta: <?php echo $u->no_ktp; ?></h1>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="control-label">Nomor Identitas</label>
                                    <div>
                                        <input type="text" class="form-control input-lg" name="tbidnomor" value="<?php echo $u->no_ktp ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Nama Lengkap</label>
                                    <div>
                                        <input type="text" class="form-control input-lg" name="tbnamalengkap" value="<?php echo $u->nama_lengkap ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Jenis Kelamin</label>
                                    <div>
                                        <select class="custom-select custom-select-sm" name="tbjeniskelamin">
                                          <option value="Laki-Laki" <?php if ($u->jenis_kelamin == 'Laki-Laki') { echo "selected='true'"; }else {echo "";} ?>>Laki-Laki</option>
                                          <option value="Perempuan" <?php if ($u->jenis_kelamin == 'Perempuan') { echo "selected='true'"; }else {echo "";} ?>>Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Alamat</label>
                                    <div>
                                        <textarea name="tbalamat"><?php echo $u->alamat ?></textarea>
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
                                                <input type="text" class="form-control input-lg" name="tbiduser" value="<?php echo $u->id_user ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Username</label>
                                            <div>
                                                <input type="text" class="form-control input-lg" name="tbusername" value="<?php echo $u->username ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Password</label>
                                            <div>
                                                <input type="text" class="form-control input-lg" name="tbpassword" value="<?php echo $u->password ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Role</label>
                                            <div>
                                                <select class="custom-select custom-select-sm" name="tbrole">
                                                  <option value="admin" <?php if ($u->role == 'admin') { echo "selected='true'"; }else {echo "";} ?>>Admin</option>
                                                  <option value="peserta" <?php if ($u->role == 'peserta') { echo "selected='true'"; }else {echo "";} ?>>Peserta Test</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form> 
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php
}
?>

