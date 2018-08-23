<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =
    [
      'name','description','photo','price','stock','categories_id',
    ];

    protected $hidden =
    [
      'created_at', 'updated_at'
    ];
}
