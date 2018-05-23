@extends('layouts.main')

@section('content')

<style type="text/css">

</style>
 <!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title">
        <div class="col-md-8">
        <h3><a href="">EJECUTIVOS</a></h3>
        </div>
       
      </div>
    </div>
    <hr>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            Lista de ejecutivos
            <div class="clearfix" ></div>
          </div>
          <div class="x_content">
            <div class="table-responsive">
              
            <table id="vendedores" class="table table-striped jambo_table bulk_action">
              <thead>
                <tr>
                  
                  <th>NOMBRE</th>
                  <th>TELEFONO</th>
                  <th>CORREO</th>
                  <th>CARGO</th>
                  <th>SUCURSAL</th>
                  <th>ESTADO</th>
                 
                  {{-- <th>NOMBRE TEROS</th>
                  <th>SUCURSAL TEROS</th> --}}
                 
                </tr>
              </thead>
              <tbody>
               @foreach($vendedores as $det)
                <tr>
                    <td>{{strtoupper($det->nom_teros)}} </td>
                    <td>{{$det->telefono}}</td>
                    <td>{{$det->correo}}</td>
                    <td>{{$det->cargo}}</td>
                    <td>{{$det->id_sucursal}}-{{$det->sucursal->nom_sucursal}}</td>
                    <td>{{$det->estado}}</td>
                    {{-- <td>{{$det->nom_teros}}</td>
                    <td>{{$det->suc_teros}}-{{$det->sucursal_teros->nom_sucursal}}</td> --}}
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

$('#vendedores').DataTable( { "language": {
            
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
        
       "buttons": [ 'copy', 'excel'],

        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "TODO"]],

    } );
</script>
@endsection