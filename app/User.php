<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";
    protected $fillable = ['usuario','password','email','nombre','paterno','materno','telefono','id_ubicacion','rol','estado'];     
    
    public function sucursal()
    {
        return $this->belongsTo('App\Trf_Sucursal','id_ubicacion');
    }
    
    public function sucursal2()
    {
        return $this->belongsTo(Trf_Sucursal::class,'id_ubicacion');
    }

    public function getFullNameAttribute()
    {
        return $this->nombre . ' ' . $this->paterno;
    }

    public function roles() {

        dd( $this->belongsTo(Trf_Parametrica::class)->where('tabla','=', 'rol')->where('codigo','=',$this->rol));
    }

    public function roldesc()
    {
         $v= Trf_Parametrica::where('tabla','=', 'rol')->where('codigo','=',$this->rol)->get();
          return($v[0]);
    }

    protected $hidden = [ 'password', 'remember_token' ];
    protected $dates =['created_at, updated_at'];
    
    protected $dateFormat = 'Ymd';
}
