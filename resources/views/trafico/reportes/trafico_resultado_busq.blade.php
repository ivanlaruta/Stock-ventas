

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
            <table id="datatable1" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th  style="width: 1%;">CLIENTE</th>
                  <th  style="width: 1%;">GENERO</th>
                  <th  style="width: 1%;">EDAD</th>
                  <th  style="width: 1%;">TELEFONO</th>
                  <th  style="width: 1%;">TELEFONO FIJO</th>
                  <th  style="width: 1%;">CORREO</th>
                  <th  style="width: 1%;">CI</th>
                  <th  style="width: 1%;">EXP</th>
                  <th  style="width: 1%;">MOTIVO</th>
                  
                  <th  style="width: 1%;">REGIONAL</th>
                  <th  style="width: 1%;">SUCURSAL</th>
                  <th  style="width: 1%;">FECHA</th>
                  <th  style="width: 1%;">EJECUTIVO</th>
                  <th  style="width: 1%;">ANFITRION</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($reporte as $det)
                  <tr>
                    <td>@if(is_null($det->nombre)) SIN REGISTRO @else {{$det->nombre}} @endif</td>
                    <td>{{$det->genero}}</td>
                    <td>{{$det->rango_edad}}</td>
                    <td>{{$det->telefono}}</td>
                    <td>{{$det->telefono_aux}}</td>
                    <td>{{$det->correo}}</td>
                    <td>{{$det->ci}}</td>
                    <td>{{$det->expedido}}</td>
                    <td>{{$det->motivo}}</td>
                    
                    <td>{{$det->regional}}</td>
                    <td>{{$det->sucursal}}</td>
                    <td>{{$det->fecha}}</td>
                    <td>{{$det->ejecutivo}}</td>
                    <td>{{$det->anfitrion}}</td>
                    
                    
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
