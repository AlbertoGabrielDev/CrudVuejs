<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    // public function store(Request $request){
    //     $clientes = Cliente::create($request->all());
    //     return response()->json($clientes,201);
    // }

    public function store(Request $request){
        $clientes = Cliente::create([
            'name' =>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone
        ]);

        return response()->json($clientes,201);
    }

    public function show(Cliente $clientes){
        return response()->json($clientes);
    }

    public function update(Request $request, Cliente $clientes){
        $clientes->update($request->all());
        return response()->json($clientes);
    }

    public function destroy(Cliente $clientes){
        $client->delete();
        return response()->json(null,204);
    }
}
