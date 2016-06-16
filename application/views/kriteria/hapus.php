
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Konsulen</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active"><a href="<?php echo base_url('index.php/kriteria'); ?>">Kriteria</a></li>
            <li class="active">Hapus</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Hapus Kriteria</h3>
                </div>

                <div class="box-body form-horizontal">
                  
                  <div class="form-group">
                    <label for="nama_Kriteria" class="col-md-3 control-label">Kategori Kriteria*</label>
                    <div class="col-md-8">
                      <select class = "form-control" neme = "kategori_kriteria">
                        <option value = "Pendidikan">Pendidikan</option>
                        <option value = "Domisili">Domisili</option>
                        <option value = "Politik">Politik</option>
                        <option value = "Pengalaman Organisasi">Pengalaman Oraganisasi</option>
                      </select>                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="bobot" class="col-md-3 control-label">Kuisioner Parpol</label>
                    <div class="col-md-8">
                      <textarea type="text" class="form-control" style = "height:50px;" id="kuisioner_parpol" name="kuisioner_parpol" required><?php echo $Kriteria->kuisioner_parpol; ?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nama_Kriteria" class="col-md-3 control-label">Kuisioner Masyarakat*</label>
                    <div class="col-md-8">
                      <textarea type="text" class="form-control" style = "height:100px;"id="kuisioner_masyarakat" name="kuisioner_masyarakat" required> <?php echo $Kriteria->kuisioner_masyarakat; ?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="bobot" class="col-md-3 control-label">Bobot *</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" id="bobot" name="bobot"  value="<?php echo $Kriteria->bobot; ?>"required>
                    </div>
                  </div>

                
                <div class="box-footer">
                  <center>
                    <h4><i class="icon fa fa-warning"></i> Apakah anda yakin untuk menghapus data ini?</h4>
                    <a class="btn btn-danger btn-flat" href="<?php echo base_url('index.php/Kriteria/delete') . '/' . $Kriteria->id_kriteria
                    ; ?>">Hapus</a>
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/Kriteria'); ?>">Tidak</a>
                  </center>
                </div>
              </div>              
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
