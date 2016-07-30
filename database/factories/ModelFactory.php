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

$factory->define(App\Models\Access\User\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
$factory->define(\App\Models\Branch::class, function (Faker\Generator $faker) {
    $university_names = \App\Models\University::lists('name')->toArray();

    return [
        'name' => $faker->name,
        'avatar' => $faker->imageUrl(256, 256),
        'type' => rand(1, 2),
        'university' => $faker->randomElement($university_names),
        'tel' => $faker->phoneNumber,
        'verification' => rand(0, 1),
        'address' => $faker->address,
        'summary' => $faker->sentence,
        'total_membership' => rand(1, 10000),
        'secretary' => $faker->name,
        'secretary_summary' => rand(1, 10000),
        'apply_img' => $faker->imageUrl(256, 256)
    ];
});

$factory->define(\App\Models\Application::class, function (Faker\Generator $faker) {
    $branch_ids = \App\Models\Branch::lists('id')->toArray();
    return [
        'name' => $faker->name,
        'type' => rand(1, 4),
        'summary' => $faker->sentence,
        'detail' => $faker->paragraph,
        'verification' => rand(0, 1),
        'branch_id' => $faker->randomElement($branch_ids),
        'branch_type' => rand(1, 2),
        'img_hash' => $faker->imageUrl(256, 256),
        'apply_hash' => $faker->imageUrl(256, 256),
        'video_hash' => $faker->imageUrl(256, 256),
        'course_lecturer' => $faker->userName,
        'funcy' => rand(100, 500)
    ];
});

$factory->define(\App\Models\Comment::class, function (Faker\Generator $faker) {
    $user_ids = \App\Models\Access\User\User::lists('id')->toArray();
    $application_ids = \App\Models\Application::lists('id')->toArray();
    return [
        'user_id' => $faker->randomElement($user_ids),
        'application_id' => $faker->randomElement($application_ids),
        'comment' => $faker->paragraph
    ];
});

$factory->define(\App\Models\Fancy::class, function (Faker\Generator $faker) {
    $user_ids = \App\Models\Access\User\User::lists('id')->toArray();
    $application_ids = \App\Models\Application::lists('id')->toArray();
    return [
        'user_id' => $faker->randomElement($user_ids),
        'application_id' => $faker->randomElement($application_ids),
    ];
});