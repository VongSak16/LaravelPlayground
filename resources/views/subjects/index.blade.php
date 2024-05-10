
@extends('layouts.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>
                        <a href="/subject/create" class="btn btn-primary btn-sm">
                              <i class="fas fa-plus">
                              </i> Add
                            </a>
                      </th>
                      <th>Subject</th>
                      <th>Date</th>
                      <th>Price</th>
                      <th>Photo</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $i=1;
                    @endphp
                    @foreach($tbl as $item)

                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{$item->subjectname}} [{{$item->duration}}h]</td>
                        <td>{{$item->postdate}}</td>
                        <td>{{$item->price}}</td>
                        <td><img src="/subjects/{{ $item->photo }}" height="50" /></td>
                        <td>
                            <a href="/subject/edit/{{$item->subjectid}}" class="btn btn-primary btn-sm">
                              <i class="fas fa-pencil-alt">
                              </i>Edit
                            </a> | 
                          <a class="btn btn-danger btn-sm" href="/subject/delete/{{$item->subjectid}}">  
                          <i class="fas fa-trash"></i> Delete
                          </a>
                        </td>
                      </tr>

                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
   
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection