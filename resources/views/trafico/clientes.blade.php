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
        <h3><a href="">CLIENTES</a></h3>
        </div>
       
      </div>
    </div>
    <hr>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            Lista de clientes creados por el sitema de trafico de clientes
            <div class="clearfix" ></div>
          </div>
          <div class="x_content">
            <div class="table-responsive">
              
            <table id="clientes" class="table table-striped jambo_table bulk_action">
              <thead>
                <tr>
                  
                  <th>NOMBRE</th>
                  <th>CI</th>
                  <th>EX</th>
                  <th>GENERO</th>
                  <th>RANGO DE EDAD</th>
                  <th>TELEFONO </th>
                  <th>TELEFONO 2</th>
                  <th>CORREO</th>
                </tr>
              </thead>
              <tbody>
               @foreach($clientes as $det)
                <tr>
                    <td>{{$det->nombre}} {{$det->paterno}} {{$det->materno}}</td>
                    <td>{{$det->ci}}</td>
                    <td>{{$det->expedido}}</td>
                    <td>{{$det->genero}}</td>
                    <td>@if(is_null($det->rango_edad)) -- @else{{$det->edad->descripcion}}@endif</td>
                    <td>{{$det->telefono}}</td>
                    <td>{{$det->telefono_aux}}</td>
                    <td>{{$det->correo}}</td>
                    
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $clientes->links() }}
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

</script>
@endsection