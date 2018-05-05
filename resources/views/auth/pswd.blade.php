
  {{--   {!! Form::open(array('route' => ['change_pswd'], 'method' => 'get' , 'autocomplete'=>'off', 'id'=>'UserForm', 'class'=>'form-horizontal form-label-left')) !!} --}}
    <form  data-parsley-validate class="form-horizontal form-label-left">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">CAMBIO DE PASSWORD: <strong class="red" id="TITULO" name="TITULO"> </strong></h4> 
        </div>
        <div class="modal-body">
          <div class="row">
          
          <p>Por favor complete la informacion del formulario.</p>
          <br/>
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" > 
              Password actual
            </label>
            <div class="col-md-6 col-sm-6 col-xs-10">
              <input type="password" id="password_ant" name="password_ant" required="required" class="form-control col-md-7 col-xs-12" style="background: #eeebfc;"  autocomplete="off">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" > 
              Nuevo Password
            </label>
            <div class="col-md-6 col-sm-6 col-xs-10">
              <input type="password" id="password_nuevo" name="password_nuevo" required="required" class="form-control col-md-7 col-xs-12" style="background: #eeebfc;"  autocomplete="off">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" > 
              Confirme Password
            </label>
            <div class="col-md-6 col-sm-6 col-xs-10">
              <input type="password" id="password_nuevo2" name="password_nuevo2" required="required" class="form-control col-md-7 col-xs-12" style="background: #eeebfc;"  autocomplete="off">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 ">
              <i class="fa fa-check fa-2x bien" style="color:green;" title="Las contraseñas coinsiden"></i>
              <i class="fa fa-close fa-2x mal" style="color:red;" title="Las contraseñas NO coinsiden"></i>
            </div>
          </div>
     
          <small class="mal"> Debe confirmar el pasword</small>
        </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      <button type="button" class="btn btn-primary guardar"  data-toggle="tooltip" data-placement="bottom">Aceptar</button>
        {{-- <input type="submit" class="btn btn-primary guardar" value="Aceptar !"> --}}
{{-- <a href="#" class="btn btn-primary guardar" data-togglAceptare="tooltip" data-placement="bottom">  Aceptar ! </a> --}}
      </div>

      </form>
      {{-- {!! Form::close()!!} --}}


<div class="modal fade modal_generico2 " id="modal_generico2" role="dialog" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content contenido_generico2">
                      </div>
                    </div>
                  </div>


<script type="text/javascript">


var btn = $(".guardar");
  btn.on("click",function(){
    frm($(this));
  });

  var c_modal=$(".modal_generico2");
  var c_modalContent = $(".contenido_generico2");

  var frm = function(objeto){
    var formData = {
            'password_ant'              : $('input[name=password_ant]').val(),
            'password_nuevo'             : $('input[name=password_nuevo]').val()
        };

    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('change_pswd')}}",
      data        : formData,
      success: function(dataResult)
      {
        console.log(dataResult);
        c_modalContent.empty().html(dataResult);                        
        c_modal.modal('show');
        NProgress.done();
      }
    });
  };



  $('.bien').hide();
  $('.mal').hide();
  $(".guardar").attr("disabled", true);

  $("#password_nuevo").keyup(function(){
     valida(); 
  });

  $("#password_nuevo2").keyup(function(){
     valida(); 
  });

function valida() {
  var pss=document.getElementById("password_nuevo").value ;
  var pss2=document.getElementById("password_nuevo2").value ;
  if(pss==pss2){
    $('.bien').show();
    $('.mal').hide();
    $(".guardar").attr("disabled", false);
  }
  else{
    $('.bien').hide();
    $('.mal').show();
    $(".guardar").attr("disabled", true);
  }

}

</script>

         