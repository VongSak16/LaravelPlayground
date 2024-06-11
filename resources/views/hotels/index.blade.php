@extends('layout.main')
@section('content')
    <div class="content-header">
        {{-- <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div> --}}
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row ml-3">
                <div class="card mb-3">
                    <a class="btn btn-success" href="hotels-create"><i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class="row ml-3">
                @foreach ($hotels as $hotel)
                    <div class="card mb-3 border" style="width: 840px; overflow: hidden; height: 287px;" href="#">
                        <div class="row g-0">
                            <a class="col-md-4" href="/roomtypes/{{ $hotel->id }}">
                                @php
                                    $photo =
                                        $hotel->photo != null
                                            ? config('paths.image_hotels_path') . '/' . $hotel->photo
                                            : config('paths.no_image');
                                @endphp
                                <img src="{{ $photo }}" class="img-fluid rounded-start m-2" alt="image"
                                    style="border-radius: 5px; object-fit: cover; width: 269px; height: 269px;">
                            </a>
                            <a class="col-md-6" href="/roomtypes/{{ $hotel->id }}">
                                <div class="card-body">
                                    <h4 class="card-title" style="font-size: 30px">{{ $hotel->name }}</h4>
                                    <p class="card-text">
                                        {{ 'ID: ' }} {{ $hotel->id }} <br>
                                        {{ 'Address: ' }} {{ $hotel->address }} <br>
                                        {{ 'City: ' }} {{ $hotel->city }} <br>
                                    </p>
                                </div>
                            </a>
                            <div class="col-md-2">
                                <div class="card-body bg-transparent text-start d-flex flex-column">
                                    <a class="btn btn-primary mb-3" href="/hotels-update/{{ $hotel->id }}">Edit</a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#modal-sm" data-id="{{ $hotel->id }}">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
        a, a:hover{
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
            modal.find('form').attr('action', '/hotels-delete/' + itemId);

            // Set the value of the hidden input
            modal.find('input[name="item_id"]').val(itemId);
        });
    </script>
@endsection