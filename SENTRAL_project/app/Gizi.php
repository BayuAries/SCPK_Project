<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gizi extends Model
{
    protected $table = 'gizi';
    protected $fillable = ['id_bayi', 'berat_badan', 'tinggi','lingkar_kepala','bb/u', 'tb/u','status_gizi'];

}
