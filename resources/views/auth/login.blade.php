@extends('layout.blank')

@section('content')
    <div class="login-logo">
        <a href="/dashboard">
            <img src="/assets/logo.svg" alt="" class="brand-image col-3" style="opacity: .8; border-radius: 10px;"></a>
    </div>
    <div class="col-lg-3">
        <div class="card mb-5">
            <div class="card-header">
                <h3 class="login-box-msg" style="padding: 0% !important;">Login</h3>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('login') }}" novalidate="novalidate"
                id="quickForm">
                @csrf
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="input_type">Username or Email</label>
                        <input type="text" id="input_type" name="input_type" class="form-control"
                            value="{{ old('input_type') }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                        <label class="form-check-label" for="remember_me">Remember Me</label>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-light mr-2">Login</button>
                    <a class="btn btn-link" href="{{ route('password.request') }}">Forgot your password?</a>
                    <a class="btn btn-link" href="{{ route('register') }}">Register yet?</a>
                </div>
            </form>

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
    <script src="/adminlte/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="/adminlte/plugins/jquery-validation/additional-methods.min.js"></script>
    <script>
        $(function() {
            $.validator.setDefaults({
                submitHandler: function(form) {
                    form.submit();
                }
            });
            $('#quickForm').validate({
                rules: {
                    input_type: {
                        required: true,
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },
                },
                messages: {
                    input_type: "Please enter your username or email",
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 8 characters long"
                    },
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
