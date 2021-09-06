<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= url('assets/') ?>/images/favicon.png">
    <link href="<?= url('assets/') ?>/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= url('assets/') ?>/vendor/chartist/css/chartist.min.css">
    <!-- Vectormap -->
    <link href="<?= url('assets/') ?>/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?= url('assets/') ?>/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="<?= url('assets/') ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?= url('assets/') ?>/css/style.css" rel="stylesheet">
    <link href="<?= url('assets/') ?>/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="<?= url('assets/') ?>/index-2.html" class="brand-logo text-black">
                SIMA
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="<?= url('assets/') ?>/javascript:void(0)" role="button"
                                    data-toggle="dropdown">
                                    <div class="header-info">
                                        <span class="text-black">Hello,<strong>Apriyadi Aries</strong></span>
                                        <p class="fs-12 mb-0">Staff</p>
                                    </div>
                                    <img src="<?= url('assets/') ?>/images/profile/17.jpg" width="20" alt="" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" class="dropdown-item ai-icon" onclick="event.preventDefault(); this.closest('form').submit();">
                                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                                width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                <line x1="21" y1="12" x2="9" y2="12"></line>
                                            </svg>
                                            <span class="ml-2">Logout </span>
                                        </a>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="<?= url('/staff/dashboard') ?>" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a href="<?= url('/staff/surat-masuk-keluar') ?>" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-box-2"></i>
                            <span class="nav-text">Surat Masuk & Keluar</span>
                        </a>
                    </li>
                    <li><a href="<?= url('/staff/dokumen') ?>" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-box-1"></i>
                            <span class="nav-text">Dokumen</span>
                        </a>
                    </li>
                    <li><a href="<?= url('/staff/curicullum-vitae') ?>" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-controls-4"></i>
                            <span class="nav-text">Curicullum Vitae</span>
                        </a>
                    </li>
                    <li><a href="<?= url('/staff/data-pegawai') ?>" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-id-card-4"></i>
                            <span class="nav-text">Data Pegawai</span>
                        </a>
                    </li>
                    <li><a href="<?= url('/staff/data-jabatan') ?>" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-infinity"></i>
                            <span class="nav-text">Data Jabatan</span>
                        </a>
                    </li>
                    <li><a href="<?= url('/staff/jenis-dokumen') ?>" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-layer-1"></i>
                            <span class="nav-text">Jenis Dokumen</span>
                        </a>
                    </li>
                    <li><a href="<?= url('/staff/daftar-instansi-lokasi') ?>" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-location-3"></i>
                            <span class="nav-text">Daftar Instansi & Lokasi</span>
                        </a>
                    </li>
                    <li><a href="<?= url('/staff/daftar-arsip') ?>" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-network-1"></i>
                            <span class="nav-text">Daftar Arsip</span>
                        </a>
                    </li>
                </ul>

                <div class="copyright">
                    <p>2021 All Rights Reserved</p>
                    <p>Made with <span class="heart"></span> by Apriyadi Aries</p>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="<?= url('assets/') ?>/http://dexignzone.com/"
                        target="_blank">Apriyadi Aries </a> 2021</p>
            </div>
        </div>


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= url('assets/') ?>/vendor/global/global.min.js"></script>
    <script src="<?= url('assets/') ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?= url('assets/') ?>/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="<?= url('assets/') ?>/js/custom.min.js"></script>
    <script src="<?= url('assets/') ?>/js/deznav-init.js"></script>
    <script src="<?= url('assets/') ?>/vendor/owl-carousel/owl.carousel.js"></script>

    <!-- Chart piety plugin files -->
    <script src="<?= url('assets/') ?>/vendor/peity/jquery.peity.min.js"></script>

    <!-- Apex Chart -->
    <script src="<?= url('assets/') ?>/vendor/apexchart/apexchart.js"></script>

    <!-- Dashboard 1 -->
    <script src="<?= url('assets/') ?>/js/dashboard/dashboard-1.js"></script>

    <!-- Datatable -->
    <script src="<?= url('assets/') ?>//vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= url('assets/') ?>//js/plugins-init/datatables.init.js"></script>



    <script>
        function carouselReview() {
            /*  testimonial one function by = owl.carousel.js */
            /*  testimonial one function by = owl.carousel.js */
            jQuery('.testimonial-one').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                center: true,
                dots: false,
                navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
                responsive: {
                    0: {
                        items: 2
                    },
                    400: {
                        items: 3
                    },
                    700: {
                        items: 5
                    },
                    991: {
                        items: 6
                    },

                    1200: {
                        items: 4
                    },
                    1600: {
                        items: 5
                    }
                }
            })
        }

        jQuery(window).on('load', function () {
            setTimeout(function () {
                carouselReview();
            }, 1000);
        });

    </script>
</body>

</html>
