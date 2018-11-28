
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
                <img class="img-responsive avatar-view img-thumbnail" src="{{URL::asset('images/unknown_car.jpg')}}" alt="Avatar" title="Change the avatar" style="max-width: 65%;">
              </div>
            </div>
            
            <hr>
        {{--     <ul class="list-unstyled user_data">
                  <li><p class="title"><i class="fa fa-th-large"></i> MARCA: {{$vehiculos->MARCA}}</p></li>
                  <li><p class="title"><i class="fa fa-tasks"></i> MODELO: {{$vehiculos->MODELOS}}</p></li>
                  <li><p class="title"><i class="fa fa-tasks"></i> MODELO: {{$vehiculos->COD_MODELO}} - {{$vehiculos->MODELO}}</p></li>
                  <li><p class="title"><i class="fa fa-tasks"></i> MOTOR: {{$vehiculos->num_motor}}</p></li>
                  <li><p class="title"><i class="fa fa-calendar"></i> AÑO: {{$vehiculos->ANIO}}</p></li>
                  <li><p class="title"><i class="fa fa-paint-brush"></i> COLOR: {{$vehiculos->COLOR_EXTERNO}}</p></li>
                  <li><p class="title"><i class="fa fa-paint-brush"></i> COLOR INT: {{$vehiculos->COLOR_INTERNO}}</p></li>
                  <li><p class="title"><i class="fa fa-book"></i> MASTER: {{$vehiculos->cod_master}} - {{$vehiculos->MASTER}}</p></li>
                  <li><p class="title"><i class="fa fa-truck"></i> CHASIS: {{$vehiculos->CHASIS}}</p></li>
                  <li><p class="title"><i class="fa fa-barcode"></i> PLACA: </p></li>
                  
            </ul> --}}
            <ul class="list-unstyled user_data">
              <li><strong>MARCA :</strong>{{$vehiculos->MARCA}}</li>
              <li><strong>MODELO GENERICO :</strong>{{$vehiculos->MODELOS}}</li>
              <li><strong>MODELO :</strong>{{$vehiculos->COD_MODELO}} - {{$vehiculos->MODELO}}</li>
              <li><strong>MASTER :</strong>{{$vehiculos->cod_master}} - {{$vehiculos->MASTER}}</li>
              <li><strong>CHASIS :</strong>{{$vehiculos->CHASIS}}</li>
              <li><strong>MOTOR :</strong>{{$vehiculos->nro_motor}}</li>
              <li><strong>AÑO :</strong>{{$vehiculos->ANIO}}</li>
              <li><strong>COLOR EXTERNO :</strong>{{$vehiculos->COLOR_EXTERNO}}</li>
              <li><strong>COLOR INTERNO :</strong>{{$vehiculos->COLOR_INTERNO}}</li>
              <li><strong>PLACA :</strong>{{$vehiculos->PLACA}}</li>
            </ul>

{{--         <ul class="list-unstyled user_data">
          <div class="form-horizontal form-label-left">

            <div class="form-group">
              <label>MARCA :</label>
              <label class="control-label" style="text-align: left; font-weight: normal;">{{$vehiculos->MARCA}}</label>
            </div>
            <div class="form-group">
              <label>MODELO GENERICO :</label>
              <label class="control-label" style="text-align: left; font-weight: normal;">{{$vehiculos->MODELOS}}</label>
            </div>
            <div class="form-group">
              <label>MODELO :</label>
              <label class="control-label" style="text-align: left; font-weight: normal;">{{$vehiculos->COD_MODELO}} - {{$vehiculos->MODELO}}</label>
            </div>
            <div class="form-group">
              <label>MASTER :</label>
              <label class="control-label" style="text-align: left; font-weight: normal;">{{$vehiculos->cod_master}} - {{$vehiculos->MASTER}}</label>
            </div>
            <div class="form-group">
              <label>CHASIS :</label>
              <label class="control-label" style="text-align: left; font-weight: normal;">{{$vehiculos->CHASIS}}</label>
            </div>
            <div class="form-group">
              <label>MOTOR :</label>
              <label class="control-label" style="text-align: left; font-weight: normal;">{{$vehiculos->nro_motor}}</label>
            </div>
            <div class="form-group">
              <label>AÑO :</label>
              <label class="control-label" style="text-align: left; font-weight: normal;">{{$vehiculos->ANIO}}</label>
            </div>
            <div class="form-group">
              <label>COLOR EXTERNO :</label>
              <label class="control-label" style="text-align: left; font-weight: normal;">{{$vehiculos->COLOR_EXTERNO}}</label>
            </div>
            <div class="form-group">
              <label>COLOR INTERNO :</label>
              <label class="control-label" style="text-align: left; font-weight: normal;">{{$vehiculos->COLOR_INTERNO}}</label>
            </div>
            <div class="form-group">
              <label>PLACA :</label>
              <label class="control-label" style="text-align: left; font-weight: normal;">{{$vehiculos->MARCA}}</label>
            </div>
            
          </div>
        </ul> --}}
<hr>
            <h4><strong>TITULAR</strong></h4>
            <ul class="list-group">
              <li  class="list-group-item" style="padding-left: 0px; padding-right: 0px;">
                <a href="javascript:;" onclick="ver_cliente({{$vehiculos->nro_doc_uni}},'{{$vehiculos->razon_social}}')">{{$vehiculos->razon_social}}</a> 
                <span class="label label-primary pull-right">Dueño titular</span>
                
                <a href="#"><img src="{{URL::asset('images/pic.jpg')}}" class="avatar" alt="Avatar" title="asdas"></a>
              </li>
            </ul>

<hr>
            <!-- start skills -->
            
            <h4><strong>PROCESO DE VENTA</strong></h4>
            <h4><small>VENDEDOR : {{$proceso->VENDEDOR}}</small></h4>
            <ul class="list-group list-group-flush">
            @if(!empty($proceso->f_cotiza))
              <li class="list-group-item" style="padding-left: 15px; padding-right: 15px;">
                COTIZACION<span class="label label-default pull-right"> {{$proceso->f_cotiza}} </span>
              </li>
            @endif
            @if(!empty($proceso->f_contr))
              <li class="list-group-item" style="padding-left: 15px; padding-right: 15px;">
                CONTRATO<span class="label label-default pull-right"> {{$proceso->f_contr}} </span>
              </li>
            @endif
            @if(!empty($proceso->f_aden))
              <li class="list-group-item" style="padding-left: 15px; padding-right: 15px;">
                CONTRATO<span class="label label-default pull-right"> {{$proceso->f_aden}} </span>
              </li>
            @endif
            @if(!empty($proceso->f_res))
              <li class="list-group-item" style="padding-left: 15px; padding-right: 15px;">
                RESERVA<span class="label label-default pull-right"> {{$proceso->f_res}} </span>
              </li>
            @endif
            @if(!empty($proceso->f_fac))
              <li class="list-group-item" style="padding-left: 15px; padding-right: 15px;">
                FACTURA<span class="label label-primary pull-right"> {{$proceso->f_fac}} </span>
              </li>
            @endif
            @if(!empty($proceso->f_nota))
              <li class="list-group-item" style="padding-left: 15px; padding-right: 15px;">
                ENTREGA<span class="label label-success pull-right"> {{$proceso->f_nota}} </span>
              </li>
            @endif
            </ul>
            <br>
            <br>
            <a class="btn btn-success btn-block "><i class="fa fa-edit m-right-xs"></i>VER HOJA DE DETALLE</a>
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
                        @foreach($ots as $det)
                        <tr>
                          <td>{{$det->FACTURA}}</td>
                          <td>{{$det->AUTORIZACION}}</td>
                          <td>{{$det->FECHA}}</td>
                          <td>{{$det->LUGAR}}</td>
                          <td>{{$det->OT}}</td>
                          {{-- <td><a data-toggle="modal" href="#modal_factura" class="btn-sm btn-success">Ver detalle</a></td> --}}
                          {{-- <td><a  href="#" class="btn btn-success btn_factura"> Ver detalle</a></td> --}}
                          {{-- <td><a href="#" class="btn-sm btn-success btn_factura" chasis = '{{$det->CHASIS}}' factura = '{{$det->FACTURA}}' ot = '{{$det->OT}}' >Ver detalle</a></td> --}}
                          <td><button type="button" class="btn btn-primary btn-xs " onclick="ver_factura_ot('{{$det->CHASIS}}','{{$det->FACTURA}}','{{$det->OT}}')">
                                Ver detalle
                              </button>
                            </td>
                          
                        </tr>
                        @endforeach
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
                          <td><a  href="#" class="btn btn-success"> Detalle</a></td>
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
