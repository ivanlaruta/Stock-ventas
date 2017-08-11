@extends('layouts.main')

@section('content')

<style type="text/css">

.bold
{
    font-weight: bold;
}
.green2
{
    color: #145d66;
}
.purple
{
    color: #4b3a52;
}
.blue
{
    color: #455c73;
}
.bg-default
{
  background-color: #73879c; 
}
.bg-green2
{
    background-color: #145d66;
}
.bg-purple1
{
    background-color: #4b3a52;
}
.bg-blue1
{
    background-color: #455c73;
}


.select_style
{
  -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;

  width: 268px;
  padding: 5px;
 
  
  color: #73879c;
  overflow: hidden;
  border: solid 1px #b2bfcc;
}
</style>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>
        METAS TOYOTA
      </h3>
      </div>
      
      <div class="title_right">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <select class="select_style " data-width="100%" option="LA PAZ" name="REGIONAL" id="REGIONAL" >
              <option value="TODOS">SELECCIONE UNA REGIONAL</option>
              <option value="TODOS">TODAS LAS REGIONALES</option>
              @foreach($ubica as $ub)
                <option value="{{$ub->REGIONAL}}" >
                 {{$ub->REGIONAL}} 
                 </option>                
              @endforeach
            </select>
        </div>
      
        <div class="col-md-6 col-sm-12 col-xs-12">
            <select class="select_style " data-width="100%" option="LA PAZ" name="REGIONAL" id="REGIONAL" >
              <option value="TODOS">SELECCIONE UNA MARCA</option>
              <option value="TODOS">TODAS LAS MARCAS</option>
              @foreach($marcas as $mar)
                <option value="{{$mar->MARCA}}" >
                 {{$mar->MARCA}} 
                 </option>                
              @endforeach
            </select>
        </div>
      </div>
    </div>        
    
    <hr>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>LA PAZ  <small>ANUAL </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <select class="select_style" data-width="100%" option="LA PAZ" name="REGIONAL" id="REGIONAL" >
                <option value="TODOS">SELECCIONE UN PERIODO</option>
                <option value="TODOS">ANUAL</option>
                <option value="TODOS">1° SEMESTRE</option>
                <option value="TODOS">2° SEMESTRE</option>
                @foreach($peri as $per)
                  <option value="{{$per->periodo}}" >
                   {{$per->periodo}} 
                   </option>                
                @endforeach
              </select>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="col-md-12">               
              <div class="col-md-3 col-sm-6 col-xs-12 sidebar-widget" align="center">
                <h4 class=""> <strong>COTIZACIONES </strong> </h4>
                <span class="gauge-value "><strong class="">Actual: </strong>{{$TOTALES->real_cotizaciones}} Cotizaciones</span><br>
                <span class="gauge-value "><strong class="">Meta  : </strong>{{$TOTALES->meta_cotizaciones}} Cotizaciones</span><br>
                <canvas width="180" height="120" id="gauge_cotizados" class="" ></canvas>
                <div class="goal-wrapper goal-cotizados">
                  <span id="gauge-text-cotizados" class="gauge-value gauge-chart ">0</span>
                  <span class="gauge-value ">%</span>
                </div>
              </div>  
               <div class="col-md-3 col-sm-6 col-xs-12 sidebar-widget" align="center">
                <h4 class="blue"><strong>TEST DRIVE </strong> </h4>
                <span class="gauge-value  "><strong class="blue">Actual: </strong>{{$TOTALES->real_test_drive}} Test's</span><br>
                <span class="gauge-value  "><strong class="blue">Meta  : </strong>{{$TOTALES->meta_test_drive}} Test's</span><br>
                <canvas width="180" height="120" id="gauge_test" class="" ></canvas>
                <div class="goal-wrapper goal-test">
                  <span id="gauge-text-test" class="gauge-value gauge-chart ">0</span>
                  <span class="gauge-value ">%</span>
                </div>
              </div>             
              <div class="col-md-3 col-sm-6 col-xs-12 sidebar-widget" align="center">
                <h4 class="green2"> <strong>RESERVAS </strong> </h4>
                <span class="gauge-value "><strong class="green2">Actual: </strong>{{$TOTALES->real_reservas}} Reservas</span><br>
                <span class="gauge-value "><strong class="green2">Meta  : </strong>{{$TOTALES->meta_reservas}} Reservas</span><br>
                <canvas width="180" height="120" id="gauge_reservados" class="" ></canvas>
                <div class="goal-wrapper goal-reservados">
                  <span id="gauge-text-reservados" class="gauge-value gauge-chart ">0</span>
                  <span class="gauge-value ">%</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 sidebar-widget" align="center">
                <h4 class="purple"><strong>FACTURAS </strong> </h4>
                <span class="gauge-value  "><strong class="purple">Actual: </strong>{{$TOTALES->real_facturados}} Facturados</span><br>
                <span class="gauge-value  "><strong class="purple">Meta  : </strong>{{$TOTALES->meta_facturados}} Facturados</span><br>
                <canvas width="180" height="120" id="gauge_facturados" class="" ></canvas>
                <div class="goal-wrapper goal-facturados">
                  <span id="gauge-text-facturados" class="gauge-value gauge-chart ">0</span>
                  <span class="gauge-value ">%</span>
                </div>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </div>    

    <div class="row">

      @foreach($SUCURSALES as $suc)

      
              <div class="col-md-12 col-sm-12 col-xs-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{ $suc-> SUCURSAL }}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-xs-12 bg-white progress_summary">
                        
                        <div class="row">
                          <div class="progress_title">
                            <span class="left bold">COTIZACIONES</span>
                            <div class="clearfix"></div>
                          </div>
                          <div class="col-xs-2 col-lg-offset-2">
                            <strong>Actual: </strong><span> {{-- {{ $suc-> REAL_UNIDADES }}  --}}Cotizaciones</span>
                            <br>
                            <strong>Meta : </strong><span> {{-- {{ $suc-> META_UNIDADES }} --}} Cotizaciones</span> 
                          </div>
                          <div class="col-xs-7">
                            <div class="progress progress_sm">
                              <div class="progress-bar progress-bar-striped active bg-default" role="progressbar" data-transitiongoal="{{number_format(50,2, '.', ',')}}"></div>
                            </div>
                          </div>
                          <div class="col-xs-1 more_info">
                            <span class="bold">{{number_format(50,2, '.', ',')}}%</span>
                          </div>
                        </div>

                        <div class="row">
                          <div class="progress_title">
                            <span class="left bold blue">TEST DRIVE</span>
                            <div class="clearfix"></div>
                          </div>
                          <div class="col-xs-2 col-lg-offset-2">
                            <strong class="blue">Actual: </strong><span>{{--  {{number_format( $suc-> REAL_MONTO ,2, '.', ',')}} --}} Test's</span>
                            <br>
                            <strong class="blue">Meta : </strong><span> {{-- {{number_format( $suc-> META_MONTOS ,2, '.', ',')}} --}} Test's</span> 
                          </div>
                          <div class="col-xs-7">
                            <div class="progress progress_sm">
                              <div class="progress-bar progress-bar-striped active bg-blue1" role="progressbar" data-transitiongoal="{{number_format(50,2, '.', ',')}}"></div>
                            </div>
                          </div>
                          <div class="col-xs-1 more_info">
                            <span class="blue bold">{{number_format(50,2, '.', ',')}}%</span>
                          </div>
                        </div>

                        <div class="row">
                          <div class="progress_title">
                            <span class="left bold green2">RESERVAS</span>
                            <div class="clearfix"></div>
                          </div>
                          <div class="col-xs-2 col-lg-offset-2">
                            <strong class="green2">Actual: </strong><span> {{-- {{ $suc-> REAL_UNIDADES }} --}} Reservas</span>
                            <br>
                            <strong class="green2">Meta : </strong><span>{{--  {{ $suc-> META_UNIDADES }} --}} Reservas</span> 
                          </div>
                          <div class="col-xs-7">
                            <div class="progress progress_sm">
                              <div class="progress-bar progress-bar-striped active bg-green2" role="progressbar" data-transitiongoal="{{number_format(50,2, '.', ',')}}"></div>
                            </div>
                          </div>
                          <div class="col-xs-1 more_info">
                            <span class="green2 bold">{{number_format(50,2, '.', ',')}}%</span>
                          </div>
                        </div>

                        <div class="row">
                          <div class="progress_title">
                            <span class="left bold purple">FACTURAS</span>
                            <div class="clearfix"></div>
                          </div>
                          <div class="col-xs-2 col-lg-offset-2">
                            <strong class="purple">Actual: </strong><span> {{-- {{number_format( $suc-> REAL_MONTO ,2, '.', ',')}} --}} Facturados</span>
                            <br>
                            <strong class="purple">Meta : </strong><span> {{-- {{number_format( $suc-> META_MONTOS ,2, '.', ',')}} --}} Facturados</span> 
                          </div>
                          <div class="col-xs-7">
                            <div class="progress progress_sm">
                              <div class="progress-bar progress-bar-striped active bg-purple1" role="progressbar" data-transitiongoal="{{number_format(50,2, '.', ',')}}"></div>
                            </div>
                          </div>
                          <div class="col-xs-1 more_info">
                            <span class="purple bold">{{number_format(50,2, '.', ',')}}%</span>
                          </div>
                        </div>

                    </div>
                  </div>
                </div>
              </div>

      @endforeach
    </div>
  </div>
</div>




@endsection

@section('scripts')
    <!-- Chart.js -->
    <script src="{{asset('bower_components/gentelella/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- jQuery Sparklines -->
    <script src="{{asset('bower_components/gentelella/vendors/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <!-- morris.js -->
    <script src="{{asset('bower_components/gentelella/vendors/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('bower_components/gentelella/vendors/morris.js/morris.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('bower_components/gentelella/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('bower_components/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('bower_components/gentelella/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('bower_components/gentelella/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('bower_components/gentelella/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('bower_components/gentelella/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('bower_components/gentelella/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('bower_components/gentelella/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('bower_components/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('bower_components/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('bower_components/gentelella/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('bower_components/gentelella/vendors/DateJS/build/date.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('bower_components/gentelella/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('bower_components/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<script type="text/javascript">
var opts_green = {
  lines: 12,
      angle: 0.0,
      lineWidth: 0.4,
      pointer: {
        length: 0.75,
        strokeWidth: 0.042,
        color: '#2a3f54'
      },
      limitMax: 'false',
      colorStart: '#1ABC9C',
      colorStop: '#1ABC9C',
      strokeColor: '#F0F3F3',
      generateGradient: true
};

var opts_gray = {
  lines: 12,
      angle: 0.0,
      lineWidth: 0.4,
      pointer: {
        length: 0.75,
        strokeWidth: 0.042,
        color: '#2a3f54'
      },
      limitMax: 'false',
      colorStart: '#73879c',
      colorStop: '#73879c',
      strokeColor: '#F0F3F3',
      generateGradient: true
};

var opts_green_2 = {
  lines: 12,
      angle: 0.0,
      lineWidth: 0.4,
      pointer: {
        length: 0.75,
        strokeWidth: 0.042,
        color: '#2a3f54'
      },
      limitMax: 'false',
      colorStart: '#145d66',
      colorStop: '#145d66',
      strokeColor: '#F0F3F3',
      generateGradient: true
};

var opts_blue = {
  lines: 12,
      angle: 0.0,
      lineWidth: 0.4,
      pointer: {
        length: 0.75,
        strokeWidth: 0.042,
        color: '#2a3f54'
      },
      limitMax: 'false',
      colorStart: '#455c73',
      colorStop: '#455c73',
      strokeColor: '#F0F3F3',
      generateGradient: true
};
var opts_purple = {
  lines: 12,
      angle: 0.0,
      lineWidth: 0.4,
      pointer: {
        length: 0.75,
        strokeWidth: 0.042,
        color: '#2a3f54'
      },
      limitMax: 'false',
      colorStart: '#4b3a52',
      colorStop: '#4b3a52',
      strokeColor: '#F0F3F3',
      generateGradient: true
};

var real_cotizaciones = '<?php echo $TOTALES->real_cotizaciones; ?>' *1;
var meta_cotizaciones = '<?php echo $TOTALES->meta_cotizaciones; ?>'*1;

var real_test_drive = '<?php echo $TOTALES->real_test_drive; ?>' *1;
var meta_test_drive = '<?php echo $TOTALES->meta_test_drive; ?>'*1;

var real_reservas = '<?php echo $TOTALES->real_reservas; ?>' *1;
var meta_reservas = '<?php echo $TOTALES->meta_reservas; ?>'*1;

var real_facturados = '<?php echo $TOTALES->real_facturados; ?>' *1;
var meta_facturados = '<?php echo $TOTALES->meta_facturados; ?>'*1;

if(real_cotizaciones>=meta_cotizaciones) 
{
  var max_real_cotizaciones= (real_cotizaciones *100)/meta_cotizaciones;
  var set_real_cotizaciones= (real_cotizaciones *100)/meta_cotizaciones;
  $(".goal-cotizados").addClass("red bold animated infinite tada ");
  alert()
}
else
{
  var set_real_cotizaciones= (real_cotizaciones *100)/meta_cotizaciones;
  var max_real_cotizaciones=100;
}

if(real_test_drive>=meta_test_drive )
{
  var set_real_test_drive=(real_test_drive*100)/meta_test_drive;
  var max_real_test_drive=(real_test_drive*100)/meta_test_drive;
  $(".goal-test").addClass("red bold animated infinite tada ");
}
else
{
  var set_real_test_drive=(real_test_drive*100)/meta_test_drive;
  var max_real_test_drive=100;
}
if(real_reservas>=meta_reservas) 
{
  var max_real_reservas= (real_reservas *100)/meta_reservas;
  var set_real_reservas= (real_reservas *100)/meta_reservas;
  $(".goal-reservados").addClass("red bold animated infinite tada ");
}
else
{
  var set_real_reservas= (real_reservas *100)/meta_reservas;
  var max_real_reservas=100;
}

if(real_facturados>meta_facturados )
{
  var set_real_facturados=(real_facturados*100)/meta_facturados;
  var max_real_facturados=(real_facturados*100)/meta_facturados;
  $(".goal-facturados").addClass("red bold animated infinite tada ");
}
else
{
  var set_real_facturados=(real_facturados*100)/meta_facturados;
  var max_real_facturados=100;
}

var target_cotizados = document.getElementById('gauge_cotizados'); // your canvas element
var gauge_cotizados = new Gauge(target_cotizados).setOptions(opts_gray); // create sexy gauge!
gauge_cotizados.maxValue = max_real_cotizaciones; // set max gauge_cotizados value
gauge_cotizados.setMinValue(0);  // set min value
gauge_cotizados.animationSpeed = 100;
gauge_cotizados.set(set_real_cotizaciones); // set actual value
gauge_cotizados.setTextField(document.getElementById("gauge-text-cotizados"));

var target_test = document.getElementById('gauge_test'); // your canvas element
var gauge_test = new Gauge(target_test).setOptions(opts_blue); // create sexy gauge!
gauge_test.maxValue =max_real_test_drive; // set max gauge_test value
gauge_test.setMinValue(0);  // set min value
gauge_test.animationSpeed = 100;
gauge_test.set(set_real_test_drive); // set actual value
gauge_test.setTextField(document.getElementById("gauge-text-test"));

var target_reservados = document.getElementById('gauge_reservados'); // your canvas element
var gauge_reservados = new Gauge(target_reservados).setOptions(opts_green_2); // create sexy gauge!
gauge_reservados.maxValue = max_real_reservas; // set max gauge_reservados value
gauge_reservados.setMinValue(0);  // set min value
gauge_reservados.animationSpeed = 100;
gauge_reservados.set(set_real_reservas); // set actual value
gauge_reservados.setTextField(document.getElementById("gauge-text-reservados"));


var target_facturados = document.getElementById('gauge_facturados'); // your canvas element
var gauge_facturados = new Gauge(target_facturados).setOptions(opts_purple); // create sexy gauge!
gauge_facturados.maxValue =max_real_facturados; // set max gauge_facturados value
gauge_facturados.setMinValue(0);  // set min value
gauge_facturados.animationSpeed = 100;
gauge_facturados.set(set_real_facturados); // set actual value
gauge_facturados.setTextField(document.getElementById("gauge-text-facturados"));

</script>
@endsection