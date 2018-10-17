<style type="text/css">
.sub {
    border-bottom: 1px solid #1abb9c;
    overflow:auto;
}
.sub2 {
    border-bottom: 2px solid #374b6033;
}
.calen {
    text-align: center !important;
    border: 2px solid #374b6033;
    padding: 1px;        
}
.cab {
    text-align: right;  !important;
}
.datos {
    text-align: left  !important;
    font-weight: normal  !important;     
}
.msg {
    border-left: 2px solid #60768F; 
}
</style>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Perfil de Cliente</h2>
                    <div class="clearfix"></div>
                  </div><br>
                  <div class="x_content">
                    <div class="col-md-4 col-sm-4 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar" align="center">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view img-thumbnail" src="{{URL::asset('images/pic.jpg')}}" alt="Avatar" title="Change the avatar" style="max-width: 50%;">
                        </div>
                      </div>
                      <h3 class="rs">{{$clientes->razon_social}}</h3>
                      
                      <ul class="list-unstyled user_data">
                        <li><strong>CI/NIT : </strong>@if(!empty($clientes->nro_doc_uni)) {{$clientes->nro_doc_uni}}@else sin dato @endif</li>
                        <li><strong>DIRECCION : </strong>@if(!empty($clientes->direccion)) {{$clientes->direccion}}@else sin dato @endif</li>
                        <li><strong>TELEFONO : </strong>@if(!empty($clientes->telefono)) {{$clientes->telefono}}@else sin dato @endif</li>
                        <li><strong>CELULAR : </strong>@if(!empty($clientes->celular)) {{$clientes->celular}}@else sin dato @endif</li>
                        <li><strong>CORREO : </strong>@if(!empty($clientes->email)) {{$clientes->email}}@else sin dato @endif</li>
                      </ul>

                      <a class="btn btn-success btn-block"><i class="fa fa-edit m-right-xs"></i>Editar Datos</a>
                      <br />

                      <!-- start skills -->
                     {{--  <h4>Familia</h4>
                      <ul class="list-group">
                      
                        <li  class="list-group-item" style="padding-left: 0px; padding-right: 0px;">
                          <a href="">Roberto Perez</a> 
                          <span class="label label-default">Hermano</span><a href="#"><img src="{{URL::asset('images/124.jpg')}}" class="avatar" alt="Avatar" title="asdas"></a>
                        </li>
                        <li  class="list-group-item" style="padding-left: 0px; padding-right: 0px;">
                          <a href="">Monica Salcedo</a> 
                          <span class="label label-default">Madre</span><a href="#"><img src="{{URL::asset('images/pic.jpg')}}" class="avatar" alt="Avatar" title="asdas"></a>
                        </li>
                        <li  class="list-group-item" style="padding-left: 0px; padding-right: 0px;">
                          <a href="">Natalia Rada</a> 
                          <span class="label label-default">Esposa</span><a href="#"><img src="{{URL::asset('images/0.jpg')}}" class="avatar" alt="Avatar" title="asdas"></a>
                        </li>
                        <li  class="list-group-item" style="padding-left: 0px; padding-right: 0px;">
                          <a href="">Pedro Perez</a> 
                          <span class="label label-default">Padre</span><a href="#"><img src="{{URL::asset('images/pic.jpg')}}" class="avatar" alt="Avatar" title="asdas"></a>
                        </li>
                      </ul> --}}
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>Actividad de cliente</h2>
                        </div>
                      </div>
                     

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTabs" class="nav nav-tabs sidebar-tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#Vehiculos" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Vehiculos</a>
                          </li>
                         {{--  <li role="presentation" class=""><a href="#Repuestos" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Venta de Repuestos</a>
                          </li>
                          <li role="presentation" class=""><a href="#Seguimiento" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Seguimiento</a>
                          </li> --}}
                          
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="Vehiculos" aria-labelledby="home-tab">
                            
                            <div class="table-responsive">
                              <table class="data table table-striped no-margin">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Año</th>
                                    <th>Color</th>
                                    <th>Chasis</th>
                                    {{-- <th>Placa</th> --}}
                                    <th>Opcion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($vehiculos as $det)
                                  <tr>
                                    <td>{{$det->ITEM}}</td>
                                    <td>{{$det->MARCA}}</td>
                                    <td>{{$det->MODELOS}}</td>
                                    <td>{{$det->ANIO}}</td>
                                    <td>{{$det->COLOR_EXTERNO}}</td>
                                    <td>{{$det->CHASIS}}</td>
                                    {{-- <td>{{$det->ITEM}}</td> --}}
                                    <td><a href="javascript:;" onclick="ver_vehiculo('{{$det->CHASIS}}')" class="btn-sm btn-success">Ver detalle</a></td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                              <!-- end user projects -->
                            </div>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="Repuestos" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                            <div class="table-responsive">
                              <table class="data table table-striped no-margin">
                                <thead>
                                  <tr>
                                    <th>#Factura</th>
                                    <th>Autorizacion</th>
                                    <th>Fecha</th>
                                    <th>Sucursal</th>
                                    <th>Vendedor</th>
                                    <th>Opcion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>000010</td>
                                    <td>249401800030504</td>
                                    <td>27/04/2018</td>
                                    <td>El Alto</td>
                                    <td>Jose Mercado</td>
                                    <td><a data-toggle="modal" href="#modal_factura" class="btn-sm btn-success">Ver detalle</a></td>
                                    
                                  </tr>
                                  
                                </tbody>
                              </table>
                            <!-- end user projects -->

                          </div>
                          </div>
                          

                          <div role="tabpanel" class="tab-pane fade" id="Seguimiento" aria-labelledby="profile-tab">


                    
                     

                            
                              <a class="btn btn-sm btn-success pull-right" style="color: #fff;"><i class="fa fa-plus"></i> NUEVO!</a><br>
                              <p>Registro de contacto con el cliente</p>

                                <div class="table-responsive">
                                  <table class="table table-striped ">
                                    <thead>
                                      <tr>
                                        <th style="width: 1%">Fecha</th>
                                        <th style="width: 20%">Motivo</th>
                                        <th style="width: 25%">Datos de contacto</th>
                                        <th style="width: 25%">Respuesta de contacto</th>
                                        <th style="width: 1%">Progreso</th>
                                        <th style="width: 1%">#Edicion</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>01-08-2018</td>
                                        <td>SEGUIMIENTO PERIODICO</td>
                                        <td>
                                          <img src="{{URL::asset('images/123.png')}}" class="avatar" alt="Avatar">
                                          <a>Pedro Perez Salcedo</a>
                                          <br />
                                          <br />
                                          <small><i class="fa fa-phone"></i> Contactado por telefono</small><br />
                                          <small><i class="fa fa-user"></i> Realizado por Jorgue Quiroga </small><br />
                                        </td>
                                        <td>No presenta dificultades con su vehiculo</td>
                                        <td class="project_progress">
                                          <div class="progress progress_sm">
                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="0"></div>
                                          </div>
                                          <small>0% Completo</small>
                                        </td>
                                        <td>
                                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>02-06-2018</td>
                                        <td>RECORDATORIO NO REALIZO MANTENIMEINTO 5000 K</td>
                                        <td>
                                          <img src="{{URL::asset('images/123.png')}}" class="avatar" alt="Avatar">
                                          <a>Pedro Perez Salcedo</a>
                                          <br />
                                          <br />
                                          <small><i class="fa fa-phone"></i> Contactado por telefono</small><br />
                                          <small><i class="fa fa-user"></i> Realizado por Jorgue Quiroga </small><br />
                                        </td>
                                        <td>Olvido llevar su vehiculo al manetenimiento periodico, lo llevara le fin de semana</td>
                                        <td class="project_progress">
                                          <div class="progress progress_sm">
                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                                          </div>
                                          <small>0% Completo</small>
                                        </td>
                                        <td>
                                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                        </td>
                                      </tr>
                                      
                                      <tr>
                                        <td>01-04-2018</td>
                                        <td>INFORMAR SOBRE PROMOCION REVISION GRATIS</td>
                                        <td>
                                          <img src="{{URL::asset('images/123.png')}}" class="avatar" alt="Avatar">
                                          <a>Pedro Perez Salcedo</a>
                                          <br />
                                          <br />
                                          <small><i class="fa fa-phone"></i> Contactado por telefono</small><br />
                                          <small><i class="fa fa-user"></i> Realizado por Jorgue Quiroga </small><br />
                                        </td>
                                        <td>Esta interesado, pasara por taller la proxima semana</td>
                                        <td class="project_progress">
                                          <div class="progress progress_sm">
                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="0"></div>
                                          </div>
                                          <small>0% Completo</small>
                                        </td>
                                        <td>
                                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>22-12-2017</td>
                                        <td>NO REALIZO MANTENIMINETO 1000 Kilometros</td>
                                        <td>
                                          <img src="{{URL::asset('images/123.png')}}" class="avatar" alt="Avatar">
                                          <a>Pedro Perez Salcedo</a>
                                          <br />
                                          <br />
                                          <small><i class="fa fa-phone"></i> Contactado por telefono</small><br />
                                          <small><i class="fa fa-user"></i> Realizado por Jorgue Quiroga </small><br />
                                        </td>
                                        <td>Pasara hoy mismo por taller</td>
                                        <td class="project_progress">
                                          <div class="progress progress_sm">
                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                                          </div>
                                          <small>50% Completo</small>
                                        </td>
                                        <td>
                                          <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                        </td>
                                      </tr>

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
            </div>

       

<div class="modal fade" id="modal_factura" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">DETALLE FACTURA</h4>
              </div>

                <div class="modal-body">

                        <!-- title row -->
                        <div class="row">
                          <div class="col-md-5 col-xs-5  invoice-header">
                            <h3>
                                 FACTURA 0010<br>
                                
                                {{-- <small >OT: OT75780 </small> --}}
                                
                            </h3>
                          </div>
                          <div class="col-md-7 col-xs-7">
                            <img class="pull-right" src="{{URL::asset('images/toyo-logo.png')}}" style="width:60%">
                            
                          </div>

                          <!-- /.col -->
                        </div>
                        <br>
                        
                        <div class="row invoice-info">
                          <div class="col-sm-4 invoice-col">
                            De:
                            <address>
                              <strong>TOYOSA S.A.</strong>
                              <br>NIT: 1030029024
                              <br>Plaza Venezuela,1413
                              <br>La Paz, Bolivia
                              <br>Telefono: 2390930-35
                              
                            </address>
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-4 invoice-col">
                            Cliente:
                            <address>
                                <strong>Pedro Perez</strong>
                                <br>Av del Ejercito # 174, La Paz
                                <br>Nit: 4402099015
                                <br>Telefono: 22384170
                                <br>Email:Pedro.pp@toyosa.con LP
                            </address>
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-4 invoice-col">
                            <br>
                            <b>Fecha: </b>27/04/2018
                            <br>
                            <b>Autorizacion: </b>249401800030504
                            <br>
                            <b>Codigo de control:</b> 4F3S8J
                            <br>
                            <b>Limite emision:</b> 25/05/2019
                            <br>
                            <b>Ubicacion:</b> Taller el alto
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      <hr>
                        <!-- Table row -->
                        <div class="row">
                          <div class="col-xs-12 table">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Codigo</th>
                                  <th>Detalle</th>
                                  <th>Cantidad</th>
                                  <th>Precio</th>
                                  <th>Importe</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>44200-0K890</td>
                                  <td>CREMALLERA</td>
                                  <td>1</td>
                                  <td>6668.38</td>
                                  <td>6668.38</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>48654-0K040</td>
                                  <td>BUSH, LWRARM</td>
                                  <td>2</td>
                                  <td>219.935</td>
                                  <td>439.87</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>48655-0K040</td>
                                  <td>BUSH, LWRARM,NO.2</td>
                                  <td>2</td>
                                  <td>280.485</td>
                                  <td>560.97</td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>48190-60020</td>
                                  <td>CAM ASSY,CAMBER</td>
                                  <td>2</td>
                                  <td>57.075</td>
                                  <td>114.15</td>
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td>48190-0K010</td>
                                  <td>LEVA DE AJUSTE</td>
                                  <td>1</td>
                                  <td>57.07</td>
                                  <td>57.07</td>
                                </tr>
                                <tr>
                                  <td>6</td>
                                  <td>48510-09K91</td>
                                  <td>AMORTIGUADOR DELANTERO</td>
                                  <td>1</td>
                                  <td>1213.13</td>
                                  <td>1213.13</td>
                                </tr>
                                
                                <tr>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  
                                  <td align="right"><strong>Total bs</strong></td>
                                  
                                  <td><strong>9053.57</strong></td>
                                </tr>
                                
                              </tbody>
                            </table>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->

            </div>

              <div class="modal-footer">
                <button class="btn btn-primary " style="margin-right: 5px;"><i class="fa fa-print"></i> Imprimir</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
              </div>

            </div>
          </div>
        </div>
        <script src="{{asset('bower_components/gentelella/vendors/nprogress/nprogress.js')}}"></script>
 