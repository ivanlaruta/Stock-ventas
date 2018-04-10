@extends('layouts.main')
@section('content')
<style type="text/css">

th.rotate {
  /* Something you can count on */
  height: 140px;
  white-space: nowrap;
}

th.rotate > div {
  transform: 
    /* Magic Numbers */
    /*translate(25px, 51px)*/
    /* 45 is really 360 - 45 */
    rotate(270deg);
  width: 10px;
}
th.rotate > div > span {
  border-bottom: 1px  #ccc;
  padding: 5px 10px;
}

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
              <a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&mes='.$request->mes}}">{{$desc_mes}}</a>

              @if($request->pantalla=='regional' || $request->pantalla=='sucursal' ) /
                <a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&pantalla=regional&mes='.$request->mes.'&regional='.$regional}}">
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
                  <li><a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&mes=1&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">ENERO</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&mes=2&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">FEBRERO</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&mes=3&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">MARZO</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&mes=4&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">ABRIL</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&mes=5&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">MAYO</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&mes=6&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">JUNIO</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&mes=7&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">JULIO</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&mes=8&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">AGOSTO</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&mes=9&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">SEPTIEMBRE</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&mes=10&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">OCTUBRE</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&mes=11&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">NOVIEMBRE</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&mes=12&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">DICIEMBRE</a></li>
                  <li><a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&mes=13&pantalla='.$request->pantalla.'&regional='.$regional.'&sucursal='.$request->sucursal}}">ANUAL</a></li>
                  <li><a data-toggle="modal" href="#myModal">PERSONALIZADO</a></li>
                  {{-- <li><a href="">ANUAL</a></li> --}}
                  {{-- <li><a href="">PERSONALIZADO</a></li> --}}
                </ul>
              </li>
            </ul>
            {{-- <div class = "primary key esnsamble 1" id='asd'>esto no es nada mas que basura</div> --}}
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
        {!! Form::open(array('route' => ['trafico.reporte2'], 'method' => 'get' , 'id'=>'reporte2', 'class'=>'form-horizontal form-label-left')) !!}
        <div class="modal-body">
          <div class="clearfix"></div>
            <div class="form-group fecha">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" >Fecha</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" style="width: 100%" name="fecha1"  class="form-control fecha1" id="fecha1"/>
                <input type="hidden" name="pantalla" value="{{$request->pantalla}}">
                <input type="hidden" name="regional" value="{{$request->regional}}">
                <input type="hidden" name="sucursal" value="{{$request->sucursal}}">
              </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          {{-- <button type="button" class="btn btn-primary aceptar" id="aceptar" mes='14' pantalla='{{$request->pantalla}}' regional='{{$regional}}' sucursal='{{$request->sucursal}}'>Aceptar</button> --}}
         <input type="submit" value="Aceptar" class="btn btn-primary">
        </div>

        {!! Form::close()!!}
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
                    <small class="count_top"> NEUMATICOS</small>
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
                    <th class="rotate"><div><span>Toyota  </span></div></th>
                    <th class="rotate"><div><span>Lexus  </span></div></th>
                    <th class="rotate"><div><span>Hino  </span></div></th>
                    <th class="rotate"><div><span>Yamaha  </span></div></th>
                    <th class="rotate"><div><span>Tramites  </span></div></th>
                    <th class="rotate"><div><span>Repuestos </span></div></th>
                    <th class="rotate"><div><span>Servicios </span></div></th>
                    <th class="rotate"><div><span>Licitaciones </span></div></th>
                    <th class="rotate"><div><span>Neumaticos </span></div></th>
                    <th class="rotate"><div><span>Maq pesada </span></div></th>
                    <th class="rotate"><div><span>Total trafico </span></div></th>
                    <th class="rotate"><div><span>Total cotizaciones </span></div></th>
                    <th class="rotate"><div><span>Total reservas </span></div></th>
                    <th class="rotate"><div><span>Totalizador modelos </span></div></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($consolidado as $det)                
                  <tr>
                    <td align="right">
                      @if($request->pantalla=='index')<strong><a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&pantalla=regional &mes='.$mes.'&regional='.$det->regional}}">{{$det->regional}}</a></strong>@endif
                      @if($request->pantalla=='regional')<strong><a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&pantalla=sucursal &mes='.$mes.'&sucursal='.$det->id_sucursal}}">{{$det->nom_sucursal}}</a></strong>@endif
                      @if($request->pantalla=='sucursal')
                        <strong>
                        @if(is_null($det->nombre)) 
                          <a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&pantalla=detalle &mes='.$mes.'&sucursal='.$det->id_sucursal}}">
                            No aginado 
                          </a>
                        @else
                          <a href="{{ route('trafico.reporte2').'?fecha1='.$request->fecha1.'&pantalla=detalle &mes='.$mes.'&sucursal='.$det->id_sucursal.'&id_ejecutivo='.$det->id_ejecutivo.'&nom='.$det->nombre.'&pat='.$det->paterno}}"> 
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
                    <td align="right">@if (is_null($det->montacargas) && is_null($det->pesada) && is_null($det->agricola)) @else{{$det->montacargas+$det->pesada+$det->agricola}}@endif</td>
                    <td align="right" style="background: #c2e1da99;"><strong>{{$det->totales}}</strong></td>
                    <td align="right" style="background: #e0e1c299;"><strong>{{$det->cotizaciones}}</strong></td>
                    <td align="right" style="background: #e1d1c299;"><strong>{{$det->reservas}}</strong></td>
                    <td align="right"><strong>{{$det->modelos}} 
                    @if($det->modelos > 0)
                    <a href="javascript:;" class="ver_detalle" data-toggle="tooltip" data-placement="bottom" title="Ver modelos seleccionados " pantalla='{{$request->pantalla}}' f_ini='{{$f_ini}}' f_fin='{{$f_fin}}'
                    @if($request->pantalla=='index') regional='{{$det->regional}}' @endif
                    @if($request->pantalla=='regional') sucursal ='{{$det->id_sucursal}}' @endif
                    @if($request->pantalla=='sucursal') Vendedor ='{{$det->id_ejecutivo}}' @endif
                    > <span class="fa fa-file"></span> </a>
                    @endif
                    </strong></td>
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
  <div class="modal fade myModal2" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content contenido_modal">
        
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

$(document).ready(function() {
    $('#datatable1').DataTable( { "language": {
            
              "sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ningún dato disponible en esta tabla",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar en Todo:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":     "Último",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
              },
        },

        "bLengthChange" : false,
        // "dom": "Blfrtip",
        "dom": "Brti",
        
       "buttons": [ 'copy', 'excel','pdf'],

        // "lengthMenu": [[5,10, 25, 50, 100, -1], [5,10, 25, 50, 100, "TODO"]],
        "lengthMenu": [[-1], ["TODO"]]
    } );

} );


    // $(".aceptar").click(function() {
    //    // window.location = $(this).data("href");
    //   var data =$('input[name="fecha1"]').val();
    //   var arr = data.split('-');
    //   var f_i = arr[0];
    //   var f_f = arr[1];
  
var btnVer = $(".ver_detalle");
btnVer.on("click",function(){
   // alert($(this).attr('id'));
  frm_ver_detalle($(this));
});

var modalVer=$(".myModal2");
var modalContentVer = $(".contenido_modal");

var frm_ver_detalle = function(objeto){ 
  $.ajax({
    type: "GET",
    cache: false,
    dataType: "html",
    url: "{{ route('trafico.totalizador')}}",
    data: {
      pantalla: objeto.attr("pantalla"),
      regional: objeto.attr("regional"),
      sucursal: objeto.attr("sucursal"),
      Vendedor: objeto.attr("Vendedor"),
      f_ini: objeto.attr("f_ini"),
      f_fin: objeto.attr("f_fin")

    },
    success: function(dataResult)
    {
      console.log(dataResult);
      modalContentVer.empty().html(dataResult);                        
      modalVer.modal('show');
      NProgress.done();
    },
    error: function(jqXHR, exception)
    {
      var msg = '';
      if (jqXHR.status === 0) {
          msg = 'Not connect.\n Verify Network.';
      } else if (jqXHR.status == 404) {
          msg = 'Requested page not found. [404]';
      } else if (jqXHR.status == 500) {
          msg = 'Internal Server Error [500].';
      } else if (exception === 'parsererror') {
          msg = 'Requested JSON parse failed.';
      } else if (exception === 'timeout') {
          msg = 'Time out error.';
      } else if (exception === 'abort') {
          msg = 'Ajax request aborted.';
      } else {
          msg = 'Uncaught Error.\n' + jqXHR.responseText;
      }
      alert(msg);
      NProgress.done();
    }
  });
}
   
  
</script>
@endsection