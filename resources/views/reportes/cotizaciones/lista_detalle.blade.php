@extends('layouts.main')

@section('content')


  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title">
          <h3>
         {{--  link cotizaciones --}}
        <a href="{{ route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}">COTIZACIONES {{$año_actual}} </a>  
        
         {{--  link ULT 15 DIAS --}}

        @if( $title ==  'busqueda')
        <a href="{{route('cotizaciones.busqueda')}}"> / BUSQUEDA AVANZADA</a>  /RESULTADO DE BUSQUEDA
        @endif 
         @if( $title ==  'det_15_regional' ||  $title ==  'det_15_marca' || $title ==  'det_15_vendedor'|| $title ==  'det_15_dia'  )
        <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>$ult_15,'f_fin'=>$hoy,'title'=>'ult_15_dias','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / ULTIMOS 15 DIAS</a>  
        @endif 
         {{--  link semanal --}}

        @if( $title ==  'det_semanal_dia' || $title ==  'det_semanal_regional'  || $title ==  'det_semanal_marca'  || $title ==  'det_semanal_vendedor'  )
        <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>$inicio_sem,'f_fin'=>$hoy,'title'=>'semanal','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / ESTA SEMANA </a>  
        @endif 

         {{--  link MES --}}

        @if( $title ==  'det_diarias_regional' || $title ==  'det_diarias_marca' ||$title ==  'det_diarias_vendedor'  ||$title ==  'det_mes_regional_dia'  ||$title ==  'det_mes_regional_sucursal' ||$title ==  'det_mes_regional_marca' ||$title ==  'det_mes_regional_vendedor' ||$title ==  'det_mes_marca_modelo' || $title == 'det_mes_marca_dia'|| $title == 'det_mes_marca_regional'|| $title == 'det_mes_marca_modelo'|| $title == 'det_mes_marca_vendedor' || $title == 'det_mes_vendedor' )
        <a href="{{ route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'mes','mes'=>$mes,'regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / {{$desc_mes}} </a>  
        @endif 

        {{--  link DIARIOS --}}

        @if($title == 'det_diarias_regional' || $title ==  'det_diarias_marca' || $title ==  'det_diarias_vendedor'  ) 
       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>$inicio,'f_fin'=>$inicio,'title'=>'diarias','mes'=>$mes,'regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / @if($v_aux <> '%'){{$v_aux}}@endif {{date('d',strtotime($inicio))}}   </a>
        @endif 

        {{--  link MES_REGIONAL --}}
        @if($title == 'det_mes_regional_dia'|| $title == 'det_mes_regional_sucursal'|| $title == 'det_mes_regional_marca' || $title == 'det_mes_regional_vendedor'  ) 
       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'mes_regional','mes'=>$mes,'regional'=>$regional,'marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> /  {{$regional}}   </a>
        @endif 

      {{--  link MES_MARCA --}}
        @if($title == 'det_mes_marca_dia'|| $title == 'det_mes_marca_regional'|| $title == 'det_mes_marca_modelo'|| $title == 'det_mes_marca_vendedor'  ) 
       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'mes_marca','mes'=>$mes,'regional'=>'0','marca'=>$marca,'sucursal'=>'0','modelo'=>'0'])}}"> /  {{$marca}}   </a>
        @endif 



      {{--  link REGIONAL --}}
        @if($title == 'det_regional_mes_dia' || $title == 'det_regional_mes_sucursal'|| $title == 'det_regional_mes_marca'|| $title == 'det_regional_mes_vendedor'|| $title == 'det_regional_sucursal_mes' || $title == 'det_regional_sucursal_marca' || $title == 'det_regional_sucursal_vendedor'|| $title == 'det_regional_vendedor' || $title == 'det_regional_marca_mes'|| $title == 'det_regional_marca_vendedor' || $title == 'det_regional_marca_sucursal'|| $title == 'det_regional_marca_modelo' ) 

       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'regional','mes'=>'0','regional'=>$regional,'marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> /  {{$regional}}   </a>
        @endif 



      {{--  link REGIONAL marca.. --}}
        @if($title == 'det_regional_marca_mes' || $title == 'det_regional_marca_vendedor'|| $title == 'det_regional_marca_sucursal'|| $title == 'det_regional_marca_modelo' ) 

       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'regional_marca','mes'=>$mes,'regional'=>$regional,'marca'=>$marca,'sucursal'=>'0','modelo'=>'0'])}}"> /  {{$marca}}   </a>
        @endif 

   {{--  link REGIONAL sucursal.. --}}
        @if($title == 'det_regional_sucursal_mes' || $title == 'det_regional_sucursal_marca' || $title == 'det_regional_sucursal_vendedor' ) 

       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'regional_sucursal','mes'=>'0','regional'=>$regional,'marca'=>'0','sucursal'=> $sucursal,'modelo'=>'0'])}}"> /  {{$sucursal}}   </a>
        @endif 


      {{--  link REGIONAL MES.. --}}
        @if($title == 'det_regional_mes_dia' || $title == 'det_regional_mes_sucursal'|| $title == 'det_regional_mes_marca'|| $title == 'det_regional_mes_vendedor') 

       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'regional_mes','mes'=>$mes,'regional'=>$regional,'marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> /  {{$desc_mes}}   </a>
        @endif 



      {{--  link marca --}}
        @if($title == 'det_marca_mes_dia' || $title == 'det_marca_mes_regional' || $title == 'det_marca_mes_modelo' || $title == 'det_marca_mes_vendedor'|| $title == 'det_marca_regional_mes'|| $title == 'det_marca_regional_sucursal'|| $title == 'det_marca_regional_modelo'|| $title == 'det_marca_regional_vendedor' || $title == 'det_marca_vendedor'|| $title == 'det_marca_modelo_mes'|| $title == 'det_marca_modelo_regional' || $title == 'det_marca_modelo_vendedor'|| $title == 'det_marca_modelo_master' ) 

       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'marca','mes'=>'0','regional'=>'0','marca'=>rtrim(($marca)),'sucursal'=>'0','modelo'=>'0'])}}"> /  {{$marca}}   </a>
        @endif 

  {{--  link marca mes --}}
         @if($title == 'det_marca_mes_dia' || $title == 'det_marca_mes_regional'  || $title == 'det_marca_mes_modelo'|| $title == 'det_marca_mes_vendedor' ) 

       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'marca_mes','mes'=>$mes,'regional'=>'0','marca'=>$marca,'sucursal'=>'0','modelo'=>'0'])}}"> /  {{$desc_mes}}   </a>
        @endif 

  {{--  link marca regional --}}
         @if($title == 'det_marca_regional_mes' || $title == 'det_marca_regional_sucursal'  || $title == 'det_marca_regional_modelo'|| $title == 'det_marca_regional_vendedor' ) 

       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'regional_marca','mes'=>'0','regional'=>$regional,'marca'=>$marca,'sucursal'=>'0','modelo'=>'0'])}}"> /  {{$regional}}   </a>
        @endif 

  {{--  link marca modelo --}}
         @if($title == 'det_marca_modelo_mes' || $title == 'det_marca_modelo_regional' || $title == 'det_marca_modelo_vendedor' || $title == 'det_marca_modelo_master'  ) 

       <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'marca_modelo','mes'=>'0','regional'=>'0','marca'=>$marca,'sucursal'=>'0','modelo'=> $modelo ])}}"> /  {{$modelo}}   </a>
        @endif 

      {{--  linkS FINLES --}}

         @if($title == 'det_mes_vendedor'  || $title == 'det_mes_marca_vendedor'  || $title == 'det_mes_regional_vendedor' ||  $title == 'det_diarias_vendedor' ||  $title == 'det_vendedor' ||  $title ==  'det_semanal_vendedor' || $title ==  'det_15_vendedor' || $title ==  'det_regional_mes_vendedor'|| $title ==  'det_regional_sucursal_vendedor'|| $title ==  'det_regional_vendedor' || $title ==  'det_regional_marca_vendedor' || $title ==  'det_marca_mes_vendedor' || $title ==  'det_marca_regional_vendedor'|| $title ==  'det_marca_vendedor' || $title ==  'det_marca_modelo_vendedor' ) 
        / {{$vendedor}}  
        @endif 

         @if($title == 'det_mes_marca_regional'|| $title == 'det_diarias_regional'|| $title == 'det_semanal_regional' || $title ==  'det_15_regional'|| $title ==  'det_marca_mes_regional'|| $title ==  'det_marca_modelo_regional') 
        / {{$regional}}  
        @endif 

        @if( $title == 'det_diarias_marca' || $title == 'det_mes_regional_marca' || $title ==  'det_semanal_marca' || $title ==  'det_15_marca' || $title ==  'det_regional_mes_marca' || $title == 'det_regional_sucursal_marca' ) 
        /  {{$marca}}
        @endif 

         @if($title == 'det_mes_marca_dia' || $title == 'det_mes_regional_dia' || $title == 'det_semanal_dia'|| $title ==  'det_15_dia' || $title ==  'det_regional_mes_dia' ||$title == 'det_marca_mes_dia'  ) 
        /  @if($v_aux <> '%'){{$v_aux}}@endif {{date('d',strtotime($inicio))}}
        @endif 

         @if($title == 'det_mes_marca_modelo' || $title == 'det_regional_marca_modelo' || $title == 'det_marca_mes_modelo'  || $title == 'det_marca_regional_modelo'  ) 
        /  {{$modelo}}
        @endif 

         @if($title == 'det_mes_regional_sucursal' || $title == 'det_regional_mes_sucursal'|| $title == 'det_regional_marca_sucursal' || $title == 'det_marca_regional_sucursal' ) 
        /  {{$sucursal}}
        @endif 

         @if($title == 'det_regional_sucursal_mes' ||  $title == 'det_regional_marca_mes'  ||  $title == 'det_marca_regional_mes' ||  $title == 'det_marca_modelo_mes'  ) 
        /  {{$desc_mes}}
        @endif 
         @if($title == 'det_marca_modelo_master'   ) 
        /  {{$master}}
        @endif 

        {{-- Enlace para indicadores de ver detalle..... --}}
        @if( $title == 'det_mes_regional' || $title == 'det_mes' || $title == 'det_diarias' || $title == 'det_mes_marca')
        <a href="{{ route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'mes','mes'=>$mes,'regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / {{$desc_mes}} </a>  
        @endif 

        @if($title == 'det_diarias') 
        / @if($v_aux <> '0'){{$v_aux}}@endif {{date('d',strtotime($inicio))}}  
        @endif 

        @if($title == 'det_marca' || $title == 'det_marca_mes' || $title == 'det_marca_regional'|| $title == 'det_marca_modelo') 
        <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'marca','mes'=>'0','regional'=>'0','marca'=>($marca),'sucursal'=>'0','modelo'=>'0'])}}"> 
          / {{$marca}}  </a>
          @endif 

          @if( $title == 'det_semanal' ) 
          / ESTA SEMANA{{-- {{date('d/m/Y',strtotime($inicio))}} - {{date('d/m/Y',strtotime($final))}} --}} 
          @endif 

          @if(  $title == 'det_ult_15_dias' ) 
          / ULTIMOS 15 DIAS{{-- {{date('d/m/Y',strtotime($inicio))}} - {{date('d/m/Y',strtotime($final))}} --}} 
          @endif 

          @if( $title == 'det_regional' || $title == 'det_regional_mes'|| $title == 'det_regional_sucursal' ||  $title == 'det_regional_marca' )
          <a href="{{route('cotizaciones.dashboard',['v_aux'=>$v_aux,'f_ini'=>'0','f_fin'=>'0','title'=>'regional','mes'=>'0','regional'=>$regional,'marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> / {{$regional}} </a>  
          @endif 

          @if( $title == 'det_regional_mes' || $title == 'det_marca_mes') 
          / {{$desc_mes}}  
          @endif
          
          @if( $title == 'det_marca_regional' || $title == 'det_mes_regional' ) 
          / {{$regional}}  
          @endif 

          @if( $title == 'det_regional_marca' ||  $title == 'det_mes_marca') 
          / {{$marca}}  
          @endif 
          
          @if( $title == 'det_regional_sucursal') 
          / {{$sucursal}}  
          @endif 
                    
          @if( $title == 'det_marca_modelo' ) 
          / {{$modelo}}  
          @endif 

        </h3>
        </div>
         <div class="title_right"></div>
      </div>
      <div class="clearfix"></div>
      

      <div class="row">
        
       </div>
         <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_content animated fadeIn">
              <p class="text-muted font-13 m-b-30"></p>
              <div class="table-responsive" {{-- style="max-height: 450px; width: 100%; margin: 0; overflow-y: auto; --}}">
                <table class="table table-striped jambo_table bulk_action" id="datatable1">
                  <thead>
                    <tr>
                     <th></th>
                     <th>NRO COTIZACION</th>
                     <th>FECHA COTIZACION</th>
                     <th>REGIONAL</th>
                     <th>SUCURSAL</th>
                     <th>VENDEDOR</th>
                     <th>NIT</th>
                     <th>CLIENTE</th>
                     <th>DIRECCION</th>
                     <th>TELEFONO</th>
                     <th>CELULAR</th>
                     <th>MARCA</th>
                     <th>COD MODELO</th> 
                     <th>MODELO</th>
                     <th>MASTER</th>
                     <th>AÑO</th>
                     <th>COLOR</th>
                     <th>CHASIS</th>
                     <th>PRECIO</th>
                     <th>MODALIDAD</th>

                     <th>FACTURADO</th>
                     
                     
                    </tr>
                  </thead>
                  <tfoot>
            <tr>
                <th></th>
                     <th>NRO COTIZACION</th>
                     <th>FECHA COTIZACION</th>
                     <th>REGIONAL</th>
                     <th>SUCURSAL</th>
                     <th>VENDEDOR</th>
                     <th>NIT</th>
                     <th>CLIENTE</th>
                     <th>DIRECCION</th>
                     <th>TELEFONO</th>
                     <th>CELULAR</th>
                     <th>MARCA</th>
                     <th>COD MODELO</th> 
                     <th>MODELO</th>
                     <th>MASTER</th>
                     <th>AÑO</th>
                     <th>COLOR</th>
                     <th>CHASIS</th>
                     <th>PRECIO</th>
                     <th>MODALIDAD</th>

                     <th>FACTURADO</th>
            </tr>
        </tfoot>
                  <tbody>
                  @foreach($detalle as $det)
                    <tr @if ($det->FACTURADO == 'SI') class="success" @endif>
                     <td>{{$det->ITEM}}</td>
                     <td><strong>{{$det->NRO_COTIZACION}}</strong></td>
                     <td><strong>{{$det->FECHA_COTIZACION}}</strong></td>
                     <td>{{$det->REGIONAL}}</td>
                     <td>{{$det->SUCURSAL}}</td>
                     <td>{{strtoupper($det->VENDEDOR)}}</td> 
                     <td>{{$det->NIT}}</td>
                     <td><strong>{{$det->CLIENTE}}</strong></td>
                     <td>{{$det->DIRECCION}}</td>
                     <td>{{$det->TELEFONO}}</td>
                     <td>{{$det->CELULAR}}</td>
                     <td>{{$det->MARCA}}</td>
                     <td>{{$det->COD_MODELO}}</td>
                     <td>{{$det->MODELO}}</td>
                     <td>{{$det->MASTER}}</td>
                     <td>{{$det->anio}}</td>
                     <td>{{$det->color}}</td>
                     <td><strong>{{$det->CHASIS}}</strong></td>
                     <td>{{$det->PRECIO_TOTAL}}</td>
                     <td>{{$det->modalidad}}</td>

                     <td>{{$det->FACTURADO}}</td>
                     {{-- {{ $detalle->links() }} --}}
                                        
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            </div>
            </div>
         
       

    </div>
  </div>       


@endsection
@section('scripts')


<script>

$(document).ready(function() {
    $('#datatable1').DataTable( { "language": {
            
              "sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ningún dato disponible en esta tabla",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar en Todo:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":     "Último",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
              },
        },

        "bLengthChange" : false,
        // "dom": "Blfrtip",
        "dom": "Brti",
        
       "buttons": [ 'copy', 'excel'],

        // "lengthMenu": [[5,10, 25, 50, 100, -1], [5,10, 25, 50, 100, "TODO"]],
        "lengthMenu": [[-1], ["TODO"]],

        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select class ="filtro"><option value="">Todos...</option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );

             $('.filtro').select2();
        }
    } );

} );



// $(document).ready(function() {
//     // Setup - add a text input to each footer cell
//     $('#datatable1 tfoot th').each( function () {
//         var title = $(this).text();
//         $(this).html( '<input type="text" placeholder="Filtrar..." />' );
//     } );
 
//     // DataTable
//     var table = $('#datatable1').DataTable({
          
//              "language": {
            
//               "sProcessing":     "Procesando...",
//               "sLengthMenu":     "Mostrar _MENU_ registros",
//               "sZeroRecords":    "No se encontraron resultados",
//               "sEmptyTable":     "Ningún dato disponible en esta tabla",
//               "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
//               "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
//               "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
//               "sInfoPostFix":    "",
//               "sSearch":         "Buscar en Todo:",
//               "sUrl":            "",
//               "sInfoThousands":  ",",
//               "sLoadingRecords": "Cargando...",
//               "oPaginate": {
//                   "sFirst":    "Primero",
//                   "sLast":     "Último",
//                   "sNext":     "Siguiente",
//                   "sPrevious": "Anterior"
//               },
//               "oAria": {
//                   "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
//                   "sSortDescending": ": Activar para ordenar la columna de manera descendente"
//               },


             

//         },
//         "dom": "Blfrtip",
//    "buttons": [ 'copy', 'excel'],

//    "lengthMenu": [[5,10, 25, 50, 100, -1], [5,10, 25, 50, 100, "TODO"]]

//         });
 
//     // Apply the search
//     table.columns().every( function () {
//         var that = this;
 
//         $( 'input', this.footer() ).on( 'keyup change', function () {
//             if ( that.search() !== this.value ) {
//                 that
//                     .search( this.value )
//                     .draw();
//             }
//         } );
//     } );
// } );


</script> 
@endsection