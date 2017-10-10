<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'phone' => $faker ->phoneNumber(11),
        'email' => $faker -> unique() ->safeEmail,
        'address' => $faker ->address(),
        'slogan'  => str_random(12),
        'imgUrl'  => $faker ->imageUrl()
    ];
});
