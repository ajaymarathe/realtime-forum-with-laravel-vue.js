<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Reply;
use Faker\Generator as Faker;
use App\Model\Question;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'question_id' => function(){
            return Question::all()->random();
        },
        'user_id' => function(){
            return \App\User::all()->random();
        }
    ];
});
