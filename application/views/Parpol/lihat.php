
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Parpol</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengguna/Parpol'); ?>">Pengguna</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengguna/Parpol'); ?>">Parpol</a></li>
            <li class="active">Lihat</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Data Parpol</h3>
                </div>

                <div class="box-body form-horizontal">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Username</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $Parpol->username; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Nama Parpol</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $Parpol->nama_parpol; ?></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Nomor Telepon</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $Parpol->no_tlp; ?></label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Alamat</label>
                    <div class="col-md-8">
                      <label class="form-control-static"><?php echo $Parpol->alamat; ?></label>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $Parpol->email; ?></label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Keterangan</label>
                    <div class="col-md-9">
                      <label class="form-control-static"><?php echo $Parpol->keterangan; ?></label>
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  <center>
                    <a class="btn btn-warning btn-flat" href="<?php echo base_url('index.php/pengguna/Parpol/ubah') . '/' . $Parpol->id_parpol; ?>">Ubah</a>
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/pengguna/Parpol'); ?>">Kembali</a>
                  </center>
                </div>
              </div>  
            </div>
            
            </div>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
