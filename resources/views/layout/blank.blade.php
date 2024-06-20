<html lang="en" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/assets/logo.svg">
    <title>Hotel</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ config('paths.adminlte_path') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ config('paths.adminlte_path') }}/dist/css/adminlte.min.css">
    {{-- Pace --}}
    <link rel="stylesheet"
        href="{{ config('paths.adminlte_path') }}/plugins/pace-progress/themes/black/pace-theme-flat-top.css">

    @yield('link')

    <style type="text/css">
        .pace .pace-progress {
            background: #0166ff;
            height: 2px;
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

        .dark-mode {
            background-color: #0f0f0f !important;
        }

        body {
            align-items: center;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            height: 100vh;
            -ms-flex-pack: center;
            justify-content: center;
        }
    </style>
</head>

<body class="dark-mode" style="height: 0px;">
    @yield('content')
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ config('paths.adminlte_path') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ config('paths.adminlte_path') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ config('paths.adminlte_path') }}/dist/js/adminlte.js?v=3.2.0"></script>
    {{-- Pace --}}
    <script src="{{ config('paths.adminlte_path') }}/plugins/pace-progress/pace.min.js"></script>
    {{-- @yield('script') --}}
    @yield('script')
</body>

</html>
