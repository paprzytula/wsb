<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use WSB_BANK\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use WSB_BANK\Role;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'pesel'=> $faker->unique()->pesel,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->afterCreating(User::class, function($user, $faker){
$roles = Role::where('name', 'user')->get();
$user->roles()->sync($roles->pluck('id')->toArray());
});
