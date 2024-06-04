@extends('layout.main')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Testing Create</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Testing Create</li>
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
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create New Testing</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" method="Post" action="/test-create"
                                enctype = "multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Product Price</label>
                                            <input type="text" id="txtproductprice" name="txtproductprice"
                                                class="form-control" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Prepayment</label>
                                            <input type="text" id="txtprepayment" name="txtprepayment"
                                                class="form-control" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Duration (months)</label>
                                            <input type="text" id="txtduration" name="txtduration" class="form-control"
                                                id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Interest</label>
                                            <input type="text" id="txtinterest" name="txtinterest" class="form-control"
                                                id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>mortgage ប្រាក់កម្ចី</label>
                                            <select class="form-control" id="txtmortgage" name="txtmortgage">
                                                <option value="1">ការបង់ថេរ (annuity mortgage)</option>
                                                <option value="2">ការបង់ថយ (linear mortgage)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
