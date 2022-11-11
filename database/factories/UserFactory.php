<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

$factory->define(App\Models\User::class, function(Faker $faker){
    return[
        'username' =>$fname = $faker->firstName,
        'fullname'=>$fname . " " . $faker->lastName,
        'email' =>$faker->unique()->safeEmail,
        'password' =>bcrypt('password123'), //password
    ];
});
