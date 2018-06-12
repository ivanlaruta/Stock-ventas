<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;


class SesionController extends Controller
{
    public function index(Request $request)
    {   
        
        if (Auth::user()->rol == '1')
        {
            //return redirect()->route('resumen.index');
            //return redirect()->route('ventas.index');
            return redirect()->route('trafico.formulario2');
             // return redirect()->route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0']);
        }
         if (Auth::user()->rol == '2')
        {
            return redirect()->route('solicitudes.index');
        }
         if (Auth::user()->rol == '3')
        {
            return redirect()->route('principal.index');
        }
         if (Auth::user()->rol == '4')
        {
            return redirect()->route('envios.index');
        }
         if (Auth::user()->rol == '5')
        {
            return redirect()->route('envios.index');
        }
        if (Auth::user()->rol == '101')
        {
            return redirect()->route('trafico.formulario2');
        }
        if (Auth::user()->rol == '100')
        {
            return redirect()->route('trafico.formulario2');
        }
        if (Auth::user()->rol == '102')
        {
            return redirect()->route('trafico.formulario2');
        }
        if (Auth::user()->rol == '150')
        {
            return redirect()->route('importaciones.mitsui');
        }

    }

}
