@extends('layouts.main')

@section('content')

  <div class="right_col" role="main">
    
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Reporte de Stock </h3>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            
            <div class="x_content">
              <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Resumen</a>
                  </li>
                  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Detalle</a>
                  </li>
                  
                </ul> 

               
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                  <div id='loadingDiv1' align="center">
                    <h4>Estamos preparando su informacion por favor espere ... </h4>
                   <i class="fa fa-spinner fa-spin fa-7x" style="font-size:40px"></i>
                  </div>
                   <div class="tabla_resumen"></div>

                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                  <div id='loadingDiv' align="center">
                    <h4>Estamos preparando su informacion por favor espere ... </h4>
                   <i class="fa fa-spinner fa-spin fa-7x" style="font-size:40px"></i>
                  </div> 
                   <div class="tabla_detalle"></div>
                  </div>
                </div>
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

var loading = $('#loadingDiv').hide();
var loading1 = $('#loadingDiv1');
$(document)
  .ajaxStart(function () {

    loading.show();
  })
  .ajaxStop(function () {
    loading.hide();
  });

    var content = $(".tabla_resumen");
    var content2 = $(".tabla_detalle");
    generar();
    generar2();

  function generar() {
    loading1.show();
    content.hide();
   resumen();
  };

  function generar2() {
   
   detalle();
  };

  function resumen (){
      $.ajax({
        type: "GET",
        cache: false,
        dataType: "html",
        url: "{{ route('presidencia.stock_tabla_resumen')}}",
        
        success: function(dataResult)
        {
          // console.log(dataResult);
          loading1.hide();
          content.show();
          content.html(dataResult);
          
        },
      error: function(jqXHR, exception)
      {
        var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }
        alert(msg);
        NProgress.done();
      }
      });
    };

  function detalle (){
      $.ajax({
        type: "GET",
        cache: false,
        dataType: "html",
        url: "{{ route('presidencia.stock_tabla_detalle')}}",
        
        success: function(dataResult)
        {
          // console.log(dataResult);
          content2.show();
          content2.html(dataResult);
          
        },
      error: function(jqXHR, exception)
      {
        var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }
        alert(msg);
        NProgress.done();
      }
      });
    };


  </script>
@endsection