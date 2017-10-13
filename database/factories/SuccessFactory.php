<?php

use Faker\Generator as Faker;

$factory->define(App\Success::class, function (Faker $faker) {
    // $faker = Faker\Factory::create('zh_CN');
    $title = $faker->sentence($nbWords = 4, $variableNbWords = true);
    return [
        'sm_image_url' => $faker->imageUrl($width=210,$height=150),
        'category_id'=> $faker->randomDigitNotNull,
        'title' => $title,
        'serve_time' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'area' => $faker->numberBetween($min = 100, $max = 400),
        'serve_content' => $faker->sentence($nbWords = 11, $variableNbWords = true),
        'lg_image_url' => $faker->imageUrl($width=800,$height=322)
    ];
});
