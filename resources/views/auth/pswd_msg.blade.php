

        
        <div class="modal-body" align="center">
            @if($resp == 'si')
            
              <div class="alert alert-success alert-dismissible fade in" role="alert">
                <strong>Cambio correcto!</strong> Por favor reingrese al sistema con su nuevo password.
              </div>
              
            @else
              <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <strong>Oops! </strong> Al parecer su password actual no es el correcto.
              </div>
            @endif
        </div>
      <div class="modal-footer" align="center">
            @if($resp == 'si')
                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();" class="btn btn-success">
                                     Aceptar </a>
                              
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
            @else
              <button type="button" class="btn btn-primary" data-dismiss="modal" align="center">Aceptar</button>
            @endif
      

      </div>
   
<script type="text/javascript">
  
</script>

         