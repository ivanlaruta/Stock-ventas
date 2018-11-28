<?php

namespace App\Http\Controllers;
use App\Ripcord\ripcord; 
use Illuminate\Http\Request;

class OdooController extends Controller
{
    public function funcion(Request $request)
    {
        $url = "https://odoo.toyosa.com";
        $db = "TEST-TOYOSA-2";
        $username = "marco.lazarte@toyosa.com";
        $password = "toyosa2018";
        $common = ripcord::client("$url/xmlrpc/2/common");
        $uid  =  $common -> authenticate ( $db ,  $username ,  $password ,  array ());
        $models = ripcord::client("$url/xmlrpc/2/object");
        // dd($request->all());
        switch ($request->funcion) {
          case 'V_stock_gtauto':
              $titulo='V_stock_gtauto';
              $objeto="'stock.picking', 'service_get_stock'";
              $data = $models->execute_kw($db, $uid, $password,'stock.picking', 'service_get_stock', array());
              break;
          case 'V_cotizaciones':
              $titulo='V_cotizaciones';
              $objeto="'sale.order', 'service_get_sale_order'";
              $data = $models->execute_kw($db, $uid, $password,'sale.order', 'service_get_sale_order', array());
              break;
          case 'V_reservas':
              $titulo='V_reservas';
              $objeto="'stock.production.lot', 'service_get_reserves'";
              $data = $models->execute_kw($db, $uid, $password,'stock.production.lot', 'service_get_reserves', array());
              break;
          case 'V_facturados':
              $titulo='V_facturados';
              $objeto="'account.invoice', 'service_get_invoices'";
              $data = $models->execute_kw($db, $uid, $password,'account.invoice', 'service_get_invoices', array());
              break;
          default:
            $titulo='sin datos';
              $objeto="sin datos";
              $data = null;
          
        }

        return view('odoo.respuesta') 
            ->with('titulo',$titulo)
            ->with('objeto',$objeto)
            ->with('data',$data);
    }
}
