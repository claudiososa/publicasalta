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

$factory->define(PublicaSalta\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(PublicaSalta\Category::class, function (Faker\Generator $faker) {
    //static $password;

    return [
        'name' => $faker->name,
        'detail' => $faker->sentence(),
    ];
});

$factory->define(PublicaSalta\SubCategory::class, function (Faker\Generator $faker) {
    //static $password;

    return [
        'name' => $faker->name,
        'detail' => $faker->sentence(),
    ];
});

$factory->define(PublicaSalta\Ad::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'category_id'=>1,
        'subcategory_id'=>1,
        'title' => $faker->sentence(),
        'content' => $faker->paragraph(),
    ];
});
