<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->apellidos = $request->input('apellidos');
        $cliente->nombre = $request->input('nombre');
        $cliente->documento = $request->input('documento');
        $cliente->telefono = $request->input('telefono');
        $cliente->direccion = $request->input('direccion');
        $cliente->email = $request->input('email');
        $cliente->save();
        return redirect()->route('cliente.index');
    }
}
