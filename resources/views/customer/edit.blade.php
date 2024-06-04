@extends('layout.main')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Customer</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Customer</li>
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
                                <h3 class="card-title">Edit Customer</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" method="Post" action="/customer-edit/{{ $id }}"
                                enctype = "multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Customer Name</label>
                                            <input type="text" id="txtcusname" name="txtcusname" class="form-control"
                                                id="exampleInputEmail1" value="{{ $tbl['cusname'] }}">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Telephone</label>
                                            <input type="text" id="txtcustel" name="txtcustel" class="form-control"
                                                id="exampleInputEmail1" value="{{ $tbl['custel'] }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">ID Card</label>
                                            <input type="text" id="txtidcard" name="txtidcard" class="form-control"
                                                id="exampleInputEmail1" value="{{ $tbl['idcard'] }}">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Address</label>
                                            <input type="text" id="txtcusaddress" name="txtcusaddress"
                                                class="form-control" id="exampleInputEmail1"
                                                value="{{ $tbl['cusaddress'] }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputFile">File input</label>
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
                                        </div>
                                        {{-- <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Product Name</label>
                                            <input type="text" id="txtproductname" name="txtproductname"
                                                class="form-control" id="exampleInputEmail1"
                                                value="{{ $tbl['productname'] }}">
                                        </div> --}}
                                    </div>
                                    {{-- <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Product Price</label>
                                            <input type="text" id="txtproductprice" name="txtproductprice"
                                                class="form-control" id="exampleInputEmail1"
                                                value="{{ $tbl['productprice'] }}">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Interest</label>
                                            <input type="text" id="txtinterest" name="txtinterest" class="form-control"
                                                id="exampleInputEmail1" value="{{ $tbl['interest'] }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="exampleInputEmail1">Duration</label>
                                            <input type="text" id="txtduration" name="txtduration"
                                                class="form-control" id="exampleInputEmail1"
                                                value="{{ $tbl['duration'] }}">
                                        </div>
                                    </div> --}}
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <img src="/assets/imgcustomer/{{ $tbl['photo'] }}" id="imgshow" width="220" />
                    </div>
                    <!-- /.col-md-6 -->
                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
