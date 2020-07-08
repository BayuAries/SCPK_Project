<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bayi extends Model
{
    protected $table = 'bayi';
    protected $fillable = ['nama', 'ortu_id', 'tanggal_lahir','usia','jenis_kelamin'];

    public function ortu()
    {
    	return $this->belongsTo('App\Ortu');
    }

    public function gizi()
    {
    	return $this->hasMany('App\Gizi');
    }
}
