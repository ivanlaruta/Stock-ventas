<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiemposPro extends Model
{
    protected $table = "v_tiempos_proceso";
    protected $primaryKey ='CHASIS';
    public $incrementing=false;
}
