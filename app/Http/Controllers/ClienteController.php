<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$clientes = \App\Cliente::paginate(15);
        
    	return view('cliente.index', compact('clientes'));
    }

    public function adicionar()
    {
    	return view('cliente.adicionar');
    }
}
