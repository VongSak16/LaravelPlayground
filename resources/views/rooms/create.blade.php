@extends('layout.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-lg-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Create Rooms</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="Post" action="/rooms-create" enctype = "multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="this">{{ 'Number' }}</label>
                                        <input type="text" id="number" name="number" class="form-control"
                                            id="this">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Hotel</label>
                                        <select id="hotel-select" class="form-control select2bs4" style="width: 100%;">
                                            <option selected="selected" disabled>Select a hotel</option>
                                            @if (count($hotels) === 1)
                                                @foreach ($hotels as $hotel)
                                                    <option value="{{ $hotel->id }}" selected>{{ $hotel->name }} (ID:
                                                        {{ $hotel->id }})</option>
                                                @endforeach
                                            @else
                                                @foreach ($hotels as $hotel)
                                                    <option value="{{ $hotel->id }}">{{ $hotel->name }} (ID:
                                                        {{ $hotel->id }})</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label>RoomTypes</label>
                                        <select name="roomtype_id" id="roomtype-select" class="form-control select2bs4"
                                            style="width: 100%;">
                                            <option selected="selected" disabled>Select a room type</option>
                                            <!-- Room types will be dynamically loaded here -->
                                            @if (count($hotels) === 1)
                                                @foreach ($roomtypes as $item)
                                                    <option value="{{ $item->id }}"
                                                        @if (isset($roomtype) && $roomtype->id === $item->id) selected @endif>
                                                        {{ $item->name }} (ID: {{ $item->id }})
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option>available</option>
                                            <option>under_maintenance</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-light">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
@section('link')
    <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <style>
        /* Background color of the select box */
        .select2-container--bootstrap4 .select2-selection--single,
        .select2-dropdown,
        .select2-search__field {
            background-color: #121212 !important;
            border: 1px solid rgba(255, 255, 255, 0.3) !important;
            border-radius: 5px !important;

            /* Change to your desired color */
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

        .card {
            background-color: #212121 !important;
            border: 1px solid rgba(255, 255, 255, 0.3) !important;
            border-radius: 10px !important;

        }

        .form-control {
            background-color: #121212 !important;
            border: 1px solid rgba(255, 255, 255, 0.3) !important;
            border-radius: 5px !important;
            color: white;
        }

        .custom-file-label {
            background-color: #121212 !important;
            border: 1px solid rgba(255, 255, 255, 0.3) !important;
            border-radius: 5px !important;
            color: white;
        }

        .input-group-text {
            background-color: #121212 !important;
            border: 1px solid rgba(255, 255, 255, 0.3) !important;
            border-radius: 5px !important;
            color: white;
        }

        .custom-file-label::after {
            background-color: #121212 !important;
        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px #121212 inset !important;
        }
    </style>
@endsection
@section('script')
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
    <script type="text/javascript">
        function previewFile() {
            const preview = document.getElementById('imgshow');
            const file = document.querySelector('input[type=file]').files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function() {
                // convert image file to base64 string
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            // Initialize Select2
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });

            // Handle hotel selection change
            $('#hotel-select').change(function() {
                var hotelId = $(this).val();
                if (hotelId) {
                    $.ajax({
                        url: '/getroomtypes/' + hotelId,
                        type: 'GET',
                        success: function(data) {
                            var roomtypeSelect = $('#roomtype-select');
                            roomtypeSelect.empty();
                            roomtypeSelect.append(
                                '<option selected="selected" disabled>Select a room type</option>'
                            );
                            $.each(data, function(index, roomtype) {
                                roomtypeSelect.append('<option value="' + roomtype.id +
                                    '">' + roomtype.name + ' (ID: ' + roomtype.id +
                                    ')</option>');
                            });
                        }
                    });
                }
            });
        });
    </script>
@endsection
