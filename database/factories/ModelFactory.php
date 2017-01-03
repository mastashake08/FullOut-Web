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
    ];
});

$factory->define(App\School::class, function (Faker\Generator $faker) {
    /*
    $table->string('name');
    $table->string('logo');
    $table->longText('description');
    $table->string('office_phone');
    $table->string('cell_phone');
    $table->longText('office_address');
    $table->string('in_state_tuition');
    $table->string('out_state_tuition');
    $table->string('website');
    $table->string('min_gpa');
    $table->string('min_gpa_transfer');
    //GPA needed to stay on team
    $table->string('gpa_needed_for_team');
    $table->string('act_score');
    $table->string('sat_score');
    */

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
