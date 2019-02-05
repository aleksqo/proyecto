<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function nuevoRegistro()
    {

        return view("cliente.registro");
    }


    public function index()
    {
        //
        return "hola mundo";
    }

    
    public function formLogin()
    {

        return view("cliente.login");
        
    }

    public function autenticarCliente(Request $request)
    {

        //return $request->txtUser;

        $cliente=Cliente::where("login","=",$request->email)->get();

        if (count($cliente)>0) 
        {
            $password=$cliente[0]->password;

            if (Hash::check($request->password,$password))
             {

                session(["cliente"=>$cliente[0]]);
                 return redirect('/');

             }
            
        }

        return "Usuario o Password Incorrectos"; 

    }
     public function cerrarSesionCliente()
    {
        session(["User"=>null]);
        return redirect("/");

    }
     public function compras()
    {
        return view("compras.compras");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "hola CREATE";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


  

        $cliente = new Cliente();
        $cliente->nombres = $request->txtNombres;
        $cliente->apellidos = $request->txtApellidos;
        $cliente->fecha_nacimiento=\DateTime::createFromFormat('Y-m-d',  $request->txtFechaNac);


        $cliente->email = $request->txtCorreo;
        $cliente->login = $request->txtLogin;
        $cliente->password =  Hash::make( $request->txtPassword);

        

        $cliente->save();
        


       return "El cliente se guardo satisfactoriamente";
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        return "hola SHOW";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
