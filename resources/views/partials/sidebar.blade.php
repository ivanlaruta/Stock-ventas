        <div class="col-md-3 left_col   ">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <a class="site_title" href="#">
                &nbsp<i class=" fa fa-gears fa-spin "></i>
                <span> TOYOSA </span>
            </a>                            
        </div>

            <div class="clearfix"></div>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                 {{--  <li><a  href="{{ route('ventas.index')}}"><i class="fa fa-bar-chart"></i> Ventas</a>                    
                  </li> --}}
                  
                  {{-- <li><a  href="{{ route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"><i class="glyphicon glyphicon-fire"></i> Cotizaciones</a></li>  --}}
    @if(Auth::user()->rol<>'100' && Auth::user()->rol<>'101')
                  {{-- <li><a  href="{{ route('resumen.index')}}"><i class="fa fa-bar-chart"></i>   Inicio</a></li> --}}

                  
                  {{-- <li><a  href="{{ route('ventas.index')}}"> <i class="fa fa-line-chart"></i> Ventas </a></li> --}}

                 {{--  <li><a><i class="fa fa-line-chart"></i> Ventas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('ventas.index')}}">Reporte</a></li>
                    </ul>
                  </li> --}}

                  {{--  <li><a  href="{{ route('alerta_vehiculos.index')}}"><i class="fa fa-anchor"></i> Vehiculos estacionados</a>                    
                  </li>  --}}

                {{--   <li><a><i class="fa fa-home"></i> Principal <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                      <li><a href="#">Productos</a></li>
                    </ul>
                  </li>
                  --}}
 
                  <li><a><i class="fa fa-puzzle-piece"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a  href="{{ route('cotizaciones.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> Cotizaciones</a></li> 
                                            
                      <li><a  href="{{ route('reservados.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> Reservas</a></li> 

                      <li><a  href="{{ route('contratos.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> Contratos</a></li> 
                      
                      <li><a  href="{{ route('facturados.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> Facturas</a></li> 
                      
                      <li><a  href="{{ route('notas.dashboard',['v_aux'=>'0','f_ini'=>'0','f_fin'=>'0','title'=>'index','mes'=>'0','regional'=>'0','marca'=>'0','sucursal'=>'0','modelo'=>'0'])}}"> Notas de entrega</a></li> 
                      
                       {{-- <li><a href="{{ route('metas.index',['periodo'=>'0','marca'=>'0','regional'=>'0','sucursal'=>'0'])}}">Metas</a></li> --}}

                       <li><a  href="{{ route('seguimiento.index')}}"> Seguimineto de unidades</a></li>
                    </ul>
                  </li>

                 {{--  <li><a><i class="fa fa-dashboard"></i> Indicadores <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                  
                    </ul>
                  </li> --}}
            
                  <li><a><i class="fa fa-car"></i> Stock <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="{{ route('vehiculos.stock',['vista'=>'ver_dist','ciudad'=>'DISTRIBUIDOR','pais'=>'TODOS'])}}"> Stock regionales</a></li>
                      <li><a href="{{ route('vehiculos.index')}}">Unidades</a></li>
                      <li><a  href="{{ route('alerta_vehiculos.index')}}"> Vehiculos estacionados</a>  </li> 
                    </ul>
                  </li>

                  <li><a><i class="fa fa-wrench"></i> Vehiculos Usados <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('usados.index')}}">Unidades</a></li>
                      <li><a href="{{ route('usados.admin')}}">Administracion</a></li>
                    </ul>
                  </li>

                  @if(Auth::user()->rol=='1' || Auth::user()->rol=='2' || Auth::user()->rol=='3')
                  <li><a><i class="fa fa-table"></i> Solicitudes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      {{-- <li><a href="{{ route('solicitudes.index_espera')}}">En espera de aprobacion</a></li>
                      <li><a href="{{ route('solicitudes.index_aprobados')}}">Aprobados</a></li> --}}
                      {{-- <li><a href="{{ route('principal.index')}}">Reporte</a></li> --}}
                      <li><a href="{{ route('solicitudes.index')}}">Lista de solicitudes</a></li>
                      <li><a href="{{ route('solicitudes.create')}}">Crear solicitud</a></li>
                    </ul>
                  </li>
                  @endif

                  @if(Auth::user()->rol=='1' || Auth::user()->rol=='5' || Auth::user()->rol=='4')
                  <li><a><i class="fa fa-truck"></i> Envios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="{{ route('envios.index')}}">Estado Envio de solciitudes </a></li>
                      <li><a href="{{ route('envios.envios_lista',$id=0)}}">Lista de envios </a></li>
                    
                    </ul>
                  </li>
                  @endif
                  
                  <li><a><i class="fa fa-exclamation-triangle"></i> Alertas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                            <li><a href="#">Reposicion Regular</a></li>
                            <li><a href="#">Reposicion Extraordinaria</a></li>
                    </ul>
                  </li>
              
                  <li><a><i class="fa fa-cogs"></i> Administracion <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('administracion.index_sucursales')}}">Sucursales</a></li>
                      <li><a href="{{ route('administracion.index_users')}}">Usuarios</a></li>
                      <li><a href="{{ route('administracion.index_parametrica')}}">Parametrizacion</a></li>
                    
                      {{-- <li><a href="{{ route('stocks.index')}}">Asignacion de Stock a regionales</a></li> --}}
                    </ul>
                  </li>
             
          @endif
                  <li><a><i class="fa fa-users"></i> Trafico de clientes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      {{-- <li><a href="{{ route('trafico.formulario')}}">Formulario</a></li> --}}
                      <li><a href="{{ route('trafico.formulario2')}}">Nuevo Tráfico</a></li>
                       <li><a href="{{ route('trafico.lista_visitas')}}">Detalle de Tráfico semanal</a></li>
                       @if(Auth::user()->rol=='101' || Auth::user()->rol=='1')
                       {{-- <li><a href="{{ route('trafico.reporte')}}">Reportes</a></li> --}}
                       <li><a href="{{ route('trafico.todo_trafico')}}">Detalle de Tráfico mensual</a></li>
                       <li><a href="{{ route('trafico.reporte2')}}">Reporte consolidado</a></li>
                       <li><a href="{{ route('trafico.clientes')}}">Lista de Clientes</a></li>
                       <li><a href="{{ route('trafico.vendedores')}}">Lista de Vendedores</a></li>
                       @endif
                       @if(Auth::user()->rol=='1')
                       <li><a href="{{ route('trafico.admin_index')}}">Administracion</a></li>
                       @endif
                       
                    </ul>
                  </li>

                  {{-- <li><a><i class="fa fa-cogs"></i> test <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('test')}}">Conexion ODOO</a></li>
                    </ul>
                  </li> --}}
                  {{-- <li><a><i class="fa fa-bar-chart-o"></i> Solicitudes Pendientes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Lista de solicitudes</a></li>
                    </ul>
                  </li> --}}
                  
                </ul>
              </div>
            </div>
           </div>
        </div>

