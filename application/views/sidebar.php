<?php
    $is_login = $this->session->userdata('is_login');
    $level = $this->session->userdata('level');
    $username = $this->session->userdata('username');
    ?>



<aside class="main-sidebar">
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
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url();?>adminlte/dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= ucfirst($username) ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

<?php if ($is_login) : ?>
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Menu</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><?= anchor(base_url(),'<i class="fa fa-home"></i> Home')?></></li>
                    <li><?= anchor('logout','<i class="fa fa-sign-out"></i> Logout')?></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-server"></i>
                    <span>Master</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><?= anchor('kelas','<i class="fa fa-graduation-cap"></i> Kelas') ?></li>
                    <li><?= anchor('anggota','<i class="fa  fa-male"></i> Anggota') ?></li>
                    <li><?= anchor('judul','<i class="fa fa-book"></i> Buku') ?></li>
                    <?php if ($level === 'admin'): ?>
                    <li><?= anchor('user','<i class="fa fa-group"></i> User') ?></li>
                    <?php endif ?>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Transaksi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><?= anchor('peminjaman','<i class="fa fa-mail-forward"></i> Peminjaman') ?></li>
                    <li><?= anchor('pengembalian','<i class="fa  fa-reply"></i> Pengembalian') ?></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-archive"></i>
                    <span>Laporan</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><?= anchor('laporan-buku','<i class="fa fa-book"></i> Buku') ?></li>
                    <li><?= anchor('laporan-peminjaman','<i class="fa fa-mail-forward"></i> Peminjaman') ?></li>
                    <li><?= anchor('laporan-pengembalian','<i class="fa fa-reply"></i> Pengembalian') ?></li>
                    <li><?= anchor('laporan-denda','<i class="fa fa-money"></i> Denda') ?></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="<?= base_url();?>petunjuk.pdf">
                    <i class="fa fa-question-circle"></i>
                    <span>Petunjuk</span></a>
                   
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
    <?php else: ?>

    <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>



    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><?= anchor(base_url(),'<i class="fa fa-home"></i> Home')?></></li>
            <li><?= anchor('judul','<i class="fa fa-book"></i> Buku')?></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="login">
            <i class="fa fa-sign-in"></i> <span>Login</span>
            
        </a>        
    </li>

    <li class="treeview">
                <a href="#">
                    <i class="fa fa-info"></i>
                    <span>About</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><?= anchor('about','<i class="fa fa-sitemap"></i> Struktur Organisasi') ?></li>
                    <li><?= anchor('visi','<i class="fa  fa-arrows"></i> Visi dan Misi ') ?></li>
                    <li><?= anchor('tata','<i class="fa fa-university"></i> Tata Tertib') ?></li>
                </ul>
            </li>
    </ul>
    </section>
    <!-- /.sidebar -->
    </aside>
<?php endif ?>