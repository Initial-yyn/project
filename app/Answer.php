<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $table = 'answer';
    protected $fillable = ['article_id','name','answer','role'];
}
