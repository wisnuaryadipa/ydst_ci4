
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url('assets'); ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?= $acc_signed?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>

            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-o"></i> <span>Master</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-file-o"></i> <span>Users</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= $_ENV['BASE_URL_FULL'] ?>/master/users"><i class="fa fa-circle-o"></i>List</a></li>
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/master/users/create"><i class="fa fa-circle-o"></i> Buat Baru</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-file-o"></i> <span>Role</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/master/roles"><i class="fa fa-circle-o"></i> List</a></li>
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/master/roles/create"><i class="fa fa-circle-o"></i> Buat Baru</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-file-o"></i> <span>Buku</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/master/buku"><i class="fa fa-circle-o"></i> List</a></li>
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/master/buku/create.php"><i class="fa fa-circle-o"></i> Buat Baru</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-file-o"></i> <span>Customer</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/master/customer"><i class="fa fa-circle-o"></i>List</a></li>
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>//master/customer/create"><i class="fa fa-circle-o"></i> Buat Baru</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-file-o"></i> <span>Area</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/master/area"><i class="fa fa-circle-o"></i>List</a></li>
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/master/area/create"><i class="fa fa-circle-o"></i> Buat Baru</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-file-o"></i> <span>Cabang</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/index2.html"><i class="fa fa-circle-o"></i>List</a></li>
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/index.html"><i class="fa fa-circle-o"></i> Buat Baru</a></li>
                  </ul>
                </li>
              </ul>
            </li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-o"></i> <span>Surat Pemesanan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-file-o"></i> <span>BOS</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/index2.html"><i class="fa fa-circle-o"></i> Daftar Surat Pemesanan</a></li>
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/index.html"><i class="fa fa-circle-o"></i> Buat Baru</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-file-o"></i> <span>SISWA</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/index2.html"><i class="fa fa-circle-o"></i> Daftar Surat Pemesanan</a></li>
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/index.html"><i class="fa fa-circle-o"></i> Buat Baru</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-o"></i> <span>Faktur</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-file-o"></i> <span>BOS</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/index2.html"><i class="fa fa-circle-o"></i> List</a></li>
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/index.html"><i class="fa fa-circle-o"></i> Buat Baru</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-file-o"></i> <span>SISWA</span> <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/index2.html"><i class="fa fa-circle-o"></i> List</a></li>
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/index.html"><i class="fa fa-circle-o"></i> Buat Baru</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-o"></i> <span>Promo</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/index2.html"><i class="fa fa-circle-o"></i> List</a></li>
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/index.html"><i class="fa fa-circle-o"></i> Buat Baru</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-o"></i> <span>Gudang</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/index2.html"><i class="fa fa-circle-o"></i>Stock</a></li>
                    <li><a href="<?= $_ENV['BASE_URL_FULL']; ?>/index.html"><i class="fa fa-circle-o"></i>Histori Transaksi</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>