
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Agregar cliente. </h4> 
  </div>
    {!! Form::open(array('route' => ['trafico.add_nuevo_ant'], 'method' => 'get' , 'id'=>'VisitaForm2', 'name'=>'VisitaForm2', 'class'=>'form-horizontal form-label-left')) !!}
  <div class="modal-body">
    <div class="row">
      <div class="form-horizontal form-label-left input_mask">     
        <div class="form-group">
          <div class="col-md-6">
            <input type="text" name="nombre_a" id="nombre_a" class="form-control" placeholder="Nombre *" autocomplete="off" style="background: #eeebfc;" required>
          </div>
          <div class="col-md-6">
            <input type="text" name="paterno_a" id="paterno_a" class="form-control" placeholder="Paterno *" autocomplete="off" style="background: #eeebfc;" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6">
            <input type="text" name="materno_a" id="materno_a" class="form-control" placeholder="Materno" autocomplete="off">
          </div>
          <div class="col-md-6">
          </div>
        </div>
        <div class="form-group ">
          <div class="col-md-6">
            <input type="number" name="telefono_a" id="telefono_a" class="form-control" placeholder="Telefono *" autocomplete="off" style="background: #eeebfc;" required>
          </div>
          <div class="col-md-6">
            <input type="number" name="telefono2_a" id="telefono2_a" class="form-control" placeholder="Telefono adicional" autocomplete="off">
          </div>
        </div>
        <div class="ln_solid "></div>
        <div class="form-group">
          <div class="col-md-6">
            <input type="text" name="correo_a" id="correo_a" class="form-control " placeholder="Correo (Ej.: pedro.perez)">
          </div>
          <div class="col-md-6">
            <select class="form-control" name="ter_correo_a" id="ter_correo_a" >
            
              <option value="@hotmail.com">@hotmail.com</option>
              <option value="@gmail.com" selected>@gmail.com</option>
              <option value="@yahoo.com">@yahoo.com</option>
              <option value="@outlook.com">@outlook.com</option>
              <option value="@zoho.com">@zoho.com</option>
              <option value="@live.com">@live.com</option>

            </select>
          </div>
        </div>

        <div class="ln_solid "></div>
        <div class="form-group ">
          <div class="col-md-6">
            <input type="text" name="ci_a" id="ci_a" class="form-control " placeholder="Nro CI">
          </div>
          <div class="col-md-6">
            <select class="form-control" name="exp_a" id="exp_a" >
            <option value="" disabled selected>Expedido</option>
              <option value="LP">LP</option>
              <option value="OR">OR</option>
              <option value="PT">PT</option>
              <option value="CB">CB</option>
              <option value="CH">CH</option>
              <option value="TJ">TJ</option>
              <option value="SC">SC</option>
              <option value="BN">BN</option>
              <option value="PA">PA</option>
            </select>
          </div>
        </div>

    <div class="ln_solid "></div>
    <div class="row ">
      <div class="col-md-6 form-group has-feedback" style="padding:10px;">
        <div style="background-color: #eeebfc; padding:10px;">
          <p>RANGO DE EDAD *</p>
            @foreach($edades as $det)
              <label><input type="radio" name="edad_a" id="edad_a" value="{{$det->codigo}}" class="radio_edad req_nuevo" required> 
              {{$det->descripcion}}</label>
              <br>
            @endforeach
        </div>
      </div>
      <div class="col-md-6 form-group has-feedback" style="padding:10px;">
        <div style="background-color: #eeebfc; padding:10px;">
        <p>GENERO *</p>
          <label><input type="radio" name="gen_a" id="gen_a" value="M" required> Masculino</label><br>
          <label><input type="radio" name="gen_a" id="gen_a" value="F" required> Femenino</label>
        </div>
      </div>
    </div>
      
    </div>
                

    </div>
  </div>
  <div class="modal-footer">
    <input type="submit" class="btn btn-success guardar" id="save" value="Guardar">
    
  </div>
{!! Form::close()!!}

<script type="text/javascript">

    var frm = $('#VisitaForm2');

    frm.submit(function (e) {

        e.preventDefault();

        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                alert('Guardado exitoso!');
                // console.log('Submission was successful.');
                // // console.log(data);
                modal.modal('hide');
            },
            error: function (data) {
                // console.log('An error occurred.');
                // console.log(data);
                modal.modal('hide');
            },
        });
    });
</script>