@extends('layouts.main')

@section('content')

  <div class="right_col" role="main">
    
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Reporte de Stock</h3>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Reporte</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div>
                <table id="vendedores" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th rowspan="2">MODELO/MASTER:</th>
                      <th colspan="3" style="text-align: center">STOCK</th>
                      <th colspan="3" style="text-align: center">DISPONIBLES</th>
                      <th colspan="3" style="text-align: center">INMOVILIZADOS</th>
                      <th colspan="3" style="text-align: center">SC ESPECIAL</th>
                      <th colspan="3" style="text-align: center">RESERVADOS</th>
                    </tr>
                    <tr>
                      <td style="width: 1%">Bolivia</td>
                      <td style="width: 1%">Prod /Tran</td>
                      <td style="width: 1%">Total</td>
                      <td style="width: 1%">Bolivia</td>
                      <td style="width: 1%">Prod /Tran</td>
                      <td style="width: 1%">Total</td>
                      <td style="width: 1%">Bolivia</td>
                      <td style="width: 1%">Prod /Tran</td>
                      <td style="width: 1%">Total</td>
                      <td style="width: 1%">Bolivia</td>
                      <td style="width: 1%">Prod /Tran</td>
                      <td style="width: 1%">Total</td>
                      <td style="width: 1%">Bolivia</td>
                      <td style="width: 1%">Prod /Tran</td>
                      <td style="width: 1%">Total</td>
                    </tr>
                  </thead>
                  <tbody>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        
  </div>       


@endsection

@section('scripts')
  <script type="text/javascript">
    
  </script>
@endsection