
                    <div>
                      <small>{{$now}}</small>
                      <a href="javascript:generar2();" class="pull-right actualiza" onclick="generar2();">Actualizar <i class="fa fa-refresh" ></i></a>
                    </div>
                     

                    <div class="table-responsive">
                      <table id="detalle" class="table table-bordered table-hover nowrap detalle">
                        <thead>
                          <tr>
                            <th>MODELOS</th>
                            <th>COD_MARCA</th>
                            <th>MARCA</th>
                            <th>ID</th>
                            <th>CHASIS</th>
                            <th>ED</th>
                            <th>NRO FACTURA</th>
                            <th>CODIGO DE COLOR</th>
                            <th>NOMBRE</th>
                            <th>COLOR INTERIOR</th>
                            <th>COD_MASTER</th>
                            <th>MASTER</th>
                            <th>COD_MODELO</th>
                            <th>MODELO</th>
                            <th>AÑO_MOD</th>
                            <th>COD_UBICACION</th>
                            <th>UBICACION</th>
                            <th>TITULAR</th>
                            <th>CELULAR</th>
                            <th>TELEFONO</th>
                            <th>DIRECCION</th>
                            <th>VENDEDOR</th>
                            <th>LUGAR</th>
                            <th>SITUACION</th>
                            <th>LIBERADO</th>
                            <th>ESTADO</th>
                            <th>CFR</th>
                            <th>FECHA_RESERVA</th>
                            <th>TIPO_DE_VENTA</th>
                            <th>FORMA_DE_PAGO</th>
                            <th>OBSERVACIONES</th>
                            <th>FECHA Z.F.</th>
                            <th>STOCK</th>
                            <th>ASIGNACION</th>
                            <th>TIPO_UNIDAD</th>
                            <th>UNIDAD ASIGNADA A LA EMPRESA</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  


  <script type="text/javascript">
    


        oTable = $('#detalle').DataTable({

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
                  "buttons": {
                      "copyTitle": "Informacion copiada en el portapapeles",
                      "copyKeys": "Pege la informacion en donde lo requiera",
                      "copySuccess": {
                        _: '%d registros copiados',
                        1: '1 registro copiado'
                    }
                  },
              },
            "dom": "Blfrtip",
            "buttons": [ { "extend": 'copy', "text": 'Copiar' }, 'excel'],

            "lengthMenu": [[-1,10, 25, 50, 100,], ["TODO",10, 25, 50, 100]],
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('presidencia.stock_tabla_detalle_data')}}",
            "columns": [
                {data: 'MODELOS'},
                {data: 'COD_MARCA'},
                {data: 'MARCA'},
                {data: 'ID'},
                {data: 'CHASIS'},
                {data: 'ED'},
                {data: 'NRO_FACTURA'},
                {data: 'COD_COLOR'},
                {data: 'NOMBRE'},
                {data: 'COL_INTERIOR'},
                {data: 'COD_MASTER'},
                {data: 'MASTER'},
                {data: 'COD_MODELO'},
                {data: 'MODELO'},
                {data: 'ANIO_MOD'},
                {data: 'COD_UBICACION'},
                {data: 'UBICACION'},
                {data: 'TITULAR'},
                {data: 'CELULAR'},
                {data: 'TELEFONO'},
                {data: 'DIRECCION'},
                {data: 'VENDEDOR'},
                {data: 'LUGAR'},
                {data: 'SITUACION'},
                {data: 'LIBERADO'},
                {data: 'ESTADO'},
                {data: 'CFR'},
                {data: 'FECHA_RESERVA'},
                {data: 'TIPO_DE_VENTA'},
                {data: 'FORMA_DE_PAGO'},
                {data: 'OBSERVACIONES'},
                {data: 'FECHA_ZF'},
                {data: 'STOCK'},
                {data: 'ASIGNACION'},
                {data: 'TIPO_UNIDAD'},
                {data: 'UNIDAD_ASIGNADA'}
            ]
        });

  </script>
