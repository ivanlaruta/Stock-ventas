
               
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
                  <th style="width: 1%;">FACTURA</th>
                  <th style="width: 1%;">ED</th>
                  <th style="width: 1%;">PROD/ORDER</th>
                  <th style="width: 1%;">COD MOD</th>
                  <th style="width: 1%;">MOD</th>
                  <th style="width: 1%;">CHASIS</th>
                  <th style="width: 1%;">MOTOR</th>
                  <th style="width: 1%;">COL/EXT</th>
                  <th style="width: 1%;">COL/INT</th>
                  <th style="width: 1%;">KEY</th>
                </tr>
              </thead>
              <tbody>
                @foreach($detalle_facturas as $det)
                  <tr>
                    <td style="width: 1%;">{{$det->orden}}</td>
                    <td style="width: 1%;">{{$det->ED}}</td>
                    <td style="width: 1%;">{{$det->ORDER}}</td>
                    <td style="width: 1%;">{{$det->MODELO}}</td>
                    <td style="width: 1%;">{{$det->DESCRIPCION}}</td>
                    <td style="width: 1%;">{{$det->CHASIS}}</td>
                    <td style="width: 1%;">{{$det->MOTOR}}</td>
                    <td style="width: 1%;">{{$det->COLOR_EXT}}</td>
                    <td style="width: 1%;">{{$det->COLOR_INT}}</td>
                    <td style="width: 1%;">{{$det->KEY}}</td>
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
