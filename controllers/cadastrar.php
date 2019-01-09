<?php

/**
 * 
 */

include 'user.php';

class Cadastrar
{
	
	function __construct()
	{
		# code...
	}

	public function cadastrar()
	{

	}

	public function cadastrarValidar()
	{
   	if (!empty($_GET['email']) && !empty($_GET['user']) && !empty($_GET['password'])) {
   		$user = $_GET['user'];
   		$password = $_GET['password'];
   		$email = $_GET['email'];
   		$usuario = new User($user, $email, $password);
   		$usuario->insere();
   	} else {
		include 'head.html';
   		include 'cadastrarView.html';
   	}
	}
}
$object = new Cadastrar();
$object->cadastrarValidar();