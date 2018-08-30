
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
                          <li role="presentation" class="active"><a href="#Mantenimiento" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Mantenimiento</a>
                          </li>
                          <li role="presentation" class=""><a href="#servicio" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Servicio de reparacion</a>
                          </li>
                         
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="Mantenimiento" aria-labelledby="home-tab">
                          
                            <div class="table-responsive">

                              <table class="data table table-striped no-margin">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Mantenimiento</th>
                                    <th>Fecha</th>
                                    <th>Taller</th>
                                    <th>Opcion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>mantenimiento 1K</td>
                                    <td>05-05-2017</td>
                                    <td>Curva de Holguin</td>
                                    <td><a data-toggle="modal" href="#modal_factura" class="btn-sm btn-success">Ver detalle</a></td>
                                  </tr>

                                  <tr>
                                    <td>5</td>
                                    <td>mantenimiento 5K</td>
                                    <td>18-11-2017</td>
                                    <td>Curva de Holguin</td>
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
                <div class="col-md-12">
                     
                    <div class="row">
                      <section class="panel">
                        <div class="panel-body">
                          <h3 class="green"><i class="fa fa-paint-brush"></i>Mantenimiento programado 1000 kilometros</h3>
                          <br/>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="project_detail">
                                <p class="title">Cliente</p>
                                <p>Pedro Perez</p>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <ul class="list-unstyled project_files">
                                <li><a href=""><i class="fa fa-calendar"></i> 05-05-2017</a></li>
                                <li><a href=""><i class="fa fa-dollar"></i> Bs. 0</a></li>
                              </ul>
                            </div>
                          </div>
                          <br/>
                          <p> El mantenimiento se realizo con normalidad, no se presento ningun tipo de desperfecto ni irregularidad.</p>
                        </div>
                      </section>
                    </div>

                        <div class="row">
                          <div class="col-xs-12 table">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>ACTIVIDAD</th>
                                  <th>TIEMPO</th>
                                  <th>OBSERVACION</th>
                                  
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>CAMBIO DE EMPAQUE </td>
                                  <td>20 MIN</td>
                                  <td></td>
                                  
                                  
                                </tr>
                                <tr>
                                  <td>CAMBIO DE FILTRO</td>
                                  <td>15 MIN</td>
                                  <td></td>
                                  
                                </tr>
                                <tr>
                                  <td>ENGRASE DE CARDAN</td>
                                  <td>25 MIN</td>
                                  <td></td>
                                  
                                </tr> 
                                 <tr>
                                  <td>CAMBIO DE LUBRICANTE</td>
                                  <td>1 HR</td>
                                  <td></td>
                                 
                                </tr> 
                                <tr>
                                  <td>LAVADO DE CORTESIA</td>
                                  <td>25 MIN</td>
                                  <td></td>
                                
                                </tr> 
                              </tbody>
                            </table>                   
                          </div>
                        </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
              </div>

            </div>
          </div>
        </div>

        