<?php
include 'helper.php';
include 'user.php';

class Entrar
{
	
	function __construct()
	{
		# code...
	}

	public function entrar()
	{

	}

	public function entrarValidar()
	{
   		$helper = new Helper();
   		if (
   				!empty($_GET['usuario'])
   				&& !empty($_GET['senha'])
   			) {
   			$user = $_GET['usuario'];
   			$password = $_GET['senha'];
   			$usuario = new User($user, null,$password);
   			$resultado = $usuario->selecionar();
   			if (!is_null($resultado)) {
      session_start();
               $_SESSION['usuario'] = $user;
				$helper->Redirect('/mensageiro?sit=3', false);
   			} else {
   				$helper->Redirect('/mensageiro?sit=2', false);
   			}
   		} else {
			$helper->Redirect('/mensageiro?sit=2', false);
   		}
	}
}
$object = new Entrar();
$object->entrarValidar();