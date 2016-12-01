<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';
    protected $fillable = [
        'title',
        'description',
        'price',
        'image_path',
        'image_extension'
    ];

}
