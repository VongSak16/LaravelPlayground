@extends('layout.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Subject Page</h1>
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
                            <a class="btn btn-success btn-bg" href="subject-create">
                                <i class="fas fa-plus">
                                </i>

                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Subject</th>
                                        <th>Post Date</th>
                                        <th>Price</th>
                                        <th>Photo</th>
                                        <th>Create</th>
                                        <th>Update</th>
                                        <th>Duration</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbl as $item)
                                        <tr>
                                            <td>{{ $item->subjectid }}</td>
                                            <td>{{ $item->subjectname }}</td>
                                            <td>{{date('Y-m-d', strtotime($item->postdate))}}</td>
                                            <td>{{ $item->price }} $</td>
                                            <td>{{ $item->photo }}</td>
                                            <td>{{date('Y-m-d', strtotime($item->create_at))}}</td>
                                            <td>{{date('Y-m-d', strtotime($item->update_at))}}</td>
                                            <td>{{ $item->duration }}</td>
                                            <td>
                                                <a style="margin-right: 5px" class="btn btn-primary btn-sm" href="#">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    View
                                                </a>
                                                <a style="margin-right: 5px" class="btn btn-info btn-sm" href="#">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edi
                                                </a>
                                                <a style="margin-right: 5px" class="btn btn-danger btn-sm" href="/subject-delete/{{ $item->subjectid }}">
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
