@extends('layouts.main')

@section('content')

<style type="text/css">

</style>
 <!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title">
        <h3><a href="{{ route('trafico.formulario')}}">TRAFICO CLIENTES</a><small> / {{Auth::user()->id_ubicacion}} - {{Auth::user()->sucursal2->nom_sucursal}} /
        @if(sizeof($encuesta)>0) {{$encuesta->descripcion}} @endif
        </small></h3>
      </div>
    </div>
    <hr>
    <div class="clearfix"></div>
    
@if(sizeof($encuesta)>0)
{!! Form::open(array('route' => ['trafico.add_visita2'], 'method' => 'get' , 'id'=>'VisitaForm', 'class'=>'form-horizontal form-label-left')) !!}
<input type="text" hidden class="form-control" value="{{Auth::user()->id_ubicacion}}" name="id_sucursal" id="id_sucursal">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
          <div class="x_title">
            <h2>Cliente.</h2>
            <div class="clearfix" ></div>
          </div>
          <div class="x_content">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row" align="center">
                <strong>NUEVO <input type="radio" name="tipo_cliente" value="Nuevo" id="nuevo" class="radio_nuevo" autocomplete="off"> </strong> |
                <strong>ANTIGUO <input type="radio" name="tipo_cliente" value="Antiguo" id="antiguo"  class="radio_antiguo" autocomplete="off"> </strong> 
                <button type="button" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target=".bs-example-modal"  a-toggle="tooltip" data-placement="bottom" title="Agregar informacion de cliente"><span class="fa fa-user"></span> Datos cliente</button>
              </div>
            </div>
          </div>

          <div class="modal fade bs-example-modal" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Datos de cliente</h4>
                </div>
                <div class="modal-body">
                    <br />
                    <div class="form-horizontal form-label-left input_mask">
                      
                      <div class="form-group dato_antiguo">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cliente</label>
                        {{-- <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control select2" name="clientes_ant" id="clientes_ant" data-width="100%" autocomplete="off">
                          @foreach($clientes as $det)
                            <option value="{{$det->id}}" tel="{{$det->telefono}}">  {{$det->nombre}} {{$det->paterno}} {{$det->materno}}</option>
                          @endforeach
                        </select>
                        </div> --}}
                        
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control select2"  style="width: 100%;"  name="clientes_ant" id="clientes_ant">
                              @foreach($clientes as $det)
                                <option value="{{$det->id}}" tel="{{$det->telefono}}">  {{$det->nombre}} {{$det->paterno}} {{$det->materno}}</option>
                              @endforeach
                            </select>
                        </div>
                      </div>
                      <div class="form-group dato_nuevo">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombres</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="nombre" class="form-control" placeholder="Nombres" autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group dato_nuevo">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Paterno</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="paterno" class="form-control" placeholder="Paterno" autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group dato_nuevo">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Materno</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="materno" class="form-control" placeholder="Materno" autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefono</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" autocomplete="off">
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="ci" class="form-control has-feedback-left" placeholder="CI">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <select class="form-control" name="expedido" id="expedido">
                            <option value="EX" disabled="">Expedido</option>
                            <option value="LP">LP</option>
                            <option value="OR">OR</option>
                            <option value="PT">PT</option>
                            <option value="CB">CB</option>
                            <option value="CH">CH</option>
                            <option value="TJ">TJ</option>
                            <option value="SC">SC</option>
                            <option value="BN">BN</option>
                            <option value="PA">PA</option>
                          </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <select class="form-control" name="edad" id="edad">
                            <option value=" ">Rango de edad</option>
                            @foreach($edades as $det)
                               <option value="{{$det->codigo}}"> {{$det->descripcion}}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <select class="form-control" name="genero" id="genero">
                          <option value=" ">Genero</option>
                          <option value="F">FEMENINO</option>
                          <option value="M">MASCULINO</option>
                        </select>
                      </div>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                </div>
              </div>
            </div>
          </div>

          <div class="x_title">
            <h2>Motivo.</h2>
            <div class="clearfix" ></div>
          </div>
          <div class="x_content">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row" align="center">
                @if(sizeof($motivos)>0)
                  <div class="table-responsive col-md-6 col-lg-offset-3 col-sm-12">
                    <table class="table table-hover">  
                      <tbody> 
                        @foreach($motivos as $det) 
                        <tr>
                          <td style="width: 40%; padding: 2px; " ><strong>{{$det->motivo->descripcion}} </strong> 
                          <td style="width: 1%; padding: 2px; " > <input type="radio" name="motivo" value="{{$det->motivo->id}}" id="{{$det->motivo->id}}" class="" autocomplete="off"></td>
                          <td style="width: 30%; padding: 2px; " >
                            <a class=" ver ver_{{$det->motivo->id}}"href="#myModal" data-toggle="modal" data-target="#myModal">
                              <span class="fa fa-car fa-lg"></span> Ver seleccion
                            </a>
                            
                          </td>   
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                @endif
              </div>
            </div>
          </div>
          <div class="x_title">
            <h2>Ejecutivo asignado.</h2>
            <div class="clearfix" ></div>
          </div>

          {{-- <div class="x_content">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row" align="center"> 
              <select class="form-control select3 col-md-6 col-lg-offset-3 col-sm-6 col-xs- req_vendedor"  style="width: 50%;" name="id_ejecutivo" id="id_ejecutivo">
                <option value="">Selecione un Ejecutivo de venta</option>
                @foreach($vendedores as $det)
                  <option value="{{$det->cod_vendedor}}">{{strtoupper($det->nom_vendedor)}}</option>
                @endforeach
              </select>
              </div>
            </div>
          </div> --}}

          <div class="x_content">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row" align="center"> 
              <select class="form-control select3 col-md-12 col-sm-12 col-xs-12 req_vendedor"  data-width="50%" name="id_ejecutivo" id="id_ejecutivo">
              <option value="">Selecione un Ejecutivo de venta</option>
              @foreach($vendedores as $det)
                {{-- <option value="{{$det->cod_vendedor}}">{{strtoupper($det->nom_vendedor)}}</option> --}}
                <option value="{{$det->id}}">{{strtoupper($det->nombre.' '.$det->paterno)}}</option>
              @endforeach
            </select>
              </div>
            </div>
          </div>

        

          <div class="x_title">
            <h2>Finalizar.</h2>
            <div class="clearfix" ></div>
          </div>
          <div class="x_content">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-md-6 col-md-offset-3" align="center">
                  <input type="submit" value="GUARDAR" class="btn btn-success btn-block">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body" >
                
                <div class="row">
                   <?php $a = 0; $b = 2; ?>
                  @foreach($motivo_Categoria as $det2)
                  <?php $a++;?>
                  @if($a % $b <> 0) <div class="row">@endif
                  <div class="col-md-6 col-sm-12 col-xs-12 categorias categoria_{{$det2->motivo->id}}" style="border-radius: 25px; " >
                    <div class="x_title">
                      <strong> {{$det2->categoria->descripcion}}: </strong>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      @foreach($modelos as $det3)
                        @if($det3->id_categoria == $det2->categoria->id)
                        <input type="checkbox" name="modelos[]" class="modelos mod_{{$det3->descripcion}}" value="{{$det3->id}}"> {{$det3->descripcion}}<br>
                          @if($det3->descripcion=='OTROS')
                            <input type="text" class="form-control txt_otros" name="txt_otros_{{$det3->id_categoria}}" id="txt_otros" >
                          @endif
                        @endif
                      @endforeach
                      @if($a % $b ==0) </div> @endif
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
              </div>
            </div>
          </div>
        </div>

{!! Form::close()!!}
@else
  No existe encuesta disponible...
@endif

</div>
</div>



@endsection

@section('scripts')

<script type="text/javascript">

$(document).ready(function() {

  $('.txt_otros').hide();
  $('.ver').hide();
  $('.categorias').hide();
  opcionesnuevo();

  $('input[name="motivo"]').change(function() {
    var id_motivo=$(this).is(':checked') && $(this).val();
    $('.modelos').attr('checked',false);
    $('.ver').hide();
    $('.categorias').hide();
    if(id_motivo < 5){
      $('.ver_'+id_motivo).show();
      $('.categoria_'+id_motivo).show();
      $('#myModal').modal('show');
    }
  });

   $('.mod_OTROS').change(function() {
       if($(".mod_OTROS").is(':checked'))
       {
             $('.txt_otros').show();
        } 
        else 
        {
             $('.txt_otros').hide();
        }
    });


  $('#nuevo').change(function() {
   opcionesnuevo();
  });

  $('#antiguo').change(function() {
   opcionesantiguo();
  });

  function opcionesnuevo()
  {
    document.getElementById("nuevo").setAttribute("checked", "");
    $('.dato_antiguo').hide();
    $('.dato_nuevo').show();
  };

  function opcionesantiguo()
  {
    document.getElementById("antiguo").setAttribute("checked", "");
    $('.dato_nuevo').hide();
    $('.dato_antiguo').show();
  };

  $('.select2').change(function() {
    var telef = $(this).find("option:selected").attr('tel');
    $("#telefono").val(telef);
  });


  $('.select2').select2({
    placeholder: 'Seleccione un cliente',
    minimumInputLength: 2,
    language: {
      noResults: function() { return "No hay resultado";},
      searching: function() { return "Buscando.."; },
      inputTooShort: function() { return "Por favor ingrese 2 o mas caracteres"; }
    },
  });

 $('.select3').select2({placeholder: 'Seleccione un vendedor'});


} );





//   $('.nuevo').hide();
//   $('.panel_categorias').hide();
//   $('.panelcliente').hide();
//   $('.panel_ejecutivo').hide();
//   $('.txt_otros').hide();


//     $('.radio_nuevo').change(function() {
//         $('.nuevo').show();
//         $('.existente').hide();
//         $(".req_nuevo").prop('required',true);
//         $(".req_antiguo").prop('required',false);
//         $('.datos_nuevo').show();
//     });
//     $('.radio_antiguo').change(function() {
//         $('.nuevo').hide();
//         $('.existente').show();
//         $('.datos_nuevo').hide();
//         $(".req_nuevo").prop('required',false);
//         $(".req_antiguo").prop('required',true);

//     });

//     $('.mod_OTROS').change(function() {
//        if($(".mod_OTROS").is(':checked'))
//        {
//              $('.txt_otros').show();
//         } 
//         else 
//         {
//              $('.txt_otros').hide();
//         }
//     });
   
//     $('.select_motivos').change(function() {
    
//       switch (this.value) {

//           case '1':
//               $('.panelcliente').show();
//               $('.panel_categorias').show();
//               $('.panel_ejecutivo').show();
//               $('.cat-1').show();
//               $('.cat-2').hide();
//               $("#antiguo").prop("checked", true);
//               $('.nuevo').hide();
//               $('.existente').show();
//               $(".req_nuevo").prop('required',false);
//               $(".req_antiguo").prop('required',true);
//               $(".opciones").attr('checked', false)
//               $('.datos_nuevo').hide();
//               $(".req_vendedor").prop('required',true);
//               $(".txt_otros_9").val(' ');

//               break;
//           case '2':
//               $('.panelcliente').show();
//               $('.panel_categorias').show();
//               $('.panel_ejecutivo').show();
//               $('.cat-1').hide();
//               $('.cat-2').show();
//               $("#antiguo").prop("checked", true);
//               $('.nuevo').hide();
//               $('.existente').show();
//               $(".req_nuevo").prop('required',false);
//               $(".req_antiguo").prop('required',true);
//               $(".opciones").attr('checked', false)
//               $('.datos_nuevo').hide();
//               $(".req_vendedor").prop('required',true);
//               $(".txt_otros_8").val(' ');

//               break;
//           case '3':
             
//               $('.panelcliente').hide();
//               $('.panel_categorias').hide();
//               $('.panel_ejecutivo').show();
//               $(".req_nuevo").prop('required',false);
//               $(".req_antiguo").prop('required',false);
//               $(".req_vendedor").prop('required',true);
//               $(".opciones").attr('checked', false)
              
//               break;
//           default:
//               $('.panelcliente').hide();
//               $('.panel_categorias').hide();
//               $('.panel_ejecutivo').hide();
//               $(".req_nuevo").prop('required',false);
//               $(".req_antiguo").prop('required',false);
//               $(".req_vendedor").prop('required',false);
//               $(".opciones").attr('checked', false)
//       }     
//     });

//     $('.select_cliente').change(function() {
//       var telef = $(this).find("option:selected").attr('tel');
//       $("#telefono").val(telef);
           
//     });

</script>
@endsection