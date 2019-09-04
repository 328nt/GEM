<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->title,
        'description' => $faker->description,
        'content' => $faker->content,
        'image' => $image,
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
