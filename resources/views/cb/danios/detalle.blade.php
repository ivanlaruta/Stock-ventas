@extends('layouts.main')

@section('content')
<style type="text/css">


  
</style>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title">
        <h3><a href="{{ route('cb.danio_inicio')}}">Seguimiento de daños por unidad</a></h3>
        <br>
      </div>
    </div>
    <br>
    <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>HISTORIAL DE DAÑOS <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @foreach($danios as $det)
                    @if($det->MOVIMIENTO =='1')
                    <h2>INGESO </h2>@else<h2>SALIDA </h2>
                    @endif
                    <article class="media event">
                      <a class="pull-left date" style="width: 75px;">
                        {{-- <p class="month">{{date("m", strtotime($det->fecha))}}</p> --}}
                        <p class="month">{{date("F", mktime(0, 0, 0, date("m", strtotime($det->fecha)), 10))}}</p>
                        <p class="day">{{date("d", strtotime($det->fecha))}}</p>
                        <p class="month">{{date("Y", strtotime($det->fecha))}}</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">Lote: {{$det->LOTE}}</a>
                        <p><strong>Origen: </strong>{{$det->COD_SUC_ORIGEN}} {{$det->ORIGEN}}</p>
                        @if($det->MOVIMIENTO =='2')
                        <p><strong>Destino: </strong>{{$det->COD_SUC_DESTINO}} {{$det->DESTINO}}</p>
                        @endif
                        <p><strong>Usuario: </strong>{{$det->NOMBRE}}</p>
                        <p><strong>Cantidad: </strong>{{$det->CANTIDAD}}</p>
                        <p><strong>Posicion: </strong>{{$det->POSICION}} {{$det->POSICION_DESC}}</p>
                        <p><strong>Tipo de daño: </strong>{{$det->DANIO_DESC}}</p>
                        <p><strong>Observacion: </strong>{{$det->OBSERVACION}}</p>
                        <a class="title" href="#">imagen</a>
                      </div>
                    </article>
                    @endforeach
                  </div>
                </div>
              </div>
              
            
              
            </div>
         

      <div class="col-md-12 col-xs-12 animated fadeInUp"></div>
    <div class="clearfix"></div>
  </div>
</div>
        



@endsection

@section('scripts')


@endsection