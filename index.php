<?php
/**
 * Inicia sessão 
 */


include 'head.html';
class Index 
{
	
	function __construct()
	{
		session_start();

// $_SESSION['test'] = 42;
// $test = 43;
var_dump($_SESSION);
		switch ($_GET['sit']) {
			case 1:
				echo '<div class="alert alert-success">
    			<strong>Cadastro efetuado!</strong><br> Usuario Cadastrado com sucesso.
    			</div>';
		
				break;
			
			case 2:
				echo '<div class="alert alert-danger">
    			<strong>Dados incorretos</strong><br> Usuario ou senha incorreto.
    			</div>';
		
				break;
			
			case 3:
				echo '<title>Entrou</title>
				<div class="alert alert-success">
    			<strong>ENTROU</strong><br> Usuario ou senha CORRETOS.
    			</div>';
    			die();
		
				break;

			default:
				# code...
				break;
		}
		include 'indexview.html';
	}
}
new Index();
