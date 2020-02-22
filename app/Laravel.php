<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laravel extends Model
{
    protected $fillable = [
        'name',
        'last',
        'email',
        'gender'
    ];
}
