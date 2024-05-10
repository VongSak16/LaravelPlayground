<?php

namespace App\Http\Controllers;

use App\Models\TestModel;
use Illuminate\Http\Request;

class TestController extends Controller
{

    //Get data from server/daabase
    public function  get()
    {
        //return 'Hello';
        return response()->json(TestModel::all(), 200);
    }

    //Save data to server/database
    public function  POST()
    {
        $tbl = new TestModel;
        $tbl->testid = 150;
        $tbl->testname = request("testname");
        $tbl->save();
        return response()->json($tbl, 201);
    }
    //Update data from server/database
    public function  PUT()
    {
    }
    //Delete data from server/database
    public function  DELETE()
    {
    }
}
