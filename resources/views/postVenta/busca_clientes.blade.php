@extends('layouts.main')


@section('content')

<style type="text/css">
/* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 17%;
  bottom: 0;
  right: 0;
}

</style>
        <div class="loading" id='loadingDiv'><i class="fa fa-spinner fa-spin " style="font-size:100px;color: #169F85;"></i></div>
        <div class="right_col" role="main">
          <div class="">
              <div class="page-title">
                <div class="row title">
                  <h4>
                    <a href="javascript:;" onclick="ini_busqueda()"> BUSQUEDA </a>
                    {{-- <a href="javascript:;" onclick="ver_cliente()"><span class="perfil_cli"></span></a>
                    <a href="javascript:;" onclick="ver_vehiculo()"><span class="perfil_veh"></span></a> --}}

                    <a href="javascript:;"><span class="dato1"></span></a>
                    <a href="javascript:;"><span class="dato2"></span></a>
                  </h4>
                </div>
              <div class="clearfix"></div>
                <div class="x_content busca">
                  <div class="form-horizontal form-label-left">
                    <div class="col-md-8 col-sm-12 col-xs-12 col-lg-offset-2">
                      <div class="input-group">
                        <input type="text" name="busqueda_txt" id="busqueda_txt" class="form-control" placeholder="Ingrese su busqueda" autofocus >
                        <span class="input-group-btn">
                          <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                              <span class="fa fa-cog""></span>
                              
                            </button>
                            <ul class="dropdown-menu" role="menu" style="padding: 10px;">
                              <li><p>Buscar en: </p></li>
                              <li class="divider"></li>
                              <li><input type="checkbox" class="flat" name ="search_opt" value="nom" checked="checked"> Nombre</li>
                              <li><input type="checkbox" class="flat" name ="search_opt" value="doc" > CI/NIT</li>
                              <li><input type="checkbox" class="flat" name ="search_opt" value="tel" > Telefono</li>
                              <li><input type="checkbox" class="flat" name ="search_opt" value="cel" > Celular</li>
                              <li><input type="checkbox" class="flat" name ="search_opt" value="dir" > Direccion</li>
                              <li><input type="checkbox" class="flat" name ="search_opt" value="mail" > e-mail</li>
                            </ul>
                          </div>
                          <button type="button" class="btn btn-primary" id="res_btn" onclick="busqueda_cliente();" >Buscar Clientes!</button>
                        </span>
                        <span class="input-group-btn">
                          <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                              <span class="fa fa-cog""></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" style="padding: 10px;">
                              <li><p>Buscar en: </p></li>
                              <li class="divider"></li>
                              <li><input type="checkbox" class="flat" name ="search_opt2" value="nom" checked="checked"> Chasis</li>
                              <li><input type="checkbox" class="flat" name ="search_opt2" value="doc" > Marca</li>
                              <li><input type="checkbox" class="flat" name ="search_opt2" value="tel" > Modelo</li>
                            </ul>
                          </div>
                          <button type="button" class="btn btn-primary" id="res_btn" onclick="busqueda_vehiculo();" >Buscar Vehiculos!</button>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="clearfix"></div>
              <br><br>
            <div class="row">
              <div class="resultado"></div>
            </div>
          </div>
          <div class="clearfix"></div>


        </div>
          <div class="modal fade factura_ot_modal_datos" id="Modal_nuevo" role="dialog" >
            <div class="modal-dialog modal-lg">
              <div class="modal-content factura_ot_contenido">
              </div>
            </div>
          </div>
        
@endsection

@section('scripts')

<script type="text/javascript">

var loading = $('#loadingDiv');
var resultado = $(".resultado");
var busca = $(".busca");

var input_txt = document.getElementById("busqueda_txt");
var docum_cli;
var razon;
var chasis;
var tipo_busqueda = 'default';
ini_busqueda();

  $(document)
    .ajaxStart(function () {loading.show(); window.scrollTo(0,0); }) 
    .ajaxStop(function () {loading.hide();})
  ;

  input_txt.addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode === 13) {
      document.getElementById("res_btn").click();
    }
  }); 

function ini_busqueda()
{
  loading.show();
  $(".perfil_cli").html('');
  $(".perfil_veh").html('');
  $(".perfil_cli").hide();
  $(".perfil_veh").hide();
  $(".dato1").hide();
  $(".dato2").hide();
  busca.show();
  console.log(tipo_busqueda);
  switch(tipo_busqueda) {
    case 'clientes':
        busqueda_cliente();
        break;
    case 'vehiculos':
        busqueda_vehiculo();
        break;
    default:
        busqueda_cliente();
  };
  
};

  function busqueda_cliente(){
    tipo_busqueda = 'clientes';
    var valor_busqueda = $("#busqueda_txt").val();
    var opciones_array = new Array();
    $('input[name="search_opt"]:checked').each(function() {
    opciones_array.push(this.value);
    });
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('postVenta.busca_clientes_res')}}",
      data: {
        busqueda: valor_busqueda,
        opciones: opciones_array
      },
      success: function(dataResult)
      {
        loading.hide();
        resultado.show();
        resultado.html(dataResult);
      },
      error: function (error) {
        alert('error; ' + eval(error));
      }
    });
  };

  function busqueda_vehiculo(){
    tipo_busqueda = 'vehiculos';
    var valor_busqueda = $("#busqueda_txt").val();
    var opciones_array = new Array();
    $('input[name="search_opt2"]:checked').each(function() {
    opciones_array.push(this.value);
    });
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('postVenta.busca_vehiculos_res')}}",
      data: {
        busqueda: valor_busqueda,
        opciones: opciones_array
      },
      success: function(dataResult)
      {
        loading.hide();
        resultado.show();
        resultado.html(dataResult);
      },
      error: function (error) {
        alert('error; ' + eval(error));
      }
    });
  };

  function ver_cliente(doc,raz){
    docum_cli = doc? doc:docum_cli;
    razon = raz? raz:razon;
    busca.hide();
    // $(".perfil_cli").show();
    // $(".perfil_veh").hide();

    switch(tipo_busqueda) {
      case 'clientes':
          $(".dato1").html('/ '+razon);
          $(".dato1").attr('onclick','ver_cliente()');
          $(".dato1").show();
          $(".dato2").hide();
          break;
      case 'vehiculos':
          $(".dato2").html('/ '+razon);
          $(".dato2").attr('onclick','ver_cliente()');
          $(".dato2").show();
          break;
    }
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('postVenta.perfil_cliente')}}",
      data: {
        documento: docum_cli
      },
      success: function(dataResult)
      {
        loading.hide();
        resultado.show();
        resultado.html(dataResult);
      },
      error: function (error) {
        alert('error; ' + eval(error));
      }
    });
  };

  function ver_vehiculo(chas){
    chasis = chas? chas:chasis;
    busca.hide();
    switch(tipo_busqueda) {
      case 'clientes':
          $(".dato2").html('/ '+chasis);
          $(".dato2").attr('onclick','ver_vehiculo()');
          $(".dato2").show();
          break;
      case 'vehiculos':
          $(".dato1").html('/ '+chasis);
          $(".dato1").attr('onclick','ver_vehiculo()');
          $(".dato1").show();
          $(".dato2").hide();
          break;
    }
    $(".perfil_veh").show();
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('postVenta.perfil_vehiculo')}}",
      data: {
        chasis: chasis
      },
      success: function(dataResult)
      {
        loading.hide();
        resultado.show();
        resultado.html(dataResult);
      },
      error: function (error) {
        alert('error; ' + eval(error));
      }
    });
  };

  function ver_factura_ot(chas,fac,ot){
      
      var modal=$(".factura_ot_modal_datos");
      var modalContent = $(".factura_ot_contenido");

      $.ajax({
        type: "GET",
        cache: false,
        dataType: "html",
        url: "{{ route('postVenta.factura_taller')}}",
        data: {
          chasis:chas,
          factura:fac,
          ot:ot
        },
        success: function(dataResult)
        {
          modalContent.empty().html(dataResult);                        
          modal.modal('show');
        },
        error: function (error) {
          alert('error; ' + eval(error));
        }
      });
  };

</script>
@endsection