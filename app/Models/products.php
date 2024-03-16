<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $product_name = "Coke";
    protected $product_id = 123;
    protected $product_price = 1.50;
}
