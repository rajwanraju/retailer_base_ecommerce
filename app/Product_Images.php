<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Images extends Model
{
     protected $fillable = [
        'product_id', 'image',
    ];
}
