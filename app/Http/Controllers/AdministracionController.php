<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Trf_Sucursal;
use App\Trf_Parametrica;
// use App\Trf_Sucursal;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Auth;

class AdministracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_sucursales()
    {
        $detalle =Trf_Sucursal::select(DB::raw('ROW_NUMBER() OVER(ORDER BY id DESC) AS ITEM'),'*')->get(); 
        // dd($detalle);
        return view('administracion.sucursales.index')->with('detalle',$detalle) ;
    }

    public function index_users()
    {
        $detalle =User::all();
        return view('administracion.users.index')->with('detalle',$detalle) ;
    }

    public function index_parametrica()
    {
        $detalle =Trf_Parametrica::all();
        return view('administracion.parametricas.index')->with('detalle',$detalle) ;
    }

     public function index()
    {
        //
    }

    public function modal_users(Request $request)
    {
        if($request->tipo=="nuevo")
        {
            $sucursales=Trf_Sucursal::all();
            $roles=Trf_Parametrica::where('tabla','rol')->orderBy('codigo')->get();
            return view('administracion.users.modal')
              ->with('sucursales',$sucursales) 
              ->with('request',$request) 
              ->with('roles',$roles) ;
        }
        else
        {
            if($request->tipo=="editar")
            {
                $usuario=User::find($request->id_usuario);
                $sucursales=Trf_Sucursal::all();
                $roles=Trf_Parametrica::where('tabla','rol')->orderBy('codigo')->get();
                return view('administracion.users.modal')
                  ->with('sucursales',$sucursales) 
                  ->with('request',$request) 
                  ->with('usuario',$usuario) 
                  ->with('roles',$roles);
            }
        }
    }

    public function add_users(Request $request)
    {
        if($request->tipo=="nuevo")
        {
            // dd($request->all());
            $user = new User($request->all());
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect()->route('administracion.index_users')->with('mensaje',"Creado exitosamente."); 
        }
        else
        {
            if($request->tipo=="editar")
            {
                $user=User::find($request->id_usuario);
                $user->fill($request->all());
                // $user->password = bcrypt($request->password);
                $user->save();
                return redirect()->route('administracion.index_users')->with('mensaje',"Editado exitosamente."); 
            }

        }
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
