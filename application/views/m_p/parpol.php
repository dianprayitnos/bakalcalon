<style>
#pilihan_kuisioner
{
    margin: 0px 20px 20px;
}
.dropbtn {
    background-color: #556B56;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}
.datepicker{z-index:1151 !important;}
 .bootstrap-datetimepicker-widget 
    {
        z-index: 1200   !important;
    }


/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
<script type="text/javascript">
      function confirmationDelete(anchor)
      {
        var conf = confirm('Hapus Data?');
        if(conf)
          window.location=anchor.attr("href");
      }
      </script>

<nav class="main-nav-outer" id="test" style="background: rgb(146, 208, 202);"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">        	
            <li><a href="#service">Bakal Calon</a></li>              
            <li><a href="#Portfolio">Isi Bakal Calon</a></li> 
            <li class="small-logo"><a href="#header"><img src="<?php echo base_url('assets/img/Rejang_Lebong.png');?>" style="width:90px; height:70px;" alt=""></a></li>
            <li><a href="#team">Tersesuai</a></li>            
            <li><a href="#contact">Contact</a></li>            
            <li><div class="dropdown">
  <button class="dropbtn" style = "">Hai <?php echo $this->session->userdata('nama_parpol');?></button>
  <div class="dropdown-content">
    <a  href="<?php echo base_url('index.php/parpol/update_bobot');?>">Refresh Bobot</a>
    <a  data-toggle="modal" data-target="#myModal">Profil</a>
    <a href="<?php echo base_url('index.php/login/logout');?>">Logout</a>    
  </div>
</div></li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->



<section class="main-section" id="service"><!--main-section-start-->
	<div class="container"> 

        <?php if($bakal_calon != null):?>       
        <h2>Daftar Bakal Calon</h2>
          <div class='box box-primary' style="border-left: 3px solid #d2d6de; border-right: 3px solid #d2d6de;    border-bottom: 3px solid #d2d6de;">
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

              <table id="table_status_persediaan" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>NO KTP</th>
                    <th>Nama Calon</th>
                    <th>Jenis Kelamin</th>                                      
                    <th>Email</th>
                    <th>No. Handphone</th>    
                    <th>Bobot</th>                                    
                    <th>Jumlah Pemilih</th>
                    <th>Pilihan</th>
                  </tr>
                </thead>
                
                <tbody>

                  <?php $n=0;  $i=0; $max = $jumlah_pemilih[$i];

                  foreach ($bakal_calon as $list_bakal_calon) {                    

                    if ($max <= $jumlah_pemilih[$i]) 
                    {
                      $max        =   $jumlah_pemilih[$i];
                      $index_max  = $i;                      
                      $index_tertinggi[$n] = $i;
                      $n++;
                    }
                    echo 
                      "<tr>".
                        "<td>".$list_bakal_calon->no_ktp."</td>".
                        "<td>".$list_bakal_calon->nama."</td>".
                        "<td>".$list_bakal_calon->jk."</td>".                        
                        "<td>".$list_bakal_calon->email."</td>".
                        "<td>".$list_bakal_calon->no_hp."</td>".
                        "<td>".$list_bakal_calon->bobot."</td>".
                        "<td>".$jumlah_pemilih[$i]."</td>";                        
                        echo '<td><center>';                          
                    echo '<a class="btn btn-danger btn-flat btn-sm" style="width:40px;" onclick="javascript:confirmationDelete($(this));return false;"  href="'. base_url("index.php/parpol/delete/" . $list_bakal_calon->id_bakal_calon).'"><i class="ion ion-trash-a"></i></a>';                    
                    echo '</center></td>'.
                      "</tr>";
                      $i++;
                  }

                  ?>
                </tbody>

                <tfoot>                  
                </tfoot>
              </table>
            </div>
          </div>        
        <?php endif;?>
    </div>

</section><!--main-section-end
<a class="btn btn-warning btn-flat btn-sm" style="width:40px;" href="'. base_url("index.php/pengguna/Masyarakat/ubah/" . $list_bakal_calon->id_bakal_calon) . '"><i class="ion ion-edit"></i></a>';-->

<script type="text/javascript">
function myFunction(ik)
          {            
            alert("aaa")            
          }
          </script>


<section class="main-section padding" id="Portfolio" style="background: rgba(199, 198, 198, 0.14);"><!--main-section-start-->
	<div class="container">
    	<h2>Tambah Bakal Calon</h2>    		
    <div class="row">
            <div class="col-sm-8"  >
              <div class="box box-primary" style="margin-left: 200px;">                
                <form  method="POST" action="<?php echo base_url('index.php/parpol/isi_data_balon'); ?>" style="margin-top: 30px;">
                    
                    <div class="form-group">
                        <label class="col-sm-9" style="text-align:justify">NO KTP</label>
                        <input type="text" name = "no_ktp" class="form-control" style="width:150px; margin-bottom:30px; margin-top:10px;" >
                    </div>                        

                    <div class="form-group">
                        <label class="col-sm-9" style="text-align:justify">Nama </label>
                        <input type="text" name = "nama_bakal_calon" class="form-control" style="width:150px; margin-bottom:30px; margin-top:10px;" >
                    </div>

                    <div class="form-group">
                        <label class="col-sm-9" style="text-align:justify">Jenis Kelamin</label>
                        <input type="text" name = "jk" class="form-control" style="width:150px; margin-bottom:30px; margin-top:10px;" >
                    </div>

                    <div class="form-group">
                        <label class="col-sm-9" style="text-align:justify">Email</label>
                        <input type="text" name = "email" class="form-control" style="width:150px; margin-bottom:30px; margin-top:10px;" >
                    </div>

                    <div class="form-group">
                        <label class="col-sm-9" style="text-align:justify">Nomor Handphone</label>
                        <input type="text" name = "no_hp" class="form-control" style="width:150px; margin-bottom:30px; margin-top:10px;" >
                    </div>

                  <?php 
                  $k=0;
                  $i=0;
                  if($kriteria!=null)
                  {
                      while ($k<=max(array_keys($kriteria)))                                                                       
                      {                                                                                
                        echo "<div>";
                        echo '<label class="col-sm-12" style="text-align:justify margin-bottom: 20px;";>'.$kriteria[$i]->kuisioner_parpol.'</label>';                                                                  
                                for($j=0;$j<=max(array_keys($bobot));$j++)
                                {                            
                                    if ($kriteria[$i]->id_kriteria === $bobot[$j]->id_kriteria) 
                                    {                                                                                                                        
                                        echo '<input id="pilihan_kuisioner" type = radio name="kriteria'.($kriteria[$i]->id_kriteria).'" value='.$bobot[$j]->bobot.'>'.$bobot[$j]->nama_bobot.'<br>';                        
                                    }                                
                                }                                                                        
                        $i++;              
                        $k = $k+1;                         
                    }
                  }?>

                  
                  

                <div style = "margin:30px;"class="box-footer">
                  <center>
                    <button type="submit" class="btn btn-primary btn-flat">Tambah</button>
                    <input type="reset" class="btn btn-default btn-flat" value="Reset">
                    <a class="btn btn-default btn-flat" href="<?php echo base_url('index.php/Kriteria'); ?>">Kembali</a>
                  </center>                
                </form>
              </div>              
            </div>
          </div>
          </div>  

</section><!--main-section-end-->

<section class="main-section team" id="team"><!--main-section team-start-->
	<div class="container">
    <?php 
    if($bakal_calon != null && $jumlah_pemilih != null ):?>
        <h2>Terpilih Terbanyak</h2>
        <h6>Berikut adalah daftar bakal calon yang memiliki kesesuaian dengan pemilih</h6>
        <div class="team-leader-block clearfix">
            <?php for ($l=1; $l <$n ; $l++) {   ?>
              <div style="margin: 0 auto;width: 300px;text-align: center;">                
                <h3 class="wow fadeInDown delay-03s"><?php echo $bakal_calon[$index_tertinggi[$n-$l]]->nama;?></h3>                            
                <span class="wow fadeInDown delay-03s">Sebanyak <?php echo $jumlah_pemilih[$index_tertinggi[$n-$l]];?></span>                         
              </div> 
            <?php 
              if ($l==2) {
                break;
              }
            } ?>
            
        </div>
      <?php endif;?>
    </div>
</section><!--main-section team-end-->



<section class="business-talking"><!--business-talking-start-->
	<div class="container">
        <h2>Mari Membangun Rejang Lebong</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="contact">
  
        <div class="row">
          <div class="col-lg-6 col-sm-7 wow fadeInLeft">
              <div class="contact-info-box address clearfix">
                  <h3><i class=" icon-map-marker"></i>Address:</h3>
                  <span>Jalan Basuki Rahmat No. 19 Dwi Tunggal<br>Curup, Bengkulu, Indonesia</span>
                </div>
                <div class="contact-info-box phone clearfix">
                  <h3><i class="fa-phone"></i>Phone:</h3>
                  <span>(0732) 325152</span>
                </div>
                <div class="contact-info-box email clearfix">
                  <h3><i class="fa-pencil"></i>email:</h3>
                  <span>Agirindra@yahoo.co.id</span>
                </div>
              
            </div>
          <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
              <div class="form">
                  <form method = "POST" action="<?php echo base_url('index.php/parpol/kirim_email');?>">
                  <input class="input-text" type="text" name="nama" value="Nama *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    <input class="input-text" type="text" name="email" value="Email *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                  <textarea class="input-text text-area" name="pesan" cols="0" rows="0" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">Pesan *</textarea>
                    <input class="input-btn" type="submit" value="Kirim Pesan">
                    </form>
                </div>  
            </div>
        </div>
</section>

<div class="modal fade" id="myModal" role="dialog">
    <form method = "post" action="<?php echo base_url('index.php/register/edit_parpol');?>" class="form-horizontal" onsubmit="return password_validation()">
    <div class="modal-dialog">    
      <!-- Modal content-->      
      <div class="modal-content">        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">Edit Parpol</h4></center>
        </div>
        <div class="modal-body">          
              <div>                              
                
               <div class="form-group">
                <label class="control-label col-sm-3">Nama Parpol </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_parpol" value="<?php echo $this->session->userdata('nama_parpol');?>"> 
                  </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">Username </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="username_parpol" value="<?php echo $this->session->userdata('username');?>"> 
                  </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">NO Telepon </label>
                  <div class="col-sm-8">
                  <input type="text" class="form-control" name="no_tlp_parpol" value="<?php echo $this->session->userdata('no_tlp');?>"> 
                  </div>
                </div>   

                <div class="form-group">
                <label class="control-label col-sm-3">Email </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="email_parpol" value="<?php echo $this->session->userdata('email');?>"> 
                  </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">Alamat </label>
                  <div class="col-sm-8">
                  <input type="text" class="form-control" name="alamat_parpol" value="<?php echo $this->session->userdata('alamat');?>"> 
                  </div>
                </div>        

                <div class="form-group">
                <label class="control-label col-sm-3">Keterangan </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_parpol" value="<?php echo $this->session->userdata('keterangan');?>"> 
                  </div>
                </div> 
              
                
              </div>          
        </div>        

        <div class="modal-footer" style ="border-bottom-color: #EFBFBF; background-color: powderblue; color: grey;">                    
          <button type="submit" class="btn btn-primary">Simpan</button>    
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div> 

</div>
