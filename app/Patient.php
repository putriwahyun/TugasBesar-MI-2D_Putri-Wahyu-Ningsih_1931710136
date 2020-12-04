<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['name', 'gender', 'date_of_birth', 'address', 'select_polyclinic','date_of_checkup'];
}
