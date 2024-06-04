<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepreciationDetailModel extends Model
{
    protected $table = "tbldepreciationdetail";
    protected $primaryKey = "depreid";
    public $timestamps = false;


    use HasFactory;
}
