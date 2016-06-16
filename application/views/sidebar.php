    <aside class="main-sidebar" >
      <!-- sidebar: style can be found in sidebar.less style = "background: #26465F;"-->
      <section class="sidebar">
        <!-- Sidebar user panel style = "border-bottom-color: bisque; background-color: rgba(0, 192, 239, 0.36); margin-right: 0.7px; margin-bottom: 20px;"-->
        <div class="user-panel" >
          <div class="info">            
            <center><img src="<?php echo base_url('assets/img/Rejang_Lebong.png'); ?>" class="img-rounded" alt="User Image" width="100px"/></center>
          </div>          
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          
          <!-- Dashboard -->
          <?php if ($judulhalaman === "Dashboard"): ?>
          <li class="active">
          <?php else: ?>
          <li>
          <?php endif; ?>
            <a href="<?php echo base_url('index.php/admin/dashboard'); ?>">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
            </a>
          </li>                

          <!-- Pengguna -->
          <?php if ($this->session->userdata('tipeuser') === "admin"): ?>
          
          <?php if ($judulhalaman === "Masyarakat" || $judulhalaman === "Parpol" || $judulhalaman === "Administrator" || $judulhalaman === "Semua Pengguna"): ?>
          <li class="treeview active">
          <?php else: ?>
          <li class="treeview">
          <?php endif; ?>
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Pengguna</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>

            <ul class="treeview-menu">
              <?php if ($judulhalaman === "Masyarakat"): ?>
              <li class="active"><a href="<?php echo base_url('index.php/pengguna/Masyarakat'); ?>"><i class="fa fa-circle-o"></i> Masyarakat</a></li>
              <?php else: ?>
              <li><a href="<?php echo base_url('index.php/pengguna/Masyarakat'); ?>"><i class="fa fa-circle-o"></i> Masyarakat</a></li>
              <?php endif; ?>

              <?php if ($judulhalaman === "Parpol"): ?>
              <li class="active"><a href="<?php echo base_url('index.php/pengguna/Parpol'); ?>"><i class="fa fa-circle-o"></i> Parpol</a></li>
              <?php else: ?>
              <li><a href="<?php echo base_url('index.php/pengguna/Parpol'); ?>"><i class="fa fa-circle-o"></i> Parpol</a></li>
              <?php endif; ?>
              

            </ul>
          </li>
          <?php endif; ?>

          <!-- Kriteria -->          
          <?php if ($judulhalaman === "Kriteria"): ?>
          <li class="active">
          <?php else: ?>
          <li>
          <?php endif; ?>
            <a href="<?php echo base_url('index.php/Kriteria'); ?>">
              <i class="fa fa-square-o"></i>
              <span>Kriteria</span>
            </a>
          </li>          

          <!-- Profil -->
          <?php if ($judulhalaman === "Profil"): ?>
          <li class="active">
          <?php else: ?>
          <li>
          <?php endif; ?>
            <a href="<?php echo base_url('index.php/profil'); ?>">
              <i class="fa fa-user-md"></i>
              <span>Profil</span>
            </a>
          </li>          

          <!-- Reward -->        
          <?php if ($this->session->userdata('tipeuser') ==="Masyarakat"): ?>  
          <?php if ($judulhalaman === "Reward"): ?>
          <li class="active">
          <?php else: ?>
          <li>
          <?php endif; ?>
            <a href="<?php echo base_url('index.php/reward/reward'); ?>">
              <i class="fa fa-user-md"></i>
              <span>Reward</span>
            </a>
          </li>          
        <?php endif;?>



          <!-- Ubah Password -->
          <?php if ($judulhalaman === "Ubah Password"): ?>
          <li class="active">
          <?php else: ?>
          <li>
          <?php endif; ?>
            <a href="<?php echo base_url('index.php/ubah_password'); ?>">
              <i class="fa fa-key"></i>
              <span>Ubah Password</span>
            </a>
          </li>
          
      </section>
      
    </aside>
