<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Witcher extends Model
{
   protected $fillable = [
      'name',
      'style'
   ];
}
