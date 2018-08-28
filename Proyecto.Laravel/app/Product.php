<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'photo', 'price', 'stock', 'categories_id',
    ];


    public function category(){
    	return $this->belongsTo(Category::class);
    }

}
