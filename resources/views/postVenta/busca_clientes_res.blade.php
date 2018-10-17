
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      </div>
                      <div class="clearfix"></div>

                      @foreach($clientes as $det)
                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <div class="left col-xs-7">
                              <h2>{{$det->razon_social}}</h2> 
                              <p><strong>CI/NIT: </strong> {{$det->nro_doc_uni}}</p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i> 
                                  @if(empty($det->direccion)) Sin dato @else{{$det->direccion}}@endif
                                </li>
                                <li><i class="fa fa-phone"></i> 
                                  @if(empty($det->telefono)) Sin dato @else{{$det->telefono}}@endif
                                </li>
                                <li><i class="fa fa-mobile"></i> 
                                  @if(empty($det->celular)) Sin dato @else{{$det->celular}}@endif
                                </li>
                                {{-- <li><i class="fa fa-at"></i> 
                                  @if(empty($det->email)) Sin dato @else{{$det->email}}@endif
                                </li> --}}
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="{{URL::asset('images/pic.jpg')}}" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-12">
                              <button type="button" class="btn btn-primary btn-xs pull-right" onclick="ver_cliente({{$det->nro_doc_uni}},'{{$det->razon_social}}')">
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

