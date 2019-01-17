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
       

         return view('analisis_comercial.precios') ;
           
    }
    public function resultado(Request $request)
    {
        // dd($request->all());

        $stock=$request->stock;
        $nostock=$request->nostock;
        $año=$request->año;

        if($stock == 'si' && $nostock == 'no')
        {
        $precios_all = DB::select( DB::raw("
            select x.*,y.* from 
            (
                select * from  v_precios_gtauto
            )x left join dbo.habilita_precio_gtauto as y on y.cod_master =x.CODIGO_MASTER and y.anio = x.ANIO
            order by 4,6,7
        "));
        }

        if($stock == 'si' && $nostock == 'si')
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
            and c.ANIO >=".$año."
            union 
            select * from  v_precios_gtauto

            )x left join dbo.habilita_precio_gtauto as y on y.cod_master =x.CODIGO_MASTER and y.anio = x.ANIO
            order by 4,6,7
            "));
        }

        if($stock == 'no' && $nostock == 'si')
        {

           $precios_all = DB::select( DB::raw("
            select x.*,y.* from 
            (
            select * 
            from v_precios_gtauto_all c
            where not exists(select * 
            from v_precios_gtauto i
            WHERE c.codigo_master=i.codigo_master
            AND c.ANIO=i.ANIO)
            and c.ANIO >=".$año."
            )x left join dbo.habilita_precio_gtauto as y on y.cod_master =x.CODIGO_MASTER and y.anio = x.ANIO
            order by 4,6,7
            "));
        }

        if($stock == 'no' && $nostock == 'no')
        {
        $precios_all = DB::select( DB::raw("
            select top 0 x.*,y.* from 
            (
                select * from  v_precios_gtauto
            )x left join dbo.habilita_precio_gtauto as y on y.cod_master =x.CODIGO_MASTER and y.anio = x.ANIO
           
        "));
        }



    	 return view('analisis_comercial.resultado') 
            ->with('precios',$precios_all);

    }
}
