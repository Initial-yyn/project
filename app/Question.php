<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $table = 'question';
    protected $fillable = [
      'name',
      'question_title',
      'question_content',
      'type',
    ];
}
