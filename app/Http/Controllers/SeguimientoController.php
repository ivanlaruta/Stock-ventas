<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DB;
use App\V_stock_todo;
use App\Cotizacion;
use App\Reserva;
use App\Factura;

class SeguimientoController extends Controller
{

    public function index(request $request)
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
                qw.chassis AS CHASSIS,
                (select COUNT (c.chasis) as expr1 from gtauto.dbo.Cotizador c where c.chasis = qw.chassis) as COTIZACION,
                (select COUNT (r.chassis) as expr1 from gtauto.dbo.cpf_resvehokm R where r.chassis = qw.chassis and r.cod_docum='rvehokma' and r.nro_contrato='1' and r.cod_estado='R') as RESERVA,
                (select COUNT (co.chassis) as expr1 from gtauto.dbo.cpf_vtasokm co where co.chassis = qw.chassis) as CONTRATO,
  
                (select COUNT (ad.chassis) as expr1 from gtauto.dbo.cpf_adendaokm ad where ad.chassis_aux1 = qw.chassis) as ADENDA,
                (select COUNT (f.chassis) as expr1 from gtauto.dbo.cpf_facturas f where f.chassis = qw.chassis) as FACTURA,
                (select COUNT (n.chassis) as expr1 from gtauto.dbo.cpf_notaentrega n where n.chassis = qw.chassis) as ENTREGA,
                RTRIM(b.descripcion) AS MODELOS, 
                RTRIM(m.nom_marca) AS MARCA,
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
                return redirect()->route('seguimiento.index')->with('mensaje_error',"Ingreso un chassis no valido");
            }
        }

        return view('reportes.seguimiento.index')
        ->with('resultado',$resultado)
        ->with('request',$request)
        ->with('chassis',$chassis);
    }

    public function show($id)
    {
        $id = str_replace("_", "/", $id);
        $id=ltrim(rtrim($id));

        $datos_unidad = V_stock_todo::where('CHASIS','LIKE', '%'.$id.'%')->first();

        $movimientos = DB::table('gtauto.dbo.VIS_REPORTE_SA_STOCKOM_HISTORIAL_UBICACION')
        ->select('Ubicacion_Ant','ubicacion_Act','SYSTIME')        
        ->where('estado','ACTUALIZADO')
        ->where('chassis',$id)
        ->orderBy('SYSTIME' ) 
        ->get();

        $produccion = DB::select( DB::raw("select * from  gtauto.dbo.ct_vehiculos where chassis LIKE '%".$id."%'"));

        $reserva =Reserva::where('CHASIS','LIKE', '%'.$id.'%')->first();
        if(sizeof($reserva)>0)
        {
            $nro_cot=rtrim($reserva->NRO_COTIZACION);
            $cotizacion = Cotizacion::where('CHASIS','LIKE', '%'.$id.'%')
                        ->where('NRO_COTIZACION',$nro_cot)
                        ->first();
        }
        else
        {
            $cotizacion = Cotizacion::where('CHASIS','LIKE', '%'.$id.'%')
                        ->orderBy('FECHA_COTIZACION','DESC')
                        ->first();
        }

        $contrato =DB::select( DB::raw("select S.*,V.nom_vendedor from gtauto.dbo.cpf_vtasokm S JOIN gtauto.dbo.ct_vendedores AS V ON V.cod_vendedor = S.cod_vendedor where chassis = '".$id."'"));

        $adenda =DB::select( DB::raw("select  top 1 * from gtauto.dbo.cpf_adendaokm where chassis_aux1 LIKE '%".$id."%' order by fecha_mod DESC"));
        
        if ( sizeof($adenda)>0)
        {
            $nro_ventas=rtrim($adenda[0]->nro_ventas);

            $contrato_an =DB::select( DB::raw("
                select S.*,V.nom_vendedor 
                from gtauto.dbo.cpf_vtasokm S JOIN gtauto.dbo.ct_vendedores AS V ON V.cod_vendedor = S.cod_vendedor 
                AND nro_docum = '".$nro_ventas."' order by fecha_mod desc "));
        }
        else{ 
            $contrato_an = [];
        }

        $factura =Factura::where('CHASIS', $id)->first();

        $entrega =DB::select( DB::raw("select  * from gtauto.dbo.cpf_notaentrega where chassis LIKE '%".$id."%'"));

        $envio = DB::select( DB::raw("
        select a.*,u.*,o.*,b.*
        from  gtauto.dbo.cpp_stock0km as a 
        left join gtauto.dbo.ct_ubicaciones as u ON a.cod_depdestino = u.cod_ubicacion 
        left join gtauto.dbo.ct_origen as o ON a.cod_deporigen = o.cod_origen
        left join gtauto.dbo.ct_buques as b ON a.cod_buque = b.cod_buque
        where chassis LIKE '%".$id."%'
         "));

        $cod_b = DB::select( DB::raw("
        select TOP 1 m.* , u.*,ub.*
        FROM  CODIGO_BARRAS.dbo.MOVIMIENTOS as m
        join CODIGO_BARRAS.dbo.USUARIOS as u ON u.USUARIO = m.USUARIO_REGISTRO
        join CODIGO_BARRAS.dbo.UBICACIONES as ub ON ub.COD_UBICACION = m.COD_SUC_ORIGEN
        where m.DATO_SCANEO LIKE '%".$id."%'
        AND m.MOVIMIENTO = '5'
        ORDER BY m.FECHA_HORA_SCANEO DESC
         "));

        if ( sizeof($cotizacion)>0 && sizeof($reserva)>0)
        {
            $datetime1 = new DateTime($cotizacion->FECHA_COTIZACION);
            $datetime2 = new DateTime($reserva->FECHA_RESERVA);
            $interval = $datetime1->diff($datetime2);
            $dias_reserva = $interval->format('%R%a dias');
        }else{ $dias_reserva = 'Sin dato';}

        if ( sizeof($reserva)>0 && sizeof($contrato)>0)
        {
            $datetime1 = new DateTime($reserva->FECHA_RESERVA);
            $datetime2 = new DateTime(date('Y-m-d',strtotime($contrato[0]->fecha_mod)));
            $interval = $datetime1->diff($datetime2);
            $dias_contrato = $interval->format('%R%a dias');
        }else{ $dias_contrato = 'Sin dato';}

        // if ( sizeof($contrato)==0 && sizeof($reserva)>0 && sizeof($contrato_an)>0)
        // {
        //     $datetime1 = new DateTime($reserva->FECHA_RESERVA);
        //     $datetime2 = new DateTime(date('Y-m-d',strtotime($contrato_an[0]->fecha_mod)));
        //     $interval = $datetime1->diff($datetime2);
        //     $dias_contrato_an = $interval->format('%R%a dias');
        // }else{ $dias_contrato_an = 'Sin dato';}
       

        if ( sizeof($contrato)==0 && sizeof($contrato_an)>0 && sizeof($adenda)>0 )
        {
            $datetime1 = new DateTime($reserva->FECHA_RESERVA);
            $datetime2 = new DateTime(date('Y-m-d',strtotime($adenda[0]->fecha_mod)));
            $interval = $datetime1->diff($datetime2);
            $dias_adenda = $interval->format('%R%a dias');
        }else{ $dias_adenda = 'Sin dato';}
        
        if ( sizeof($contrato)==0 && sizeof($adenda)>0 && sizeof($factura)>0 )
        {
            $datetime1 = new DateTime(date('Y-m-d',strtotime($adenda[0]->fecha_mod)));
            $datetime2 = new DateTime($factura->FECHA_FACTURA);
            $interval = $datetime1->diff($datetime2);
            $dias_factura = $interval->format('%R%a dias');
        }
        else
        { 
            if ( sizeof($contrato)>0 && sizeof($factura)>0 )
            {
                $datetime1 = new DateTime(date('Y-m-d',strtotime($contrato[0]->fecha_mod)));
                $datetime2 = new DateTime($factura->FECHA_FACTURA);
                $interval = $datetime1->diff($datetime2);
                $dias_factura = $interval->format('%R%a dias');
            }else{ $dias_factura = 'Sin dato';}
        }
        if ( sizeof($entrega)>0 && sizeof($factura)>0 )
        {
            $datetime1 = new DateTime($factura->FECHA_FACTURA);
            $datetime2 = new DateTime(date('Y-m-d',strtotime($entrega[0]->fecha_mod)));
            $interval = $datetime1->diff($datetime2);
            $dias_entrega = $interval->format('%R%a dias');
        }else{ $dias_entrega = 'Sin dato';}

        if ( sizeof($entrega)>0 && sizeof($cod_b)>0 )
        {
            $datetime1 = new DateTime(date('Y-m-d',strtotime($entrega[0]->fecha_mod)));
            $datetime2 = new DateTime(date('Y-m-d',strtotime($cod_b[0]->FECHA_HORA_SCANEO)));
            $interval = $datetime1->diff($datetime2);
            $dias_cod_b = $interval->format('%R%a dias');
        }else{ $dias_cod_b = 'Sin dato';}

        $dias_total = $dias_reserva+$dias_contrato+$dias_adenda+$dias_factura+$dias_entrega +$dias_cod_b;
        if($dias_total == 0){$dias_total++;}

        return view('reportes.seguimiento.detalle')
        ->with('id',$id)
        ->with('datos_unidad',$datos_unidad)
        ->with('cotizacion',$cotizacion)
        ->with('reserva',$reserva)
        ->with('contrato',$contrato)
        ->with('factura',$factura)
        ->with('entrega',$entrega)
        ->with('produccion',$produccion)
        ->with('envio',$envio)
        ->with('movimientos',$movimientos)
        ->with('adenda',$adenda)
        ->with('contrato_an',$contrato_an)
        ->with('dias_reserva',$dias_reserva)
        ->with('dias_contrato',$dias_contrato)
        // ->with('dias_contrato_an',$dias_contrato_an)
        ->with('dias_adenda',$dias_adenda)
        ->with('dias_factura',$dias_factura)
        ->with('dias_entrega',$dias_entrega)
        ->with('dias_total',$dias_total)
        ->with('dias_cod_b',$dias_cod_b)
        ->with('cod_b',$cod_b);
        
    }
}
