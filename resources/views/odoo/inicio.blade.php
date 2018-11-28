@extends('layouts.main')

@section('content')

    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3> Pruebas Odoo <small> Test de conexion</small> </h3>
          </div>
        </div>
        <div class="clearfix"></div>
            <div class="col-md-3 col-sm-3 col-xs-3">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Funciones<small>web services</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <a href="javascript:solictud_ajax('V_stock_gtauto');" class="btn btn-primary">V_stock_gtauto</a>
                    <a target="_blank" rel="noopener noreferrer" href="{{ route('odoo.funcion',['funcion'=>'V_stock_gtauto'])}}" class="btn btn-default" style="width:0.3%;"><span class="fa fa-cog"></span></a>
                  </div>

                  <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <a href="javascript:solictud_ajax('V_cotizaciones');" class="btn btn-primary">V_cotizaciones</a>
                    <a target="_blank" rel="noopener noreferrer" href="{{ route('odoo.funcion',['funcion'=>'V_cotizaciones'])}}" class="btn btn-default" style="width:0.3%;"><span class="fa fa-cog"></span></a>
                  </div>

                  <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <a href="javascript:solictud_ajax('V_reservas');" class="btn btn-primary">V_reservas</a>
                    <a target="_blank" rel="noopener noreferrer" href="{{ route('odoo.funcion',['funcion'=>'V_reservas'])}}" class="btn btn-default" style="width:0.3%;"><span class="fa fa-cog"></span></a>
                  </div>

                  <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <a href="javascript:solictud_ajax('V_facturados');" class="btn btn-primary">V_facturados</a>
                    <a target="_blank" rel="noopener noreferrer" href="{{ route('odoo.funcion',['funcion'=>'V_facturados'])}}" class="btn btn-default" style="width:0.3%;"><span class="fa fa-cog"></span></a>
                  </div>

                 


                  <div class="ln_solid"></div>
                </div>
              </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Respuesta<small>AJAX</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div id='loadingDiv' align="center">
                    <h4>Estamos preparando su informacion por favor espere ... </h4>
                   <i class="fa fa-spinner fa-spin fa-7x" style="font-size:40px"></i>
                  </div> 
                  <div class="content_ajax">
                    
                  </div>
                </div>
              </div>
            </div>
        
      </div>
    </div>

@endsection
@section('scripts')

<script>
var loading = $('#loadingDiv').hide();

$(document)
  .ajaxStart(function () {

    loading.show();
  })
  .ajaxStop(function () {
    loading.hide();
  });
var content_ajax = $(".content_ajax");

function solictud_ajax (funcion){
  $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('odoo.funcion')}}",
      data: {
        funcion: funcion
      },
      success: function(dataResult)
      {
          content_ajax.empty();
          content_ajax.html(dataResult);
      },
      error: function (error) {
          alert('error; ' + eval(error));
      }
  });
};

</script>

@endsection
