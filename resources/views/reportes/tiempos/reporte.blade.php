
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="row x_title">
          <div class="col-md-12">
            <h5>
              <a href="javascript:;" onclick="generar(desc_fecha,'','','','nacional');">RESUMEN NACIONAL</a>

              @if($request->pantalla=='regional'||$request->pantalla=='sucursal' ||$request->pantalla=='vendedor'||$request->pantalla=='det_regional')
               / <a href="javascript:;" onclick="generar(desc_fecha,regional,'','','regional');">{{$request->regional}}</a> 
               @endif
              @if($request->pantalla=='sucursal' ||$request->pantalla=='vendedor'||$request->pantalla=='det_sucursal')
               / <a href="javascript:;" onclick="generar(desc_fecha,regional,sucursal,'','sucursal');"> {{$request->sucursal}}</a> 
               @endif
              @if($request->pantalla=='vendedor')
               / <a href="javascript:;" onclick="generar(desc_fecha,regional,sucursal,vendedor,'vendedor');">{{$request->vendedor}}</a> 
               @endif
              

              @if($request->pantalla=='det_nacional'||$request->pantalla=='det_regional' ||$request->pantalla=='det_sucursal'||$request->pantalla=='vendedor')
               / DETALLE
               @endif


              <small class="pull-right">  {{$f_ini}} - {{$f_fin}}</small>
            </h5>
          </div>
        </div>
        @if($request->pantalla=='nacional' ||$request->pantalla=='regional' ||$request->pantalla=='sucursal')
        <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Cotizacion / Contrato</span>
              <div class="count">{{$indicadores[0]->TIEMPO_COT_CONTR}}</div>
              <span class="count_bottom"> Promedio {{$request->pantalla}}</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Contrato / Reserva</span>
              <div class="count">{{$indicadores[0]->TIEMPO_CONTR_RES}}</div>
              <span class="count_bottom"> Promedio {{$request->pantalla}}</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Reserva / Factura</span>
              <div class="count">{{$indicadores[0]->TIEMPO_RES_FAC}}</div>
              <span class="count_bottom"> Promedio {{$request->pantalla}}</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Factura / Nota Entrega</span>
              <div class="count">{{$indicadores[0]->TIEMPO_FAC_NOTA}}</div>
              <span class="count_bottom"> Promedio {{$request->pantalla}}</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> dias de proceso</span>
              <div class="count green">{{$indicadores[0]->TIEMPO_PROMEDIO}}</div>
              <span class="count_bottom"> Promedio {{$request->pantalla}}</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-tag"></i> Nro de ventas</span>
              <div class="count">{{$indicadores[0]->CONTADOS}}</div>
              <span class="count_bottom">
                <a href="javascript:;" 

                @if ($request->pantalla == 'nacional')
                onclick="generar(desc_fecha,' ',' ',' ','det_nacional');"
                @endif
                @if ($request->pantalla == 'regional')
                onclick="generar(desc_fecha,'{{$request->regional}}','{{$request->sucursal}}','{{$request->vendedor}}','det_regional');"
                @endif
                @if ($request->pantalla == 'sucursal')
                onclick="generar(desc_fecha,'{{$request->regional}}','{{$request->sucursal}}','{{$request->vendedor}}','det_sucursal');"
                @endif
                @if ($request->pantalla == 'vendedor')
                onclick="generar(desc_fecha,'{{$request->regional}}','{{$request->sucursal}}','{{$request->vendedor}}','vendedor');"
                @endif

                >
                <i class="fa fa-eye"></i> 
                Ver detalle
                </a>
              </span>
            </div>
           
          </div>
        @endif
        <div class="col-md-12 col-sm-12 col-xs-12 bg-white">
        @if($request->pantalla=='nacional' ||$request->pantalla=='regional' ||$request->pantalla=='sucursal')
          <small>Las medidas presentadas son el promedio entre los porcesos correspondientes.</small>
          <br>
          <div class="col-md-12 col-sm-12 col-xs-12 table-responsive" >
            <table id="resumen" class="table table-bordered table-hover nowrap mi_tabla">
              <thead>
                <tr>
                  @if($request->pantalla=='nacional')<th>REGIONAL </th>@endif
                  @if($request->pantalla=='regional')<th>SUCURSAL </th>@endif
                  @if($request->pantalla=='sucursal')<th>VENDEDOR </th>@endif
                  <th> COTIZACION/CONTRATO </th>
                  <th> CONTRATO/RESERVA</th>
                  <th> RESERVA/FACTURA</th>
                  <th> FACTURA/NOTA</th>
                  <th> TOTAL PROCESO </th>
                </tr>
              </thead>
              <tbody>
              @foreach($result as $det)                
                <tr>
                  <td>
                  @if($request->pantalla=='nacional')
                    <a href="javascript:;" onclick="generar(desc_fecha,'{{$det->REG_ASIGNADA}}',sucursal,vendedor,'regional');">{{$det->REG_ASIGNADA}} </a>
                  @endif
                  @if($request->pantalla=='regional')
                  <a href="javascript:;" onclick="generar(desc_fecha,'{{$det->REG_ASIGNADA}}','{{$det->SUC_ASIGNADA}}',vendedor,'sucursal');">{{$det->SUC_ASIGNADA}} </a>
                  @endif
                  @if($request->pantalla=='sucursal')
                  <a href="javascript:;" onclick="generar(desc_fecha,'{{$det->REG_ASIGNADA}}','{{$det->SUC_ASIGNADA}}','{{$det->VENDEDOR}}','vendedor');">{{$det->VENDEDOR}} </a>
                
                  @endif
                   ({{$det->CONTADOS}}) 
                  </td>
                  <td>{{$det->TIEMPO_COT_CONTR}} dias</td>
                  <td>{{$det->TIEMPO_CONTR_RES}} dias</td>
                  <td>{{$det->TIEMPO_RES_FAC}} dias</td>
                  <td>{{$det->TIEMPO_FAC_NOTA}} dias</td>
                  <td>{{$det->TIEMPO_PROMEDIO}} dias</td>                          
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        <div class="clearfix"></div>
      
      @else
      
          <br>
          <div class="col-md-12 col-sm-12 col-xs-12 table-responsive" >
            <table id="resumen" class="table table-bordered table-hover nowrap mi_tabla">
              <thead>
                <tr>
                  <th> REGIONAL </th>
                  <th> SUCURSAL </th>
                  <th> VENDEDOR </th>
                  <th> CLIENTE </th>
                  <th> UNIDAD </th>
                  <th> MODELO </th>
                  <th> INGRESO A BOLIVIA </th>
                  <th> FECHA COTIZACION </th>
                  <th> FECHA CONTRATO </th>
                  <th> FECHA RESERVA  </th>
                  <th> FECHA FACTURA </th>
                  <th> FECHA NOTA DE ENTREGA </th>
                  <th> DIAS DE PROCESO </th>
                </tr>
              </thead>
              <tbody>
              @foreach($result as $det)                
                <tr>
                  <td>{{$det->REG_ASIGNADA}} </td>
                  <td>{{$det->SUC_ASIGNADA}} </td>
                  <td>{{$det->VENDEDOR}} </td>
                  <td>{{$det->razon_social}} </td>
                  <td>{{$det->CHASIS}} </td>
                  <td>{{$det->MODELO}} </td>
                  <td>{{$det->f_ingreso}} </td>
                  <td>{{$det->f_cotiza}} </td>
                  <td>{{$det->f_contr}} </td>
                  <td>{{$det->f_res}}  </td>
                  <td>{{$det->f_fac}} </td>
                  <td>{{$det->f_nota}} </td>
                  <td>{{$det->dias_proceso_ingreo}} </td>                      
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        <div class="clearfix"></div>
      </div>
      @endif


    </div>
  </div>
  <br />
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
        "dom": "Bti",
        "buttons": [ { "extend": 'copy', "text": 'Copiar' }, 'excelHtml5'],

        
         "lengthMenu": [[-1], ["TODO"]]
         // "fixedHeader": true
    } );

</script>


