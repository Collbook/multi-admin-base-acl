<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'title' =>  $faker->sentence,
        'subtitle' =>  $faker->sentence,
        'slug' =>  str_slug($faker->sentence),
        'body' =>  $faker->paragraph,
        'status' => true,
        'posted_by' => '1',
        'image' =>  $faker->imageUrl,
        'like' => '10',
        'dislike' => '1'
    ];
});
