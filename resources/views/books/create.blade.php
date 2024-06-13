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
            <div class="row">
                <div class="card col-md-6">
                    <div class="card-header">
                        <h3 class="card-title">Create Books</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal mb-0" method="Post" action="/books-create" enctype = "multipart/form-data">
                        @csrf

                        <div class="card-body mb-0">
                            <div class="row mb-0">
                                <div class="form-group col-sm-6" data-select2-id="29">
                                    <label>{{ 'Customer' }}</label>
                                    <select name="customer_id" class="form-control select2bs4 select2-hidden-accessible "
                                        style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                                        <option selected="selected" data-select2-id="19" disabled>Select a customer
                                        </option>
                                        @foreach ($customers as $customer)
                                            <option data-select2-id="{{ $customer->id }}" value="{{ $customer->id }}">
                                                {{ $customer->name }} ( ID: {{ $customer->id }} )
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>{{ 'Hotel' }}</label>
                                    <select id="hotel-select" class="form-control select2bs4" style="width: 100%;">
                                        <option selected="selected" disabled>Select a hotel</option>
                                        @foreach ($hotels as $hotel)
                                            <option value="{{ $hotel->id }}">{{ $hotel->name }} (ID:
                                                {{ $hotel->id }})</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label>{{ 'Roomtype' }}</label>
                                    <select name="roomtype_id" id="roomtype-select" class="form-control select2bs4"
                                        style="width: 100%;">
                                        <option selected="selected" disabled>Select a room type</option>
                                        <!-- Room types will be dynamically loaded here -->
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>{{ 'Room' }}</label>
                                    <select name="room_id" id="room-select" class="form-control select2bs4"
                                        style="width: 100%;">
                                        <option selected="selected" disabled>Select a room</option>
                                        <!-- Room types will be dynamically loaded here -->
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="form-group col-sm-6">
                                    <label>{{ 'Checked In' }}</label>
                                    <input type="text" id="checked_in" name="checked_in" class="form-control"
                                        id="this" placeholder="{{ 'Checked_in' }}">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>{{ 'Checked Out' }}</label>
                                    <input type="text" id="checked_out" name="checked_out" class="form-control"
                                        id="this" placeholder="{{ 'Checked_out' }}">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-light">Submit</button>
                        </div>
                    </form>
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

        $(document).ready(function() {
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
            $('#roomtype-select').change(function() {
                var roomtypeId = $(this).val();
                if (roomtypeId) {
                    $.ajax({
                        url: '/getrooms/' + roomtypeId,
                        type: 'GET',
                        success: function(data) {
                            var roomSelect = $('#room-select');
                            roomSelect.empty();
                            roomSelect.append(
                                '<option selected="selected" disabled>Select a room</option>'
                            );
                            $.each(data, function(index, room) {
                                roomSelect.append('<option value="' + room.id +
                                    '">' + 'Room Number: ' + room.number + ' (ID: ' + room.id +
                                    ')</option>');
                            });
                        }
                    });
                }
            });
        });
    </script>
@endsection