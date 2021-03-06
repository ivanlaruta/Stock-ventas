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
        <h3><a href="">Facturas Tasa Argentina</a></h3>
        </div>
       
      </div>
    </div>
    <hr>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content form-horizontal form-label-left">
            <div class="form-group">                                            
              <label class="control-label col-md-2 col-sm-2 col-xs-12">Seleccione factura(s): </label>
              <div class="col-md-7 col-sm-7 col-xs-12">
                <select class="form-control facturas" id="facturas" name="facturas[]" multiple="multiple">
                  @foreach($facturas as $det)
                    <option value="{{$det->orden}}">{{$det->orden}}</option>
                  @endforeach
                </select>
              </div>
              <input type="checkbox" id="checkbox" >Selecionar todo
            </div>
            <div class="clearfix" ></div>
          </div>
          <div class="x_content">
            <div class="resultado">


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@section('scripts')
<script type="text/javascript">

  var facturas;
 var content = $(".resultado");
  $('.facturas').select2();

  $('.facturas').on('change', function() {
    facturas= $('.facturas').val() ;
    ejecutar();
  })

  function ejecutar() {
   reporte(facturas);
  };

  function reporte (fac){
      $.ajax({
        type: "GET",
        cache: false,
        dataType: "html",
        url: "{{ route('importaciones.table_tasa')}}",
        data: {
          facturas:fac
        },
        success: function(dataResult)
        {
          content.html(dataResult);
        }
      });
    };

    $(document).ready(function() {
    $("#checkbox").click(function(){
      if($("#checkbox").is(':checked') ){ //select all
        $(".facturas").find('option').prop("selected",true);
        $(".facturas").trigger('change');
      } else { //deselect all
        $(".facturas").find('option').prop("selected",false);
        $(".facturas").trigger('change');
      }
  });
});

</script>
@endsection

