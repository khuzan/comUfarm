<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
       'post_desc', 'account_number',
    ];

    protected $table = 'posts';
}
