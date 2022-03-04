<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'address',
        'gender',
        'country',
        'state',
        'district',
        'educational_details'       
    ];
}
