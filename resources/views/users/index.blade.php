{{-- @foreach ($tbl as $user)
    User: {{ $user['username'] }}-Password: {{ $user['userpassword'] }} <Br>
@endforeach --}}

@extends('layout.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User Page</h1>
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
                            <a class="btn btn-success btn-bg" href="user-create">
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
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Photo</th>
                                        <th>Email</th>
                                        <th>Create</th>
                                        <th>Update</th>
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
                                    @foreach ($users as $user)
                                        @php
                                            $total++;
                                            $pfp;
                                            if($user->photo == null){
                                                $pfp = 'no-img.jpg';
                                            }else {
                                                $pfp = $user->photo;
                                            }

                                        @endphp
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td><img class="img-bordered-sm img-circle"
                                                    src="/assets/imguser/{{ $pfp }}" alt="User Image">
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ isset($user->created_at) ? date('Y-m-d', strtotime($user->created_at)) : 'No Date' }}
                                            </td>
                                            <td>{{ isset($user->updated_at) ? date('Y-m-d', strtotime($user->updated_at)) : 'No Date' }}
                                            </td>
                                            <td>
                                                {{-- <a style="margin-right: 5px" class="btn btn-info btn-sm"
                                                    href="/users-edit/{{ $user->id }}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a style="margin-right: 5px" class="btn btn-danger btn-sm"
                                                    href="/#">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </a> --}}
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
