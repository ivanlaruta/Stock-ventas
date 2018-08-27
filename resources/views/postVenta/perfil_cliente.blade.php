
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
            border-left: 5px solid #eee 
        }



</style>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Perfil de cliente</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="{{URL::asset('images/pic.jpg')}}" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>Pedro Perez</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Av del Ejercito # 174, La Paz
                        </li>

                        <li>
                          <i class="fa fa-credit-card user-profile-icon"></i> Pedro.pp@toyosa.con LP
                        </li>

                        <li>
                          <i class="fa fa-card user-profile-icon"></i> 8264209 LP
                        </li>
                        <li>
                          <i class="fa fa-phone user-profile-icon"></i> 22384170 - 77756103
                        </li>

                        
                      </ul>

                      <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Editar Datos</a>
                      <br />

                      <!-- start skills -->
                      <h4>Resumen</h4>
                      <ul class="list-unstyled user_data">
                        <li class="sub">
                          <p>Vehiculos <strong class="pull-right">2</strong></p>
                        </li><br>

                        <li class="sub">
                          <p>Venta de repuestos <strong class="pull-right">1</strong></p>
                        </li><br>

                        <li class="sub">
                          <p>Seguimiento <strong class="pull-right">4</strong></p>
                        </li><br>
                        
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
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#Vehiculos" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Vehiculos</a>
                          </li>
                          <li role="presentation" class=""><a href="#Repuestos" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Venta de Repuestos</a>
                          </li>
                          <li role="presentation" class=""><a href="#Seguimiento" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Seguimiento</a>
                          </li>
                          <li role="presentation" class=""><a href="#Seguimiento2" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Seguimiento</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="Vehiculos" aria-labelledby="home-tab">

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
                                  <td><a href="">Ver detalle</a></td>
                                  
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Toyota</td>
                                  <td>Rav4</td>
                                  <td>2017</td>
                                  <td>Negro</td>
                                  <td>4898 LEI</td>
                                  <td><a href="">Ver detalle</a></td>
                                 
                                </tr>
                                
                              </tbody>
                            </table>
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="Repuestos" aria-labelledby="profile-tab">

                            <!-- start user projects -->
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
                                  <td><a href="">Ver detalle</a></td>
                                  
                                </tr>
                                
                              </tbody>
                            </table>
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="Seguimiento" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                            <table class="data table table-striped no-margin">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Fecha</th>
                                  <th>Ejecutivo</th>
                                  <th>Tipo de contacto</th>
                                  <th>Conclucion</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>02-02-2016</td>
                                  <td>Marco Martines</td>
                                  <td class="hidden-phone">Llamada</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>05-08-2016</td>
                                  <td>Julia Paco</td>
                                  <td class="hidden-phone">LLamada</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>11-05-2017</td>
                                  <td>Marco Martines</td>
                                  <td class="hidden-phone">Visita</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>25-11-2017</td>
                                  <td>Marco Martines</td>
                                  <td class="hidden-phone">Correo</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <!-- end user projects -->

                          </div>

                          <div role="tabpanel" class="tab-pane fade" id="Seguimiento2" aria-labelledby="profile-tab">



                            <!-- start recent activity -->
                            <ul class="messages">
                              <li>
                                <div class="message_date">
                                  <h3 class="date text-info sub2">24</h3>
                                  <p class="month">May<br><small>2017</small></p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">SEGUIMIENTO PERIODICO</h4>
                                  <div class="row">
                                    <div class="form-horizontalform-label-left input_mask msg  col-md-11 col-sm-11 col-xs-11">
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">Se contacto a:</label>
                                        <label class="control-label datos col-md-7 col-sm-7 col-xs-11">Pedro Perez</label>
                                      </div>
                                    
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">Contactado por:</label>
                                        <label class="control-label datos col-md-7 col-sm-7 col-xs-11">Roberto Marquez</label>
                                      </div>
                                    
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">¿Que dijo?:</label>
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
                                <div class="message_date">
                                  <h3 class="date text-info sub2">19</h3>
                                  <p class="month">Nov<br><small>2017</small></p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">SEGUIMIENTO NO REALIZO MANTENIMIENTO 10K</h4>
                                  <div class="row">
                                    <div class="form-horizontalform-label-left input_mask msg  col-md-11 col-sm-11 col-xs-11">
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">Se contacto a:</label>
                                        <label class="control-label datos col-md-7 col-sm-7 col-xs-11">Pedro Perez</label>
                                      </div>
                                    
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">Contactado por:</label>
                                        <label class="control-label datos col-md-7 col-sm-7 col-xs-11">Roberto Marquez</label>
                                      </div>
                                    
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">¿Que dijo?:</label>
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
                                <div class="message_date">
                                  <h3 class="date text-info sub2">30</h3>
                                  <p class="month">Abr<br><small>2018</small></p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading">INFORMAR SOBRE PROMOCION</h4>
                                  <div class="row">
                                    <div class="form-horizontalform-label-left input_mask msg  col-md-11 col-sm-11 col-xs-11">
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">Se contacto a:</label>
                                        <label class="control-label datos col-md-7 col-sm-7 col-xs-11">Susana Raldes de Perez <span class="badge badge-success">Esposa</span></label>
                                      </div>
                                    
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">Contactado por:</label>
                                        <label class="control-label datos col-md-7 col-sm-7 col-xs-11">Roberto Marquez</label>
                                      </div>
                                    
                                      <div class="form-group">
                                        <label class="control-label cab col-md-4 col-sm-4 col-xs-11">¿Que dijo?:</label>
                                        <label class="control-label datos col-md-7 col-sm-7 col-xs-11">Esta interesado, pasara por show room</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <a href="#"><i class="fa fa-mobile-phone"></i> Contactado por celular </a>
                                  </div>
                                </div>
                              </li>
                              

                            </ul>
                            <!-- end recent activity -->

                          

                            

                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

       

