
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<div class="modal-body" style="padding: 25px;">

        <!-- title row -->
        <div class="row">
          <div class="col-md-5 col-xs-5  invoice-header">
            <h3>
                 FACTURA {{$cabecera->FACTURA}}<br>
            </h3>
            <b>Autorizacion: </b>{{$cabecera->AUTORIZACION}}
            <br>
            <b>Fecha: </b>{{$cabecera->FECHA}}
            <br>
            <b>Ubicacion:</b> {{$cabecera->LUGAR}}
          </div>
          <div class="col-md-7 col-xs-7">
            <img class="pull-right" src="{{URL::asset('images/toyo-logo.png')}}" style="width:60%">
            
          </div>

          <!-- /.col -->
        </div>
        <br>
        
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            De:
            <address>
              <strong>TOYOSA S.A.</strong>
              <br>NIT: 1030029024
              <br>Plaza Venezuela,1413
              <br>La Paz, Bolivia
              <br>Telefono: 2390930-35
              
            </address>
            
          </div>
          
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
                        Cliente:
            <address>
                <strong>{{$cabecera->RAZON}}</strong>
                <br>Nit: {{$cabecera->NIT}}
                <br>{{$cabecera->DIRECCION}}
                <br>Telefono: {{$cabecera->TELEFONO}}
                {{-- <br>Email:Pedro.pp@toyosa.con LP --}}
            </address>
            
          </div>
          <div class="col-sm-4 invoice-col">
           
            <b>OT: </b>{{$cabecera->OT}}
            <br><b>Marca: </b>{{$cabecera->MARCA}}
            <br><b>Modelo: </b>{{$cabecera->MODELO}}
            <br><b>Chasis: </b>{{$cabecera->CHASIS}}
            <br><b>Placa: </b>{{$cabecera->PLACA}}
            <br><b>Kilometraje: </b>{{$cabecera->KM}} Km
            <br><b>Servicio: </b>{{$cabecera->SERVICIO}} Km
            
          </div>
          <!-- /.col -->
        </div>
<hr>
        <div class="row">
          <div class="col-xs-12 table">
            <table class="table table-striped">
              <thead>
                <tr>
                  
                  <th>#</th>
                  <th>Codigo</th>
                  <th>Detalle</th>
                  <th>Cantidad</th>
                  <th>Precio</th>
                  <th>Importe</th>
                </tr>
              </thead>
              <tbody>
              @foreach($detalle as $det)
                <tr>
                  <td>1</td>
                  <td>{{$det->CODIGO}}</td>
                  <td>{{$det->DETALLE}}</td>
                  <td>{{$det->CANTIDAD}}</td>
                  <td>{{$det->PRECIO}}</td>
                  <td>{{$det->IMPORTE}}</td>
                </tr>
              @endforeach 

               {{--  <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  
                  <td align="right"><strong>Total bs</strong></td>
                  
                  <td><strong>680.00</strong></td>
                </tr> --}}
                
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


        <!-- this row will not appear when printing -->
     
    
  

<div class="modal-footer">
<button class="btn btn-primary " style="margin-right: 5px;"><i class="fa fa-print"></i> Imprimir</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
</div>

</div>
