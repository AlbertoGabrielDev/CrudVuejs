<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clients = Cliente::all();
        return response()->json($clients);
    }

    public function store(Request $request){
        $client = Cliente::create($request->all());
        return response()->json($client,201);
    }

    public function show(Cliente $client){
        return response()->json($client);
    }

    public function update(Request $request, Cliente $client){
        $client->update($request->all());
        return response()->json($client);
    }

    public function destroy(Cliente $client){
        $client->delete();
        return response()->json(null,204);
    }
}
