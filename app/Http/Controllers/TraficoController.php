<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Trf_Encuesta;
use App\Trf_Motivo;
use App\Trf_Categoria;
use App\Trf_Modelo;
use App\Trf_Parametrica;
use App\Trf_Motivo_Categoria;
use App\Trf_Motivo_Encuesta;
use App\Trf_Sucursal_Encuesta;
use App\Trf_Visita_Modelo;
use App\Trf_Sucursal;
use App\Trf_Visita;
use App\Trf_Ejecutivo;
use App\Vendedores;
use App\Trf_Cliente;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Auth;

class TraficoController extends Controller
{
    public function formulario()
    {
        $suc=Auth::user()->sucursal2->nom_sucursal;
        $id_suc=Auth::user()->sucursal2->id;
        $encuesta=Trf_Encuesta::whereIn('id', DB::table('trf_sucursal_encuesta')->where('id_sucursal',$id_suc)->pluck('id_encuesta'))->first();
        if(sizeof($encuesta)>0)
        {
            $id_encuesta=$encuesta->id;
            $motivos =Trf_Motivo_Encuesta::where('id_encuesta',$id_encuesta)->orderBy('id','ASC')->get();
            $clientes = Trf_Cliente::all();
            $edades = Trf_Parametrica::where('tabla','rango_edades')->get();
            $motivo_Categoria=Trf_Motivo_Categoria::all();
            $modelos=Trf_Modelo::all();
            $vendedores=Trf_Ejecutivo::where('id_sucursal',$id_suc)->orderBy('id')->get();
            
            return view('trafico.formulario')
            ->with('encuesta',$encuesta)
            ->with('motivos',$motivos)
            ->with('clientes',$clientes)
            ->with('edades',$edades)
            ->with('motivo_Categoria',$motivo_Categoria)
            ->with('modelos',$modelos)
            ->with('vendedores',$vendedores);
        }
        else 
        {
            return view('trafico.formulario')
            ->with('encuesta',$encuesta)
            ;
        }        
    }

    public function formulario2()
    {
        $suc=Auth::user()->sucursal2->nom_sucursal;
        $id_suc=Auth::user()->sucursal2->id;
        $encuesta=Trf_Encuesta::whereIn('id', DB::table('trf_sucursal_encuesta')->where('id_sucursal',$id_suc)->pluck('id_encuesta'))->first();
        if(sizeof($encuesta)>0)
        {
            $id_encuesta=$encuesta->id;
            $motivos =Trf_Motivo_Encuesta::where('id_encuesta',$id_encuesta)->orderBy('id','ASC')->get();
            $clientes = Trf_Cliente::all();
            $edades = Trf_Parametrica::where('tabla','rango_edades')->get();
            $motivo_Categoria=Trf_Motivo_Categoria::all();
            $modelos=Trf_Modelo::all();
            $vendedores=Trf_Ejecutivo::where('id_sucursal',$id_suc)->orderBy('id')->get();
            
            return view('trafico.formulario2')
            ->with('encuesta',$encuesta)
            ->with('motivos',$motivos)
            ->with('clientes',$clientes)
            ->with('edades',$edades)
            ->with('motivo_Categoria',$motivo_Categoria)
            ->with('modelos',$modelos)
            ->with('vendedores',$vendedores);
        }
        else 
        {
            return view('trafico.formulario')
            ->with('encuesta',$encuesta)
            ;
        }        
    }

    public function ver_encuestas(Request $request)
    {
        $id_e= $request->id_encuesta;

        $encuesta=Trf_Encuesta::find($id_e);
        $motivos=Trf_Motivo_Encuesta::where('id_encuesta',$id_e)->get();
        $sucursales=Trf_Sucursal_Encuesta::where('id_encuesta',$id_e)->get();
        $motivo_Categoria=Trf_Motivo_Categoria::all();
        $modelos=Trf_Modelo::all();

        return view('trafico.administracion.modal_ver_encuestas')
        ->with('encuesta',$encuesta) 
        ->with('motivos',$motivos) 
        ->with('sucursales',$sucursales) 
        ->with('motivo_Categoria',$motivo_Categoria) 
        ->with('modelos',$modelos) 
        ;        
    }

    public function modal_add_encuestas()
    {
        // dd(Auth::user()->sucursal2->nom_sucursal);
        $sucursales =Trf_Sucursal::whereNotIn('id', DB::table('trf_sucursal_encuesta')->pluck('id_sucursal'))
        ->orderBy('id','ASC')
        ->get();

        $motivos =Trf_Motivo::orderBy('id','ASC')->get();

        return view('trafico.administracion.modal_add_encuestas')
        ->with('sucursales',$sucursales)
        ->with('motivos',$motivos) 
        ;
    }

    public function delete_encuesta(Request $request)
    {
        $id_encuesta=$request->id_encuesta;

        $encuesta = Trf_Encuesta::find($id_encuesta);
        $motivos_encuesta =Trf_Motivo_Encuesta::where('id_encuesta',$id_encuesta)->get();
        $sucursales_encuesta =Trf_Sucursal_Encuesta::where('id_encuesta',$id_encuesta)->get();

        foreach ($motivos_encuesta as $det) {
            $mot_enc=Trf_Motivo_Encuesta::find($det->id);
            $mot_enc->delete();
        }
        foreach ($sucursales_encuesta as $det2) {
            $suc_enc=Trf_Sucursal_Encuesta::find($det2->id);
            $suc_enc->delete();
        }

        $encuesta->delete();
        return redirect()->route('trafico.admin_index')->with('mensaje',"Eliminado exitosamente.");
    }

    public function delete_motivo_encuesta(Request $request)
    {
        $id=$request->id;
        $motivos_encuesta=Trf_Motivo_Encuesta::find($id);
        $motivos_encuesta->delete();
        return redirect()->route('trafico.admin_index')->with('mensaje',"Eliminado exitosamente.");
    }
    
    public function delete_suc_encuesta(Request $request)
    {
        $id=$request->id;
        $sucursal_encuesta=Trf_Sucursal_Encuesta::find($id);
        $sucursal_encuesta->delete();
        return redirect()->route('trafico.admin_index')->with('mensaje',"Eliminado exitosamente.");
    }
    
    public function modal_add_motivo_encuesta()
    {
        // dd(Auth::user()->sucursal2->nom_sucursal);
        $encuestas =Trf_Encuesta::orderBy('id','ASC')->get();
        $motivos =Trf_Motivo::orderBy('id','ASC')->get();
        return view('trafico.administracion.modal_add_motivo_encuesta')
        ->with('encuestas',$encuestas) 
        ->with('motivos',$motivos) 
        ;
    }

    public function modal_add_suc_encuesta()
    {
        $encuestas =Trf_Encuesta::orderBy('id','ASC')->get();
        $sucursales =Trf_Sucursal::whereNotIn('id', DB::table('trf_sucursal_encuesta')->pluck('id_sucursal'))
        ->orderBy('id','ASC')
        ->get();
        return view('trafico.administracion.modal_add_suc_encuesta')
        ->with('encuestas',$encuestas) 
        ->with('sucursales',$sucursales) 
        ;
    }

    public function add_encuestas(Request $request)
    {
        
        $nueva_encuesta = new Trf_Encuesta();
        $nueva_encuesta -> descripcion = strtoupper($request->DESCRIPCION);
        $nueva_encuesta -> observaciones = $request->OBSERVACIONES;
        $nueva_encuesta ->save();

        for ($i=0; $i < sizeof($request->motivos_lista); $i++) 
        {
            $nuevo_motivo_encuesta = new Trf_Motivo_Encuesta();
            $nuevo_motivo_encuesta -> id_encuesta = $nueva_encuesta ->id;
            $nuevo_motivo_encuesta -> id_motivo = $request->motivos_lista[$i];
            $nuevo_motivo_encuesta ->save();
        }

        for ($j=0; $j < sizeof($request->sucursales_lista); $j++) 
        {
            $nuevo_sucursal_encuesta = new Trf_Sucursal_Encuesta();
            $nuevo_sucursal_encuesta -> id_encuesta = $nueva_encuesta ->id;
            $nuevo_sucursal_encuesta -> id_sucursal = $request->sucursales_lista[$j];
            $nuevo_sucursal_encuesta ->save();
        }
        
        return redirect()->route('trafico.admin_index')->with('mensaje',"Creado exitosamente."); 
    }
    
    public function add_motivo_encuesta(Request $request)
    {
        $nuevo_motivo_encuesta = new Trf_Motivo_Encuesta();
        $nuevo_motivo_encuesta -> id_encuesta = $request->ENCUESTA;
        $nuevo_motivo_encuesta -> id_motivo = $request->MOTIVO;
        $nuevo_motivo_encuesta -> descripcion = $request->DESCRIPCION;
        $nuevo_motivo_encuesta ->save();

        return redirect()->route('trafico.admin_index')->with('mensaje',"Creado exitosamente."); 
    }
    

    public function add_suc_encuesta(Request $request)
    {
        $nuevo_suc_encuesta = new Trf_Sucursal_Encuesta();
        $nuevo_suc_encuesta -> id_encuesta = $request->ENCUESTA;
        $nuevo_suc_encuesta -> id_sucursal = $request->SUC;
        $nuevo_suc_encuesta -> descripcion = $request->DESCRIPCION;
        $nuevo_suc_encuesta ->save();

        return redirect()->route('trafico.admin_index')->with('mensaje',"Creado exitosamente."); 
    }
    
    public function admin_index()
    {
        // dd(Auth::user()->sucursal2->nom_sucursal);
        $encuestas =Trf_Encuesta::all(); 
        $motivos =Trf_Motivo::all(); 
        $categorias =Trf_Categoria::all(); 
        $modelos =Trf_Modelo::all();
        $parametricas =Trf_Parametrica::all();
        $motivos_categoria =Trf_Motivo_Categoria::all();
        $sucursales_encuesta =Trf_Sucursal_Encuesta::all();
        $motivos_encuesta =Trf_Motivo_Encuesta::all();

// dd($encuestas);
// dd($motivos);
// dd($categorias);
// dd($modelos);
// dd($parametricas);
// dd($motivos_categoria);
// dd($sucursales_encuesta);
// dd($motivos_encuesta);

        return view('trafico.administracion.index')
        ->with('encuestas',$encuestas) 
        ->with('motivos',$motivos) 
        ->with('categorias',$categorias) 
        ->with('parametricas',$parametricas) 
        ->with('modelos',$modelos) 
        ->with('motivos_categoria',$motivos_categoria) 
        ->with('motivos_encuesta',$motivos_encuesta) 
        ->with('sucursales_encuesta',$sucursales_encuesta) 
        ;

    }

    
    public function add_visita(Request $request)
    {
        $hoy = Carbon::now('America/La_Paz')->format('Ymd H:i:s');
//        dd($request->all());

        if($request->tipo_cliente=='Antiguo')
        {
            $nuevo_visita = new Trf_Visita();
            $nuevo_visita -> tipo_cliente = $request->tipo_cliente;
            $nuevo_visita -> id_cliente = $request->id_cliente;
            $nuevo_visita -> id_sucursal = $request->id_sucursal;
            $nuevo_visita -> id_motivo = $request->id_motivo;
            $nuevo_visita -> id_ejecutivo = $request->id_ejecutivo;
            $nuevo_visita -> fecha = $hoy;
            $nuevo_visita -> created_by = $suc=Auth::user()->usuario;
            $nuevo_visita -> updated_by = $suc=Auth::user()->usuario;
            $nuevo_visita -> save();

            if($request->id_motivo=='1' || $request->id_motivo=='2' || $request->id_motivo=='3' || $request->id_motivo=='4')
            {
                for ($i=0; $i < sizeof($request->modelos); $i++) 
                {
                    $nuevo_visita_modelo = new Trf_Visita_Modelo();
                    $nuevo_visita_modelo -> id_visita = $nuevo_visita ->id;
                    $nuevo_visita_modelo -> id_modelo = $request->modelos[$i];
                    if($request->modelos[$i]=='33' || $request->modelos[$i]=='38')
                    {
                        $nuevo_visita_modelo -> descripcion = strtoupper($request->txt_otros_8).strtoupper($request->txt_otros_9);
                    }
                    $nuevo_visita_modelo ->save();
                }
            }
            return redirect()->route('trafico.formulario')->with('mensaje',"Creado exitosamente."); 
        }
        else
        {
            if($request->tipo_cliente=='Nuevo')
            {
                $nuevo_cliente = new Trf_Cliente();
                $nuevo_cliente -> ci = $request->ci;
                $nuevo_cliente -> nombre = strtoupper($request->nombre);
                $nuevo_cliente -> paterno = strtoupper($request->paterno);
                $nuevo_cliente -> materno = strtoupper($request->materno);
                $nuevo_cliente -> genero = $request->genero;
                $nuevo_cliente -> rango_edad = $request->rango_edad;
                $nuevo_cliente -> telefono = $request->telefono;
                $nuevo_cliente -> created_by = $suc=Auth::user()->usuario;
                $nuevo_cliente -> updated_by = $suc=Auth::user()->usuario;
                $nuevo_cliente -> save();

                $nuevo_visita = new Trf_Visita();
                $nuevo_visita -> tipo_cliente = $request->tipo_cliente;
                $nuevo_visita -> id_cliente = $nuevo_cliente->id;
                $nuevo_visita -> id_sucursal = $request->id_sucursal;
                $nuevo_visita -> id_motivo = $request->id_motivo;
                $nuevo_visita -> id_ejecutivo = $request->id_ejecutivo;
                $nuevo_visita -> fecha = $hoy;
                $nuevo_visita -> created_by = $suc=Auth::user()->usuario;
                $nuevo_visita -> updated_by = $suc=Auth::user()->usuario;
                $nuevo_visita -> save();

                if($request->id_motivo=='1' || $request->id_motivo=='2' || $request->id_motivo=='3' || $request->id_motivo=='4')
                {
                    for ($i=0; $i < sizeof($request->modelos); $i++) 
                    {
                        $nuevo_visita_modelo = new Trf_Visita_Modelo();
                        $nuevo_visita_modelo -> id_visita = $nuevo_visita ->id;
                        $nuevo_visita_modelo -> id_modelo = $request->modelos[$i];
                        if($request->modelos[$i]=='33' || $request->modelos[$i]=='38')
                        {
                            $nuevo_visita_modelo -> descripcion = strtoupper($request->txt_otros_8).strtoupper($request->txt_otros_9);
                        }
                        $nuevo_visita_modelo ->save();
                    }
                }
                return redirect()->route('trafico.formulario')->with('mensaje',"Creado exitosamente."); 
            }
            else
            {
                $new_visita = new Trf_Visita();
                $new_visita -> id_sucursal = $request->id_sucursal;
                $new_visita -> id_motivo = $request->id_motivo;
                $new_visita -> id_ejecutivo = $request->id_ejecutivo;
                $new_visita -> fecha = $hoy;
                $new_visita -> created_by = $suc=Auth::user()->usuario;
                $new_visita -> updated_by = $suc=Auth::user()->usuario;
                $new_visita -> save();

                return redirect()->route('trafico.formulario')->with('mensaje',"Creado exitosamente.");
            }
        }
    }

    public function add_visita2(Request $request)
    {
        $hoy = Carbon::now('America/La_Paz')->format('Ymd H:i:s');
        // dd($request->all());

        if($request->tipo_cliente=='Nuevo' &&  !empty($request->nombre))
            {
                $nuevo_cliente = new Trf_Cliente();
                $nuevo_cliente -> ci = $request->ci;
                $nuevo_cliente -> expedido = $request->exp;
                $nuevo_cliente -> nombre = strtoupper($request->nombre);
                $nuevo_cliente -> paterno = strtoupper($request->paterno);
                $nuevo_cliente -> materno = strtoupper($request->materno);
                $nuevo_cliente -> genero = $request->gen;
                $nuevo_cliente -> rango_edad = $request->edad;
                $nuevo_cliente -> telefono = $request->telefono;
                $nuevo_cliente -> created_by = $suc=Auth::user()->usuario;
                $nuevo_cliente -> updated_by = $suc=Auth::user()->usuario;
                $nuevo_cliente -> save();
            }
        
            $nuevo_visita = new Trf_Visita();
            $nuevo_visita -> tipo_cliente = $request->tipo_cliente;
            if($request->tipo_cliente=='Nuevo' &&  !empty($request->nombre))
            {
                $nuevo_visita -> id_cliente = $nuevo_cliente->id;
            }
            else
            {
                if($request->tipo_cliente=='Antiguo')
                {
                    $nuevo_visita -> id_cliente = $request->clientes_ant;
                }
            }
            $nuevo_visita -> id_sucursal = $request->id_sucursal;
            $nuevo_visita -> id_motivo = $request->motivo;
            $nuevo_visita -> id_ejecutivo = $request->id_ejecutivo;
            $nuevo_visita -> fecha = $hoy;
            $nuevo_visita -> created_by = $suc=Auth::user()->usuario;
            $nuevo_visita -> updated_by = $suc=Auth::user()->usuario;
            $nuevo_visita -> save();


            if($request->motivo=='1' || $request->motivo=='2' || $request->motivo=='3' || $request->motivo=='4')
            {
                for ($i=0; $i < sizeof($request->modelos); $i++) 
                {
                    $nuevo_visita_modelo = new Trf_Visita_Modelo();
                    $nuevo_visita_modelo -> id_visita = $nuevo_visita ->id;
                    $nuevo_visita_modelo -> id_modelo = $request->modelos[$i];
                    if($request->modelos[$i]=='33' || $request->modelos[$i]=='38')
                    {
                        $nuevo_visita_modelo -> descripcion = strtoupper($request->txt_otros_8).strtoupper($request->txt_otros_9);
                    }
                    $nuevo_visita_modelo ->save();
                }
            }

            return redirect()->route('trafico.formulario2')->with('mensaje',"Creado exitosamente."); 
        
        
        
    }

    public function lista_visitas()
    {
        $visitas = Trf_Visita::all();    // dd($visitas);
        return view('trafico.lista_visitas')
        ->with('visitas',$visitas);
    }

    public function detalle_visita(Request $request)
    {
        $detalle_visita = Trf_Visita_Modelo::where('id_visita',$request->id_visita)->get();
        $id_vis=$request->id_visita;
        return view('trafico.modal_detalle_visita')
        ->with('detalle_visita',$detalle_visita)
        ->with('id_vis',$id_vis);
    }
        // $consolidado =DB::select( DB::raw("
        // SELECT vi.id_sucursal,ub.nom_sucursal,count(vi.id) as totales,
        // (select count(ve.id) from trf_visitas ve where ve.id_motivo='1' and ve.id_sucursal=vi.id_sucursal) as vehiculos,
        // (select count(ya.id) from trf_visitas ya where ya.id_motivo='2' and ya.id_sucursal=vi.id_sucursal) as yamaha,
        // (select count(mq.id) from trf_visitas mq where (mq.id_motivo='7' or mq.id_motivo='8' or mq.id_motivo='10') and mq.id_sucursal=vi.id_sucursal) as maquinaria,
        // (select count(tr.id) from trf_visitas tr where tr.id_motivo='3' and tr.id_sucursal=vi.id_sucursal) as tramites,
        // (select count(re.id) from trf_visitas re where (re.id_motivo='4' or re.id_motivo='9' ) and re.id_sucursal=vi.id_sucursal) as repuestos,
        // (select count(li.id) from trf_visitas li where li.id_motivo='6' and li.id_sucursal=vi.id_sucursal) as licitaciones,
        // (select count(se.id) from trf_visitas se where se.id_motivo='5' and se.id_sucursal=vi.id_sucursal) as servicios
        // FROM trf_visitas vi, v_ubicaciones ub
        // where ub.id=vi.id_sucursal
        // GROUP BY vi.id_sucursal,ub.
        //  "));nom_sucursal

    public function reporte(Request $request)
    {
        // if(is_null($request->mes)){$mes = descricpion_mes(Carbon::now('America/La_Paz') -> month);}
        // else {$mes=$request->mes;}

        // if(is_null($request->f_ini) && is_null($request->f_fin)) {
        //     $fecha_inicio=fecha_inicio($mes);
        //     $fecha_final=fecha_inicio($mes);}
        // else {
        //     $fecha_inicio = $request->f_ini;
        //     $fecha_final = $request->f_fin;}


        $mes = Carbon::now('America/La_Paz') -> month; 
        $fecha_inicio=Carbon::now('America/La_Paz')->startOfMonth()->format('d/m/Y H:m:s');
        $fecha_final = Carbon::now('America/La_Paz')->format('d/m/Y H:m:s');
        $desc_mes = 'NOVIEMBRE';


        if(is_null($request->pantalla))
        {
            $total_visitas=Trf_Visita::count();
            $total_nuevos=Trf_Visita::where('tipo_cliente','Nuevo')->count();
            $total_antiguo=Trf_Visita::where('tipo_cliente','Antiguo')->count();
            $total_otros=Trf_Visita::where('tipo_cliente',null)->count();
            $total_modelos=Trf_Visita_Modelo::count();
            $consolidado =DB::select( DB::raw("
            select xx.regional,SUM(xx.totales) as totales ,SUM(xx.vehiculos) as vehiculos,SUM(xx.yamaha) as yamaha,SUM(xx.maquinaria) as maquinaria,SUM(xx.tramites) as tramites,SUM(xx.repuestos) as repuestos,SUM(xx.licitaciones) as licitaciones,SUM(xx.servicios) as servicios
            from(
            SELECT vi.id_sucursal,ub.nom_sucursal,ub.regional,count(vi.id) as totales,
            (select count(ve.id) from trf_visitas ve where ve.id_motivo='1' and ve.id_sucursal=vi.id_sucursal) as vehiculos,
            (select count(ya.id) from trf_visitas ya where ya.id_motivo='2' and ya.id_sucursal=vi.id_sucursal) as yamaha,
            (select count(mq.id) from trf_visitas mq where (mq.id_motivo='7' or mq.id_motivo='8' or mq.id_motivo='10') and mq.id_sucursal=vi.id_sucursal) as maquinaria,
            (select count(tr.id) from trf_visitas tr where tr.id_motivo='3' and tr.id_sucursal=vi.id_sucursal) as tramites,
            (select count(re.id) from trf_visitas re where (re.id_motivo='4' or re.id_motivo='9' ) and re.id_sucursal=vi.id_sucursal) as repuestos,
            (select count(li.id) from trf_visitas li where li.id_motivo='6' and li.id_sucursal=vi.id_sucursal) as licitaciones,
            (select count(se.id) from trf_visitas se where se.id_motivo='5' and se.id_sucursal=vi.id_sucursal) as servicios
            FROM trf_visitas vi, v_ubicaciones ub
            where ub.id=vi.id_sucursal
            AND vi.fecha BETWEEN '".$fecha_inicio."' and '".$fecha_final."'
            GROUP BY vi.id_sucursal,ub.nom_sucursal,ub.regional) as xx GROUP BY xx.regional
            "));
            return view('trafico.reportes.index')
            ->with('total_visitas',$total_visitas)
            ->with('total_nuevos',$total_nuevos)
            ->with('total_antiguo',$total_antiguo)
            ->with('total_otros',$total_otros)
            ->with('total_modelos',$total_modelos)
            ->with('consolidado',$consolidado)
            ->with('request',$request)
            ->with('desc_mes',$desc_mes)
            ;
        }
        else
        {
            if($request->pantalla=='detalle_por_regional')
            {

            }

        }
    }

    public function reporte2(Request $request)
    {
        // if(is_null($request->mes)){$mes = descricpion_mes(Carbon::now('America/La_Paz') -> month);}
        // else {$mes=$request->mes;}

        // if(is_null($request->f_ini) && is_null($request->f_fin)) {
        //     $fecha_inicio=fecha_inicio($mes);
        //     $fecha_final=fecha_inicio($mes);}
        // else {
        //     $fecha_inicio = $request->f_ini;
        //     $fecha_final = $request->f_fin;}

        $mes = Carbon::now('America/La_Paz') -> month; 
        $fecha_inicio=Carbon::now('America/La_Paz')->startOfMonth()->format('d/m/Y H:m:s');
        $fecha_final = Carbon::now('America/La_Paz')->format('d/m/Y H:m:s');
        $desc_mes = 'NOVIEMBRE';

        if(is_null($request->pantalla))
        {
            $total_vehiculos=Trf_Visita::where('id_motivo','1')->count();
            $total_motos=Trf_Visita::where('id_motivo','2')->count();
            $total_tramites=Trf_Visita::where('id_motivo','3')->count();
            $total_repuestos=Trf_Visita::where('id_motivo','4')->count();
            $total_servicios=Trf_Visita::where('id_motivo','5')->count();
            $total_licitaciones=Trf_Visita::where('id_motivo','6')->count();
            $total_montacargas=Trf_Visita::where('id_motivo','7')->count();
            $total_pesada=Trf_Visita::where('id_motivo','8')->count();
            $total_llantas=Trf_Visita::where('id_motivo','9')->count();
            $total_agricola=Trf_Visita::where('id_motivo','10')->count();


            $total_visitas=Trf_Visita::count();
            $total_nuevos=Trf_Visita::where('tipo_cliente','Nuevo')->count();
            $total_antiguo=Trf_Visita::where('tipo_cliente','Antiguo')->count();
            $total_otros=Trf_Visita::where('tipo_cliente',null)->count();
            
            $toyota =Trf_Visita_Modelo::
            join('trf_modelos','trf_modelos.id','=','trf_visita_modelo.id_modelo')
            ->where('trf_modelos.observaciones','=','TOYOTA')
            ->count();

            $yamaha =Trf_Visita_Modelo::
            join('trf_modelos','trf_modelos.id','=','trf_visita_modelo.id_modelo')
            ->where('trf_modelos.observaciones','=','YAMAHA')
            ->count();

            $lexus =Trf_Visita_Modelo::
            join('trf_modelos','trf_modelos.id','=','trf_visita_modelo.id_modelo')
            ->where('trf_modelos.observaciones','=','LEXUS')
            ->count();
           
            $hino =Trf_Visita_Modelo::
            join('trf_modelos','trf_modelos.id','=','trf_visita_modelo.id_modelo')
            ->where('trf_modelos.observaciones','=','HINO')
            ->count();

            $otros_mod =Trf_Visita_Modelo::
            join('trf_modelos','trf_modelos.id','=','trf_visita_modelo.id_modelo')
            ->where('trf_modelos.observaciones','=','OTROS')
            ->count();
           
                            



            $totales=array(
                'vehiculos' => $total_vehiculos,
                'motos' => $total_motos,
                'tramites' => $total_tramites,
                'repuestos' => $total_repuestos,
                'servicios' => $total_servicios,
                'licitaciones' => $total_licitaciones,
                'montacargas' => $total_montacargas,
                'pesada' => $total_pesada,
                'llantas' => $total_llantas,
                'agricola' => $total_agricola,
                'total' => $total_visitas,
                'nuevos' => $total_nuevos,
                'antiguos' => $total_antiguo,
                'otros' => $total_otros,
                'toyota' => $toyota,
                'yamaha' => $yamaha,
                'lexus' => $lexus,
                'hino' => $hino,
                'otros_mod' => $otros_mod,
                );

            // dd($totales['vehiculos']);           

            $consolidado =DB::select( DB::raw("
            select xx.regional,SUM(xx.totales) as totales , SUM(xx.vehiculos) as vehiculos, SUM(xx.yamaha) as yamaha, SUM(xx.tramites) as tramites, SUM(xx.repuestos) as repuestos, SUM(xx.servicios) as servicios, SUM(xx.licitaciones) as licitaciones, SUM(xx.montacargas) as montacargas, SUM(xx.pesada) as pesada, SUM(xx.llantas) as llantas, SUM(xx.agricola) as agricola
            from(
            SELECT vi.id_sucursal,ub.nom_sucursal,ub.regional,count(vi.id) as totales,
            (select count(ve.id) from trf_visitas ve where ve.id_motivo='1' and ve.id_sucursal=vi.id_sucursal) as vehiculos,
            (select count(ya.id) from trf_visitas ya where ya.id_motivo='2' and ya.id_sucursal=vi.id_sucursal) as yamaha,
            (select count(tr.id) from trf_visitas tr where tr.id_motivo='3' and tr.id_sucursal=vi.id_sucursal) as tramites,
            (select count(re.id) from trf_visitas re where re.id_motivo='4' and re.id_sucursal=vi.id_sucursal) as repuestos,
            (select count(se.id) from trf_visitas se where se.id_motivo='5' and se.id_sucursal=vi.id_sucursal) as servicios,
            (select count(li.id) from trf_visitas li where li.id_motivo='6' and li.id_sucursal=vi.id_sucursal) as licitaciones,
            (select count(mo.id) from trf_visitas mo where mo.id_motivo='7' and mo.id_sucursal=vi.id_sucursal) as montacargas,
            (select count(pe.id) from trf_visitas pe where pe.id_motivo='8' and pe.id_sucursal=vi.id_sucursal) as pesada,
            (select count(ll.id) from trf_visitas ll where ll.id_motivo='9' and ll.id_sucursal=vi.id_sucursal) as llantas,
            (select count(ag.id) from trf_visitas ag where ag.id_motivo='10' and ag.id_sucursal=vi.id_sucursal) as agricola
            FROM trf_visitas vi, v_ubicaciones ub
            where ub.id=vi.id_sucursal
            AND vi.fecha BETWEEN '".$fecha_inicio."' and '".$fecha_final."'
            GROUP BY vi.id_sucursal,ub.nom_sucursal,ub.regional) as xx GROUP BY xx.regional
            "));
            return view('trafico.reportes.index2')
            ->with('totales',$totales)
            ->with('consolidado',$consolidado)
            ->with('request',$request)
            ->with('desc_mes',$desc_mes)
            ;
        }
        else
        {
            if($request->pantalla=='detalle_por_regional')
            {

            }

        }
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

    // public function fecha_inicio($mes)
    // {

    //         if(is_null($request->mes)) { 
    //             $mes = Carbon::now('America/La_Paz') -> month; 
    //             $fecha_inicio=Carbon::now('America/La_Paz')->startOfMonth()->format('d/m/Y H:m:s');
    //             $fecha_final = Carbon::now('America/La_Paz')->format('d/m/Y H:m:s');
    //         } 
    //         else
    //         {   $mes=$request->mes;}

    //         if ($mes == 1) {
    //             $desc_mes='ENERO';
    //             $ =Carbon::now('America/La_Paz')->startOfMonth()->format('d/m/Y');
    //             $fecha_final = Carbon::now('America/La_Paz')->format('d/m/Y');
    //              }
    //         if ($mes == 2) { 
    //             $desc_mes='FEBRERO';
    //             $fecha_inicio=Carbon::now('America/La_Paz')->startOfMonth()->format('d/m/Y');
    //             $fecha_final = Carbon::now('America/La_Paz')->format('d/m/Y');
    //              }
    //         if ($mes == 3) { 
    //             $desc_mes='MARZO';
    //             $fecha_inicio=Carbon::now('America/La_Paz')->startOfMonth()->format('d/m/Y');
    //             $fecha_final = Carbon::now('America/La_Paz')->format('d/m/Y');
    //              }
    //         if ($mes == 4) { 
    //             $desc_mes='ABRIL';
    //             $fecha_inicio=Carbon::now('America/La_Paz')->startOfMonth()->format('d/m/Y');
    //             $fecha_final = Carbon::now('America/La_Paz')->format('d/m/Y');
    //              }
    //         if ($mes == 5) { 
    //             $desc_mes='MAYO';
    //             $fecha_inicio=Carbon::now('America/La_Paz')->startOfMonth()->format('d/m/Y');
    //             $fecha_final = Carbon::now('America/La_Paz')->format('d/m/Y');
    //              }
    //         if ($mes == 6) { 
    //             $desc_mes='JUNIO';
    //             $fecha_inicio=Carbon::now('America/La_Paz')->startOfMonth()->format('d/m/Y');
    //             $fecha_final = Carbon::now('America/La_Paz')->format('d/m/Y');
    //              }
    //         if ($mes == 7) { 
    //             $desc_mes='JULIO';
    //             $fecha_inicio=Carbon::now('America/La_Paz')->startOfMonth()->format('d/m/Y');
    //             $fecha_final = Carbon::now('America/La_Paz')->format('d/m/Y');
    //              }
    //         if ($mes == 8) { 
    //             $desc_mes='AGOSTO';
    //             $fecha_inicio=Carbon::now('America/La_Paz')->startOfMonth()->format('d/m/Y');
    //             $fecha_final = Carbon::now('America/La_Paz')->format('d/m/Y');
    //              }
    //         if ($mes == 9) { 
    //             $desc_mes='SEPTIEMBRE';
    //             $fecha_inicio=Carbon::now('America/La_Paz')->startOfMonth()->format('d/m/Y');
    //             $fecha_final = Carbon::now('America/La_Paz')->format('d/m/Y');
    //              }
    //         if ($mes == 10){ 
    //             $desc_mes=' OCTUBRE';
    //             $fecha_inicio=Carbon::now('America/La_Paz')->startOfMonth()->format('d/m/Y');
    //             $fecha_final = Carbon::now('America/La_Paz')->format('d/m/Y');
    //              }
    //         if ($mes == 11) { 
    //             $desc_mes='NOVIEMBRE';
    //             $fecha_inicio=Carbon::now('America/La_Paz')->startOfMonth()->format('d/m/Y H:m:s');
    //             $fecha_final = Carbon::now('America/La_Paz')->format('d/m/Y H:m:s');
    //              }
    //         if ($mes == 12) { 
    //             $desc_mes='DICIEMBRE';
    //             $fecha_inicio=Carbon::now('America/La_Paz')->startOfMonth()->format('d/m/Y');
    //             $fecha_final = Carbon::now('America/La_Paz')->format('d/m/Y');
    //              }

    // }
}
