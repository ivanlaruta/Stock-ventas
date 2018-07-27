@extends('layouts.main')

@section('content')

      <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
                  <div class="x_title">
                    
                    <div class="col-md-6">
                      <h2>
                        Reporte tiempos 
                        /
                      </h2>
                    </div>
                    <div class="col-md-6">
                      <div class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                          <input type="text"  name="fecha1"  id="fecha1"/>
                        <b class="caret"></b>
                      </div>
                      {{-- <div class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                          <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        </div> --}}
                    </div>
                    <div class="clearfix"></div>
                  </div>
          {{-- 
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count">2500</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
           --}}</div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="x_panel">

                <div class="row x_title">
                  <div class="col-md-12">
                    <h2>Tiempo de Proceso de venta  <small> Promedio</small></h2>
                  </div>
                  
                </div>

                
                <div class="col-md-12 col-sm-12 col-xs-12 bg-white">
                  <small>Tiempo medido apartir de la fecha de ingreso de unidades a bolivia hasta la fehca de nota de entrega</small>
                  <br>
                  {{-- <div class="x_title">
                    <h2>Top Campaign Performance</h2>
                    <div class="clearfix"></div>
                  </div> --}}
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <table class="table table-striped" id="datatable1">
                      <thead>
                        <tr>
                          <th>REGIONAL </th>
                          
                          <th>DIAS PROMEDIO </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($regionales as $det)                
                        
                          
                        <tr>
                          <td><a href="#">{{$det->REG_ASIGNADA}} </a></td>
                         
                          <td>{{$det->TIEMPO_PROMEDIO}} dias</td>
                          
                          
                        </tr>
                       
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                  

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
        
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="x_panel">
                <div class="row x_title">
                  <div class="col-md-12">
                    <h2>Tiempo de Proceso de venta  <small> Promedio</small></h2>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 bg-white">
                  <small>Tiempo medido apartir de la fecha de ingreso de unidades a bolivia hasta la fehca de nota de entrega</small>
                  <br>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <table class="table table-striped" id="datatable1">
                      <thead>
                        <tr>
                          <th>REGIONAL </th>
                          <th>SUCURSAL </th>
                          <th>DIAS PROMEDIO </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($sucursales as $det)                
                        <tr>
                          <td><a href="#">{{$det->REG_ASIGNADA}} </a></td>
                          <td><a href="#">{{$det->SUCURSAL}} </a></td>
                          <td>{{$det->TIEMPO_PROMEDIO}} dias</td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="x_panel">
                <div class="row x_title">
                  <div class="col-md-12">
                    <h2>Tiempo de Proceso de venta  <small> Promedio</small></h2>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 bg-white">
                  <small>Tiempo medido apartir de la fecha de ingreso de unidades a bolivia hasta la fehca de nota de entrega</small>
                  <br>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <table class="table table-striped" id="datatable1">
                      <thead>
                        <tr>
                          <th>REGIONAL </th>
                          <th>SUCURSAL </th>
                          <th>VENDEDOR </th>
                          <th>DIAS PROMEDIO </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($vendedores as $det)                
                        <tr>
                          <td><a href="#">{{$det->REG_ASIGNADA}} </a></td>
                          <td><a href="#">{{$det->SUCURSAL}} </a></td>
                          <td><a href="#">{{$det->VENDEDOR}} </a></td>
                          <td>{{$det->TIEMPO_PROMEDIO}} dias</td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <br />
        
        </div>
      </div>

@endsection

@section('scripts')
  <script type="text/javascript">
    
    $(function() {
        $('input[name="fecha1"]').daterangepicker({
          "maxDate": moment(),
          "locale": {
            "format": "DD/MM/YYYY",
            "separator": " - ",
            "applyLabel": "Aceptar",
            "cancelLabel": "Cancelar",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "daysOfWeek": [
            "Do",
            "Lu",
            "Ma",
            "Mi",
            "Ju",
            "Vi",
            "Sa"
            ],
            "monthNames": [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre"
            ],
            "firstDay": 1
          }
        })
      });
  </script>
@endsection