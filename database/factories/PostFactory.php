<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'title' => $title,
        'description' => $faker->sentence(10),
        'author' => $faker->sentence(10),
        'file' => $faker->imageUrl($width = 1200, $height = 400),
        'slug' => Str::slug($title),
        'excerpt' => $faker->text(500), 
        'status' => $faker->randomElement(['DRAFT', 'PUBLISHED']),  
        'user_id' => rand(1, 30),
        'category_id' => rand(1, 20),
    ];
});
