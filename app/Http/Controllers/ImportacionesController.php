<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imp_mitsui;
use Carbon\Carbon;
use DB;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;

class ImportacionesController extends Controller
{
    public function mitsui()
    {    
        $facturas = DB::select(  DB::raw("select DISTINCT FACTURA from mitsui "));
        return view('importaciones.reportes.mitsui')
        ->with('facturas',$facturas)
        ;
    }

    public function table_mitsui(Request $request)
    {   
        $facturas = "";
           
        for ($i=0; $i < sizeof($request->facturas); $i++) {
           $facturas = $facturas."'".$request->facturas[$i]."'";
           if($i < (sizeof($request->facturas))-1){
            $facturas = $facturas.",";
           }
        }
        
        $desc_facturas = DB::select(  DB::raw("select DISTINCT FACTURA from mitsui where FACTURA IN (".$facturas.")"));
        $detalle_facturas = DB::select(  DB::raw("select * from mitsui where FACTURA IN (".$facturas.")"));
        // dd($detalle_facturas);
        return view('importaciones.reportes.table_mitsui')
        ->with('facturas',$desc_facturas)
        ->with('detalle_facturas',$detalle_facturas)
        ;
    }

    public function tasa()
    {    
    	$facturas = DB::select(  DB::raw("select DISTINCT orden from tasa "));
        return view('importaciones.reportes.tasa')
        ->with('facturas',$facturas)
        ;
    }

    public function table_tasa(Request $request)
    {   
        $facturas = "";
           
        for ($i=0; $i < sizeof($request->facturas); $i++) {
           $facturas = $facturas."'".$request->facturas[$i]."'";
           if($i < (sizeof($request->facturas))-1){
            $facturas = $facturas.",";
           }
        }
        
        $desc_facturas = DB::select(  DB::raw("select DISTINCT orden from tasa where orden IN (".$facturas.")"));
        // dd($desc_facturas);
    	$detalle_facturas = DB::select(  DB::raw("select * from tasa where orden IN (".$facturas.") order by CHASIS"));
    	// dd($detalle_facturas);
        return view('importaciones.reportes.table_tasa')
        ->with('facturas',$desc_facturas)
        ->with('detalle_facturas',$detalle_facturas)
        ;
    }
}
