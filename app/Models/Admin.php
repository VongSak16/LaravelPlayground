<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'tblsubject';
    protected $primaryKey = 'subjectid'; 

    public function AutoID(){
        return 2025;
    }
}
