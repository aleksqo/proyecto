<?php

namespace App\Http\Controllers;
use App\Producto;
use App\Cart;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
	public function getAddToCart(Request $request, $id){


		$producto=Producto::find($id);
		$oldCart=Session::has('cart') ? Session::get('cart'): null;
		$cart=new Cart($oldCart);
		$cart->add($producto,$producto->id);

		$request->session()->put('cart',$cart);
		return redirect()->route('productos.index');
	}

	public function getReduceByOne($id){
		$oldCart=Session::has('cart') ? Session::get('cart'): null;
		$cart=new Cart($oldCart);
		$cart->reduceByOne($id);

		Session::put('cart',$cart);
		return redirect()->route('cliente.pago');
	}

		public function getAumentarByOne($id){
		$oldCart=Session::has('cart') ? Session::get('cart'): null;
		$cart=new Cart($oldCart);
		$cart->aumentarByOne($id);

		Session::put('cart',$cart);
		return redirect()->route('cliente.pago');
	}

	public function getRemoveItem($id){
		$oldCart=Session::has('cart') ? Session::get('cart'): null;
		$cart=new Cart($oldCart);
		$cart->removeItem($id);

		Session::put('cart',$cart);
		return redirect()->route('cliente.pago');
	}

	public function getCart(){
		
		$oldCart=Session::get('cart');
		$cart=new Cart($oldCart);
	
		return view('cliente.pago',['productos'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
	}
}








