@extends('layouts.main')

@section('content')



<div class="right_col" role="main">
  <div class="">
    
    <div class="row">
            <div class="page-title">
              <div class="title_left">
                <h3>ADMINISTRACION</h3>
              </div>
            </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="col-xs-2" style="padding-right: 0px;">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs tabs-left">
                        <li class="active"><a href="#encuesta" data-toggle="tab">Encuestas</a></li>
                        <li><a href="#motivos_encuesta" data-toggle="tab">Motivos-Encuesta</a></li>
                        <li><a href="#sucursales_encuesta" data-toggle="tab">Sucursales-Encuesta</a></li>
                        <li><a href="#motivos" data-toggle="tab">Motivos</a></li>
                        <li><a href="#categorias" data-toggle="tab">Categorias</a></li>
                        <li><a href="#modelos" data-toggle="tab">Modelos</a></li>
                        <li><a href="#motivos_categoria" data-toggle="tab">Categoria por motivo</a></li>
                        <li><a href="#parametricas" data-toggle="tab">Parametrica</a></li>
                      </ul>
                    </div>

                    <div class="col-xs-10" style="background: white;">
                      <div class="tab-content">
                        <div class="tab-pane active" id="encuesta">
                          <div class="row">
                            <div class="col-md-10">
                              <p class="lead">Lista de encuestas .</p>
                            </div>
                            <div class="col-md-2 pull-right">
                              <a  href="#" class="btn btn-success btn-sm btn_nuevo" data-toggle="tooltip" data-placement="bottom" title="Agregar nueva encuesta" ><i class="fa fa-plus"></i> Nuevo</a>
                            </div>
                          </div>
                          <div class="table-responsive">
                            <table id="datatable_encuestas" class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>DESCRIPCION</th>
                                  <th>OBSERVACIONES</th>
                                  <th style="text-align: right;">Operaciones</th>
                                </tr>
                              </thead>
                              <tbody>
                               @foreach($encuestas as $det)
                                <tr>
                                   <td>{{$det->id}}</td>
                                   <td>{{$det->descripcion}}</td>
                                   <td>{{$det->observaciones}}</td> 
                                   <td align="right">
                                   <div class="btn-group" role="group" >
                                      <a href="#" class="ver_encuesta" data-toggle="tooltip" data-placement="bottom" title="Ver" id_encuesta='{{$det->id}}'>
                                        <span class="fa fa-eye fa-lg"></span> 
                                      </a>
                                     {{--  <a href="#" class=" green" data-toggle="tooltip" data-placement="bottom" title="Editar">
                                        <span class="fa fa-edit fa-lg"></span> 
                                      </a> --}}
                                      <a href="{{ route('trafico.delete_encuesta').'?id_encuesta='.$det->id}}" class="red" data-toggle="tooltip" data-placement="bottom" title="Eliminar" onclick ="return confirm('Al eliminar esta encuesta tambien se eliminaran la relacion con motivos y sucursales. ¿Desea continuar?')">
                                        <span class="fa fa-trash fa-lg"></span> 
                                      </a>
                                    </div>
                                  </td>        
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <div class="modal fade modal_add_encuestas" id="Modal_nuevo" role="dialog" >
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content contenido_add_encuestas">
                              </div>
                            </div>
                          </div>
                          <div class="modal fade modal_ver_encuestas" id="Modal_ver" role="dialog" >
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content contenido_ver_encuestas">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="motivos_encuesta">
                        <div class="row">
                          <div class="col-md-10">
                            <p class="lead">Asignacion de motivos a encuestas.</p>
                          </div>
                          <div class="col-md-2 pull-right">
                                <a  href="#" class="btn btn-success btn-sm btn_nuevo_add_motivo_encuesta" data-toggle="tooltip" data-placement="bottom" title="Agregar nueva asignacion" ><i class="fa fa-plus"></i> Nuevo</a>
                          </div>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable_motivos" class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                 {{--  <th>ID</th> --}}
                                  <th>ENCUESTA</th>
                                  <th>MOTIVO</th>
                                  {{-- <th>DESCRIPCION</th> --}}
                                  <th style="text-align: right;">Operaciones</th>
                                </tr>
                              </thead>
                              <tbody>
                               @foreach($motivos_encuesta as $det)
                                <tr>
                                   {{-- <td>{{$det->id}}</td> --}}
                                   <td>{{$det->id_encuesta}} - {{$det->encuesta->descripcion}}</td>
                                   <td>{{$det->id_motivo}} - {{$det->motivo->descripcion}}</td>
                                   {{-- <td>{{$det->descripcion}}</td> --}}
                                   <td align="right">
                                   <div class="btn-group" role="group" >
                                      <a href="#" {{-- class="btn btn-info btn-xs" --}} data-toggle="tooltip" data-placement="bottom" title="Ver">
                                        <span class="fa fa-eye fa-lg"></span> 
                                      </a>
                                      <a href="#" class="{{-- btn btn-warning btn-xs --}} green" data-toggle="tooltip" data-placement="bottom" title="Editar">
                                        <span class="fa fa-edit fa-lg"></span> 
                                      </a>
                                      <a href="#" class="{{-- btn btn-danger btn-xs --}} red" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
                                        <span class="fa fa-trash fa-lg"></span> 
                                      </a>
                                    </div>
                                  </td>        
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <div class="modal fade modal_add_motivo_encuesta" id="Modal_nuevo" role="dialog" >
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content contenido_add_motivo_encuesta">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane" id="sucursales_encuesta">
                        <div class="row">
                          <div class="col-md-10">
                            <p class="lead">Asignacion de sucursales a encuestas.</p>
                          </div>
                          <div class="col-md-2 pull-right">
                            <a  href="#" class="btn btn-success btn-sm btn_nuevo_add_suc_encuesta" data-toggle="tooltip" data-placement="bottom" title="Agregar nueva asignacion" ><i class="fa fa-plus"></i> Nuevo</a>
                          </div>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable_motivos" class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  {{-- <th>ID</th> --}}
                                  <th>ENCUESTA</th>
                                  <th>SUCURSAL</th>
                                  <th style="text-align: right;">Operaciones</th>
                                </tr>
                              </thead>
                              <tbody>
                               @foreach($sucursales_encuesta as $det)
                                <tr>
                                   {{-- <td>{{$det->id}}</td> --}}
                                   <td>{{$det->id_encuesta}} - {{$det->encuesta->descripcion}}</td>
                                   <td>{{$det->id_sucursal}} - {{$det->sucursal->nom_sucursal}}</td>
                                   <td align="right">
                                   <div class="btn-group" role="group" >
                                      <a href="#" {{-- class="btn btn-info btn-xs" --}} data-toggle="tooltip" data-placement="bottom" title="Ver">
                                        <span class="fa fa-eye fa-lg"></span> 
                                      </a>
                                      <a href="#" class="{{-- btn btn-warning btn-xs --}} green" data-toggle="tooltip" data-placement="bottom" title="Editar">
                                        <span class="fa fa-edit fa-lg"></span> 
                                      </a>
                                      <a href="#" class="{{-- btn btn-danger btn-xs --}} red" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
                                        <span class="fa fa-trash fa-lg"></span> 
                                      </a>
                                    </div>
                                  </td>        
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <div class="modal fade modal_add_sucursal_encuesta" id="Modal_nuevo" role="dialog" >
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content contenido_add_sucursal_encuesta">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane" id="motivos">
                        <div class="row">
                          <div class="col-md-10">
                            <p class="lead">Lista de motivos .</p>
                          </div>
                          <div class="col-md-2 pull-right">
                                <a  href="#" class="btn btn-success btn-sm btn_nuevo" data-toggle="tooltip" data-placement="bottom" title="Agregar nuevo motivo" ><i class="fa fa-plus"></i> Nuevo</a>
                          </div>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable_motivos" class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>DESCRIPCION</th>
                                  <th style="text-align: right;">Operaciones</th>
                                </tr>
                              </thead>
                              <tbody>
                               @foreach($motivos as $det)
                                <tr>
                                   <td>{{$det->id}}</td>
                                   <td>{{$det->descripcion}}</td>
                                   <td align="right">
                                   <div class="btn-group" role="group" >
                                      <a href="#" {{-- class="btn btn-info btn-xs" --}} data-toggle="tooltip" data-placement="bottom" title="Ver">
                                        <span class="fa fa-eye fa-lg"></span> 
                                      </a>
                                      <a href="#" class="{{-- btn btn-warning btn-xs --}} green" data-toggle="tooltip" data-placement="bottom" title="Editar">
                                        <span class="fa fa-edit fa-lg"></span> 
                                      </a>
                                      <a href="#" class="{{-- btn btn-danger btn-xs --}} red" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
                                        <span class="fa fa-trash fa-lg"></span> 
                                      </a>
                                    </div>
                                  </td>        
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <div class="modal fade mi_modal" id="Modal_nuevo" role="dialog" >
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content contenido">
                              </div>
                            </div>
                          </div>
                        </div>


                        <div class="tab-pane" id="categorias">
                        <div class="row">
                          <div class="col-md-10">
                            <p class="lead">Lista de categorias .</p>
                          </div>
                          <div class="col-md-2 pull-right">
                                <a  href="#" class="btn btn-success btn-sm btn_nuevo" data-toggle="tooltip" data-placement="bottom" title="Agregar nueva categoria" ><i class="fa fa-plus"></i> Nuevo</a>
                          </div>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable_categorias" class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>DESCRIPCION</th>
                                  <th style="text-align: right;">Operaciones</th>
                                </tr>
                              </thead>
                              <tbody>
                               @foreach($categorias as $det)
                                <tr>
                                   <td>{{$det->id}}</td>
                                   <td>{{$det->descripcion}}</td>
                                   <td align="right">
                                   <div class="btn-group" role="group" >
                                      <a href="#" {{-- class="btn btn-info btn-xs" --}} data-toggle="tooltip" data-placement="bottom" title="Ver">
                                        <span class="fa fa-eye fa-lg"></span> 
                                      </a>
                                      <a href="#" class="{{-- btn btn-warning btn-xs --}} green" data-toggle="tooltip" data-placement="bottom" title="Editar">
                                        <span class="fa fa-edit fa-lg"></span> 
                                      </a>
                                      <a href="#" class="{{-- btn btn-danger btn-xs --}} red" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
                                        <span class="fa fa-trash fa-lg"></span> 
                                      </a>
                                    </div>
                                  </td>        
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <div class="modal fade mi_modal" id="Modal_nuevo" role="dialog" >
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content contenido">
                              </div>
                            </div>
                          </div>
                        </div>


                        <div class="tab-pane" id="modelos">
                        <div class="row">
                          <div class="col-md-10">
                            <p class="lead">Lista de modelos .</p>
                          </div>
                          <div class="col-md-2 pull-right">
                                <a  href="#" class="btn btn-success btn-sm btn_nuevo" data-toggle="tooltip" data-placement="bottom" title="Agregar nueva categoria" ><i class="fa fa-plus"></i> Nuevo</a>
                          </div>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable_modelos" class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  {{-- <th>ID</th> --}}
                                  <th>DESCRIPCION MODELO</th>
                                  <th>CATEGORIA</th>
                                  <th style="text-align: right;">Operaciones</th>
                                </tr>
                              </thead>
                              <tbody>
                               @foreach($modelos as $mod)
                                <tr>
                                   {{-- <td>{{$mod->id}}</td> --}}
                                   <td>{{$mod->descripcion}}</td>
                                   <td>{{$mod->categoria->descripcion}}  </td>
                                   <td align="right">
                                   <div class="btn-group" role="group" >
                                      <a href="#" {{-- class="btn btn-info btn-xs" --}} data-toggle="tooltip" data-placement="bottom" title="Ver">
                                        <span class="fa fa-eye fa-lg"></span> 
                                      </a>
                                      <a href="#" class="{{-- btn btn-warning btn-xs --}} green" data-toggle="tooltip" data-placement="bottom" title="Editar">
                                        <span class="fa fa-edit fa-lg"></span> 
                                      </a>
                                      <a href="#" class="{{-- btn btn-danger btn-xs --}} red" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
                                        <span class="fa fa-trash fa-lg"></span> 
                                      </a>
                                    </div>
                                  </td>        
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <div class="modal fade mi_modal" id="Modal_nuevo" role="dialog" >
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content contenido">
                              </div>
                            </div>
                          </div>
                        </div>



                        <div class="tab-pane" id="motivos_categoria">
                        <div class="row">
                          <div class="col-md-10">
                            <p class="lead">Lista de asignacion de categorias a motivos .</p>
                          </div>
                          <div class="col-md-2 pull-right">
                                <a  href="#" class="btn btn-success btn-sm btn_nuevo" data-toggle="tooltip" data-placement="bottom" title="Agregar nueva categoria" ><i class="fa fa-plus"></i> Nuevo</a>
                          </div>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable_motivos_categoria" class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  {{-- <th>ID</th> --}}
                                  <th>MOTIVO</th>
                                  <th>CATEGORIA</th>
                                  <th>DESCRIPCION</th>
                                  <th style="text-align: right;">Operaciones</th>
                                </tr>
                              </thead>
                              <tbody>
                               @foreach($motivos_categoria as $det)
                                <tr>
                                   {{-- <td>{{$det->id}}</td> --}}
                                   <td>{{$det->categoria->descripcion}}</td>
                                   <td>{{$det->motivo->descripcion}} </td>
                                   <td>{{$det->descripcion}}</td>
                                   <td align="right">
                                   <div class="btn-group" role="group" >
                                      <a href="#" {{-- class="btn btn-info btn-xs" --}} data-toggle="tooltip" data-placement="bottom" title="Ver">
                                        <span class="fa fa-eye fa-lg"></span> 
                                      </a>
                                      <a href="#" class="{{-- btn btn-warning btn-xs --}} green" data-toggle="tooltip" data-placement="bottom" title="Editar">
                                        <span class="fa fa-edit fa-lg"></span> 
                                      </a>
                                      <a href="#" class="{{-- btn btn-danger btn-xs --}} red" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
                                        <span class="fa fa-trash fa-lg"></span> 
                                      </a>
                                    </div>
                                  </td>        
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <div class="modal fade mi_modal" id="Modal_nuevo" role="dialog" >
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content contenido">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="tab-pane" id="parametricas">
                        <div class="row">
                          <div class="col-md-10">
                            <p class="lead">Lista de parametricas .</p>
                          </div>
                          <div class="col-md-2 pull-right">
                                <a  href="#" class="btn btn-success btn-sm btn_nuevo" data-toggle="tooltip" data-placement="bottom" title="Agregar nueva categoria" ><i class="fa fa-plus"></i> Nuevo</a>
                          </div>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable_parametricas" class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr>
                                  {{-- <th>ID</th> --}}
                                  <th>TABLA</th>
                                  <th>CODIGO</th>
                                  <th>DESCRIPCION</th>
                                  <th style="text-align: right;">Operaciones</th>
                                </tr>
                              </thead>
                              <tbody>
                               @foreach($parametricas as $det)
                                <tr>
                                   {{-- <td>{{$det->id}}</td> --}}
                                   <td>{{$det->tabla}} </td>
                                   <td>{{$det->codigo}}</td>
                                   <td>{{$det->descripcion}}</td>
                                   <td align="right">
                                   <div class="btn-group" role="group" >
                                      <a href="#" {{-- class="btn btn-info btn-xs" --}} data-toggle="tooltip" data-placement="bottom" title="Ver">
                                        <span class="fa fa-eye fa-lg"></span> 
                                      </a>
                                      <a href="#" class="{{-- btn btn-warning btn-xs --}} green" data-toggle="tooltip" data-placement="bottom" title="Editar">
                                        <span class="fa fa-edit fa-lg"></span> 
                                      </a>
                                      <a href="#" class="{{-- btn btn-danger btn-xs --}} red" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
                                        <span class="fa fa-trash fa-lg"></span> 
                                      </a>
                                    </div>
                                  </td>        
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <div class="modal fade mi_modal" id="Modal_nuevo" role="dialog" >
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content contenido">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <div class="clearfix"></div>
                </div>
    </div>

  </div>
</div>

@endsection

@section('scripts')


<script type="text/javascript">
  
 $(document).ready(function() {

  var btn_nuevo = $(".btn_nuevo");
  btn_nuevo.on("click",function(){
    frm_nuevo($(this));
  });

  var modalContent = $(".contenido_add_encuestas");
  var modal=$(".modal_add_encuestas");

  var frm_nuevo = function(objeto){
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('trafico.modal_add_encuestas')}}",
     
      success: function(dataResult)
      {
        console.log(dataResult);
        modalContent.empty().html(dataResult);                        
        modal.modal('show');
        NProgress.done();
      },
      error: function(jqXHR, exception)
      {
        var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }
        alert(msg);
        NProgress.done();
      }
    });
  }


    var btn_nuevo_add_motivo_encuesta = $(".btn_nuevo_add_motivo_encuesta");
  btn_nuevo_add_motivo_encuesta.on("click",function(){
    frm_nuevo_add_motivo_encuesta($(this));
  });

  var modalContent_add_motivo_encuesta = $(".contenido_add_motivo_encuesta");
  var modal_add_motivo_encuesta=$(".modal_add_motivo_encuesta");

  var frm_nuevo_add_motivo_encuesta = function(objeto){
    $.ajax({
      type: "GET",
      cache: false,
      dataType: "html",
      url: "{{ route('trafico.modal_add_motivo_encuesta')}}",
     
      success: function(dataResult)
      {
        console.log(dataResult);
        modalContent_add_motivo_encuesta.empty().html(dataResult);                        
        modal_add_motivo_encuesta.modal('show');
        NProgress.done();
      },
      error: function(jqXHR, exception)
      {
        var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }
        alert(msg);
        NProgress.done();
      }
    });
  }


var btnVer = $(".ver_encuesta");
btnVer.on("click",function(){
  // alert($(this).attr('id'));
  frm_ver_encuesta($(this));
});

var modalVer=$(".modal_ver_encuestas");
var modalContentVer = $(".contenido_ver_encuestas");

var frm_ver_encuesta = function(objeto){ 
  $.ajax({
    type: "GET",
    cache: false,
    dataType: "html",
    url: "{{ route('trafico.ver_encuestas')}}",
    data: {
      id_encuesta: objeto.attr("id_encuesta")
    },
    success: function(dataResult)
    {
      console.log(dataResult);
      modalContentVer.empty().html(dataResult);                        
      modalVer.modal('show');

      NProgress.done();
    },
    error: function(jqXHR, exception)
    {
      var msg = '';
      if (jqXHR.status === 0) {
          msg = 'Not connect.\n Verify Network.';
      } else if (jqXHR.status == 404) {
          msg = 'Requested page not found. [404]';
      } else if (jqXHR.status == 500) {
          msg = 'Internal Server Error [500].';
      } else if (exception === 'parsererror') {
          msg = 'Requested JSON parse failed.';
      } else if (exception === 'timeout') {
          msg = 'Time out error.';
      } else if (exception === 'abort') {
          msg = 'Ajax request aborted.';
      } else {
          msg = 'Uncaught Error.\n' + jqXHR.responseText;
      }

      alert(msg);
      NProgress.done();
    }
  });
}







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
} );

</script>
@endsection