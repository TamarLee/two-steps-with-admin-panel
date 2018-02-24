<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recepie extends Model
{
    protected $table = "recepies"; 
    protected $fillable = ['title', 'ingredients', 'description', 'image', 'link', 'tag', 'author',];
}
