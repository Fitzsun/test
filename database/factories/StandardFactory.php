<?php

use Faker\Generator as Faker;

$factory->define(App\Standard::class, function (Faker $faker) {
    $title = $faker->sentence($nbWords = 4, $variableNbWords = true);
    return [
        'category_id'=>$faker->numberBetween($min=0,$max=1),
        'order'=>$faker->numberBetween($min=0,$max=50),
        'name'=>$faker->name,
        'title'=>$title,
        'content'=>$faker->sentence($nbWords = 11, $variableNbWords = true),
        'honor_image_url'=>$faker->imageUrl($width=184,$height=140),
        'standard_image_url'=>$faker->imageUrl($width=292,$height=400)
    ];
});
