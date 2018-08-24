@extends('layouts.main')


@section('content')

<style type="text/css">

</style>
        <div class="right_col" role="main">
          <div class="">

            <div class="page-title">
              <div class="title_left">
                <h4>SEGUIMIENTO DE CLIENTES</h4>
              </div>
              <div class="x_content busca">
                <div class="form-horizontal form-label-left">
                  <div class="col-md-8 col-sm-12 col-xs-12 col-lg-offset-2">
                    <div class="input-group">
                      <input type="text" name="busqueda" id="busqueda" class="form-control" placeholder="Que estas buscando?" autofocus >
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_config"><i class="fa fa-cog"></i></button>
                        <button type="button" id="res_btn" onclick="resultado_ajax();" class="btn group btn-primary">Buscar!</button>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
              <div id='loadingDiv' align="center">
                <h4>Buscando ... </h4>
               <i class="fa fa-spinner fa-spin fa-7x" style="font-size:40px"></i>
              </div>
            <div class="clearfix"></div>
            
            <div class="row resultado">
              
            </div>

          </div>
          <div class="clearfix"></div>
        </div>
        
        <div class="modal fade" id="modal_config" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Opciones de busqueda</h4>
              </div>

              <div class="modal-body col-lg-offset-2">
                <p>Buscar en: </p>
                <input type="checkbox" class="flat" checked="checked"> Nombres <br>
                <input type="checkbox" class="flat" checked="checked"> Apellidos <br>
                <input type="checkbox" class="flat" checked="checked"> CI <br>
                <input type="checkbox" class="flat" checked="checked"> NIT <br>
                <input type="checkbox" class="flat" checked="checked"> Telefono <br>
                <input type="checkbox" class="flat" checked="checked"> Celular <br>
                <input type="checkbox" class="flat" checked="checked"> Direccion <br>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
              </div>

            </div>
          </div>
        </div>

  <!-- Modal -->



@endsection

@section('scripts')

<script type="text/javascript">

var loading = $('#loadingDiv').hide();
var resultado = $(".resultado");
var busca = $(".busca");

  $(document)
    .ajaxStart(function () {loading.show(); resultado.hide();}) 
    .ajaxStop(function () {loading.hide();})
  ;


  var input = document.getElementById("busqueda");

  input.addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode === 13) {
      document.getElementById("res_btn").click();
    }
  }); 


  function resultado_ajax(){
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('postVenta.busca_clientes_res')}}",
      success: function(dataResult)
      {
        loading.hide();
        resultado.show();
        resultado.html(dataResult);
      },
    });
  };

  function generar(){
    // busca.hide();
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('postVenta.perfil_cliente')}}",
      success: function(dataResult)
      {
        loading.hide();
        resultado.show();
        resultado.html(dataResult);
      },
    });
  };
</script>
@endsection