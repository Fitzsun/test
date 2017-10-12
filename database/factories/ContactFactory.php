<?php

// use Faker\Generator as Faker;
// function (Faker $faker)
$factory->define(App\Contact::class, function () {
    $faker = Faker\Factory::create('zh_CN');
    return [
        'phone' => $faker ->phoneNumber(),
        'email' => $faker -> unique() ->safeEmail,
        'address' => $faker ->address(),
        'slogan'  => $faker ->realText($maxNbChars = 15, $indexSize = 2),
        'imgUrl'  => $faker ->imageUrl($width=259, $height=20)
    ];
});
