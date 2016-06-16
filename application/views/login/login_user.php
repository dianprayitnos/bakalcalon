<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>
    <meta name="description" content="<?php echo system_description; ?>">
    <meta name="keywords" content="<?php echo system_title; ?>">
    <meta name="author" content="<?php echo system_author; ?>">

    <link rel="icon" type="image/png" href="<?php echo base_url('assets'); ?>/img/favicon.png">

    <title><?php echo system_title; ?> | Log In</title>

    <link href="<?php echo base_url('assets'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Font Awesome Icons -->
    <link href="<?php echo base_url('assets'); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?php echo base_url('assets'); ?>/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Chosen -->
    <link href="<?php echo base_url('assets'); ?>/plugins/chosen/chosen.min.css" rel="stylesheet" type="text/css" />
    <!-- Data Tables -->
    <link href="<?php echo base_url('assets'); ?>/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo base_url('assets'); ?>/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Morris charts -->
    <link href="<?php echo base_url('assets'); ?>/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url('assets'); ?>/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url('assets'); ?>/dist/css/skins/skin-purple.min.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
      .datepicker{z-index:1151 !important;}
    }

    </style>

    <script >
      function password_validation()
      {
          var pass1 = document.getElementById("pass1").value;
          var pass2 = document.getElementById("pass2").value;

          var pass3 = document.getElementById("pass3").value;
          var pass4 = document.getElementById("pass4").value;

          var ok = true;
          if (pass1 != pass2 || pass3 != pass4) {
              //alert("Passwords Do not match");
              if(pass1 !="")
              {
                document.getElementById("pass1").style.borderColor = "#E34234";
                document.getElementById("pass2").style.borderColor = "#E34234";
              } 
              else
              {
                document.getElementById("pass3").style.borderColor = "#E34234";
                document.getElementById("pass4").style.borderColor = "#E34234";
              }             
              ok = false;
          }          
          return ok;
      }
    </script>
    
  </head>  
  <body id="login-page">    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">                      
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">                    
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Register <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal">Masyarakat</a>
                            </li>                            
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal2">Parpol</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-co -->
        </div>
        <!-- /.container -->
    </nav>

      <!-- Modal -->
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
                    <input type="text" name="idTourDateDetails" id="idTourDateDetails" readonly="readonly" class="form-control clsDatePicker">
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
  </div> 

  <div class="modal fade" id="myModal2" role="dialog">
    <form method = "post" action="<?php echo base_url('index.php/register/parpol');?>" class="form-horizontal" onsubmit="return password_validation()">
    <div class="modal-dialog">    
      <!-- Modal content-->      
      <div class="modal-content">        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">Register Parpol</h4></center>
        </div>
        <div class="modal-body">          
              <div>                              
                
               <div class="form-group">
                <label class="control-label col-sm-3">Nama Parpol </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_parpol" placeholder="mis : PDIP/PKS"> 
                  </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">Username </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="username_parpol" placeholder="mis : pdip/pks/nasdem"> 
                  </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">NO Telepon </label>
                  <div class="col-sm-8">
                  <input type="text" class="form-control" name="no_tlp_parpol" placeholder="mis : 0711xxxx"> 
                  </div>
                </div>   

                <div class="form-group">
                <label class="control-label col-sm-3">Email </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="email_parpol" placeholder="mis : aaaa@bbb.com"> 
                  </div>
                </div>              

                <div class="form-group">
                <label class="control-label col-sm-3">Alamat </label>
                  <div class="col-sm-8">
                  <input type="text" class="form-control" name="alamat_parpol" placeholder="mis : jl lintas timur"> 
                  </div>
                </div>        

                <div class="form-group">
                <label class="control-label col-sm-3">Keterangan </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="keterangan_parpol" placeholder="mis : partai xxx"> 
                  </div>
                </div> 

                <div class="form-group">
                <label class="control-label col-sm-3">Password </label>
                <div class="col-sm-8">
                <input type="password" class="form-control" name="password2" id="pass3" placeholder="password">  
                </div>  
                </div> 

                <div class="form-group">
                <label class="control-label col-sm-3">Re Password </label>
                <div class="col-sm-8">
                <input type="password" class="form-control" name="repassword2" id="pass4" placeholder="re-password">  
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



    <div class="login-box">
      <div class="login-logo">
        <img src="<?php echo base_url('assets'); ?>/img/Rejang_Lebong.png" width="75"/>
      </div><!-- /.login-logo -->          
      <div class="login-box-body " style="background:#C4F2ED">
        <?php if(!$this->session->flashdata('login')): ?>
        <p class="login-box-msg">Selamat datang di<br><b><?php echo system_name; ?></b></p>
        <?php else: ?>
          <p class="login-box-msg text-red"><?php echo $this->session->flashdata('login');?></p>
        <?php endif; ?>
        <form action="<?php echo base_url('index.php/login/authentication'); ?>" method="POST">
          <div class="form-group">
          <select name ="jenis_pengguna" class = "form-control">
          <option value = "masyarakat"> Masyarakat </option>          
          <option value = "parpol"> Parpol </option>          
          <option value = "admin"> Admin </option>          
          </select>
        </div>

          <div class="form-group has-feedback">
            <input name="username" type="text" class="form-control" placeholder="Username" required/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input name="password_login" type="password"  class="form-control" placeholder="Password" required/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <br>

        <center><?php echo system_author; ?>  <?php echo system_title; ?> version <?php echo system_version; ?></center>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script src="<?php echo base_url('assets'); ?>/plugins/jQuery/jQuery-2.1.3.min.js" type="text/javascript"></script>        

    <script src="<?php echo base_url('assets'); ?>/plugins/jQueryUI/jquery-ui-1.10.3.min.js" type="text/javascript"></script>        
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url('assets'); ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- Chosen -->
    <script src="<?php echo base_url('assets'); ?>/plugins/chosen/chosen.jquery.min.js" type="text/javascript"></script>

    <!-- Data Tables -->
    <script src="<?php echo base_url('assets'); ?>/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

    <!-- Date Picker -->
    <script src="<?php echo base_url('assets'); ?>/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>    
    
    <!-- SlimScroll 1.3.0 -->
    <script src="<?php echo base_url('assets'); ?>/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url('assets'); ?>/plugins/fastclick/fastclick.min.js'></script>

    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets'); ?>/dist/js/app.min.js" type="text/javascript"></script>

    <!-- System -->
    <script src="<?php echo base_url('assets'); ?>/dist/js/system.js" type="text/javascript"></script>

    <!-- jQuery 2.1.3 -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery.backstretch.min.js"></script>    
    <script>
        $.backstretch("<?php echo base_url(); ?>assets/img/gedung-bupati.jpg", {speed: 500});
    </script>        
  </body>
</html>