
    <form  data-parsley-validate class="form-horizontal form-label-left">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar <strong class="red" id="TITULO" name="TITULO"> </strong></h4> 
        </div>
        <div class="modal-body">


          <div class="row">
          
          <input value="{{$request->tipo}}" type="text" hidden id="tipo" name="tipo" >
          <input value="{{$request->id_vendedor}}" type="text" hidden id="id_vendedor" name="id_vendedor" >

          <p>Por favor complete la informacion del formulario.</p>
          <br/>


          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Nombres *
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input value="{{$vendedor->nombre}}" type="text" id="nombre" name="nombre" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Paterno *
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input value="{{$vendedor->paterno}}" type="text" id="paterno" name="paterno" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Materno
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input value="{{$vendedor->materno}}" type="text" id="materno" name="materno" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Correo
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input value="{{$vendedor->correo}}" type="text" id="email" name="email" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          
         <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Estado *
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control col-md-7 col-xs-12 select2"   data-width="100%" name="id_ubicacion" id="id_ubicacion" required >
               
                  <option value="0" @if($vendedor->estado=='0') selected @endif>Inactivo</option>
                  <option value="1" @if($vendedor->estado=='1') selected @endif>Activo</option>
               
              </select>
            </div>
          </div>    

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Ubicacion *
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control col-md-7 col-xs-12 select2"   data-width="100%" name="id_ubicacion" id="id_ubicacion" required >
                <option value="">Selecione una sucursal </option>
                @foreach($sucursales as $det)
                  <option value="{{$det->id}}" @if($det->id==$vendedor->id_sucursal) selected @endif>{{$det->id}} - {{$det->nom_sucursal}}</option>
                @endforeach
              </select>
            </div>
          </div> 

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Marcas
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <label><input type="checkbox" name="marca" value="T" @if(strpos($vendedor->marca, 'T') !== false) checked @endif> TOYOTA</label>
              <label><input type="checkbox" name="marca" value="Y" @if(strpos($vendedor->marca, 'Y') !== false) checked @endif> YAMAHA</label>
            </div>
          </div> 
          

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <input type="submit" class="btn btn-success guardar" value="Guardar">

      </div>

      </form>





      
      