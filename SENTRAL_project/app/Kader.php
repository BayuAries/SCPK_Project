<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kader extends Model
{
    protected $table = 'kader';
    protected $fillable = ['nama', 'email', 'password'];
}
