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
                            <h3 class="card-title">Create Hotels</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="Post" action="/hotels-create" enctype = "multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="this">Hotels Name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            id="this">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>City</label>
                                        <select name="city" class="form-control select2bs4 select2-hidden-accessible "
                                            style="width: 100%;" tabindex="-1" aria-hidden="true">
                                            <option selected="selected" disabled>Select a city</option>
                                            @foreach ($cities as $city)
                                                <option>
                                                    <span>{{ $city['city'] }} </span>
                                                    <span>( {{ $city['province'] }} )</span>
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="this">Address</label>
                                        <input type="text" id="address" name="address" class="form-control"
                                            id="this">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="this">Phone</label>
                                        <input type="text" id="phone" name="phone" class="form-control"
                                            id="this">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="this">Email</label>
                                        <input type="text" id="email" name="email" class="form-control"
                                            id="this">
                                    </div>
                                    <div class="fom-group col-sm-6">
                                        <label for="file">Photo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input onchange="previewFile()" type="file" name="file"
                                                    class="custom-file-input" id="file"
                                                    accept="image/jpeg, image/png, image/gif, image/bmp, image/tiff, image/webp, image/svg+xml">
                                                <label class="custom-file-label" for="file">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                        <img src="{{ config('paths.no_image') }}" class="img-fluid mt-2" id="imgshow"
                                            alt="image" style="border-radius: 5px; object-fit: cover !important;">
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
@endsection
