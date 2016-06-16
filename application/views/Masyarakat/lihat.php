
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Masyarakat</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengguna/Masyarakat'); ?>">Pengguna</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengguna/Masyarakat'); ?>">Masyarakat</a></li>
            <li class="active">Lihat</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <center><h2 class="box-title" style = "margin-top:10px;"><b>Data Masyarakat</b></h2></center>
                </div>

                <div class="box-body form-horizontal">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Username</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $Masyarakat->username; ?></label>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">NO KTP</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $Masyarakat->no_ktp; ?></label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Nama Masyarakat</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $Masyarakat->nama; ?></label>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">Jenis Kelamin</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $Masyarakat->jk; ?></label>
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label">Pekerjaan</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $Masyarakat->pekerjaan; ?></label>
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label">Alamat</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $Masyarakat->alamat; ?></label>
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label">Email</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $Masyarakat->email; ?></label>
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label">NO HP</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $Masyarakat->no_hp; ?></label>
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label">Status</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $Masyarakat->status; ?></label>
                    </div>
                  </div>

                  
                </div>

                <div class="box-footer">
                  <center>
                    <a class="btn btn-warning btn-flat" href="<?php echo base_url('index.php/pengguna/Masyarakat/ubah') . '/' . $Masyarakat->id_masyarakat; ?>">Ubah</a>
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/pengguna/Masyarakat'); ?>">Kembali</a>
                  </center>
                </div>
              </div>  
            </div>

            
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
