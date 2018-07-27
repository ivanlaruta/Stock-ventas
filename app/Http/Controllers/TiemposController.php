<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DateTime;
use DB;
use App\V_stock_todo;
use App\Cotizacion;
use App\Reserva;
use App\Factura;

class TiemposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regionales =DB::select( DB::raw("
                select REG_ASIGNADA,AVG(dias_proceso_ingreo) AS TIEMPO_PROMEDIO
                from v_tiempos 
                where COD_MARCA = 'T'
                group by REG_ASIGNADA
            "));

        $sucursales =DB::select( DB::raw("
                select REG_ASIGNADA,SUCURSAL, AVG(dias_proceso_ingreo) AS TIEMPO_PROMEDIO
                from v_tiempos 
                where COD_MARCA = 'T'
                group by REG_ASIGNADA,SUCURSAL
                ORDER BY 1
            "));

        $vendedores =DB::select( DB::raw("
                select REG_ASIGNADA,SUCURSAL,VENDEDOR, AVG(dias_proceso_ingreo) AS TIEMPO_PROMEDIO
                from v_tiempos 
                where COD_MARCA = 'T'
                group by REG_ASIGNADA,SUCURSAL,VENDEDOR
                ORDER BY 1
            "));

        $detalle =DB::select( DB::raw("
                 select REG_ASIGNADA,SUCURSAL, AVG(dias_proceso_ingreo) AS TIEMPO_PROMEDIO
                from v_tiempos 
                where COD_MARCA = 'T'
                group by REG_ASIGNADA,SUCURSAL
                ORDER BY 1
            "));
         return view('reportes.tiempos.index')
         ->with('regionales',$regionales)
         ->with('sucursales',$sucursales)
         ->with('vendedores',$vendedores)
         ->with('detalle',$detalle)
         ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
