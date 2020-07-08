<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gizi extends Model
{
    protected $table = 'gizi';
    protected $fillable = ['bayi_id', 'berat_badan', 'tinggi','bb_u', 'hasil1', 'tb/u', 'hasil2','usia'];


    public function bayi()
    {
    	return $this->belongsTo('App\Bayi');
    }

}
