<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App;

class ClienteController extends Controller
{
    public function __construct(){
    $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = App\Cliente::paginate(5);
        return view('clientes.lista', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.crear');
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
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->direccion = $request->direccion;
        $cliente->codpostal = $request->codpostal;
        $cliente->localidad = $request->localidad;
        $cliente->provincia = $request->provincia;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
        $cliente->cuit = $request->cuit;
        $cliente->save();

    return back()->with('mensaje', 'Cliente Agregado Correctamente!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
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
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'codpostal' => 'required',
            'localidad' => 'required',
            'provincia' => 'required',
            'telefono' => 'required',
            'cuit' =>'required',

        ]);

        $clienteUpdate = Cliente::findOrFail($id);
        $clienteUpdate->nombre = $request->nombre;
        $clienteUpdate->apellido = $request->apellido;
        $clienteUpdate->direccion = $request->direccion;
        $clienteUpdate->codpostal = $request->codpostal;
        $clienteUpdate->localidad = $request->localidad;
        $clienteUpdate->provincia = $request->provincia;
        $clienteUpdate->telefono = $request->telefono;
        $clienteUpdate->email = $request->email;
        $clienteUpdate->cuit = $request->cuit;

        $clienteUpdate->save();

        return back()->with('mensaje','Cliente actualizado correctamente');

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
