<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Step::class, function (Faker\Generator $faker) {

    return [
        'recipe_id' => function(){
          return factory(App\Recipe::class)->create()->id;
        },
        'content' => $faker->paragraph,
    ];
});

$factory->define(App\Recipe::class, function (Faker\Generator $faker) {

    return [
        'user_id' => function(){
          return factory(App\User::class)->create()->id;
        },
        'name' => $faker->sentence(6),
        'description' => $faker->paragraph,
        'image' => 'recipe_placeholder.jpg',
    ];
});

$factory->define(App\Ingredient::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph,
        'image' => 'recipe_placeholder.jpg',
    ];
});
