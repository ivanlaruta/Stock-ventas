@extends('layouts.main')

@section('content')
      <div class="right_col" role="main">
          <div class="row tile_count">
              <div class="x_title">
                <div class="col-md-6">
                  <h2> Tiempos proceso de venta </h2>
                </div>
                <div class="col-md-6">
                  <div id="fecha" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                    Nota Entrega:
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    <span></span> <b class="caret"></b>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <small>Tiempo medido apartir de la cotizacion hasta la fecha de nota de entrega  ** (Informacion disponible desde mayo de 2018)</small>
              <div id='loadingDiv' align="center">
                <h4>Estamos preparando su informacion por favor espere ... </h4>
               <i class="fa fa-spinner fa-spin fa-7x" style="font-size:40px"></i>
              </div>
          </div>
          <div class="row contenido" id="contenido"></div>
      </div>
@endsection
@section('scripts')
<script type="text/javascript">
    

//----------------- PARAMETRIZACION INICIAL ----------------------

var loading = $('#loadingDiv').hide();

$(document)
  .ajaxStart(function () {

    loading.show();
  })
  .ajaxStop(function () {
    loading.hide();
  });

var pantalla = 'nacional'
var regional = ' '
var sucursal = ' '
var vendedor = ' '
var  desc_fecha = ''
// --------------------- CALENDARIO--------------------

    
      var cb1 = function(start, end, label) {
        desc_fecha = start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY');
        generar(desc_fecha,regional,sucursal,vendedor,pantalla);

        // console.log(start.toISOString(), end.toISOString(), label);
        $('#fecha span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
      };

      var optionSet1 = {
        
        format: 'DD/MM/YYYY',

        startDate:moment().startOf('month'),
        endDate: moment(),
        minDate: '01/05/2018',
        maxDate: moment(),

        ranges: {
        'Hoy': [moment(), moment()],
        'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Ultimos 7 Dias': [moment().subtract(6, 'days'), moment()],
        'Ultimos 30 Dias': [moment().subtract(29, 'days'), moment()],
        'Este Mes': [moment().startOf('month'), moment().endOf('month')],
        'Pasado Mes': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',

        
        separator: ' - ',
        locale: {
        format: 'DD/MM/YYYY',
        applyLabel: 'Aceptar',
        cancelLabel: 'Cancelar',
        fromLabel: 'From',
        toLabel: 'To',
        customRangeLabel: 'Personalizado',
        daysOfWeek: [ 'Do','Lu','Ma','Mi','Ju','Vi','Sa' ],
          monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre', 'Diciembre' ],
        firstDay: 1
        }
      };
      
       $('#fecha span').html(moment().startOf('month').format('DD/MM/YYYY') + ' - ' + moment().format('DD/MM/YYYY'));
       $('#fecha').daterangepicker(optionSet1, cb1);



// -------------- generacion ajax y funciones de llamada a controlador





var indicadores = $(".indicadores");
var contenido = $(".contenido");

  desc_fecha = $("#fecha span").html();





    generar(desc_fecha,regional,sucursal,vendedor,pantalla);


  function generar(fec,reg,suc,vend,pant) {
    document.body.scrollTop = 0;
    pantalla = pant;
    regional = reg;
    sucursal = suc;
    vendedor = vend;
    fecha = fec;

    console.log(desc_fecha);
    loading.show();
    indicadores.hide();
    contenido.hide();
    reporte(fecha,regional,sucursal,vendedor,pantalla);
  };

  function reporte (fecha,regional,sucursal,vendedor,reporte){
      $.ajax({
        type: "GET",
        cache: false,
        dataType: "html",
        url: "{{ route('tiempos.reporte')}}",
        data: {
          fecha:fecha,
          regional:regional,
          sucursal:sucursal,
          vendedor:vendedor,
          pantalla:reporte
        },
        success: function(dataResult)
        {
          // console.log(dataResult);
          loading.hide();
          contenido.show();
          contenido.html(dataResult);
          
        },
      error: function(jqXHR, exception)
      {
        var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }
        alert(msg);
        NProgress.done();
      }
      });
    };


  </script>
@endsection