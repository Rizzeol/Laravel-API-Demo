<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\StudentText;
use Faker\Generator as Faker;

$factory->define(StudentText::class, function (Faker $faker) {
    return [
        'user' => $faker->firstName,
        'text' => $faker->word()
    ];
});
