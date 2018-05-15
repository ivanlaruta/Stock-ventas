@extends('layouts.main')

@section('content')

<style type="text/css">
ul.msg_list li a .times {
    font-size: 11px;
    font-weight: 700;
    position: absolute;
    right: 35px;
}

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
{!! Form::open(array('route' => ['trafico.add_visita2'], 'method' => 'get' , 'id'=>'VisitaForm', 'name'=>'VisitaForm', 'class'=>'form-horizontal form-label-left')) !!}
<input type="text" hidden class="form-control" value="{{Auth::user()->id_ubicacion}}" name="id_sucursal" id="id_sucursal">

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
          <div class="x_title">
            <h2>Cliente: &nbsp</h2> 
            <h2 class="no_cliente" id="no_cliente" style="color: #ed640d;"> SIN DATOS.</h2>
            <h2 class="nombre_cliente" id="nombre_cliente" style="color: #29c291;" >&nbsp</h2> 
            <div class="clearfix" ></div>
          </div>
          <div class="x_content">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row" align="center">
                <strong><label for="nuevo">NUEVO </label><input type="radio" name="tipo_cliente" value="Nuevo" id="nuevo" class="radio_nuevo" autocomplete="off"> </strong> |
                <strong><label for="antiguo">ANTIGUO </label> <input type="radio" name="tipo_cliente" value="Antiguo" id="antiguo"  class="radio_antiguo" autocomplete="off"> </strong> 
                <button type="button" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target=".bs-example-modal"  a-toggle="tooltip" data-placement="bottom" title="Agregar informacion de cliente"><span class="fa fa-user"></span> Agregar datos de cliente</button>
              </div>
            </div>
          </div>
          <div class="modal fade bs-example-modal m_cli" id="m_cli" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  {{-- <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> </button>--}}
                  
                  <h4 class="modal-title" id="myModalLabel">Datos de cliente</h4>
                </div>
                <div class="modal-body">
                    
                    <div class="form-horizontal form-label-left input_mask">
                      
     
                      <div class="form-group dato_antiguo ">
                        <div class="col-md-10">
                        <select id="clientes_ant" name="clientes_ant" class="form-control"  style="width: 100%;" ></select>
                         
                        </div>
                        {{-- <div class="col-md-2">
                          <a class="btn btn-app editar" title="habilitar edicion" id="editar"><i class="fa fa-edit"></i> Editar</a>
                        </div> --}}
                      </div>
                      <div class="form-group dato_antiguo ">
                        
                        
                        
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
                          
                        </div>
                      </div>

                       <div class="form-group ">
                        <div class="col-md-6">
                          <input type="number" name="telefono" id="telefono" class="form-control" placeholder="Telefono *" autocomplete="off" style="background: #eeebfc;">
                        </div>

                        <div class="col-md-6">
                          <input type="number" name="telefono2" id="telefono2" class="form-control" placeholder="Telefono adicional" autocomplete="off">
                        </div>
                        
                      </div>
                      
                      <div class="ln_solid "></div>

                      <div class="form-group dato_antiguo ">
                        <div class="col-md-12">
                          <input type="text" name="correo2" id="correo2" class="form-control" placeholder="Correo " >
                        </div>
                      </div>
                      <div class="form-group dato_nuevo">
                        <div class="col-md-6">
                          <input type="text" name="correo" id="correo" class="form-control " placeholder="Correo (Ej.: pedro.perez)">
                        </div>
                        
                        <div class="col-md-6">
                          <select class="form-control" name="ter_correo" id="ter_correo" >
                          
                            <option value="@hotmail.com">@hotmail.com</option>
                            <option value="@gmail.com" selected>@gmail.com</option>
                            <option value="@yahoo.com">@yahoo.com</option>
                            <option value="@outlook.com">@outlook.com</option>
                            <option value="@zoho.com">@zoho.com</option>
                            <option value="@live.com">@live.com</option>

                          </select>
                        </div>
                      </div>

                      <div class="ln_solid "></div>
                      <div class="form-group ">
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

                  <div class="ln_solid "></div>
                  <div class="row ">
                    <div class="col-md-6 form-group has-feedback" style="padding:10px;">
                      <div style="background-color: #eeebfc; padding:10px;">
                        <p>RANGO DE EDAD *</p>
                          @foreach($edades as $det)
                            <label><input type="radio" name="edad" id="edad" value="{{$det->codigo}}" class="radio_edad req_nuevo"> 
                            {{$det->descripcion}}</label>
                            <br>
                          @endforeach
                      </div>
                    </div>
                    <div class="col-md-6 form-group has-feedback" style="padding:10px;">
                      <div style="background-color: #eeebfc; padding:10px;">
                      <p>GENERO *</p>
                        <label><input type="radio" name="gen" id="gen" value="M" > Masculino</label><br>
                        <label><input type="radio" name="gen" id="gen" value="F" > Femenino</label>
                      </div>
                    </div>
                  </div>
                    
                  </div>
                </div>
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

                          <td style="width: 40%; padding: 2px; " ><label for="{{$det->motivo->id}}">{{$det->motivo->descripcion}} </label> 
                          {{-- @if ($det->motivo->id ==16)<span class="label label-danger">Nuevo!</span> @endif --}}
                          </td>
                          <td style="width: 1%; padding: 2px; " > <input type="radio" name="motivo" value="{{$det->motivo->id}}" id="{{$det->motivo->id}}" class="" autocomplete="off" required></td>
                          <td style="width: 10%; padding: 2px; " >
                            <a class=" ver ver_{{$det->motivo->id}}" href="#myModal" data-toggle="modal" data-target="#myModal">
                              <span class="fa fa-car fa-lg"></span> Ver
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
                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12" align="center">
                  {{-- <button type="button" class="btn btn-success btn-block btn_submit" id='btn_submit'>GUARDAR</button> --}}
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
                Seleccione al menos una opción
              </div>
              <div class="modal-body" >
                
                <div class="row">
                  @foreach($motivo_Categoria as $det2)
                  <div class="col-md-6 col-sm-6 col-xs-6 categorias categoria_{{$det2->motivo->id}}" style="border-radius: 25px; " >
                    
                    <ul class="list-unstyled msg_list">
                    <li>
                      <a>
                          <span class="times">{{$det2->categoria->descripcion}}</span>
                           <br>
                            <span class="message">
                              @foreach($modelos as $det3)
                            @if($det3->id_categoria == $det2->categoria->id)
                            <label class="mio"><input type="checkbox" name="modelos[]" class="modelos mod_{{$det3->descripcion}}" value="{{$det3->id}}"> {{$det3->descripcion}}
                            @if($det3->descripcion=='AGYA')
                            <span class="label label-danger">Nuevo!</span>
                            @endif
                            </label><br>
                              @if($det3->descripcion=='OTROS')
                                <input type="text" class=" txt_otros" name="txt_otros_{{$det3->id_categoria}}" id="txt_otros" >
                              
                              @endif
                                <select class="form-control observaciones" name="txt_otros" >
                                  <option disabled selected>¿Como se enteró?</option>
                                  <option value="Television">Televisión</option>
                                  <option value="Radio">Radio</option>
                                  <option value="Internet">Internet</option>
                                  <option value="Referencia">Referencia</option>
                                </select>
                            @endif
                          @endforeach
                        </span>
                                
                      </a>
                    </li>
                  </ul>

                  </div>
                  {{-- <div class="clearfix visible-xs-block"></div> --}}
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


  // document.getElementById("editar").onclick = function() {editar()};

  // function editar() {
  //   alert('se editara');
  //   document.getElementById("telefono").disabled = false;
  //   document.getElementById("telefono2").disabled = false;
  //   document.getElementById("correo2").disabled = false;
  //   document.getElementById("ci").disabled = false;
  //   document.getElementById("exp").disabled = false;


  //   var radio=document.getElementsByName("edad");
  //      var len=radio.length;
  //      for(var i=0;i<len;i++)
  //      {
  //          radio[i].disabled=false;
  //      }

  //   var radio2=document.getElementsByName("gen");
  //      var len=radio2.length;
  //      for(var i=0;i<len;i++)
  //      {
  //          radio2[i].disabled=false;
  //      }


  // };

  

  document.getElementById("cancelar_cliente").onclick = function() {cancela_clientes()};

  function cancela_clientes() {
var r = confirm("Se pederan los datos seleccionados!");
if (r == true) {
        document.getElementById("nombre").value = '';
        document.getElementById("paterno").value = '';
        document.getElementById("materno").value = '';
        document.getElementById("telefono").value = '';
        document.getElementById("telefono2").value = '';
        
        // document.getElementById("correo2").value = '';
        document.getElementById("correo").value = '';
        
        
        document.getElementById("ci").value = '';
        document.getElementById("exp").value = '';

        var radio=document.getElementsByName("edad");
       var len=radio.length;
       for(var i=0;i<len;i++)
       {
           radio[i].checked=false;
       }

    var radio2=document.getElementsByName("gen");
       var len=radio2.length;
       for(var i=0;i<len;i++)
       {
           radio2[i].checked=false;
       }


        // document.getElementById("m_cli").hide = true;

        // $("#clientes_ant").select2("val", "");
        $('#clientes_ant').val(null).trigger("change")
        // if ( $("#clientes_ant").val()  != null )
        // {
        //     $(".select2").each(function () {
        //         $(this).select2('destroy').val("").select2();
        //     });
        // }
        $('.no_cliente').show();
        $('.nombre_cliente').hide();
        $('#m_cli').modal('hide');
       
    } 

  }

  document.getElementById("aceptar_cliente").onclick = function() {acepta_clientes()};
function acepta_clientes() {
  if(document.querySelector('input[name="tipo_cliente"]:checked').value == 'Antiguo')
  {
    $('.nombre_cliente').show();
    $('.no_cliente').hide();
    var $sd = $('#clientes_ant');
    var data = $sd.select2('data')[0]['text'];
    document.getElementById('nombre_cliente').innerHTML = data;

    $('#m_cli').modal('hide');
  }
  else{
    
      if ( $("#nombre").val().length>0 && $("#paterno").val().length>0 && $("#telefono").val().length>0 && $('input[name=edad]:checked').length > 0 && $('input[name=gen]:checked').length > 0)
      {
        $('.nombre_cliente').show();
        $('.no_cliente').hide();
        var data = $("#nombre").val()+' '+$("#paterno").val()+' '+$("#materno").val();
        document.getElementById('nombre_cliente').innerHTML = data;
        $('#m_cli').modal('hide');
      }
      else
        alert('los campos marcados con (*) son obligatorios');
  }
 }

  document.getElementById("btn_acepta_modelos").onclick = function() {myFunction()};

    function myFunction() {
      var numberOfChecked = $('input:checkbox:checked').length;
      if (numberOfChecked > 0) {$('#myModal').modal('hide');}
      else{alert('Seleccione al menos una opción')};
      
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
    if(id_motivo == 16){
       $('.observaciones').show();
    }
    else{
      $('.observaciones').hide();
    }

    if(id_motivo < 5 || id_motivo == 16){
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
    document.getElementById("telefono2").value = '';
    document.getElementById("ci").value = '';
    document.getElementById("exp").value = '';
    document.getElementById("correo2").value = '';
    
    document.getElementById("edad").checked = false;
    document.getElementById("gen").checked = false;
    document.getElementById("telefono").disabled = false;
    document.getElementById("telefono2").disabled = false;
    document.getElementById("ci").disabled = false;
    document.getElementById("exp").disabled = false;
    
    var radio=document.getElementsByName("edad");
       var len=radio.length;
       for(var i=0;i<len;i++)
       {
           radio[i].disabled=false;
       }

    var radio2=document.getElementsByName("gen");
       var len=radio2.length;
       for(var i=0;i<len;i++)
       {
           radio2[i].disabled=false;
       }
  };

  function opcionesantiguo()
  {
    document.getElementById("antiguo").setAttribute("checked", "");
    $('.dato_nuevo').hide();
    $('.dato_antiguo').show();
    document.getElementById("telefono").disabled = true;
    document.getElementById("telefono2").disabled = true;
    document.getElementById("correo2").disabled = true;
    document.getElementById("ci").disabled = true;
    document.getElementById("exp").disabled = true;


    var radio=document.getElementsByName("edad");
       var len=radio.length;
       for(var i=0;i<len;i++)
       {
           radio[i].disabled=true;
       }

    var radio2=document.getElementsByName("gen");
       var len=radio2.length;
       for(var i=0;i<len;i++)
       {
           radio2[i].disabled=true;
       }


  };

  // $('#clientes_ant').change(function() {

  //   // var telef = $(this).find("option:selected").attr('tel');
  //   // var ci = $(this).find("option:selected").attr('a_ci');
  //   // var exp = $(this).find("option:selected").attr('a_exp');
  //   // var edad = $(this).find("option:selected").attr('a_rango');
  //   // var gen = $(this).find("option:selected").attr('a_genero');
   
  //  alert($("#clientes_ant").select2().find(":selected").data('text'));
  //   // $("#telefono2").val(telef);

  //   // $("#ci").val(ci);
  //   // document.getElementById('exp').value=exp;
  //   // document.getElementById('edad').value=edad;
  //   // document.getElementById('gen').value=gen;
  // });

  $('#clientes_ant').change(function() {   
    fn_datos($(this));
  });
  
  var fn_datos = function(objeto){
    // alert(objeto.val());
    $.ajax({
      dataType: "JSON",
      url: "{{ route('trafico.finder_tel')}}",
      data: {
        q: objeto.val()
      },
      success: function(dataResult)
      {
        // console.log(dataResult);
        
         $("#telefono").val(dataResult.telefono);
         $("#telefono2").val(dataResult.telefono2);
        $("#correo2").val(dataResult.correo);
        $("#ci").val(dataResult.ci);
        $("#exp").val(dataResult.exp);
        document.VisitaForm.edad.value=dataResult.edad;
        document.VisitaForm.gen.value=dataResult.genero;
      }
    });

  };

  // $('.select2').select2({
  //   placeholder: 'Seleccione un cliente',
  //   minimumInputLength: 3,
  //   language: {
  //     noResults: function() { return "No hay resultado";},
  //     searching: function() { return "Buscando.."; },
  //     inputTooShort: function() { return "Por favor ingrese 3 o mas caracteres"; }
  //   },
  // });

 $('.select3').select2({
   minimumResultsForSearch: -1,
   placeholder: 'Seleccione un vendedor (*)'
 });

} );


$('#clientes_ant').select2({
    placeholder: 'Seleccione un cliente',
    minimumInputLength: 2,
    language: {
      noResults: function() { return "No hay resultado";},
      searching: function() { return "Buscando.."; },
      inputTooShort: function() { return "Por favor ingrese 2 o mas caracteres"; }
    },
    ajax: {
        url: "{{ route('trafico.finder')}}",
        dataType: 'json',
        data: function (params) {
            return {
                q: $.trim(params.term),
                type: 'public'
            };
        },
        processResults: function (data) {
            return {
                results: data
            };
        },
        // processResults: function (data) {
        //     return {
        //         results: $.map(data, function(obj) {
        //             return { id: obj.id, text: obj.text, telf: obj.telf };
        //         })
        //     };
        // },
        cache: true
    }
});




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

$('form input').on('keypress', function(e) {
    return e.which !== 13;
});


$.fn.modal.Constructor.prototype.enforceFocus = function() {};
// document.getElementById("btn_submit").onclick = function() {fn_submit()};

// function fn_submit() {
//     document.getElementById("myForm").submit();
// }

</script>
@endsection