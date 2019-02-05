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

// ADMINISTRACION ----

Route::get('admin',function(){
	return view('admin.home');
});



// ADMINISTRACION -----



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('producto','ProdAdminController');

// CULQUI --------

Route::get('proceso',function(){
	return view('cliente.proceso');
});

///////////

// SHOPING CART 

Route::get('/add-to-cart/{id}',[
	'uses'=> 'ProductController@getAddToCart','as'=>'producto.addToCart'
	]);
Route::get('/shopping-cart',[
	'uses'=> 'ProductController@getCart','as'=>'cliente.pago'
	]);

Route::get('/reduce/{id}',[
	'uses'=> 'ProductController@getReduceByOne','as'=>'producto.reduceByOne'
	]);

Route::get('/aumentar/{id}',[
	'uses'=> 'ProductController@getAumentarByOne','as'=>'producto.aumentarByOne'
	]);

Route::get('/remove/{id}',[
	'uses'=> 'ProductController@getRemoveItem','as'=>'producto.remove'
	]);

Route::resource('productos', 'ProductoController');

Route::get('productos', 'ProductoController@index')
         ->name('productos.index');



Route::get('productos','ProductoController@index');



///////////////////////////


Route::get('/blog',function (){
	return view('cliente.blog');
});
Route::get('/detalles',function (){
	return view('cliente.detalles');
});

Route::get('/nosotros',function (){
	return view('cliente.nosotros');
});

Route::get('/contactos',function (){
	return view('cliente.contactos');
});



Route::resource("/","HomeController");


//Route::get('registro', 'ClienteController@nuevoRegistro');

//Route::get('login', 'ClienteController@formLogin');

   
Route::get('cliente/compras', "ClienteController@compras")->Middleware('autenticado');

Route::get('cerrarsesion', 'ClienteController@cerrarSesionCliente');




// Login ----
Auth::routes();
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', ['as'=>'login','uses'=>'Auth\AuthController@postLogin']);
Route::get('logout', ['as'=>'logout','uses'=>'Auth\AuthController@getLogout']);

// Registro-----


Route::get('registro', 'Auth\AuthController@getRegister');
Route::post('registro', ['as'=>'auth/registro','uses'=>'Auth\AuthController@postRegister']);
Route::get('/','HomeController@index');



//llamadas a los formularios

/*
Route::post('autenticar', [
    'as' => 'autenticar1', 'uses' => 'ClienteController@autenticarCliente'
]);
*/

Route::resource("catalogo","ProductoController");

Route::resource("productos","ProductoController");

Route::resource("clientes","ClienteController");

//Route::post('login','Auth\LoginController@login')->name('login');


Route::get('carrito/comprar/{idproducto}/{cantidad}', 'CarritoController@agregar_producto');


Route::get("carrito/limpiar_carrito","CarritoController@limpiar_carrito");
