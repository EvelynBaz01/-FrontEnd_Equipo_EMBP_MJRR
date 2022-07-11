<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; //Se llama a el Modelo

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('http://localhost/API_Pizza/usuario/');
        $response = $request->getBody()->getContents();        
        $usuarios = json_decode($response);
        return view('users', compact('usuarios'));
    }
}
