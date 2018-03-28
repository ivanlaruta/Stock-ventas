@extends('layouts.main')

@section('content')
<style type="text/css">

/* Timeline */

.timeline2,
.timeline2-horizontal {
  list-style: none;
  padding: 20px;
  position: relative;
}
.timeline2:before {
  top: 40px;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #adc2b7;
  left: 50%;
  margin-left: -1.5px;
}
.timeline2 .timeline2-item {
  margin-bottom: 20px;
  position: relative;
}
.timeline2 .timeline2-item:before,
.timeline2 .timeline2-item:after {
  content: "";
  display: table;
}
.timeline2 .timeline2-item:after {
  clear: both;
}
.timeline2 .timeline2-item .timeline2-badge {
  color: #fff;
  width: 54px;
  height: 54px;
  line-height: 52px;
  font-size: 22px;
  text-align: center;
  position: absolute;
  top: 18px;
  left: 50%;
  margin-left: -25px;
  background-color: #2A3F54 ;
  border: 3px solid #ffffff;
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}
.timeline2 .timeline2-item .timeline2-badge i,
.timeline2 .timeline2-item .timeline2-badge .fa,
.timeline2 .timeline2-item .timeline2-badge .glyphicon {
  top: 2px;
  left: 0px;
}

.timeline2 .timeline2-item .timeline2-badge2 {
  padding-left: 8px;
  color: #fff;
  width: 115px;
  height: 18px;
  line-height: 21px;
  font-size: 12px;
  font-weight: bold;
  text-align: left;
  position: absolute;
  top: 18px;
  left: 50%;
  margin-left: -25px;
  background-color: #e97e7e;
  z-index: 100;  
}

.timeline2 .timeline2-item .timeline2-badge.green {
  background-color: #26b99a;
}
.timeline2 .timeline2-item .timeline2-badge.primary {
  background-color: #1f9eba;
}
.timeline2 .timeline2-item .timeline2-badge.info {
  background-color: #5bc0de;
}
.timeline2 .timeline2-item .timeline2-badge.success {
  background-color: #59ba1f;
}
.timeline2 .timeline2-item .timeline2-badge.warning {
  background-color: #d1bd10;
}
.timeline2 .timeline2-item .timeline2-badge.danger {
  background-color: #ba1f1f;
}
.timeline2 .timeline2-item .timeline2-panel {
  position: relative;
  width: 46%;
  float: left;
  right: 16px;
  /*border: 1px solid #c0c0c0;*/
  background: #ffffff;
  border-radius: 2px;
  padding: 20px;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.timeline2 .timeline2-item .timeline2-panel:before {
  position: absolute;
  top: 26px;
  right: -16px;
  display: inline-block;
  border-top: 16px solid transparent;
  border-left: 16px solid #c0c0c0;
  border-right: 0 solid #c0c0c0;
  border-bottom: 16px solid transparent;
  content: " ";
}
.timeline2 .timeline2-item .timeline2-panel .timeline2-title {
  margin-top: 0;
  color: inherit;
}
.timeline2 .timeline2-item .timeline2-panel .timeline2-body > p,
.timeline2 .timeline2-item .timeline2-panel .timeline2-body > ul {
  margin-bottom: 0;
}
.timeline2 .timeline2-item .timeline2-panel .timeline2-body > p + p {
  margin-top: 5px;
}
.timeline2 .timeline2-item:last-child:nth-child(even) {
  float: right;
}
.timeline2 .timeline2-item:nth-child(even) .timeline2-panel {
  float: right;
  left: 16px;
}
.timeline2 .timeline2-item:nth-child(even) .timeline2-panel:before {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}
.timeline2-horizontal {
  list-style: none;
  position: relative;
  padding: 20px 0px 20px 0px;
  display: inline-block;
}
.timeline2-horizontal:before {
  height: 3px;
  top: auto;
  bottom: 26px;
  left: 56px;
  right: 0;
  width: 100%;
  margin-bottom: 20px;
}
.timeline2-horizontal .timeline2-item {
  display: table-cell;
  height: 260px;
  
  min-width: 400px;
  float: none !important;
  padding-left: 20px;
  padding-right: 20px;
  margin: 0 auto;
  vertical-align: bottom;
}
.timeline2-horizontal .timeline2-item .timeline2-panel {
  top: auto;
  bottom: 64px;
  display: inline-block;
  float: none !important;
  left: 0 !important;
  right: 0 !important;
  width: 100%;
  margin-bottom: 20px;
}
/* aqui el triangulito de abajop*/
.timeline2-horizontal .timeline2-item .timeline2-panel:before {
  top: auto;
  bottom: -16px;
  left: 30px !important;
  right: auto;
  border-right: 16px solid transparent !important;
  border-top: 16px solid #cbcdcd !important;
  border-bottom: 0 solid #cbcdcd !important;
  border-left: 16px solid transparent !important;
}
.timeline2-horizontal .timeline2-item:before,
.timeline2-horizontal .timeline2-item:after {
  display: none;
}
.timeline2-horizontal .timeline2-item .timeline2-badge {
  top: auto;
  bottom: 0px;
  left: 63px;
}
.timeline2-horizontal .timeline2-item .timeline2-badge2 {
  top: auto;
  bottom: 32px;
  left: -26px;
}
  
</style>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title">
                <h3><a href="{{ route('seguimiento.index')}}">SEGUIMIENTO DE UNIDAD</a></h3>
              </div>
            </div>
            <br>
            <div class="clearfix"></div>

              <div class="col-md-12 col-xs-12 animated fadeInUp">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>DATOS GENERALES <small>{{$datos_unidad->TIPO_UNIDAD}}</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-down animated tada infinite"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="display: none;">
                    <br />
                    <form class="form-horizontal form-label-left input_mask">
                      
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">CHASSIS</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->CHASIS}}">
                        </div>
                      </div>
                      
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">MOELO GENERICO</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->MODELOS}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">COD-MODELO</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->COD_MODELO}}">
                        </div>
                      </div>
                      
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">MODELO</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->MODELO}}">
                        </div>
                      </div>
                      
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">COD-MASTER</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->COD_MASTER}}">
                        </div>
                      </div>
                      
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">MASTER</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->COD_MASTER}}">
                        </div>
                      </div>
                      
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">COLOR EXTERIOR</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->COLOR_EXTERNO}}">
                        </div>

                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">COLOR INTERIOR</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->COLOR_INTERNO}}">
                        </div>
                      </div>
                      
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">AÑO</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->ANIO_MOD}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">COD-UBICACION</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->COD_UBICACION}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">UBICACION</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->UBICACION}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">REGIONAL</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->nom_localidad}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">ESTADO</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->ESTADO}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">LIBERADO</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->LIBERADO}}">
                        </div>
                      </div>
                      
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">NACIONALIZADO</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->NACIONALIZADO}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">PAIS</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->PAIS}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">TIPO DE VENTA</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->TIPO_DE_VENTA}}">
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <small class="control-label col-md-3 col-sm-3 col-xs-12">ASIGNACION</small>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" value="{{$datos_unidad->asignacion}}">
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 animated fadeInUp">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2> PRODUCCION <small>HISTORIAL</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-down animated tada infinite""></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content" style="display: none;">
                      <ul class="list-unstyled timeline">
                        <li>
                          <div class="block">
                            <div class="tags">
                              <a href="" class="tag">
                                <span><strong>{{date('Y-m-d',strtotime($produccion[0]->fec_produccion))}}</strong></span>
                              </a>
                            </div>
                            <div class="block_content">
                              <h2 class="title">
                                <a>PRODUCCION</a>
                              </h2>
                              <div class="byline">
                                <span>{{date('Y-m-d',strtotime($produccion[0]->fec_produccion))}}</span>
                              </div>
                              <p class="excerpt">

                               <ul class="to_do">
                                 <li>
                                   <p>
                                     <strong>N° PRODUCCION: </strong> {{$produccion[0]->chassis_aux2}}</p>
                                   </li>
                                   <li>
                                     <p>
                                       <strong>AÑO MODELO: </strong> {{$datos_unidad->ANIO_MOD}}</p>
                                     </li>                                     
                                   </ul>             
                                   <ul class="to_do">
                                     <li>
                                       <p>
                                         <strong>COSTO: </strong> {{$produccion[0]->costo}}</p>
                                       </li>
                                       <li>
                                         <p>
                                           <strong>OBSERVACION: </strong> {{$produccion[0]->observaciones}}</p>
                                         </li>
                                       </ul>
                                     </p>
                                   </div>
                                 </div>
                               </li>
                              @if(sizeof($envio)>0)
                               <li>
                                <div class="block">
                                  <div class="tags">
                                    <a href="" class="tag">
                                      <span><strong>{{date('Y-m-d',strtotime($envio[0]->fec_despacho))}}</strong></span>
                                    </a>
                                  </div>
                                  <div class="block_content">
                                    <h2 class="title">
                                      <a>DESPACHO</a>
                                    </h2>
                                    <div class="byline">
                                      <span>{{date('Y-m-d',strtotime($envio[0]->fec_despacho))}}</span>
                                    </div>
                                    <p class="excerpt">

                                     <ul class="to_do">
                                       <li>
                                         <p>
                                           <strong>ORIGEN: </strong> {{$envio[0]->nom_origen}}</p>
                                         </li>

                                       </ul>

                                       <ul class="to_do">
                                         <li>
                                           <p>
                                             <strong>BUQUE: </strong> {{$envio[0]->nom_buque}}</p>
                                           </li>
                                         </ul>
                                       </p>
                                     </div>
                                   </div>
                                 </li>

                                 <li>
                                  <div class="block">
                                    <div class="tags">
                                      <a href="" class="tag">
                                        <span><strong>{{date('Y-m-d',strtotime($envio[0]->fecha_llegada))}}</strong></span>
                                      </a>
                                    </div>
                                    <div class="block_content">
                                      <h2 class="title">
                                        <a>LLEGADA</a>
                                      </h2>
                                      <div class="byline">
                                        <span>{{date('Y-m-d',strtotime($envio[0]->fecha_llegada))}}</span>
                                      </div>
                                      <p class="excerpt">
                                       <ul class="to_do">
                                         <li>
                                           <p>
                                             <strong>DESTINO: </strong> {{$envio[0]->nom_ubicacion}}</p>
                                           </li>
                                         </ul>

                                         <ul class="to_do">
                                           <li>
                                             <p>
                                               <strong>BUQUE: </strong> {{$envio[0]->nom_buque}}</p>
                                             </li>
                                           </ul>
                                         </p>
                                       </div>
                                     </div>
                                   </li>
                                    
                                   @endif

                                 </ul>
                               </div>
                             </div>
                           </div>


                           <div class="col-md-6 col-sm-6 col-xs-12 animated fadeInUp">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2> MOVIMIENTOS <small>HISTORIAL</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-down animated tada infinite"></i></a>
                                  </li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                                  </li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content" style="display: none;">
                                <ul class="list-unstyled timeline">
                                  @foreach($movimientos as $mov)
                                  <li>
                                    <div class="block">
                                      <div class="tags">
                                        <a href="" class="tag">
                                          <span><strong>{{date('Y-m-d',strtotime($mov->SYSTIME))}}</strong></span>
                                        </a>
                                      </div>
                                      <div class="block_content">
                                        <h2 class="title">
                                          <a>MOVIMIENTO</a>
                                        </h2>
                                        <div class="byline">
                                          <span>{{date('Y-m-d',strtotime($mov->SYSTIME))}}</span>
                                        </div>
                                        <p class="excerpt">
                                         <ul class="to_do">
                                           <li>
                                             <p>
                                               <strong>ORIGEN: </strong> {{$mov->Ubicacion_Ant}}</p>
                                             </li>
                                           </ul>
                                           <ul class="to_do">
                                             <li>
                                               <p>
                                                 <strong>DESTINO: </strong> {{$mov->ubicacion_Act}}</p>
                                               </li>
                                             </ul>
                                           </p>
                                         </div>
                                       </div>
                                     </li>
                                     @endforeach
                                   </ul>
                                 </div>
                               </div>
                             </div>
                          
                 

        <div class="col-md-12 col-xs-12 animated fadeInUp">
          <div class="x_panel">
            <div class="x_title">
              <h2>PROCESOS | TOTAL: <strong class="green">{{$dias_total}} @if($dias_total!=1) días @else día @endif </strong>                    
              </h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up animated tada infinite"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content" >

            <div class="row" align="center">
                @if(sizeof($cotizacion)>0)
                  <span class="label label-primary"> COTIZACION  <i class="fa fa-check"></i></span>
                @else
                  <span class="label label-danger"> COTIZACION  <i class="fa fa-close"></i></span>
                @endif
                @if(sizeof($reserva)>0)
                  <span class="label label-primary"> RESERVA  <i class="fa fa-check"></i></span>
                @else
                  <span class="label label-danger"> RESERVA  <i class="fa fa-close"></i></span>
                @endif
                @if(sizeof($contrato)>0)
                  <span class="label label-primary"> CONTRATO  <i class="fa fa-check"></i></span>
                @else
                  <span class="label label-danger"> CONTRATO  <i class="fa fa-close"></i></span>
                @endif


                @if(sizeof($contrato)==0)
                  @if(sizeof($adenda)>0 && sizeof($contrato)==0)
                    <span class="label label-warning"> CONTRATO ANULADO  <i class="fa fa-check"></i></span>
                  @else
                    <span class="label label-danger"> CONTRATO ANULADO  <i class="fa fa-close"></i></span>
                  @endif
                  @if(sizeof($adenda)>0 && sizeof($contrato)==0)
                    <span class="label label-primary"> ADENDA  <i class="fa fa-check"></i></span>
                  @else
                    <span class="label label-danger"> ADENDA  <i class="fa fa-close"></i></span>
                  @endif
                @endif


                @if(sizeof($factura)>0)
                  <span class="label label-primary"> FACTURA  <i class="fa fa-check"></i></span>
                @else
                  <span class="label label-danger"> FACTURA  <i class="fa fa-close"></i></span>
                @endif
                @if(sizeof($entrega)>0)
                  <span class="label label-primary"> NOTA DE ENTREGA  <i class="fa fa-check"></i></span>
                @else
                  <span class="label label-danger"> NOTA DE ENTREGA  <i class="fa fa-close"></i></span>
                @endif
                @if(sizeof($cod_b)>0)
                  <span class="label label-primary"> ENTREGA CODIGO DE BARRAS  <i class="fa fa-check"></i></span>
                @else
                  <span class="label label-danger"> ENTREGA CODIGO DE BARRAS  <i class="fa fa-close"></i></span>
                @endif
            </div>
            <div class="ln_solid"></div>
              <div style="display:inline-block;width:100%;overflow-y:auto;">
              <ul class="timeline2 timeline2-horizontal">

                @if(sizeof($cotizacion)>0)
                <li class="timeline2-item">
                
                  <a  data-toggle="modal" href="#myModal_cotiza"><div class="timeline2-badge green prueba"><i class="fa fa-plus " style="color: #fff;"></i></div></a>
                  
                  <div class="timeline2-panel">
                    <div class="timeline2-heading">
                      <h4 class="timeline2-title">COTIZACION  <small class="pull-right red"><i class="fa fa-calendar "></i> {{$cotizacion->FECHA_COTIZACION}}</small></h4>
                      <p><small class="text-muted pull-right"><i class="fa fa-user "></i> Vendedor: {{strtoupper($cotizacion->VENDEDOR)}}</small></p>
                      <br>
                      <p><small class="text-muted pull-right"><i class="fa fa-map-marker"></i> {{$cotizacion->SUCURSAL}} - {{$cotizacion->REGIONAL}}</small></p>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="timeline2-body text-center">
                      <p><small>N° Cotizacion:</small><strong> {{$cotizacion->NRO_COTIZACION}}</strong></p>
                      <p><small>Cliente:</small><strong> {{$cotizacion->CLIENTE}}</strong></p>
                  </div>
                </li>
                @endif

                @if(sizeof($reserva)>0)
                <li class="timeline2-item">
                @if($reserva->tipo_venta!='LICITACION')<div class="timeline2-badge2 "><i class="fa fa-clock-o "></i> {{$dias_reserva}}</div>@endif
                  <a  data-toggle="modal" href="#myModal_reserva"><div class="timeline2-badge green prueba"><i class="fa fa-plus " style="color: #fff;"></i></div></a>
                  <div class="timeline2-panel">
                    <div class="timeline2-heading">
                      <h4 class="timeline2-title">RESERVA  <small class="pull-right red"><i class="fa fa-calendar "></i> {{$reserva->FECHA_RESERVA}}</small></h4>
                      <p><small class="text-muted pull-right"><i class="fa fa-user "></i> Vendedor: {{strtoupper($reserva->VENDEDOR)}}</small></p>
                      <br>
                      <p><small class="text-muted pull-right"><i class="fa fa-map-marker"></i> {{$reserva->SUCURSAL}} - {{$reserva->REGIONAL}}</small></p>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="timeline2-body text-center">
                      <p><small>N° Reseerva:</small><strong> {{$reserva->nro_docum}}</strong></p>
                      <p><small>Cliente:</small><strong> {{$reserva->CLIENTE}}</strong></p>
                  </div>
                </li>
                @endif
                  
                @if(sizeof($contrato)>0)
                <li class="timeline2-item">
                <div class="timeline2-badge2 "><i class="fa fa-clock-o "></i> {{$dias_contrato}}</div>
                  <a  data-toggle="modal" href="#myModal_contrato"><div class="timeline2-badge green prueba"><i class="fa fa-plus " style="color: #fff;"></i></div></a>
                  <div class="timeline2-panel">
                    <div class="timeline2-heading">
                      <h4 class="timeline2-title">CONTRATO  <small class="pull-right red"><i class="fa fa-calendar "></i> {{date('Y-m-d',strtotime($contrato[0]->fecha_mod))}}</small></h4>
                      <p><small class="text-muted pull-right"><i class="fa fa-user "></i> Vendedor: {{strtoupper($contrato[0]->nom_vendedor)}}</small></p>
                      <br>
                      @if(sizeof($reserva)>0)<p><small class="text-muted pull-right"><i class="fa fa-map-marker"></i> {{$reserva->SUCURSAL}} - {{$reserva->REGIONAL}}</small></p>@endif
                    </div>
                    <div class="ln_solid"></div>
                    <div class="timeline2-body text-center">
                      <p><small>N° Contrato:</small><strong> {{$contrato[0]->nro_docum}}</strong></p>
                      <p><small>Cliente:</small><strong> {{$contrato[0]->nom_tit}}</strong></p>
                  </div>
                </li>
                @endif
{{-- 
                @if(sizeof($contrato_an)>0 && sizeof($contrato)==0)
                <li class="timeline2-item">
                
                  <a  data-toggle="modal" href="#myModal_contrato_an"><div class="timeline2-badge green prueba"><i class="fa fa-plus " style="color: #fff;"></i></div></a>
                  <div class="timeline2-panel" style="    background: #fef7f7;">
                    <div class="timeline2-heading">
                      <h4 class="timeline2-title">CONTRATO ANULADO <small class="pull-right red"><i class="fa fa-calendar "></i> {{date('Y-m-d',strtotime($contrato_an[0]->fecha_mod))}}</small></h4>
                      <p><small class="text-muted pull-right"><i class="fa fa-user "></i> Vendedor: {{strtoupper($contrato_an[0]->nom_vendedor)}}</small></p>
                      <br>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="timeline2-body text-center">
                      <p><small>N° Contrato:</small><strong> {{$contrato_an[0]->nro_docum}}</strong></p>
                      <p><small>Cliente:</small><strong> {{$contrato_an[0]->nom_tit}}</strong></p>
                  </div>
                </li>
                @endif --}}

                @if(sizeof($adenda)>0 && sizeof($contrato)==0)
                <li class="timeline2-item">
                <div class="timeline2-badge2 "><i class="fa fa-clock-o "></i> {{$dias_adenda}}</div>
                  <a  data-toggle="modal" href="#myModal_adenda"><div class="timeline2-badge green prueba"><i class="fa fa-plus " style="color: #fff;"></i></div></a>
                  <div class="timeline2-panel" style=" background: #edfff1;">
                    <div class="timeline2-heading">
                      <h4 class="timeline2-title">ADENDA DE CONTRATO <small class="pull-right red"><i class="fa fa-calendar "></i> {{date('Y-m-d',strtotime($adenda[0]->fecha_mod))}}</small></h4>
                      <p><small class="text-muted pull-right"><i class="fa fa-user "></i> Vendedor: {{strtoupper($adenda[0]->usuario_mod)}}</small></p>
                      <br>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="timeline2-body text-center">
                      <p><small>N° Adenda:</small><strong> {{$adenda[0]->nro_docum}}</strong></p>
                      <p><small>Cliente:</small><strong> {{$adenda[0]->nom_tit}}</strong></p>
                  </div>
                </li>
                @endif

                @if(sizeof($factura)>0)
                <li class="timeline2-item">
                <div class="timeline2-badge2 "><i class="fa fa-clock-o "></i> {{$dias_factura}}</div>
                  <a  data-toggle="modal" href="#myModal_factura"><div class="timeline2-badge green prueba"><i class="fa fa-plus " style="color: #fff;"></i></div></a>
                  <div class="timeline2-panel">
                    <div class="timeline2-heading">
                      <h4 class="timeline2-title">FACTURA  <small class="pull-right red"><i class="fa fa-calendar "></i> {{date('Y-m-d',strtotime($factura->FECHA_FACTURA))}}</small></h4>
                      <p><small class="text-muted pull-right"><i class="fa fa-user "></i> Vendedor: {{strtoupper($factura->VENDEDOR)}}</small></p>
                      <br>
                      <p><small class="text-muted pull-right"><i class="fa fa-map-marker"></i> {{$factura->SUCURSAL}} - {{$factura->REGIONAL}}</small></p>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="timeline2-body text-center">
                      <p><small>N° factura:</small><strong> {{$factura->NRO_FACTURA}}</strong></p>
                      <p><small>Cliente:</small><strong> {{$factura->CLIENTE}}</strong></p>
                  </div>
                </li>
                @endif

                @if(sizeof($entrega)>0)
                <li class="timeline2-item">
                <div class="timeline2-badge2 "><i class="fa fa-clock-o "></i> {{$dias_entrega}}</div>
                  <a  data-toggle="modal" href="#myModal_entrega"><div class="timeline2-badge green prueba"><i class="fa fa-plus " style="color: #fff;"></i></div></a>
                  <div class="timeline2-panel">
                    <div class="timeline2-heading">
                      <h4 class="timeline2-title">NOTA ENTREGA  <small class="pull-right red"><i class="fa fa-calendar "></i> {{date('Y-m-d',strtotime($entrega[0]->fecha_mod))}}</small></h4>
                      @if(sizeof($factura)>0)<p><small class="text-muted pull-right"><i class="fa fa-user "></i> Vendedor: {{strtoupper($factura->VENDEDOR)}}</small></p>@endif
                      <br>
                      <p><small class="text-muted pull-right"><i class="fa fa-map-marker"></i> {{$entrega[0]->nom_deposito}} </small></p>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="timeline2-body text-center">
                      <p><small>N° entrega:</small><strong> {{$entrega[0]->nro_docum}}</strong></p>
                      <p><small>Cliente:</small><strong> {{$entrega[0]->nom_tit}}</strong></p>
                  </div>
                </li>
                @endif

                @if(sizeof($cod_b)>0)
                <li class="timeline2-item">
                <div class="timeline2-badge2 "><i class="fa fa-clock-o "></i> {{$dias_cod_b}}</div>
                  <a  data-toggle="modal" href="#myModal_cod_b"><div class="timeline2-badge green prueba"><i class="fa fa-plus " style="color: #fff;"></i></div></a>
                  <div class="timeline2-panel">
                    <div class="timeline2-heading">
                      <h4 class="timeline2-title">SALIDA (COD.BARRAS) <small class="pull-right red"><i class="fa fa-calendar "></i> {{date('Y-m-d',strtotime($cod_b[0]->FECHA_HORA_SCANEO))}}</small></h4>
                      <p><small class="text-muted pull-right"><i class="fa fa-user "></i> Scaneo: {{$cod_b[0]->NOMBRE}}</small></p>
                      <br>
                      <p><small class="text-muted pull-right"><i class="fa fa-map-marker"></i> {{$cod_b[0]->UBICACION}} </small></p>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="timeline2-body text-center">
                      <p><small>LOTE:</small><strong> {{$cod_b[0]->LOTE}}</strong></p>
                      <p><small>MOVIMIENTO:</small><strong> VENTA</strong></p>
                  </div>
                </li>
                @endif

              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

  <!-- =============================    MODALES   ====================================  -->

  <div class="modal fade" id="myModal_cotiza" role="dialog">
    <div class="modal-dialog">   
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">COTIZACION</h4>
        </div>

        <div class="modal-body">
        @if(sizeof($cotizacion)>0)
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">FECHA COTIZACION:</strong>
            <span class="col-md-6">{{$cotizacion->FECHA_COTIZACION}}</span>
          </div>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">N° COTIZACION:</strong>
            <span class="col-md-6">{{$cotizacion->NRO_COTIZACION}}</span>
          </div>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">VENDEDOR:</strong>
            <span class="col-md-6">{{$cotizacion->VENDEDOR}}</span>
          </div>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">SUCURSAL:</strong>
            <span class="col-md-6">{{$cotizacion->SUCURSAL}}</span>
          </div>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">REGIONAL:</strong>
            <span class="col-md-6">{{$cotizacion->REGIONAL}}</span>
          </div>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">CLIENTE:</strong>
            <span class="col-md-6">{{$cotizacion->CLIENTE}}</span>
          </div>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">TIPO: </strong>
            <span class="col-md-6">{{$cotizacion->TIPO_CLIENTE}}</span>
          </div>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">CI: </strong>
            <span class="col-md-6">{{$cotizacion->ci}}</span>
          </div>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">NIT: </strong>
            <span class="col-md-6">{{$cotizacion->NIT}}</span>
          </div>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">DIRECCION: </strong>
            <span class="col-md-6">{{$cotizacion->DIRECCION}}</span>
          </div>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">TELEFONO: </strong>
            <span class="col-md-6">{{$cotizacion->TELEFONO}}</span>
          </div>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">CELULAR: </strong>
            <span class="col-md-6">{{$cotizacion->CELULAR}}</span>
          </div>
          <hr>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">MODALIDAD: </strong>
            <span class="col-md-6">{{$cotizacion->modalidad}}</span>
          </div>
          
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">PRECIO LISTA: </strong>
            <span class="col-md-3 text-right">{{number_format($cotizacion->PRECIO_UNIDAD,2)}}</span>
          </div>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">DESCUENTO: </strong>
            {{-- <span class="col-md-3 text-right"><u class="red"> - {{number_format($cotizacion->montoPorcentajeDescuento,2)}}</u></span> <span class="col-md-3 text-warning">({{$cotizacion->PorcentajeDescuento}}%)</span> --}}
          </div>

          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">PRECIO TOTAL: </strong>
            <span class="col-md-3 text-right"><strong class="green">{{number_format($cotizacion->PRECIO_TOTAL,2)}}</strong></span>
          </div>

        @endif 
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal_reserva" role="dialog">
    <div class="modal-dialog">   
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">RESERVA</h4>
        </div>
        <div class="modal-body">
        @if(sizeof($reserva)>0)

          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">FECHA RESERVA: </strong> 
            <span class="col-md-6">{{$reserva->FECHA_RESERVA}}</span>
          </div>                                      
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">VENDEDOR: </strong> 
            <span class="col-md-6">{{$reserva->VENDEDOR}}</span>
          </div>                                      
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">SUCURSAL: </strong> 
            <span class="col-md-6">{{$reserva->SUCURSAL}}</span>
          </div>                                      
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">REGIONAL: </strong> 
            <span class="col-md-6">{{$reserva->REGIONAL}}</span>
          </div>                                      
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">N° RESERVA: </strong> 
            <span class="col-md-6">{{$reserva->nro_docum}}</span>
          </div>                                      
           <div class="row">
            <strong class="col-md-4 col-lg-offset-1">UBICACION_UNIDAD: </strong> 
            <span class="col-md-6">{{$reserva->UBICACION_UNIDAD}}</span>
          </div>      
           <div class="row">
            <strong class="col-md-4 col-lg-offset-1">LIBERADO: </strong> 
            <span class="col-md-6">{{$reserva->LIBERADO}}</span>
          </div>      
           <div class="row">
            <strong class="col-md-4 col-lg-offset-1">NACIONALIZADO: </strong> 
            <span class="col-md-6">{{$reserva->NACIONALIZADO}}</span>
          </div>       
           <div class="row">
            <strong class="col-md-4 col-lg-offset-1">CLIENTE: </strong> 
            <span class="col-md-6">{{$reserva->CLIENTE}}</span>
          </div>      
           <div class="row">
            <strong class="col-md-4 col-lg-offset-1">BANCO: </strong> 
            <span class="col-md-6">{{$reserva->nom_banco}}</span>
          </div>       
             
           <div class="row">
            <strong class="col-md-4 col-lg-offset-1">TIPO: </strong> 
            <span class="col-md-6 red">{{$reserva->tipo_venta}}</span>
          </div>  
          <hr>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">PRECIO TOTAL: </strong>
            <span class="col-md-3 text-right"><strong class="green">{{number_format($reserva->imp_mov_mo,2)}}</strong></span>
          </div>  

        @endif 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal_contrato" role="dialog">
    <div class="modal-dialog">   
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">CONTRATO</h4>
        </div>
        <div class="modal-body">
        @if(sizeof($contrato)>0)                                   
          
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">FECHA CONTRATO</strong>
            <span class="col-md-6">{{date('Y-m-d',strtotime($contrato[0]->fecha_mod))}}</span>
          </div>                                      
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">VENDEDOR</strong>
            <span class="col-md-6">{{$contrato[0]->nom_vendedor}}</span>
          </div>                                      
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">N° CONTRATO: </strong>
            <span class="col-md-6"> {{$contrato[0]->nro_docum}}</p></span>
          </div>                                      
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">CLIENTE: </strong>
            <span class="col-md-6"> {{$contrato[0]->nom_tit}}</p></span>
          </div>                                      
          <hr>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">PRECIO TOTAL: </strong>
            <span class="col-md-3 text-right"><strong class="green">{{number_format($contrato[0]->precio_total,2)}}</strong></span>
          </div>                                     

        @endif 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal_factura" role="dialog">
    <div class="modal-dialog">   
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">FACTURA</h4>
        </div>
        <div class="modal-body">
        @if(sizeof($factura)>0)                                    
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">N° FACTURA: </strong> 
            <span class="col-md-6"> {{$factura->NRO_FACTURA}}</span>
          </div>                                                                              
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">COD TIT: </strong> 
            <span class="col-md-6"> {{$factura->COD_TIT}}</span>
          </div>                                                                                                  
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">NIT: </strong> 
            <span class="col-md-6"> {{$factura->NIT}}</span>
          </div>                                                                                                         
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">CLIENTE: </strong> 
            <span class="col-md-6"> {{$factura->CLIENTE}}</span>
          </div>                                      
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">PRECIO TOTAL: </strong>
            <span class="col-md-3 text-right"><strong class="green">{{number_format($factura->PRECIO,2)}}</strong></span>
          </div>                                                                                                                
        @endif 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal_entrega" role="dialog">
    <div class="modal-dialog">   
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">NOTA DE ENTREGA</h4>
        </div>
        <div class="modal-body">
        @if(sizeof($entrega)>0)           
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">FECHA NOTA ENTREGA:</strong> 
            <span class="col-md-6">{{date('Y-m-d',strtotime($entrega[0]->fecha_mod))}}</span>
          </div>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">N° ENTREGA:</strong> 
            <span class="col-md-6"> {{$entrega[0]->nro_docum}}</span>
          </div>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">CLIENTE:</strong> 
            <span class="col-md-6"> {{$entrega[0]->nom_tit}}</span>
          </div>           
        @endif 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal_cod_b" role="dialog">
    <div class="modal-dialog">   
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SALIDA POR CODIGO DE BARRAS</h4>
        </div>
        <div class="modal-body">
        @if(sizeof($cod_b)>0)           
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">FECHA ESCANEO:</strong> 
            <span class="col-md-6">{{date('Y-m-d',strtotime($cod_b[0]->FECHA_HORA_SCANEO))}}</span>
          </div>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">N° LOTE:</strong> 
            <span class="col-md-6"> {{$cod_b[0]->LOTE}}</span>
          </div>
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">UBICACION:</strong> 
            <span class="col-md-6"> {{$cod_b[0]->UBICACION}}</span>
          </div> 
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">MOVIMIENTO:</strong> 
            <span class="col-md-6"> {{$cod_b[0]->MOVIMIENTO}} - SALIDA VENTA</span>
          </div>  
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">DISPOSITIVO:</strong> 
            <span class="col-md-6">
             @if($cod_b[0]->DISPOSITIVO==1) ANDROID @endif
             @if($cod_b[0]->DISPOSITIVO==2) TABLET @endif
             @if($cod_b[0]->DISPOSITIVO==3) WEB @endif
            </span>
          </div>          
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">DATO SCANEO:</strong> 
            <span class="col-md-6"> {{$cod_b[0]->DATO_SCANEO}}</span>
          </div> 
          <div class="row">
            <strong class="col-md-4 col-lg-offset-1">USUARIO:</strong> 
            <span class="col-md-6"> {{$cod_b[0]->NOMBRE}}</span>
          </div>           
        @endif 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade bs-example-modal-lg" id="myModal_adenda" role="dialog">
    <div class="modal-dialog modal-lg">   
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ADENDA DE CONTRATO - CONTRATO ANULADO</h4>
        </div>
        <div class="modal-body">
        @if(sizeof($contrato_an)>0 && sizeof($contrato)==0)
                      <div class="row">
                        <div class="col-md-3"></div>
                        <div class=" col-md-6" >
                            <div class="" style="  padding: 10px; background: #ffdede; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                              <div class="">
                                <h4 class="">CONTRATO ANULADO <small class="pull-right red"><i class="fa fa-calendar "></i> {{date('Y-m-d',strtotime($contrato_an[0]->fecha_mod))}}</small></h4>
                                <p><small class="text-muted pull-right"><i class="fa fa-user "></i> Vendedor: {{strtoupper($contrato_an[0]->nom_vendedor)}}</small></p>
                                <br>
                              </div>
                              <div class="ln_solid"></div>
                              <div class="text-center">
                                <p><small>N° Contrato:</small><strong> {{$contrato_an[0]->nro_docum}}</strong></p>
                                <p><small>Cliente:</small><strong> {{$contrato_an[0]->nom_tit}}</strong></p>
                            </div>
                          </div>
                        </div>
                        <br>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="row" >
                      <div class="col-lg-6" >
                        <h4 class="modal-title">CONTRATO ANULADO</h4>
                        <div class="ln_solid" style="border-top: 1px solid #ef0a0a;"></div>
                          <div class="row">
                            <strong class="col-md-4 col-lg-offset-1">FECHA CONTRATO</strong>
                            <span class="col-md-6">{{date('Y-m-d',strtotime($contrato_an[0]->fecha_mod))}}</span>
                          </div>                                      
                          <div class="row">
                            <strong class="col-md-4 col-lg-offset-1">VENDEDOR</strong>
                            <span class="col-md-6">{{$contrato_an[0]->nom_vendedor}}</span>
                          </div>                                      
                          <div class="row">
                            <strong class="col-md-4 col-lg-offset-1">N° CONTRATO: </strong>
                            <span class="col-md-6"> {{$contrato_an[0]->nro_docum}}</span>
                          </div>                                      
                          <div class="row">
                            <strong class="col-md-4 col-lg-offset-1">CLIENTE: </strong>
                            <span class="col-md-6"> {{$contrato_an[0]->nom_tit}}</span>
                          </div>                                      
                          <div class="row">
                            <strong class="col-md-4 col-lg-offset-1">PRECIO: </strong>
                            <span class="col-md-6"> {{$contrato_an[0]->precio_total}}</span>
                          </div>   
                          <div class="row">
                            <strong class="col-md-4 col-lg-offset-1">CHASIS ANULADO </strong>
                            <span class="col-md-6 red"> {{$contrato_an[0]->chassis}}</span>
                          </div>            
                      </div>

                      <div class="col-lg-6" >
                        <h4 class="modal-title">ADENDA</h4>
                        <div class="ln_solid" style="border-top: 1px solid #32bc7c;"></div>
                          <div class="row">
                            <strong class="col-md-4 col-lg-offset-1">FECHA ADENDA</strong>
                            <span class="col-md-6">{{date('Y-m-d',strtotime($adenda[0]->fecha_mod))}}</span>
                          </div>                                      
                          <div class="row">
                            <strong class="col-md-4 col-lg-offset-1">USUARTO</strong>
                            <span class="col-md-6">{{$adenda[0]->usuario_mod}}</span>
                          </div>                                      
                          <div class="row">
                            <strong class="col-md-4 col-lg-offset-1">N° CONTRATO: </strong>
                            <span class="col-md-6"> {{$adenda[0]->nro_ventas}}</span>
                          </div>                                      
                          <div class="row">
                            <strong class="col-md-4 col-lg-offset-1">CLIENTE: </strong>
                            <span class="col-md-6"> {{$adenda[0]->nom_tit}}</span>
                          </div>                                      
                          
                          <div class="row">
                            <strong class="col-md-4 col-lg-offset-1">NUEVO CHASIS </strong>
                            <span class="col-md-6 red"> {{$adenda[0]->chassis_aux1}}</span>
                          </div>            
                      </div>
                    </div>
        @endif 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  {{-- ===================================  * FIN MODALES*   ===================================================== --}}


  </div>
</div>
        



@endsection

@section('scripts')

<script type="text/javascript">
$(".prueba").hover(function() {
    $(this).addClass("animated pulse infinite");
}, function() {
    $(this).removeClass("animated pulse infinite");
});
</script>
@endsection