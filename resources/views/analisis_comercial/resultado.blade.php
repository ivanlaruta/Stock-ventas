

          <div class="table-responsive">
            <table class="table table-striped table-hover table table-bordered projects" id="datatable1">
              <thead>
                <tr>
                  <th>Master/Modelo/Año</th>
                  <th style="width: 1%">Sin seguro (US)</th>
                  <th style="width: 1%">Con seguro (US)</th>
                  <th style="width: 1%">Credito directo (US)</th>
                  <th style="width: 1%">Precio Cif (US)</th>
                  <th style="width: 1%">Sin seguro (BS)</th>
                  <th style="width: 1%">Con seguro (BS)</th>
                  <th style="width: 1%">Credito directo (BS)</th>
                  <th style="width: 1%">Precio Cif (BS)</th>
                  <th style="width: 1%">0% interes (US)</th>
                  <th style="width: 1%">0% interes (BS)</th>
                </tr>
              </thead>
              <tbody>
                @foreach($precios as $det)
                <tr>
                  <td>
                    <a data-toggle="tooltip" data-original-title="Master"><strong>{{$det->MASTER}}</strong></a><br/>
                    <small><strong>Cod master :</strong>{{$det->CODIGO_MASTER}}</small><br/>
                    <a data-toggle="tooltip" data-original-title="Modelo">{{$det->MODELO}}</a><br/>
                    <small><strong>Cod modelo :</strong>{{$det->CODIGO_MODELO}}</small><br/>
                    <strong><a data-toggle="tooltip" data-original-title="Año">{{$det->ANIO}}</a></strong><br/>
                    <small>{{$det->MARCA}}</small><br/>
                    <div class="btn-group pull-right" >
                      <button data-toggle="dropdown" class="btn btn-round dropdown-toggle btn-xs" type="button"> Stock
                        @if($det->TOTAL > 0)
                        <span class="label label-primary">{{$det->TOTAL}}</span>
                        @else
                        <span class="label label-danger">{{$det->TOTAL}}</span>  
                        @endif
                      </button>
                      <ul class="dropdown-menu" style=" padding: 15px;">
                        <li class="mi_lista">SC_ESPECIAL <b class="pull-right">{{$det->SC_ESPECIAL}}</b></li>
                        <li class="mi_lista">DISPONIBLE <b class="pull-right">{{$det->DISPONIBLE}}</b></li>
                        <li class="mi_lista">RESERVADO <b class="pull-right">{{$det->RESERVADO}}</b></li>
                        <li class="mi_lista">FACTURADO <b class="pull-right">{{$det->FACTURADO}}</b></li>
                        <li class="mi_lista">INMOVILIZADO <b class="pull-right">{{$det->INMOVILIZADO}}</b></li>
                      </ul>
                    </div>
                  </td>
                  <td align="right">
                    @if($det->sin_seguro='si')
                    <strong>{{number_format($det->Precio_SIN_SEGURO_US, 2)}}</strong>
                    @else
                    <del class="opaco">{{number_format($det->Precio_SIN_SEGURO_US, 2)}}</del> 
                    @endif
                  </td>
                  <td align="right">
                    @if($det->con_seguro='si')
                    <strong>{{number_format($det->Precio_CON_SEGURO_US, 2)}}</strong>
                    @else
                    <del class="opaco">{{number_format($det->Precio_CON_SEGURO_US, 2)}}</del> 
                    @endif
                  </td>
                  <td align="right">
                    @if($det->credito_directo='si')
                    <strong>{{number_format($det->Precio_CREDITO_DIRECTO_US, 2)}}</strong>
                    @else
                    <del class="opaco">{{number_format($det->Precio_CREDITO_DIRECTO_US, 2)}}</del> 
                    @endif
                  </td>
                  <td align="right">
                    @if($det->zona_franca='si')
                    <strong>{{number_format($det->Precio_ZONA_FRANCA_US, 2)}}</strong>
                    @else
                    <del class="opaco">{{number_format($det->Precio_ZONA_FRANCA_US, 2)}}</del> 
                    @endif
                  </td>
                  <td align="right">
                    @if($det->sin_seguro='si')
                    <strong>{{number_format($det->Precio_SIN_SEGURO_BS, 2)}}</strong>
                    @else
                    <del class="opaco">{{number_format($det->Precio_SIN_SEGURO_BS, 2)}}</del> 
                    @endif
                  </td>
                  <td align="right">
                    @if($det->con_seguro='si')
                    <strong>{{number_format($det->Precio_CON_SEGURO_BS, 2)}}</strong>
                    @else
                    <del class="opaco">{{number_format($det->Precio_CON_SEGURO_BS, 2)}}</del> 
                    @endif
                  </td>
                  <td align="right">
                    @if($det->credito_directo='si')
                    <strong>{{number_format($det->Precio_CREDITO_DIRECTO_BS, 2)}}</strong>
                    @else
                    <del class="opaco">{{number_format($det->Precio_CREDITO_DIRECTO_BS, 2)}}</del> 
                    @endif
                  </td>
                  <td align="right">
                    @if($det->zona_franca='si')
                    <strong>{{number_format($det->Precio_ZONA_FRANCA_BS, 2)}}</strong>
                    @else
                    <del class="opaco">{{number_format($det->Precio_ZONA_FRANCA_BS, 2)}}</del> 
                    @endif
                  </td>
                  <td align="right">
                    @if($det->cero_interes='si')
                    <strong>{{number_format($det->Precio_0_INTERES_US, 2)}}</strong>
                    @else
                    <del class="opaco">{{number_format($det->Precio_0_INTERES_US, 2)}}</del> 
                    @endif
                  </td>
                  <td align="right">
                    @if($det->cero_interes='si')
                    <strong>{{number_format($det->Precio_0_INTERES_BS, 2)}}</strong>
                    @else
                    <del class="opaco">{{number_format($det->Precio_0_INTERES_BS, 2)}}</del> 
                    @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>


<script>


  $('#datatable1').DataTable( {"language": {

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
  "bLengthChange" : true,       
  "dom": "lfrtip",
  "lengthMenu": [[30, 60, 100, -1], [30, 60, 100, "TODO"]],
  "pageResize": true
} );
</script>



