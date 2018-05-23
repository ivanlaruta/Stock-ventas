

                      <div class=""> 
                        <h2>Fecha <small>resultado entre las fechas:</small></h2>
                        <h4>{{$f_ini}} y {{$f_fin}}</h4>
                      </div>
                      <br />

                      <div class="">
                        <h2>Sucursales <small>resultado para:</small></h2>
                         @foreach($sucursales as $det)
                          <span class="label label-primary">{{$det->sucursal}}</span>
                        @endforeach
                      </div>
                      <br />

                    

                      <div class="table-responsive">
            <table id="datatable1" class="table table-striped table-bordered table-hover nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th  rowspan="2" style="width: 1%;">Vendedor</th>
                  <th  rowspan="2" style="width: 1%;">Ubicacion</th>
                  <th colspan="7" style="text-align: center">TRAFICO</th>
                  <th colspan="3" style="text-align: center">TEROS</th>
                </tr>
                <tr>
                  <td style="width: 1%; text-align: right;">PROMO</td>
                  <td style="width: 1%; text-align: right;">TOYOTA</td>
                  <td style="width: 1%; text-align: right;">LEXUS</td>
                  <td style="width: 1%; text-align: right;">HINO</td>
                  <td style="width: 1%; text-align: right;">YAMAHA</td>
                  <td style="width: 1%; text-align: right;">TRAMITES</td>
                  <td style="width: 1%; text-align: right; font-weight: bold; background-color: #f4fff6;">TOTAL TRAFICO</td>
                  <td style="width: 1%; text-align: right; font-weight: bold; background-color: #f4fff6;">COTIZACIONES</td>
                  <td style="width: 1%; text-align: right; font-weight: bold; background-color: #f4fff6;">RESERVAS</td>
                  <td style="width: 1%; text-align: right; font-weight: bold; background-color: #f4fff6;">FACTURAS</td>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($reporte as $det)
                  <tr>
                    <td style="width: 1%;" >{{strtoupper($det->nom_teros)}} </td>
                    <td style="width: 1%;" >{{$det->ub_trafico}}</td>
                    <td style="width: 1%; text-align: right;" >{{$det->promo}}</td>
                    <td style="width: 1%; text-align: right;" >{{$det->vehiculos_t}}</td>
                    <td style="width: 1%; text-align: right;" >{{$det->vehiculos_l}}</td>
                    <td style="width: 1%; text-align: right;" >{{$det->vehiculos_h}}</td>
                    <td style="width: 1%; text-align: right;" >{{$det->yamaha}}</td>
                    <td style="width: 1%; text-align: right;" >{{$det->tramites}}</td>
                    <td style="width: 1%; text-align: right; font-weight: bold;">{{$det->trafico}}</td>
                    <td style="width: 1%; text-align: right; font-weight: bold;">{{$det->cotizaciones}}</td>
                    <td style="width: 1%; text-align: right; font-weight: bold;">{{$det->reservas}}</td>
                    <td style="width: 1%; text-align: right; font-weight: bold;">{{$det->facturas}}</td>
                    
                    
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

        "dom": "Bfrti",
        "buttons": [ 'copy', 'excel'],
        
        // "fixedHeader": true,

        // "lengthMenu": [[ -1,10, 25, 50, 100], ["TODO",10, 25, 50, 100]],
        "lengthMenu": [[-1], ["TODO"]]
    } );
</script>
