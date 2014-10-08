<?php
class UsuarioController extends \BaseController {

	public function getUsuario()
	{

		$usuarios = User::all();
		return View::make('usuarios.lista')->with('usuarios',$usuarios);
	}

	
	public function create()
	{
		return View::make('usuarios.create');
	}


	
	public function store()
	{
		//
	}
}

?>
