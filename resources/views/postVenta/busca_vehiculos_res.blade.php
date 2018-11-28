
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>VEHICULOS <small>Resultado de busqueda</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      </div>
                      <div class="clearfix"></div>

                      @foreach($vehiculos as $det)
                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <div class="left col-xs-7">
                              <h2>{{$det->CHASIS}}</h2> 
                              <p><strong>Año: </strong> {{$det->ANIO}}</p>
                              <p><strong>Marca: </strong> {{$det->MARCA}}</p>
                              <p><strong>Modelo: </strong> {{$det->MODELOS}}</p>
                              <p><strong>Master: </strong> {{$det->MASTER}}</p>
                              <p><strong>Motor: </strong> {{$det->nro_motor}}</p>
                              <p><strong>Color: </strong> {{$det->COLOR_EXTERNO}}</p>
                              <p><strong>Titular: </strong> {{$det->razon_social}} ({{$det->nro_doc_uni}})</p>
                             
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="{{URL::asset('images/unknown_car.jpg')}}" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-12">
                              <button type="button" class="btn btn-primary btn-xs pull-right" onclick="ver_vehiculo('{{$det->CHASIS}}')">
                                <i class="fa fa-user"> </i> Ver detalle
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

