
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">          
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active"><a href="<?php echo base_url('index.php/kriteria'); ?>">Bobot</a></li>
            <li class="active">Ubah</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Ubah Bobot</h3>
                </div>

                <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/Bobot/edit/' . $Bobot->id_bobot); ?>">
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


                  <input type="hidden" name = "id" value =<?php echo $id;?>>
                  <div class="form-group">
                    <label for="nama_Bobot" class="col-md-3 control-label">Nama Bobot*</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" id="nama" name="nama_Bobot"  value="<?php echo $Bobot->nama_bobot; ?>"required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="bobot" class="col-md-3 control-label">Bobot *</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" id="bobot" name="bobot"  value="<?php echo $Bobot->bobot; ?>"required>
                    </div>
                  </div>

                  

                                      
                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Simpan</button>                    
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/kriteria'); ?>">Kembali</a>
                  </center>
                </div>
                </form>
              </div>              
            </div>
                          
              </div>              
            </div>            
            </div>            
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
