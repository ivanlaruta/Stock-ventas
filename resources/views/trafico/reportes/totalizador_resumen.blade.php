                    
                      <div class="block">
                        <div class="tags">
                          <a class="tag">
                            <span>RESUMEN REGIONAL</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                              <a>Resumen para: {{$regional}}</a>
                          </h2>
                          <div class="byline">
                            <a>Generado para le periodo: {{$desc_mes}}</a>
                          </div>
                          <br>
                          <p class="excerpt">El reporte muestra la cantidad de trafico que se genero por modelo</a>
                          </p>
                        </div>
                      </div>
                    
                    <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                        <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                          <h4 class="panel-title">En {{$regional}}</h4>
                        </a>
                        <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>Modelo</th>
                                  <th>Cantidad</th>
                                  
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($totalizador as $det)
                                <tr>
                                  <td>{{$det->modelo}}</td>
                                  <td>{{$det->total}}</td>
                                </tr>
                              @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                   

         