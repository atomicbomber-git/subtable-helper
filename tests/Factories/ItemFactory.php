<?php

use Faker\Generator as Faker;
use JamesPatrickKeegan\SubtableHelper\Tests\Models\Item;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => rand(0, 100),
    ];
});
