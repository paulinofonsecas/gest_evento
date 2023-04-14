<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestão de eventos</title>

    {{-- <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles --}}

    {{-- <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href={{ asset('theme/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}>
    <!-- Toastr -->
    <link rel="stylesheet" href={{ asset('theme/plugins/toastr/toastr.min.css') }}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ asset('theme/dist/css/adminlte.min.css') }}> --}}

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

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa-regular fa-calendar"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Eventos para hoje</p>
                                <h4 class="mb-0">{{ $numeroDeEventosMarcadosParaHoje }}</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0">Mais detalhes</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Total de eventos</p>
                                <h4 class="mb-0">{{ $totalDeEventos }}</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0">Mais detalhes</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Total de usuarios</p>
                                <h4 class="mb-0">{{ $totalDeUsuarios }}</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0">Mais detalhes</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4 mb-4">
                <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>Eventos</h6>
                                    <p class="text-sm mb-0">
                                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                                        <span class="font-weight-bold ms-1">30 finalizados</span> este mês
                                    </p>
                                </div>
                                <div class="col-lg-6 col-5 my-auto text-end">
                                    <div class="dropdown float-lg-end pe-4">
                                        <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa fa-ellipsis-v text-secondary" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5"
                                            aria-labelledby="dropdownTable">
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Another
                                                    action</a></li>
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Something
                                                    else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Cliente</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Descrição</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Localização</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($eventos as $evento)
                                            <tr>
                                                <td>
                                                    <a href={{ route('eventos.show', [$evento->id]) }}>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">{{ $evento->user->name }}</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href={{ route('eventos.show', [$evento->id]) }}>
                                                        {{ $evento->descricao }}
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <a href={{ route('eventos.show', [$evento->id]) }}>
                                                        {{ $evento->localizacao }}
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a href={{ route('eventos.show', [$evento->id]) }}>
                                                        {{ $evento->estadoEvento->descricao }}
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2 ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <canvas id="chart-bars" class="chart-canvas" height="212" width="427"
                                        style="display: block; box-sizing: border-box; height: 170px; width: 341.7px;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0 ">Evento com estado Aguardando </h6>
                            <p class="text-sm ">Eventos marcados a espera de serem revistos</p>
                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                <p class="mb-0 text-sm"> Data do ultimo evento agendado 13/04/2023 </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2  ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <canvas id="chart-line" class="chart-canvas" height="212" width="427"
                                        style="display: block; box-sizing: border-box; height: 170px; width: 341.7px;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0 ">Eventos com estado Confirmado </h6>
                            <p class="text-sm ">Eventos marcados e confirmados</p>
                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                <p class="mb-0 text-sm"> Data do ultimo evento confirmado 13/04/2023 </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mb-3">
                    <div class="card z-index-2 ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <canvas id="chart-line-tasks" class="chart-canvas" height="212" width="427"
                                        style="display: block; box-sizing: border-box; height: 170px; width: 341.7px;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0 ">Eventos com estado Finalizado </h6>
                            <p class="text-sm ">Eventos finalizados</p>
                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                <p class="mb-0 text-sm"> Data do ultimo evento finalizado 10/04/2023 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 746px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 435px;"></div>
        </div>
    </main>

    @livewireScripts
    <!-- Core -->
    <script src={{ asset('theme2/assets/js/core/popper.min.js') }}></script>
    <script src={{ asset('theme2/assets/js/core/bootstrap.min.js') }}></script>

    <!-- Theme JS -->
    <script src={{ asset('theme2/assets/js/material-dashboard.min.js') }}></script>

    <script src={{ asset('theme2/assets/js/core/popper.min.js') }}></script>
    <script src={{ asset('theme2/assets/js/core/bootstrap.min.js') }}></script>
    <script src={{ asset('theme2/assets/js/plugins/perfect-scrollbar.min.js') }}></script>
    <script src={{ asset('theme2/assets/js/plugins/smooth-scrollbar.min.js') }}></script>
    <script src={{ asset('theme2/assets/js/plugins/chartjs.min.js') }}></script>
    <script>
        var ctx = document.getElementById("chart-bars").getContext("2d");

        new Chart(ctx, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [{{ $eventosComEstadoAgendadoDoAno }}],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });


        var ctx2 = document.getElementById("chart-line").getContext("2d");

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [{{ $eventosComEstadoAceitesDoAno}}],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

        new Chart(ctx3, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [{{ $eventosComEstadoFinalizadosDoAno}}],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#f8f9fa',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>

    <script src={{ asset('theme2/assets/js/material-dashboard.min.js?v=3.0.5') }}></script>
    <script defer=""
        src="https://static.cloudflareinsights.com/beacon.min.js/v2b4487d741ca48dcbadcaf954e159fc61680799950996"
        integrity="sha512-D/jdE0CypeVxFadTejKGTzmwyV10c1pxZk/AqjJuZbaJwGMyNHY3q/mTPWqMUnFACfCTunhZUVcd4cV78dK1pQ=="
        data-cf-beacon="{&quot;rayId&quot;:&quot;7b69c96d3f0c3eb1&quot;,&quot;version&quot;:&quot;2023.3.0&quot;,&quot;r&quot;:1,&quot;token&quot;:&quot;1b7cbb72744b40c580f8633c6b62637e&quot;,&quot;si&quot;:100}"
        crossorigin="anonymous"></script>

    <div id="imageDownloaderSidebarContainer">
        <div class="image-downloader-ext-container">
            <div tabindex="-1" class="b-sidebar-outer">
                <!---->
                <div id="image-downloader-sidebar" tabindex="-1" role="dialog" aria-modal="false"
                    aria-hidden="true" class="b-sidebar shadow b-sidebar-right bg-light text-dark"
                    style="width: 500px; display: none;">
                    <!---->
                    <div class="b-sidebar-body">
                        <div></div>
                    </div>
                    <!---->
                </div>
                <!---->
                <!---->
            </div>
        </div>
    </div>
    <style>
        #ofBar {
            background: #fff;
            z-index: 999999999;
            font-size: 16px;
            color: #333;
            padding: 16px 40px;
            font-weight: 400;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 40px;
            width: 80%;
            border-radius: 8px;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 13px 27px -5px rgba(50, 50, 93, 0.25), 0 8px 16px -8px rgba(0, 0, 0, 0.3), 0 -6px 16px -6px rgba(0, 0, 0, 0.025);
        }

        #ofBar-logo img {
            height: 50px;
        }

        #ofBar-content {
            display: inline;
            padding: 0 15px;
        }

        #ofBar-right {
            display: flex;
            align-items: center;
        }

        #ofBar b {
            font-size: 15px !important;
        }

        #count-down {
            display: initial;
            padding-left: 10px;
            font-weight: bold;
            font-size: 20px;
        }

        #close-bar {
            font-size: 17px;
            opacity: 0.5;
            cursor: pointer;
            color: #808080;
            font-weight: bold;
        }

        #close-bar:hover {
            opacity: 1;
        }

        #btn-bar {
            background-image: linear-gradient(310deg, #141727 0%, #3A416F 100%);
            color: #fff;
            border-radius: 4px;
            padding: 10px 20px;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            font-size: 12px;
            opacity: .95;
            margin-right: 20px;
            box-shadow: 0 5px 10px -3px rgba(0, 0, 0, .23), 0 6px 10px -5px rgba(0, 0, 0, .25);
        }

        #btn-bar,
        #btn-bar:hover,
        #btn-bar:focus,
        #btn-bar:active {
            text-decoration: none !important;
            color: #fff !important;
        }

        #btn-bar:hover {
            opacity: 1;
        }

        #btn-bar span,
        #ofBar-content span {
            color: red;
            font-weight: 700;
        }

        #oldPriceBar {
            text-decoration: line-through;
            font-size: 16px;
            color: #fff;
            font-weight: 400;
            top: 2px;
            position: relative;
        }

        #newPrice {
            color: #fff;
            font-size: 19px;
            font-weight: 700;
            top: 2px;
            position: relative;
            margin-left: 7px;
        }

        #fromText {
            font-size: 15px;
            color: #fff;
            font-weight: 400;
            margin-right: 3px;
            top: 0px;
            position: relative;
        }

        @media(max-width: 991px) {}

        @media (max-width: 768px) {
            #count-down {
                display: block;
                margin-top: 15px;
            }

            #ofBar {
                flex-direction: column;
                align-items: normal;
            }

            #ofBar-content {
                margin: 15px 0;
                text-align: center;
                font-size: 18px;
            }

            #ofBar-right {
                justify-content: flex-end;
            }
        }
    </style>

    <script type="text/javascript" id="">
        function setCookie(b, d, c) {
            var a = new Date;
            a.setTime(a.getTime() + 864E5 * c);
            c = "expires\x3d" + a.toUTCString();
            document.cookie = b + "\x3d" + d + ";" + c + ";path\x3d/"
        }

        function readCookie(b) {
            b += "\x3d";
            for (var d = document.cookie.split(";"), c = 0; c < d.length; c++) {
                for (var a = d[c];
                    " " == a.charAt(0);) a = a.substring(1, a.length);
                if (0 == a.indexOf(b)) return a.substring(b.length, a.length)
            }
            return null
        }

        function createOfferBar() {
            var b = document.createElement("div");
            b.setAttribute("id", "ofBar");
            b.innerHTML =
                "\x3cdiv id\x3d'ofBar-logo'\x3e \x3cimg alt\x3d'creative-tim-logo' src\x3d'https://s3.amazonaws.com/creativetim_bucket/static-assets/logo-ct-black.png'\x3e\x3c/div\x3e\x3cdiv id\x3d'ofBar-content'\x3e\ud83c\udf37 Select your favorite \x3cb\x3eSpring Bundle\x3c/b\x3e and enjoy a whopping \x3cb\x3e85% discount\x3c/b\x3e on its price \u23f0 3 Days Left\x3c/div\x3e\x3cdiv id\x3d'ofBar-right'\x3e\x3ca href\x3d'https://www.creative-tim.com/campaign?ref\x3dct-demos' target\x3d'_blank' id\x3d'btn-bar'\x3eView Offer\x3c/a\x3e\x3ca id\x3d'close-bar'\x3e\u00d7\x3c/a\x3e\x3c/div\x3e";
            document.body.insertBefore(b,
                document.body.firstChild)
        }

        function closeOfferBar() {
            document.getElementById("ofBar").setAttribute("style", "display:none");
            setCookie("view_offer_bar", "true", 1)
        }
        var value = readCookie("view_offer_bar");
        null == value && (createOfferBar(), document.getElementById("close-bar").addEventListener("click", closeOfferBar));
    </script>
    <script type="text/javascript" id="">
        ! function(d, g, e) {
            d.TiktokAnalyticsObject = e;
            var a = d[e] = d[e] || [];
            a.methods = "page track identify instances debug on off once ready alias group enableCookie disableCookie"
                .split(" ");
            a.setAndDefer = function(b, c) {
                b[c] = function() {
                    b.push([c].concat(Array.prototype.slice.call(arguments, 0)))
                }
            };
            for (d = 0; d < a.methods.length; d++) a.setAndDefer(a, a.methods[d]);
            a.instance = function(b) {
                b = a._i[b] || [];
                for (var c = 0; c < a.methods.length; c++) a.setAndDefer(b, a.methods[c]);
                return b
            };
            a.load = function(b, c) {
                var f = "https://analytics.tiktok.com/i18n/pixel/events.js";
                a._i = a._i || {};
                a._i[b] = [];
                a._i[b]._u = f;
                a._t = a._t || {};
                a._t[b] = +new Date;
                a._o = a._o || {};
                a._o[b] = c || {};
                c = document.createElement("script");
                c.type = "text/javascript";
                c.async = !0;
                c.src = f + "?sdkid\x3d" + b + "\x26lib\x3d" + e;
                b = document.getElementsByTagName("script")[0];
                b.parentNode.insertBefore(c, b)
            };
            a.load("CC6UAQBC77U7GVKHLC4G");
            a.page()
        }(window, document, "ttq");
    </script>
    <iframe id="_hjSafeContext_43964717" title="_hjSafeContext" tabindex="-1" aria-hidden="true" src="about:blank"
        style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe><iframe
        id="epik_localstore" src="https://ct.pinterest.com/ct.html" width="1" height="1"
        style="display: none;"></iframe>
</body>

</html>
