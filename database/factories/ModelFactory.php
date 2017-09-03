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
        'type' => 'student',
        'bio' => $faker->paragraph,
        'gpa' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 4.0),
        'act_score' => $faker->randomNumber($nbDigits = 2, $strict = false),
        'sat_score' => $faker->randomNumber($nbDigits = 4, $strict = false),
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'zip' => $faker->postCode,
        'profile_pic' => $faker->imageUrl(),
        'phone' => $faker->phoneNumber,
        'gender' => 'female'
      ];
});

$factory->define(App\Skill::class, function(Faker\Generator $faker){
  return [
    'spring_tumbling_score' => $faker->numberBetween($min = 0, $max = 42),
    'hard_tumbling_score' => $faker->numberBetween($min = 0, $max = 43),
    'group_stunting_score' => $faker->numberBetween($min = 0, $max = 59),
    'coed_stunting_score' => $faker->numberBetween($min = 0, $max = 57)
  ];
});

$factory->define(App\School::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'logo' => $faker->imageUrl($width = 640, $height = 480),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'office_phone' => $faker->phoneNumber,
        'cell_phone' => $faker->phoneNumber,
        'office_address' => $faker->streetAddress,
        'in_state_tuition' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1000, $max = 30000),
        'out_state_tuition' => $faker->randomFloat($nbMaxDecimals = 2, $min = 30000, $max = 100000),
        'website' => $faker->url,
        'min_gpa' => $faker->randomFloat($nbMaxDecimals = 2, $min = 2.5, $max = 4.0),
        'min_gpa_transfer' => $faker->randomFloat($nbMaxDecimals = 2, $min = 2.5, $max = 4.0),
        'gpa_needed_for_team' => $faker->randomFloat($nbMaxDecimals = 2, $min = 2.5, $max = 4.0),
        'act_score' => $faker->numberBetween($min = 0, $max = 16), // 8567
        'sat_score' => $faker->numberBetween($min = 0, $max = 2400) // 8567
    ];
});
