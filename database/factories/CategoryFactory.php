<?php


$factory->define(App\Category::class, function () {
    $faker = Faker\Factory::create('zh_CN');
    return [
        'name' => $faker->name,
        'en_name' => $faker->name,
        'path' => $faker->url,
        'description' => $faker->sentence,
        'parent_id' => 0
    ];
});
