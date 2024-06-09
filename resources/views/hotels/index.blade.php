@extends('layout.main')
@section('content')
    <div class="content-header">
        {{-- <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div> --}}
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <style>
                .card {
                    background-color: #212121 !important;
                    border: 1px solid rgba(255, 255, 255, 0.3) !important;
                    border-radius: 10px !important;
                }
            </style>
            <div class="row ml-3">
                <div class="card mb-3 border" style="max-width: 840px;">
                    <a class="btn btn-success" href="hotels/create"><i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class="row ml-3">
                <div class="card mb-3 border" style="max-width: 840px;" href="#">
                    <a href="/dashboard" style="color: aliceblue !important;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ App\Utilities\PathManager::IMG_USERS }}/{{ Auth::user()->photo }}"
                                    class="img-fluid rounded-start m-2" alt="image" style="border-radius: 5px;">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h4 class="card-title" style="font-size: 30px">Hotel Name</h4>
                                    <p class="card-text">
                                        {{ 'Address: ' }} {{ 'B1' }} <br>
                                        {{ 'City: ' }} {{ 'Tokyo' }} <br>
                                        {{ 'Country: ' }} {{ 'Khmer' }} <br>
                                    </p>
                                </div>

                            </div>
                            <div class="col-md-2">
                                <div class="card-body bg-transparent text-start d-flex flex-column">
                                    <button type="submit" class="btn btn-primary mb-3">Edit</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
