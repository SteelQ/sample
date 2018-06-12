<?php

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
  $date_time = $faker->date . ' ' . $faker->time;
  static $password;

  return [
    'name' => $faker->name,
    'email' => $faker->safeEmail,
    'is_admin' => false,
    'activated' => true,
    'password' => $password ?: $password = bcrypt('secret'),
    'remember_token' => str_random(10),
    'created_at' => $date_time,
    'updated_at' => $date_time
  ];
});

$factory->define(App\Models\Status::class, function (Faker\Generator $faker) {
  $date_time = $faker->date . ' ' . $faker->time;
  return [
    'content' => $faker->text(),
    'created_at' => $date_time,
    'updated_at' => $date_time
  ];
});