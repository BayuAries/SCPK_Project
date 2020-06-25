<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    protected $table = 'ortu';
    protected $fillable = ['nama', 'no_tlp', 'alamat'];
}
