<?php

use Faker\Generator as Faker;

$factory->define(App\Posts::class, function (Faker $faker) {
    return [
        'tittle' => $faker->sentence(10, true),
        'excerpt' => $faker->sentence(100, true),
        'body' => $faker->paragraph(5, true),
        'published_at' => \Illuminate\Support\Carbon::parse($faker->dateTimeInInterval('-2 years', '+6 months', null)->format('Y-m-d H:i:s')),
        'category_id' => $faker->numberBetween(1,10),
        'user_id' => $faker->numberBetween(1.31),
    ];
});
