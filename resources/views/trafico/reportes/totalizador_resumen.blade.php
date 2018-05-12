
<section class="panel">
  <div class="panel-body">
    <h4 class="green"><i class="fa fa-paint-brush"></i> Totalizador nacional</h4>
    <div class="project_detail">
      {{-- <p class="title">Resumen para: </p>
      <p>{{$regional}}</p> --}}
      <p class="title">Periodo: </p>
      <p>{{$desc_mes}}</p>
    </div>
  </div>
</section>
  <div class="panel">
    <table class="table table-striped tabla_g">
      <thead>
        <tr>
          <th>MODELO</th>
          <th style="text-align: right;">TOTAL</th>
          <th class="animated infinite pulse" style="text-align: right;"><a href="javascript:;" onclick="fn_regional('SANTA CRUZ');">SC</a></th>
          <th class="animated infinite pulse" style="text-align: right;"><a href="javascript:;" onclick="fn_regional('LA PAZ');">LP</a></th>
          <th class="animated infinite pulse" style="text-align: right;"><a href="javascript:;" onclick="fn_regional('COCHABAMBA');">CB</BA</th>
          <th class="animated infinite pulse" style="text-align: right;"><a href="javascript:;" onclick="fn_regional('ORURO');">OR</a></th>
          <th class="animated infinite pulse" style="text-align: right;"><a href="javascript:;" onclick="fn_regional('POTOSI');">PT</a></th>
        </tr>
      </thead>
      <tbody>
      @foreach($totalizador as $det)
        <tr>
          <td><strong>{{$det->modelo}}</strong></td>
          <td align="right" style="background-color: #e6e6e6;"><strong>{{$det->total}}</strong></td>
          <td align="right">{{$det->SC}}</td>
          <td align="right">{{$det->LP}}</td>
          <td align="right">{{$det->CBBA}}</td>
          <td align="right">{{$det->ORU}}</td>
          <td align="right">{{$det->PT}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>

<script type="text/javascript"></script>
