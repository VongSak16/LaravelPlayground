@extends('layout.main')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">User Create</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Create</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
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
                                <h3 class="card-title">Create New user</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" class="form-control"​
                                            id="name"​​ required autofocus autocomplete="name">
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" id="username" name="username" class="form-control"​
                                            id="username"​​ required autofocus autocomplete="username">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" name="email" class="form-control"​
                                            id="email"​​ required autofocus autocomplete="email">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" id="password" name="password" type="password"
                                            class="form-control"​ id="password"​​ required autofocus
                                            autocomplete="new-password">
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="text" id="password_confirmation" name="password_confirmation"
                                            type="password" class="form-control"​ id="password_confirmation"​​ required
                                            autofocus autocomplete="new-password">
                                    </div>

                                    <div class="form-group">
                                        <label for="file">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input onchange="previewFile()" type="file" name="file"
                                                    class="custom-file-input" id="file">
                                                <label class="custom-file-label" for="file">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <a href="{{ route('login') }}">Already registered?</a>
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <img src="/assets/no-img.jpg" id="imgshow" width="220" />
                    </div>
                    <!-- /.col-md-6 -->
                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
