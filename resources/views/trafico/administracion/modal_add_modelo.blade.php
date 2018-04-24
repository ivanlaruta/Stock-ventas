      {!! Form::open(array('route' => ['trafico.add_modelo'], 'method' => 'get' , 'id'=>'loginForm', 'class'=>'form-horizontal form-label-left')) !!}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nuevo modelo</h4>
        </div>
        <div class="modal-body">
          <p>Porfavor complete la informacion del formulario.</p>
          <div class="form-group">
            
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">DESCRIPCION 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="descripcion" name="descripcion"  class="form-control col-md-7 col-xs-12" placeholder="Ingrese nombre del modelo" >
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">CATEGORIAS 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control select2" data-width="100%" name="categoria" id="categoria" required >
                <option value="">Selecione una categoria</option>
                  @foreach($categorias as $det)
                    <option value="{{$det->id}}"> {{$det->descripcion}}</option>
                  @endforeach
                </select>
              </div>
            </div>

           {{--  <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">OBSERVACIONES 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="observaciones" name="observaciones"  class="form-control col-md-7 col-xs-12" placeholder="Ingrese observaciones" >
              </div>
            </div> --}}

          </div>
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="Guardar">
        </div>
      {!! Form::close()!!}

<script type="text/javascript">

  $('.select2').select2();

</script>

          