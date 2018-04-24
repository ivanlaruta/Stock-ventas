@extends('layouts.main')

@section('content')

<style type="text/css">

</style>
 <!-- page content -->
<div class="right_col" role="main">
  <div class="">
   <div class="row">
    <div class="clearfix"></div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
        <h2>REPORTE TRAFICO / 
              <a href="{{ route('trafico.reporte2').'?mes='.$request->mes}}">{{$desc_mes}}</a>
               /
                <a href="{{ route('trafico.reporte2').'?pantalla=regional&mes='.$request->mes.'&regional='.$regional}}">
                {{$regional}}
                </a> 
              / 
              <a href="{{ route('trafico.reporte2').'?pantalla=sucursal&mes='.$request->mes.'&sucursal='.$request->sucursal}}">
                {{$sucursal}} 
              </a>
              /
              @if(is_null($request->nom))
                Sin dato de vendedor
              @else
                {{strtoupper($request->nom ." ".$request->pat)}}
              @endif

            </h2>
          <div class="clearfix"></div>
      </div>
   
    <hr>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Lista de visitas</h2>
            <div class="clearfix" ></div>
          </div>
          <div class="x_content">
            <div class="table-responsive">
              
            <table id="datatable_motivos" class="table table-striped jambo_table bulk_action">
              <thead>
                <tr>
                  <th>NRO</th>
                  <th>FECHA</th>
                  <th>SUCURSAL</th>
                  <th>MOTIVO</th>
                  <th>TIPO CLIENTE</th>
                  <th>CLIENTE</th>
                  <th>RANGO EDAD</th>
                  <th>GENERO</th>
                  <th>TELEFONO</th>
                  <th>CORREO</th>
                  {{-- <th>EJECUTIVO</th> --}}
                  <th>ANFITRION</th>
                  <th style="text-align: right;">TOTALIZADOR DE MODELOS</th>
                </tr>
              </thead>
             
              <tbody>
               @foreach($visitas as $det)
                <tr>
                    <td>{{$det->id}}</td>
                    <td>{{$det->fecha}}</td>
                    <td>{{$det->id_sucursal}} - {{$det->sucursal->nom_sucursal}}</td>
                    <td>{{$det->motivo->descripcion}}</td>
                    <td>{{$det->tipo_cliente}}</td>
                    <td>@if(is_null($det->id_cliente)) -- @else{{$det->cliente->nombre}} {{$det->cliente->paterno}} @endif</td>
                    <td>@if(is_null($det->id_cliente) ) -- @else @if(is_null($det->cliente->rango_edad)) -- @else {{$det->cliente->edad->descripcion}}@endif @endif</td>
                    <td>@if(is_null($det->id_cliente)) -- @else @if(is_null($det->cliente->genero)) -- @else {{$det->cliente->genero}}@endif @endif</td>

                    <td>@if(is_null($det->id_cliente)) -- @else @if(is_null($det->cliente->telefono)) -- @else{{$det->cliente->telefono}}@endif @endif</td>

                    <td>@if(is_null($det->id_cliente)) -- @else @if(is_null($det->cliente->correo)) -- @else{{$det->cliente->correo}}@endif @endif</td>
                    
                    {{-- <td>@if($det->id_ejecutivo==null) No asignado @else{{strtoupper($det->ejecutivo->nombre ." ".$det->ejecutivo->paterno)}}@endif</td> --}}
                    <td>{{$det->created_by}}</td>
                   
                      <td align="right">
                        @if($det->id_motivo<=4)
                          <div class="btn-group" role="group" >
                            <a href="#" class="ver_detalle" data-toggle="tooltip" data-placement="bottom" title="Ver modelos seleccionados " id_visita='{{$det->id}}'>
                              <span class="fa fa-files-o fa-lg"></span> 
                            </a>
                          </div>
                        @endif
                      </td>        
                    {{-- <td>{{$det->descripcion}}</td> --}}
                </tr>
                @endforeach
              </tbody>
            </table>
            </div>
            
            <div class="modal fade modal_detalle" id="modal_detalle" role="dialog" >
              <div class="modal-dialog modal-lg">
                <div class="modal-content contenido_modal_detalle">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
    </div>
    </div>
    {{-- </div> --}}
  </div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">

var btnVer = $(".ver_detalle");
btnVer.on("click",function(){
  // alert($(this).attr('id'));
  frm_ver_detalle($(this));
});

var modalVer=$(".modal_detalle");
var modalContentVer = $(".contenido_modal_detalle");

var frm_ver_detalle = function(objeto){ 
  $.ajax({
    type: "GET",
    cache: false,
    dataType: "html",
    url: "{{ route('trafico.detalle_visita')}}",
    data: {
      id_visita: objeto.attr("id_visita")
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



    $('#datatable_motivos').DataTable( { "language": {
            
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

        // "bLengthChange" : false,
        "dom": "Blfrtip",
        // "dom": "Brti",
        
       "buttons": [ 'copy', 'excel','pdf'],

        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "TODO"]],

    } );


</script>
@endsection