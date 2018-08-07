
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="row x_title">
          <div class="col-md-12">
            <h5>
              <a href="javascript:;" onclick="generar(desc_fecha,'','','','nacional');">RESUMEN NACIONAL</a>
              @if($request->pantalla=='regional'||$request->pantalla=='sucursal' ||$request->pantalla=='vendedor')
               / <a href="javascript:;" onclick="generar(desc_fecha,regional,'','','regional');">{{$request->regional}}</a> 
               @endif
              @if($request->pantalla=='sucursal' ||$request->pantalla=='vendedor')
               / <a href="javascript:;" onclick="generar(desc_fecha,regional,sucursal,'','sucursal');"> {{$request->sucursal}}</a> 
               @endif
              @if($request->pantalla=='vendedor')
               / <a href="javascript:;" onclick="generar(desc_fecha,regional,sucursal,vendedor,'vendedor');">{{$request->vendedor}}</a> 
               @endif
              <small class="pull-right">  {{$f_ini}} - {{$f_fin}}</small>
            </h5>
          </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12 bg-white">
        @if($request->pantalla=='nacional' ||$request->pantalla=='regional' ||$request->pantalla=='sucursal')
          <small>Las medidas presentadas son el promedio entre los porcesos correspondientes.</small>
          <br>
          <div class="col-md-12 col-sm-12 col-xs-12 table-responsive" >
            <table class="table table-striped" id="datatable1">
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
                  @if($request->pantalla=='nacional')
                  <td><a href="javascript:;" onclick="generar(desc_fecha,'{{$det->REG_ASIGNADA}}',sucursal,vendedor,'regional');">{{$det->REG_ASIGNADA}} </a></td>
                  @endif
                  @if($request->pantalla=='regional')
                  <td><a href="javascript:;" onclick="generar(desc_fecha,'{{$det->REG_ASIGNADA}}','{{$det->SUC_ASIGNADA}}',vendedor,'sucursal');">{{$det->SUC_ASIGNADA}} </a></td>
                  @endif
                  @if($request->pantalla=='sucursal')
                  <td><a href="javascript:;" onclick="generar(desc_fecha,'{{$det->REG_ASIGNADA}}','{{$det->SUC_ASIGNADA}}','{{$det->VENDEDOR}}','vendedor');">{{$det->VENDEDOR}} </a></td>
                  @endif
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
            <table class="table table-striped" id="datatable1">
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
                  <td>{{$det->CLIENTE}} </td>
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
  // alert(pantalla);
</script>


