<?php

use Faker\Generator as Faker;

$factory->define(App\Slides::class, function (Faker $faker) {
    // $faker = Faker\Factory::create('zh_CN');
    return [
        // 先写unique再写Word
        'slide_name' => $faker->unique()->word,
        'path'       => $faker->unique()->word,
        'level'      => $faker->numberbetween($min=1,$max=2),
        'order'      => $faker->unique()->randomDigit,
        'imgUrl'     => $faker->imageUrl($width=1920,$height=600)
    ];
});
