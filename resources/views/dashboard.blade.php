@extends('layout.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title" style="font-size: 20px">Overall</h5>
                </div>
                <div class="card-body" style="padding-top: 0% !important;">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-white elevation-1"><i class="fas fa-user"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Users Total</span>
                                    <span class="info-box-number" style="font-size: 40px;">
                                        {{ $users_total }}
                                        <small></small>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-white elevation-1"><i class="fas fa-users"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Customers Total</span>
                                    <span class="info-box-number" style="font-size: 40px;">{{ $customers_total }}</span>
                                </div>
                            </div>
                        </div>


                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-white elevation-1"><i class="fas fa-hotel"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Hotels</span>
                                    <span class="info-box-number" style="font-size: 40px;">{{ $hotels_total }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-white elevation-1"><i class="fas fa-th-list"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Roomtypes total</span>
                                    <span class="info-box-number" style="font-size: 40px;">{{ $roomtypes_total }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-white elevation-1"><i class="fas fa-bed"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Rooms Total</span>
                                    <span class="info-box-number" style="font-size: 40px;">
                                        {{ $rooms_total }}
                                        <small></small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-white elevation-1"><i class="fas fa-calendar"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Books Total</span>
                                    <span class="info-box-number" style="font-size: 40px;">{{ $books_total }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title" style="font-size: 20px">Revenue Overall</h5>
                </div>
                <div class="card-body" style="padding-top: 0% !important;">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-award"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Future Guaranteed Revenue</span>
                                    <small style="opacity: 0.8">books which not paid yet total</small>
                                    <span class="info-box-number" style="font-size: 40px;">
                                        $ {{ $total_book_no_paid_yet }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i
                                        class="fas fa-money-bill-wave"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Revenue</span>
                                    <small style="opacity: 0.8">{{ 'books paid total' }}</small>
                                    <span class="info-box-number" style="font-size: 40px;">
                                        $ {{ $total_book_paid }}
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-sad-cry"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Loss Revenue</span>
                                    <small style="opacity: 0.8">{{ 'books cancelled total' }}</small>
                                    <span class="info-box-number" style="font-size: 40px;">
                                        $ {{ $total_book_cancelled }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title" style="font-size: 20px">Today Added</h5>
                </div>
                <div class="card-body" style="padding-top: 0% !important;">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Users Added Today</span>
                                    <span class="info-box-number" style="font-size: 40px;">
                                        {{ $users_created_today_total }}
                                        <small></small>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Customers Added Today</span>
                                    <span class="info-box-number"
                                        style="font-size: 40px;">{{ $customers_created_today_total }}</span>
                                </div>
                            </div>
                        </div>


                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-hotel"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Hotels Added Today</span>
                                    <span class="info-box-number"
                                        style="font-size: 40px;">{{ $hotels_created_today_total }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-th-list"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Roomtypes Added Today</span>
                                    <span class="info-box-number"
                                        style="font-size: 40px;">{{ $roomtypes_created_today_total }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-bed"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Rooms Added Today</span>
                                    <span class="info-box-number" style="font-size: 40px;">
                                        {{ $rooms_created_today_total }}
                                        <small></small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-calendar"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Books Added Today</span>
                                    <span class="info-box-number"
                                        style="font-size: 40px;">{{ $books_created_today_total }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title" style="font-size: 20px">Revenue Today</h5>
                </div>
                <div class="card-body" style="padding-top: 0% !important;">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-award"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Future Guaranteed Revenue Today</span>
                                    <small style="opacity: 0.8">books which not paid yet total</small>
                                    <span class="info-box-number" style="font-size: 40px;">
                                        $ {{ $total_book_no_paid_yet_today }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i
                                        class="fas fa-money-bill-wave"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Revenue Today</span>
                                    <small style="opacity: 0.8">{{ 'books paid total' }}</small>
                                    <span class="info-box-number" style="font-size: 40px;">
                                        $ {{ $total_book_paid_today }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-sad-cry"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Loss Revenue Today</span>
                                    <small style="opacity: 0.8">{{ 'books cancelled total' }}</small>
                                    <span class="info-box-number" style="font-size: 40px;">
                                        $ {{ $total_book_cancelled_today }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
@endsection
@section('link')
    <style>
        .dark-mode .info-box {
            background-color: #212121 !important;
            border: 1px solid rgba(255, 255, 255, 0.3) !important;
            border-radius: 10px !important;
            margin-bottom: 0;
        }

        .dark-mode .card {
            background-color: #212121 !important;
            border: 1px solid rgba(255, 255, 255, 0.3) !important;
            border-radius: 10px !important;
        }

        .content-wrapper {
            min-height: 1300px !important;
        }
    </style>
@endsection
