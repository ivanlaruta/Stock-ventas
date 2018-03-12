@extends('layouts.main')

@section('content')
<link href="/path/to/c3.css" rel="stylesheet">



<style type="text/css">
.table .progress {
margin-bottom: 0px;
}

  .color-0{
    color: #26B99A;
    background: #26B99A;
  }
  .color-3{
    color: #ACADAC;
    background: #ACADAC;
  }
  .color-1{
    color: #3498DB;
    background: #3498DB;
  }
  .color-2{
    color: #34495E;
    background: #34495E;
  }
  .color-4{
    color: #145d66;
    background: #145d66;
  }
  .color-5{
    color: #4b3a52;
    background: #4b3a52;
  }
  .color-6{
    color: #455c73;
    background: #455c73;
  }
  .color-7{
    color: #8e5ea2;
    background: #8e5ea2;
  }

  .x_title span {
    color: #73879C;
  }

a:visited {
    color: #26B99A;
}

/* mouse over link */
a:hover {
    color: #26B99A;
}

.tabs-right > li > a.peque {
    border-radius: 0 4px 4px 0;
    height: 24px;
    padding: 4px;
    text-align: right;
    font-size: 12px;
}

.c3-region.regionX {
  fill: #069f7f;
}

</style>
        <div class="right_col" role="main">
          <div class="">
            <div class="row tile_count" align="center">
              <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
                <span class="count_top"> COTIZACIONES </span>
                <div class="count">{{$total_cotizaciones}}</div>
                <span class="count_bottom">Total gestion: <i class="red">{{$año_actual}} </i></span>             
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
                <span class="count_top"> TEST DRIVE </span>
                <div class="count">{{intval($total_cotizaciones*0.30)}}</div>
                <span class="count_bottom">Total gestion: <i class="red">{{$año_actual}} </i></span>    
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
                <span class="count_top"> RESERVAS </span>
                <div class="count ">{{$total_reservas}}</div>
                <span class="count_bottom">Total gestion: <i class="red">{{$año_actual}} </i></span>  
              </div>
              <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
                <span class="count_top"> FACTURAS </span>
                <div class="count green">{{$total_facturas}}</div>
                <span class="count_bottom">Total gestion: <i class="red">{{$año_actual}} </i></span>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> PROCESO MENSUAL <small>{{$año_actual}}</small></h2>
                      <span class="pull-right">
                      <a href="javascript:;" class="area" ><i class="fa fa-area-chart"></i></a>
                      <a href="javascript:;" class="line"><i class="fa fa-line-chart"></i></a>
                      <a href="javascript:;" class="bar"><i class="fa fa-bar-chart"></i></a>
                      </span>
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content " >
                    <div id="container" align="center" style=" display: inline-block; color: #fff;"></div>
                    <div  id="chart"></div>
                    <div  id="chart-bar"></div>
                    <div  id="chart-line"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-line-chart"></i> FACTURADO POR MES<small>{{$año_actual}}</small></h2>
                      <span class="pull-right">
                      <a href="javascript:;" class="area_bs" ><i class="fa fa-area-chart"></i></a>
                      <a href="javascript:;" class="line_bs"><i class="fa fa-line-chart"></i></a>
                      <a href="javascript:;" class="bar_bs"><i class="fa fa-bar-chart"></i></a>
                      </span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="chart_facturado"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bar-chart"></i> PROCESOS POR MARCA <small>{{$año_actual}}</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-xs-3">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs tabs-left">
                        <li class="active"><a href="#home" data-toggle="tab">Facturas</a>
                        </li>
                        <li><a href="#profile" data-toggle="tab">Reservas</a>
                        </li>
                        <li><a href="#messages" data-toggle="tab">Test drive</a>
                        </li>
                        <li><a href="#settings" data-toggle="tab">Cotizaciones</a>
                        </li>
                      </ul>
                    </div>

                    <div class="col-xs-9">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="home">
                          <div id="chart_facturas"></div>
                        </div>
                        <div class="tab-pane" id="profile">
                          <div id="chart_reservas"></div>
                        </div>
                        <div class="tab-pane" id="messages">
                          <div id="chart_test"></div>
                        </div>
                        <div class="tab-pane" id="settings">
                          <div id="chart_cotiza"></div>
                        </div>
                      </div>
                    </div>

                    <div class="clearfix"></div>

                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-pie-chart"></i> PROCESOS POR REGIONAL <small>{{$año_actual}}</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-xs-9">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="home-r">
                          <div id="donut_facturas"></div>
                        </div>
                        <div class="tab-pane" id="profile-r">
                          <div id="donut_reservas"></div>
                        </div>
                        <div class="tab-pane" id="messages-r">
                          <div id="donut_test"></div>
                        </div>
                        <div class="tab-pane" id="settings-r">
                          <div id="donut_cotiza"></div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-3">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs tabs-right">
                        <li class="active"><a href="#home-r" data-toggle="tab">Facturas</a>
                        </li>
                        <li><a href="#profile-r" data-toggle="tab">Reservas</a>
                        </li>
                        <li><a href="#messages-r" data-toggle="tab">Test drive</a>
                        </li>
                        <li><a href="#settings-r" data-toggle="tab">Cotizaciones</a>
                        </li>
                      </ul>
                    </div>

                  </div>

                </div>
              </div>
            </div>

<div class="row">{{-- 
  <div class="col-md-6 col-sm-6 col-xs-12">
  </div>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
          <h2><i class="fa fa-tachometer"></i> METAS POR MES <small>{{$año_actual}}</small></h2>
          <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="col-xs-9">
          <div class="tab-content">
            <div class="tab-pane active" id="taco">
              <div id="tacometro"></div>
            </div>
          </div>
        </div>
        <div class="col-xs-3">
          <ul class="nav nav-tabs tabs-right">
            @if($mes>=12)<li @if($mes ==12) class="active" @endif><a href="#taco" data-toggle="tab" class="peque">Diciembre</a></li>@endif
            @if($mes>=11)<li @if($mes ==11) class="active" @endif><a href="#taco" data-toggle="tab" class="peque">Noviembre</a></li>@endif
            @if($mes>=10)<li @if($mes ==10) class="active" @endif><a href="#taco" data-toggle="tab" class="peque">Octubre</a></li>@endif
            @if($mes>=9)<li @if($mes ==9) class="active" @endif><a href="#taco" data-toggle="tab" class="peque">Septiembre</a></li>@endif
            @if($mes>=8)<li @if($mes ==8) class="active" @endif><a href="#taco" data-toggle="tab" class="peque">Agosto</a></li>@endif
            @if($mes>=7)<li @if($mes ==7) class="active" @endif><a href="#taco" data-toggle="tab" class="peque">Julio</a></li>@endif
            @if($mes>=6)<li @if($mes ==6) class="active" @endif><a href="#taco" data-toggle="tab" class="peque">Junio</a></li>@endif
            @if($mes>=5)<li @if($mes ==5) class="active" @endif><a href="#taco" data-toggle="tab" class="peque">Mayo</a></li>@endif
            @if($mes>=4)<li @if($mes ==4) class="active" @endif><a href="#taco" data-toggle="tab" class="peque">Abril</a></li>@endif
            @if($mes>=3)<li @if($mes ==3) class="active" @endif><a href="#taco" data-toggle="tab" class="peque">Marzo</a></li>@endif
            @if($mes>=2)<li @if($mes ==2) class="active" @endif><a href="#taco" data-toggle="tab" class="peque">Febrero</a></li>@endif
            @if($mes>=1)<li @if($mes ==1) class="active" @endif><a href="#taco" data-toggle="tab" class="peque">Enero</a></li>@endif
          </ul>
        </div>
      </div>
    </div>
  </div>
 --}}</div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><i class="fa fa-line-chart"></i> FLUJO DIARIO<small>{{$año_actual}}</small></h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div id="chart_diario"></div>
      </div>
    </div>
  </div>
</div>
            
    </div>
  </div>
      
@endsection

@section('scripts')

    <!-- Load d3.js and c3.js -->
    <script src="{{asset('bower_components/d3/d3.min.js')}}"></script>
    <script src="{{asset('bower_components/c3/c3.min.js')}}"></script>
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
$(document).ready(function($) {



  var chart = c3.generate({
    bindto: '#tacometro',
    data: {
        columns: [
            ['data',4]
        ],
        type: 'gauge'
        
    },
   
    color: {
        pattern: ['#069f7f']
    }
});



var grupo =['YAMAHA','HINO','LEXUS','KUBOTA','DAIHATSU','VOLVO'];
var b_colores = {TOYOTA: '#26B99A', YAMAHA: '#ACADAC', HINO: '#3498DB', LEXUS: '#34495E', KUBOTA: '#145d66', DAIHATSU: '#4b3a52', VOLVO: '#8e5ea2',} ;

var barras_cotiza = [];
var datos_cotiza_marca  = <?php echo json_encode($cotizaciones_por_marca); ?>;
for (var i = 0; i < datos_cotiza_marca.length; i++) {
  var data_temp = [];
  data_temp.push(datos_cotiza_marca[i].MARCA.trim()) ;
  data_temp.push(datos_cotiza_marca[i].COTIZACIONES) ;
  barras_cotiza.push(data_temp);
}

var barras_test = [];
var datos_test_marca  = <?php echo json_encode($cotizaciones_por_marca); ?>;
for (var i = 0; i < datos_test_marca.length; i++) {
  var data_temp = [];
  data_temp.push(datos_test_marca[i].MARCA.trim()) ;
  data_temp.push(Math.round(datos_test_marca[i].COTIZACIONES*0.30)) ;
  barras_test.push(data_temp);
}

var barras_reservas = [];
var datos_reservas_marca  = <?php echo json_encode($reservas_por_marca); ?>;
for (var i = 0; i < datos_reservas_marca.length; i++) {
  var data_temp = [];
  data_temp.push(datos_reservas_marca[i].MARCA.trim()) ;
  data_temp.push(datos_reservas_marca[i].RESERVADOS) ;
  barras_reservas.push(data_temp);
}

var barras_facturas = [];
var datos_facturas_marca  = <?php echo json_encode($facturas_por_marca); ?>;
for (var i = 0; i < datos_facturas_marca.length; i++) {
  var data_temp = [];
  data_temp.push(datos_facturas_marca[i].MARCA.trim()) ;
  data_temp.push(datos_facturas_marca[i].FACTURADOS) ;
  barras_facturas.push(data_temp);
}


function grafico_barras (div,data,b_colores){
  var chart = c3.generate({
      bindto: div,
      data: {
        columns: data,
          type: 'bar',
          colors: b_colores
          
      },
      axis: {
          x: {
              type: 'category',
              categories: ['cotizaciones']
          }
      }
  });
}

grafico_barras('#chart_facturas',barras_facturas,b_colores);
grafico_barras('#chart_reservas',barras_reservas,b_colores);
grafico_barras('#chart_test',barras_test,b_colores);
grafico_barras('#chart_cotiza',barras_cotiza,b_colores);



//======================     RESUMEN   =====================================
//========================================================================

var data=[];
var max =0;
var dato_cotizaciones  = <?php echo json_encode($cotizaciones); ?>;
var dato_test  = <?php echo json_encode($cotizaciones); ?>;
var dato_reservas  = <?php echo json_encode($reservas); ?>;
var dato_facturas  = <?php echo json_encode($facturas); ?>;

if(dato_cotizaciones.length>=dato_reservas.length) {max = dato_cotizaciones.length;} 
else {max = dato_cotizaciones.length;}

var colores = {COTIZACIONES: '#88baaf', TEST: '#26B99A', RESERVAS: '#1c8650', FACTURAS: '#510686'};

var data_temp_cotiza = []; var data_temp_test = []; var data_temp_reservas = []; var data_temp_facturas = [];

data_temp_cotiza[0] = 'COTIZACIONES';
data_temp_test[0] = 'TEST';
data_temp_reservas[0] = 'RESERVAS';
data_temp_facturas[0] = 'FACTURAS';

for (var i = 0; i < max; i++) 
{
  data_temp_cotiza[i+1]= dato_cotizaciones[i]? dato_cotizaciones[i].COTIZACIONES :0;
  data_temp_test[i+1]= dato_test[i]? Math.round(dato_test[i].COTIZACIONES *0.30) :0;
  data_temp_reservas[i+1]= dato_reservas[i]? dato_reservas[i].RESERVADOS :0;
  data_temp_facturas[i+1]= dato_facturas[i]? dato_facturas[i].FACTURADOS:0;
}
data.push(data_temp_cotiza,data_temp_test,data_temp_reservas,data_temp_facturas);

grafico('area-spline',data,colores);

$(".area").click(function() {
      grafico('area-spline',data,colores);
});

$(".bar").click(function() {
      grafico('bar',data,colores);
});

$(".line").click(function() {
      grafico('line',data,colores);
});

function grafico (tipo ,data,colores){
    var chart2 = c3.generate({
      bindto: '#chart-bar',
      data: {
        columns: data,
          type: tipo,
          colors: colores
      },
      axis: {
          x: {
              type: 'category',
              tick: {
                  rotate: 90,
                  multiline: false
              },
              categories: ['ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE']
          }
      }

    // title: {
    //   text: 'CANTIDAD DE PROCESOS POR MES'
    // }
  });
}


//*******///////////////////////
var colores_dona = ['#26B99A', '#ACADAC', '#3498DB', '#34495E', '#145d66', '#4b3a52', '#455c73', '#8e5ea2', '#9edae5', '#17becf', '#8c564b', '#c49c94', '#e377c2', '#f7b6d2', '#7f7f7f', '#c7c7c7', '#bcbd22', '#dbdb8d', '#17becf', '#9edae5'];


var donas_cotiza = [];
var dato_cot_reg  =  <?php echo json_encode($cotizaciones_por_reg); ?>;
for (var i = 0; i < dato_cot_reg.length; i++) {
  var data_temp = [];
  data_temp.push(dato_cot_reg[i].REGIONAL.trim()) ;
  data_temp.push(dato_cot_reg[i].COTIZACIONES) ;
  donas_cotiza.push(data_temp);
}

var donas_test = [];
var dato_test_reg  =  <?php echo json_encode($cotizaciones_por_reg); ?>;
for (var i = 0; i < dato_test_reg.length; i++) {
  var data_temp = [];
  data_temp.push(dato_test_reg[i].REGIONAL.trim()) ;
  data_temp.push(Math.round(dato_test_reg[i].COTIZACIONES*0.30)) ;
  donas_test.push(data_temp);
}

var donas_reserva = [];
var dato_res_reg  =  <?php echo json_encode($reservas_por_reg); ?>;
for (var i = 0; i < dato_res_reg.length; i++) {
  var data_temp = [];
  data_temp.push(dato_res_reg[i].REGIONAL.trim()) ;
  data_temp.push(dato_res_reg[i].RESERVADOS) ;
  donas_reserva.push(data_temp);
}

var donas_factura = [];
var dato_fac_reg  =  <?php echo json_encode($facturas_por_reg); ?>;
for (var i = 0; i < dato_fac_reg.length; i++) {
  var data_temp = [];
  data_temp.push(dato_fac_reg[i].REG_ASIGNADA.trim()) ;
  data_temp.push(dato_fac_reg[i].FACTURADOS) ;
  donas_factura.push(data_temp);
}

function grafico_donas (div,data,titulo,colores){
    var chart = c3.generate({
      bindto: div,
      data: {
          columns:data,
          type : 'donut'
      },
      donut: {
          title: titulo
          
      },
      tooltip: {
        format: {
            
            value: function (value, ratio, id) {
                var format = id === 'data1' ? d3.format(',') : d3.format('');
                return format(value);
            }
//            value: d3.format(',') // apply this format to both y and y2
        }
      },
      color: {
        pattern: colores
      }
    });
}

grafico_donas('#donut_cotiza',donas_cotiza,'cotizaciones',colores_dona);
grafico_donas('#donut_test',donas_test,'test drive',colores_dona);
grafico_donas('#donut_reservas',donas_reserva,'Reservas',colores_dona);
grafico_donas('#donut_facturas',donas_factura,'Facturas',colores_dona);



///////////////////////////////////////////////////////////////////////////////////

var data_facturado=[];
var dato_facturado = <?php echo json_encode($facturado_mes); ?>;

var data_temp_facturado = [];
data_temp_facturado[0] = 'FACTURADO (Bs)';
for (var i = 0; i < dato_facturado.length; i++) 
{
  data_temp_facturado[i+1]= dato_facturado[i].FACTUTADO;
}

data_facturado.push(data_temp_facturado);

grafico_facturado('area',data_facturado);

$(".area_bs").click(function() {
      grafico_facturado('area',data_facturado);
});

$(".bar_bs").click(function() {
      grafico_facturado('bar',data_facturado);
});

$(".line_bs").click(function() {
      grafico_facturado('line',data_facturado);
});



function grafico_facturado (tipo,data){
    var categories= ['ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE'];
    var chart2 = c3.generate({
      bindto: '#chart_facturado',
      data: {
        columns: data,
          type: tipo,
          onclick: function(e) { console.log(e); }
          
      },
      color: {
        pattern: ['#26B99A']
      },
      axis: {
          x: {
              type: 'category',
              tick: {
                  rotate: 90,
                  multiline: false
              },
              categories:categories
          },
          y : {
            tick: {
                format: function (d) { return "Bs " + d; }
            }
          }
      },
      legend: {
        show: false
      },
      tooltip: {
        format: {
            title: function (d) { return  categories[d]; },
            value: function (value, ratio, id) {
                var format = id === 'FACTURADO (Bs)' ? d3.format(',') : d3.format('');
                return format(value);
            }
        }
    },
    title: {
      text: 'MONTOS FACTURADOS POR MES (Bs)'
    }
  });
}

//=====================================================================================


var data_diario=[];
var dato_diario_fac = <?php echo json_encode($fac_diarias); ?>;
var dato_diario_res = <?php echo json_encode($res_diarias); ?>;
var dato_diario_cot = <?php echo json_encode($cot_diarias); ?>;

var data_temp_diario_fac = [];
var data_temp_diario_res = [];
var data_temp_diario_cot = [];

var date = [];
var date1 = [];
var nom_dias = [];

data_temp_diario_fac[0] = 'FACTURADOS';
data_temp_diario_res[0] = 'RESERVAS';
data_temp_diario_cot[0] = 'COTIZADOS';

date[0] = 'fechas';

for (var i = 0; i < dato_diario_fac.length; i++) 
{
  data_temp_diario_fac[i+1]= dato_diario_fac[i].facturas;
  data_temp_diario_res[i+1]= dato_diario_res[i].reservas;
  data_temp_diario_cot[i+1]= dato_diario_cot[i].cotizaciones;

  date[i+1]=dato_diario_fac[i].fecha;
  date1[i]=dato_diario_fac[i].fecha;
  nom_dias[i]=dato_diario_fac[i].nom_dia;
}

data_diario.push(date,data_temp_diario_cot,data_temp_diario_res,data_temp_diario_fac);

grafico_diario(data_diario,date1,nom_dias);

function grafico_diario (data,dates,nomdias){
  
    var chart2 = c3.generate({
      bindto: '#chart_diario',
      size: {
        height: 400
      },
      data: {
        x: 'fechas',
        columns: data,
          type: 'area'
          
      },

      color: {
        pattern: ['#7db6d1','#c98849','#872fa8']
      },
      axis: {
         x: {
                type: 'timeseries',

                tick: {
                  format: function (x) {
                    if (x.getDate() === 1) {
                      return x.toLocaleDateString();
                    }
                  },
                  //count : 365,
                  //rotate : 31,
                  format: '%b '
                }
            }
      },

      regions: [
          {start: '2018-01-01', end: '2018-01-31', class: 'regionX'},
          {start: '2018-03-01', end: '2018-03-31', class: 'regionX'},
          {start: '2018-05-01', end: '2018-05-31', class: 'regionX'},
          {start: '2018-07-01', end: '2018-07-31', class: 'regionX'},
          {start: '2018-09-01', end: '2018-09-31', class: 'regionX'},
          {start: '2018-11-01', end: '2018-11-31', class: 'regionX'}
      ],
      
       subchart: {
          show: true
      },
    //   point: {
    //     show: false
    // },
    // tooltip: {
    //     format: {
    //         title: function (d) { return  d; },
    //     }
    // },
    tooltip: {
        format: {
            title: function (d) {
                var format = d3.time.format('%a %e-%m-%Y');
                return format(d)
            }
        }
    },
    zoom: {
        enabled: true
    }
  });
}

//****************************************************


});

</script>

@endsection