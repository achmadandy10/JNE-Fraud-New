<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title') - Legal Akses JNE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href={{ route('dashboard') }} class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="{{ asset('https://ui-avatars.com/api/?name=Achmad-Andybackground=0D8ABC&color=fff') }}"
                            alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Super Admin</h6>
                            <span>Karyawan</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{ route('dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            {{-- <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#drafting-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-file-earmark-text"></i><span>Drafting</span><i
                        class="bi bi-chevron-double-down ms-auto"></i>
                </a>
                <ul id="drafting-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('user.drafting.customer') }}">
                            <span>Customer</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.drafting.vendor_and_supplier') }}">
                            <span>Vendor & Supplier</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.drafting.lease') }}">
                            <span>Lease</span>
                        </a>
                    </li>
                </ul>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#database-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-file-earmark-text"></i><span>Database</span><i
                        class="bi bi-chevron-double-down ms-auto"></i>
                </a>
                <ul id="database-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('database-index') }}">
                            <span>List Peraturan</span>
                        </a>
                    </li>
                </ul>
                <ul id="database-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('database-create') }}">
                            <span>Dokumen Baru</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#database-navss" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-file-earmark-text"></i><span>Informasi</span><i
                        class="bi bi-chevron-double-down ms-auto"></i>
                </a>
                <ul id="database-navss" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('law-index') }}">
                            <span>Klinik Hukum</span>
                        </a>
                    </li>
                </ul>
                <ul id="database-navss" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('qna-index') }}">
                            <span>QnA</span>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#litigation-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-file-earmark-text"></i><span>Litigation</span><i
                        class="bi bi-chevron-double-down ms-auto"></i>
                </a>
                <ul id="litigation-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('user.litigation.customer_dispute') }}">
                            <span>Customer Dispute</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.litigation.fraud') }}">
                            <span>Fraud</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.litigation.outstanding') }}">
                            <span>Outstanding</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.litigation.other') }}">
                            <span>Other</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Litigation Nav --> --}}

            {{-- <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#permit-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-file-earmark-text"></i><span>Permit</span><i
                        class="bi bi-chevron-double-down ms-auto"></i>
                </a>
                <ul id="permit-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('user.permit.new_permit') }}">
                            <span>Perizinan Baru</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.permit.renew_permit') }}">
                            <span>Perpanjangan</span>
                        </a>
                    </li>
                </ul>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('banner-index') }}">
                    <i class="bi bi-file-earmark-text"></i><span>Upload Banner</span><i
                        class="bi bi-chevron-double-right ms-auto"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('regulation-type-index') }}">
                    <i class="bi bi-file-earmark-text"></i><span>Tipe Regulasi</span><i
                        class="bi bi-chevron-double-right ms-auto"></i>
                </a>
            </li>
        </ul>

    </aside>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>@yield('title')</h1>
            <nav>
                <ol class="breadcrumb">

                    @yield('breadcrumb-link')

                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                @yield('content')

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright {{ date('Y') }} <strong><span>JNE</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://www.sakataguna.com/web/index.php">Sakata Guna Kita</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
