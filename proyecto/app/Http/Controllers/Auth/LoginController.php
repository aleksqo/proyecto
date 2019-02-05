<?php

namespace App\Http\Controllers\Auth;
use Auth;
use DB;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{
   public function login()
   {

    $credentials=$this->validate(request(),[

        'email'=>'email|required|string','password'=>'required|string'

        ]);
    $checklogin=DB::table('clientes')->where(['email'=>$email,'password'=>$password])->get();

   if(Auth::attempt($checklogin))
   {
    return 'Tu Sesion ha iniciado correctamente';
   }

   return back()
   ->withErrors(['email'=>'Estas Credenciales no coinciden con nuestros registros']);
   

   }
}
