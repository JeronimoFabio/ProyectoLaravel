<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
			'name' => $faker->word,
			'description' => $faker->sentence(10,true),
			'status' => $faker->numberBetween(0,3),
    ];
});