
<section class="panel">
  <div class="panel-body">
    <h4 class="green"><i class="fa fa-paint-brush"></i> Totalizador por regional</h4>
    <div class="project_detail">
      <p class="title">Resumen para la regional: </p>
      <p>{{$regional}}</p>
      <p class="title">Periodo: </p>
      <p>{{$desc_mes}}</p>
    </div>
  </div>

<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
@foreach($sucursales as $det)
  <div class="panel">
    <a class="panel-heading" role="tab" id="headingOne_{{$det->num}}" data-toggle="collapse" data-parent="#accordion" href="#collapseOne_{{$det->num}}" aria-expanded="false" aria-controls="collapseOne">
      <h4 class="panel-title">{{$det->sucursal}}</h4>
    </a>
    <div id="collapseOne_{{$det->num}}" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne_{{$det->num}}">
      <div class="panel-body">
        <table class="table table-bordered tabla_n">
          <thead>
            <tr>
              <th>Modelo</th>
              <th>Cantidad</th>
            </tr>
          </thead>
          <tbody>
            @foreach($totalizador_suc as $det2)
                @if($det->sucursal == $det2->sucursal)
                	<tr>
                      <td><a href="javascript:;" onclick="fn_modal_datos('{{$det2->id_sucursal}}','{{$det2->id_modelo}}');">{{$det2->modelo}}</a></td>
                      <td>{{$det2->total}}</td>
                	</tr>
                @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
 @endforeach
</div>
<div class="modal fade modal_detalle" id="modal_detalle" role="dialog" >
              <div class="modal-dialog modal-lg">
                <div class="modal-content contenido_modal">
                </div>
              </div>
            </div>
</section>

<script type="text/javascript">

$('.tabla_n').DataTable( { 
        "dom": "Bt",
        "buttons": [ 'copy', 'excel'],
         "lengthMenu": [[-1], ["TODO"]]
    } );

var desc_modelo = null;
var desc_sucursal = null;

var modalVer=$(".modal_detalle");
var modalContentVer = $(".contenido_modal");

function fn_modal_datos (sucursal,modelo){
  desc_modelo =modelo;
  desc_sucursal = sucursal;
  // console.log(desc_modelo);
  // console.log(desc_sucursal);

  // fn_modal_detalle(desc_mes,desc_fecha,desc_modelo,desc_sucursal);
  fn_modal_detalle(desc_mes,desc_fecha,desc_sucursal,desc_modelo);
};


function fn_modal_detalle (mes,fecha,suc,modelo){
  $.ajax({
    type: "GET",
    cache: false,
    dataType: "html",
    url: "{{ route('trafico.detalle_modelo_sucursal')}}",
    data: {
      mes: mes,
      fecha: fecha,
      sucursal: suc,
      modelo:modelo
    },
    success: function(dataResult)
    {

      modalContentVer.empty().html(dataResult);                        
      modalVer.modal('show');
    }
  });
};



</script>