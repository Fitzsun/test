<?php

// use Faker\Generator as Faker;

$factory->define(App\Slides::class, function () {
    $faker = Faker\Factory::create('zh_CN');
    return [
        'slide_name' =>$faker->name,
        'level'      =>$faker->randomDigit,
        'imgUrl'     =>$faker->imageUrl()
    ];
});
