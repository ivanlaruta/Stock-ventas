
                    <div>
                      <small>{{$now}}</small>
                      <a href="javascript:generar();" class="pull-right actualiza" onclick="generar();">Actualizar <i class="fa fa-refresh" ></i></a>
                    </div>
                    
              <div class="table-responsive">
                <table id="resumen" class="table table-bordered table-hover nowrap mi_tabla">
                  <thead>
                    <tr>
                      <th rowspan="2">MODELO/MASTER:</th>
                      <th colspan="3" style="text-align: center; background-color: #c8ecdd;">STOCK</th>
                      <th colspan="3" style="text-align: center">DISPONIBLES</th>
                      <th colspan="3" style="text-align: center">INMOVILIZADOS</th>
                      <th colspan="3" style="text-align: center">SC ESPECIAL</th>
                      <th colspan="3" style="text-align: center">RESERVADOS</th>
                    </tr>

                    <tr>
                      <th style="width: 1%; text-align: right; background-color: #c8ecdd;">Bolivia</th>
                      <th style="width: 1%; text-align: right; background-color: #c8ecdd;">Prod /Tran</th>
                      <th style="width: 1%; text-align: right; background-color: #c8ecdd;">Total</th>
                      <th style="width: 1%; text-align: right;">Bolivia</th>
                      <th style="width: 1%; text-align: right;">Prod /Tran</th>
                      <th style="width: 1%; text-align: right; background-color: #e6fffb; ">Total</th>
                      <th style="width: 1%; text-align: right;">Bolivia</th>
                      <th style="width: 1%; text-align: right;">Prod /Tran</th>
                      <th style="width: 1%; text-align: right; background-color: #e6fffb; ">Total</th>
                      <th style="width: 1%; text-align: right;">Bolivia</th>
                      <th style="width: 1%; text-align: right;">Prod /Tran</th>
                      <th style="width: 1%; text-align: right; background-color: #e6fffb; ">Total</th>
                      <th style="width: 1%; text-align: right;">Bolivia</th>
                      <th style="width: 1%; text-align: right;">Prod /Tran</th>
                      <th style="width: 1%; text-align: right; background-color: #e6fffb; ">Total</th>
                    </tr>

                    <tr hidden="">
                      <th>MODELO/MASTER</th>
                      <th style="width: 1%; text-align: right; background-color: #c8ecdd;">STOCK Bolivia</th>
                      <th style="width: 1%; text-align: right; background-color: #c8ecdd;">STOCK Prod /Tran</th>
                      <th style="width: 1%; text-align: right; background-color: #c8ecdd;">STOCK Total</th>
                      <th style="width: 1%; text-align: right;">DISPONIBLES Bolivia</th>
                      <th style="width: 1%; text-align: right;">DISPONIBLES Prod /Tran</th>
                      <th style="width: 1%; text-align: right; background-color: #e6fffb; ">DISPONIBLES Total</th>
                      <th style="width: 1%; text-align: right;">INMOVILIZADOS Bolivia</th>
                      <th style="width: 1%; text-align: right;">INMOVILIZADOS Prod /Tran</th>
                      <th style="width: 1%; text-align: right; background-color: #e6fffb; ">INMOVILIZADOS Total</th>
                      <th style="width: 1%; text-align: right;">SC ESPECIAL Bolivia</th>
                      <th style="width: 1%; text-align: right;">SC ESPECIAL Prod /Tran</th>
                      <th style="width: 1%; text-align: right; background-color: #e6fffb; ">SC ESPECIAL Total</th>
                      <th style="width: 1%; text-align: right;">RESERVADOS Bolivia</th>
                      <th style="width: 1%; text-align: right;">RESERVADOS Prod /Tran</th>
                      <th style="width: 1%; text-align: right; background-color: #e6fffb; ">RESERVADOS Total</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($resumen_stock as $det)
                  @if(is_null($det->MASTER) && is_null($det->MODELOS))
                        <tr style="background-color: #e6fffb; color: #258c67;">
                      @else
                        @if(is_null($det->MASTER))
                         <tr style="background-color: #e2f0f6;">
                        @else
                          <tr>
                        @endif
                      @endif

                    
                      @if(is_null($det->MASTER) && is_null($det->MODELOS))
                        <td>TOTAL</td>
                      @else
                        @if(is_null($det->MASTER))
                          <td>TOTAL {{$det->MODELOS}}</td>
                        @else
                          <td align="right">{{$det->MASTER}}</td>
                        @endif
                      @endif
                      <td align="right">{{$det->ST_BOLIVIA}}</td>
                      <td align="right">{{$det->ST_PROD_TRANSITO}}</td>
                      <td align="right" @if(is_null($det->MASTER) && !is_null($det->MODELOS)) style=" background-color: #b5dbcb;" @else style=" background-color: #c8ecdd;" @endif >{{$det->ST_TOTAL}}</td>
                      <td align="right">{{$det->DP_BOLIVIA}}</td>
                      <td align="right">{{$det->DP_PRODUCCION}}</td>
                      <td align="right" @if(is_null($det->MASTER) && !is_null($det->MODELOS)) style=" background-color: #dbedea;" @else style=" background-color: #e6fffb;" @endif>{{$det->DP_TOTAL}}</td>
                      <td align="right">{{$det->IN_BOLIVIA}}</td>
                      <td align="right">{{$det->IN_PRODUCCION}}</td>
                      <td align="right" @if(is_null($det->MASTER) && !is_null($det->MODELOS)) style=" background-color: #dbedea;" @else style=" background-color: #e6fffb;" @endif>{{$det->IN_TOTAL}}</td>
                      <td align="right">{{$det->SC_BOLIVIA}}</td>
                      <td align="right">{{$det->SC_PRODUCCION}}</td>
                      <td align="right" @if(is_null($det->MASTER) && !is_null($det->MODELOS)) style=" background-color: #dbedea;" @else style=" background-color: #e6fffb;" @endif>{{$det->SC_TOTAL}}</td>
                      <td align="right">{{$det->RS_BOLIVIA}}</td>
                      <td align="right">{{$det->RS_PRODUCCION}}</td>
                      <td align="right" @if(is_null($det->MASTER) && !is_null($det->MODELOS)) style=" background-color: #dbedea;" @else style=" background-color: #e6fffb;" @endif>{{$det->RS_TOTAL}}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>


<script type="text/javascript">
    
   

    $('.mi_tabla').DataTable( {
      "language": {
              
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
                  "buttons": {
                      "copyTitle": "Informacion copiada en el portapapeles",
                      "copyKeys": "Pege la informacion en donde lo requiera",
                      "copySuccess": {
                        _: '%d registros copiados',
                        1: '1 registro copiado'
                    }
                  },
              },
        "dom": "Bt",
        "buttons": [ { "extend": 'copy', "text": 'Copiar' }, 'excel'],

        "ordering": false,
         "lengthMenu": [[-1], ["TODO"]]
         // "fixedHeader": true
    } );



  </script>
