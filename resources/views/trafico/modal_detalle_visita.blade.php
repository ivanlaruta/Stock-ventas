
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">VISITA N° {{$id_vis}} </h4> 
  </div>
  <div class="modal-body">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>MODELOS SELECCIONADOS </h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <table id="datatable_motivos" class="table table-striped jambo_table bulk_action">
              <thead>
                <tr>
                  <th>CATEGORIA</th>
                  <th>MODELO</th>
                  <th>DESCRIPCION</th>
                </tr>
              </thead>
              <tbody>
              @foreach($detalle_visita as $det)
                <tr>
                  <td>{{$det->modelo->categoria->descripcion}}</td>
                  <td>{{$det->modelo->descripcion}}</td>
                  <td>{{$det->descripcion}}</td>     
                </tr>
              @endforeach
              </tbody>
            </table>
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="modal-footer">
    
  </div>



         