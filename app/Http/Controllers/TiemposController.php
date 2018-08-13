<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DateTime;
use DB;
use App\V_stock_todo;
use App\Cotizacion;
use App\Reserva;
use App\Factura;
use Carbon\Carbon;
class TiemposController extends Controller
{

    public function index()
    {
        $inicio_mes=Carbon::now('America/La_Paz')->startOfMonth()->format('d/m/Y');   //inicio de semana
        $hoy = Carbon::now('America/La_Paz')->format('d/m/Y');  //fecha actual
        return view('reportes.tiempos.index') 
        ->with('inicio_mes',$inicio_mes)
        ->with('hoy',$hoy)
        ;
    }

 public function reporte(Request $request)
    {
         // dd($request->all());

         $fechas = explode("-", $request->fecha);
                // dd($fechas);
                $f_ini = $fechas[0];
                $f_fin = $fechas[1];

         $indicadores = null;


         if($request->pantalla == 'nacional')
         {
            $indicadores =DB::select( DB::raw("
                select 
                AVG([cotizacion_contrato-adenda]) AS TIEMPO_COT_CONTR
                ,AVG(contr_res) AS TIEMPO_CONTR_RES
                ,AVG(reserva_factura) AS TIEMPO_RES_FAC
                ,AVG(factura_nota) AS TIEMPO_FAC_NOTA
                ,AVG(dias_proceso_ingreo) AS TIEMPO_PROMEDIO
                ,COUNT (*) AS CONTADOS
                from v_tiempos 
                where COD_MARCA = 'T'
                and f_nota between '".$f_ini."' and '".$f_fin."'
            "));
          // dd($indicadores);

            $result =DB::select( DB::raw("
                select 
                REG_ASIGNADA
                ,AVG([cotizacion_contrato-adenda]) AS TIEMPO_COT_CONTR
                ,AVG(contr_res) AS TIEMPO_CONTR_RES
                ,AVG(reserva_factura) AS TIEMPO_RES_FAC
                ,AVG(factura_nota) AS TIEMPO_FAC_NOTA
                ,AVG(dias_proceso_ingreo) AS TIEMPO_PROMEDIO
                ,COUNT (*) AS CONTADOS
                from v_tiempos 
                where COD_MARCA = 'T'
                and f_nota between '".$f_ini."' and '".$f_fin."'
                group by REG_ASIGNADA
            "));
         }

         if($request->pantalla == 'regional')
         {
            // dd($request->all());
             $indicadores =DB::select( DB::raw("
                select 
                AVG([cotizacion_contrato-adenda]) AS TIEMPO_COT_CONTR
                ,AVG(contr_res) AS TIEMPO_CONTR_RES
                ,AVG(reserva_factura) AS TIEMPO_RES_FAC
                ,AVG(factura_nota) AS TIEMPO_FAC_NOTA
                ,AVG(dias_proceso_ingreo) AS TIEMPO_PROMEDIO
                ,COUNT (*) AS CONTADOS
                from v_tiempos 
                where COD_MARCA = 'T'
                and f_nota between '".$f_ini."' and '".$f_fin."'
                and REG_ASIGNADA = '".$request->regional."'
                
            "));

            $result =DB::select( DB::raw("
                select 
                REG_ASIGNADA,SUC_ASIGNADA
                ,AVG([cotizacion_contrato-adenda]) AS TIEMPO_COT_CONTR
                ,AVG(contr_res) AS TIEMPO_CONTR_RES
                ,AVG(reserva_factura) AS TIEMPO_RES_FAC
                ,AVG(factura_nota) AS TIEMPO_FAC_NOTA
                ,AVG(dias_proceso_ingreo) AS TIEMPO_PROMEDIO
                ,COUNT (*) AS CONTADOS
                from v_tiempos 
                where COD_MARCA = 'T'
                and f_nota between '".$f_ini."' and '".$f_fin."'
                and REG_ASIGNADA = '".$request->regional."'
                group by REG_ASIGNADA,SUC_ASIGNADA
            "));
         }
         if($request->pantalla == 'sucursal')
         {
            // dd($request->all());
             $indicadores =DB::select( DB::raw("
                select 
                AVG([cotizacion_contrato-adenda]) AS TIEMPO_COT_CONTR
                ,AVG(contr_res) AS TIEMPO_CONTR_RES
                ,AVG(reserva_factura) AS TIEMPO_RES_FAC
                ,AVG(factura_nota) AS TIEMPO_FAC_NOTA
                ,AVG(dias_proceso_ingreo) AS TIEMPO_PROMEDIO
                ,COUNT (*) AS CONTADOS
                from v_tiempos 
                where COD_MARCA = 'T'
                and f_nota between '".$f_ini."' and '".$f_fin."'
                and REG_ASIGNADA = '".$request->regional."'
                and SUC_ASIGNADA = '".$request->sucursal."'
                
            "));
             $result =DB::select( DB::raw("
                select 
                REG_ASIGNADA,SUC_ASIGNADA,VENDEDOR
                ,AVG([cotizacion_contrato-adenda]) AS TIEMPO_COT_CONTR
                ,AVG(contr_res) AS TIEMPO_CONTR_RES
                ,AVG(reserva_factura) AS TIEMPO_RES_FAC
                ,AVG(factura_nota) AS TIEMPO_FAC_NOTA
                ,AVG(dias_proceso_ingreo) AS TIEMPO_PROMEDIO
                ,COUNT (*) AS CONTADOS
                from v_tiempos 
                where COD_MARCA = 'T'
                and f_nota between '".$f_ini."' and '".$f_fin."'
                and REG_ASIGNADA = '".$request->regional."'
                and SUC_ASIGNADA = '".$request->sucursal."'
                group by REG_ASIGNADA,SUC_ASIGNADA,VENDEDOR
            "));
         }



         if($request->pantalla == 'det_nacional')
         {
             $result =DB::select( DB::raw("
                select REG_ASIGNADA,SUC_ASIGNADA,VENDEDOR,razon_social,CHASIS,MODELO,f_ingreso,f_cotiza,CASE WHEN f_contr IS NULL THEN f_aden ELSE f_contr end as 'f_contr', f_res ,f_fac,f_nota,dias_proceso_ingreo
                from v_tiempos 
                where COD_MARCA = 'T'
                and f_nota between '".$f_ini."' and '".$f_fin."'
            "));
         }

         if($request->pantalla == 'det_regional')
         {
            // dd($request->all());
             $result =DB::select( DB::raw("
                select REG_ASIGNADA,SUC_ASIGNADA,VENDEDOR,razon_social,CHASIS,MODELO,f_ingreso,f_cotiza,CASE WHEN f_contr IS NULL THEN f_aden ELSE f_contr end as 'f_contr', f_res ,f_fac,f_nota,dias_proceso_ingreo
                from v_tiempos 
                where COD_MARCA = 'T'
                and f_nota between '".$f_ini."' and '".$f_fin."'
                and REG_ASIGNADA = '".$request->regional."'
            "));
         }
         if($request->pantalla == 'det_sucursal')
         {
            // dd($request->all());
             $result =DB::select( DB::raw("
                select REG_ASIGNADA,SUC_ASIGNADA,VENDEDOR,razon_social,CHASIS,MODELO,f_ingreso,f_cotiza,CASE WHEN f_contr IS NULL THEN f_aden ELSE f_contr end as 'f_contr', f_res ,f_fac,f_nota,dias_proceso_ingreo
                from v_tiempos 
                where COD_MARCA = 'T'
                and f_nota between '".$f_ini."' and '".$f_fin."'
                and REG_ASIGNADA = '".$request->regional."'
                and SUC_ASIGNADA = '".$request->sucursal."'
            "));
         }

         if($request->pantalla == 'vendedor')
         {
             $result =DB::select( DB::raw("
                select REG_ASIGNADA,SUC_ASIGNADA,VENDEDOR,razon_social,CHASIS,MODELO,f_ingreso,f_cotiza,CASE WHEN f_contr IS NULL THEN f_aden ELSE f_contr end as 'f_contr', f_res ,f_fac,f_nota,dias_proceso_ingreo
                from v_tiempos 
                where COD_MARCA = 'T'
                and f_nota between '".$f_ini."' and '".$f_fin."'
                and REG_ASIGNADA = '".$request->regional."'
                and SUC_ASIGNADA = '".$request->sucursal."'
                and VENDEDOR = '".$request->vendedor."'
            "));
             // dd($result);
         }



       

        // $sucursales =DB::select( DB::raw("
        //         select REG_ASIGNADA,SUCURSAL, AVG(dias_proceso_ingreo) AS TIEMPO_PROMEDIO
        //         from v_tiempos 
        //         where COD_MARCA = 'T'
        //         group by REG_ASIGNADA,SUCURSAL
        //         ORDER BY 1
        //     "));

        // $vendedores =DB::select( DB::raw("
        //         select REG_ASIGNADA,SUCURSAL,VENDEDOR, AVG(dias_proceso_ingreo) AS TIEMPO_PROMEDIO
        //         from v_tiempos 
        //         where COD_MARCA = 'T'
        //         group by REG_ASIGNADA,SUCURSAL,VENDEDOR
        //         ORDER BY 1
        //     "));

        // $detalle =DB::select( DB::raw("
        //          select REG_ASIGNADA,SUCURSAL, AVG(dias_proceso_ingreo) AS TIEMPO_PROMEDIO
        //         from v_tiempos 
        //         where COD_MARCA = 'T'
        //         group by REG_ASIGNADA,SUCURSAL
        //         ORDER BY 1
        //     "));

         return view('reportes.tiempos.reporte')
         ->with('result',$result)
         ->with('indicadores',$indicadores)
         // ->with('sucursales',$sucursales)
         // ->with('vendedores',$vendedores)
         // ->with('detalle',$detalle)
         ->with('f_ini',$f_ini)
         ->with('f_fin',$f_fin)
         ->with('request',$request)
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
