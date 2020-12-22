<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'body' => $faker->paragraph(3, true),
        'views' => rand(5,20),
        'answers' => rand(5,30),
        'votes' => rand(-5,50),
    ];
});
