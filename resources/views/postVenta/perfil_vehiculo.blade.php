
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Datos de Vehiculo</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-4 col-sm-4 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar" align="center">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view img-thumbnail" src="{{URL::asset('images/rav.jpg')}}" alt="Avatar" title="Change the avatar" style="max-width: 65%;">
                        </div>
                      </div>
                      
                      <hr>
                      <ul class="list-unstyled user_data">
                            <li><p class="title"><i class="fa fa-th-large"></i> MARCA: TOYOTA</p></li>
                            <li><p class="title"><i class="fa fa-tasks"></i> MODELO: RAV4 2.500 cc</p></li>
                            <li><p class="title"><i class="fa fa-calendar"></i> AÑO: 2017</p></li>
                            <li><p class="title"><i class="fa fa-barcode"></i> PLACA: 2578 - UFK</p></li>
                            <li><p class="title"><i class="fa fa-paint-brush"></i> COLOR: BLANCO PERLA</p></li>
                            <li><p class="title"><i class="fa fa-paint-brush"></i> COLOR INT: NEGRO</p></li>
                            <li><p class="title"><i class="fa fa-book"></i> MASTER: 32801-01</p></li>
                            <li><p class="title"><i class="fa fa-truck"></i> CHASIS: JTMBF3EV1HJ151660</p></li>
                            <li><a href="javascript:;" onclick="ver_cliente()"><p class="title"><i class="fa fa-user"></i> DUEÑO: Pedro Perez</p></a></li>
                      </ul>

                      <a class="btn btn-success btn-block"><i class="fa fa-edit m-right-xs"></i>Editar Datos</a>
                      <br />

                      <!-- start skills -->
                      <h4>Proceso de venta</h4>

                      <ul class="list-group list-group-flush">
                      
                        <li class="list-group-item" style="padding-left: 0px; padding-right: 0px;">
                          COTIZACION<span class="badge badge-success"> 05-02-2017 </span>
                        </li>
                        <li class="list-group-item" style="padding-left: 0px; padding-right: 0px;">
                          RESERVA<span class="badge badge-success"> 07-02-2017  </span>
                        </li>
                        <li class="list-group-item" style="padding-left: 0px; padding-right: 0px;">
                          FACTURA<span class="badge badge-success"> 07-02-2017 </span>
                        </li>
                        <li class="list-group-item" style="padding-left: 0px; padding-right: 0px;">
                          ENTREGA<span class="badge badge-success"> 10-02-2017  </span>
                        </li>
                      </ul>

                    </div>


                  <div class="col-md-8 col-sm-8 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>Actividad</h2>
                        </div>
                      </div>
                     
                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs sidebar-tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#Mantenimiento" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Historial de Mantenimiento</a>
                          </li>
                         {{--  <li role="presentation" class=""><a href="#servicio" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Servicio de reparacion</a>
                          </li> --}}
                         
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="Mantenimiento" aria-labelledby="home-tab">
                          <h5>Facturas de de Ot's</h5>
                            <div class="table-responsive">

                              <table class="data table table-striped no-margin">
                                <thead>
                                  <tr>
                                    <th>#Factura</th>
                                    <th>Autorizacion</th>
                                    <th>Fecha</th>
                                    <th>Taller</th>
                                    <th>OT</th>
                                    <th>Opcion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>00002</td>
                                    <td>307101800000050</td>
                                    <td>05-05-2017</td>
                                    <td>Curva de Holguin</td>
                                    <td>OT75778</td>
                                    <td><a data-toggle="modal" href="#modal_factura" class="btn-sm btn-success">Ver detalle</a></td>
                                  </tr>
                                  <tr>
                                    <td>00004</td>
                                    <td>307101800000050</td>
                                    <td>12-09-2017</td>
                                    <td>El Alto</td>
                                    <td>OT75780</td>
                                    <td><a data-toggle="modal" href="#modal_factura" class="btn-sm btn-success">Ver detalle</a></td>
                                  </tr>                              
                                  
                                </tbody>
                              </table>

                            </div>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="servicio" aria-labelledby="profile-tab">
                            <div class="table-responsive">
                              <table class="data table table-striped no-margin">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Servicio</th>
                                    <th>Fecha</th>
                                    <th>Taller</th>
                                    <th>Opcion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>Servicio de reparacion</td>
                                    <td>01-03-2018</td>
                                    <td>Curva de Holguin</td>
                                    <td><a data-toggle="modal" href="#modal_factura" class="btn-sm btn-success">Ver detalle</a></td>
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
                <h4 class="modal-title">DETALLE</h4>
              </div>

                <div class="modal-body">



                 
                   
                   

                      
                        <!-- title row -->
                        <div class="row">
                          <div class="col-md-5 col-xs-5  invoice-header">
                            <h3>
                                 FACTURA.<br>
                                <small >N° FACTURA: 0004</small><br>
                                <small >OT: OT75780 </small>
                                
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
                            <b>Fecha: </b>12/09/2018
                            <br>
                            <b>Autorizacion: </b>307101800000050
                            <br>
                            <b>Codigo de control:</b> 4F3S8J
                            <br>
                            <b>Limite emision:</b> 2/2/2018
                            <br>
                            <b>Ubicacion:</b> Curva de Holguin
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
                                  <td>001/ENGRASE CRUCETAS</td>
                                  <td>ENGRASE CRUCETAS</td>
                                  <td>1</td>
                                  <td>25</td>
                                  <td>25</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>002/CAMBIO ACEITE MO</td>
                                  <td>CAMBIO DE ACEITE MOTOR</td>
                                  <td>1</td>
                                  <td>35</td>
                                  <td>35</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>004/REVISAR NIVELES </td>
                                  <td>REVISION NIVEL DE ACEITES</td>
                                  <td>1</td>
                                  <td>50</td>
                                  <td>50</td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>011/REVISION DE FREN </td>
                                  <td>REVISION DE FRENOS</td>
                                  <td>1</td>
                                  <td>220</td>
                                  <td>220</td>
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td>90915-YZZD2</td>
                                  <td>CAMBIO FILTRO DE ACEITE   </td>
                                  <td>1</td>
                                  <td>70</td>
                                  <td>70</td>
                                </tr>
                                <tr>
                                  <td>6</td>
                                  <td>BRP037M08    </td>
                                  <td>ACEITE REPSOL 15W40  </td>
                                  <td>5600</td>
                                  <td>0</td>
                                  <td>280</td>
                                </tr>
                                
                                <tr>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  
                                  <td align="right"><strong>Total bs</strong></td>
                                  
                                  <td><strong>680.00</strong></td>
                                </tr>
                                
                              </tbody>
                            </table>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->


                        <!-- this row will not appear when printing -->
                     
                    
                  
          
              <div class="modal-footer">
                <button class="btn btn-primary " style="margin-right: 5px;"><i class="fa fa-print"></i> Imprimir</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
              </div>

            </div>
          </div>
        </div>

        