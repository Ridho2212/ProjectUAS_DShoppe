<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url('assets/images/logo1.png') ?>" alt="DShoppe Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light">UMKM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar d-flex" id="wrapper">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('assets/images/admin.jpg')?>" class="img-circle elevation-2" alt="User Image">
            </div>
            
            <div class="info">
                <a href="#" class="d-block"><?php
                $email = $this->session->userdata('email');
                if ($email) {
                    echo $email;
                }
                ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="<?php echo base_url('index.php/pesanan/index') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pesanan</p>
                    </a>
                </li>
                <?php if ($this->session->userdata('role') == 'admin') : ?>
                    <li class="nav-item">
                        <a href="<?php echo base_url('index.php/produk/index') ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Produk</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('index.php/pembelian/index') ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pembelian</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('index.php/suplier/index') ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Suplier</p>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('index.php/auth/logout') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>