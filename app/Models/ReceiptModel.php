<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiptModel extends Model
{
    protected $table = 'tblreceipt';
    protected $primaryKey = 'ReceiptID';
    public $timestamps = false;
    use HasFactory;
}
