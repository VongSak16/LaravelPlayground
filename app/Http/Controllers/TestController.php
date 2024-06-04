<?php

namespace App\Http\Controllers;

use App\Models\TestModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tbl = session('tbl');
        return view('test.index', ['tbl' => $tbl]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('test.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //TestModel::truncate();

        $duration = $request->input("txtduration"); // months = 6
        $prepayment = $request->input("txtprepayment"); // = 250
        $interest = $request->input("txtinterest"); // 1.2
        $productprice = $request->input('txtproductprice'); // 750
        $mortgageType = $request->input('txtmortgage'); // annuity...

        $principal = $productprice - $prepayment;
        $monthly_interest_rate = $interest / 100;
        $monthly_payment = 0;

        if ($mortgageType == '1') {
            $monthly_payment = ($principal * $monthly_interest_rate) / (1 - pow(1 + $monthly_interest_rate, -$duration));

            $principal_remaining = $principal;

            for ($i = 0; $i < $duration; $i++) {
                $interest_payment = $principal_remaining * $monthly_interest_rate;
                $principal_payment = $monthly_payment - $interest_payment;
                $principal_remaining -= $principal_payment;

                $tbl[] = [
                    'id' => $i + 1,
                    'date' => date("Y-m-d H:i:s", strtotime("+" . $i . " month")),
                    'principal' => round($principal_payment, 2),
                    'interest' => round($interest_payment, 2),
                    'total' => round($monthly_payment, 2),
                ];
            }
        } elseif ($mortgageType == '2') {
            // Linear mortgage calculation
            $monthly_principal_payment = $principal / $duration;

            $principal_remaining = $principal;

            for ($i = 0; $i < $duration; $i++) {
                $interest_payment = $principal_remaining * $monthly_interest_rate;
                $total_payment = $monthly_principal_payment + $interest_payment;
                $principal_remaining -= $monthly_principal_payment;

                $tbl[] = [
                    'id' => $i + 1,
                    'date' => date("Y-m-d H:i:s", strtotime("+" . $i . " month")),
                    'principal' => round($monthly_principal_payment, 2),
                    'interest' => round($interest_payment, 2),
                    'total' => round($total_payment, 2),
                ];
            }
        }

        session()->put('tbl', $tbl);
        return redirect('/test');
    }



    /**
     * Display the specified resource.
     */
    public function show(TestModel $testModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TestModel $testModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TestModel $testModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TestModel $testModel)
    {
        //
    }
}
