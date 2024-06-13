<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'number', 'status', 'roomtype_id', 'book_id'];

    use HasFactory;
}
