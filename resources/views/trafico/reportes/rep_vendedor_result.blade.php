
<style type="text/css">

th.rotate {
  /* Something you can count on */
  height: 140px;
  white-space: nowrap;
}

th.rotate > div {
  transform: 
    /* Magic Numbers */
    /*translate(25px, 51px)*/
    /* 45 is really 360 - 45 */
    rotate(290deg);
  width: 10px;
}
th.rotate > div > span {
  border-bottom: 1px  #ccc;
  padding: 5px 10px;
}

</style>
                   

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
            <table id="datatable1" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th  rowspan="2" style="width: 1%;" class="nowrap">Vendedor</th>
                  <th  rowspan="2" style="width: 1%;">Ubicacion</th>
                  <th colspan="7" style="text-align: center; background-color: #05484" >TRAFICO</th>
                  <th colspan="3" style="text-align: center">TEROS</th>
                </tr>
                <tr>
                  <th class="rotate"><div><span>PROMO</span></div></th>
                  <th class="rotate"><div><span>TOYOTA</span></div></th>
                  <th class="rotate"><div><span>LEXUS</span></div></th>
                  <th class="rotate"><div><span>HINO</span></div></th>
                  <th class="rotate"><div><span>YAMAHA</span></div></th>
                  <th class="rotate"><div><span>TRAMITES</span></div></th>
                  <th class="rotate" style="background-color: rgba(207, 243, 234, 0.47);"><div><span>TOTAL TRAFICO</span></div></th>
                  <th class="rotate" style="background-color: rgba(207, 243, 234, 0.47);"><div><span>COTIZACIONES</span></div></th>
                  <th class="rotate" style="background-color: rgba(207, 243, 234, 0.47);"><div><span>RESERVAS</span></div></th>
                  <th class="rotate" style="background-color: rgba(207, 243, 234, 0.47);"><div><span>FACTURAS</span></div></th>
                  
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
                    <td style="width: 1%; text-align: right; font-weight: bold; background-color: rgba(214, 245, 237, 0.2);">{{$det->trafico}}</td>
                    <td style="width: 1%; text-align: right; font-weight: bold; background-color: rgba(214, 245, 237, 0.2);">{{$det->cotizaciones}}</td>
                    <td style="width: 1%; text-align: right; font-weight: bold; background-color: rgba(214, 245, 237, 0.2);">{{$det->reservas}}</td>
                    <td style="width: 1%; text-align: right; font-weight: bold; background-color: rgba(214, 245, 237, 0.2);">{{$det->facturas}}</td>
                    
                    
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
