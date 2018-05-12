
               
                  <div class="x_content">
                    <form class="form-horizontal form-label-left">
                      <div class="">
                        <h2>Facturas <small>resultado para:</small>
                         @foreach($facturas as $det)
                          <span class="label label-primary">{{$det->FACTURA}}</span>
                        @endforeach
                        </h2>
                      </div>

                    </form>  
                      <table id="datatable1" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>FACTURA</th>
                  <th>FECHA</th>
                  <th>DESTINO</th>
                  <th>BARCO</th>
                  <th>MODELO</th>
                  <th>ED</th>
                  <th>C/NO</th>
                  <th>CHASIS</th>
                  <th>MOTOR</th>
                  <th>COLOUR</th>
                  <th>LLAVE</th>
                </tr>
              </thead>
              <tbody>
                @foreach($detalle_facturas as $det)
                  <tr>
                    <td>{{$det->FACTURA}}</td>
                    <td>{{$det->FECHA}}</td>
                    <td>{{$det->DESTINO}}</td>
                    <td>{{$det->BARCO}}</td>
                    <td>{{$det->MODELO}}</td>
                    <td>{{$det->ED}}</td>
                    <td>{{$det->CNO}}</td>
                    <td>{{$det->CHASIS}}</td>
                    <td>{{$det->MOTOR}}</td>
                    <td>{{$det->COLOUR}}</td>
                    <td>{{$det->LLAVE}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            </div>


            

                    

<script type="text/javascript">
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

        "dom": "Blfrtip",
        "buttons": [ 'copy', 'excel'],
        
        "fixedHeader": true,

        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "TODO"]],
        // "lengthMenu": [[-1], ["TODO"]]
    } );
</script>
