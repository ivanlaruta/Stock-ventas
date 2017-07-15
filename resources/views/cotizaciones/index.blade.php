@extends('layouts.main')

@section('content')

<div class="right_col" role="main">

  <div class="page-title">
    <div class="title_">
      <h3>
        <a href="{{ route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}">COTIZACIONES {{$año_actual}} </a>  

        @if( $title == 'mes_regional' || $title == 'mes' || $title == 'diarias' || $title == 'mes_marca')
        <a href="{{ route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'mes','mes'=>$mes,'regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / {{$desc_mes}} </a>  
        @endif 

        @if($title == 'diarias') 
        / @if($v_aux <> '0'){{$v_aux}}@endif {{date('d',strtotime($inicio))}}  
        @endif 

        @if($title == 'marca' || $title == 'marca_mes' || $title == 'marca_regional'|| $title == 'marca_modelo') 
        <a href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'marca','mes'=>'0','regional'=>'0','marca'=>($marca),'sucursal'=>'0','modelo'=>'0'])}}"> 
          / {{$marca}}  </a>

          @endif 

          @if( $title == 'semanal' || $title == 'ult_15_dias' ) 
          / {{date('d/m/Y',strtotime($inicio))}} - {{date('d/m/Y',strtotime($final))}} 
          @endif 

          @if( $title == 'regional' || $title == 'regional_mes'|| $title == 'regional_sucursal' ||  $title == 'regional_marca' )
          <a href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'regional','mes'=>'0','regional'=>$regional,'marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / {{$regional}} </a>  
          @endif 

          @if( $title == 'regional_mes') 
          / {{$desc_mes}}  
          @endif

          @if( $title == 'mes_regional') 
          / {{$regional}}  
          @endif 

          @if( $title == 'mes_marca') 
          / {{$marca}}  
          @endif 

          @if( $title == 'regional_sucursal') 
          / {{$sucursal}}  
          @endif 
          @if( $title == 'regional_marca') 
          / {{$marca}}  
          @endif 
          @if( $title == 'marca_mes' ) 
          / {{$desc_mes}}  
          @endif 
          @if( $title == 'marca_regional' ) 
          / {{$regional}}  
          @endif 
          @if( $title == 'marca_modelo' ) 
          / {{$modelo}}  
          @endif 

        </h3>
      </div>
      <div class="title_right"></div>
    </div>


    <div class="col-md-12">
      <div class="row">
        <div class="row tile_count" align="center">

          @if($title == 'index')
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> Hoy</span>
            <div class="count red" align="center">{{$dia}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>$hoy,'f_fin'=>$hoy,'title'=>'diarias','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}">{{$hoy->format('d/m/Y')}} </a></span>
          </div>
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> Esta semana</span>
            <div class="count" align="center">{{$esta_sema}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>$inicio_sem,'f_fin'=>$hoy,'title'=>'semanal','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}">Desde el {{$inicio_sem->format('d/m/Y')}} </a></span>
          </div>
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> Ultimos <i class="red">15 </i>dias</span>
            <div class="count "  align="center">{{$ult_15d}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>$ult_15,'f_fin'=>$hoy,'title'=>'ult_15_dias','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}">Desde el {{$ult_15->format('d/m/Y')}}  </a></span>
          </div>
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> Este mes</span>
            <div class="count" align="center">{{$este_mes}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>$inicio_mes,'f_fin'=>$hoy,'title'=>'mes','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}">Desde el {{$inicio_mes->format('d/m/Y')}} </a></span>
          </div>
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> Este año</span>
            <div class="count blue" align="center">{{$total}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{ route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}">Desde el {{$inicio_año->format('d/m/Y')}}</a></span>
          </div>
          @endif

          @if($title == 'diarias')
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> {{date('d/m/Y',strtotime($inicio))}}</span>
            <div class="count blue" align="center">{{$total}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>$inicio,'f_fin'=>$final,'mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}">Total dia</a></span>
          </div>
          @endif

          @if($title == 'semanal' || $title == 'ult_15_dias')
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> {{date('d/m/Y',strtotime($inicio))}} -{{date('d/m/Y',strtotime($final))}}</span>
            <div class="count blue" align="center">{{$total}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>'0','f_fin'=>'0','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}">Total {{$title}}</a></span>
          </div>
          @endif

          @if($title == 'mes')
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> {{$desc_mes}}</span>
            <div class="count blue" align="center">{{$total}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>'0','f_fin'=>'0','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}">Total {{$desc_mes}}</a></span>
          </div>
          @endif

          @if($title == 'regional'  )
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> {{$regional}}</span>
            <div class="count blue" align="center">{{$total}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>'0','f_fin'=>'0','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}">Total {{$año_actual}}</a></span>
          </div>
          @endif

          @if($title == 'regional_sucursal'  )
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> {{$regional}}</span>
            <div class="count blue" align="center">{{$total}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>'0','f_fin'=>'0','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}"> {{$sucursal}}</a></span>
          </div>
          @endif

          @if( $title == 'mes_regional' || $title == 'regional_mes' )
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> {{$regional}}</span>
            <div class="count blue" align="center">{{$total}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>'0','f_fin'=>'0','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}">{{$desc_mes}} {{$año_actual}}</a></span>
          </div>
          @endif

          @if( $title == 'marca')
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> {{$marca}}</span>
            <div class="count blue" align="center">{{$total}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>'0','f_fin'=>'0','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}">{{$marca}} {{$año_actual}}</a></span>
          </div>
          @endif

          @if( $title == 'mes_marca' || $title == 'marca_mes' )
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> {{$marca}}</span>
            <div class="count blue" align="center">{{$total}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>'0','f_fin'=>'0','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}">{{$desc_mes}} {{$año_actual}}</a></span>
          </div>
          @endif

          @if( $title == 'marca_modelo'  )
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> {{$marca}}</span>
            <div class="count blue" align="center">{{$total}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>'0','f_fin'=>'0','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}">{{$modelo}} {{$año_actual}}</a></span>
          </div>
          @endif

          @if($title == 'regional_marca' || $title == 'marca_regional' )
          <div class="col-md-2 col-sm-6 col-xs-6 tile_stats_count animated flipInY">
            <span class="count_top"><i class="fa fa-clock-o"></i> {{$marca}}</span>
            <div class="count blue" align="center">{{$total}}</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-calendar"></i> </i> <a href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>'0','f_fin'=>'0','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}">{{$marca}} {{$año_actual}}</a></span>
          </div>
          @endif

        


        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="row">

        @if($title == 'index' || $title == 'regional'|| $title == 'marca'|| $title == 'regional_sucursal' || $title == 'regional_marca' || $title == 'marca_regional' || $title == 'marca_modelo')
        <div class="col-md-3 col-sm-12 col-xs-12 animated fadeIn ">
          <div class="x_panel">
            <h2>MES<small> </small></h2>
          </div>

          <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr>
                  <th>MES</th>
                  <th style="text-align: right;">COTIZACIONES</th>
                </tr>
              </thead>
              <tbody>
                @foreach($por_mes as $mes)
                <tr class='v_link' 
                @if($title == 'index')
                data-href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'mes','mes'=>$mes-> MES,'regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}" @endif
                @if($title == 'regional')
                data-href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'regional_mes','mes'=>$mes-> MES,'regional'=>$regional,'marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}" @endif
                @if($title == 'marca')
                data-href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'marca_mes','mes'=>$mes-> MES,'regional'=>'0','marca'=>$marca,'sucursal'=>'0','modelo'=>'0'])}}" @endif
                >               
                <td> 
                  @if ($mes-> MES == 1) ENERO @endif
                  @if ($mes-> MES == 2) FEBRERO @endif
                  @if ($mes-> MES == 3) MARZO @endif
                  @if ($mes-> MES == 4) ABRIL @endif
                  @if ($mes-> MES == 5) MAYO @endif
                  @if ($mes-> MES == 6) JUNIO @endif
                  @if ($mes-> MES == 7) JULIO @endif
                  @if ($mes-> MES == 8) AGOSTO @endif
                  @if ($mes-> MES == 9) SEPTIEMBRE @endif
                  @if ($mes-> MES == 10) OCTUBRE @endif
                  @if ($mes-> MES == 11) NOVIEMBRE @endif
                  @if ($mes-> MES == 12) DICIEMBRE @endif
                </td>
                <td align="right"><span class="badge badge-success">{{ $mes-> COTIZACIONES }}</span></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>                        
      </div>
      @endif

      @if( $title == 'semanal' || $title == 'ult_15_dias' || $title == 'mes' || $title == 'mes_regional' || $title == 'regional_mes' || $title == 'mes_marca' || $title == 'marca_mes')
      <div class="col-md-3 col-sm-12 col-xs-12 animated fadeIn ">
        <div class="x_panel">
          <h2>DIAS<small> </small></h2>
        </div>

        <div class="table-responsive">
          <table class="table table-striped jambo_table bulk_action">
            <thead>
              <tr>
                <th>DIA</th>
                <th style="text-align: right;">COTIZACIONES</th>
              </tr>
            </thead>
            <tbody>
              @foreach($por_dia as $dia)
              <tr class='v_link' 
              @if( $title == 'mes')
              data-href="{{route('cotizaciones.dashboard',['v_aux'=>$dia->NOM_DIA,'f_ini'=>$dia-> FECHA_COTIZACION,'f_fin'=>$dia-> FECHA_COTIZACION,'title'=>'diarias','mes'=>$mes,'regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"  
              @endif

              @if( $title == 'mes_regional' || $title == 'regional_mes')
              data-href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>$dia-> FECHA_COTIZACION,'f_fin'=>$dia-> FECHA_COTIZACION,'mes'=>'0','regional'=>$regional,'marca'=>'0','sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}"  
              @endif
              
              @if( $title == 'semanal' )
              data-href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>$dia-> FECHA_COTIZACION,'f_fin'=>$dia-> FECHA_COTIZACION,'mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}"  
              @endif
              
              @if( $title == 'mes_marca' || $title == 'marca_mes')
              data-href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>$dia-> FECHA_COTIZACION,'f_fin'=>$dia-> FECHA_COTIZACION,'mes'=>'0','regional'=>'0','marca'=>$marca,'sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}"  
              @endif
              
              >

              <td>  <span class="label label-default">{{date('d',strtotime($dia-> FECHA_COTIZACION))}}</span> {{$dia->NOM_DIA}} 

              </td>
              <td align="right"><span class="badge badge-success">{{ $dia-> COTIZACIONES }}</span></td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>                        
    </div>
    @endif


    @if( $title == 'index' || $title == 'mes' || $title == 'marca' || $title == 'diarias'|| $title == 'mes_marca' || $title == 'marca_mes' || $title == 'marca_modelo'|| $title == 'semanal'|| $title == 'ult_15_dias')
    <div @if($title == 'diarias') class="col-md-4 col-sm-12 col-xs-12 animated fadeIn" @else class="col-md-3 col-sm-12 col-xs-12 animated fadeIn" @endif>
      <div class="x_panel">
        <h2>REGIONAL<small> </small></h2>
      </div>
      <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr>
              <th>REGIONAL</th>
              <th style="text-align: right;">COTIZACIONES</th>
            </tr>
          </thead>

          <tbody>
            @foreach($por_reg as $reg)
            <tr  class='v_link'

            @if($title == 'index')
            data-href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'regional','mes'=>'0','regional'=>$reg-> REGIONAL,'marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"@endif

            @if($title == 'mes')
            data-href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'mes_regional','mes'=>$mes,'regional'=>$reg-> REGIONAL,'marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}" @endif  

            @if($title == 'diarias' || $title == 'semanal' || $title == 'ult_15_dias')
            data-href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'diarias','f_ini'=>$inicio,'f_fin'=>$final,'mes'=>'0','regional'=>$reg-> REGIONAL,'marca'=>'0','sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}" @endif  

            @if($title == 'marca')
            data-href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'marca_regional','mes'=>'0','regional'=>$reg-> REGIONAL,'marca'=>$marca,'sucursal'=>'0','modelo'=>'0'])}}" @endif  
            
             @if( $title == 'mes_marca' || $title == 'marca_mes')
              data-href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>$inicio,'f_fin'=>$final,'mes'=>'0','regional'=>$reg-> REGIONAL,'marca'=>$marca,'sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}"  
              @endif

            >      
            <td> @if( is_null($reg-> REGIONAL)) Sin Dato @else {{ $reg-> REGIONAL }} @endif</td>
            <td align="right"><span class="badge badge-success">{{ $reg-> COTIZACIONES }}</span></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>                        
  </div>
  @endif


  @if( $title == 'regional' || $title == 'mes_regional' || $title == 'regional_mes' || $title == 'regional_marca' || $title == 'marca_regional')

  <div @if($title == 'diarias') class="col-md-4 col-sm-12 col-xs-12 animated fadeIn" @else class="col-md-3 col-sm-12 col-xs-12 animated fadeIn" @endif>
    <div class="x_panel">
      <h2>SUCURSAL<small>  </small></h2>
    </div>
    <div class="table-responsive">
      <table class="table table-striped jambo_table bulk_action">
        <thead>
          <tr>
            <th>SUCURSAL</th>
            <th style="text-align: right;">COTIZACIONES</th>
          </tr>
        </thead>

        <tbody>
          @foreach($por_suc as $suc)
          <tr class='v_link' 

          @if($title == 'regional')
          data-href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'regional_sucursal','mes'=>'0','regional'=>$regional,'marca'=>'0','sucursal'=> $suc-> SUCURSAL,'modelo'=>'0'])}}" 
          @endif
          
          @if( $title == 'mes_regional' || $title == 'regional_mes')
              data-href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>$inicio,'f_fin'=>$final,'mes'=>'0','regional'=>$regional,'marca'=>'0','sucursal'=>$suc-> SUCURSAL,'modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}"  
              @endif

          >                
          <td> {{ $suc-> SUCURSAL }}</td>
          <td align="right"><span class="badge badge-success">{{ $suc-> COTIZACIONES }}</span></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>                        
</div>
@endif


@if( $title == 'index' || $title == 'mes' || $title == 'regional' || $title == 'diarias'|| $title == 'mes_regional'|| $title == 'diarias' || $title == 'regional_mes' || $title == 'regional_sucursal' || $title == 'semanal'|| $title == 'ult_15_dias' )
<div @if($title == 'diarias') class="col-md-4 col-sm-12 col-xs-12 animated fadeIn" @else class="col-md-3 col-sm-12 col-xs-12 animated fadeIn" @endif>
  <div class="x_panel">
    <h2>MARCA<small> </small></h2>
  </div>
  <div class="table-responsive">
    <table class="table table-striped jambo_table bulk_action">
      <thead>
        <tr>
          <th>MARCA</th>
          <th style="text-align: right;">COTIZACIONES</th>
        </tr>
      </thead>
      <tbody>
        @foreach($por_marca as $mar)
        <tr class='v_link' 

        @if($title == 'index')
        data-href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'marca','mes'=>'0','regional'=>'0','marca'=>rtrim(($mar-> MARCA)),'sucursal'=>'0','modelo'=>'0'])}}" @endif

        @if($title == 'mes')
        data-href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'mes_marca','mes'=>$mes,'regional'=>'0','marca'=>$mar-> MARCA,'sucursal'=>'0','modelo'=>'0'])}}" @endif

        @if($title == 'regional')
        data-href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'regional_marca','mes'=>'0','regional'=>$regional,'marca'=>$mar-> MARCA,'sucursal'=>'0','modelo'=>'0'])}}" @endif

        @if($title == 'diarias' || $title == 'semanal'|| $title == 'ult_15_dias' )
        data-href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>$inicio,'f_fin'=>$final,'mes'=>'0','regional'=>'0','marca'=>$mar-> MARCA,'sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}" @endif

        @if($title == 'mes_regional')
        data-href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>$inicio,'f_fin'=>$final,'mes'=>'0','regional'=>$regional,'marca'=>$mar-> MARCA,'sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}" @endif

        >                
        <td> {{ $mar-> MARCA }}</td>
        <td align="right"><span class="badge badge-success">{{ $mar-> COTIZACIONES }}</span></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>                        
</div>
@endif

@if( $title == 'marca' || $title == 'mes_marca' || $title == 'marca_mes' || $title == 'regional_marca' || $title == 'marca_regional')
<div @if($title == 'diarias') class="col-md-4 col-sm-12 col-xs-12 animated fadeIn" @else class="col-md-3 col-sm-12 col-xs-12 animated fadeIn" @endif>
  <div class="x_panel">
    <h2>MODELO<small> </small></h2>
  </div>
  <div class="table-responsive">
    <table class="table table-striped jambo_table bulk_action">
      <thead>
        <tr>
          <th>MODELO</th>
          <th style="text-align: right;">COTIZACIONES</th>
        </tr>
      </thead>
      <tbody>
        @foreach($por_modelo as $mod)
        <tr class='v_link' 
         @if( $title == 'marca' )
        data-href="{{route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'marca_modelo','mes'=>'0','regional'=>'0','marca'=>$marca,'sucursal'=>'0','modelo'=>str_replace("/", "_", $mod-> MODELO)])}}" @endif

         @if( $title == 'mes_marca' || $title == 'marca_mes')
              data-href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>$inicio,'f_fin'=>$final,'mes'=>'0','regional'=>'0','marca'=>$marca,'sucursal'=>'0','modelo'=>str_replace("/", "_", $mod-> MODELO),'master'=>'0','chassis'=>'0','vendedor'=>'0','nro_cotizacion'=>'0'])}}" @endif              

        >                
          <td> {{ $mod-> MODELO }}</td>
          <td align="right"><span class="badge badge-success">{{ $mod-> COTIZACIONES }}</span></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>                        
</div>
@endif

@if( $title == 'marca_modelo' )
<div @if($title == 'diarias') class="col-md-4 col-sm-12 col-xs-12 animated fadeIn" @else class="col-md-3 col-sm-12 col-xs-12 animated fadeIn" @endif>
  <div class="x_panel">
    <h2>MASTER<small> </small></h2>
  </div>
  <div class="table-responsive">
    <table class="table table-striped jambo_table bulk_action">
      <thead>
        <tr>
          <th>MASTER</th>
          <th style="text-align: right;">COTIZACIONES</th>
        </tr>
      </thead>
      <tbody>
        @foreach($por_master as $mas)
        <tr class='v_link' data-href="#" >                
          <td> {{ $mas-> MASTER }}</td>
          <td align="right"><span class="badge badge-success">{{ $mas-> COTIZACIONES }}</span></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>                        
</div>
@endif

<div @if($title == 'diarias') class="col-md-4 col-sm-12 col-xs-12 animated fadeIn" @else class="col-md-3 col-sm-12 col-xs-12 animated fadeIn" @endif>
  <div class="x_panel">
    <h2>VENDEDORES<small> TOP-10</small></h2>
  </div>
  <div class="table-responsive">
    <table class="table table-striped jambo_table bulk_action">
      <thead>
        <tr>
          <th>VENDEDOR</th>
          <th style="text-align: right;">COTIZACIONES</th>
        </tr>
      </thead>
      <tbody>
        @foreach($por_vendedor as $ven)
        <tr class='v_link' 
        
        @if($title == 'index')
        data-href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>'0','f_fin'=>'0','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>$ven-> VENDEDOR,'nro_cotizacion'=>'0'])}}" @endif

        @if($title == 'diarias' || $title == 'semanal' || $title == 'ult_15_dias' )
        data-href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>$inicio,'f_fin'=>$final,'mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>$ven-> VENDEDOR,'nro_cotizacion'=>'0'])}}" @endif

        @if($title == 'mes')
        data-href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>$inicio,'f_fin'=>$final,'mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>$ven-> VENDEDOR,'nro_cotizacion'=>'0'])}}" @endif

        @if($title == 'mes_regional')
        data-href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>$inicio,'f_fin'=>$final,'mes'=>'0','regional'=>$regional,'marca'=>'0','sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>$ven-> VENDEDOR,'nro_cotizacion'=>'0'])}}" @endif

        @if( $title == 'mes_marca' || $title == 'marca_mes')
              data-href="{{ route('cotizaciones.lista_detalle',['v_aux'=>'0','title'=>'0','f_ini'=>$inicio,'f_fin'=>$final,'mes'=>'0','regional'=>'0','marca'=>$marca,'sucursal'=>'0','modelo'=>'0','master'=>'0','chassis'=>'0','vendedor'=>$ven-> VENDEDOR,'nro_cotizacion'=>'0'])}}" @endif 

        >                
          <td> <span class="label label-default">{{$ven-> REG_ABRE }}</span> {{ strtoupper($ven-> VENDEDOR) }} </td>
          <td align="right"><span class="badge badge-success">{{ $ven-> COTIZACIONES }}</span></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>                        
</div>

</div>
</div>


</div>


@endsection
@section('scripts')

<script type="text/javascript">

  $(document).ready(function($) {
    $(".v_link").click(function() {
      window.location = $(this).data("href");
    });
  });

  $(document).ready(function($) {
    $(".v_link").click(function() {
      window.location = $(this).data("href");
    });
  });

  $(document).ready(function($) {
    $(".v_link").click(function() {
      window.location = $(this).data("href");
    });
  });

  $(document).ready(function($) {
    $(".v_link").click(function() {
      window.location = $(this).data("href");
    });
  });

  $(document).ready(function($) {
    $(".v_link").click(function() {
      window.location = $(this).data("href");
    });
  });

  $(document).ready(function($) {
    $(".v_link").click(function() {
      window.location = $(this).data("href");
    });
  });

</script>
@endsection