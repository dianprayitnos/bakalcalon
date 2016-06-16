
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">          
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Profil</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Profil admin</h3>
                </div>
                
                <form class="form-horizontal" method="POST" action="<?php echo base_url("index.php/profil/edit"); ?>">
                <div class="box-body">
                  <?php if($this->session->flashdata('berhasil')): ?>
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4>  <i class="icon fa fa-check"></i> Sukses!</h4>
                      <?php echo $this->session->flashdata('berhasil');?>
                    </div>
                  <?php endif; ?>
                  <?php if($this->session->flashdata('gagal')): ?>
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4>  <i class="icon fa fa-warning"></i> Gagal!</h4>
                      <?php echo $this->session->flashdata('gagal');?>
                    </div>
                  <?php endif; ?>

                  <input type="hidden" name="id_admin" value="<?php echo $admin->id_admin; ?>">

                  <div class="form-group">
                    <label for="nama_konsulen" class="col-md-3 control-label">Nama *</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama admin" value="<?php echo $admin->nama; ?>"required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nip" class="col-md-3 control-label">NO KTP *</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="NO KTP" value="<?php echo $admin->no_ktp; ?>"required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="tempat_lahir" class="col-md-3 control-label">Keterangan*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" value="<?php echo $admin->ket; ?>"required>
                    </div>
                  </div>                  
                
                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                    <input type="reset" class="btn btn-default btn-flat" value="Reset">
                  </center>
                </div>
                </form>
              </div>              
            </div>
            
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
