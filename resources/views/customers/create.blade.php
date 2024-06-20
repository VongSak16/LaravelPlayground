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
            <div class="row justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Create Customer</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="Post" action="/customers-create"
                            enctype = "multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="this">{{ 'Name' }}</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            id="this">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="this">{{ 'Email' }}</label>
                                        <input type="text" id="email" name="email" class="form-control"
                                            id="this">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="this">{{ 'Phone' }}</label>
                                        <input type="text" id="phone" name="phone" class="form-control"
                                            id="this">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="/customers" class="btn btn-dark">Cancel</a>
                                <button type="submit" name="action" value="save"
                                    class="btn btn-secondary  ml-2">Save</button>
                                <button type="submit" name="action" value="book"
                                    class="btn btn-light ml-2">Book</button>
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
    <link rel="stylesheet" href="{{ config('paths.css') }}/card.css">
@endsection
