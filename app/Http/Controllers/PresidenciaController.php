<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presi_resumen_stock;
use Carbon\Carbon;
use DB;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;

class PresidenciaController extends Controller
{

    public function stock()
    {
        $resumen_stock =Presi_resumen_stock::orderBy('MODELOS','ASC')->orderBy('MASTER','ASC')->get();
        return view('presidencia.stock.stock_index')
        ->with('resumen_stock',$resumen_stock);;    
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
