<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name', 'gender', 'date_of_birth', 'address', 'specialist','schedule'];
}
