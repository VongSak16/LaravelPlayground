@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Starter Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">product <a href="add.html">add</a></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">N.O</th>
                                            <th>Product name</th>
                                            <th>Qty</th>
                                            <th>price</th>
                                            <th>image</th>
                                            <th style="width: 40px">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dell</td>
                                            <td>2</td>
                                            <td>27$</td>
                                            <td>n/a</td>
                                            <td>edit</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Dell</td>
                                            <td>2</td>
                                            <td>27$</td>
                                            <td>n/a</td>
                                            <td>edit</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Dell</td>
                                            <td>2</td>
                                            <td>27$</td>
                                            <td>n/a</td>
                                            <td>edit</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Dell</td>
                                            <td>2</td>
                                            <td>27$</td>
                                            <td>n/a</td>
                                            <td>edit</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- /.col-md-6 -->
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
