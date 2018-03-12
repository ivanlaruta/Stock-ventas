<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Visita extends Model
{
    protected $table = "trf_visitas";
    protected $dateFormat = 'Ymd H:i:s';
    public $timestamps = true;

    public function ejecutivo()
    {
        return $this->belongsTo('App\Trf_Ejecutivo','id_ejecutivo');
    }
    // public function ejecutivo()
    // {
    //     return $this->belongsTo('App\Vendedores','id_ejecutivo');
    // }
    public function motivo()
    {
        return $this->belongsTo('App\Trf_Motivo','id_motivo');
    }
    public function sucursal()
    {
        return $this->belongsTo('App\Trf_Sucursal','id_sucursal');
    }
    public function cliente()
    {
        return $this->belongsTo('App\Trf_Cliente','id_cliente');
    }
    public function visitas_modelo()
    {
        return $this->hasMany('App\trf_visita_modelo');
    }
}
