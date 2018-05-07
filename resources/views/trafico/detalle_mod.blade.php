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
                  <th>CREADO POR</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
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

    $(document).ready(function() {
        oTable = $('#clientes').DataTable({

            "language": {
              
                  "sProcessing":     "Procesando...",
                  "sLengthMenu":     "Mostrar _MENU_ registros",
                  "sZeroRecords":    "No se encontraron resultados",
                  "sEmptyTable":     "Ningún dato disponible en esta tabla",
                  "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                  "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                  "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                  "sInfoPostFix":    "",
                  "sSearch":         "Buscar en Todo:",
                  "sUrl":            "",
                  "sInfoThousands":  ",",
                  "sLoadingRecords": "Cargando...",
                  "oPaginate": {
                      "sFirst":    "Primero",
                      "sLast":     "Último",
                      "sNext":     "Siguiente",
                      "sPrevious": "Anterior"
                  },
                  "oAria": {
                      "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                  },
              },
            "dom": "Blfrtip",
            "buttons": [ 'copy', 'excel','pdf'],
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('trafico.table_clientes')}}",
            "columns": [
                {data: 'nombre'},
                {data: 'ci'},
                {data: 'ex'},
                {data: 'genero'},
                {data: 'descripcion'},
                {data: 'telf1'},
                {data: 'telf2'},
                {data: 'correo'},
                {data: 'us'}
            ]
        });
    });
</script>
@endsection