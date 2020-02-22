<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //option A
    protected $fillable = [
        'name',
        'email'
    ];

    //option b(cancels all the protection)
    // protected $guarded =[];
}
