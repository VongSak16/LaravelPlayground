@extends('layout.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Rooms</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            @if (isset($roomtype))
                <div class="row ml-1">
                    <div class="card mycard2 d-flex flex-fill">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    @php
                                        $photo =
                                            $roomtype->photo != null
                                                ? config('paths.image_roomtypes_path') . '/' . $roomtype->photo
                                                : config('paths.no_image');
                                    @endphp
                                    <img src="{{ $photo }}" alt="user-avatar" class="img-rounded img-fluid"
                                        style="width: 200px; hieght: 200px; objecy-fit: cover;">
                                </div>
                                <div class="col-md-6">
                                    <h2 class="lead"><b>{{ $roomtype->name }}</b></h2>
                                    <p class="text-sm"><b>Price: </b>$ {{ $roomtype->price }}</p>
                                    <ul class="ml-1 mb-0 fa-ul ">
                                        <li class="small">
                                            <a href="/roomtypes/{{ $hotel->id }}">Hotel: {{ $hotel->name }}</a>
                                        </li>
                                        <li class="small">
                                            {{ $rooms->count() }} x Rooms
                                        </li>
                                        <li class="small">
                                            Max Adults : {{ $roomtype->adults }}
                                        </li>
                                        <li class="small">
                                            Details : {{ $roomtype->details }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $roomtype_id = '/' . $roomtype->id;
                    $hotel_id = '/' . $hotel->id;
                @endphp
            @else
                @php
                    $roomtype_id = '';
                    $hotel_id = '';
                @endphp
            @endif
            <div class="row ml-1">
                <div class="card ml-1">
                    <a class="btn btn-white" href="/roomtypes{{ $hotel_id }}"><i class="fas fa-chevron-left"></i></a>
                </div>
                <div class="card ml-2">
                    <a class="btn btn-success" href="/rooms-create{{ $roomtype_id }}"><i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="" class=" dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example" class="table table-bordered table-striped dtr-inline">
                                            <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="Rendering engine: activate to sort column descending">
                                                        {{ 'ID' }}
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Browser: activate to sort column ascending">
                                                        {{ 'Number' }}
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Platform(s): activate to sort column ascending">
                                                        {{ 'Room Type' }}
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Platform(s): activate to sort column ascending">
                                                        {{ 'Hotel' }}
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Engine version: activate to sort column ascending">
                                                        {{ 'Status' }}
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Engine version: activate to sort column ascending">
                                                        {{ 'Book ID' }}
                                                    </th>
                                                    <th>
                                                        {{ 'Action' }}
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($rooms as $item)
                                                    <tr class="odd">
                                                        <td class="dtr-control sorting_1" tabindex="0">
                                                            {{ $item->id }}
                                                        </td>
                                                        <td>{{ $item->number }}</td>
                                                        <td>{{ $item->roomtype_name }}
                                                            <br><small style="opacity: 0.5">id:
                                                                {{ $item->roomtype_id }}</small>
                                                        </td>
                                                        <td>{{ $item->hotel_name }}
                                                            <br><small style="opacity: 0.5">id:
                                                                {{ $item->hotel_id }}</small>
                                                        </td>
                                                        <td>
                                                            @if ($item->status == 'available' || $item->status == 'under_maintenance')
                                                                <a class="btn btn-sm btn-primary">
                                                                    {{ $item->status }}
                                                                </a>
                                                            @else
                                                                <a href="#" class="btn btn-sm btn-danger">
                                                                    {{ $item->status }}
                                                                </a>
                                                            @endif
                                                        </td>
                                                        <td>{{ $item->book_id }}</td>
                                                        <td class="project-actions text-right">
                                                            <a class="btn btn-info btn-sm" href="#">
                                                                <i class="fas fa-pencil-alt">
                                                                </i>
                                                                Edit
                                                            </a>
                                                            <button type="button" class="btn btn-danger btn-info btn-sm"
                                                                data-toggle="modal" data-target="#modal-sm"
                                                                data-id="{{ $item->id }}">Delete</button>
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
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="modal fade" id="modal-sm" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Report</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this?</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <form class="form-horizontal" method="POST" action="">
                            @csrf
                            <input type="hidden" name="item_id" value="">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('link')
    @parent
    <link rel="stylesheet"
        href="{{ config('paths.adminlte_path') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ config('paths.adminlte_path') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ config('paths.adminlte_path') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <script defer="" referrerpolicy="origin"
        src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQWRtaW5MVEUlMjAzJTIwJTdDJTIwRGF0YVRhYmxlcyUyMiUyQyUyMnglMjIlM0EwLjIzMzU4OTY1OTU2NDY2ODkzJTJDJTIydyUyMiUzQTE4OTklMkMlMjJoJTIyJTNBOTMyJTJDJTIyaiUyMiUzQTkyNCUyQyUyMmUlMjIlM0ExODk3JTJDJTIybCUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGYWRtaW5sdGUuaW8lMkZ0aGVtZXMlMkZ2MyUyRnBhZ2VzJTJGdGFibGVzJTJGZGF0YS5odG1sJTIyJTJDJTIyciUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGd3d3Lmdvb2dsZS5jb20lMkYlMjIlMkMlMjJrJTIyJTNBMjQlMkMlMjJuJTIyJTNBJTIyVVRGLTglMjIlMkMlMjJvJTIyJTNBLTQyMCUyQyUyMnElMjIlM0ElNUIlNUQlN0Q=">
    </script>
    <script nonce="8de81377-f9d7-4288-a2c4-982004667d41">
        try {
            (function(w, d) {
                ! function(j, k, l, m) {
                    j[l] = j[l] || {};
                    j[l].executed = [];
                    j.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    j.zaraz._v = "5671";
                    j.zaraz.q = [];
                    j.zaraz._f = function(n) {
                        return async function() {
                            var o = Array.prototype.slice.call(arguments);
                            j.zaraz.q.push({
                                m: n,
                                a: o
                            })
                        }
                    };
                    for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
                    j.zaraz.init = () => {
                        var q = k.getElementsByTagName(m)[0],
                            r = k.createElement(m),
                            s = k.getElementsByTagName("title")[0];
                        s && (j[l].t = k.getElementsByTagName("title")[0].text);
                        j[l].x = Math.random();
                        j[l].w = j.screen.width;
                        j[l].h = j.screen.height;
                        j[l].j = j.innerHeight;
                        j[l].e = j.innerWidth;
                        j[l].l = j.location.href;
                        j[l].r = k.referrer;
                        j[l].k = j.screen.colorDepth;
                        j[l].n = k.characterSet;
                        j[l].o = (new Date).getTimezoneOffset();
                        if (j.dataLayer)
                            for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({
                                    ...x[1],
                                    ...y[1]
                                })), {}))) zaraz.set(w[0], w[1], {
                                scope: "page"
                            });
                        j[l].q = [];
                        for (; j.zaraz.q.length;) {
                            const z = j.zaraz.q.shift();
                            j[l].q.push(z)
                        }
                        r.defer = !0;
                        for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C
                            .startsWith("_zaraz_"))).forEach((B => {
                            try {
                                j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B))
                            } catch {
                                j[l]["z_" + B.slice(7)] = A.getItem(B)
                            }
                        }));
                        r.referrerPolicy = "origin";
                        r.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
                        q.parentNode.insertBefore(r, q)
                    };
                    ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener(
                        "DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
    <style nonce="8de81377-f9d7-4288-a2c4-982004667d41">
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
    </style>
    <link rel="stylesheet" href="{{ config('paths.css') }}/card.css">
@endsection
@section('script')
    @parent
    <script src="{{ config('paths.adminlte_path') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ config('paths.adminlte_path') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ config('paths.adminlte_path') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="{{ config('paths.adminlte_path') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
    </script>
    <script src="{{ config('paths.adminlte_path') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ config('paths.adminlte_path') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

    <script>
        $(function() {
            $("#example").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "paging": false,
                "info": false,
                "searching": true,
            });
        });
    </script>
@endsection
@section('link')
    {{-- For Alert Message --}}
    <link rel="stylesheet"
        href="{{ config('paths.adminlte_path') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="{{ config('paths.adminlte_path') }}/plugins/toastr/toastr.min.css">
    <style>
        .modal-dialog {
            display: flex !important;
            align-items: center;
            justify-content: center;
            height: 100%;
            margin-top: -10vh;
        }

        .modal-content {
            background-color: #212121 !important;
        }

        .modal-header,
        .modal-footer {
            border: none;
        }

        a,
        a:hover {
            color: aliceblue !important;
        }
    </style>
    <link rel="stylesheet" href="{{ config('paths.css') }}/card.css">
@endsection

@section('script')
    {{-- For Alert Message --}}
    <script src="{{ config('paths.adminlte_path') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="{{ config('paths.adminlte_path') }}/plugins/toastr/toastr.min.js"></script>
    <script>
        $('#modal-sm').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var itemId = button.data('id'); // Extract info from data-* attributes
            var modal = $(this);

            // Update the form action with the item ID
            modal.find('form').attr('action', '/rooms-delete/' + itemId);

            // Set the value of the hidden input
            modal.find('input[name="item_id"]').val(itemId);
        });
    </script>
@endsection
