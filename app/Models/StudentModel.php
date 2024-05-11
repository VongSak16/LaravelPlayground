<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table = 'tblstudent';
    protected $primaryKey = 'sid';

    use HasFactory;
}
