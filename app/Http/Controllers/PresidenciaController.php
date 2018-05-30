<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presi_resumen_stock;
use App\Presi_detalle_stock;
use Carbon\Carbon;
use DB;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;

class PresidenciaController extends Controller
{

    public function stock()
    {
        
        
        return view('presidencia.stock.stock_index');   
    }

    public function stock_tabla_resumen()
    {
        $now = Carbon::now('America/La_Paz')->format('d/m/Y H:i');
        $resumen_stock =Presi_resumen_stock::orderBy('MODELOS','ASC')->orderBy('MASTER','ASC')->get();
        return view('presidencia.stock.stock_tabla_resumen')
        ->with('resumen_stock',$resumen_stock)
        ->with('now',$now)
        ;   
    }

    public function stock_tabla_detalle()
    {
        $now = Carbon::now('America/La_Paz')->format('d/m/Y H:i');
       
        return view('presidencia.stock.stock_tabla_detalle')
        ->with('now',$now)
        ;   
    }

    public function stock_tabla_detalle_data()
    {
        $detalle = Presi_detalle_stock::select(['MODELOS','COD_MARCA','MARCA','ID','CHASIS','ED','NRO_FACTURA','COD_COLOR','NOMBRE','COL_INTERIOR','COD_MASTER','MASTER','COD_MODELO','MODELO','ANIO_MOD','COD_UBICACION','UBICACION','TITULAR','CELULAR','TELEFONO','DIRECCION','VENDEDOR','LUGAR','SITUACION','LIBERADO','ESTADO','CFR','FECHA_RESERVA','TIPO_DE_VENTA','FORMA_DE_PAGO','OBSERVACIONES','FECHA_ZF','STOCK','ASIGNACION','TIPO_UNIDAD','UNIDAD_ASIGNADA']);
 
        return Datatables::of($detalle)->make(true);
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
