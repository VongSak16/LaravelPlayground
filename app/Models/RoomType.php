<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $table = 'roomtypes';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'name', 'details', 'price', 'photo', 'hotel_id', 'created_at', 'updated_at'];

    public $timestamps = false;
    use HasFactory;
}
