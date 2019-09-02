@extends('layouts.main')

@section('content')

  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Usuarios</h3>
        </div>
        <div class="pull-right" >
          <a  href="#" class="btn btn-success btn_nuevo " data-toggle="tooltip" data-placement="bottom" title="Agregar nuevo usuario" ><i class="fa fa-plus"></i> Nuevo</a>
        </div>
         <div class="title_right"></div>
      </div>
      <div class="clearfix"></div>
        
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_content animated fadeIn">
          {{-- <p class="text-muted font-13 m-b-30"></p> --}}
          <div class="table-responsive" {{-- style="max-height: 450px; width: 100%; margin: 0; overflow-y: auto; --}}">
            <table class="table table-striped jambo_table bulk_action" id="datatable1">
              <thead>
                <tr>
                 {{-- <th>ID</th> --}}
                 <th>USUARIO</th>
                 <th>E-MAIL</th>
                 <th>NOMBRE</th>
                 <th>PATERNO</th>
                 <th>UBICACION</th>
                 <th>ROL</th>
                 <th>OPCIONES</th>
                </tr>
              </thead>
              {{-- <tfoot>
                <tr>
                 <th>ID</th>
                 <th>USUARIO</th>
                 <th>E-MAIL</th>
                 <th>NOMBRE</th>
                 <th>PATERNO</th>
                 <th>UBICACION</th>
                 <th>ROL</th>
                 <th>OPCIONES</th>
                </tr>
              </tfoot> --}}
              <tbody>
              @foreach($detalle as $det)
                <tr>
                 {{-- <td>{{$det->id}}</td> --}}
                 <td>{{$det->usuario}}</td>
                 <td>{{$det->email}}</td>
                 <td>{{$det->nombre}}</td> 
                 <td>{{$det->paterno}}</td> 
                 <td>{{$det->id_ubicacion}}-{{$det->sucursal->nom_sucursal}}</td> 
                 <td>{{$det->roldesc()->descripcion}}</td> 
                 <td>
                   <div class="btn-group" role="group" >
                     

                      <a href="#" class="btn btn-warning btn-xs btn_editar" id_usuario = '{{ $det -> id}}'  data-toggle="tooltip" data-placement="bottom" title="Editar usuario">
                        <span class="fa fa-edit"></span> 
                      </a>
                      <a href="#" class="btn btn-danger btn-xs">
                        <span class="fa fa-trash"></span> 
                      </a>
                    </div>
                  </td>        
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="modal fade modal_datos" id="Modal_nuevo" role="dialog" >
        <div class="modal-dialog modal-lg">
          <div class="modal-content contenido">
          </div>
        </div>
      </div>

    </div>
  </div>       


@endsection

@section('scripts')

<script type="text/javascript">

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
        
        
         "dom": "Blfrti",
        //"dom": "Brti",
        
       "buttons": [ 'copy', 'excel'],

        // "lengthMenu": [[5,10, 25, 50, 100, -1], [5,10, 25, 50, 100, "TODO"]],
        "lengthMenu": [[-1], ["TODO"]],

        // initComplete: function () {
        //     this.api().columns().every( function () {
        //         var column = this;
        //         var select = $('<select class ="filtro"><option value="">Todos...</option></select>')
        //             .appendTo( $(column.footer()).empty() )
        //             .on( 'change', function () {
        //                 var val = $.fn.dataTable.util.escapeRegex(
        //                     $(this).val()
        //                 );
 
        //                 column
        //                     .search( val ? '^'+val+'$' : '', true, false )
        //                     .draw();
        //             } );
 
        //         column.data().unique().sort().each( function ( d, j ) {
        //             select.append( '<option value="'+d+'">'+d+'</option>' )
        //         } );
        //     } );

        //      $('.filtro').select2();
        // }
    } );

   $('.prueba').select2();

var btn_nuevo = $(".btn_nuevo");
  btn_nuevo.on("click",function(){
    frm_nuevo($(this));
  });

  var modalContent = $(".contenido");
  var modal=$(".modal_datos");

  var frm_nuevo = function(objeto){
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('administracion.modal_users')}}",
      data: {
        tipo: "nuevo"
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
      url: "{{ route('administracion.modal_users')}}",
      data: {
        tipo: "editar",
        id_usuario: objeto.attr("id_usuario")
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
} );


</script>
@endsection