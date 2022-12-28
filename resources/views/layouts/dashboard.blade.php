
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ $title }}</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{ asset('dashboard') }}/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Toko Ayang</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        {{-- <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ Route ('admin.dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="{{ Route ('admin.kategori') }}">
                                <div class="sb-nav-link-icon"><i class="fas fas fa-seedling"></i></div>
                                Kategori
                            </a>
                            <a class="nav-link" href="{{ Route ('admin.transaksi') }}">
                                <div class="sb-nav-link-icon"><i class="fas fab fa-cc-paypal"></i></div>
                                Transaksi
                            </a>
                            <a class="nav-link" href="{{ Route ('admin.laporan') }}">
                                <div class="sb-nav-link-icon"><i class="fas fas fa-clipboard-list"></i></div>
                                Laporan
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fas fa-sign-out-alt"></i></div>
                                Logout
                            </a>
                        </div> --}}
                        {{-- <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                                <li class="nav-item">
                                    <a href="{{ Route ('admin.dashboard') }}" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-folder-open"></i>
                                        <p>Produk
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ Route ('admin.produk') }}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Produk</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ Route ('admin.kategori') }}" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Kategori</p>
                                                </a>
                                            </li>
                                        </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-shopping-cart"></i>
                                        <p>Transaksi
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ Route ('admin.transaksi') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Data Transaksi</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-folder"></i>
                                        <p>Data
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ Route ('admin.customer') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Customer</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-list"></i>
                                        <p>Laporan
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Penjualan</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-sign-out-alt"></i>
                                        <p>Sign Out</p>
                                    </a>
                                </li>
                            </ul>
                        </nav> --}}
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                                <li class="nav-item">
                                    <a href="{{ Route ('admin.dashboard') }}" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>Dashboard</p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-folder-open"></i>
                                        <p>Produk
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ Route ('admin.produk') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Produk</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ Route ('admin.kategori') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Kategori</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-shopping-cart"></i>
                                        <p>Transaksi
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ Route ('admin.transaksi') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Data Transaksi</p>
                                            </a>
                                        </li>
                                        </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-folder"></i>
                                        <p>Data
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ Route ('admin.customer') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Customer</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-list"></i>
                                        <p>Laporan
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ Route ('admin.proseslaporan') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Penjualan</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ Route ('admin.userprofil') }}" class="nav-link">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>Profil</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-sign-out-alt"></i>
                                        <p>Sign Out</p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"></h1>
                        @yield('content')
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('dashboard') }}/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('dashboard') }}/assets/demo/chart-area-demo.js"></script>
        <script src="{{ asset('dashboard') }}/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('dashboard') }}/js/datatables-simple-demo.js"></script>
    </body>
</html>
