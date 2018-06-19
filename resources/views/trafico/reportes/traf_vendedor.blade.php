@extends('layouts.main')

@section('content')

<style type="text/css">

</style>
 <!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title">
        <div class="col-md-8">
        <h3><a href="">Trafico por vendedor</a></h3>
        </div>
       
      </div>
    </div>
    <hr>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            
            <div class="clearfix" ></div>
          </div>
          <div class="x_content">

          <div class="clearfix"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-align-left"></i> Parametros de busqueda </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Rango de fechas: </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" style="width: 100%" name="fecha1"  class="form-control fecha1" id="fecha1"/>
                        </div>
                      </div>
                      <div class="form-group">                                            
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Vendedores: </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="form-control select_vend" name="select_vend[]" multiple="multiple">
                            @foreach($vendedores as $det)
                              <option value="{{$det->id}}">{{strtoupper($det->nombre)}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input type="checkbox" id="checkbox_suc" >Seleccionar todos
                        </div>
                      </div>
                      <a href="javascript:;" class="btn btn-primary pull-right" onclick="fn_datos();">Generar <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </form>         
                  </div>
                </div>
              </div>

                  <div id='loadingDiv' align="center">
                    <h4>Estamos preparando su informacion por favor espere ... </h4>
                   <i class="fa fa-spinner fa-spin fa-7x" style="font-size:40px"></i>
                  </div> 

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-align-left"></i> Resultado: </h2>
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="tabla_resumen">
                      
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@section('scripts')
<script type="text/javascript">



var loading = $('#loadingDiv').hide();


  $('.select_vend').select2();
  

  var desc_fecha = null;
  var desc_vend = null;
 
  var content = $(".tabla_resumen");


$(document)
  .ajaxStart(function () {

    loading.show();
    content.empty();
  })
  .ajaxStop(function () {
    loading.hide();
     
  });


  function fn_datos() {
     desc_fecha = $("#fecha1").val();
     desc_vend = $('.select_vend').val(); 
    generar();
  };


  function generar() {
   reporte(desc_fecha,desc_vend);
  };

  function reporte (fec,vend){
      $.ajax({
        type: "GET",
        cache: false,
        dataType: "html",
        url: "{{ route('trafico.res_traf_vendedor')}}",
        data: {
          vendedores: vend,
          fecha:fec
        },
        success: function(dataResult)
        {
          // console.log(dataResult);
          content.html(dataResult);
          
        }
      });
    };






    $(function() {
        $('input[name="fecha1"]').daterangepicker({
          "maxDate": moment(),
          "locale": {
            "format": "DD/MM/YYYY",
            "separator": " - ",
            "applyLabel": "Aceptar",
            "cancelLabel": "Cancelar",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "daysOfWeek": [
            "Do",
            "Lu",
            "Ma",
            "Mi",
            "Ju",
            "Vi",
            "Sa"
            ],
            "monthNames": [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre"
            ],
            "firstDay": 1
          }
        })
      });




      $("#checkbox_suc").click(function(){
        if($("#checkbox_suc").is(':checked') ){ //select all
          $(".select_vend").find('option').prop("selected",true);
          $(".select_vend").trigger('change');
        } else { //deselect all
          $(".select_vend").find('option').prop("selected",false);
          $(".select_vend").trigger('change');
        }
      });

    
 

</script>
                        
@endsection

