@php
    $total = 0;
    $sum_interest = 0;
    $sum_principal = 0;
    $sum_total = 0;
    $sum_clear_date = 0;
@endphp

@extends('layout.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card card-widget widget-user-2">

                        <div class="widget-user-header bg-dark">
                            <div class="">
                                <img class="img-circle" src="/assets/imgcustomer/{{ $tblCus['photo'] }}" alt="User Avatar">
                            </div>
                            <h5 class="widget-user-desc">{{ $tblCus['cusname'] }}</h5>
                            <p class="widget-user-desc text-muted">id. {{ $tblCus['cusid'] }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-2 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">{{ $tblCus['custel'] }}</h5>
                                        <p class="text-muted text-center">Telephone</p>
                                    </div>

                                </div>

                                <div class="col-sm-2 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">$ {{ $tblCus['productprice'] }}</h5>
                                        <p class="text-muted text-center">Product Price</p>
                                    </div>
                                </div>

                                <div class="col-sm-2 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">$ {{ $tblCus['prepayment'] }}</h5>
                                        <p class="text-muted text-center">Prepayment</p>
                                    </div>
                                </div>

                                <div class="col-sm-2 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">{{ $tblCus['interest'] }} %</h5>
                                        <p class="text-muted text-center">Interest</p>
                                    </div>

                                </div>
                                <div class="col-sm-2">
                                    <div class="description-block">
                                        <h5 class="description-header">{{ $tblCus['duration'] }} months</h5>
                                        <p class="text-muted text-center">Duration</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            Depreciation Detail
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No. </th>
                                        <th>Principal</th>
                                        <th>Interest</th>
                                        <th>Total</th>
                                        <th>Pay Date</th>
                                        <th>Clear Date</th>
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

                                        .glow-button {
                                            position: relative;
                                        }

                                        .glow-button::before {
                                            content: "";
                                            position: absolute;
                                            z-index: -1;
                                            top: 0;
                                            left: 0;
                                            right: 0;
                                            bottom: 0;
                                            background: inherit;
                                            filter: blur(15px);
                                            transition: 0.5s;
                                        }

                                        .glow-button:focus::before {
                                            filter: blur(1px);
                                        }

                                        .btn-lg {
                                            margin: 1em;
                                        }
                                    </style>
                                    @foreach ($tbl as $item)
                                        @php
                                            $total++;
                                            $sum_interest += $item['interest_month'];
                                            $sum_principal += $item['principal'];
                                            $sum_total += $item['interest_month'] + $item['principal'];
                                            if (!isset($item['clear_date'])) {
                                                $sum_clear_date += $item['interest_month'] + $item['principal'];
                                            }
                                        @endphp
                                        <tr>
                                            <td>{{ $total }}</td>
                                            <td>{{ $item['principal'] }}</td>
                                            <td>{{ $item['interest_month'] }}</td>
                                            <td>{{ $item['interest_month'] + $item['principal'] }}</td>
                                            <td>{{ isset($item['pay_date']) ? date('Y-m-d', strtotime($item['pay_date'])) : 'Not Yet' }}
                                            </td>
                                            <td>{{ isset($item['clear_date']) ? date('Y-m-d', strtotime($item['clear_date'])) : 'Not Yet' }}
                                            </td>
                                            <td>
                                                <form style="margin-right: 5px" class="form-horizontal" method="Post"
                                                    action="/depreciationdetail-update/{{ $item['depreid'] }} ">
                                                    @csrf
                                                    <button type="submit" class="btn btn-info btn-sm"
                                                        {{ isset($item['clear_date']) ? 'disabled' : '' }}>
                                                        <i class='fas fa-trash'></i>
                                                        {{ isset($item['clear_date']) ? 'Thank' : ' Pay' }}
                                                    </button>
                                                    <a style="margin-right: 5px" class="btn btn-outline-primary btn-sm"
                                                        href="#">
                                                        <i class="fas fa-money-check-alt">
                                                        </i>
                                                        Pay Interest
                                                    </a>
                                                    <a style="margin-right: 5px" class="btn btn-outline-dark btn-sm"
                                                        href="#">
                                                        <i class="fas fa-undo">
                                                        </i>
                                                        Reset
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>$ {{ round($sum_principal) }}</th>
                                        <th>$ {{ $sum_interest }}</th>
                                        <th>$ {{ $sum_total }}</th>
                                        <th>{{ $total }} months</th>
                                        <th>$ {{ $sum_clear_date }} left</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
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
