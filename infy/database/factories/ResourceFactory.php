<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(\App\Models\Authority::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'created_by' => '初期データ投入',
        'updated_by' => '初期データ投入'
    ];
});

$factory->define(\App\Models\Group::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'about' => $faker->text,
        'created_by' => '初期データ投入',
        'updated_by' => '初期データ投入'
    ];
});

$factory->define(\App\Models\Faculty::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'created_by' => '初期データ投入',
        'updated_by' => '初期データ投入'
    ];
});

$factory->define(\App\Models\Role::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'created_by' => '初期データ投入',
        'updated_by' => '初期データ投入'
    ];
});
