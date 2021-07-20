<?php

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\User;
use Faker\Generator;

$factory->define(User::class, function (Generator $faker) {
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('password'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Post::class, function (Generator $faker) {
    return [
        'title'        => $faker->sentence,
        'body'         => $faker->paragraph(30),
        'image' => $faker->image('public/images',400,300) ,
        'user_id'      => rand(1, 10),
        'category_id'  => rand(1, 10),
        'is_published' => rand(0, 1),
    ];
});

$factory->define(Category::class, function (Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(Tag::class, function (Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(Comment::class, function (Generator $faker) {
    return [
        'user_id' => rand(1, 10),
        'post_id' => rand(1, 25),
        'body'    => $faker->paragraph,
    ];
});
