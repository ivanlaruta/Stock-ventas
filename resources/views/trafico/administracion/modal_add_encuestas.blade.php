

    {!! Form::open(array('route' => ['trafico.add_encuestas'], 'method' => 'get' , 'id'=>'loginForm', 'class'=>'form-horizontal form-label-left')) !!}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">NUEVO MODELO DE ENCUESTA : <strong class="red" id="TITULO" name="TITULO"> </strong></h4> 
        </div>
        <div class="modal-body">
             
          {{-- <p>Profavor complete la informacion de los formularios.</p> --}}
          
          <div id="wizard" class="form_wizard wizard_horizontal">
            <ul class="wizard_steps">
              <li>
                <a href="#" class="paso1 disabled">
                  <span class="step_no">1</span>
                  <span class="step_descr">Paso 1<br />
                      <small>Datos generales</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#" class="paso2 disabled">
                  <span class="step_no">2</span>
                  <span class="step_descr">Paso 2<br />
                      <small>Motivos habilitados</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#" class="paso3 disabled">
                  <span class="step_no">3</span>
                  <span class="step_descr">Paso 3<br />
                      <small>Sucursales habilitadas</small>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        <hr>
          <div class="form-group generales">
          <p>Ingrese una descripcion o nombre de encuesta y observaciones.</p>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">NOMBRE O DESCRIPCION *
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="DESCRIPCION" name="DESCRIPCION" required="required" class="form-control col-md-7 col-xs-12 DESCRIPCION" placeholder="Ingrese el nombre de la encuesta" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4 col-sm-4 col-xs-12">OBSERVACIONES 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="OBSERVACIONES" name="OBSERVACIONES" class="form-control col-md-7 col-xs-12 OBSERVACIONES" placeholder="Ingrese observaciones (OPCIONAL)" >
              </div>
            </div>
          </div>

          <div class="form-group motivos">
            <div class="form-group">
              <p>Por favor selecciones los motivos habilitados para esta encuesta.</p>
              <div class="col-md-8 col-lg-offset-2">
                <table class="table table-striped jambo_table bulk_action datatable1" id="datatable1" >
                  <thead>
                    <tr>
                     <th>ID</th>
                     <th>Motivos</th>
                     <th style="text-align: right;">Seleccionar</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($motivos as $mo)
                    <tr>
                      <td> {{$mo->id}}</td>
                      <td> {{$mo->descripcion}}</td>
                      <td align="right"><input type="checkbox" class="js-switch" value="{{$mo->id}}" name="motivos_lista[]">  </td>
                    </tr>
                   @endforeach
                   </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="form-group sucursales">
            <div class="form-group">
              <p>Por favor selecciones las sucursales asociadas a la encuestas.</p>
              <div class="col-md-12">
                <table class="table table-striped jambo_table bulk_action datatable2" id="datatable2">
                  <thead>
                    <tr>
                     <th>ID</th>
                     <th>Sucursal</th>
                     <th style="text-align: right;">Seleccionar</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($sucursales as $det)
                      <tr>
                        <td> {{$det->id}}</td>
                        <td> {{$det->nom_sucursal}}</td>
                        <td align="right"><input type="checkbox" class="js-switch" value="{{$det->id}}" name="sucursales_lista[]"> </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>       
              </div>
            </div>
          </div>


      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success guardar show_all_records" id="show_all_records" value="Guardar">
        {{-- <button type="button" class="btn btn-success " >Guardar  <i class="fa fa-save"></i></button> --}}
        <button type="button" class="btn btn-primary anterior" ><i class="fa fa-arrow-circle-left"></i>  Anterior</button>
        <button type="button" class="btn btn-primary siguiente" >siguiente  <i class="fa fa-arrow-circle-right"></i></button>
      </div>
      {!! Form::close()!!}

<script type="text/javascript">

  var esp = {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
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
          };

$(".DESCRIPCION").keyup(function(){
      var tit=document.getElementById("DESCRIPCION").value ;
      document.getElementById('TITULO').innerHTML = tit;
  });

$('#datatable1').DataTable( { "language": esp ,"dom": "ti", "lengthMenu": [[-1,10, 25, 50, 100,], ["TODO",10, 25, 50, 100]],} );
// $('#datatable2').DataTable( { "language": esp , "lengthMenu": [[8,15, 25, 50, 100, -1], [8,15, 25, 50, 100, "TODO"]]} );


var oTable; //global variable to hold reference to dataTables
var oSettings; //global variable to hold reference to dataTables settings

    oTable=$('#datatable2').DataTable( {
        "language": esp ,
        "lengthMenu": [[8,15, 25, 50, 100, -1], [8,15, 25, 50, 100, "TODO"]],
        // "retrieve": true
    }); //store reference of your table in oTable
    oSettings = oTable.settings(); //store its settings in oSettings

$("#show_all_records").on('click',function(){
  
   paso(3);
   $('.bs-filters').val('');
   $('.input-sm').val('');
   $('input[type=search]').val('');


   oSettings[0]._iDisplayLength = oSettings[0].fnRecordsTotal();
   //set display length of dataTables settings to the total records available
   
   oTable.search(' ').draw();  //draw the table

});


$(".paso1").on("click", function() {paso(1); step = 1;});
$(".paso2").on("click", function() {paso(2); step = 2;});
$(".paso3").on("click", function() {paso(3); step = 3;});
$(".guardar").attr("disabled","disabled");

paso(1);
var step = 1;

$(".siguiente").on("click", function() {
    if(step == 1){
      paso(2);
      step =2;
    }
    else{
      if(step == 2){
      paso(3);
      step =3;
      }
    }
});

$(".anterior").on("click", function() {
    if(step == 2){
      paso(1);
      step =1;
    }
    else{
      if(step == 3){
        paso(2);
        step =2;
      }
    }
  });

function paso (step){
  if(step == 1){
      $(".generales").show();
      $(".motivos").hide();
      $(".sucursales").hide();

      $(".paso1").removeClass( "disabled" ).addClass( "done" );
      $(".paso2").removeClass( "done" ).addClass( "disabled" );
      $(".paso3").removeClass( "done" ).addClass( "disabled" );

      $(".siguiente").removeAttr('disabled');
      $(".anterior").attr("disabled","disabled");
    }
  if(step == 2){
      $(".generales").hide();
      $(".motivos").show();
      $(".sucursales").hide();

      $(".paso1").removeClass( "done" ).addClass( "disabled" );
      $(".paso2").removeClass( "disabled" ).addClass( "done" );
      $(".paso3").removeClass( "done" ).addClass( "disabled" );

      $(".siguiente").removeAttr('disabled');
      $(".anterior").removeAttr('disabled');
    }
  if(step == 3){
      $(".generales").hide();
      $(".motivos").hide();
      $(".sucursales").show();
      $(".paso1").removeClass( "done" ).addClass( "disabled" );
      $(".paso2").removeClass( "done" ).addClass( "disabled" );
      $(".paso3").removeClass( "disabled" ).addClass( "done" );

      $(".siguiente").attr("disabled","disabled");
      $(".anterior").removeAttr('disabled');
      $(".guardar").removeAttr('disabled');
    }
}

</script>

         