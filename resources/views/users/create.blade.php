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
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Create Users</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="Post" action="/users-create" enctype = "multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="form-group col">
                                    <label for="this">{{ 'Name' }}</label>
                                    <input type="text" id="name" name="name" class="form-control" id="this">
                                </div>
                                <div class="form-group col">
                                    <label for="this">{{ 'Username' }}</label>
                                    <input type="text" id="username" name="username" class="form-control"
                                        id="this">
                                </div>
                                <div class="form-group col">
                                    <label for="this">{{ 'Email' }}</label>
                                    <input type="email" id="email" name="email" class="form-control" id="this">
                                </div>
                                <div class="form-group col">
                                    <label for="this">{{ 'Password' }}</label>
                                    <input type="password" id="password" name="password" class="form-control"
                                        id="this">
                                </div>
                                <div class="fom-group col">
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
                                </div>
                                <div class="form-group col-4">
                                    <img src="{{ config('paths.no_image') }}" class="img-fluid mt-2" id="imgshow"
                                        alt="image" style="border-radius: 5px; object-fit: cover !important;">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-light">Submit</button>
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
    <style>
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
