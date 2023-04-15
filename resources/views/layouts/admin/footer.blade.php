
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
                    data: [{{ $eventosComEstadoAceitesDoAno }}],
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
                    data: [{{ $eventosComEstadoFinalizadosDoAno }}],
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
