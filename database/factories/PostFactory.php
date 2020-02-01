<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {
    $users = App\User::pluck('id')->toArray();
    return [
        'title' => $faker->title,
        'post' => $faker->paragraph,
        //'user_id' => $faker->randomElement($users),
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});
