<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trf_Modelo extends Model
{
    protected $table = "trf_modelos";
    protected $fillable = ['id_categoria', 'descripcion','otro','observaciones'];
     protected $dateFormat = 'Ymd H:i:s';
    public $timestamps = true;

    public function categoria()
    {
        return $this->belongsTo('App\trf_categoria','id_categoria');
    }

    public function visitas_modelos()
    {
        return $this->hasMany('App\Trf_Visita_Modelo');
    }
    
}
