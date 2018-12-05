@extends('layouts.main')

@section('content')
<style type="text/css">
.mi_lista{border-bottom:1px solid #c0c0c0;    padding:1px;}
.opaco{color: #b5bec8;}
</style>

<div class="right_col" role="main">
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3> Analisis comercial </h3>
    </div>
  </div>
  <div class="clearfix"></div>
    <div class="x_panel">
      <div class="x_title">
        <h2>Lista de precios TOYOTA</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="table-responsive">
          <table class="table table-striped table-hover table table-bordered projects" id="datatable1">
            <thead>
              <tr>
                <th>Master/Modelo/Año</th>
                <th style="width: 1%">Sin seguro (US)</th>
                <th style="width: 1%">Con seguro (US)</th>
                <th style="width: 1%">0% interes (US)</th>
                <th style="width: 1%">Credito directo (US)</th>
                <th style="width: 1%">Precio Cif (US)</th>
                <th style="width: 1%">Sin seguro (BS)</th>
                <th style="width: 1%">Con seguro (BS)</th>
                <th style="width: 1%">0% interes (BS)</th>
                <th style="width: 1%">Credito directo (BS)</th>
                <th style="width: 1%">Precio Cif (BS)</th>
              </tr>
            </thead>
            <tbody>
              @foreach($precios as $det)
              <tr>
                <td>
                  <a data-toggle="tooltip" data-original-title="Master"><strong>{{$det->MASTER}}</strong></a><br/>
                  <small><strong>Cod master :</strong>{{$det->CODIGO_MASTER}}</small><br/>
                  <a data-toggle="tooltip" data-original-title="Modelo">{{$det->MODELO}}</a><br/>
                  <small><strong>Cod modelo :</strong>{{$det->CODIGO_MODELO}}</small><br/>
                  <strong><a data-toggle="tooltip" data-original-title="Año">{{$det->ANIO}}</a></strong><br/>
                  <div class="btn-group pull-right" >
                    <button data-toggle="dropdown" class="btn btn-round dropdown-toggle btn-xs" type="button"> Stock
                      <span class="badge badge-success">{{$det->TOTAL}}</span>
                    </button>
                    <ul class="dropdown-menu" style=" padding: 15px;">
                      <li class="mi_lista">SC_ESPECIAL <b class="pull-right">{{$det->SC_ESPECIAL}}</b></li>
                      <li class="mi_lista">DISPONIBLE <b class="pull-right">{{$det->DISPONIBLE}}</b></li>
                      <li class="mi_lista">RESERVADO <b class="pull-right">{{$det->RESERVADO}}</b></li>
                      <li class="mi_lista">FACTURADO <b class="pull-right">{{$det->FACTURADO}}</b></li>
                      <li class="mi_lista">INMOVILIZADO <b class="pull-right">{{$det->INMOVILIZADO}}</b></li>
                    </ul>
                  </div>
                </td>
                <td align="right">
                  @if($det->sin_seguro_us=='si')
                    <strong>{{number_format($det->Precio_SIN_SEGURO_US, 2)}}</strong>
                  @else
                    <del class="opaco">{{number_format($det->Precio_SIN_SEGURO_US, 2)}}</del> 
                  @endif
                </td>
                <td align="right">
                  @if($det->con_seguro_us=='si')
                    <strong>{{number_format($det->Precio_CON_SEGURO_US, 2)}}</strong>
                  @else
                    <del class="opaco">{{number_format($det->Precio_CON_SEGURO_US, 2)}}</del> 
                  @endif
                </td>
                <td align="right">
                  @if($det->cero_interes_us=='si')
                    <strong>{{number_format($det->Precio_0_INTERES_US, 2)}}</strong>
                  @else
                    <del class="opaco">{{number_format($det->Precio_0_INTERES_US, 2)}}</del> 
                  @endif
                </td>
                <td align="right">
                  @if($det->credito_directo_us=='si')
                    <strong>{{number_format($det->Precio_CREDITO_DIRECTO_US, 2)}}</strong>
                  @else
                    <del class="opaco">{{number_format($det->Precio_CREDITO_DIRECTO_US, 2)}}</del> 
                  @endif
                </td>
                <td align="right">
                  @if($det->zona_franca_us=='si')
                    <strong>{{number_format($det->Precio_ZONA_FRANCA_US, 2)}}</strong>
                  @else
                    <del class="opaco">{{number_format($det->Precio_ZONA_FRANCA_US, 2)}}</del> 
                  @endif
                </td>
                <td align="right">
                  @if($det->sin_seguro_bs=='si')
                    <strong>{{number_format($det->Precio_SIN_SEGURO_BS, 2)}}</strong>
                  @else
                    <del class="opaco">{{number_format($det->Precio_SIN_SEGURO_BS, 2)}}</del> 
                  @endif
                </td>
                <td align="right">
                  @if($det->con_seguro_bs=='si')
                    <strong>{{number_format($det->Precio_CON_SEGURO_BS, 2)}}</strong>
                  @else
                    <del class="opaco">{{number_format($det->Precio_CON_SEGURO_BS, 2)}}</del> 
                  @endif
                </td>
                <td align="right">
                  @if($det->cero_interes_bs=='si')
                    <strong>{{number_format($det->Precio_0_INTERES_BS, 2)}}</strong>
                  @else
                    <del class="opaco">{{number_format($det->Precio_0_INTERES_BS, 2)}}</del> 
                  @endif
                </td>
                <td align="right">
                  @if($det->credito_directo_bs=='si')
                    <strong>{{number_format($det->Precio_CREDITO_DIRECTO_BS, 2)}}</strong>
                  @else
                    <del class="opaco">{{number_format($det->Precio_CREDITO_DIRECTO_BS, 2)}}</del> 
                  @endif
                </td>
                <td align="right">
                  @if($det->zona_franca_bs=='si')
                    <strong>{{number_format($det->Precio_ZONA_FRANCA_BS, 2)}}</strong>
                  @else
                    <del class="opaco">{{number_format($det->Precio_ZONA_FRANCA_BS, 2)}}</del> 
                  @endif
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>
</div>

  @endsection
  @section('scripts')
  <script>
    $('#datatable1').DataTable( { "language": { "sSearch": "Buscar:"},
        "bLengthChange" : true,       
        "dom": "fti",
        "lengthMenu": [[-1], ["TODO"]],
        "pageResize": true
    } );
  </script>
  @endsection


