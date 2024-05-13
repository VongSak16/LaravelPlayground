<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    protected $table = 'tblcustomer';
    protected $primaryKey = 'CustomerID';
    public $timestamps = false;

    use HasFactory;
}
