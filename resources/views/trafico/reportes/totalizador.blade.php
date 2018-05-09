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
                        
                          <li><a href="#" class="fecha" onclick="fn_fechas('1');">ENERO</a></li>
                          <li><a href="#" class="fecha" onclick="fn_fechas('2');">FEBRERO</a></li>
                          <li><a href="#" class="fecha" onclick="fn_fechas('3');">MARZO</a></li>
                          <li><a href="#" class="fecha" onclick="fn_fechas('4');">ABRIL</a></li>
                          <li><a href="#" class="fecha" onclick="fn_fechas('5');">MAYO</a></li>
                          <li><a href="#" class="fecha" onclick="fn_fechas('6');">JUNIO</a></li>
                          <li><a href="#" class="fecha" onclick="fn_fechas('7');">JULIO</a></li>
                          <li><a href="#" class="fecha" onclick="fn_fechas('8');">AGOSTO</a></li>
                          <li><a href="#" class="fecha" onclick="fn_fechas('9');">SEPTIEMBRE</a></li>
                          <li><a href="#" class="fecha" onclick="fn_fechas('10');">OCTUBRE</a></li>
                          <li><a href="#" class="fecha" onclick="fn_fechas('11');">NOVIEMBRE</a></li>
                          <li><a href="#" class="fecha" onclick="fn_fechas('12');">DICIEMBRE</a></li>
                          <li><a href="#" class="fecha" onclick="fn_fechas('13');">ANUAL</a></li>
                          
                          <li><a data-toggle="modal" href="#myModal">PERSONALIZADO</a></li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-map-marker fa-lg"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#" onclick="fn_regional('SANTA CRUZ');">SANTA CRUZ</a></li>
                          <li><a href="#" onclick="fn_regional('LA PAZ');">LA PAZ</a></li>
                          <li><a href="#" onclick="fn_regional('COCHABAMBA');">COCHABAMBA</a></li>
                          <li><a href="#" onclick="fn_regional('ORURO');">ORURO</a></li>
                          <li><a href="#" onclick="fn_regional('POTOSI');">POTOSI</a></li>
                          <li><a href="#" onclick="fn_regional('TODAS');">TODAS</a></li>
                        </ul>
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
                    <h2><i class="fa fa-align-left"></i> Detalle: </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <small>Totalizador todos de modelos</small>
                  <small>Anual</small>
                  <small>Toda Bolivia</small>

                    <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                        <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                          <h4 class="panel-title">Collapsible Group Item #1</h4>
                        </a>
                        <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Username</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                          <h4 class="panel-title">Collapsible Group Item #2</h4>
                        </a>
                        <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            <p><strong>Collapsible Item 2 data</strong>
                            </p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingThree1" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
                          <h4 class="panel-title">Collapsible Group Item #3</h4>
                        </a>
                        <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                            <p><strong>Collapsible Item 3 data</strong>
                            </p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                          </div>
                        </div>
                      </div>
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
var desc_reg = 'TODOS';
var desc_suc ;
var desc_fecha = null;
var content = $(".tabla_resumen");

ejecutar_resumen();

function fn_fechas(mes) {
 desc_mes = mes;
 desc_fecha = null;
 ejecutar_resumen();
};

function fn_regional(regional) {
 desc_reg = regional;
 ejecutar_resumen();
};

function fn_fechas22() {
 desc_mes = '14';
 desc_fecha = $("#fecha1").val();
 ejecutar_resumen();
};




function ejecutar_resumen() {
 resumen(desc_reg,desc_mes,desc_fecha);
};

function resumen (regional,mes,fecha){
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('trafico.totalizador_resumen')}}",
      data: {
        regional: regional,
        mes:mes,
        fecha:fecha
      },
      success: function(dataResult)
      {
        console.log(dataResult);
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
    });
</script>
                        
@endsection

