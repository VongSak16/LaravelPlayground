<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccountModel extends Model
{
    protected $table = "tbluser";
    protected $primarykey = "userid";
    public $timestamps = false;


    use HasFactory;
}
