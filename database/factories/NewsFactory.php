<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->text(100),
        'description' => $faker->text(255),
        'text' => $faker->text(2000),
        'slug' => $faker->slug,
        'category' => array_rand(News::CATEGORIES),
        'isTimelineItem' => rand(0, 1),
        'isAdvertisement' => rand(0, 10) ? false : true,
        'views' => rand(0, 1000),
        'pictures' => env('NEWS_PICTURE_PATH').rand(0, 9)
    ];
});
