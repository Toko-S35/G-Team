<ul class="navbar-nav bg-gradient-new sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- <div style="transition: left 0.99s; position: fixed;"> -->
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?= user()->username; ?></div>
    </a>

    <?php if (in_groups('bos')) : ?>

    <!-- bos -->
    <div class="sidebar-heading">
        Bos Profile
    </div>

    <?php endif; ?>

    <?php if (in_groups('kp-toko')) : ?>

    <!-- KP-toko -->
    <div class="sidebar-heading">
        Kepala Toko Profile
    </div>

    <?php endif; ?>

    <?php if (in_groups('kp-gudang')) : ?>

    <!-- KP-gudang -->
    <div class="sidebar-heading">
        Kepala Gudang Profile
    </div>

    <?php endif; ?>





    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <?php if (in_groups('bos')) : ?>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href=<?= base_url('/bos'); ?>>
            <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>

    <?php endif; ?>


    <?php if (in_groups('kp-toko')) : ?>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href=<?= base_url('/'); ?>>
            <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>

    <?php endif; ?>


    <?php if (in_groups('kp-gudang')) : ?>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href=<?= base_url('/'); ?>>
            <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>

    <?php endif; ?>


    <!-- Nav Item - My Profile -->
    <li class="nav-item">
        <a class="nav-link" href=<?= base_url('inventaris'); ?>>
            <i class="fas fa-box"></i>
            <span>Inventaris Barang</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href=<?= base_url('pengiriman_barang'); ?>>
            <i class="fas fa-truck"></i>
            <span>Pengiriman Barang</span></a>
    </li>

    <div class="dropdown">
        <li class="nav-item">
            <a class="nav-link">
                <i class="fas fa-donate"></i>
                <span>Keuangan</span></a>
        </li>
        <div class="dropdown-content">
            <p href="#"><?= $this->include('templates/menu-k'); ?></p>
        </div>
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('toko'); ?>">
            <i class="fas fa-store"></i>
            <span>Toko</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- </div> -->

</ul>