@extends('layout.main')
@section('content')
<div class="content-wrapper">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Subject Create</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subject Create</li>
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
                    <h3 class="card-title">Create New Subject</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="Post" action="/subject-create"
                  enctype = "multipart/form-data" >
                  @csrf
                  
                    <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Subject</label>
                        <input type="text" id="txtsubject" name="txtsubject" class="form-control" id="exampleInputEmail1" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" name="txtprice" class="form-control" id="exampleInputEmail1" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Duration</label>
                        <input type="text" name="txtduration" class="form-control" id="exampleInputEmail1" >
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                        <div class="custom-file">
                            <input onchange="previewFile()" type="file" name="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
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