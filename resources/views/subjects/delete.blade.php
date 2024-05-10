



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
          Do you want to delete? 

          <form class="form-horizontal" method="Post" action="/subject/delete/{{$id}}">
              @csrf

              <button type="submit" class="btn btn-primary float-right"> 
                <i class='fas fa-trash'></i> Delete
              </button>
          </form>

          <a href="/subject" class="btn btn-success float-right"> 
                 Cancel
          </a>

        </div>
   
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection