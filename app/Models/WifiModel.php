<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WifiModel extends Model
{
    protected $table = 'tblwifi';
    protected $primaryKey = 'WifiID';
    public $timestamps = false;

    use HasFactory;
}
