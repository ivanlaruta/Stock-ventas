@extends('layouts.main')

@section('content')

<style type="text/css">

</style>
 <!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title">
        <h3><a href="{{ route('trafico.formulario2')}}">TRAFICO CLIENTES</a><small> / {{Auth::user()->id_ubicacion}} - {{Auth::user()->sucursal2->nom_sucursal}} /
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
                <button type="button" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target=".bs-example-modal"  a-toggle="tooltip" data-placement="bottom" title="Agregar informacion de cliente"><span class="fa fa-user"></span> Agregar datos de cliente</button>
              </div>
            </div>
          </div>
          <div class="modal fade bs-example-modal m_cli" id="m_cli" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  {{-- <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> --}}
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Datos de cliente</h4>
                </div>
                <div class="modal-body">
                    
                    <div class="form-horizontal form-label-left input_mask">
                      
                     
                        {{-- <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control select2" name="clientes_ant" id="clientes_ant" data-width="100%" autocomplete="off">
                          @foreach($clientes as $det)
                            <option value="{{$det->id}}" tel="{{$det->telefono}}">  {{$det->nombre}} {{$det->paterno}} {{$det->materno}}</option>
                          @endforeach
                        </select>
                        </div> --}}
                      <div class="form-group dato_antiguo ">
                        <div class="col-md-6">
                          <select class="form-control select2"  style="width: 100%;"  name="clientes_ant" id="clientes_ant">
                           <option value="" disabled selected>Seleccione un cliente:</option>
                              @foreach($clientes as $det)
                                <option value="{{$det->id}}" tel="{{$det->telefono}}">  
                                {{$det->nombre}} {{$det->paterno}} {{$det->materno}}
                                </option>
                              @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="telefono2" id="telefono2" class="form-control" placeholder="Telefono " autocomplete="off" style="background: #eeebfc;">
                        </div>
                      </div>

                      
                      <div class="form-group dato_nuevo">
                        
                        <div class="col-md-6">
                          <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre *" autocomplete="off" style="background: #eeebfc;">
                        </div>
                      
                        
                        <div class="col-md-6">
                          <input type="text" name="paterno" id="paterno" class="form-control" placeholder="Paterno *" autocomplete="off" style="background: #eeebfc;">
                        </div>
                      </div>
                      <div class="form-group dato_nuevo">
                        
                        <div class="col-md-6">
                          <input type="text" name="materno" id="materno" class="form-control" placeholder="Materno" autocomplete="off">
                        </div>
                     
                        <div class="col-md-6">
                          <input type="number" name="telefono" id="telefono" class="form-control" placeholder="Telefono *" autocomplete="off" style="background: #eeebfc;">
                        </div>
                      </div>
                      {{-- <div class="form-group dato_nuevo">
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
                      </div> --}}
                      <div class="ln_solid dato_nuevo"></div>
                      <div class="form-group dato_nuevo">
                        <div class="col-md-6">
                          <input type="text" name="ci" id="ci" class="form-control " placeholder="Nro CI">
                        </div>
                        <div class="col-md-6">
                          <select class="form-control" name="exp" id="exp" >
                          <option value="" disabled selected>Expedido</option>
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
                      </div>

                  <div class="ln_solid dato_nuevo"></div>
                  <div class="row dato_nuevo">
                    <div class="col-md-6 form-group has-feedback">
                    <p>RANGO DE EDAD</p>
                      @foreach($edades as $det)
                        <input type="radio" name="edad" id="edad" value="{{$det->codigo}}" class="radio_edad req_nuevo"> {{$det->descripcion}}<br>
                      @endforeach
                    </div>
                    <div class="col-md-6 form-group has-feedback">
                    <p>GENERO</p>
                      <input type="radio" name="gen" id="gen" value="M" > Masculino<br>
                      <input type="radio" name="gen" id="gen" value="F" > Femenino
                    </div>
                  </div>
                    
                  </div>
                </div>
                      {{-- <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <select class="form-control" name="edad" id="edad">
                            <option value=" ">Rango de edad</option>
                            @foreach($edades as $det)
                               <option value="{{$det->codigo}}"> {{$det->descripcion}}</option>
                            @endforeach
                          </select>
                      </div> --}}
                     {{--  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <select class="form-control" name="gen" id="gen">
                          <option value=" ">Genero</option>
                          <option value="F">FEMENINO</option>
                          <option value="M">MASCULINO</option>
                        </select>
                      </div> --}}
              
                
                      <small class="dato_nuevo">(*) Datos obligatorios</small>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default cancelar_cliente" id="cancelar_cliente" >Cancelar</button>
                  <button type="button" class="btn btn-primary aceptar_cliente" id="aceptar_cliente" >Aceptar</button>
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
                          <td style="width: 1%; padding: 2px; " > <input type="radio" name="motivo" value="{{$det->motivo->id}}" id="{{$det->motivo->id}}" class="" autocomplete="off" required></td>
                          <td style="width: 30%; padding: 2px; " >
                            <a class=" ver ver_{{$det->motivo->id}}" href="#myModal" data-toggle="modal" data-target="#myModal">
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

          <div class="ejecutivo">  
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
                <select class="form-control select3 col-md-6 offset-md-4 req_vendedor"  data-width="50%" name="id_ejecutivo" id="id_ejecutivo">
                <option value="">Selecione un Ejecutivo de venta</option>
                @foreach($vendedores as $det)
                  {{-- <option value="{{$det->cod_vendedor}}">{{strtoupper($det->nom_vendedor)}}</option> --}}
                  <option value="{{$det->id}}">{{strtoupper($det->nombre.' '.$det->paterno)}}</option>
                @endforeach
              </select>
                </div>
              </div>
            </div>
          </div>

          <div class="observaciones">  
            <div class="x_title">
              <h2>Observaciones.</h2>
              <div class="clearfix" ></div>
            </div>
            <div class="x_content">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row" align="center"> 
                  <input type="text" class="form-control" name="txt_obs" id="txt_obs" >
                </div>
              </div>
            </div>
          </div>

          <div class="x_title">
            {{-- <h2>Finalizar.</h2> --}}
            <div class="clearfix" ></div>
          </div>
          <div class="x_content">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-md-6 col-md-offset-3" align="center">
                  <input type="submit" value="GUARDAR" class="btn btn-success btn-block btn_subm"  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> --}}
                Seleccione al menos un modelo
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
                <button type="button" class="btn btn-default btn_cancela_modelos" id='btn_cancela_modelos' >Cancelar</button>
                <button type="button" class="btn btn-primary btn_acepta_modelos" id='btn_acepta_modelos' {{-- data-dismiss="modal" --}}>Aceptar</button>
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
  $('.ejecutivo').hide();
  // $('#myModal').modal({backdrop: 'static', keyboard: false})  
  // document.getElementById("btn_acepta_modelos").disabled = true;
  opcionesnuevo();


  document.getElementById("cancelar_cliente").onclick = function() {cancela_clientes()};

  function cancela_clientes() {


    document.getElementById("nombre").value = '';
    document.getElementById("paterno").value = '';
    document.getElementById("materno").value = '';
    document.getElementById("telefono").value = '';
    document.getElementById("ci").value = '';
    document.getElementById("exp").value = '';
    document.getElementById("edad").checked = false;
    document.getElementById("gen").checked = false;
    // document.getElementById("m_cli").hide = true;

    // $("#clientes_ant").select2("val", "");
    $('#clientes_ant').val(null).trigger("change")
    // if ( $("#clientes_ant").val()  != null )
    // {
    //     $(".select2").each(function () {
    //         $(this).select2('destroy').val("").select2();
    //     });
        
    // }
    $('#m_cli').modal('hide');
  }

  document.getElementById("aceptar_cliente").onclick = function() {acepta_clientes()};
function acepta_clientes() {
  if(document.querySelector('input[name="tipo_cliente"]:checked').value == 'Antiguo')
  {
    $('#m_cli').modal('hide');
  }
  else{
    
      if ( $("#nombre").val().length>0 && $("#paterno").val().length>0 && $("#telefono").val().length>0 )
        $('#m_cli').modal('hide');
      else
        alert('los campos marcados con (*) son obligatorios');
  }
 }

  document.getElementById("btn_acepta_modelos").onclick = function() {myFunction()};

  function myFunction() {
      var numberOfChecked = $('input:checkbox:checked').length;
      if (numberOfChecked > 0) {$('#myModal').modal('hide');}
      else{alert('Seleccione al menos un modelo')};
      
  }
   document.getElementById("btn_cancela_modelos").onclick = function() {
    $('.modelos').attr('checked',false);
    $('input[name="motivo"]').attr('checked',false);
    $('#myModal').modal('hide');
    $('.ejecutivo').hide();
   };
  
  $('input[name="motivo"]').change(function() {
    var id_motivo=$(this).is(':checked') && $(this).val();
    $('.modelos').attr('checked',false);
    $('.ver').hide();
    $('.categorias').hide();
    if(id_motivo < 5){
      // alert('mostrar clientes');
      $('.ver_'+id_motivo).show();
      $('.categoria_'+id_motivo).show();
      $('#myModal').modal('show');
      $('.ejecutivo').show();
      $('.req_vendedor').attr('required',true);
    }
    else
    {
      if(id_motivo ==5){
        $('.ejecutivo').show();
        $('.req_vendedor').attr('required',true);
      }
      else
      {
        $('.ejecutivo').hide();
        $('.req_vendedor').attr('required',false);
      }
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
    document.getElementById("telefono").value = '';
    document.getElementById("ci").value = '';
    document.getElementById("exp").value = '';
    // document.getElementById("edad").value = '';
    // document.getElementById("gen").value = '';
    document.getElementById("edad").checked = false;
    document.getElementById("gen").checked = false;
    document.getElementById("telefono").disabled = false;
    document.getElementById("ci").disabled = false;
    document.getElementById("exp").disabled = false;
    document.getElementById("edad").disabled = false;
    document.getElementById("gen").disabled = false;
  };

  function opcionesantiguo()
  {
    document.getElementById("antiguo").setAttribute("checked", "");
    $('.dato_nuevo').hide();
    $('.dato_antiguo').show();
    document.getElementById("telefono").disabled = true;
    document.getElementById("ci").disabled = true;
    document.getElementById("exp").disabled = true;
    document.getElementById("edad").disabled = true;
    document.getElementById("gen").disabled = true;
  };

  $('.select2').change(function() {

    var telef = $(this).find("option:selected").attr('tel');
    // var ci = $(this).find("option:selected").attr('a_ci');
    // var exp = $(this).find("option:selected").attr('a_exp');
    // var edad = $(this).find("option:selected").attr('a_rango');
    // var gen = $(this).find("option:selected").attr('a_genero');
    $("#telefono2").val(telef);
    // $("#ci").val(ci);
    // document.getElementById('exp').value=exp;
    // document.getElementById('edad').value=edad;
    // document.getElementById('gen').value=gen;
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

 $('.select3').select2({
   minimumResultsForSearch: -1,
   placeholder: 'Seleccione un vendedor (*)'
 });

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