@extends('layouts.main')

@section('content')

<style type="text/css">

</style>
 <!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title">
        <div class="col-md-8">
        <h3><a href="">Totalizador de modelos</a></h3>
        </div>
       
      </div>
    </div>
    <hr>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            
            <div class="clearfix" ></div>
          </div>
          <div class="x_content">

          <div class="clearfix"></div>


              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-align-left"></i> Resumen </h2>
                    
                    <ul class="nav navbar-right panel_toolbox">
                     
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-calendar fa-lg"></i></a>
                        <ul class="dropdown-menu" role="menu">
                        
                          <li><a class="fecha" onclick="fn_fechas('1');">ENERO</a></li>
                          <li><a class="fecha" onclick="fn_fechas('2');">FEBRERO</a></li>
                          <li><a class="fecha" onclick="fn_fechas('3');">MARZO</a></li>
                          <li><a class="fecha" onclick="fn_fechas('4');">ABRIL</a></li>
                          <li><a class="fecha" onclick="fn_fechas('5');">MAYO</a></li>
                          <li><a class="fecha" onclick="fn_fechas('6');">JUNIO</a></li>
                          <li><a class="fecha" onclick="fn_fechas('7');">JULIO</a></li>
                          <li><a class="fecha" onclick="fn_fechas('8');">AGOSTO</a></li>
                          <li><a class="fecha" onclick="fn_fechas('9');">SEPTIEMBRE</a></li>
                          <li><a class="fecha" onclick="fn_fechas('10');">OCTUBRE</a></li>
                          <li><a class="fecha" onclick="fn_fechas('11');">NOVIEMBRE</a></li>
                          <li><a class="fecha" onclick="fn_fechas('12');">DICIEMBRE</a></li>
                          <li><a class="fecha" onclick="fn_fechas('13');">ANUAL</a></li>
                          <li><a data-toggle="modal" href="#myModal">PERSONALIZADO</a></li>
                        </ul>
                      </li>
                      <li><a onclick="ejecutar_resumen();" title="Actualizar"><i class="fa fa-refresh fa-lg"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <div class="tabla_resumen">
                      
                    </div>  
                              
                  </div>
                </div>
              </div>


              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Seleccione una fecha</h4>
                      <div class="clearfix"></div>
                    </div>
                   
                    <div class="modal-body">
                      <div class="clearfix"></div>
                        <div class="form-group fecha">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" >Fecha</label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" style="width: 100%" name="fecha1"  class="form-control fecha1" id="fecha1"/>
                           
                          </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      <button type="button" class="btn btn-primary aceptar" onclick="fn_fechas22();" data-dismiss="modal">Aceptar</button>
                    </div>
                   
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-align-left"></i> Detalle regional: </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="tabla_resumen_Regional">
                      
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@section('scripts')
<script type="text/javascript">

var desc_mes = null;
var desc_fecha = null;
var content = $(".tabla_resumen");

ejecutar_resumen();

function fn_fechas(mes) {
 desc_mes = mes;
 desc_fecha = null;
 ejecutar_resumen();
};


function fn_fechas22() {
 desc_mes = '14';
 desc_fecha = $("#fecha1").val();
 ejecutar_resumen();
};


function ejecutar_resumen() {
 resumen(desc_mes,desc_fecha);
 ejecutar_resumen_regional();
};

function resumen (mes,fecha){
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('trafico.totalizador_resumen')}}",
      data: {
       
        mes:mes,
        fecha:fecha
      },
      success: function(dataResult)
      {
        // console.log(dataResult);
        content.html(dataResult);
        
      }
    });
  };


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
    })





var desc_regional = '';
var content_r = $(".tabla_resumen_Regional");
 // desc_fecha_r = $("#fecha1").val();

function fn_regional(regional) {
  desc_regional = regional;
  ejecutar_resumen_regional()
};


function ejecutar_resumen_regional() {
 resumen_reg(desc_mes,desc_fecha,desc_regional);
};

function resumen_reg (mes,fecha,regional){
  $.ajax({
    type: "GET",
    cache: false,
    dataType: "html",
    url: "{{ route('trafico.totalizador_resumen_regional')}}",
    data: {
      mes:mes,
      regional:regional,
      fecha:fecha
    },
    success: function(dataResult)
    {
      content_r.html(dataResult);
    }
  });
};

$('.tabla_g').DataTable( { 
        "dom": "Bt",
        "buttons": [ 'copy', 'excel'],
        "ordering": false,
         "lengthMenu": [[-1], ["TODO"]]


    } );




</script>
                        
@endsection

