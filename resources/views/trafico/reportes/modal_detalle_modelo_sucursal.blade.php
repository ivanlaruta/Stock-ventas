
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">TOTALIZADOR DE MODELOS </h4> 
  </div>
  <div class="modal-body">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            
            <div class="x_content">
            <div class="table-responsive">
              
            
            <table id="datatable11" class="table table-striped table-bordered dt-responsive nowrap " cellspacing="0" width="100%">
            
              <thead>
                <tr>
                  <th>CLIENTE</th>
                  <th>GENERO</th>
                  <th>EDAD</th>
                  <th>TELEFONO</th>
                  <th>TELEFONO FIJO</th>
                  <th>CORREO</th>
                  <th>CI</th>
                  <th>EXP</th>
                  <th>MOTIVO</th>
                  <th>CATEGORIA</th>
                  <th>MODELO</th>
                  <th>NOTA</th>
                  <th>REGIONAL</th>
                  <th>SUCURSAL</th>
                  <th>FECHA</th>
                  <th>EJECUTIVO</th>
                  <th>ANFITRION</th>
                  <th>COD TRAFICO</th>
                </tr>
              </thead>
              <tbody>
                @foreach($total as $det)
                  <tr>
                    <td>@if(is_null($det->nombre)) sin dato @else {{$det->nombre}} @endif</td>
                    <td>{{$det->genero}}</td>
                    <td>{{$det->rango_edad}}</td>
                    <td>{{$det->telefono}}</td>
                    <td>{{$det->telefono_aux}}</td>
                    <td>{{$det->correo}}</td>
                    <td>{{$det->ci}}</td>
                    <td>{{$det->expedido}}</td>
                    <td>{{$det->motivo}}</td>
                    <td>{{$det->categoria}}</td>
                    <td>{{$det->modelo}}</td>
                    <td>{{$det->obs_modelo}}</td>
                    <td>{{$det->regional}}</td>
                    <td>{{$det->sucursal}}</td>
                    <td>{{$det->fecha}}</td>
                    <td>{{$det->ejecutivo}}</td>
                    <td>{{$det->anfitrion}}</td>
                    <td>{{$det->visita}}</td>
                    
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
  <div class="modal-footer">

  </div>

  <script type="text/javascript">


    $('#datatable11').DataTable( { "language": {
            
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

        "dom": "Blfrtip",
        "buttons": [ 'copy', 'excel'],
        
        "fixedHeader": true,

        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "TODO"]],
        // "lengthMenu": [[-1], ["TODO"]]
    } );
  </script>



         