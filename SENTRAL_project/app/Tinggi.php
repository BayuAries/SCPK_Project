<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tinggi extends Model
{
    protected $table = 'tinggi';
    protected $fillable = ['bulan', 'minsd','median','plussd','gender'];

}
