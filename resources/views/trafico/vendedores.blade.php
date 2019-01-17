@extends('layouts.main')

@section('content')

<style type="text/css">
.opaco{color: #b5bec8;}
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
                  <th>SUCURSAL</th>
                  <th>MARCA</th>
                  <th>ESTADO</th>
                  <th>OPCIONES</th>

                </tr>
              </thead>
              <tbody>
               @foreach($vendedores as $det)
                <tr @if($det->estado == '0') class="opaco" @endif>
                    <td>{{strtoupper($det->nombre.' '.$det->paterno)}} </td>
                    <td>{{$det->id_sucursal}} - {{$det->sucursal->nom_sucursal}}</td>
                    <td>
                        @if(strpos($det->marca, 'T') !== false)
                        <span class="label label-primary">TOYOTA</span>
                        @endif
                        @if(strpos($det->marca, 'Y') !== false)
                        <span class="label label-primary">YAMAHA</span>
                        @endif
                      
                    </td>
                    <td>
                      @if($det->estado == '1')
                        ACTIVO
                      @else
                        INACTIVO
                      @endif
                    </td>
                    <td>
                     <div class="btn-group" role="group" >
                        <a href="#" class="btn btn-warning btn-xs btn_editar" id_vendedor = '{{ $det -> id}}'  data-toggle="tooltip" data-placement="bottom" title="Editar vendedor">
                          <span class="fa fa-edit"></span> 
                        </a>
                          @if($det->estado == '0')
                            <a href="#" class="btn btn-info btn-xs " data-toggle="tooltip" data-placement="bottom" title="Habilitar vendedor">
                              <span class="fa fa-check"></span> 
                            </a>
                          @else
                            <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="bottom" title="Deshabilitar vendedor">
                              <span class="fa fa-trash"></span> 
                            </a>
                          @endif
                        
                      </div>
                    </td>  
                </tr>
                @endforeach
              </tbody>
            </table>
            </div>
            <div class="modal fade modal_datos" id="modal_detalle" role="dialog" >
              <div class="modal-dialog modal-lg">
                <div class="modal-content contenido">
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

var btn_editar = $(".btn_editar");
  btn_editar.on("click",function(){
    frm_editar($(this));
  });

  var modalContent = $(".contenido");
  var modal=$(".modal_datos");

  var frm_editar = function(objeto){
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('trafico.vendedores_modal')}}",
      data: {
        tipo: "editar",
        id_vendedor: objeto.attr("id_vendedor")
      },
      success: function(dataResult)
      {
        console.log(dataResult);
        modalContent.empty().html(dataResult);                        
        modal.modal('show');
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
  };

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