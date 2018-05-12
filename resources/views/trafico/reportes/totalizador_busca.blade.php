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
        <h3><a href="">Reporte por modelos</a></h3>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Rango de fechas: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" style="width: 100%" name="fecha1"  class="form-control fecha1" id="fecha1"/>
                        </div>
                      </div>

                      <div class="form-group">                                            
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sucursales: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control select_suc" name="select_suc[]" multiple="multiple">
                            @foreach($sucursales as $det)
                              <option value="{{$det->id_sucursal}}">{{$det->regional}} - {{$det->sucursal}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="form-group">                                            
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Modelos: </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control select_mod" name="select_mod[]" multiple="multiple">
                            @foreach($modelos as $det)
                              <option value="{{$det->id_modelo}}">{{$det->modelo}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <a href="javascript:;" class="btn btn-primary pull-right" onclick="fn_datos();">Generar <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </form>         
                  </div>
                </div>
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

  $('.select_suc').select2();
  $('.select_mod').select2();

  var desc_fecha = null;
  var desc_suc = null;
  var des_mod =null;
  var content = $(".tabla_resumen");


  function fn_datos() {
     desc_fecha = $("#fecha1").val();
     desc_suc = $('.select_suc').val(); 
     des_mod = $('.select_mod').val(); 
    generar();
  };


  function generar() {
   reporte(desc_fecha,desc_suc,des_mod);
  };

  function reporte (fec,suc,mod){
      $.ajax({
        type: "GET",
        cache: false,
        dataType: "html",
        url: "{{ route('trafico.res_gen_rep_tra')}}",
        data: {
          sucursal: suc,
          modelo:mod,
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
</script>
                        
@endsection

