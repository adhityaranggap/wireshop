<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
        'description' => $faker->text(120),
        'price' => $faker->numberbetween(1000, 10000),
        'image' => ''

    ];
});
