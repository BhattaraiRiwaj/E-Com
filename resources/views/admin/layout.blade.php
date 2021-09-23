<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title Page-->
    <title>@yield('page_title')</title>

    <!-- Fontfaces CSS-->
    <script src="https://use.fontawesome.com/f8700e1414.js"></script>
    <link href="{{ asset('admin_asset/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin_asset/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('admin_asset/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('admin_asset/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('admin_asset/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('admin_asset/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin_asset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}"
        rel="stylesheet" media="all">
    <link href="{{ asset('admin_asset/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin_asset/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin_asset/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin_asset/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin_asset/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('admin_asset/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper">
        
        <!--menu fields-->
            @include('admin/menu')
        <!--End menu fields-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">

                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu text-center">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Riwaj</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="admin/logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        @yield('content')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card--no-shadow au-card--no-pad m-b-40">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>


    <script src="{{ asset('admin_asset/vendor/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('admin_asset/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('admin_asset/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_asset/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('admin_asset/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('admin_asset/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('admin_asset/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('admin_asset/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin_asset/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('admin_asset/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('admin_asset/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('admin_asset/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('admin_asset/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('admin_asset/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->