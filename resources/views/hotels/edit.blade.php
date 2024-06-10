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
                                <h3 class="card-title">Edit Hotels</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" method="Post" action="/hotels-update/{{ $hotel->id }}"
                                enctype = "multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="this">Hotels Name</label>
                                            <input type="text" id="name" name="name" class="form-control"
                                                id="this" value="{{ $hotel->name }}">
                                        </div>
                                        <div class="form-group col-sm-6" data-select2-id="29">
                                            <label>City</label>
                                            <select name="city"
                                                class="form-control select2bs4 select2-hidden-accessible "
                                                style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true"
                                                title="{{ $hotel->city }}">
                                                <option selected="selected" data-select2-id="19">{{ $hotel->city }}
                                                </option>
                                                <option data-select2-id="37">Phnom Penh</option>
                                                <option data-select2-id="38">Battambang</option>
                                                <option data-select2-id="39">Siem Reap</option>
                                                <option data-select2-id="40">Sihanoukville</option>
                                                <option data-select2-id="41">Kampot</option>
                                                <option data-select2-id="42">Preah Vihear</option>
                                                <option data-select2-id="43">Kratie</option>
                                                <option data-select2-id="44">Mondulkiri</option>
                                                <option data-select2-id="45">Koh Rong - Sihanoukville</option>
                                                <option data-select2-id="46">Koh Rong Samloem - Sihanoukville</option>
                                                <option data-select2-id="47">Kep</option>
                                                <option data-select2-id="48">Stung Treng</option>
                                                <option data-select2-id="49">Ream National Park - Sihanoukville</option>
                                                <option data-select2-id="50">Preah Vihear Temple - Preah Vihear</option>
                                                <option data-select2-id="51">Banteay Srei - Siem Reap</option>
                                                <option data-select2-id="52">Angkor Wat - Siem Reap</option>
                                                <option data-select2-id="53">Angkor Thom - Siem Reap</option>
                                                <option data-select2-id="54">Ta Prohm - Siem Reap</option>
                                                <option data-select2-id="55">Bayon Temple - Siem Reap</option>
                                                <option data-select2-id="56">Srei Temple - Siem Reap</option>
                                                <option data-select2-id="57">Phnom Kulen - Siem Reap</option>
                                                <option data-select2-id="58">Bokor National Park - Kampot</option>
                                                <option data-select2-id="60">Kirirom National Park - Kampong Speu</option>
                                                <option data-select2-id="61">Banteay Meanchey</option>
                                                <option data-select2-id="62">Kampong Cham</option>
                                                <option data-select2-id="63">Kampong Chhnang</option>
                                                <option data-select2-id="64">Kampong Speu</option>
                                                <option data-select2-id="65">Kampong Thom</option>
                                                <option data-select2-id="66">Kandal</option>
                                                <option data-select2-id="67">Oddar Meanchey</option>
                                                <option data-select2-id="68">Pailin</option>
                                                <option data-select2-id="69">Pursat</option>
                                                <option data-select2-id="70">Ratanakiri</option>
                                                <option data-select2-id="71">Takeo</option>
                                                <option data-select2-id="72">Tboung Khmum</option>
                                                <option data-select2-id="73">Banlung - Ratanakiri</option>
                                                <option data-select2-id="74">Senmonorom - Mondulkiri</option>
                                                <option data-select2-id="75">Svay Rieng - Svay Rieng</option>
                                                <option data-select2-id="76">Samraong - Oddar Meanchey</option>
                                                <option data-select2-id="77">Suong - Tboung Khmum</option>
                                                <option data-select2-id="78">Tbong Khmum - Tboung Khmum</option>
                                                <option data-select2-id="79">Sisophon - Banteay Meanchey</option>
                                                <option data-select2-id="80">Serei Saophoan - Banteay Meanchey</option>
                                                <option data-select2-id="81">Neak Leung - Prey Veng</option>
                                                <option data-select2-id="82">Bavet - Svay Rieng</option>
                                                <option data-select2-id="83">Koh Kong - Koh Kong</option>
                                                <option data-select2-id="84">Sihanoukville - Sihanoukville</option>
                                                <option data-select2-id="85">Pursat - Pursat</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="this">Address</label>
                                            <input type="text" id="address" name="address" class="form-control"
                                                id="this" value="{{ $hotel->address }}">
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
                                            @php
                                                $photo =
                                                    $hotel->photo != null
                                                        ? config('paths.image_hotels_path') . '/' . $hotel->photo
                                                        : config('paths.no_image');
                                            @endphp
                                            <img src="{{ $photo }}" class="img-fluid mt-2" id="imgshow"
                                                alt="image" style="border-radius: 5px; object-fit: cover !important;">
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
