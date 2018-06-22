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

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(\App\Models\User::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'authority_id' => $faker->numberBetween(1, 3), // 権限の数だけ範囲を広げる
        'created_by' => '初期データ投入',
        'updated_by' => '初期データ投入'
    ];
});

$factory->define(\App\Models\Person::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName,
        'last_name_kana' => 'ふりがな（姓）',
        'first_name_kana' => 'ふりがな（名）',
        'gender' => $faker->randomElement(['不明', '男性', '女性', '適用不能']),
        'faculty_id' => 1,
        'admitted_on' => $faker->date('Y-m-d'),
        'student_number' => $faker->randomNumber(6),
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'group_id' => 1,
        'role_id' => 1,
        'interest' => $faker->text,
        'special_ability' => $faker->text,
        'portfolio' => $faker->text,
        'image_link' => $faker->url,
        'created_by' => '初期データ投入',
        'updated_by' => '初期データ投入'
    ];
});
