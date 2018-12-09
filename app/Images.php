<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable = [
       'image', 'image_size',
    ];

    protected $table = 'images';

    public function user()
    {
    	return $this->belongsTo('App/User');
    }
}
