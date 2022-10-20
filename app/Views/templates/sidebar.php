<ul class="navbar-nav bg-gradient-new sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?= user()->username; ?></div>
    </a>


    <!-- Heading -->
    <div class="sidebar-heading">
        User Profile
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href=<?= base_url('/'); ?>>
            <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-chart-line"></i>
            <span>statistik</span></a>
    </li>

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

    <!-- Nav Item - Edit Profile -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-donate"></i>
            <span>Keuangan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="tables.html">
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

</ul>