<html lang="en" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('appidentity.app_name')  }}</title>

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
</head>

<body class="dark-mode layout-top-nav" style="height: auto;">
    <div class="wrapper">

        <nav class="brand-col main-header navbar navbar-expand-md navbar-light navbar-dark"
            style="border-bottom: none;">
            <div class="container">
                <a href="/home" class="navbar-brand">
                    <img src="/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light"
                        style="font-weight: 700 !important;">{{ config('appidentity.app_name')  }}</span>
                </a>
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <button type="button"
                            class="btn btn-block btn-light btn-sm nav-link custom-btn ">Register</button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-block btn-light btn-sm nav-link custom-btn ml-2">Sign
                            in</button>
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

                            <a href="/home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content-wrapper" style="min-height: 941.816px;">
            <div class="brand-col content-header mb-4">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 mb-4 mt-4">
                            <h1 class="ml-1" style="font-weight: 900; font-size: 3em; margin: 0 0 10px 0;">Find
                                your next stay</h1>
                            <h5 class="ml-1" style="font-size: 1.6em; margin: 0 0 10px 0;">Search deals on hotels,
                                homes, and much more...</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card"
                                style="background-color: #111111; bottom: 55px !important; border-width: 3px;  border-style: solid; border-color: #ffb700;">
                                <div class="input-group col-lg-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control float-right" id="reservation">
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

    <div>
        <div class="vtResetstyles">
            <div id="vtoverlay" class="vtoverlay vthidden w3-animate-right
        w3-container">
                <div class="vtmain vthidden" id="vtmain">
                    <div class="vtcontactus">
                        <a id="linktest" href="https://www.virustotal.com">
                            <img class="vtlogo-popup" style=" width: 32px;
                height: 32px;"
                                src="chrome-extension://efbjojhplkelaegfbieplglfidafgoka/icons/vt-logo.svg">
                        </a>
                        <a href="https://www.virustotal.com">VT4Browsers
                        </a>
                    </div>
                    <span id="vtclose"><strong>X</strong></span>
                    <div class="vttextpopup vthidden" id="statustext">
                        <div class="vtscanstatus" id="vtscanstatus"></div>
                        <div class="vtprogress vthidden" id="vtprogress"></div>
                        <br id="brfile">
                        <div class="vtscanstatus" id="vtscanfilelink"></div>
                    </div>
                    <div class="vttextpopup vthidden" id="widgettext">
                        <div id="vtwidgetError"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="vt-augment-container" class="vtzindex vt-augment drawer" style="background: rgb(49, 61, 90);"></div>
    </div><span class="vttooltiptext vthidden">&nbsp;Click to open VirusTotal report&nbsp;<br>with VT Augment</span>
    <style></style>
</body>

</html>
