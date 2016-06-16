
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Parpol</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengguna/Parpol'); ?>">Pengguna</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengguna/Parpol'); ?>">Parpol</a></li>
            <li class="active">Ubah</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Ubah Parpol</h3>
                </div>

                <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/pengguna/Parpol/edit/' . $Parpol->id_parpol); ?>">
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

                  <?php if(validation_errors()): ?>
                    <div class="alert alert-danger">
                      <h4>  <i class="icon fa fa-warning"></i> Gagal!</h4>
                      <?php echo validation_errors(); ?>
                    </div>
                  <?php endif; ?>
                </div>
                  
                  <div class="form-group">
                    <label for="nama_parpol" class="col-md-3 control-label">Nama *</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" id="nama" name="nama_parpol"  value="<?php echo $Parpol->nama_parpol; ?>"required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="Status" class="col-md-3 control-label">Status *</label>
                    <div class="col-md-8">
                      <select name = "status" class="form-control">
                        <?php if($Parpol->status == 0) :?>
                        <option value="0" selected>Tidak Aktif</option>
                        <option value="1">Aktif</option>
                      <?php else :?>
                        <option value="0">Tidak Aktif</option>
                        <option value="1" selected>Aktif</option>
                      <?php endif;?>
                      </select>
                    </div>
                  </div>

                                      
                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                    <input type="reset" class="btn btn-default btn-flat" value="Reset">
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/pengguna/Parpol'); ?>">Kembali</a>
                  </center>
                </div>
                </form>
              </div>              
            </div>


            <div class="col-sm-6 col-md-6">
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Password Parpol</h3>
                </div>
                
                <form class="form-horizontal" action="<?php echo base_url("index.php/pengguna/Parpol/edit_password/" . $Parpol->id_parpol); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="box-body">
                  <?php if($this->session->flashdata('berhasil_password')): ?>
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4>  <i class="icon fa fa-check"></i> Sukses!</h4>
                      <?php echo $this->session->flashdata('berhasil_password');?>
                    </div>
                  <?php endif; ?>
                  <?php if($this->session->flashdata('gagal_password')): ?>
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4>  <i class="icon fa fa-warning"></i> Gagal!</h4>
                      <?php echo $this->session->flashdata('gagal_password');?>
                    </div>
                  <?php endif; ?>

                  <div class="form-group">
                    <label for="username" class="col-md-3 control-label">Username*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $Parpol->username; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Password*</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Ubah Password</button>
                  </center>
                </div>
                </form>
              </div>              
            </div>            
            </div>            
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
