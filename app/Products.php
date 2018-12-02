<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
       'product_description', 'account_number',
    ];

    protected $table = 'products';
}
