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
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'mat_id' => $faker->unique()->randomNumber(6),
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
        'date_of_birth' => $faker->dateTime,
        'occupation' => $faker->jobTitle,
        'gender' => $faker->randomElement(['m','f']),
        'original_image' => $faker->url,
        'blurred_image' => $faker->url,
        'religion' => $faker->company,
        'state_of_origin' => $faker->city,
        'genotype' => $faker->randomElement(['AA', 'AS', 'SS']),
        'height' => $faker->randomNumber(3),
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->country,
        'phone_number' => $faker->phoneNumber,
        'education_level' => $faker->randomLetter,
        'educational_institution' => $faker->userName,
        'personal_income' => $faker->randomDigit,
        'social' => $faker->url,
        'description' => $faker->url,
        'embarrassing_traits' => $faker->realText(200),
        'positive_traits' => $faker->realText(200),
        'profile_for' => $faker->dayOfWeek,
        'relationship_status' => $faker->word,
        'find_out' => $faker->word
    ];
});

$factory->define(App\Interest::class, function (Faker\Generator $faker) {

});
