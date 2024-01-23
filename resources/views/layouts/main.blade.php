<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/admin') }}/vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets/admin') }}/vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/admin') }}/vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin') }}/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin') }}/src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>

<body class={{ Request::routeIs('login') && Request::routeIs('register') ? 'login-page' : '' }}>
    @if (Request::routeIs('login') || Request::routeIs('register'))
        @yield('content')
    @else
        <div class="pre-loader">
            <div class="pre-loader-box">
                <div class="loader-logo"><img src="{{ asset('assets/admin') }}/vendors/images/deskapp-logo.svg"
                        alt=""></div>
                <div class='loader-progress' id="progress_div">
                    <div class='bar' id='bar1'></div>
                </div>
                <div class='percent' id='percent1'>0%</div>
                <div class="loading-text">
                    Loading...
                </div>
            </div>
        </div>

        @include('components.header.main')

        @include('components.rightSidebar')

        @include('components.leftSidebar')

        <div class="mobile-menu-overlay"></div>

        <div class="main-container">
            <div class="pd-ltr-20">
                @yield('content')
                <div class="footer-wrap pd-20 mb-20 card-box">
                    DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit
                        Hingarajiya</a>
                </div>
            </div>
        </div>
    @endif

    <!-- js -->
    @if (Request::routeIs('login') || Request::routeIs('register'))
        <script>
            function togglePasswordVisibility() {
                var passwordInput = document.getElementById("passwordInput");
                var togglePasswordIcon = document.getElementById("togglePasswordIcon");

                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    togglePasswordIcon.classList.remove("dw-padlock1");
                    togglePasswordIcon.classList.add("dw-eye");
                } else {
                    passwordInput.type = "password";
                    togglePasswordIcon.classList.remove("dw-eye");
                    togglePasswordIcon.classList.add("dw-padlock1");
                }
            }
        </script>
    @endif

    <script src="{{ asset('assets/admin') }}/vendors/scripts/core.js"></script>
    <script src="{{ asset('assets/admin') }}/vendors/scripts/script.min.js"></script>
    <script src="{{ asset('assets/admin') }}/vendors/scripts/process.js"></script>
    <script src="{{ asset('assets/admin') }}/vendors/scripts/layout-settings.js"></script>
    <script src="{{ asset('assets/admin') }}/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/admin') }}/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('assets/admin') }}/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('assets/admin') }}/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <!-- buttons for Export datatable -->
    <script src="{{ asset('assets/admin') }}/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets/admin') }}/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('assets/admin') }}/src/plugins/datatables/js/buttons.print.min.js"></script>
    <script src="{{ asset('assets/admin') }}/src/plugins/datatables/js/buttons.html5.min.js"></script>
    <script src="{{ asset('assets/admin') }}/src/plugins/datatables/js/buttons.flash.min.js"></script>
    <script src="{{ asset('assets/admin') }}/src/plugins/datatables/js/pdfmake.min.js"></script>
    <script src="{{ asset('assets/admin') }}/src/plugins/datatables/js/vfs_fonts.js"></script>
    <!-- Datatable Setting js -->
    <script src="{{ asset('assets/admin') }}/vendors/scripts/datatable-setting.js"></script>
</body>

</html>
