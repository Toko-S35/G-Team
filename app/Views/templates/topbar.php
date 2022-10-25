<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <ul>
        <script language="JavaScript">
        if (window.location == "http://localhost:8080/inventaris") {
            document.write(
                "<p style='color:black; padding-top:40px; font-size:20px; font-family: roboto;'>Inventaris Barang</p>"
            );
        }
        </script>

        <script language="JavaScript">
        if (window.location == "http://localhost:8080/pengiriman_barang") {
            document.write(
                "<p style='color:black; padding-top:40px; font-size:20px; font-family: roboto;'>Pengiriman Barang</p>"
            );
        }
        </script>

        <script language="JavaScript">
        if (window.location == "http://localhost:8080/keuangan") {
            document.write(
                "<p style='color:black; padding-top:40px; font-size:20px; font-family: roboto;'>Keuangan</p>"
            );
        }
        </script>

        <script language="JavaScript">
        if (window.location == "http://localhost:8080/toko") {
            document.write(
                "<p style='color:black; padding-top:40px; font-size:20px; font-family: roboto;'>Toko</p>"
            );
        }
        </script>

    </ul>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2  d-lg-inline text-gray-600 small"><?= user()->username; ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url(); ?>/img/default.svg"
                    <?= user()->username; ?>>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    My Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>