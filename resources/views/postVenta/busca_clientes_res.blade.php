			<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h5>Resultado de busqueda</h5>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content ">
                    
                    <table id="datatable11" class="data table table-striped margin mi_tabla">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Ci</th>
                          <th>Nit</th>
                          <th>Telefono</th>
                          <th>Celular</th>
                          <th>Direccion</th>
                          <th>Opcion</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jonas Alexander</td>
                          <td>8264121 LP</td>
                          <td></td>
                          <td>22384150</td>
                          <td>277756103</td>
                          <td>Av Ejercito #165, La Paz</td>
                          <td><a href="javascript:;" onclick="generar()">Ver</a></td>
                        </tr>
                        <tr>
                          <td>SHAD SUPPORT SA</td>
                          <td></td>
                          <td>48972131</td>
                          <td>3365414</td>
                          <td>77789652</td>
                          <td>Av montenegro #187, La Paz</td>
                          <td><a href="javascript:;" onclick="generar()">Ver</a></td>
                        </tr>
                        <tr>
                          <td>Michael Bruce</td>
                          <td>3542181 LP</td>
                          <td></td>
                          <td></td>
                          <td>79836412</td>
                          <td>Av Ballivian #78, La Paz</td>
                          <td><a href="javascript:;" onclick="generar()">Ver</a></td>
                        </tr>
                        <tr>
                          <td>Donna Snider</td>
                          <td>9875468 SC</td>
                          <td></td>
                          <td></td>
                          <td>79885212</td>
                          <td>Av Alemana #5874, Santa Cruz</td>
                          <td><a href="javascript:;" onclick="generar()">Ver</a></td>
                        </tr>
                      </tbody>
                    </table>
                  
                  </div>
                </div>
             </div>


<script type="text/javascript">
  

    $('.mi_tabla').DataTable( {
      "language": {
              
                  "sProcessing":     "Procesando...",
                  "sLengthMenu":     "Mostrar _MENU_ registros",
                  "sZeroRecords":    "No se encontraron resultados",
                  "sEmptyTabl6e":     "Ningún dato disponible en esta tabla",
                  "sInfo":           "Encontrados: _TOTAL_ coincidencias",
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
        "dom": "ti",
        

        
         "lengthMenu": [[-1], ["TODO"]]
         // "fixedHeader": true
    } );



</script>
