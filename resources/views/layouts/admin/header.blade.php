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

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- CSS Files -->
    <link id="pagestyle" href={{ asset('theme2/assets/css/material-dashboard.css') }} rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
    @include('layouts.admin_navigation')
