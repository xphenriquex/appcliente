<?php

namespace App\Http\Controllers;


use Iluminate\Http\Request;
use DB;

/**
* 
*/
class TesteController extends Controller
{
	
	public function index()
	{
		 $users=DB::select("SELECT * FROM SR_LARAVEL_TESTE");
		// $users = ['nome' => 'jose' ];
		// var_dump($users);
		return view('teste', compact('users'));
	}
}