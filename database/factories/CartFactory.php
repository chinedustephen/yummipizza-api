<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cart;
use Faker\Generator as Faker;

$factory->define(Cart::class, function (Faker $faker) {
    return [
        'cart_user_cookie'=>$faker->regexify('[A-Za-z0-9]{20}'),
        'cart_menu_id'=>rand(1, 20),
        'cart_quantity'=>rand(1, 20)
    ];
});
