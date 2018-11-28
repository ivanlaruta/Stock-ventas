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
        <div class="row">
        <a href="javascript:solictud_ajax();" class="btn btn-success"> CONEXION AJAX<span class="fa fa-download"></span></a>
        <a href="{{ route('odoo.index')}}" class="btn btn-info"> CONEXION MANUAL<span class="fa fa-warning"></span></a>
        </div>

        <div class="content_ajax">
          Respuesta...
        </div>
      </div>
    </div>

@endsection
@section('scripts')

<script>

var content_ajax = $(".content_ajax");

function solictud_ajax (){
  $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('odoo.index')}}",
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
