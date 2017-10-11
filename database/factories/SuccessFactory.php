<?php

use Faker\Generator as Faker;

$factory->define(App\Success::class, function (Faker $faker) {
    $title = $faker->sentence(mt_rand(3,10));
    $ids = \App\User::pluck('id')->random();
    return [
        'id'=> $ids, 
        'sm_image_url' => $faker->imageUrl($width=210,$height=150),
        'title' => $title,
        'serve_time' => $faker->dateTimeBetween($startDate = '-2 months', $endDate = 'now'),
        'area' => $faker->numberBetween($min = 100, $max = 400),
        'serve_content' => $faker->paragraph,
        'lg_image_url' => $faker->imageUrl($width=800,$height=322)
    ];
});
