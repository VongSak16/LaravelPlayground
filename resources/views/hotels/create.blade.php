@extends('layout.main')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Create Hotels</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" method="Post" action="/test-create"
                                enctype = "multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="this">Hotels Name</label>
                                            <input type="text" id="txtproductprice" name="txtproductprice"
                                                class="form-control" id="this">
                                        </div>
                                        <div class="form-group col-sm-6" data-select2-id="29">
                                            <label>City</label>
                                            <select class="form-control select2bs4 select2-hidden-accessible "
                                                style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                                                <option selected="selected" data-select2-id="19">Phnom Penh</option>
                                                <option data-select2-id="38">Battambang</option>
                                                <option data-select2-id="39">Siem Reap</option>
                                                <option data-select2-id="40">Sihanoukville</option>
                                                <option data-select2-id="41">Kampot</option>
                                                <option data-select2-id="42">Preah Vihear</option>
                                                <option data-select2-id="43">Kratie</option>
                                                <option data-select2-id="44">Mondulkiri</option>
                                                <option data-select2-id="45">Koh Rong</option>
                                                <option data-select2-id="46">Koh Rong Samloem</option>
                                                <option data-select2-id="47">Kep</option>
                                                <option data-select2-id="48">Stung Treng</option>
                                                <option data-select2-id="49">Ream National Park</option>
                                                <option data-select2-id="50">Preah Vihear Temple</option>
                                                <option data-select2-id="51">Banteay Srei</option>
                                                <option data-select2-id="52">Angkor Wat</option>
                                                <option data-select2-id="53">Angkor Thom</option>
                                                <option data-select2-id="54">Ta Prohm</option>
                                                <option data-select2-id="55">Bayon Temple</option>
                                                <option data-select2-id="56">Srei Temple</option>
                                                <option data-select2-id="57">Phnom Kulen</option>
                                                <option data-select2-id="58">Bokor National Park</option>
                                                <option data-select2-id="59">Kambot</option>
                                                <option data-select2-id="60">Kirirom National Park</option>
                                                <option data-select2-id="61">Z country</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="this">Address</label>
                                            <input type="text" id="txtprepayment" name="txtprepayment"
                                                class="form-control" id="this">
                                        </div>
                                        <div class="fom-group col-sm-6">
                                            <label for="exampleInputFile">Photo</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input onchange="previewFile()" type="file" name="file"
                                                        class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                            <img src="/assets/imgusers//admin.gif" class="img-fluid rounded-start mt-2"
                                                alt="image" style="border-radius: 5px;">
                                        </div>
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
        <!-- /.content -->
    </div>
@endsection
@section('more-links')
    <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <style>
        /* Background color of the select box */
        .select2-container--bootstrap4 .select2-selection--single {
            background-color: #121212 !important;
            border: 1px solid rgba(255, 255, 255, 0.3) !important;
            border-radius: 5px !important;

            /* Change to your desired color */
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
        .custom-file-label::after{
            background-color: #121212 !important;
        }
    </style>
@endsection
@section('more-scripts')
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
@endsection
