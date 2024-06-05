<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use App\Models\DepreciationDetailModel;
use App\Models\ReportModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use LDAP\Result;

class ReportController extends Controller
{

    public function date2date()
    {

        $tbl = ReportModel::all();
        return view('report.date2date', ['tbl' => $tbl]);
    }

    public function date2date_filter(Request $request)
    {
        $start_date =  Carbon::parse($request->start_date);
        $end_date = Carbon::parse($request->end_date);

        $tbl = ReportModel::whereBetween('pay_date', [$start_date, $end_date])->get();
        return view('report.date2date', ['tbl' => $tbl]);
    }
}
