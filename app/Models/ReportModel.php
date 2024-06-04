<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportModel extends Model
{
    protected $table = "view_date2date";
    protected $primaryKey = "depreid";
    public $timestamps = false;

    use HasFactory;
}
