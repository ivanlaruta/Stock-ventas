<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Sucursal extends Model
{
    protected $table = "v_ubicaciones";
    public $incrementing=false;
        // protected $primaryKey ='codigo';
    //  protected $dateFormat = 'Ymd H:i:s';
    // public $timestamps = true;


    protected $fillable =['id','nom_sucursal'];

   

    public function visitas()
    {
        return $this->hasMany('App\Trf_Visita');
    }

    public function ejecutivos()
    {
        return $this->hasMany('App\Trf_Ejecutivo');
    }
    public function users()
    {
        return $this->hasMany('App\User','id');
    }
    public function encuestas()
    {
        return $this->hasMany('App\Trf_Encuesta','id');
    }
}
