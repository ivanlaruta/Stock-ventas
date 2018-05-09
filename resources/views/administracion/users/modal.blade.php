@if($request->tipo=="nuevo")

    {!! Form::open(array('route' => ['administracion.add_users'], 'method' => 'get' , 'id'=>'UserForm', 'class'=>'form-horizontal form-label-left')) !!}
    <form  data-parsley-validate class="form-horizontal form-label-left">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">NUEVO USUARIO : <strong class="red" id="TITULO" name="TITULO"> </strong></h4> 
        </div>
        <div class="modal-body">
          <div class="row">
          <input value="{{$request->tipo}}" type="text" hidden id="tipo" name="tipo" required="required" class="form-control col-md-7 col-xs-12">
          <p>Por favor complete la informacion del formulario.</p>
          <br/>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Usuario *
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="usuario" name="usuario" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Password *
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="password" name="password" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Nombres *
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="nombre" name="nombre"  class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Paterno *
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="paterno" name="paterno"  class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Materno
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="materno" name="materno"  class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Correo
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="email" name="email"  required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Telefono
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="telefono" name="telefono"  class="form-control col-md-7 col-xs-12">
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
                  <option value="{{$det->id}}">{{$det->id}} - {{$det->nom_sucursal}}</option>
                @endforeach
              </select>
            </div>
          </div>      
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Rol *
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control col-md-7 col-xs-12 select2"   data-width="100%" name="rol" id="rol" required >
                <option value="">Selecione un rol </option>
                @foreach($roles as $det)
                  <option value="{{$det->codigo}}"> {{$det->descripcion}}</option>
                @endforeach
              </select>
            </div>
          </div>      

        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success guardar" value="Guardar">

      </div>

      </form>
      {!! Form::close()!!}
@endif

@if($request->tipo=="editar")

    {!! Form::open(array('route' => ['administracion.add_users'], 'method' => 'get' , 'id'=>'UserForm', 'class'=>'form-horizontal form-label-left')) !!}
    <form  data-parsley-validate class="form-horizontal form-label-left">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">EDITAR USUARIO : <strong class="red" id="TITULO" name="TITULO"> </strong></h4> 
        </div>
        <div class="modal-body">
          <div class="row">
          
          <input value="{{$request->tipo}}" type="text" hidden id="tipo" name="tipo" >
          <input value="{{$request->id_usuario}}" type="text" hidden id="id_usuario" name="id_usuario" >

          <p>Por favor complete la informacion del formulario.</p>
          <br/>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Usuario *
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input value="{{$usuario->usuario}}" type="text" id="usuario" name="usuario" disabled class="form-control col-md-7 col-xs-12 disabled">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Password *
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input  type="text" id="password" name="password" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Nombres *
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input value="{{$usuario->nombre}}" type="text" id="nombre" name="nombre" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Paterno *
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input value="{{$usuario->paterno}}" type="text" id="paterno" name="paterno" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Materno
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input value="{{$usuario->materno}}" type="text" id="materno" name="materno" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Correo
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input value="{{$usuario->email}}" type="text" id="email" name="email" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Telefono
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input value="{{$usuario->telefono}}" type="text" id="telefono" name="telefono" class="form-control col-md-7 col-xs-12">
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
                  <option value="{{$det->id}}" @if($det->id==$usuario->id_ubicacion) selected @endif>{{$det->id}} - {{$det->nom_sucursal}}</option>
                @endforeach
              </select>
            </div>
          </div>      
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" > 
              Rol *
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control col-md-7 col-xs-12 select2"   data-width="100%" name="rol" id="rol" required >
                <option value="">Selecione un rol </option>
                @foreach($roles as $det)
                  <option value="{{$det->codigo}}" @if($det->codigo==$usuario->rol) selected @endif> {{$det->descripcion}}</option>
                 
                @endforeach
              </select>
            </div>
          </div>      

        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success guardar" value="Guardar">

      </div>

      </form>
      {!! Form::close()!!}
      @endif

<script type="text/javascript">
// $('.select2').select2();

</script>

         