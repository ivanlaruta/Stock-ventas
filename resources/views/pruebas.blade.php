@extends('layouts.main')

@section('content')

    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3> Pruebas Odoo <small> Pagina no funcional</small> </h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <a href="{{ route('odoo.index')}}" class="btn btn-info"> CONECTAR <span class="fa fa-warning"></span></a>
        </div>
      </div>
    </div>

@endsection
@section('scripts')

<script>

</script> 
@endsection