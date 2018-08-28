<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public function products(){
    	return $this->hasMany(Product::class);
    }
}
