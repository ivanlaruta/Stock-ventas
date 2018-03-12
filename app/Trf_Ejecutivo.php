<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Ejecutivo extends Model
{
    protected $table = "trf_ejecutivos";
    //protected $primaryKey ='cod_vendedor';
    // protected $dateFormat = 'Ymd H:i:s';
    // public $timestamps = true;

    public function visitas()
    {
        return $this->hasMany('App\Trf_Visita');
    }
  
    public function ejecutivos_motivos()
    {
        return $this->hasMany('App\Trf_Ejecutivo_Motivo');
    }

    // public function sucursal()
    // {
    //     return $this->belongsTo('App\Trf_Sucursal','id_sucursal');
    // }

}
