<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Dharma Wanita Persatuan</title>
    <link rel="stylesheet" href="{{ asset('noble') }}/assets/css/demo_1/style.css">
    <link rel="stylesheet" href="{{ asset('noble') }}/assets/vendors/core/core.css">
    {{-- <link rel="shortcut icon" href="{{ asset('noble') }}/assets/images/favicon.png" /> --}}
</head>

<body>
    <div class="main-wrapper">
        @include('components.sidebar')
        <div class="page-wrapper">
            @include('components.navbar-admin')

            @yield('content')

            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left">Copyright © 2024
                    {{-- <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.  --}}
                    All rights reserved
                </p>
            </footer>
        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('noble') }}/assets/vendors/core/core.js"></script>
    {{-- <script src="{{ asset('noble') }}/assets/vendors/chartjs/Chart.min.js"></script> --}}
    {{-- <script src="{{ asset('noble') }}/assets/vendors/jquery.flot/jquery.flot.js"></script> --}}
    {{-- <script src="{{ asset('noble') }}/assets/vendors/jquery.flot/jquery.flot.resize.js"></script> --}}
    <script src="{{ asset('noble') }}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('noble') }}/assets/vendors/apexcharts/apexcharts.min.js"></script>
    {{-- <script src="{{ asset('noble') }}/assets/vendors/progressbar.js/progressbar.min.js"></script> --}}
    <script src="{{ asset('noble') }}/assets/vendors/feather-icons/feather.min.js"></script>
    <script src="{{ asset('noble') }}/assets/js/template.js"></script>
    <script src="{{ asset('noble') }}/assets/js/dashboard.js"></script>
    <script src="{{ asset('noble') }}/assets/js/datepicker.js"></script>
</body>

</html>
