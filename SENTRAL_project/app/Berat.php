<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berat extends Model
{
    protected $table = 'berat';
    protected $fillable = ['bulan', 'minsd','median','plussd','gender'];
}
