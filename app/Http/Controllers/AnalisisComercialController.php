<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\V_precios;
use App\V_precios_all;
use Carbon\Carbon;
use DB;

class AnalisisComercialController extends Controller
{
    public function precios()
    {
    	$precios_all = DB::select( DB::raw("
    		select x.*,y.* from 
			(
			select * 
			from v_precios_gtauto_all c
			where not exists(select * 
			from v_precios_gtauto i
			WHERE c.codigo_master=i.codigo_master
			AND c.anio=i.anio)
			AND anio>2017
			union 
			select * from  v_precios_gtauto

			)x left join dbo.habilita_precio_gtauto as y on y.cod_master =x.CODIGO_MASTER and y.anio = x.ANIO
			order by 4,6,7
    	"));

    	$precios =V_precios::
    	orderBy('MODELO')
    	->orderBy('MASTER')
    	->orderBy('ANIO')
    	->get();

    	 return view('analisis_comercial.precios') 
            ->with('precios',$precios_all);


    	// dd($precios);
    }
}
