<?php
namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->streetName,
        /* 'dni' => $faker->unique()->dni, */
        'address' => $faker->unique()->address,
        'phone' => $faker->unique()->phoneNumber,
        'email' => $faker->unique()->safeEmail,
    ];
});
