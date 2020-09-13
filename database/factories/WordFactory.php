<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Word::class, function (Faker $faker) {
    return [
        'word' => $faker->word(),
    ];
});

$factory->define(App\Definition::class, function (Faker $faker) {
    $poll_ids = DB::table('words')->pluck('id')->all();

    return [
        'partOfSpeech' => $faker->word(),
        'definition' => $faker->realText(500),
        'word_id' => $faker->randomElement($poll_ids),
    ];
});
