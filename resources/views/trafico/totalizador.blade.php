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
        <h3><a href="">CLIENTES</a></h3>
        </div>
       
      </div>
    </div>
    <hr>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            Totalizador de modelos
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
                        
                          <li><a href="#" class="fecha" descripcion="ENERO" onclick="fn_fechas('ENERO');">ENERO</a></li>
                          <li><a href="#" class="fecha" descripcion="FEBRERO" onclick="fn_fechas('FEBRERO');">FEBRERO</a></li>
                          <li><a href="#" class="fecha" descripcion="MARZO" onclick="fn_fechas('MARZO');">MARZO</a></li>
                          <li><a href="#" class="fecha" descripcion="ABRIL" onclick="fn_fechas('ABRIL');">ABRIL</a></li>
                          <li><a href="#" class="fecha" descripcion="MAYO" onclick="fn_fechas('MAYO');">MAYO</a></li>
                          <li><a href="#" class="fecha" descripcion="JUNIO" onclick="fn_fechas('JUNIO');">JUNIO</a></li>
                          <li><a href="#" class="fecha" descripcion="JULIO" onclick="fn_fechas('JULIO');">JULIO</a></li>
                          <li><a href="#" class="fecha" descripcion="AGOSTO" onclick="fn_fechas('AGOSTO');">AGOSTO</a></li>
                          <li><a href="#" class="fecha" descripcion="SEPTIEMBRE" onclick="fn_fechas('SEPTIEMBRE');">SEPTIEMBRE</a></li>
                          <li><a href="#" class="fecha" descripcion="OCTUBRE" onclick="fn_fechas('OCTUBRE');">OCTUBRE</a></li>
                          <li><a href="#" class="fecha" descripcion="NOVIEMBRE" onclick="fn_fechas('NOVIEMBRE');">NOVIEMBRE</a></li>
                          <li><a href="#" class="fecha" descripcion="DICIEMBRE" onclick="fn_fechas('DICIEMBRE');">DICIEMBRE</a></li>
                          <li><a href="#" class="fecha" descripcion="ANUAL" onclick="fn_fechas('ANUAL');">ANUAL</a></li>
                          <li><a href="#" class="fecha" descripcion="PERSONALIZADO" onclick="fn_fechas('PERSONALIZADO');">PERSONALIZADO</a></li>
                        
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-map-marker fa-lg"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">SANTA CRUZ</a></li>
                          <li><a href="#">LA PAZ</a></li>
                          <li><a href="#">COCHABAMBA</a></li>
                          <li><a href="#">ORURO</a></li>
                          <li><a href="#">POTOSI</a></li>
                          <li><a href="#">TODAS</a></li>
                        </ul>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <h6>Totalizador de modelos</h6>
                    <h6>Fecha: Anual</h6>
                    <div class="tabla_resumen">
                      
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

$(document).ready(function() {



  var content = $(".contenido");

  var fecha;

function fn_fechas(desc) {
 alert('desc');

}

function resumen (regional,mes){
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('trafico.totalizador_resumen')}}",
      data: {
        tipo: regional,
        mes:mes
      },
      success: function(dataResult)
      {
        console.log(dataResult);
        modacnt.empty().html(dataResult);
      }
    });
  };


});
</script>
@endsection