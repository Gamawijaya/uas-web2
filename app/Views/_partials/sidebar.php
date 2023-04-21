<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:grey">
    <a href="<?php echo base_url('/'); ?>" class="brand-link">
      <img src="<?php echo base_url('themes/dist'); ?>/img/O.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .4">
      <span class="brand-text font-weight-light">Gamawijaya Store</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('themes/dist'); ?>/img/elon-musk.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="color:black">M.A.Gamawijaya</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url('/'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-th" style="color:black"></i>
                        <p style="color:black">Beranda</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('category'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tags" style="color:black"></i>
                        <p style="color:black">Kategori</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('product'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-cart-plus" style="color:black"></i>
                        <p style="color:black">Produk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('transaction'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-dollar-sign" style="color:black"></i>
                        <p style="color:black">Transaksi</p>
                    </a>
                </li>
                <li class="nav-header" style="color:black">AKUN</li>
                <li class="nav-item">
                    <a href="<?php echo base_url('auth/logout'); ?>" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger" style="color:black"></i>
                        <p class="text" style="color:black">Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
