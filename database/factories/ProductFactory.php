<?php

// use Faker\Generator as Faker;

$factory->define(App\Product::class, function () {
    $faker = Faker\Factory::create('zh_CN');
    return [
        'product_name'=>$faker->name,
        'product_category'=>$faker->numberbetween($min=1,$max=3),
        'product_thumbnail_url'=>$faker->imageUrl($width=280,$height=280),
        'product_display_url'=>$faker->imageUrl($width=800,$height=200),
        'product_intro_url'=>$faker->imageUrl($width=1200,$height=1284)
    ];
});
