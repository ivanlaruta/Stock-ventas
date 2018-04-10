
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">TOTALIZADOR DE MODELOS </h4> 
  </div>
  <div class="modal-body">
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            
            <div class="x_content">
            <table id="datatable_motivos" class="table table-striped jambo_table bulk_action">
              <thead>
                <tr>
                  <th>MODELO</th>
                  <th>TOTAL</th>
                </tr>
              </thead>
              <tbody>
              @foreach($detalle as $det)
                <tr>
                  <td>{{$det->descripcion}}</td>
                  <td>{{$det->total}}</td>
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



         