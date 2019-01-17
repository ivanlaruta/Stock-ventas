@extends('layouts.main')

@section('content')
<style type="text/css">
.mi_lista{border-bottom:1px solid #c0c0c0;    padding:1px;}
.opaco{color: #b5bec8;}

.loading {
  position: fixed;
  z-index: 999;
  height: 1em;
  width: 1em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 17%;
  bottom: 0;
  right: 0;
}

</style>

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3> Analisis comercial </h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="x_panel">
      <div class="x_title">
        <h2>Lista de precios TOYOTA</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="col-md-12 col-xs-12">
          <div class="x_panel">

            <div class="x_content">
              <br />
              <div class="form-horizontal form-label-left">
                <div class="form-group">
                  
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="" id="ch_stock">  Ver todos los precios de master con stock
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="" id="ch_no_stock"> Ver precios de master sin stock
                      </label>
                    </div>
                    
                      <p class="control-label col-md-5 col-sm-5 col-xs-12 sc_años">Desde el año:</p>
                      <div class="col-md-5 col-sm-5 col-xs-12">
                          <select onchange="calcula()" class="select2_single form-control sc_años" id='selectId'>
                            
                            <option value="2019" selected>2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>

                          </select>
                      </div>
                    
                  </div>
                  <a href="javascript:actualizar();" class="btn btn-app pull-right">
                      <i class="fa fa-refresh"></i> Actualizar resultado</a>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-xs-12">
           <div class="loading" id='loadingDiv'><i class="fa fa-spinner fa-spin " style="font-size:100px;color: #169F85;"></i></div>
             
           <div class="resultado">
           </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@section('scripts')


<script>
var loading = $('#loadingDiv');
var resultado = $(".resultado");
var select =$(".sc_años");

  var v_stoc='si';
  var v_no_stoc='no';
  var año = $('#selectId').val();

index();

function index(){
  document.getElementById("ch_stock").checked = true;
  document.getElementById("ch_no_stock").checked = false;
  select.attr('disabled','disabled');
  resultado.hide();


  generar(v_stoc,v_no_stoc,año);
};

$('#ch_stock').click(function() {
  if ($(this).is(':checked')) {
    v_stoc='si';
   generar(v_stoc,v_no_stoc,año);
  }else{
    v_stoc='no';
    generar(v_stoc,v_no_stoc,año);
  }
});

$('#ch_no_stock').click(function() {
  if ($(this).is(':checked')) {
    v_no_stoc='si';
    select.removeAttr('disabled');
    año = $('#selectId').val();
   generar(v_stoc,v_no_stoc,año);
  }else{
    v_no_stoc='no';
    año = $('#selectId').val();
    select.attr('disabled','disabled');
    generar(v_stoc,v_no_stoc,año);
  }
});

function calcula(){
  año = $('#selectId').val();
  generar(v_stoc,v_no_stoc,año);
}

function actualizar(){
  
  generar(v_stoc,v_no_stoc,año);
}



function generar(stock,nostock,año){
  resultado.hide();
loading.show();
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('analisis.resultado')}}",
      data: {
        stock: stock,
        nostock: nostock,
        año: año,
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

</script>
@endsection


