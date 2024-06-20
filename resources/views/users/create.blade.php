@extends('layout.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-lg-center overflow-auto">
                <div class="col-lg-4">
                    <div class="card mb-5">
                        <div class="card-header">
                            <h3 class="card-title">Create Users</h3>
                        </div>
                        <form class="form-horizontal" method="POST" action="{{ route('users.store') }}"
                            enctype="multipart/form-data" novalidate="novalidate" id="quickForm">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="name">{{ 'Name' }}</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback d-block">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col">
                                        <label for="username">{{ 'Username' }}</label>
                                        <input type="text" id="username" name="username" class="form-control"
                                            value="{{ old('username') }}">
                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback d-block">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="email">{{ 'Email' }}</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback d-block">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="password">{{ 'Password' }}</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback d-block">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col">
                                        <label for="password_confirmation">{{ 'Confirm Password' }}</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="file">Photo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input onchange="previewFile()" type="file" name="file"
                                                    class="custom-file-input" id="file" accept="image/*">
                                                <label class="custom-file-label" for="file">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                        @if ($errors->has('file'))
                                            <span class="invalid-feedback d-block">{{ $errors->first('file') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-4">
                                        <img src="{{ config('paths.no_image') }}" class="img-fluid mt-2" id="imgshow"
                                            alt="image" style="border-radius: 5px; object-fit: cover !important;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-light">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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

        .custom-file-label,
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
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>

    <script src="/adminlte/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="/adminlte/plugins/jquery-validation/additional-methods.min.js"></script>
    <script>
        $(function() {
            $.validator.setDefaults({
                submitHandler: function(form) {
                    form.submit(); // This will submit the form
                }
            });
            $('#quickForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    username: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },
                    password_confirmation: {
                        required: true,
                        equalTo: "#password"
                    }
                },
                messages: {
                    name: "Please enter your name",
                    username: "Please enter your username",
                    email: {
                        required: "Please enter an email address",
                        email: "Please enter a valid email address"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 8 characters long"
                    },
                    password_confirmation: {
                        required: "Please confirm your password",
                        equalTo: "Password confirmation does not match"
                    }
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endsection
