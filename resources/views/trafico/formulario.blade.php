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

{!! Form::open(array('route' => ['trafico.add_visita'], 'method' => 'get' , 'id'=>'VisitaForm', 'class'=>'form-horizontal form-label-left')) !!}
<input type="text" hidden class="form-control" value="{{Auth::user()->id_ubicacion}}" name="id_sucursal" id="id_sucursal">
    <div class="row">
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="x_panel" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
          <div class="x_title">
            <h2>Datos generales</h2>
            <div class="clearfix" ></div>
          </div>
          <div class="x_content">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                <p><strong>MOTIVO DE VISITA</strong></p>
                <select class="form-control col-md-12 col-sm-12 col-xs-12 select_motivos" data-width="100%" name="id_motivo" id="id_motivo" required autocomplete="off">
                <option value="" selected>Selecione un motivo</option>
                  @if(sizeof($motivos)>0)
                    @foreach($motivos as $det)
                      <option value="{{$det->motivo->id}}"> {{$det->motivo->descripcion}}</option>
                    @endforeach
                  @endif
                </select>
              </div>
              <hr>
              <div class="panelcliente">
                <div class="row">
                  <div class="tipo_cli">
                  <p><strong>TIPO DE CLIENTE</strong></p>
                    <input type="radio" name="tipo_cliente" value="Antiguo" id="antiguo" class="radio_antiguo" autocomplete="off"> Antiguo<br>
                    <input type="radio" name="tipo_cliente" value="Nuevo" id="nuevo" class="radio_nuevo" autocomplete="off"> Nuevo<br>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="nuevo">
                    <p><strong>DATOS CLIENTE</strong></p>
                    <input type="text" name="nombre" class="form-control req_nuevo" placeholder="Nombres" autocomplete="off">
                    <input type="text" name="paterno" class="form-control req_nuevo" placeholder="Paterno" autocomplete="off">
                    <input type="text" name="materno" class="form-control" placeholder="Materno" autocomplete="off">
                    <div class="row">
                      <div class="col-md-6"><input type="text" name="ci" class="form-control col-md-6 col-sm-6 col-xs-6" placeholder="CI"></div>
                      <div class="col-md-6">
                        <select class="form-control col-md-12 col-sm-12 col-xs-12 select_motivos" data-width="100%" name="expedido" id="expedido" required >
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
                  </div>
                  <div class="existente">
                    <p><strong>SELECCIONE CLIENTE</strong></p>
                    <select class="form-control select2 req_antiguo select_cliente" data-width="100%" name="id_cliente" id="id_cliente">
                      <option value="">Selecione un cliente</option>
                      @foreach($clientes as $det)
                        <option value="{{$det->id}}" tel="{{$det->telefono}}">  {{$det->nombre}} {{$det->paterno}} {{$det->materno}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="datos">
                    <div class="datos_nuevo">
                    <p><strong>RANGO DE EDAD</strong></p>
                      @foreach($edades as $det)
                        <input type="radio" name="rango_edad" value="{{$det->codigo}}" class="radio_edad req_nuevo"> {{$det->descripcion}}<br>
                      @endforeach
                    <hr>
                    <p><strong>GENERO</strong></p>
                    <div class="row">
                      <div class="col-md-6 req_nuevo"><input type="radio" name="genero" value="M" > Masculino</div>
                      <div class="col-md-6 req_nuevo"><input type="radio" name="genero" value="F" > Femenino</div>
                    </div>
                    <hr>
                    </div>
                    <p><strong>TELEFONO</strong></p> 
                    <input type="text" class="form-control req_nuevo" name="telefono" id="telefono" placeholder="Telefono">
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php $a = 0; $b = 2; ?>
      <div class="col-md-8 col-sm-12 col-xs-12 ">
        <div class="x_panel panel_categorias" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
          <div class="x_title">
            <h2 class="titulo_categorias">Categorias</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              @foreach($motivo_Categoria as $det2)
              <?php $a++;?>
              @if($a % $b <> 0) <div class="row">@endif
              <div class="col-md-6 col-sm-12 col-xs-12 cat-{{$det2->motivo->id}}" style="border-radius: 25px; border: 2px solid rgba(115, 135, 177, 0.51); padding: 10px; margin: 10px; width: 45%;" >
                <div class="x_title">
                  <strong> {{$det2->categoria->descripcion}}: </strong>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  @foreach($modelos as $det3)
                    @if($det3->id_categoria == $det2->categoria->id)
                    <input type="checkbox" name="modelos[]" class="opciones mod_{{$det3->descripcion}}" value="{{$det3->id}}"> {{$det3->descripcion}}<br>
                      @if($det3->descripcion=='OTROS')
                        <input type="text" class="form-control txt_otros" name="txt_otros_{{$det3->id_categoria}}" id="txt_otros" >
                      @endif
                    @endif
                  @endforeach
                </div>
              </div>
              @if($a % $b ==0) </div> @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
        <div class="x_panel panel_ejecutivo" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
          <div class="x_title">
            <h2 class="titulo">EJECUTIVO DE VENTAS ASIGNADO</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <select class="form-control select3 col-md-12 col-sm-12 col-xs-12 req_vendedor"  data-width="100%" name="id_ejecutivo" id="id_ejecutivo">
              <option value="">Selecione un Ejecutivo de venta</option>
              @foreach($vendedores as $det)
                {{-- <option value="{{$det->cod_vendedor}}">{{strtoupper($det->nom_vendedor)}}</option> --}}
                <option value="{{$det->id}}">{{strtoupper($det->nombre.' '.$det->paterno)}}</option>
              @endforeach
            </select>
          </div>
        </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3" align="center">
      <input type="submit" value="FINALIZAR" class="btn btn-success btn-block">
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

$('.select2').select2({
  placeholder: 'Seleccione un cliente',
  minimumInputLength: 2,
  language: {
    noResults: function() { return "No hay resultado";},
    searching: function() { return "Buscando.."; },
    inputTooShort: function() { return "Por favor ingrese 2 o mas caracteres"; }
  },
});

$('.select3').select2({placeholder: 'Seleccione un cliente'});

  $('.nuevo').hide();
  $('.panel_categorias').hide();
  $('.panelcliente').hide();
  $('.panel_ejecutivo').hide();
  $('.txt_otros').hide();


    $('.radio_nuevo').change(function() {
        $('.nuevo').show();
        $('.existente').hide();
        $(".req_nuevo").prop('required',true);
        $(".req_antiguo").prop('required',false);
        $('.datos_nuevo').show();
    });
    $('.radio_antiguo').change(function() {
        $('.nuevo').hide();
        $('.existente').show();
        $('.datos_nuevo').hide();
        $(".req_nuevo").prop('required',false);
        $(".req_antiguo").prop('required',true);

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
   
    $('.select_motivos').change(function() {
    
      switch (this.value) {

          case '1':
              $('.panelcliente').show();
              $('.panel_categorias').show();
              $('.panel_ejecutivo').show();
              $('.cat-1').show();
              $('.cat-2').hide();
              $('.cat-3').hide();
              $('.cat-4').hide();
              $("#antiguo").prop("checked", true);
              $('.nuevo').hide();
              $('.existente').show();
              $(".req_nuevo").prop('required',false);
              $(".req_antiguo").prop('required',true);
              $(".opciones").attr('checked', false)
              $('.datos_nuevo').hide();
              $(".req_vendedor").prop('required',true);
              $(".txt_otros_9").val(' ');

              break;
          case '2':
              $('.panelcliente').show();
              $('.panel_categorias').show();
              $('.panel_ejecutivo').show();
              $('.cat-1').hide();
              $('.cat-2').show();
              $('.cat-3').hide();
              $('.cat-4').hide();
              $("#antiguo").prop("checked", true);
              $('.nuevo').hide();
              $('.existente').show();
              $(".req_nuevo").prop('required',false);
              $(".req_antiguo").prop('required',true);
              $(".opciones").attr('checked', false)
              $('.datos_nuevo').hide();
              $(".req_vendedor").prop('required',true);
              $(".txt_otros_8").val(' ');

              break;
          case '3':
              $('.panelcliente').show();
              $('.panel_categorias').show();
              $('.panel_ejecutivo').show();
              $('.cat-1').hide();
              $('.cat-2').hide();
              $('.cat-3').show();
              $('.cat-4').hide();
              $("#antiguo").prop("checked", true);
              $('.nuevo').hide();
              $('.existente').show();
              $(".req_nuevo").prop('required',false);
              $(".req_antiguo").prop('required',true);
              $(".opciones").attr('checked', false)
              $('.datos_nuevo').hide();
              $(".req_vendedor").prop('required',true);
              $(".txt_otros_8").val(' ');

              break;
          case '4':
              $('.panelcliente').show();
              $('.panel_categorias').show();
              $('.panel_ejecutivo').show();
              $('.cat-1').hide();
              $('.cat-2').hide();
              $('.cat-3').hide();
              $('.cat-4').show();
              $("#antiguo").prop("checked", true);
              $('.nuevo').hide();
              $('.existente').show();
              $(".req_nuevo").prop('required',false);
              $(".req_antiguo").prop('required',true);
              $(".opciones").attr('checked', false)
              $('.datos_nuevo').hide();
              $(".req_vendedor").prop('required',true);
              $(".txt_otros_8").val(' ');

              break;
          case '5':
             
              $('.panelcliente').hide();
              $('.panel_categorias').hide();
              $('.panel_ejecutivo').show();
              $(".req_nuevo").prop('required',false);
              $(".req_antiguo").prop('required',false);
              $(".req_vendedor").prop('required',true);
              $(".opciones").attr('checked', false)
              
              break;
          default:
              $('.panelcliente').hide();
              $('.panel_categorias').hide();
              $('.panel_ejecutivo').hide();
              $(".req_nuevo").prop('required',false);
              $(".req_antiguo").prop('required',false);
              $(".req_vendedor").prop('required',false);
              $(".opciones").attr('checked', false)
      }     
    });

    $('.select_cliente').change(function() {
      var telef = $(this).find("option:selected").attr('tel');
      $("#telefono").val(telef);
           
    });


</script>
@endsection