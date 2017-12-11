@extends('layouts.main')
@section('content')
<style type="text/css">
 


</style>
<div class="right_col" role="main">
  <div class="">
    <div class="row">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>REPORTE TRAFICO / {{$desc_mes}} </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-calendar"></i> <i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">ENERO</a></li>
                  <li><a href="#">FEBRERO</a></li>
                  <li><a href="#">MARZO</a></li>
                  <li><a href="#">ABRIL</a></li>
                  <li><a href="#">MAYO</a></li>
                  <li><a href="#">JUNIO</a></li>
                  <li><a href="#">JULIO</a></li>
                  <li><a href="#">AGOSTO</a></li>
                  <li><a href="#">SEPTIEMBRE</a></li>
                  <li><a href="#">OCTUBRE</a></li>
                  <li><a href="#">NOVIEMBRE</a></li>
                  <li><a href="#">DICIEMBRE</a></li>
                  <li><a href="#">ANUAL</a></li>
                  <li><a href="#">PERSONALIZADO</a></li>
                </ul>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
          
            <div class="col-md-12">
              <div class="row">
                <div class="row tile_count">
                  <div class="col-md-2 col-sm-12 col-xs-12 tile_stats_count pull-right" align="center" style="height: 200px; padding: 50px 0px 0px;">
                    <small class="count_top"> TOTAL TRAFICO</small>
                    <div class="count green" >  {{$totales['tramites']}}</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> TOYOTA</small>
                    <div class="count" >  {{$totales['tramites']}}</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> LEXUS</small>
                    <div class="count" >  {{$totales['tramites']}}</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> HINO</small>
                    <div class="count" >  {{$totales['tramites']}}</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> YAMAHA</small>
                    <div class="count" >  {{$totales['tramites']}}</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> TRAMITES</small>
                    <div class="count" >  {{$totales['tramites']}}</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> REPUESTOS</small>
                    <div class="count" >  {{$totales['tramites']}}</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> SERVICIOS</small>
                    <div class="count" >  {{$totales['tramites']}}</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> LICITACIONES</small>
                    <div class="count" >  {{$totales['tramites']}}</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> LLANTAS</small>
                    <div class="count" >  {{$totales['tramites']}}</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count " align="center">
                    <small class="count_top"> M. PESADA</small>
                    <div class="count" >  {{$totales['tramites']}}</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-eye"></i></i> <small>Ver detalle</small></span>
                  </div>
                </div>
              </div>
            </div>
            <p>Reporte consolidado de tráfico de clientes - {{$desc_mes}} </p>
            <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action table-bordered" id="datatable1">
                <thead>
                  <tr>
                    <th>Regional </th>
                    <th style="text-align: center;">Regional </th>
                    <th style="text-align: center;">Toyota </th>
                    <th style="text-align: center;">Lexus </th>
                    <th style="text-align: center;">Hino </th>
                    <th style="text-align: center;">Yamaha </th>
                    <th style="text-align: center;">Tramites </th>
                    <th style="text-align: center;">Montacargas</th>
                    <th style="text-align: center;">Servicios</th>
                    <th style="text-align: center;">licitaciones</th>
                    <th style="text-align: center;">Llantas</th>
                    <th style="text-align: center;">M pesada</th>
                    <th style="text-align: center;">Total </th>
                  </tr>
                </thead>
                <tbody>
                @foreach($consolidado as $det)                
                  <tr>

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
</div>
@endsection


@section('scripts')
<script type="text/javascript">
  
</script>
@endsection