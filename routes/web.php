<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/inicio', function () {
    return view('welcome');
})->name('inicio');


Route::get('/test', function () {
    return view('pruebas');
})->name('test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inicial', 'SesionController@index');

Route::group(['prefix'=>'distribuidor','middleware'=>'auth'],function(){

	// route::get('solicitudes/enviar_parcial',[
	// 	'uses' =>'SolicitudesController@enviar_parcial',
	// 	'as'   =>	'solicitudes.enviar_parcial'
	// ]);
	
	route::get('solicitudes/{id}/enviar',[
		'uses' =>'SolicitudesController@enviar',
		'as'   =>	'solicitudes.enviar'
	]);

	// route::get('solicitudes/{id}/envio_parcial',[
	// 	'uses' =>'SolicitudesController@envio_parcial',
	// 	'as'   =>	'solicitudes.envio_parcial'
	// ]);

	// route::get('solicitudes/modal_parcial',[
	// 	'uses' =>'SolicitudesController@modal_parcial',
	// 	'as'   =>	'solicitudes.modal_parcial'
	// ]);

	// route::get('solicitudes/index_aprobados',[
	// 	'uses' =>'SolicitudesController@index_aprobados',
	// 	'as'   =>	'solicitudes.index_aprobados'
	// ]);

	route::get('solicitudes/{id}/aprobar_directa',[
		'uses' =>'SolicitudesController@aprobar_directa',
		'as'   =>	'solicitudes.aprobar_directa'
	]);

	route::get('solicitudes/{id}/aprobar',[
		'uses' =>'SolicitudesController@aprobar',
		'as'   =>	'solicitudes.aprobar'
	]);

	route::get('solicitudes/{id}/renovar_chassis',[
		'uses' =>'SolicitudesController@renovar_chassis',
		'as'   =>	'solicitudes.renovar_chassis'
	]);

	route::get('solicitudes/index_espera',[
		'uses' =>'SolicitudesController@index_espera',
		'as'   =>	'solicitudes.index_espera'
	]);

	route::get('solicitudes/{id}/aprobacion',[
		'uses' =>'SolicitudesController@aprobacion',
		'as'   =>	'solicitudes.aprobacion'
	]);

	route::get('solicitudes/{id}/espera',[
		'uses' =>'SolicitudesController@espera',
		'as'   =>	'solicitudes.espera'
	]);

	route::get('solicitudes/{id}/addDetalle',[
		'uses' =>'SolicitudesController@addDetalle',
		'as'   =>	'solicitudes.addDetalle'
	]);	

	route::get('solicitudes/{id}/detalle',[
		'uses' =>'SolicitudesController@detalle',
		'as'   =>	'solicitudes.detalle'
	]);

	route::get('solicitudes/{id}/{id2}/quitar_detalle',[
		'uses' =>'SolicitudesController@quitar_detalle',
		'as'   =>	'solicitudes.quitar_detalle'
	]);

	route::get('solicitudes/{id2}/{id}quitar_chassis',[
		'uses' =>'SolicitudesController@quitar_chassis',
		'as'   =>	'solicitudes.quitar_chassis'
	]);

	route::get('solicitudes/{id}editar_detalle',[
		'uses' =>'SolicitudesController@editar_detalle',
		'as'   =>	'solicitudes.editar_detalle'
	]);
	route::get('solicitudes/{id}update_detalle',[
		'uses' =>'SolicitudesController@update_detalle',
		'as'   =>	'solicitudes.update_detalle'
	]);
	
	route::get('solicitudes/{id}/{id2}/detalle_all',[
		'uses' =>'SolicitudesController@detalle_all',
		'as'   =>	'solicitudes.detalle_all'
	]);

	route::resource('solicitudes','SolicitudesController');
	
	route::resource('principal','PrincipalController');
	route::resource('vehiculos','VehiculosController');


	route::get('{vista}/{ciudad}/{pais}/stock',[
		'uses' =>'VehiculosController@stock',
		'as'   =>	'vehiculos.stock'
	]);

	route::get('{id}/{id2}/{id4}/{pais}/modelos',[
		'uses' => 'VehiculosController@modelos', 
		'as'   => 'vehiculos.modelos'
	]);

	route::get('{id}/{id2}/{id3}/{id4}/{pais}/master',[
		'uses' => 'VehiculosController@master', 
		'as'   => 'vehiculos.master'
	]);

	route::get('{id}/{id1}/{id2}/{id3}/{id4}/{vista}/{pais}/det_vehiculos',[
		'uses' => 'VehiculosController@det_vehiculos', 
		'as'   => 'vehiculos.det_vehiculos'
	]);

	route::resource('stocks','AsignacionStocksController');

	route::get('envios/{id}/detalle',[
		'uses' =>'EnviosController@detalle',
		'as'   =>	'envios.detalle'
	]);

	route::get('envios/{id}/{id2}/detalle_all',[
		'uses' =>'EnviosController@detalle_all',
		'as'   =>	'envios.detalle_all'
	]);

	route::get('envios/{id}/enviar',[
		'uses' =>'EnviosController@enviar',
		'as'   =>	'envios.enviar'
	]);

	route::get('envios/{id}/envio_parcial',[
		'uses' =>'EnviosController@envio_parcial',
		'as'   =>	'envios.envio_parcial'
	]);

	
	// route::get('envios/{id}/{id2}/modal_parcial',[
	// 	'uses' =>'EnviosController@modal_parcial',
	// 	'as'   =>	'envios.modal_parcial'
	// ]);

	route::get('envios/modal_parcial',[
		'uses' =>'EnviosController@modal_parcial',
		'as'   =>	'envios.modal_parcial'
	]);

	route::get('envios/enviar_parcial',[
		'uses' =>'EnviosController@enviar_parcial',
		'as'   =>	'envios.enviar_parcial'
	]);

	route::get('envios/guardar_parcial',[
		'uses' =>'EnviosController@guardar_parcial',
		'as'   =>	'envios.guardar_parcial'
	]);
	route::get('envios/{id}/envios_lista',[
		'uses' =>'EnviosController@envios_lista',
		'as'   =>	'envios.envios_lista'
	]);
	route::get('envios/{id}/detalle_envio',[
		'uses' =>'EnviosController@detalle_envio',
		'as'   =>	'envios.detalle_envio'
	]);
	

	//============= PDF ==========================

	route::get('envios/{id}/getPDF',[
		'uses' =>'PDFController@getPDF',
		'as'   =>	'envios.getPDF'
	]);

	//============================================
	route::resource('envios','EnviosController');

});

Route::group(['prefix'=>'ventas','middleware'=>'auth'],function(){
	
	route::get('ventas/{reg}/{marca}/{modelo}/{vista}/{origen}/detalle_detalle_regional_marca_modelo',[
		'uses' =>'VentasController@detalle_detalle_regional_marca_modelo',
		'as'   =>	'ventas.detalle_detalle_regional_marca_modelo'
	]);

	route::get('ventas/{reg}/{marca}/detalle_regional_marca',[
		'uses' =>'VentasController@detalle_regional_marca',
		'as'   =>	'ventas.detalle_regional_marca'
	]);

	route::get('ventas/{reg}/{suc}/{vista}/{origen}/detalle_detalle_regional_sucursal',[
		'uses' =>'VentasController@detalle_detalle_regional_sucursal',
		'as'   =>	'ventas.detalle_detalle_regional_sucursal'
	]);

	route::get('ventas/{mes}/{reg}/{vista}/{origen}/detalle_detalle_mes_regional',[
		'uses' =>'VentasController@detalle_detalle_mes_regional',
		'as'   =>	'ventas.detalle_detalle_mes_regional'
	]);

	route::get('ventas/{mes}/{marca}/{modelo}/{vista}/detalle_mes_marca_modelo',[
		'uses' =>'VentasController@detalle_mes_marca_modelo',
		'as'   =>	'ventas.detalle_mes_marca_modelo'
	]);

	route::get('ventas/{mes}/{reg}/{marca}/{vista}/{origen}/detalle_mes_regional_marca',[
		'uses' =>'VentasController@detalle_mes_regional_marca',
		'as'   =>	'ventas.detalle_mes_regional_marca'
	]);

	route::get('ventas/{mes}/{suc}/{reg}/{vista}/detalle_mes_regional_sucursal',[
		'uses' =>'VentasController@detalle_mes_regional_sucursal',
		'as'   =>	'ventas.detalle_mes_regional_sucursal'
	]);

	route::get('ventas/{marca}/{mes}/mes_marca',[
		'uses' =>'VentasController@mes_marca',
		'as'   =>	'ventas.mes_marca'
	]);

	route::get('ventas/{reg}/{mes}/mes_regional',[
		'uses' =>'VentasController@mes_regional',
		'as'   =>	'ventas.mes_regional'
	]);

	route::get('ventas/{f_ini}/{f_fin}/{title}/{vista}/{origen}/detalle_fecha',[
		'uses' =>'VentasController@detalle_fecha',
		'as'   =>	'ventas.detalle_fecha'
	]);
	

	
	route::get('ventas/{marca}/por_marca',[
		'uses' =>'VentasController@por_marca',
		'as'   =>	'ventas.por_marca'
	]);

	route::get('ventas/{mes}/por_mes',[
		'uses' =>'VentasController@por_mes',
		'as'   =>	'ventas.por_mes'
	]);

	route::get('ventas/{reg}/por_regional',[
		'uses' =>'VentasController@por_regional',
		'as'   =>	'ventas.por_regional'
	]);

	route::resource('ventas','VentasController');

});

Route::group(['prefix'=>'alerta_vehiculos','middleware'=>'auth'],function(){
	
	route::resource('alerta_vehiculos','AlertaVehiculosController');

});

Route::group(['prefix'=>'cotizaciones','middleware'=>'auth'],function(){

	route::get('cotizaciones/{v_aux}/{title}/{f_ini}/{f_fin}/{mes}/{regional}/{marca}/{sucursal}/{modelo}/dashboard',[
		'uses' =>'CotizacionesController@dashboard',
		'as'   =>	'cotizaciones.dashboard'
	]);
	

	route::get('cotizaciones/{v_aux}/{title}/{f_ini}/{f_fin}/{mes}/{regional}/{marca}/{sucursal}/{modelo}/{master}/{chassis}/{vendedor}/{nro_cotizacion}/{cliente}/lista_detalle',[
		'uses' =>'CotizacionesController@lista_detalle',
		'as'   =>	'cotizaciones.lista_detalle'
	]);
	
	route::get('cotizaciones/busqueda',[
		'uses' =>'CotizacionesController@busqueda',
		'as'   =>	'cotizaciones.busqueda'
	]);
	route::get('cotizaciones/buscador',[
		'uses' =>'CotizacionesController@buscador',
		'as'   =>	'cotizaciones.buscador'
	]);
});

Route::group(['prefix'=>'facturados','middleware'=>'auth'],function(){

	route::get('facturados/{v_aux}/{title}/{f_ini}/{f_fin}/{mes}/{regional}/{marca}/{sucursal}/{modelo}/dashboard',[
		'uses' =>'FacturadosController@dashboard',
		'as'   =>	'facturados.dashboard'
	]);
	route::get('facturados/{v_aux}/{title}/{f_ini}/{f_fin}/{mes}/{regional}/{marca}/{sucursal}/{modelo}/{master}/{chassis}/{vendedor}/{nro_factura}/{cliente}/lista_detalle',[
		'uses' =>'FacturadosController@lista_detalle',
		'as'   =>	'facturados.lista_detalle'
	]);
	route::get('facturados/busqueda',[
		'uses' =>'FacturadosController@busqueda',
		'as'   =>	'facturados.busqueda'
	]);
	route::get('facturados/buscador',[
		'uses' =>'FacturadosController@buscador',
		'as'   =>	'facturados.buscador'
	]);
});


Route::group(['prefix'=>'reservados','middleware'=>'auth'],function(){

	route::get('reservados/{v_aux}/{title}/{f_ini}/{f_fin}/{mes}/{regional}/{marca}/{sucursal}/{modelo}/dashboard',[
		'uses' =>'ReservasController@dashboard',
		'as'   =>	'reservados.dashboard'
	]);	

	route::get('reservados/{v_aux}/{title}/{f_ini}/{f_fin}/{mes}/{regional}/{marca}/{sucursal}/{modelo}/{master}/{chassis}/{vendedor}/{nro_docum}/{cliente}/lista_detalle',[
		'uses' =>'ReservasController@lista_detalle',
		'as'   =>	'reservados.lista_detalle'
	]);
	
	route::get('reservados/busqueda',[
		'uses' =>'ReservasController@busqueda',
		'as'   =>	'reservados.busqueda'
	]);
	route::get('reservados/buscador',[
		'uses' =>'ReservasController@buscador',
		'as'   =>	'reservados.buscador'
	]);
	
});

Route::group(['prefix'=>'metas','middleware'=>'auth'],function(){
	route::get('metas/{periodo}/{marca}/{regional}/{sucursal}/index',[
		'uses' =>'MetasController@index',
		'as'   =>	'metas.index'
	]);
});

Route::group(['prefix'=>'seguimiento','middleware'=>'auth'],function(){
	route::resource('seguimiento','SeguimientoController');
});

Route::group(['prefix'=>'resumen','middleware'=>'auth'],function(){
	route::resource('resumen','ResumenController');
});

Route::get('error',function(){
	abort(404);
});


Route::group(['prefix'=>'contratos','middleware'=>'auth'],function(){

	route::get('contratos/{v_aux}/{title}/{f_ini}/{f_fin}/{mes}/{regional}/{marca}/{sucursal}/{modelo}/dashboard',[
		'uses' =>'ContratosController@dashboard',
		'as'   =>	'contratos.dashboard'
	]);
	route::get('contratos/{v_aux}/{title}/{f_ini}/{f_fin}/{mes}/{regional}/{marca}/{sucursal}/{modelo}/{master}/{chassis}/{vendedor}/{nro_contrato}/{cliente}/lista_detalle',[
		'uses' =>'ContratosController@lista_detalle',
		'as'   =>	'contratos.lista_detalle'
	]);
	route::get('contratos/busqueda',[
		'uses' =>'ContratosController@busqueda',
		'as'   =>	'contratos.busqueda'
	]);
	route::get('contratos/buscador',[
		'uses' =>'ContratosController@buscador',
		'as'   =>	'contratos.buscador'
	]);
});

Route::group(['prefix'=>'notas','middleware'=>'auth'],function(){

	route::get('notas/{v_aux}/{title}/{f_ini}/{f_fin}/{mes}/{regional}/{marca}/{sucursal}/{modelo}/dashboard',[
		'uses' =>'NotasController@dashboard',
		'as'   =>	'notas.dashboard'
	]);
	route::get('notas/{v_aux}/{title}/{f_ini}/{f_fin}/{mes}/{regional}/{marca}/{sucursal}/{modelo}/{master}/{chassis}/{vendedor}/{nro_nota}/{cliente}/lista_detalle',[
		'uses' =>'NotasController@lista_detalle',
		'as'   =>	'notas.lista_detalle'
	]);
	route::get('notas/busqueda',[
		'uses' =>'NotasController@busqueda',
		'as'   =>	'notas.busqueda'
	]);
	route::get('notas/buscador',[
		'uses' =>'NotasController@buscador',
		'as'   =>	'notas.buscador'
	]);
});


Route::group(['prefix'=>'usados','middleware'=>'auth'],function(){
	
	route::get('usados/modal_nuevo',[
		'uses' =>'UsadosController@modal_nuevo',
		'as'   =>	'usados.modal_nuevo'
	]);

	route::get('usados/modal_nuevo_marca',[
		'uses' =>'UsadosController@modal_nuevo_marca',
		'as'   =>	'usados.modal_nuevo_marca'
	]);

	route::get('usados/modal_nuevo_modelo',[
		'uses' =>'UsadosController@modal_nuevo_modelo',
		'as'   =>	'usados.modal_nuevo_modelo'
	]);

	route::get('usados/modal_nuevo_master',[
		'uses' =>'UsadosController@modal_nuevo_master',
		'as'   =>	'usados.modal_nuevo_master'
	]);

	route::get('usados/modal_nuevo_color',[
		'uses' =>'UsadosController@modal_nuevo_color',
		'as'   =>	'usados.modal_nuevo_color'
	]);

	route::get('usados/modal_nuevo_parametrica',[
		'uses' =>'UsadosController@modal_nuevo_parametrica',
		'as'   =>	'usados.modal_nuevo_parametrica'
	]);

	route::get('usados/admin',[
		'uses' =>'UsadosController@index_admin',
		'as'   =>	'usados.admin'
	]);

	route::resource('usados','UsadosController');

});


Route::group(['prefix'=>'administracion','middleware'=>'auth'],function(){
	
	route::get('administracion/index_sucursales',[
		'uses' =>'AdministracionController@index_sucursales',
		'as'   =>	'administracion.index_sucursales'
	]);

	route::get('administracion/index_users',[
		'uses' =>'AdministracionController@index_users',
		'as'   =>	'administracion.index_users'
	]);

	route::get('administracion/index_parametrica',[
		'uses' =>'AdministracionController@index_parametrica',
		'as'   =>	'administracion.index_parametrica'
	]);

	route::get('administracion/modal_users',[
		'uses' =>'AdministracionController@modal_users',
		'as'   =>	'administracion.modal_users'
	]);

	route::get('administracion/add_users',[
		'uses' =>'AdministracionController@add_users',
		'as'   =>	'administracion.add_users'
	]);
	
	route::resource('administracion','AdministracionController');

});


Route::group(['prefix'=>'odoo','middleware'=>'auth'],function(){
	route::resource('odoo','OdooController');
});

Route::group(['prefix'=>'trafico','middleware'=>'auth'],function(){
	
	route::get('trafico/lista_visitas',[
		'uses' =>'TraficoController@lista_visitas',
		'as'   =>	'trafico.lista_visitas'
	]);

	route::get('trafico/admin_index',[
		'uses' =>'TraficoController@admin_index',
		'as'   =>	'trafico.admin_index'
	]);

	route::get('trafico/modal_add_encuestas',[
		'uses' =>'TraficoController@modal_add_encuestas',
		'as'   =>	'trafico.modal_add_encuestas'
	]);

	route::get('trafico/modal_add_motivo',[
		'uses' =>'TraficoController@modal_add_motivo',
		'as'   =>	'trafico.modal_add_motivo'
	]);

	route::get('trafico/modal_add_motivo_encuesta',[
		'uses' =>'TraficoController@modal_add_motivo_encuesta',
		'as'   =>	'trafico.modal_add_motivo_encuesta'
	]);

	route::get('trafico/modal_add_suc_encuesta',[
		'uses' =>'TraficoController@modal_add_suc_encuesta',
		'as'   =>	'trafico.modal_add_suc_encuesta'
	]);

	route::get('trafico/add_encuestas',[
		'uses' =>'TraficoController@add_encuestas',
		'as'   =>	'trafico.add_encuestas'
	]);

	route::get('trafico/add_motivo_encuesta',[
		'uses' =>'TraficoController@add_motivo_encuesta',
		'as'   =>	'trafico.add_motivo_encuesta'
	]);

	route::get('trafico/add_suc_encuesta',[
		'uses' =>'TraficoController@add_suc_encuesta',
		'as'   =>	'trafico.add_suc_encuesta'
	]);

	route::get('trafico/add_encuestas',[
		'uses' =>'TraficoController@add_encuestas',
		'as'   =>	'trafico.add_encuestas'
	]);

	route::get('trafico/ver_encuestas',[
		'uses' =>'TraficoController@ver_encuestas',
		'as'   =>	'trafico.ver_encuestas'
	]);

	route::get('trafico/formulario',[
		'uses' =>'TraficoController@formulario',
		'as'   =>	'trafico.formulario'
	]);

	route::get('trafico/formulario2',[
		'uses' =>'TraficoController@formulario2',
		'as'   =>	'trafico.formulario2'
	]);

	route::get('trafico/delete_encuesta',[
		'uses' =>'TraficoController@delete_encuesta',
		'as'   =>	'trafico.delete_encuesta'
	]);

	route::get('trafico/delete_motivo_encuesta',[
		'uses' =>'TraficoController@delete_motivo_encuesta',
		'as'   =>	'trafico.delete_motivo_encuesta'
	]);

	route::get('trafico/delete_suc_encuesta',[
		'uses' =>'TraficoController@delete_suc_encuesta',
		'as'   =>	'trafico.delete_suc_encuesta'
	]);

	route::get('trafico/add_visita',[
		'uses' =>'TraficoController@add_visita',
		'as'   =>	'trafico.add_visita'
	]);
	route::get('trafico/add_visita2',[
		'uses' =>'TraficoController@add_visita2',
		'as'   =>	'trafico.add_visita2'
	]);

	route::get('trafico/detalle_visita',[
		'uses' =>'TraficoController@detalle_visita',
		'as'   =>	'trafico.detalle_visita'
	]);

	route::get('trafico/reporte',[
		'uses' =>'TraficoController@reporte',
		'as'   =>	'trafico.reporte'
	]);

	route::get('trafico/reporte2',[
		'uses' =>'TraficoController@reporte2',
		'as'   =>	'trafico.reporte2'
	]);

	route::get('trafico/totalizador',[
		'uses' =>'TraficoController@totalizador',
		'as'   =>	'trafico.totalizador'
	]);

	route::resource('trafico','TraficoController');
});
