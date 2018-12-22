<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\V_stock_todo;
use App\Vcb_danios;

class CodBarrasController extends Controller
{
     public function danio_inicio(request $request)
    {
        $chassis=$request->chassis;

        if(is_null($chassis))
        {
            $resultado ='0';
        }
        else
        {
            $resultado =DB::select( DB::raw("
                select 
                ROW_NUMBER() OVER(ORDER BY qw.chassis DESC) AS ITEM, 
                RTRIM(m.nom_marca) AS MARCA,
                qw.chassis AS CHASSIS,
                RTRIM(b.descripcion) AS MODELOS, 
                RTRIM(b.nom_modelo) AS MODELO,
                RTRIM(c.nom_master) AS MASTER
                from gtauto.dbo.ct_vehiculos qw
                left join gtauto.dbo.ct_modelos AS b ON qw.cod_modelo = b.cod_modelo 
                left join gtauto.dbo.ct_masters AS c ON qw.cod_master = c.cod_master 
                left join gtauto.dbo.ct_marca AS m ON qw.cod_marca = m.cod_marca
                left join gtauto.dbo.cpp_mantit AS oo ON qw.cod_tit = oo.cod_tit
                where qw.chassis like '%".$chassis."%' ORDER BY ITEM"));

            if(empty($resultado))
            {
                return redirect()->route('cb.danio_inicio')->with('mensaje_error',"Ingreso un chassis no valido");
            }
        }

        return view('cb.danios.index')
        ->with('resultado',$resultado)
        ->with('request',$request)
        ->with('chassis',$chassis);
    }


    public function danio_det($id)
    {
        $id = str_replace("_", "/", $id);
        $id=ltrim(rtrim($id));
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); 

        $danios = Vcb_danios::where('DATO_SCANEO','LIKE', '%'.$id.'%')->get();

        // dd($danios);
         return view('cb.danios.detalle')
         ->with('meses',$meses)
         ->with('danios',$danios);
        
    }
}
