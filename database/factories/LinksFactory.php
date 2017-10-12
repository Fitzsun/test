<?php

// use Faker\Generator as Faker;

$factory->define(App\Links::class, function () {
    $faker = Faker\Factory::create('zh_CN');
    return [
        'link_name' => $faker->name,
        'link_href' => $faker->url,
        'level'     => $faker->randomDigit
    ];
});
