<style type="text/css">
  .footer_box
  {
    background-color: aliceblue;
    padding-top: 15px;
    padding-left: 100px;
    margin-left: 25px;
  }
</style>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Dashboard
            <small>Selamat datang di <?php echo system_name; ?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li> <br>
          </ol>
        </section>
      
        <section class="content">          
              
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span  class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Masyarakat</span>
                  <span  class="info-box-number"><?php echo $jumlah_masyarakat;?></span>
                </div><!-- /.info-box-content -->
                <div class="footer_box">
                <a href="<?php echo base_url('index.php/pengguna/masyarakat');?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-blue"><i class="fa fa-flag-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Partai Politik</span>
                  <span class="info-box-number"><?php echo $jumlah_parpol;?></span>
                </div><!-- /.info-box-content -->
                <div class="footer_box">
                <a href="<?php echo base_url('index.php/pengguna/parpol');?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Kriteria</span>
                  <span class="info-box-number"><?php echo $jumlah_kriteria;?></span>
                </div><!-- /.info-box-content -->
                <div class="footer_box">
                <a href="<?php echo base_url('index.php/kriteria');?>" class="small-box-footer">Lihat<i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-grey"><i class="fa fa-files-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Kuisioner</span>
                  <span class="info-box-number"><?php echo $jumlah_kuisioner;?></span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div>               
      </section>        
       </div><!-- /.content-wrapper -->              
    
    

