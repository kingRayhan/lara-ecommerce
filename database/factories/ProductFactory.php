<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => rand(5, 1000),
        'image' => $faker->image('public/storage/', 207, 183, null, false),
    ];
});
