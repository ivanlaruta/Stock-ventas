<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cotizacion;
use Carbon\Carbon;
use DB;

class CotizacionesController extends Controller
{
    public function index()
    {    
        dd('aqui ya no hay nada :(');
    }

    public function dashboard($v_aux,$title,$f_ini, $f_fin ,$mes,$regional,$marca,$sucursal,$modelo)
    {
        if($regional == '0'){$regional='%';}else{$regional=ltrim(rtrim($regional));}
        if($marca == '0'){$marca='%';}else{$marca=ltrim(rtrim($marca));}
        if($sucursal == '0'){$sucursal='%';}else{$sucursal=ltrim(rtrim($sucursal));}
        if($modelo == '0'){$modelo='%';}else{$modelo=ltrim(rtrim($modelo));}
        //if($master == '0'){$master='%';}else{$master=ltrim(rtrim($master));}
        //if($chassis == '0'){$chassis='%';}else{$chassis=ltrim(rtrim($chassis));}
        //if($vendedor == '0'){$vendedor='%';}else{$vendedor=ltrim(rtrim($vendedor));}
        //if($nro_cotizacion == '0'){$nro_cotizacion='%';}else{$nro_cotizacion=ltrim(rtrim($nro_cotizacion));}

        $dt = Carbon::now('America/La_Paz');  //fecha actual
        $hoy = Carbon::now('America/La_Paz')->toDateString(); // hoy
        $ult_sem =  Carbon::now('America/La_Paz')->subWeek()->toDateString();  // menos una semana 
        $ult_15 =  Carbon::now('America/La_Paz')->subDays(15)->toDateString();  // menos 15 dias
        $ult_mes = Carbon::now('America/La_Paz')->subMonth();  // menos un mes
        $ult_mes2 = Carbon::now('America/La_Paz')->subMonth();  // menos un mes
        $ult_anio = Carbon::now('America/La_Paz')->subYear()->toDateString(); // menos un año
        
        $inicio_sem=Carbon::now('America/La_Paz')->startOfWeek()->toDateString();   //inicio de semana
        $inicio_mes=Carbon::now('America/La_Paz')->startOfMonth()->toDateString();  //inicio de mes
        $inicio_año=Carbon::now('America/La_Paz')->startOfYear()->toDateString();    //inicio de año

        $inicio_mes_ant = $ult_mes->startOfMonth()->toDateString();
        $fin_mes_ant = $ult_mes2->endOfMonth()->toDateString();

        $año_actual = Carbon::now('America/La_Paz') -> year; //año actual.

        if ($mes == '0') { $mes = Carbon::now('America/La_Paz') -> month; }

        if ($mes == 1) { $desc_mes='ENERO'; }
        if ($mes == 2) { $desc_mes='FEBRERO'; }
        if ($mes == 3) { $desc_mes='MARZO'; }
        if ($mes == 4) { $desc_mes='ABRIL'; }
        if ($mes == 5) { $desc_mes='MAYO'; }
        if ($mes == 6) { $desc_mes='JUNIO'; }
        if ($mes == 7) { $desc_mes='JULIO'; }
        if ($mes == 8) { $desc_mes='AGOSTO'; }
        if ($mes == 9) { $desc_mes='SEPTIEMBRE'; }
        if ($mes == 10){ $desc_mes=' OCTUBRE'; }
        if ($mes == 11) { $desc_mes='NOVIEMBRE'; }
        if ($mes == 12) { $desc_mes='DICIEMBRE'; }

       
        if($title == 'index')
        {
            $dia =Cotizacion::where('FECHA_COTIZACION',$hoy)
            ->count();

            $esta_sema =Cotizacion::whereBetween('FECHA_COTIZACION',[$inicio_sem,$hoy])
            ->count();

            $ult_15d =Cotizacion::whereBetween('FECHA_COTIZACION',[$ult_15,$hoy])
            ->count();

            $este_mes =Cotizacion::whereBetween('FECHA_COTIZACION',[$inicio_mes,$hoy])
            ->count();

            $total =Cotizacion::whereBetween('FECHA_COTIZACION',[$inicio_año,$hoy])
            ->count();

            $hoy_aux = Carbon::now('America/La_Paz')->format('d/m/Y');// la base exige este formato.. SQL SERVER :(

            $nom_dia =DB::select( DB::raw("select dbo.fn_obtiene_dia('".$hoy_aux."') AS NOM_DIA"));
                      
            $v_aux=$nom_dia[0]->NOM_DIA;

            $por_reg =Cotizacion::select('REGIONAL',DB::raw("COUNT(*) AS COTIZACIONES "))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->groupBy('REGIONAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();   

            $por_mes = Cotizacion::select( DB::raw("month(FECHA_COTIZACION) as MES , COUNT (*) as COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->groupBy(DB::raw('month(FECHA_COTIZACION)'))
            ->orderBy(DB::raw('month(FECHA_COTIZACION)'))
            ->get();

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_marca =Cotizacion::select('MARCA',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->groupBy('MARCA')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('reportes.cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('dia',$dia)
            ->with('esta_sema',$esta_sema)
            ->with('ult_15d',$ult_15d)
            ->with('este_mes',$este_mes)

            ->with('total',$total)

            ->with('hoy',Carbon::now('America/La_Paz'))
            ->with('inicio_sem',Carbon::now('America/La_Paz')->startOfWeek())
            ->with('inicio_mes',Carbon::now('America/La_Paz')->startOfMonth())
            ->with('inicio_año',Carbon::now('America/La_Paz')->startOfYear())
            ->with('ult_15', Carbon::now('America/La_Paz')->subDays(15))  
            ->with('año_actual', $año_actual)  

            ->with('por_reg',$por_reg)
            ->with('por_mes',$por_mes)
            ->with('por_vendedor',$por_vendedor)
            ->with('por_marca',$por_marca)

            ->with('title',$title)
            ;

        }

        if($title == 'diarias' || $title == 'semanal' || $title == 'ult_15_dias' )
        {

            $inicio=date('Y-m-d',strtotime($f_ini));
            $final = date('Y-m-d',strtotime($f_fin));



            $total =Cotizacion::whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->count();

            $por_dia =Cotizacion::select('NOM_DIA','FECHA_COTIZACION',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('NOM_DIA','FECHA_COTIZACION')
            ->orderBy('FECHA_COTIZACION')
            ->get();

            $por_reg =Cotizacion::select('REGIONAL',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('REGIONAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();   

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_marca =Cotizacion::select('MARCA',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('MARCA')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('reportes.cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            ->with('año_actual', $año_actual) 

            ->with('inicio',$inicio)
            ->with('final',$final)

            ->with('total',$total)

            ->with('por_reg',$por_reg)
            ->with('por_vendedor',$por_vendedor)
            ->with('por_marca',$por_marca)
            ->with('por_dia',$por_dia)

            ->with('title',$title)
            ->with('mes',$mes)
            ->with('desc_mes',$desc_mes)
            ;

        }

        if($title == 'mes')
        {

            $fecha = $año_actual.'-'.$mes.'-01';
            $inicio = Carbon::parse($fecha)->toDateString();
            $aux = Carbon::parse($fecha);
            $final = $aux->endOfMonth()->toDateString();

            $total =Cotizacion::whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->count();

            $por_dia =Cotizacion::select('NOM_DIA','FECHA_COTIZACION',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('NOM_DIA','FECHA_COTIZACION')
            ->orderBy('FECHA_COTIZACION')
            ->get();

            $por_reg =Cotizacion::select('REGIONAL',DB::raw("COUNT(*) AS COTIZACIONES "))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('REGIONAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();   

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw("COUNT(*) AS COTIZACIONES "))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_marca =Cotizacion::select('MARCA',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('MARCA')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('reportes.cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            ->with('año_actual', $año_actual) 

            ->with('inicio',$inicio)
            ->with('final',$final)

            ->with('total',$total)

            ->with('por_reg',$por_reg)
            ->with('por_vendedor',$por_vendedor)
            ->with('por_marca',$por_marca)
            ->with('por_dia',$por_dia)

            ->with('title',$title)

            ->with('desc_mes',$desc_mes)
            ->with('mes',$mes)
            ;

        }

        if($title == 'regional')
        {
            $total =Cotizacion:: where ('REGIONAL',$regional)
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->count();

            $por_mes = Cotizacion::select( DB::raw("month(FECHA_COTIZACION) as MES , COUNT (*) as COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->groupBy(DB::raw('month(FECHA_COTIZACION)'))
            ->orderBy(DB::raw('month(FECHA_COTIZACION)'))
            ->get();

            $por_suc =Cotizacion::select('SUCURSAL',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->groupBy('SUCURSAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();   

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_marca =Cotizacion::select('MARCA',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->groupBy('MARCA')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('reportes.cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            ->with('año_actual', $año_actual) 
            
            ->with('total',$total)
            
            ->with('por_suc',$por_suc)
            ->with('por_vendedor',$por_vendedor)
            ->with('por_marca',$por_marca)
            ->with('por_mes',$por_mes)

            ->with('title',$title)

            ->with('regional',$regional)
            ;
        }

        if($title == 'regional_sucursal')
        {
            $total =Cotizacion:: where ('REGIONAL',$regional)->where ('SUCURSAL',$sucursal)
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->count();

            $por_mes = Cotizacion::select( DB::raw("month(FECHA_COTIZACION) as MES , COUNT (*) as COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->where ('SUCURSAL',$sucursal)
            ->groupBy(DB::raw('month(FECHA_COTIZACION)'))
            ->orderBy(DB::raw('month(FECHA_COTIZACION)'))
            ->get();

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->where ('SUCURSAL',$sucursal)
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_marca =Cotizacion::select('MARCA',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->where ('SUCURSAL',$sucursal)
            ->groupBy('MARCA')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('reportes.cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            ->with('año_actual', $año_actual) 
            
            ->with('total',$total)
            
            ->with('por_vendedor',$por_vendedor)
            ->with('por_marca',$por_marca)
            ->with('por_mes',$por_mes)

            ->with('title',$title)

            ->with('regional',$regional)
            ->with('sucursal',$sucursal)
            ;
        }

        if($title == 'regional_marca' || $title == 'marca_regional')
        {
            $total =Cotizacion:: where ('MARCA',$marca)->where ('REGIONAL',$regional)
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->count();

           $por_mes = Cotizacion::select( DB::raw("month(FECHA_COTIZACION) as MES , COUNT (*) as COTIZACIONES"))
            ->where ('REGIONAL',$regional)
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->groupBy(DB::raw('month(FECHA_COTIZACION)'))
            ->orderBy(DB::raw('month(FECHA_COTIZACION)'))
            ->get();

            $por_suc =Cotizacion::select('SUCURSAL',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where ('REGIONAL',$regional)
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->where ('REGIONAL',$regional)
            ->groupBy('SUCURSAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->where ('MARCA',$marca)
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_modelo =Cotizacion::select('MODELO',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('REGIONAL',$regional)
            ->where ('MARCA',$marca)
            ->groupBy('MODELO')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('reportes.cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            ->with('año_actual', $año_actual) 
            
            ->with('total',$total)
            
            ->with('por_vendedor',$por_vendedor)
            ->with('por_modelo',$por_modelo)
            ->with('por_mes',$por_mes)
            ->with('por_suc',$por_suc)

            ->with('title',$title)

            ->with('marca',$marca)
            ->with('regional',$regional)
            ;
        }


        if($title == 'marca')
        {

            $total =Cotizacion:: where ('MARCA',$marca)
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->count();

            $por_mes = Cotizacion::select( DB::raw("month(FECHA_COTIZACION) as MES , COUNT (*) as COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->groupBy(DB::raw('month(FECHA_COTIZACION)'))
            ->orderBy(DB::raw('month(FECHA_COTIZACION)'))
            ->get();

            $por_reg =Cotizacion::select('REGIONAL',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->groupBy('REGIONAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_modelo =Cotizacion::select('MODELO',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->groupBy('MODELO')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('reportes.cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            ->with('año_actual', $año_actual) 
            
            ->with('total',$total)
            
            ->with('por_vendedor',$por_vendedor)
            ->with('por_modelo',$por_modelo)
            ->with('por_mes',$por_mes)
            ->with('por_reg',$por_reg)

            ->with('title',$title)

            ->with('marca',$marca)
            ;
        }



        if($title == 'marca_modelo')
        {

            $total =Cotizacion:: where ('MARCA',$marca)
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MODELO',$modelo)
            ->count();

            $por_mes = Cotizacion::select( DB::raw("month(FECHA_COTIZACION) as MES , COUNT (*) as COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->where ('MODELO',$modelo)
            ->groupBy(DB::raw('month(FECHA_COTIZACION)'))
            ->orderBy(DB::raw('month(FECHA_COTIZACION)'))
            ->get();

            $por_reg =Cotizacion::select('REGIONAL',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->where ('MODELO',$modelo)
            ->groupBy('REGIONAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->where ('MODELO',$modelo)
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

            $por_master =Cotizacion::select('MASTER',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where('FECHA_COTIZACION','>',$inicio_año)
            ->where ('MARCA',$marca)
            ->where ('MODELO',$modelo)
            ->groupBy('MASTER')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('reportes.cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            ->with('año_actual', $año_actual) 
            
            ->with('total',$total)
            
            ->with('por_vendedor',$por_vendedor)
            ->with('por_master',$por_master)
            ->with('por_mes',$por_mes)
            ->with('por_reg',$por_reg)

            ->with('title',$title)

            ->with('marca',$marca)
            ->with('modelo',$modelo)
            ;
        }


        if($title == 'mes_marca' || $title == 'marca_mes')
        {

            $fecha = $año_actual.'-'.$mes.'-01';
            $inicio = Carbon::parse($fecha)->toDateString();
            $aux = Carbon::parse($fecha);
            $final = $aux->endOfMonth()->toDateString();

            $total =Cotizacion:: where ('MARCA',$marca)
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->count();

            $por_dia =Cotizacion::select('NOM_DIA','FECHA_COTIZACION',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where ('MARCA',$marca)
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('NOM_DIA','FECHA_COTIZACION')
            ->orderBy('FECHA_COTIZACION')
            ->get();

 
            $por_reg =Cotizacion::select('REGIONAL',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->where ('MARCA',$marca)
            ->groupBy('REGIONAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->where ('MARCA',$marca)
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();


            $por_modelo =Cotizacion::select('MODELO',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->where ('MARCA',$marca)
            ->groupBy('MODELO')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 

            return view('reportes.cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            ->with('año_actual', $año_actual) 
            
            ->with('total',$total)
            
            ->with('por_vendedor',$por_vendedor)
            ->with('por_modelo',$por_modelo)
            ->with('por_dia',$por_dia)
            ->with('por_reg',$por_reg)

            ->with('title',$title)

            ->with('marca',$marca)
            ->with('mes',$mes)
            ->with('desc_mes',$desc_mes)
            ->with('inicio',$inicio)
            ->with('final',$final)
            ;
        }


        if($title == 'mes_regional' || $title == 'regional_mes')
        {  
            $fecha = $año_actual.'-'.$mes.'-01';
            $inicio = Carbon::parse($fecha)->toDateString();
            $aux = Carbon::parse($fecha);
            $final = $aux->endOfMonth()->toDateString();

            $total =Cotizacion:: where ('REGIONAL',$regional)
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->count();

            $por_dia =Cotizacion::select('NOM_DIA','FECHA_COTIZACION',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where ('REGIONAL',$regional)
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('NOM_DIA','FECHA_COTIZACION')
            ->orderBy('FECHA_COTIZACION')
            ->get();

            $por_suc =Cotizacion::select('SUCURSAL',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where ('REGIONAL',$regional)
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('SUCURSAL')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();   

           $por_vendedor =Cotizacion::select('REG_ABRE','VENDEDOR',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where ('REGIONAL',$regional)
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('REG_ABRE','VENDEDOR')
            ->orderBy('COTIZACIONES', 'desc')
            ->get();

           $por_marca =Cotizacion::select('MARCA',DB::raw("COUNT(*) AS COTIZACIONES"))
            ->where ('REGIONAL',$regional)
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->groupBy('MARCA')
            ->orderBy('COTIZACIONES', 'desc')
            ->get(); 


            return view('reportes.cotizaciones.index') 
            ->with('v_aux',$v_aux)

            ->with('hoy',Carbon::now('America/La_Paz'))
            
            ->with('año_actual', $año_actual) 
            ->with('total',$total)
            
            ->with('por_suc',$por_suc)
            ->with('por_vendedor',$por_vendedor)
            ->with('por_marca',$por_marca)
            ->with('por_dia',$por_dia)

            ->with('title',$title)

            ->with('regional',$regional)
            ->with('mes',$mes)
            ->with('desc_mes',$desc_mes)
            ->with('inicio',$inicio)
            ->with('final',$final)
            ;
        } 
    }


    public function lista_detalle($v_aux,$title,$f_ini,$f_fin,$mes,$regional,$marca,$sucursal,$modelo,$master,$chassis,$vendedor,$nro_cotizacion,$cliente)
    {
          
        $inicio_sem=Carbon::now('America/La_Paz')->startOfWeek()->toDateString();   //inicio de semana
        $inicio_mes=Carbon::now('America/La_Paz')->startOfMonth()->toDateString();  //inicio de mes
        $ult_15 =  Carbon::now('America/La_Paz')->subDays(15)->toDateString();  // menos 15 dias
        $año_actual = Carbon::now('America/La_Paz') -> year;
        $inicio_año=Carbon::now('America/La_Paz')->startOfYear()->toDateString();
        $hoy = Carbon::now('America/La_Paz')->toDateString(); 

        if ($mes == '0') { $mes_aux = Carbon::now('America/La_Paz') -> month; } else{$mes_aux=$mes;}

        if ($mes_aux == 1) { $desc_mes='ENERO'; }
        if ($mes_aux == 2) { $desc_mes='FEBRERO'; }
        if ($mes_aux == 3) { $desc_mes='MARZO'; }
        if ($mes_aux == 4) { $desc_mes='ABRIL'; }
        if ($mes_aux == 5) { $desc_mes='MAYO'; }
        if ($mes_aux == 6) { $desc_mes='JUNIO'; }
        if ($mes_aux == 7) { $desc_mes='JULIO'; }
        if ($mes_aux == 8) { $desc_mes='AGOSTO'; }
        if ($mes_aux == 9) { $desc_mes='SEPTIEMBRE'; }
        if ($mes_aux == 10){ $desc_mes=' OCTUBRE'; }
        if ($mes_aux == 11) { $desc_mes='NOVIEMBRE'; }
        if ($mes_aux == 12) { $desc_mes='DICIEMBRE'; }

        if($f_ini == '0' &&  $f_fin == '0')
        {
            if ($mes == '0') 
            { 
                $inicio =$inicio_año;
                $final = $hoy;
            }
            else
            {
                $fecha = $año_actual.'-'.$mes.'-01';
                $inicio = Carbon::parse($fecha)->toDateString();
                $aux = Carbon::parse($fecha);
                $final = $aux->endOfMonth()->toDateString();
            }
        }
        else
        {
            $inicio=date('Y-m-d',strtotime($f_ini));
            $final = date('Y-m-d',strtotime($f_fin));
        }

        if($regional == '0'){$regional='%';}
        else{$regional=ltrim(rtrim($regional));}

        if($marca == '0'){$marca='%';}
        else{$marca=ltrim(rtrim($marca));}

        if($sucursal == '0'){$sucursal='%';}
        else{$sucursal=ltrim(rtrim($sucursal));}

        if($modelo == '0'){$modelo='%';}
        else{
            $modelo= str_replace("_", "/", $modelo);
            $modelo=ltrim(rtrim($modelo));}

        if($master == '0'){$master='%';}
        else{
            $master= str_replace("_", "/", $master);
            $master=ltrim(rtrim($master));}

        if($chassis == '0'){$chassis='%';}
        else{$chassis=ltrim(rtrim($chassis));}

        if($vendedor == '0'){$vendedor='%';}
        else{$vendedor=ltrim(rtrim($vendedor));}

        if($nro_cotizacion == '0'){$nro_cotizacion='%';}
        else{$nro_cotizacion=ltrim(rtrim($nro_cotizacion));}

        if($cliente == '0'){$cliente='%';}
        else{$cliente=ltrim(rtrim($cliente));}

        $detalle =Cotizacion::select(DB::raw('ROW_NUMBER() OVER(ORDER BY NRO_COTIZACION DESC) AS ITEM'),'*')
            ->whereBetween('FECHA_COTIZACION',[$inicio,$final])
            ->where('REGIONAL','LIKE','%'.$regional.'%')
            ->where('MARCA','LIKE','%'.$marca.'%')
            ->where('SUCURSAL','LIKE','%'.$sucursal.'%')
            ->where('MODELO','LIKE','%'.$modelo.'%')
            ->where('MASTER','LIKE','%'.$master.'%')
            ->where('CHASIS','LIKE','%'.$chassis.'%')
            ->where('VENDEDOR','LIKE','%'.$vendedor.'%')
            ->where('NRO_COTIZACION','LIKE','%'.$nro_cotizacion.'%')
            ->where('CLIENTE','LIKE','%'.$cliente.'%')
            ->get(); 
         
        return view('reportes.cotizaciones.lista_detalle') 
        ->with('detalle',$detalle)

        ->with('v_aux',$v_aux)
        ->with('title',$title)
        ->with('f_ini',$f_ini)
        ->with('f_fin',$f_fin)
        ->with('mes',$mes)
        ->with('regional',$regional)
        ->with('marca',$marca)
        ->with('sucursal',$sucursal)
        ->with('modelo',$modelo)
        ->with('master',$master)
        ->with('chassis',$chassis)
        ->with('vendedor',$vendedor)
        ->with('nro_cotizacion',$nro_cotizacion)

        ->with('hoy',$hoy)
        ->with('ult_15',$ult_15)
        ->with('inicio_sem',$inicio_sem)
        ->with('año_actual',$año_actual)
        ->with('inicio',$inicio)
        ->with('final',$final)
        
        ->with('desc_mes',$desc_mes)
        ;
    }

    public function busqueda()
    {    
        return view('reportes.cotizaciones.busqueda') ;
    }
    public function buscador(Request $request)
    {    


        $arrayFecha = explode(' - ', $request->fecha);

        $f_ini =  Carbon::parse($arrayFecha[0])->toDateString();
        $f_fin =  Carbon::parse($arrayFecha[1])->toDateString();



        if(is_null($request->nro_cotizacion) || $request->nro_cotizacion == ' ' ){
            $nro_cotizacion = '0';
        }
        else
        {
            $nro_cotizacion = $request->nro_cotizacion ;
        }
        if(is_null($request->regional) || $request->regional == ' ' ){
            $regional = '0';
        }
        else
        {
            $regional = $request->regional ;
        }
        if(is_null($request->sucursal) || $request->sucursal == ' ' ){
            $sucursal = '0';
        }
        else
        {
            $sucursal = $request->sucursal ;
        }
        if(is_null($request->vendedor) || $request->vendedor == ' ' ){
            $vendedor = '0';
        }
        else
        {
            $vendedor = $request->vendedor ;
        }
        if(is_null($request->cliente) || $request->cliente == ' ' ){
            $cliente = '0';
        }
        else
        {
            $cliente = $request->cliente ;
        }
        if(is_null($request->chassis) || $request->chassis == ' ' ){
            $chassis = '0';
        }
        else
        {
            $chassis = $request->chassis ;
        }
        if(is_null($request->master) || $request->master == ' ' ){
            $master = '0';
        }
        else
        {
            $master = $request->master ;
        }
        if(is_null($request->modelo) || $request->modelo == ' ' ){
            $modelo = '0';
        }
        else
        {
            $modelo = $request->modelo ;
        }
        if(is_null($request->marca) || $request->marca == ' ' ){
            $marca = '0';
        }
        else
        {
            $marca = $request->marca ;
        }

        if($nro_cotizacion == '0' && $regional == '0' && $sucursal == '0' && $vendedor == '0' && $cliente == '0' && $chassis == '0' && $master == '0' && $modelo == '0' && $marca == '0' && $request->bandera == '0' )
        {

            return redirect()->route('cotizaciones.busqueda')->with('mensaje_error',"No selecciono ningun parametro de busqueda."); 
        }
        else
        {
            if ($request->bandera == '1')
            {
               return redirect()->route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'busqueda','f_ini'=>$f_ini,'f_fin'=>$f_fin,'mes'=>'0','regional'=>$regional,'marca'=>$marca,'sucursal'=>$sucursal,'modelo'=>$modelo,'master'=>$master,'chassis'=>$chassis,'vendedor'=>$vendedor ,'nro_cotizacion'=>$nro_cotizacion,'cliente'=>$cliente]);
           }
           else
           {
            return redirect()->route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'busqueda','f_ini'=>'0','f_fin'=>'0','mes'=>'0','regional'=>$regional,'marca'=>$marca,'sucursal'=>$sucursal,'modelo'=>$modelo,'master'=>$master,'chassis'=>$chassis,'vendedor'=>$vendedor ,'nro_cotizacion'=>$nro_cotizacion,'cliente'=>$cliente]);
           }
        }

    }
}