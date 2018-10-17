<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Clientes;
use App\TiemposPro;
use App\Factura;
use App\FactTaller;

class PostVentaController extends Controller
{
    public function busca_clientes()
    {
        return view('postVenta.busca_clientes') ;
    }

    public function busca_clientes_res(Request $request)
    {
        $txt = $request->busqueda;
        $clientes = Clientes::query();
        if(empty($request->busqueda)){
            $clientes = $clientes->orderBy('fecha_mod', 'desc')->paginate(12);   
        }
        else{
            $parametros = explode(" ", $request->busqueda);
            for ($i=0; $i < sizeof($parametros); $i++) {
               $clientes = $clientes->where('busqueda','like', "%".$parametros[$i]."%");
            }
            $clientes = $clientes->orderBy('fecha_mod', 'desc')->paginate(50);
        }
        return view('postVenta.busca_clientes_res')->with('clientes',$clientes);
    }

    public function perfil_cliente(Request $request)
    {
        $documento = $request->documento;
        $clientes = DB::select( DB::raw("select * from v_clientes_t where nro_doc_uni = '".$documento."'"));
        $vehiculos = Factura::select(DB::raw('ROW_NUMBER() OVER(ORDER BY FECHA_FACTURA DESC) AS ITEM'),'NRO_FACTURA','MARCA','MODELOS','MODELO','MASTER','ANIO','CHASIS','COLOR_EXTERNO','FECHA_FACTURA','nro_doc_uni')
        ->where('nro_doc_uni','=',$documento)
        ->get();
        return view('postVenta.perfil_cliente')
        ->with('clientes',$clientes[0])
        ->with('vehiculos',$vehiculos);
    }
    
    public function perfil_vehiculo(Request $request)
    {
        $chasis = $request->chasis;
        $vehiculos = Factura::where('CHASIS','=',$chasis)->first();
        $proceso = TiemposPro::find($chasis);
        $ots = FactTaller::select('FACTURA','AUTORIZACION','FECHA','CHASIS','OT','LUGAR')->where('CHASIS','=',$chasis)->orderBy('FECHA', 'desc')->distinct()->get();
        // dd($ots);
        return view('postVenta.perfil_vehiculo')
        ->with('ots',$ots)
        ->with('vehiculos',$vehiculos)
        ->with('proceso',$proceso);
    }

    public function factura_taller(Request $request)
    {
        $cabecera = FactTaller::
            where('FACTURA','=',$request->factura)
            ->where('OT','=',$request->ot)
            ->where('CHASIS','=',$request->chasis)
            ->first();
    
        $detalle = FactTaller::
            where('FACTURA','=',$request->factura)
            ->where('OT','=',$request->ot)
            ->where('CHASIS','=',$request->chasis)
            ->get();

        return view('postVenta.detalle_fact')
        ->with('cabecera',$cabecera)
        ->with('detalle',$detalle);
    }
}
