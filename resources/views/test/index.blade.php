@extends('layout.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Test Page</h1>
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
                            <a class="btn btn-success btn-bg" href="test-create">
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
                                        <th>Date</th>
                                        <th>Principal</th>
                                        <th>Interest</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <style>
                                        .table>tbody>tr>td {
                                            vertical-align: middle;
                                            font-size: 20px;
                                        }

                                        .table>tfoot>tr>th {
                                            vertical-align: middle;
                                            font-size: 20px;
                                        }

                                        img {
                                            width: 80px;
                                            height: 80px;
                                            object-fit: cover;
                                        }
                                    </style>
                                    @php
                                        $total = 0;
                                        $sum_interest = 0;
                                        $sum_principal = 0;
                                        $sum_total = 0;
                                        if ($tbl == null) {
                                            $tbl[] = [
                                                'id' => 0,
                                                'date' => null,
                                                'principal' => 0,
                                                'interest' => 0,
                                                'total' => 0,
                                            ];
                                        }
                                    @endphp
                                    @foreach ($tbl as $item)
                                        @php
                                            $total++;
                                            $sum_interest += $item['interest'];
                                            $sum_principal += $item['principal'];
                                            $sum_total += $item['total'];
                                        @endphp
                                        <tr>
                                            <td>{{ $item['id'] }}</td>
                                            <td>{{ isset($item['date']) ? date('Y-m-d', strtotime($item['date'])) : 'N/A' }}
                                            </td>
                                            <td>$ {{ $item['principal'] }}</td>
                                            <td>$ {{ $item['interest'] }}</td>
                                            <td>$ {{ $item['total'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>{{ isset($item['date']) ? $total : 'N/A' }} months</th>
                                        <th>$ {{ round($sum_principal) }}</th>
                                        <th>$ {{ $sum_interest }}</th>
                                        <th>$ {{ $sum_total }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                                    Total: {{ isset($item['date']) ? $total : 'N/A' }}</div>
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
