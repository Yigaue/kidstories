<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;

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
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'is_admin'=>$faker->boolean,
        'first_name'=>$faker->firstName,
        'last_name'=>$faker->lastName,
        'image_url'=>$faker->imageUrl(),
        'phone'=>$faker->phoneNumber,
        'location'=>$faker->state,
        'postal_code'=>$faker->postcode
    ];
});

$factory->define(App\Story::class, function (Faker $faker) {
    $ages = ['2-4','5-7','8-10'];
    return [
        'title'=>$faker->bs,
        'body'=>$faker->paragraph(2),
        'category_id'=>function(){
            return factory('App\Category')->create()->id;
        },
        'user_id'=>function(){
            return factory('App\User')->create()->id;
        },
        'image_url'=>$faker->imageUrl(),
        'age'=>$ages[rand(0,2)],
        'author'=>$faker->name,
        'story_duration'=>$faker->time,
        'is_premium'=>$faker->boolean
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'image_url'=>$faker->imageUrl()
    ];
});

$factory->define(App\Bookmark::class, function (Faker $faker) {
    return [
        'story_id'=>function(){
            return factory('App\Story')->create()->id;
        },
        'user_id'=>function(){
            return factory('App\User')->create()->id;
        }
    ];
});

$factory->define(App\Reaction::class, function (Faker $faker) {
    return [
        'story_id'=>function(){
            return factory('App\Story')->create()->id;
        },
        'user_id'=>function(){
            return factory('App\User')->create()->id;
        },
        'reaction'=>$faker->boolean
    ];
});

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'story_id'=>function(){
            return factory('App\Story')->create()->id;
        },
        'user_id'=>function(){
            return factory('App\User')->create()->id;
        },
        'body'=>$faker->paragraph
    ];
});

$factory->define(App\Subscription::class, function (Faker $faker) {
    return [
        'title'=>$faker->bs,
        'cost'=>$faker->randomNumber(3),
        'duration'=>$faker->randomNumber(2)
    ];
});

$factory->define(App\Payment::class, function (Faker $faker) {
    return [
       'user_id'=>function(){
           return factory('App\User')->create()->id;
       },
       'amount'=>rand(100,2000),
       'transaction_reference'=>rand(100000000,200000000)
    ];
});

$factory->define(App\Subscribed::class, function (Faker $faker) {
    return [
       'subscription_id'=>function(){
           return factory('App\Subscription')->create()->id;
       },
       'expired_date'=>$faker->dateTimeBetween('-1 years','+1 years'),
    ];
});
