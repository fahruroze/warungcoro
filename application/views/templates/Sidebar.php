 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/template/back/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $user['nama']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU ADMINISTRATOR</li>

        <li class="menu treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
      <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
      </li>

      <li class="menu treeview">
          <a href="<?php echo base_url('user'); ?>">
            <i class="fa fa-files-o"></i> <span>Data Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
      <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-circle-o"></i> Data Admin</a></li>
            <li class="active"><a href="<?php echo base_url('penjual'); ?>"><i class="fa fa-circle-o"></i> Data Penjual</a></li>
            <li class="active"><a href="<?php echo base_url('pelanggan'); ?>"><i class="fa fa-circle-o"></i> Data Pelanggan</a></li>
          </ul>
      </li>

      <li class="menu treeview">
          <a href="<?php echo base_url('admin/produk'); ?>">
            <i class="fa fa-files-o"></i> <span>Data Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
      <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('produkA'); ?>"><i class="fa fa-circle-o"></i> Produk Mang Acong</a></li>
            <li class="active"><a href="<?php echo base_url('produkB'); ?>"><i class="fa fa-circle-o"></i> Produk Koperasi Mahasiswa</a></li>
            <li class="active"><a href="<?php echo base_url('produkC'); ?>"><i class="fa fa-circle-o"></i> Produk Warung Mama Celli</a></li>
            <li class="active"><a href="<?php echo base_url('produkD'); ?>"><i class="fa fa-circle-o"></i> Produk Warung Pojok</a></li>
          </ul>
      </li>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('admin/produkA'); ?>"><i class="fa fa-circle-o"></i> Produk Mang Acong</a></li>
            <li class="active"><a href="<?php echo base_url('admin/produkB'); ?>"><i class="fa fa-circle-o"></i> Produk Koperasi Mahasiswa</a></li>
            <li class="active"><a href="<?php echo base_url('admin/produkC'); ?>"><i class="fa fa-circle-o"></i> Produk Warung Mama Celli</a></li>
            <li class="active"><a href="<?php echo base_url('admin/produkD'); ?>"><i class="fa fa-circle-o"></i> Produk Warung Pojok</a></li>
          </ul>
      </li>        <li class="nav-item">
          <a href="<?php echo base_url('admin/C_rating'); ?>">
            <i class="fa fa-files-o"></i>
            <span>Data Ulasan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <!-- <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Warung Acong</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Koperasi</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Warung Seblak</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Warung Pojok Kiri</a></li>
          </ul> -->
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('admin/konf_web'); ?>">
            <i class="fa fa-pie-chart"></i>
            <span>Konfigurasi Website</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>