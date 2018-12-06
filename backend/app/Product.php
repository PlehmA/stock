<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'code',
        'description',
        'image',
        'quantity',
        'price',
    ];

    protected $guarded = [
        'id',
    ];
}
