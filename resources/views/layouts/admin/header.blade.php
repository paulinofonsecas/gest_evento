<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pageTitle }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons -->
    <link href={{ asset('theme2/assets/css/nucleo-icons.css') }} rel="stylesheet" />
    <link href={{ asset('theme2/assets/css/nucleo-svg.css') }} rel="stylesheet" />
    <link rel="stylesheet" href={{ asset('theme/plugins/fontawesome-free/css/all.min.css') }}>
    <link rel="stylesheet" href={{ asset('theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}>
    <link rel="stylesheet" href={{ asset('theme/plugins/daterangepicker/daterangepicker.css') }}>
    <!-- import SweetAlert from theme/pluggins -->
    <link rel="stylesheet" href={{ asset('theme/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}>
    <!-- import SweetAlert js from theme/pluggins -->
    <script src={{ asset('theme/plugins/sweetalert2/sweetalert2.min.js') }}></script>
    <!-- import Select2 from theme/pluggins -->
    <link rel="stylesheet" href={{ asset('theme/plugins/select2/css/select2.min.css') }}>
    <link rel="stylesheet" href={{ asset('theme/plugins/fullcalendar/main.css') }}>

    <!-- CSS Files -->
    <link id="pagestyle" href={{ asset('theme2/assets/css/material-dashboard.css') }} rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
    @include('layouts.admin_navigation')
