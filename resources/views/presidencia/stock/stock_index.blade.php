@extends('layouts.main')

@section('content')

  <div class="right_col" role="main">
    
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Reporte de Stock</h3>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Reporte</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="table-responsive">
                <table id="vendedores" class="table table-bordered mi_tabla">
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
                      <td style="width: 1%; text-align: right; background-color: #c8ecdd;">Bolivia</td>
                      <td style="width: 1%; text-align: right; background-color: #c8ecdd;">Prod /Tran</td>
                      <td style="width: 1%; text-align: right; background-color: #c8ecdd;">Total</td>
                      <td style="width: 1%; text-align: right;">Bolivia</td>
                      <td style="width: 1%; text-align: right;">Prod /Tran</td>
                      <td style="width: 1%; text-align: right;">Total</td>
                      <td style="width: 1%; text-align: right;">Bolivia</td>
                      <td style="width: 1%; text-align: right;">Prod /Tran</td>
                      <td style="width: 1%; text-align: right;">Total</td>
                      <td style="width: 1%; text-align: right;">Bolivia</td>
                      <td style="width: 1%; text-align: right;">Prod /Tran</td>
                      <td style="width: 1%; text-align: right;">Total</td>
                      <td style="width: 1%; text-align: right;">Bolivia</td>
                      <td style="width: 1%; text-align: right;">Prod /Tran</td>
                      <td style="width: 1%; text-align: right;">Total</td>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($resumen_stock as $det)
                  @if(is_null($det->MASTER) && is_null($det->MODELOS))
                        <tr style="font-weight: bold; background-color: #c8ecdd; color: #258c67;">
                      @else
                        @if(is_null($det->MASTER))
                         <tr style="font-weight: bold; background-color: #e2f0f6;">
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
                      <td align="right" style="font-weight: bold; color: #0c6640;">{{$det->ST_TOTAL}}</td>
                      <td align="right">{{$det->DP_BOLIVIA}}</td>
                      <td align="right">{{$det->DP_PRODUCCION}}</td>
                      <td align="right" style="font-weight: bold; color: #152b41;">{{$det->DP_TOTAL}}</td>
                      <td align="right">{{$det->IN_BOLIVIA}}</td>
                      <td align="right">{{$det->IN_PRODUCCION}}</td>
                      <td align="right" style="font-weight: bold; color: #152b41;">{{$det->IN_TOTAL}}</td>
                      <td align="right">{{$det->SC_BOLIVIA}}</td>
                      <td align="right">{{$det->SC_PRODUCCION}}</td>
                      <td align="right" style="font-weight: bold; color: #152b41;">{{$det->SC_TOTAL}}</td>
                      <td align="right">{{$det->RS_BOLIVIA}}</td>
                      <td align="right">{{$det->RS_PRODUCCION}}</td>
                      <td align="right" style="font-weight: bold; color: #152b41;">{{$det->RS_TOTAL}}</td>
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
        
  </div>       


@endsection

@section('scripts')
  <script type="text/javascript">
    
$('.mi_tabla').DataTable( { 
        "dom": "Bt",
        "buttons": [ 'copy', 'excel'],
        "ordering": false,
         "lengthMenu": [[-1], ["TODO"]]
         // "fixedHeader": true

    } );

  </script>
@endsection