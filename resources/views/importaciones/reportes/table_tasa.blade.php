
               
                  <div class="x_content">
                    <form class="form-horizontal form-label-left">
                      <div class="">
                        <h2>Facturas <small>resultado para:</small>
                         @foreach($facturas as $det)
                          <span class="label label-primary">{{$det->orden}}</span>
                        @endforeach
                        </h2>
                      </div>

                    </form>  
                      <table id="datatable1" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>FACTURA</th>
                  <th>ED</th>
                  <th>PROD ORDER</th>
                  <th>COD MODELO</th>
                  <th>MODELO</th>
                  <th>CHASIS</th>
                  <th>MOTOR</th>
                  <th>COLOR EXT</th>
                  <th>COLOR INT</th>
                  <th>LLAVE</th>
                </tr>
              </thead>
              <tbody>
                @foreach($detalle_facturas as $det)
                  <tr>
                    <td>{{$det->orden}}</td>
                    <td>{{$det->ED}}</td>
                    <td>{{$det->ORDER}}</td>
                    <td>{{$det->MODELO}}</td>
                    <td>{{$det->DESCRIPCION}}</td>
                    <td>{{$det->CHASIS}}</td>
                    <td>{{$det->MOTOR}}</td>
                    <td>{{$det->COLOR_EXT}}</td>
                    <td>{{$det->COLOR_INT}}</td>
                    <td>{{$det->KEY}}</td>
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

        "lengthMenu": [[-1,10, 25, 50, 100], ["TODO",10, 25, 50, 100 ]],
        // "lengthMenu": [[-1], ["TODO"]]
    } );
</script>
