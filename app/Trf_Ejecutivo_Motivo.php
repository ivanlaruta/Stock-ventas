<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Ejecutivo_Motivo extends Model
{
    protected $table = "trf_ejecutivo_motivo";
     protected $dateFormat = 'Ymd H:i:s';
    public $timestamps = true;

    public function ejecutivo()
    {
        return $this->belongsTo('App\Trf_Ejecutivo','id_ejecutivo');
    }
    public function motivo()
    {
        return $this->belongsTo('App\Trf_Motivo','id_motivo');
    }
}
