<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gizi extends Model
{
    protected $table = 'gizi';
    protected $fillable = ['bayi_id', 'berat_badan', 'tinggi','lingkar_kepala','bb/u', 'tb/u','status_gizi'];


    public function bayi()
    {
    	return $this->belongsTo('App\Bayi');
    }

}
