<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    protected $table = 'hotels';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'city', 'photo', 'created_at', 'updated_at'];

    public $timestamps = false;
    use HasFactory;
}
