<?php

use Faker\Generator as Faker;

$factory->define(App\Links::class, function (Faker $faker) {
    return [
        'link_name' => $faker->name,
        'link_href' => $faker->url,
        'level'     => $faker->randomDigit
    ];
});
