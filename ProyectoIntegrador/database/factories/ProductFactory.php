<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
	$name = $faker->sentence(2, false);
    $photo = 'storage/products/default-product.jpg';
    return [
			'name' => $name,
            'subname' => $name.$faker->sentence(3, false),
            'description' =>$name.$faker->sentence(10,true),
            'price' =>$faker->randomFloat(NULL,10,150),
            'photo' => $photo,
			'stock' =>$faker->numberBetween(10,100),
			'categories_id' =>$faker->numberBetween(1,3),
    ];
});
