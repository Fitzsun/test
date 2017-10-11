<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'en_name' => $faker->name,
        'path' => $faker->url,
        'description' => $faker->sentence,
        'parent_id' => 0
    ];
});
