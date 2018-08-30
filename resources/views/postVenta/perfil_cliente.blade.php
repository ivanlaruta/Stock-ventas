
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
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar" align="center">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view img-thumbnail" src="{{URL::asset('images/123.png')}}" alt="Avatar" title="Change the avatar" style="max-width: 65%;">
                        </div>
                      </div>
                      <h3>Pedro Perez Salcedo</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Av del Ejercito # 174, La Paz
                        </li>
                        <li>
                          <i class="fa fa-book user-profile-icon"></i> 8264209 LP
                        </li>
                        <li>
                          <i class="fa fa-phone user-profile-icon"></i> 22384170 - 77756103
                        </li>
                        <li>
                          <i class="fa fa-envelope user-profile-icon"></i> Pedro.pp@toyosa.con LP
                        </li>

                      </ul>

                      <a class="btn btn-success btn-block"><i class="fa fa-edit m-right-xs"></i>Editar Datos</a>
                      <br />

                      <!-- start skills -->
                      <h4>Familia</h4>
                      <ul class="list-group">
                      
                        <li  class="list-group-item" style="padding-left: 0px; padding-right: 0px;">
                          Roberto Perez <span class="label label-default">Hermano</span><a href="#"><img src="{{URL::asset('images/124.jpg')}}" class="avatar" alt="Avatar" title="asdas"></a>
                        </li>
                        <li  class="list-group-item" style="padding-left: 0px; padding-right: 0px;">
                          Monica Salcedo <span class="label label-default">Madre</span><a href="#"><img src="{{URL::asset('images/pic.jpg')}}" class="avatar" alt="Avatar" title="asdas"></a>
                        </li>
                        <li  class="list-group-item" style="padding-left: 0px; padding-right: 0px;">
                          Natalia Rada <span class="label label-default">Esposa</span><a href="#"><img src="{{URL::asset('images/0.jpg')}}" class="avatar" alt="Avatar" title="asdas"></a>
                        </li>
                        <li  class="list-group-item" style="padding-left: 0px; padding-right: 0px;">
                          Pedro Perez <span class="label label-default">Padre</span><a href="#"><img src="{{URL::asset('images/pic.jpg')}}" class="avatar" alt="Avatar" title="asdas"></a>
                        </li>
                      
                      </ul>
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>Actividad de cliente</h2>
                        </div>
                      </div>
                     

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTabs" class="nav nav-tabs sidebar-tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#Vehiculos" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Vehiculos</a>
                          </li>
                          <li role="presentation" class=""><a href="#Repuestos" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Venta de Repuestos</a>
                          </li>
                          <li role="presentation" class=""><a href="#Seguimiento" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Seguimiento</a>
                          </li>
                          
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
                                    <th>Placa</th>
                                    <th>Opcion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>Toyota</td>
                                    <td>Yaris</td>
                                    <td>2012</td>
                                    <td>Rojo</td>
                                    <td>2578 UFK</td>
                                    <td><a href="javascript:;" onclick="ver_vehiculo()" class="btn-sm btn-success">Ver detalle</a></td>
                                    
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Toyota</td>
                                    <td>Rav4</td>
                                    <td>2017</td>
                                    <td>Negro</td>
                                    <td>4898 LEI</td>
                                    <td><a href="javascript:;" onclick="ver_vehiculo()" class="btn-sm btn-success">Ver detalle</a></td>
                                   
                                  </tr>
                                  
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
                                    <th>#</th>
                                    <th>Factura</th>
                                    <th>Fecha</th>
                                    <th>Sucursal</th>
                                    <th>Vendedor</th>
                                    <th>Opcion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>100453514</td>
                                    <td>05-05-2016</td>
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
                                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
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
                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="0"></div>
                                          </div>
                                          <small>0% Completo</small>
                                        </td>
                                        <td>
                                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
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
                                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
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
                                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                        </td>
                                      </tr>

                                    </tbody>
                                  </table>
                                </div>
                              
                        
                        
                      

  

                            <!-- start recent activity -->
                           {{--  <ul class="messages" style="padding-left: 20px;">
                              <li>
                                <div class="message_date" style="float: left !important; text-align: right;">
                                  <h3 class="date text-info sub2">24</h3>
                                  <p class="month">May<br><small>2017</small></p>
                                </div>
                                <div class="message_wrapper" style="padding-left: 15px;">
                                  <h4 class="">SEGUIMIENTO PERIODICO</h4>
                                  <div class="row">
                                    <div class="form-horizontalform-label-left input_mask msg  col-md-11 col-sm-11 col-xs-11">
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">SE CONTACTO A:</label>
                                        <label class="control-label datos col-md-7 col-sm-7 col-xs-11">Pedro Perez</label>
                                      </div>
                                    
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">CONTACTADO POR:</label>
                                        <label class="control-label datos col-md-7 col-sm-7 col-xs-11">Roberto Marquez</label>
                                      </div>
                                    
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">¿QUE DIJO?:</label>
                                        <label class="control-label datos col-md-7 col-sm-7 col-xs-11">No presenta dificultades con su vehiculo</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <a href="#"><i class="fa fa-phone"></i> Contactado por telefono </a>
                                  </div>
                                </div>
                              </li>
                              

                            
                              <li>
                                <div class="message_date" style="float: left !important; text-align: right;">
                                  <h3 class="date text-info sub2">19</h3>
                                  <p class="month">Nov<br><small>2017</small></p>
                                </div>
                                <div class="message_wrapper" style="padding-left: 15px;">
                                  <h4 class="">SEGUIMIENTO NO REALIZO MANTENIMIENTO 10K</h4>
                                  <div class="row">
                                    <div class="form-horizontalform-label-left input_mask msg  col-md-11 col-sm-11 col-xs-11">
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">SE CONTACTO A:</label>
                                        <label class="control-label datos col-md-7 col-sm-7 col-xs-11">Pedro Perez</label>
                                      </div>
                                    
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">CONTACTADO POR:</label>
                                        <label class="control-label datos col-md-7 col-sm-7 col-xs-11">Roberto Marquez</label>
                                      </div>
                                    
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">¿QUE DIJO?:</label>
                                        <label class="control-label datos col-md-7 col-sm-7 col-xs-11">Olvido llevar su vehiculo al manetenimiento periodico, lo llevara le fin de semana</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <a href="#"><i class="fa fa-phone"></i> Contactado por telefono </a>
                                  </div>
                                </div>
                              </li>
                              

                            
                              <li>
                                <div class="message_date" style="float: left !important; text-align: right;">
                                  <h3 class="date text-info sub2 ">30</h3>
                                  <p class="month">Abr<br><small>2018</small></p>
                                </div>
                                <div class="message_wrapper" style="padding-left: 15px;">
                                  <h4 class="">INFORMAR SOBRE PROMOCION</h4>
                                  <div class="row">
                                    <div class="form-horizontalform-label-left input_mask msg  col-md-11 col-sm-11 col-xs-11">
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">SE CONTACTO A:</label>
                                        <label class="control-label datos col-md-7 col-sm-7 col-xs-11">Natalia Rada <span class="label label-default">Esposa</span></label>
                                      </div>
                                    
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">CONTACTADO POR:</label>
                                        <label class="control-label datos col-md-7 col-sm-7 col-xs-11">Roberto Marquez</label>
                                      </div>
                                    
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">¿QUE DIJO?:</label>
                                        <label class="control-label datos col-md-7 col-sm-7 col-xs-11">Esta interesado, pasara por show room</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <a href="#"><i class="fa fa-mobile-phone"></i> Contactado por celular </a>
                                  </div>
                                </div>
                              </li>
                              

                            </ul> --}}
                            <!-- end recent activity -->

                          

                            

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
                  
                <div class="col-md-12">
                 
                    
                     <br>
                   

                      
                        <!-- title row -->
                        <div class="row">
                          <div class="col-md-5 col-xs-5  invoice-header">
                            <h3>
                                 FACTURA.<br>
                                <small >Fecha: 16/08/2016</small>
                            </h3>
                          </div>
                          <div class="col-md-7 col-xs-7">
                            <img class="pull-right" src="{{URL::asset('images/toyo-logo.png')}}" style="width:60%">
                            
                          </div>

                          <!-- /.col -->
                        </div>
                        <hr>
                        
                        <div class="row invoice-info">
                          <div class="col-sm-4 invoice-col">
                            De
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
                            Al señor(a)
                            <address>
                                            <strong>Pedro Perez</strong>
                                            <br>Av del Ejercito # 174, La Paz
                                            <br>8264209 LP
                                            <br>Telefono: 22384170
                                            <br>Email:Pedro.pp@toyosa.con LP
                                        </address>
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-4 invoice-col">
                            <b>FACTURA #007612456</b>
                            <br>
                            <br>
                            <b>Codigo de control:</b> 4F3S8J
                            <br>
                            <b>Limite emision:</b> 2/22/2014
                            <br>
                            <b>Cuenta:</b> 968-34567
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
                                  
                                  <th>Producto</th>
                                  <th>serie</th>
                                  <th>Cantidad</th>
                                  <th>Subtotal</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Correa motor</td>
                                  <td>455-981-221</td>
                                  <td>1</td>
                                  
                                  <td>bs 80.50</td>
                                </tr>
                                <tr>
                                  <td>Bujia</td>
                                  <td>98-711-821</td>
                                  <td>4</td>
                                  
                                  <td>bs 900.00</td>
                                </tr>
                                <tr>
                                  <td>Empaque</td>
                                  <td>987-691-741</td>
                                  <td>1</td>
                                  
                                  <td>bs 100.00</td>
                                </tr> 
                                <tr>
                                  <td></td>
                                  <td></td>
                                  
                                  <td align="right"><strong>Total</strong></td>
                                  
                                  <td><strong>bs 1080.50</strong></td>
                                </tr>
                                
                              </tbody>
                            </table>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->


                        <!-- this row will not appear when printing -->
                     
                    
                  
                </div>
              
              </div>

              <div class="modal-footer">
                <button class="btn btn-primary " style="margin-right: 5px;"><i class="fa fa-print"></i> Imprimir</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
              </div>

            </div>
          </div>
        </div>




  
          <script src="{{asset('bower_components/gentelella/vendors/nprogress/nprogress.js')}}"></script>
 