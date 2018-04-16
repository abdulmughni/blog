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
        'role_id' => $faker->numberBetween(1, 3),
        'status' => 1,
        'photo_id' => 1
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {

    return [
        'user_id' => $faker->name,
        'category_id' => $faker->numberBetween(1, 10),
        'photo_id' => 1,
        'title' => $faker->sentence(7,11),
        'description' => $faker->paragraphs(rand(10, 20), true),
        'slug' => $faker->slug()
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {

    return [
        'post_id' => $faker->numberBetween(1, 50),
        'is_active' => 1,
        'author' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'photo' => '/default/feature.png',
        'body' => $faker->paragraphs(3,5)
    ];
});

$factory->define(App\CommentReply::class, function (Faker\Generator $faker) {

    return [
        'comment_id' => $faker->numberBetween(1, 50),
        'is_active' => 1,
        'author' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'photo' => '/default/feature.png',
        'body' => $faker->paragraphs(2,3)
    ];
});

$factory->define(App\Role::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->randomElement(['Administrator', 'Author', 'Subscriber'])
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->randomElement(['PHP', 'Love', 'Life', 'Travel', 'Laravel', 'Green House', 'Mountains', 'Eating', 'Enjoy'])
    ];
});

$factory->define(App\Photo::class, function (Faker\Generator $faker) {

    return [
        'file' => '/default/feature.png'
    ];
});
