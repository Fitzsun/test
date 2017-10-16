<?php

// use Faker\Generator as Faker;

$factory->define(App\News::class, function () {
    $faker = Faker\Factory::create('zh_CN');
    $title = $faker->sentence($nbWords = 4, $variableNbWords = true);
    $paragraphs = $faker->paragraphs($nb = 3, $asText = false);
    $parag = json_encode($paragraphs);
    return [
        'category_id' => $faker->numberBetween($min=0,$max=1),
        'title' => $title,
        'publish_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'meta_description' =>$parag,
        'sm_image_url' => $faker->imageUrl($width=200,$height=200),
        'lg_image_url' => $faker->imageUrl($width=800,$height=322),
        'content' => $faker->sentence($nbWords = 11, $variableNbWords = true),
        'is_hot'  => $faker->boolean($chanceOfGettingTrue = 50),
        'is_latest'  => $faker->boolean($chanceOfGettingTrue = 50),
        'is_index'  => $faker->boolean($chanceOfGettingTrue = 50)
    ];
});
