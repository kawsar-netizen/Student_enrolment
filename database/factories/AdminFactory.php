<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Admin;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'admin_name' => 'WebCoder',
        'admin_email' => 'webcoder@it.com',
        'email_verified_at' => now(),
        'admin_password' => Hash::make('webcoderit'),
    ];
});
