@extends('layouts.main')
@section('content')
<style type="text/css">
</style>
<div class="right_col principal" role="main">
  <div class="">
    <div class="row">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>REPORTE TRAFICO / 
              <a href="{{ route('trafico.reporte2').'?mes='.$request->mes}}">{{$desc_mes}}</a>

              @if($request->pantalla=='regional' || $request->pantalla=='sucursal' ) /
                <a href="{{ route('trafico.reporte2').'?pantalla=regional&mes='.$request->mes.'&regional='.$regional}}">
                {{$regional}}
                </a> 
              @endif
              @if($request->pantalla=='sucursal') / 
              {{$sucursal}} 
              @endif

            </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-calendar"></i>  {{$año}} <i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ route('trafico.reporte2').'?mes=1&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">ENERO</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?mes=2&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">FEBRERO</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?mes=3&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">MARZO</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?mes=4&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">ABRIL</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?mes=5&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">MAYO</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?mes=6&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">JUNIO</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?mes=7&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">JULIO</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?mes=8&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">AGOSTO</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?mes=9&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">SEPTIEMBRE</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?mes=10&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">OCTUBRE</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?mes=11&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">NOVIEMBRE</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?mes=12&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">DICIEMBRE</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?mes=13&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">ANUAL</a></li>
                  <li><a data-toggle="modal" href="#myModal">PERSONALIZADO</a></li>
                  {{-- <li><a href="">ANUAL</a></li> --}}
                  {{-- <li><a href="">PERSONALIZADO</a></li> --}}
                </ul>
              </li>
            </ul>

              <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Seleccione una fecha</h4>
          <div class="clearfix"></div>
        </div>
        <div class="modal-body">
          <div class="clearfix"></div>
            <div class="form-group fecha">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" >Fecha</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" style="width: 100%" name="fecha1"  class="form-control fecha1" id="fecha1"/>
              </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary aceptar" mes='13' pantalla='{{$request->pantalla}}' regional='{{$regional}}' sucursal='{{$request->sucursal}}'>Aceptar</button>
        </div>
      </div>
      
    </div>
  </div>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
          
            <div class="col-md-12">
              <div class="row">
                <div class="row tile_count">
                  <div class="col-md-2 col-sm-12 col-xs-12 tile_stats_count pull-right" align="center" style="height: 200px; padding: 50px 0px 0px;">
                    <small class="count_top"> TOTAL TRAFICO</small>
                    <div class="count green" >  {{$totales['total']}}</div>
                    <span class="count_bottom"><small>{{$desc_mes}} 
                    @if($request->pantalla=='regional') | {{$regional}} @endif
                    @if($request->pantalla=='sucursal') | {{$sucursal}} @endif
                    </small></span>
                    {{-- <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span> --}}
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> TOYOTA</small>
                    <div class="count" >  {{$totales['vehiculos_ty']}}</div>
                    {{-- <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span> --}}
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> LEXUS</small>
                    <div class="count" >  {{$totales['vehiculos_lx']}}</div>
                    {{-- <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span> --}}
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> HINO</small>
                    <div class="count" >  {{$totales['vehiculos_hn']}}</div>
                    {{-- <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span> --}}
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> YAMAHA</small>
                    <div class="count" >  {{$totales['motos']}}</div>
                    {{-- <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span> --}}
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> TRAMITES</small>
                    <div class="count" >  {{$totales['tramites']}}</div>
                    {{-- <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span> --}}
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> REPUESTOS</small>
                    <div class="count" >  {{$totales['repuestos']}}</div>
                    {{-- <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span> --}}
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> SERVICIOS</small>
                    <div class="count" >  {{$totales['servicios']}}</div>
                    {{-- <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span> --}}
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> LICITACIONES</small>
                    <div class="count" >  {{$totales['licitaciones']}}</div>
                    {{-- <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span> --}}
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> LLANTAS</small>
                    <div class="count" >  {{$totales['llantas']}}</div>
                    {{-- <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span> --}}
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> M. PESADA</small>
                    <div class="count" >  {{$totales['montacargas']+$totales['pesada']+$totales['agricola']}}</div>
                    {{-- <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span> --}}
                  </div>
                </div>
              </div>
            </div>
            <p>Reporte consolidado de tráfico de clientes - {{$desc_mes}} </p>
            <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action table-bordered" id="datatable1">
                <thead>
                  <tr>
                    <th>
                      @if($request->pantalla=='index') Regional @endif
                      @if($request->pantalla=='regional') Sucursal @endif
                      @if($request->pantalla=='sucursal') Vendedor @endif
                    </th>
                    <th>Toyota </th>
                    <th>Lexus </th>
                    <th>Hino </th>
                    <th>Yamaha </th>
                    <th>Tramites </th>
                    <th>Repuestos</th>
                    <th>Servicios</th>
                    <th>licitaciones</th>
                    <th>Llantas</th>
                    <th>M pesada</th>
                    <th>Total trafico</th>
                    <th>Total cotizaciones</th>
                    <th>Total reservas</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($consolidado as $det)                
                  <tr>
                    <td align="right">
                      @if($request->pantalla=='index')<strong><a href="{{ route('trafico.reporte2').'?pantalla=regional &mes='.$mes.'&regional='.$det->regional}}">{{$det->regional}}</a></strong>@endif
                      @if($request->pantalla=='regional')<strong><a href="{{ route('trafico.reporte2').'?pantalla=sucursal &mes='.$mes.'&sucursal='.$det->id_sucursal}}">{{$det->nom_sucursal}}</a></strong>@endif
                      @if($request->pantalla=='sucursal')
                        <strong>
                        @if(is_null($det->nombre)) 
                          <a href="{{ route('trafico.reporte2').'?pantalla=detalle &mes='.$mes.'&sucursal='.$det->id_sucursal}}">
                            No aginado 
                          </a>
                        @else
                          <a href="{{ route('trafico.reporte2').'?pantalla=detalle &mes='.$mes.'&sucursal='.$det->id_sucursal.'&id_ejecutivo='.$det->id_ejecutivo.'&nom='.$det->nombre.'&pat='.$det->paterno}}"> 
                            {{$det->nombre}} {{$det->paterno}} 
                          </a>
                        @endif
                        </strong>
                      @endif
                    </td>
                    <td align="right">{{$det->vehiculos_t}}</td>
                    <td align="right">{{$det->vehiculos_l}}</td>
                    <td align="right">{{$det->vehiculos_h}}</td>
                    <td align="right">{{$det->yamaha}}</td>
                    <td align="right">{{$det->tramites}}</td>
                    <td align="right">{{$det->repuestos}}</td>
                    <td align="right">{{$det->servicios}}</td>
                    <td align="right">{{$det->licitaciones}}</td>
                    <td align="right">{{$det->llantas}}</td>
                    <td align="right">{{$det->montacargas+$det->pesada+$det->agricola}}</td>
                    <td align="right"><strong>{{$det->totales}}</strong></td>
                    <td align="right"><strong>{{$det->cotizaciones}}</strong></td>
                    <td align="right"><strong>{{$det->reservas}}</strong></td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@section('scripts')
<script type="text/javascript">
  

      $(function() {
      $('input[name="fecha1"]').daterangepicker({
        "maxDate": moment(),
        "locale": {
          "format": "DD/MM/YYYY",
          "separator": " - ",
          "applyLabel": "Aceptar",
          "cancelLabel": "Cancelar",
          "fromLabel": "From",
          "toLabel": "To",
          "customRangeLabel": "Custom",
          "daysOfWeek": [
          "Do",
          "Lu",
          "Ma",
          "Mi",
          "Ju",
          "Vi",
          "Sa"
          ],
          "monthNames": [
          "Enero",
          "Febrero",
          "Marzo",
          "Abril",
          "Mayo",
          "Junio",
          "Julio",
          "Agosto",
          "Septiembre",
          "Octubre",
          "Noviembre",
          "Diciembre"
          ],
          "firstDay": 1
        }
      })
    });

      var btnVer = $(".aceptar");
        btnVer.on("click",function(){
           var data =$('input[name="fecha1"]').val();
              var arr = data.split('-');
              var f_i = arr[0];
              var f_f = arr[1];
              
});



    // $(".aceptar").click(function() {
    //    // window.location = $(this).data("href");
    //   var data =$('input[name="fecha1"]').val();
    //   var arr = data.split('-');
    //   var f_i = arr[0];
    //   var f_f = arr[1];
    
   
  
</script>
@endsection