<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Status::class, function (Faker $faker) {
    $user_ids = \App\User::query()->pluck('id');
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'user_id' => $faker->randomElement($user_ids),
        'content' => $faker->text(),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
