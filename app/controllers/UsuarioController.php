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
		$usuarios = new User;
		$usuarios->id = Input::get('id');
		$usuarios->username = Input::get('username');
		$usuarios->save();
		return Redirect::to('usuarios');

	}
}

?>
