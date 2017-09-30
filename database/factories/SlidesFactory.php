<?php

use Faker\Generator as Faker;

$factory->define(App\Slides::class, function (Faker $faker) {
    return [
        'slide_name' =>$faker->name,
        'level'      =>$faker->randomDigit,
        'imgUrl'     =>$faker->imageUrl()
    ];
});
