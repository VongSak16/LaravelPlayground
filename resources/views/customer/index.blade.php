@extends('layout.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Customer Page</h1>
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
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="btn btn-success btn-bg" href="customer-create">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Telephone</th>
                                        {{-- <th>ID Card</th> --}}
                                        <th>Address</th>
                                        <th>Photo</th>
                                        <th>Product Name</th>
                                        <th>Product Price</th>
                                        <th>Interest</th>
                                        <th>Duratioin</th>
                                        <th>User ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <style>
                                        .table>tbody>tr>td {
                                            vertical-align: middle;
                                        }

                                        img {
                                            width: 80px;
                                            height: 80px;
                                            object-fit: cover;
                                        }
                                    </style>
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach ($tbl as $item)
                                        @php
                                            $total++;
                                        @endphp
                                        <tr>
                                            <td>{{ $item['cusid'] }}</td>
                                            <td>{{ empty($item['cusname']) ? 'N/A' : $item['cusname'] }}</td>
                                            <td>{{ empty($item['custel']) ? 'N/A' : $item['custel'] }}</td>
                                            {{-- <td>{{ empty($item['idcard']) ? 'N/A' : $item['idcard'] }}</td> --}}
                                            <td>{{ empty($item['cusaddress']) ? 'N/A' : $item['cusaddress'] }}</td>
                                            <td><img class="img-bordered-sm img-circle"
                                                    src="/assets/imgcustomer/{{ $item['photo'] }}" alt="Customer Image">
                                            </td>
                                            <td>{{ $item['productname'] }}</td>
                                            <td>{{ $item['productprice'] }}</td>
                                            <td>{{ $item['interest'] }}</td>
                                            <td>{{ $item['duration'] }}</td>
                                            <td>{{ $item->userid  }}</td>
                                            <td>
                                                <a style="margin-right: 5px" class="btn btn-primary btn-sm"
                                                    href="/depreciationdetail/{{ $item['cusid'] }}">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    View
                                                </a>
                                                <a style="margin-right: 5px" class="btn btn-info btn-sm"
                                                    href="/customer-edit/{{ $item['cusid'] }}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a style="margin-right: 5px" class="btn btn-danger btn-sm"
                                                    href="/customer-delete/{{ $item['cusid'] }}">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                                    Total: {{ $total }}</div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

                <!-- /.col-md-6 -->

                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
