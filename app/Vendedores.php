<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedores extends Model
{
    protected $table = "v_vendedores";
    protected $primaryKey ='cod_vendedor';
    public $timestamps = false;
    public $incrementing=false;
}
