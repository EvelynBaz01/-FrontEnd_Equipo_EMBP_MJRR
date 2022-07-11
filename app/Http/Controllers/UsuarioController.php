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

    public function create()
    {
        return view('Userregister');
    }

    public function store(Request $request)
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $response = $client->request('POST', 'http://localhost/API_Pizza/usuario/', [
            'json' => [
                'imagen' => $request->input('imagen'),
                'nombre' => $request->input('nombre'),
                'a_paterno' => $request->input('a_paterno'),
                'a_materno' => $request->input('a_materno'),
                'usuario' => $request->input('usuario'),
                'contrasena' => $request->input('contrasena')
            ]
        ]);
        $response = $response->getBody()->getContents();
        $json = json_encode($response);
        return redirect('usuarios/index')->with('message',$response);
    }

    public function edit($id)
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('http://localhost/API_Pizza/usuario/'.$id);
        $response = $request->getBody()->getContents();
        $usuarios = json_decode($response);
        return view('Userupdate', compact('uusuarios'));
    }

    public function update(Request $request, $id)
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $response = $client->request('PUT', 'http://localhost/API_Pizza/usuario/'.$id, [
            'json' => [
                'imagen' => $request->input('imagen'),
                'nombre' => $request->input('nombre'),
                'a_paterno' => $request->input('a_paterno'),
                'a_materno' => $request->input('a_materno'),
                'usuario' => $request->input('usuario'),
                'contrasena' => $request->input('contrasena')
            ]
        ]);
        $response = $response->getBody()->getContents();
        $json = json_decode($response);
        return redirect('usuarios/index')->with('message',$response);
    }

    public function destroy($id)
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $response = $client->request('DELETE', 'http://localhost/API_Pizza/usuario/'.$id);
        $response = $response->getBody()->getContents();
        return redirect('usuarios/index')->with('message',$response);
    }
}
