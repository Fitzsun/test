<?php

use Faker\Generator as Faker;

$factory->define(App\Feedback::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'phone'=>$faker->phoneNumber,
        'area'=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'is_contacted'=>$faker->boolean($chanceOfGettingTrue = 50),
        'quotation'=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL)
    ];
});
