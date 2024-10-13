<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="<?= base_url('admin/dashboard') ?>">
                    <i class="fa fa-tachometer"></i> <span>Dashboard</span>
                </a>
            </li>
            <?php if($this->session->userdata('level') == 'Administrator') { ?>
                <li>
                    <a href="<?= base_url('admin/periode') ?>">
                        <i class="fa fa-list"></i> <span>Data Periode</span>
                    </a>
                </li>
            <?php } ?>
            <li>
                <a href="<?= base_url('admin/kegiatan') ?>">
                    <i class="fa fa-book"></i> <span>Data Kegiatan</span>
                </a>
            </li>
            <?php if($this->session->userdata('level') == 'Administrator') { ?>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-cogs"></i> <span>Pengaturan</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= base_url('admin/user') ?>"><i class="fa fa-circle-o"></i> Manajemen User</a></li>
                        <li><a href="<?= base_url('admin/aplikasi') ?>"><i class="fa fa-circle-o"></i> Tentang Aplikasi</a></li>
                        <li><a href="<?= base_url('admin/backupdatabase') ?>"><i class="fa fa-circle-o"></i> Backup Database</a></li>
                        <li><a href="<?= base_url('admin/log') ?>"><i class="fa fa-circle-o"></i> Log Status</a></li>
                    </ul>
                </li>
            <?php } ?>
            <li>
                <a href="<?= base_url('admin/profil') ?>">
                    <i class="fa fa-user"></i> <span>Profil</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('home/logout') ?>" class="tombol-yakin" data-isidata="Ingin keluar dari sistem ini?">
                    <i class="fa fa-sign-out"></i> <span>Sign Out</span>
                </a>
            </li>
        </ul>
    </section>
</aside>