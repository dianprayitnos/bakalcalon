
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Daftar Kriteria</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>            
            <li class="active"><a href="<?php echo base_url('index.php/kriteria'); ?>">Kriteria</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
          <div class="col-sm-6 col-md-6" >
          <div class='box box-primary'>

            <div class='box-header'>
              <a class="btn btn-primary btn-flat"  href="<?php echo base_url('index.php/Kriteria/tambah'); ?>"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah Kriteria</a>
            </div>
            <div class='box-header'>              
            </div>
            <div class="box-body" >
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
                  <h4>  <i class="icon fa fa-check"></i> Gagal!</h4>
                  <?php echo $this->session->flashdata('gagal');?>
                </div>
              <?php endif; ?>

              <table id="table_Kriteria" class="table table-bordered table-hover" sytle="margin-bottom: 10px;"> 
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Kategori Kriteria</th>
                    <th>Bobot Vector</th>                                      
                    <th>Pilihan</th>
                    <th>Bobot</th>
                  </tr>
                </thead>
                
                <tbody>

                  <?php $no=1; foreach ($list_Kriteria as $Kriteria) {                    
                    echo 
                      "<tr>".
                        "<td>".$no."</td>".
                        "<td>".$Kriteria->kategori_kriteria."</td>".
                        "<td>".$Kriteria->bobot."</td>";                        
                        echo '<td><center>
                        <a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/Kriteria/ubah/" . $Kriteria->id_kriteria) . '"><i class="ion ion-edit"></i></a>';                        
                    echo '<a class="btn btn-danger btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/Kriteria/hapus/" . $Kriteria->id_kriteria) . '"><i class="ion ion-trash-a"></i></a>';
                    echo '</center></td>';
                    echo '<td><input type="button" class="ion ion-plus" value="Bobot" onclick="myFunction('.$Kriteria->id_kriteria.')"></td>';
                      "</tr>";
                    $no++;
                  }
                  ?>
                </tbody>

                <tfoot>
                  
                </tfoot>
              </table>
            </div>
          </div>
          </div>

          <script type="text/javascript">

          function myFunction(ik)
          {            
            var lcValues = <?php echo json_encode($list_bobot); ?>;                                                                    
            var tbl = "<div class=box box-primary>";
            tbl += "<div class=box-header>";                          
            tbl += "<a class= 'btn btn-primary btn-flat'  href=<?php echo base_url('index.php/Bobot/tambah/"+ik+"');?>><i class=fa fa-plus></i>&nbsp;&nbsp;&nbsp;Tambah Bobot</a>";
            tbl += "</div>";
            tbl += "<table class=table table-bordered table-hover sytle=margin-bottom: 10px;>";            
            tbl += "<thead><tr><th>NO</th><th>Nama Kriteria</th><th>Bobot</th><th>Pilihan</th></tr></thead>";
            var ri=0;
            var no=1;

            while(lcValues[ri] != null) {            
                tbl += "<tr>";                            
                if(lcValues[ri].id_kriteria == ik)           
                {
                  tbl += "<td>" + no + "</td>";            
                  tbl += "<td>" + lcValues[ri].nama_bobot + "</td>";            
                  tbl += "<td>" + lcValues[ri].bobot + "</td>";                            
                  tbl += "<td><a class='btn btn-warning btn-flat btn-sm' style=width:40px; href=<?php echo base_url('index.php/Bobot/ubah/"+lcValues[ri].id_bobot+"');?>> <i class='ion ion-edit'></i></a>";                        
                   tbl +=     "<a class='btn btn-danger btn-flat btn-sm'  style=width:40px; href=<?php echo base_url('index.php/Bobot/hapus/"+lcValues[ri].id_bobot+"');?>> <i class='ion ion-trash-a'></i></a></td>";
                  no++;
                }                    
                tbl += "</tr>";      
                ri++;      
            }            
            tbl += "</table>";
            tbl +="</div>"

            document.getElementById("show_kriteria").innerHTML = tbl;
          }

          </script>



          <div id="show_kriteria"class="col-sm-6 col-md-6">
            
            

              <div class="callout callout-info">
                
                <h4>Ketentuan</h4>
                <p>Terdapat 6 buah kriteria dengan masing-masing bobot yaitu<br>1. Pendidikan - 0.3<br>2. Usia - 0.1<br>3. Domisili - 0.1 <br>4. Partai Politik - 0.4 <br>5. Karir Politik - 0.05 <br>6. Pengalaman Oraganisasi - 0.05 </p>
                <br>
                <p>Jumlah Keseluruhan bobot haruslah sama dengan 1</p>
              </div>            
          </div>

          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
