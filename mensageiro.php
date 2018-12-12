<?php
include 'helper.php';
include 'user.php';

/**
 * 
 */
class Mensageiro
{
   	public $helper;
	
	function __construct()
	{
		$this->helper = new Helper();

	}

	public function sair()
	{
     	session_start();
     	var_dump($_SESSION);
    	$_SESSION['usuario'] = NULL;
     	var_dump($_SESSION);
		$this->helper->Redirect('/mensageiro?sit=2', false);
	}
}
$objet = new Mensageiro();
$objet->sair();