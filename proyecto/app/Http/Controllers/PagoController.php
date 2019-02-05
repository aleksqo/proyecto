<?php
namespace App\Http\Controllers;


use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


use Culqi\Culqi;
use App\Venta;
use App\DetalleVenta;
use App\Pago;



class PagoController extends Controller
{
	public function procesar_pago(Request $request)
	{

		$response=new \stdClass();
		$culqi = new Culqi(array('api_key' => "sk_test_kTAjPQyENqxxGbOj"));

		
		try {
		
		 $charge = $culqi->Charges->create(
			 array(
			     "amount" => $request->monto,
			     "capture" => true,
			     "currency_code" => "PEN",
			     "description" => $request->description,
			     "email" => $request->email,
			     "installments" => 0,
			     "source_id" => $request->token
			   )
			);




		 $response->state=true;
		 $response->message=$charge->outcome->user_message;

		 $carrito=session("carrito");

		 $venta=new Venta();
		 $venta->fecha=new \DateTime();
		 $venta->idcliente=session("user")->id;
		 $venta->total=$carrito->total;
		 $venta->save();


		 foreach ($carrito->productos as $producto) {

		 	$detalle_venta=new DetalleVenta();
		 	$detalle_venta->cantidad=$producto->cantidad;
		 	$detalle_venta->idproducto=$producto->id;
		 	$detalle_venta->idventa=$venta->id;
		 	$detalle_venta->precio=$producto->precio;
		 	$detalle_venta->subtotal=$producto->subtotal;
		 	$detalle_venta->save();

		 }


		 $pago = new Pago();
		 $pago->fecha = new \DateTime();
		 $pago->email = $request->email;
		 $pago->idventa=$venta->id;
		 $pago->codigo_transaccion= $charge->id;
		 $pago->save();


		 session()->forget('carrito');

		
		} catch (Exception $e) {

			return $response->state=false;
			
		}

		return json_encode($response);


	}

}
