@extends('layouts.main')

@section('content')

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>SEGUIMIENTO DE DAÑOS</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> <small>BUSQUEDA</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left">
                      <div class="form-group">
                        {!! Form::open (['route' => 'cb.danio_inicio','method' => 'GET'])!!}
                        <div class="col-lg-6 col-lg-offset-3">
                          <div class="input-group">
                            <input type="text" name="chassis" id="chassis" class="form-control" placeholder="Ingrese chassis" autofocus value={{$chassis}} >
                            <span class="input-group-btn">
                              <button type="submit" class="btn btn-primary">Buscar!</button>
                            </span>
                          </div>
                        </div>
                        {!! Form::close()!!}
                      </div>
                    </form>
                  </div>
                </div>
              </div>


              @if(!empty($chassis))
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> <small>RESULTADO DE LA BUSQUEDA</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content table-responsive">
                    <table id="" class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>MARCA</th>
                          <th>MODELO</th>
                          <th>MASTER</th>
                          <th>CHASSIS</th>
                         
                          <th>OPCIONES</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($resultado as $res)
                      <tr>
    
                        <td>{{$res->ITEM}}</td> 
                        <td>{{$res->MARCA}}</td> 
                        <td>{{$res->MODELO}}</td> 
                        <td>{{$res->MASTER}}</td> 
                        <td>{{$res->CHASSIS}}</td> 
                        
                        <td><a href="{{ route('cb.danio_det',['id'=>str_replace("/", "_", $res->CHASSIS)])}}" class="btn btn-round btn-success btn-sm"> Ver detalle</a></td> 
                                            
                      </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              @endif

          </div>
        </div>
          <div class="clearfix"></div>
        </div>
        



@endsection

@section('scripts')

<script type="text/javascript">

</script>
@endsection