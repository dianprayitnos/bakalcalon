
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Parpol</h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengguna/Parpol'); ?>">Pengguna</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/pengguna/Parpol'); ?>">Parpol</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class='box box-primary'>
            <div class='box-header'>              
            </div>

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
                  <h4>  <i class="icon fa fa-check"></i> Gagal!</h4>
                  <?php echo $this->session->flashdata('gagal');?>
                </div>
              <?php endif; ?>

              <table id="table_Parpol" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Nama Parpol</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>                  
                    <th>Email</th>                    
                    <th>Status</th>
                    <th>Pilihan</th>
                  </tr>
                </thead>
                
                <tbody>

                  <?php foreach ($list_Parpol as $Parpol) {                    
                    echo 
                      "<tr>".
                        "<td>".$Parpol->nama_parpol."</td>".
                        "<td>".$Parpol->alamat."</td>".
                        "<td>".$Parpol->no_tlp."</td>".
                        "<td>".$Parpol->email."</td>";
                        if($Parpol->status == 0 )
                        {
                          echo '<td><button class="btn btn-block btn-danger btn-sm">Tidak Aktif</button></td>';
                        }
                        else
                        {
                          echo '<td><button class="btn btn-block btn-info btn-sm">Aktif</button></td>';
                        }
                        echo '<td><center>
                        <a class="btn btn-primary btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengguna/Parpol/lihat/" . $Parpol->id_parpol) . '"><i class="ion ion-search"></i></a><a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengguna/Parpol/ubah/" . $Parpol->id_parpol) . '"><i class="ion ion-edit"></i></a>';
                    echo '<a class="btn btn-danger btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengguna/Parpol/hapus/" . $Parpol->id_parpol) . '"><i class="ion ion-trash-a"></i></a>';
                    echo '</center></td>'.
                      "</tr>";
                  }
                  ?>
                </tbody>

                <tfoot>
                  
                </tfoot>
              </table>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
