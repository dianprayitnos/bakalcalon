<style>
/* Style The Dropdown Button */
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

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>

<nav class="main-nav-outer" id="test" style="background: #C7C6C6;"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">
        	<li><a href="#header">Home</a></li>
            <li><a href="#service">Rejang Lebong</a></li>              
            <li><a href="#Portfolio">Isi Kuisioner</a></li> 
            <li><a href="#client">Clients</a></li>            
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


<section class="main-section padding" id="Portfolio" style="background: rgba(199, 198, 198, 0.14);"><!--main-section-start-->
	<div class="container">
    	<h2>Kuisioner</h2>
    	<h6>Nyatakan Bupati Idaman Anda dengan Mengisikan Kuisioner berikut Sesuai dengan Kriteria Calon Bupati Anda.</h6>      
	</div>    

    <div class="row">
            <div class="col-sm-12 col-sm-9" style = "margin:10px 50px 10px 50px; padding:10px 150px 10px 150px;">
              <div class="box box-primary" style = "margin:10px 50px 10px 50px;">                

                <form  method="POST" action="<?php echo base_url('index.php/Kriteria/insert'); ?>">
                <div style="text-align:justify">                  

                  <?php 
                  $k=0;
                  $i=0;
                  if($kriteria!=null)
                  {
                      while ($k<=max(array_keys($kriteria)))                                                                       
                      {                                                                                
                        echo '<div>';
                        echo '<p>'.$kriteria[$i]->kuisioner_masyarakat.'</p>';                                            
                        echo '<div>
                              <select class="form-control" style="width:300px; margin-bottom:30px;font-stretch: extra-condensed;font-style: initial; font-variant-ligatures: initial; align-content: space-between;"  name= "'.$i.'">' ;                                                          
                                for($j=0;$j<=max(array_keys($bobot));$j++)
                                {                            
                                    if ($kriteria[$i]->id_kriteria === $bobot[$j]->id_kriteria) 
                                    {                                                                                                                        
                                        echo '<option value='.$bobot[$j]->bobot.'>'.$bobot[$j]->nama_bobot.'</option>';                        
                                    }                                
                                }
                        echo "</div>";
                        echo "</select>";
                        echo "</div>"; 
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
                </div>
                </form>
              </div>              
            </div>
          </div>



</section><!--main-section-end-->


<section class="main-section client-part" id="client"><!--main-section client-part-start-->
	<div class="container">
		<b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
    	<div class="row">
        	<div class="col-lg-12">
            	<p class="client-part-haead wow fadeInDown delay-05">It was a pleasure to work with the guys at Knight Studio. They made sure 
we were well fed and drunk all the time!</p>
            </div>
        </div>
    	<ul class="client wow fadeIn delay-05s">
        	<li><a href="#">
            	<img src="img/client-pic1.jpg" alt="">
                <h3>James Bond</h3>
                <span>License To Drink Inc.</span>
            </a></li>
        </ul>
    </div>
</section><!--main-section client-part-end-->
<div class="c-logo-part"><!--c-logo-part-start-->
	<div class="container">
    	<ul>
        	<li><a href="#"><img src="img/c-liogo1.png" alt=""></a></li>
            <li><a href="#"><img src="img/c-liogo2.png" alt=""></a></li>
            <li><a href="#"><img src="img/c-liogo3.png" alt=""></a></li>
            <li><a href="#"><img src="img/c-liogo4.png" alt=""></a></li>
            <li><a href="#"><img src="img/c-liogo5.png" alt=""></a></li>
    	</ul>
	</div>
</div><!--c-logo-part-end-->
<section class="main-section team" id="team"><!--main-section team-start-->
	<div class="container">
        <h2>team</h2>
        <h6>Take a closer look into our amazing team. We won’t bite.</h6>
        <div class="team-leader-block clearfix">
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic1.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Walter White</h3>
                <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
                <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-06s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic2.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Jesse Pinkman</h3>
                <span class="wow fadeInDown delay-06s">Product Manager</span>
                <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-09s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic3.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-09s">Skyler white</h3>
                <span class="wow fadeInDown delay-09s">Accountant</span>
                <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
        </div>
    </div>
</section><!--main-section team-end-->



<section class="business-talking"><!--business-talking-start-->
	<div class="container">
        <h2>Let’s Talk Business.</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="contact">
	
        <div class="row">
        	<div class="col-lg-6 col-sm-7 wow fadeInLeft">
            	<div class="contact-info-box address clearfix">
                	<h3><i class=" icon-map-marker"></i>Address:</h3>
                	<span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
                </div>
                <div class="contact-info-box phone clearfix">
                	<h3><i class="fa-phone"></i>Phone:</h3>
                	<span>1-800-BOO-YAHH</span>
                </div>
                <div class="contact-info-box email clearfix">
                	<h3><i class="fa-pencil"></i>email:</h3>
                	<span>hello@knightstudios.com</span>
                </div>
            	<div class="contact-info-box hours clearfix">
                	<h3><i class="fa-clock-o"></i>Hours:</h3>
                	<span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
                </div>
                <ul class="social-link">
                	<li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
                    <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
                </ul>
            </div>
        	<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
            	<div class="form">
                	<input class="input-text" type="text" name="" value="Your Name *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    <input class="input-text" type="text" name="" value="Your E-mail *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                	<textarea class="input-text text-area" cols="0" rows="0" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                    <input class="input-btn" type="submit" value="send message">
                </div>	
            </div>
        </div>
</section>
<div class="modal fade" id="myModal" role="dialog">
    <form method = "post" action="<?php echo base_url('index.php/register/masyarakat');?>" class="form-horizontal" onsubmit="return password_validation()">
    <div class="modal-dialog">    
      <!-- Modal content-->      
      <div class="modal-content">        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">Register Masyarakat</h4></center>
        </div>
        <div class="modal-body" style="background-color: ghostwhite;">          
              <div>

                <div class="form-group">
                <label class="control-label col-sm-3">No KTP </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_ktp" placeholder="NO KTP"> 
                  </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">Username </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="username" placeholder="Username"> 
                  </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">Nama </label>
                  <div class="col-sm-8">
                  <input type="text" class="form-control" name="nama" placeholder="Nama"> 
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
                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir"> 
                </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">Tanggal Lahir </label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="tgl_lahir" name = "tanggal_lahir" id="tgl_lahir">  
                </div>
                </div>                         

                <div class="form-group">
                <label class="control-label col-sm-3">Pekerjaan </label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">  
                </div>
                </div>              


                <div class="form-group">
                <label class="control-label col-sm-3">Alamat </label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat"> 
                </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">Email </label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="email" placeholder="Email">  
                </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">No HP </label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="no_hp" placeholder="NO HP">  
                </div>  
                </div>  

                <div class="form-group">
                <label class="control-label col-sm-3">Password </label>
                <div class="col-sm-8">
                <input type="password" class="form-control" name="password" id="pass1" placeholder="password">  
                </div>  
                </div> 

                <div class="form-group">
                <label class="control-label col-sm-3">Re Password </label>
                <div class="col-sm-8">
                <input type="password" class="form-control" name="repassword" id="pass2" placeholder="re-password">  
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
