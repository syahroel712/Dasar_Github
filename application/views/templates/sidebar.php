<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>template/dist/img//user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Rental</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php if($this->session->userdata('level')=='1'): ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('Home');?>">
            <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>
        </li>
        <li>
           <a href="<?php echo base_url('Customer');?>">
            <i class="fa fa-edit"></i>
            <span>Customer</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('Karyawan');?>">
            <i class="fa fa-edit"></i>
            <span>Karyawan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('Mobil');?>">
            <i class="fa fa-edit"></i>
            <span>Mobil</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('Sewa');?>">
            <i class="fa fa-edit"></i>
            <span>Rental Mobil</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('Laporan');?>">
            <i class="fa fa-edit"></i>
            <span>Laporan</span>
          </a>
        </li>
      </ul>
      <?php elseif($this->session->userdata('level')=='2'): ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('Home');?>">
            <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>
        </li>
        <li>
           <a href="<?php echo base_url('Customer');?>">
            <i class="fa fa-edit"></i>
            <span>Customer</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('Mobil');?>">
            <i class="fa fa-edit"></i>
            <span>Mobil</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('Sewa');?>">
            <i class="fa fa-edit"></i>
            <span>Rental Mobil</span>
          </a>
        </li>
      </ul>
      <?php else: ?>
        <li><?php echo anchor('login','Login');?></li>
      <?php endif; ?>  
      <!-- <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class=>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Customer</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Mobil</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Rental Mobil</span>
          </a>
        </li>
      </ul>
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Customer</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Mobil</span>
          </a>
        </li>
      </ul> -->
      
    </section>
    <!-- /.sidebar -->
  </aside>