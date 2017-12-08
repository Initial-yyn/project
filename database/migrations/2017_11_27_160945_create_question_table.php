<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50)->comment('提问者姓名');
            $table->string('question_title',50)->comment('标题');
            $table->text('question_content')->comment('正文');
            $table->integer('type')->comment('问题类型[高等数学|线性代数|随机过程|概率论]=>[0|1|2|3]');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question');
    }
}
