<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{ asset('theme/plugins/fontawesome-free/css/all.css') }}>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href={{ asset('theme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href={{ asset('theme/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}>
    <!-- Toastr -->
    <link rel="stylesheet" href={{ asset('theme/plugins/toastr/toastr.min.css') }}>
    <!-- iCheck -->
    <link rel="stylesheet" href={{ asset('theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}>
    <!-- JQVMap -->
    <link rel="stylesheet" href={{ asset('theme/plugins/jqvmap/jqvmap.min.css') }}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ asset('theme/dist/css/adminlte.min.css') }}>
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href={{ asset('theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}>
    <!-- Daterange picker -->
    <link rel="stylesheet" href={{ asset('theme/plugins/daterangepicker/daterangepicker.css') }}>
    <!-- summernote -->
    <link rel="stylesheet" href={{ asset('theme/plugins/summernote/summernote-bs4.min.css') }}>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @livewireScripts

    <!-- jQuery UI 1.11.4 -->
    <script src={{ asset('theme/plugins/jquery-ui/jquery-ui.min.js') }}></script>
    <!-- Bootstrap 4 -->
    <script src={{ asset('theme/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <!-- ChartJS -->
    <script src={{ asset('theme/plugins/chart.js/Chart.min.js') }}></script>
    <!-- Sparkline -->

    <script src={{ asset('theme/plugins/sweetalert2/sweetalert2.min.js') }}></script>
    <!-- Toastr -->
    <script src={{ asset('theme/plugins/toastr/toastr.min.js') }}></script>

    <script src={{ asset('theme/plugins/sparklines/sparkline.js') }}></script>
    <!-- JQVMap -->
    <script src={{ asset('theme/plugins/jqvmap/jquery.vmap.min.js') }}></script>
    <script src={{ asset('theme/plugins/jqvmap/maps/jquery.vmap.usa.js') }}></script>
    <!-- jQuery Knob Chart -->
    <script src={{ asset('theme/plugins/jquery-knob/jquery.knob.min.js') }}></script>
    <!-- daterangepicker -->
    <script src={{ asset('theme/plugins/moment/moment.min.js') }}></script>
    <script src={{ asset('theme/plugins/daterangepicker/daterangepicker.js') }}></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src={{ asset('theme/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}></script>
    <!-- Summernote -->
    <script src={{ asset('theme/plugins/summernote/summernote-bs4.min.js') }}></script>
    <!-- overlayScrollbars -->
    <script src={{ asset('theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}></script>
    <script src={{ asset('theme/plugins/filterizr/jquery.filterizr.min.js') }}></script>
    <script src={{ asset('theme/plugins/ekko-lightbox/ekko-lightbox.min.js') }}></script>
    <!-- AdminLTE App -->
    <script src={{ asset('theme/dist/js/adminlte.js') }}></script>
    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({
                gutterPixels: 3
            });
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>
    <!-- AdminLTE for demo purposes -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

</body>

</html>
