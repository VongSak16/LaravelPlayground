<html lang="en" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('appidentity.app_name') }}</title>
    <link rel="icon" href="/assets/logo.svg">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css?v=3.2.0">
    <script defer="" referrerpolicy="origin"
        src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQWRtaW5MVEUlMjAzJTIwJTdDJTIwVG9wJTIwTmF2aWdhdGlvbiUyMiUyQyUyMnglMjIlM0EwLjM4ODE5NTA2MzI4OTcyNzMlMkMlMjJ3JTIyJTNBMjEzNSUyQyUyMmglMjIlM0ExMDY0JTJDJTIyaiUyMiUzQTEwNTYlMkMlMjJlJTIyJTNBMjEzMyUyQyUyMmwlMjIlM0ElMjJodHRwcyUzQSUyRiUyRmFkbWlubHRlLmlvJTJGdGhlbWVzJTJGdjMlMkZwYWdlcyUyRmxheW91dCUyRnRvcC1uYXYuaHRtbCUyMiUyQyUyMnIlMjIlM0ElMjJodHRwcyUzQSUyRiUyRmFkbWlubHRlLmlvJTJGdGhlbWVzJTJGdjMlMkYlMjIlMkMlMjJrJTIyJTNBMjQlMkMlMjJuJTIyJTNBJTIyVVRGLTglMjIlMkMlMjJvJTIyJTNBLTQyMCUyQyUyMnElMjIlM0ElNUIlNUQlN0Q=">
    </script>
    <script nonce="e59549cb-e6c8-4e81-a850-7c2c2d451d30">
        try {
            (function(w, d) {
                ! function(bB, bC, bD, bE) {
                    bB[bD] = bB[bD] || {};
                    bB[bD].executed = [];
                    bB.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    bB.zaraz._v = "5683";
                    bB.zaraz.q = [];
                    bB.zaraz._f = function(bF) {
                        return async function() {
                            var bG = Array.prototype.slice.call(arguments);
                            bB.zaraz.q.push({
                                m: bF,
                                a: bG
                            })
                        }
                    };
                    for (const bH of ["track", "set", "debug"]) bB.zaraz[bH] = bB.zaraz._f(bH);
                    bB.zaraz.init = () => {
                        var bI = bC.getElementsByTagName(bE)[0],
                            bJ = bC.createElement(bE),
                            bK = bC.getElementsByTagName("title")[0];
                        bK && (bB[bD].t = bC.getElementsByTagName("title")[0].text);
                        bB[bD].x = Math.random();
                        bB[bD].w = bB.screen.width;
                        bB[bD].h = bB.screen.height;
                        bB[bD].j = bB.innerHeight;
                        bB[bD].e = bB.innerWidth;
                        bB[bD].l = bB.location.href;
                        bB[bD].r = bC.referrer;
                        bB[bD].k = bB.screen.colorDepth;
                        bB[bD].n = bC.characterSet;
                        bB[bD].o = (new Date).getTimezoneOffset();
                        if (bB.dataLayer)
                            for (const bO of Object.entries(Object.entries(dataLayer).reduce(((bP, bQ) => ({
                                    ...bP[1],
                                    ...bQ[1]
                                })), {}))) zaraz.set(bO[0], bO[1], {
                                scope: "page"
                            });
                        bB[bD].q = [];
                        for (; bB.zaraz.q.length;) {
                            const bR = bB.zaraz.q.shift();
                            bB[bD].q.push(bR)
                        }
                        bJ.defer = !0;
                        for (const bS of [localStorage, sessionStorage]) Object.keys(bS || {}).filter((bU => bU
                            .startsWith("_zaraz_"))).forEach((bT => {
                            try {
                                bB[bD]["z_" + bT.slice(7)] = JSON.parse(bS.getItem(bT))
                            } catch {
                                bB[bD]["z_" + bT.slice(7)] = bS.getItem(bT)
                            }
                        }));
                        bJ.referrerPolicy = "origin";
                        bJ.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bB[bD])));
                        bI.parentNode.insertBefore(bJ, bI)
                    };
                    ["complete", "interactive"].includes(bC.readyState) ? zaraz.init() : bB.addEventListener(
                        "DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
    <style nonce="e59549cb-e6c8-4e81-a850-7c2c2d451d30">
        .vt-augment {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .vt-augment.drawer {
            display: none;
            width: 700px;
            background: white;
            border: 1px solid #e6e6e6;
            text-align: left;
            z-index: 102;
            position: fixed;
            right: 0;
            top: 0;
            height: 100vh;
            box-shadow: -4px 5px 8px -3px rgba(17, 17, 17, .16);
            animation: slideToRight 0.5s 1 forwards;
            transform: translateX(100vw);
        }

        .vt-augment.drawer[opened] {
            display: flex;
            animation: slideFromRight 0.2s 1 forwards;
        }

        .vt-augment>.spinner {
            position: absolute;
            z-index: 199;
            top: calc(50% - 50px);
            left: calc(50% - 50px);
            border: 8px solid rgba(0, 0, 0, 0.2);
            border-left-color: white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1.2s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes slideFromRight {
            0% {
                transform: translateX(100vw);
            }

            100% {
                transform: translateX(0);
            }
        }

        @keyframes slideToRight {
            100% {
                transform: translateX(100vw);
                display: none;
            }
        }

        @media screen and (max-width: 700px) {
            .vt-augment.drawer {
                width: 100%;
            }
        }

        .brand-col {
            background: #003b95 !important;
        }


        .custom-btn {
            color: #003b95 !important;
            font-weight: 600 !important;
            /* Adjust padding for size */
            border-radius: 0.25rem !important;
            /* Adjust border radius if needed */
        }
    </style>

    <style type="text/css">
        .pace .pace-progress {
            background: #0166ff;
        }

        /* ..... */
        .content-wrapper,
        .brand-link {
            background-color: #0f0f0f !important;
        }

        .custom-img-size {
            width: 34px;
            height: 34px;
            object-fit: cover;
            left: 10px;
        }

        /* .dark-mode .dropdown-menu {
            background-color: #282828;
            color: #fff;
        } */

        .dropdown-menu {
            border-radius: .52rem;
        }

        ::-webkit-scrollbar {
            width: 12px;
            height: 12px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: rgb(34, 34, 34);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.2);
        }

        .fas {
            line-height: 1.4;
        }

        /* .nav-pills .nav-link {
            border-radius: .52rem;
        } */

        /* .dark-mode .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active,
        .dark-mode .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
            background-color: #3d3d3d;
            color: #fff;
        } */

        .card.mycard {
            background-color: #ffb700 !important;
            /* border-radius: 10px !important; */
            border-width: 3px;
            border-style: solid;
            border-color: #ffb700;
            height: 56px;
        }

        .form-control {
            background-color: #212121 !important;
            /* border: 1px solid rgba(255, 255, 255, 0.3) !important;
            border-radius: 5px !important; */
            border: none !important;
            border-top-right-radius: 5px !important;
            border-bottom-right-radius: 5px !important;
            color: white;
        }

        .input-group,
        .form-control {
            height: 50px !important;
        }

        #f1 {
            padding-right: 1.5px;
        }

        #f2 {
            padding-left: 1.5px;
            padding-right: 1.5px;
        }

        #f3 {
            padding-left: 1.5px;
            padding-right: 1.5px;
        }

        #f4 {
            padding-left: 1.5px;
        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px #212121 inset !important;
        }

        .input-group-prepend {
            background-color: #212121​​ !important;
            color: #fff;
        }

        .dark-mode .input-group-text {
            border-color: #212121;
        }
    </style>

    {{-- combox --}}
    <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <style>
        /* Background color of the select box */
        .select2-container--bootstrap4 .select2-selection--single,
        .select2-dropdown,
        .select2-search__field {
            background-color: #212121 !important;
            /* border: 1px solid rgba(255, 255, 255, 0.3) !important;
            border-radius: 5px !important; */
            border: none !important;
            border-top-right-radius: 5px !important;
            border-bottom-right-radius: 5px !important;
            border-top-left-radius: 0px !important;
            border-bottom-left-radius: 0px !important;
            height: 100% !important;
            /* Change to your desired color */
        }

        .select2-container--bootstrap4 .select2-search {
            width: 100%;
            height: 50px;
        }

        .select2-results__option--highlighted {
            background-color: #272727 !important;
        }

        .dark-mode .select2-results__option[aria-selected=true] {
            background-color: #353535 !important;
            color: #ffffff !important;
        }

        .select2-container--bootstrap4 .select2-selection--single .select2-selection__rendered {
            color: rgb(255, 255, 255);
            /* Change to your desired text color */
        }

        .select2-container--bootstrap4 .select2-selection {
            display: flex;
            align-items: center;
        }

        .dark-mode .custom-control-label::before,
        .dark-mode .custom-file-label,
        .dark-mode .custom-file-label::after,
        .dark-mode .custom-select,
        .dark-mode .form-control:not(.form-control-navbar):not(.form-control-sidebar),
        .dark-mode .input-group-text {
            background-color: #212121;
            color: #fff;
        }
    </style>

    {{-- data range  --}}
    <link rel="stylesheet" href="/adminlte/plugins/daterangepicker/daterangepicker.css">

    {{-- dropdown --}}
    <style>
        .dark-mode .dropdown-menu {
            background-color: #282828;
            color: #fff;
        }

        .dropdown-menu {
            border-radius: .52rem;
        }
    </style>
</head>

<body class="dark-mode layout-top-nav" style="height: auto;">
    <div class="wrapper">
        <nav class="brand-col main-header navbar navbar-expand-md navbar-light navbar-dark"
            style="border-bottom: none;">
            <div class="container ">
                <ul class="navbar-nav">
                    <li class="nav-item mr-2">
                        <a href="/home"><img src="/assets/logobg.svg" alt="" class=""
                                style="border-radius: 10px; witdh: 40px; height: 40px; opacity: 0.8;"></a>
                    </li>
                    <li class="nav-item">
                        <a href="/home" style="color: #fff !important;"><span
                                class="nav-item brand-text font-weight-light"
                                style="font-weight: 600 !important; font-size: 30px;">{{ config('appidentity.app_name') }}</span></a>
                    </li>
                </ul>
                </a>
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a href="/register" class="btn btn-block btn-light btn-sm nav-link custom-btn ">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="btn btn-block btn-light btn-sm nav-link custom-btn ml-2">Sign
                            in</a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="brand-col main-header navbar navbar-expand-md navbar-light navbar-dark"
            style="border-bottom: none;">
            <div class="container">
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/home" class="nav-link">Stays</a>
                        </li>
                        <li class="nav-item">
                            <a href="/home" class="nav-link">Bus</a>
                        </li>
                        <li class="nav-item">
                            <a href="/home" class="nav-link">Bus + Hotels</a>
                        </li>
                        <li class="nav-item">
                            <a href="/home" class="nav-link">Vehicle Rantals</a>
                        </li>
                        <li class="nav-item">
                            <a href="/home" class="nav-link">Attractions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content-wrapper" style="min-height: 941.816px;">
            <div class="brand-col content-header mb-4">
                {{-- <div class="container">
                    <div class="row">
                        <div class="col-sm-12 mb-4 mt-4">
                            <h1 class="ml-1" style="font-weight: 900; font-size: 3.5em; margin: 0px 0 0px 0;">Find
                                your next stay</h1>
                            <h5 class="ml-1" style="font-size: 1.6em; margin: 0 0 35px 0;">Search deals on hotels,
                                homes, and much more...</h5>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mycard" style="background-color: #111111;  bottom: 52px !important;">
                                <form class="form-horizontal" method="get" action="/searchresults"
                                    enctype = "multipart/form-data">
                                    <div class="row">
                                        <div class="input-group col" id="f1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-bed"></i>
                                                </span>
                                            </div>
                                            <div class="form-control float-right" style="padding: 0%; height: 100%;">
                                                <select name="city" class="select2bs4 select2-hidden-accessible"
                                                    style="width: 100%; height: 100%;" tabindex="-1"
                                                    aria-hidden="true">
                                                    <option selected="selected" disabled>Select a city</option>
                                                    @foreach ($cities as $cityItem)
                                                        <option value="{{ $cityItem['city'] }}"
                                                            @if (str_contains($city, $cityItem['city'])) selected @endif>
                                                            <span>{{ $cityItem['city'] }} </span>
                                                            <span>( {{ $cityItem['province'] }} )</span>
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-group col" id="f2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control float-right" name="daterange"
                                                id="reservation" value="{{ $dataRange }}">
                                        </div>
                                        <div class="dropdown input-group col" id="f3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-user"></i>
                                                </span>
                                            </div>
                                            <div class="form-control float-right" role="button" id="navbarDropdown"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                style="display: flex; align-items: center;">
                                                {{ $adults }} Adults. {{ $rooms }} Rooms
                                            </div>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                                                style="left: inherit; right: 0px; padding: 5px;">
                                                <input type="text" class="dropdown-item form-control"
                                                    name="adults" placeholder="Adults" value="{{ $adults }}">
                                                <div class="dropdown-divider"></div>
                                                <input type="text" class="dropdown-item form-control"
                                                    name="rooms" placeholder="Rooms" value="{{ $rooms }}">
                                            </div>
                                        </div>
                                        <div class="input-group col-1 d-flex align-items-center justify-content-center"
                                            id="f4">
                                            <button type="submit"
                                                class="btn input-group-prepend d-flex align-items-center justify-content-center"
                                                id="btn4"
                                                style="background: #0057b8; color: white; width: 100%; height: 100%;">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <style>
                        .dark-mode .card.mycard2 {
                            background-color: #121212 !important;
                            border: 1px solid rgba(255, 255, 255, 0.3) !important;
                            border-radius: 12px !important;
                            color: white;
                            margin-bottom: 0px;
                        }

                        .fas {
                            line-height: 1 !important;
                        }
                    </style>
                    <div class="row p-2">
                        <div class="card mycard2 card-solid col-lg-12" style="bottom: 52px !important;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 d-flex align-items-stretch flex-column">
                                        <div class="card mycard2 d-flex flex-fill">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="/assets/no-image.webp" alt="user-avatar"
                                                            class="img-rounded img-fluid"
                                                            style="width: 240px; hieght: 240px; objecy-fit: cover;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h2 class="lead"><b>WPU Shinjuku</b></h2>
                                                        <p class="text-sm"><b>City: </b> Phnom Penh</p>
                                                        <p class="text-sm">4x single Rooms</p>
                                                        <ul class="ml-4 mb-0 fa-ul ">
                                                            <li class="small"><span class="fa-li"><i
                                                                        class="fas fa-lg fa-phone"></i></span> Phone #:
                                                                + 800 - 12 12 23 52</li>
                                                            <li class="small">
                                                                <span class="fa-li"><i
                                                                        class="fas fa-lg fa-envelope"></i>
                                                                </span>
                                                                Emaial : aifaosifjas
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3" style="float: left; text-align: right;">
                                                        <ul class="ml-4 mb-2 fa-ul ">
                                                            <li class="small mb-2">
                                                                Address: Demo Street 123
                                                            </li>
                                                            <li class="small">
                                                                2 nights, 2 adults
                                                            </li>
                                                            <h2 class="lead" style="font-size: 30px;">
                                                                <b>KHR 1023440</b>
                                                            </h2>
                                                            <li class="small">
                                                                Additional charges may apply
                                                            </li>
                                                        </ul>
                                                        <button class="btn btn-block btn-primary ">
                                                            See availability
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <footer class="`ter">

            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>

            <strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>



    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/adminlte/dist/js/adminlte.min.js?v=3.2.0"></script>


    {{-- combox --}}
    <script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'

            })
        });
    </script>

    {{-- data range  --}}
    <script src="/adminlte/plugins/moment/moment.min.js"></script>
    <script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
    <script>
        //data range
        $(function() {
            // Initialize Date Range Picker
            $('#reservation').daterangepicker({
                // Optional: Customize the format
                locale: {
                    format: 'MMMM D, YYYY' // Example: June 17, 2024
                }
            });
        });
    </script>

    {{-- update adults and rooms --}}
    <script>
        $(document).ready(function() {
            $('input[name="adults"], input[name="rooms"]').on('change', function() {
                var adultsValue = $('input[name="adults"]').val();
                var roomsValue = $('input[name="rooms"]').val();
                $('#f3 .form-control').text(adultsValue + ' Adults. ' + roomsValue + ' Rooms');
            });
        });
    </script>
</body>

</html>
