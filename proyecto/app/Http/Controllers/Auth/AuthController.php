<?php

namespace App\Http\Controllers\Auth;
use App\User;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Controllers\Controller;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{


	//use AuthenticatesAndRegistersUsers, ThrottlesLogins;

	/**
	*create a instance.
	*
	*@return void
	*/

	public function __construct(Guard $auth)
	{
		$this->auth=$auth;
		$this->middleware('guest',['except'=>'getLogout']);
	}

	//LOGIN

	protected function getLogin()
	{
		return view("cliente.login");
	}

	public function postLogin(Request $request)
	{
		$this->validate($request, [

			'email'=> 'required',
			'password'=> 'required',
			]);

		$credentials = $request->only('email','password');

		if ($this->auth->attempt($credentials, $request->has('remember')))
		{
			return view("cliente.index");
		}

		return view('cliente.login');
	}

	//REGISTRO

	protected function getRegister()
	{
		return view("cliente.registro");
	}

	protected function postRegister(Request $request)
	{
		$this->validate($request,[

			'name'=> 'required',
			'email'=> 'required',
			'password'=>'required',
			]);
	

	$data=$request;

	$user=new User;
	$user->name=$data['name'];
	$user->email=$data['email'];
	$user->password=bcrypt($data['password']);

	if($user->save()){

		return view("cliente.login");

	 }
    }

    protected function getLogout()
    {
    	$this->auth->logout();

    	Session::flush();

    	return redirect('login');
    }


}

