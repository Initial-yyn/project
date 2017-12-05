<?php

use Illuminate\Database\Seeder;
use App\Question;
use Faker\Generator;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      factory(App\Question::class,1000)->create();

    }
}
