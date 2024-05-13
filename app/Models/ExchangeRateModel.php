<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExchangeRateModel extends Model
{
    protected $table = 'tblexchangerate';
    protected $primaryKey = 'ExchangeID';
    public $timestamps = false;
    
    use HasFactory;
}
