<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.ធ
     */
    public function index()
    {
        $table = Hotels::all();
        return view('hotels.index', compact('table'));
    }

    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tbl = new Hotels;
        $customerid = date('YmdHis');
        //$taked_at = Carbon::parse(request('txttaked_at'));

        $tbl->cusid = $customerid;
        $tbl->cusname = request("txtcusname");
        $tbl->custel = request("txtcustel");
        $tbl->idcard = request("txtidcard");
        $tbl->cusaddress = request("txtcusaddress");
        $tbl->productname = request("txtproductname");
        $tbl->productprice = request("txtproductprice");
        $tbl->prepayment = request("txtprepayment");
        $tbl->interest = request("txtinterest");
        $tbl->duration = request("txtduration");
        //$tbl->taked_at = $taked_at->format('Y-m-d');
        $tbl->userid = Auth::user()->id;
        $tbl->created_at = date("Y-m-d H:i:s");
        $tbl->updated_at = null;

        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|mimes:pdf,xlx,csv,gif,png,jpg,jpeg|max:20480',
            ]);
            $file = $tbl->cusid . '.' . $request->file->extension();
            $request->file->move(public_path('assets/imgcustomer'), $file);
        } else {
            $file = 'no-img.jpg';
        }

        $tbl->photo = $file;

        $tbl->save();

        return redirect('/hotels');



        //CREATE DEPRECIATION DETAIL

        // $duration = $request->input("txtduration"); // months = 6
        // $prepayment = $request->input("txtprepayment"); // = 250
        // $interest = $request->input("txtinterest"); // 1.2
        // $productprice = $request->input('txtproductprice'); // 750
        // $mortgageType = $request->input('txtmortgage'); // annuity...


        // $principal = $productprice - $prepayment;
        // $monthly_interest_rate = $interest / 100;
        // $monthly_payment = 0;

        // if ($mortgageType == '1') {
        //     // Anual mortgage calculation
        //     $monthly_payment = ($principal * $monthly_interest_rate) / (1 - pow(1 + $monthly_interest_rate, -$duration));

        //     $principal_remaining = $principal;

        //     for ($i = 0; $i < $duration; $i++) {

        //         $tblDepre = new DepreciationDetailModel;

        //         $interest_payment = $principal_remaining * $monthly_interest_rate;
        //         $principal_payment = $monthly_payment - $interest_payment;
        //         $principal_remaining -= $principal_payment;

        //         $tblDepre->depreid = ($i + 1) . date('YmdHis');
        //         $tblDepre->cusid = $customerid;
        //         $tblDepre->principal = round($principal_payment, 2);
        //         $tblDepre->interest_month = round($interest_payment, 2);
        //         $tblDepre->monthly_payment = round($monthly_payment, 2);

        //         $new_date = $taked_at->copy()->addMonths($i);
        //         $tblDepre->pay_date = $new_date->format('Y-m-d');

        //         $tblDepre->created_at = date("Y-m-d H:i:s");
        //         $tblDepre->updated_at = null;

        //         $tblDepre->save();
        //     }
        // } elseif ($mortgageType == '2') {
        //     // Linear mortgage calculation
        //     $monthly_principal_payment = $principal / $duration;
        //     $principal_remaining = $principal;

        //     for ($i = 0; $i < $duration; $i++) {

        //         $tblDepre = new DepreciationDetailModel;

        //         $interest_payment = $principal_remaining * $monthly_interest_rate;
        //         $total_payment = $monthly_principal_payment + $interest_payment;
        //         $principal_remaining -= $monthly_principal_payment;

        //         $tblDepre->depreid = ($i + 1) . date('YmdHis');
        //         $tblDepre->cusid = $customerid;
        //         $tblDepre->principal = round($monthly_principal_payment, 2);
        //         $tblDepre->interest_month = round($interest_payment, 2);
        //         $tblDepre->monthly_payment = round($total_payment, 2);

        //         $new_date = $taked_at->copy()->addMonths($i);
        //         $tblDepre->pay_date = $new_date->format('Y-m-d');

        //         $tblDepre->created_at = date("Y-m-d H:i:s");
        //         $tblDepre->updated_at = null;

        //         $tblDepre->save();
        //     }
        // }

        // return redirect('/customer');
    }


    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($id)
    // {
    //     //$tbl = Hotels::where('customerid', $id)->first();
    //     $tbl = Hotels::find($id);
    //     return view('customer.edit', ['tbl' => $tbl], ['id' => $id]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, $id)
    // {
    //     $tbl = Hotels::find($id);

    //     if ($request->hasFile('file')) {

    //         try {
    //             $file_pattern = "assets/imgcustomer/$id.*";
    //             $file_path = glob($file_pattern)[0];
    //             unlink(public_path("$file_path"));
    //         } catch (Exception $e) {
    //         }

    //         $request->validate([
    //             'file' => 'required|mimes:pdf,xlx,csv,gif,jpeg,webp,png,jpg,jpeg,|max:20480',
    //         ]);
    //         $file = $id . '.' . $request->file->extension();

    //         $request->file->move(public_path('assets/imgcustomer'), $file);
    //     } else {
    //         $file = $tbl->photo;
    //     }

    //     $tbl->cusname = request("txtcusname");
    //     $tbl->custel = request("txtcustel");
    //     $tbl->idcard = request("txtidcard");
    //     $tbl->cusaddress = request("txtcusaddress");
    //     // $tbl->productname = request("txtproductname");
    //     // $tbl->productprice = request("txtproductprice");
    //     // $tbl->interest = request("txtinterest");
    //     // $tbl->duration = request("txtduration");
    //     $tbl->updated_at = date("Y-m-d H:i:s");
    //     $tbl->photo = $file;
    //     $tbl->save();

    //     return redirect('/customer');
    // }
    /**
     * Update the specified resource in storage.
     */
    // public function deletes($id)
    // {
    //     return view("customer.delete", ["id" => $id]);
    // }

    // public function destroy($id)
    // {
    //     try {
    //         $file_pattern = "assets/imgcustomer/$id.*";
    //         $file_path = glob($file_pattern)[0];
    //         unlink(public_path("$file_path"));
    //     } catch (Exception $e) {
    //     }
    //     $tbl = Hotels::find($id);
    //     $tbl->delete();

    //     DepreciationDetailModel::where('cusid', $id)->delete();

    //     return redirect('/customer');
    // }
}
