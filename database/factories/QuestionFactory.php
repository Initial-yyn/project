<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {

    return [
      'name'=>$faker->name,
      'question_title'=>$faker->text(20),
      'question_content'=>$faker->text(100),
      'type'=>$faker->numberBetween(0,3),
      'created_at'=>$faker->date('Y-m-d H:i:s','now'),
      'updated_at'=>$faker->date('Y-m-d H:i:s','now'),
    ];
});
