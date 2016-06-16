<style>
/* Style The Dropdown Button */
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


/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>

<nav class="main-nav-outer" id="test" style="background: rgb(146, 208, 202);" ><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">        	
            <li><a href="#service">Rejang Lebong</a></li>                          
            <li><a href="#Portfolio">Isi Kuisioner</a></li> 
            <li class="small-logo"><a href="#header"><img src="<?php echo base_url('assets/img/Rejang_Lebong.png');?>"  style="width:90px; height:70px;" alt=""></a></li>
            <li><a href="#client">Quotes</a></li>            
            <li><a href="#contact">Contact</a></li>            
            <li><div class="dropdown">
  <button class="dropbtn" style = "">Hai <?php echo $this->session->userdata('nama');?></button>
  <div class="dropdown-content">
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
    	<h2>Rejang Lebong</h2>
    	<h6>Sekilas Mengenai Rejang lebong</h6>
        <div class="row">
        	<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                <center><img src="<?php echo base_url('assets/img/Rejang_Lebong.png'); ?> " alt="Logo Rejang Lebong" style="padding : 10px 0"> </center>               
            	<p align = "justify">Kabupaten Rejang Lebong adalah sebuah kabupaten di provinsi Bengkulu, Indonesia. Kabupaten ini memiliki luas wilayah 1.515,76 km² dan populasi sekitar 246.787 jiwa. Ibu kotanya ialah Curup. Kabupaten ini terletak di lereng pegunungan Bukit Barisan dan berjarak 85 km dari kota Bengkulu yang merupakan ibukota provinsi.

Penduduk asli terdiri dari 2 suku utama yaitu suku Rejang dan suku Lembak. Suku Rejang mendiami tanah atas yaitu kecamatan Curup, Curup Utara, Curup Timur, Curup Selatan, Curup Tengah, Bermani Ulu, Bermani Ulu Raya, dan sebagian Selupu Rejang. </p>            
            
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                <p align = "justify"> Suku Lembak mendiami tanah bawah yaitu kecamatan Kota Padang, Padang Ulak Tanding, Binduriang, Sindang Dataran, Sindang Beliti Ulu, Sindang Beliti Ilir, dan Sindang Kelingi.     Secara topografi, Kabupaten Rejang Lebong merupakan daerah yang berbukit-bukit, terletak pada dataran tinggi pegunungan Bukit Barisan dengan ketinggian 100 hingga 1000 m dpl. Secara umum kondisi fisik Kabupaten Rejang Lebong sebagai berikut: Kelerengan: datar sampai bergelombang, Jenis Tanah: Andosol, Regosol, Podsolik, Latasol dan Alluvial, Tekstur Tanah: sedang, lempung dan sedikit berpasir dengan pH tanah 4,5 –7,5 , Kedalaman efektif Tanah : sebagian besar terdiri atas kedalaman 60 cm hingga lebih dari 90 cm, sebagian terdapat erosi ringan dengan tingkat pengikisan 0 – 10 %. Curah hujan rata-rata 233,75 mm/bulan, dengan jumlah hari hujan rata rata 14,6 hari/bulan pada musim kemarau dan 23,2 hari/bulan pada musim penghujan. Sementara suhu normal rata-rata 17,73 0C – 30,940C dengan kelembaban nisbi rata-rata 85,5 %. </p>
            </div>

            <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                <p align = "justify">Suhu udara maksimum pada tahun 2003 terjadi pada bulan Juni dan Oktober yaitu 32 derajad Celcius dan suhu udara minimum terjadi pada bulan Juli yaitu 16,2 derajat Celcius. Mata pencarian penduduk didominasi oleh pertanian (80%), pedagangan, PNS, wiraswasta, dan lain-lain. Perkebunan rakyat yang terdapat di kabupaten ini adalah perkebunan kopi dan karet. Produktivitas kebun kopi di Rejang Lebong tergolong tinggi dan merupakan produsen kopi ke-6 terbesar di Sumatera. Palawija banyak ditanam di lereng Bukit Kaba, Rejang Lebong terkenal sebagai lumbung padi,sayur dan umbi-umbian di Bengkulu. Sebagian lagi merupakan petani penyadap aren sekaligus pembuat gula aren dan gula semut. Produksi gula aren dan gula semut Rejang Lebong sangat terkenal bahkan sampai ke manca negara. Sedangkan perkebunan perusahaan swasta skala besar yakni kebun teh di lereng Bukit Daun..</p>
            </div>
            
        
        </div>
	</div>
</section><!--main-section-end-->


<section class="main-section padding" id="Portfolio" style="background: rgba(199, 198, 198, 0.14); padding:60px 0 50px"><!--main-section-start-->
	<div class="container">
    	<h2>Kuisioner</h2>    	
	</div>    

    <div class="row">
        <?php if($jumlah_kuisioner == null):?>
            <div class="col-sm-8"  >
              <div class="box box-primary" style="margin-left: 200px;">                
                <form  method="POST" action="<?php echo base_url('index.php/masyarakat/isi_kuisioner'); ?>" style="margin-top: 30px;">
                                        
                  <?php 
                  $k=0;
                  $i=0;
                  if($kriteria!=null)
                  {
                      while ($k<=max(array_keys($kriteria)))                                                                       
                      {                                                                                
                        echo "<div>";
                        echo '<label class="col-sm-12" style="text-align:justify margin-bottom: 20px;";>'.$kriteria[$i]->kuisioner_masyarakat.'</label><br><br>';                                                                  
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
        <?php else: 
            echo "<h2>Terimakasih Sudah Berpartisipasi</h2> ";
            if($tersesuai != null)
            {
                echo "<center><h4>Berikut Data Calon yang Sesuai dengan Anda</h4></center> ";
                echo "<center><h4>Asal Parpol ".$nama_parpol."</h4></center>";           
                echo "<center><h4>Nama Calon ".$nama_calon."</h4></center>";
                for ($i=0; $i <=max(array_keys($tersesuai)) ; $i++) 
                { 
                    echo '<center><h5>'.$tersesuai[$i].'</h5></center>';                
                }                
            }
            
        ?>
        <?php endif;?>

          </div>
          </div>



</section><!--main-section-end-->


<section class="main-section client-part" id="client" style="padding:60px 0 150px"><!--main-section client-part-start-->
	<div class="container">
		<b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
    	<div class="row">
        	<div class="col-lg-12">
            	<p class="client-part-haead wow fadeInDown delay-05">jangan tanyakan apa yang negara berikan kepadamu tapi tanyakan apa yang kamu berikan kepada negaramu</p>
            </div>
        </div>
    	<ul class="client wow fadeIn delay-05s">
        	<li><a href="#">            	
                <h3>Jhon F. Keneddy</h3>                
            </a></li>
        </ul>        

        <ul class="client wow fadeIn delay-05s">
            <li><a href="#">                
                <h2>Mari Membangun Rejang Lebong.</h2>
            </a></li>
        </ul>        
    </div>
    
</section><!--main-section client-part-end-->

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
                  <form method = "POST" action="<?php echo base_url('index.php/masyarakat/kirim_email');?>">
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
    <form method = "post" action="<?php echo base_url('index.php/register/edit_masyarakat');?>" class="form-horizontal" onsubmit="return password_validation()">
    <div class="modal-dialog">    
      <!-- Modal content-->      
      <div class="modal-content">        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">Edit Masyarakat</h4></center>
        </div>
        <div class="modal-body" style="background-color: ghostwhite;">          
              <div>

                <div class="form-group">
                <label class="control-label col-sm-3">No KTP </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_ktp" value = <?php echo $this->session->userdata('no_ktp')?>> 
                  </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">Username </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="username" value = <?php echo $this->session->userdata('username')?>> 
                  </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">Nama </label>
                  <div class="col-sm-8">
                  <input type="text" class="form-control" name="nama" value = <?php echo $this->session->userdata('nama')?>> 
                  </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">Jenis Kelamin </label>
                <div class="col-sm-8">
                <select class="form-control" name = "jk">
                  <option value = "Laki-Laki">Laki-Laki</option>
                  <option value = "Perempuan">Perempuan</option>
                </select>
                </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">Tempat Lahir </label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="tempat_lahir" value = <?php echo $this->session->userdata('tempat_lahir')?>> 
                </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">Pekerjaan </label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="pekerjaan" value = <?php echo $this->session->userdata('pekerjaan')?>>  
                </div>
                </div>              


                <div class="form-group">
                <label class="control-label col-sm-3">Alamat </label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="alamat" value = <?php echo $this->session->userdata('alamat')?>> 
                </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">Email </label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="email" value = <?php echo $this->session->userdata('email')?>>  
                </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">No HP </label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="no_hp" value = <?php echo $this->session->userdata('no_hp')?>>  
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
  </div> 

</div>
