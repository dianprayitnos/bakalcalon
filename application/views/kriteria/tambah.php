
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Kriteria</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/kriteria'); ?>">Kriteria</a></li>            
            <li class="active">Tambah</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Tambah Kriteria</h3>
                </div>

                <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/Kriteria/insert'); ?>">
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

                  <div class="form-group">
                    <label for="nama_Kriteria" class="col-md-3 control-label">Kategori Kriteria*</label>
                    <div class="col-md-8">
                      <select class = "form-control" name="kategori_kriteria">                      
                        <option value = "Pendidikan">Pendidikan</option>
                        <option value = "Identitas Diri">Identitas Diri</option>
                        <option value = "Dukungan">Dukungan</option>
                        <option value = "Riwayat Hidup">Riwayat Hidup</option>
                      </select>                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="bobot" class="col-md-3 control-label">Kuisioner Parpol</label>
                    <div class="col-md-8">
                      <textarea type="text" class="form-control" id="kuisioner_parpol" name="kuisioner_parpol" required></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nama_Kriteria" class="col-md-3 control-label">Kuisioner Masyarakat*</label>
                    <div class="col-md-8">
                      <textarea type="text" class="form-control" id="kuisioner_masyarakat" name="kuisioner_masyarakat" required> </textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="bobot" class="col-md-3 control-label">Bobot *</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" id="bobot" name="bobot" required>
                    </div>
                  </div>

                  

                <div class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Tambah</button>
                    <input type="reset" class="btn btn-default btn-flat" value="Reset">
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/Kriteria'); ?>">Kembali</a>
                  </center>
                </div>
                </form>
              </div>              
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
