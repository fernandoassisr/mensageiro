<?php
/**
 * Inicia sessão 
 */


include 'src/views/head.html';
class Index 
{
	
	function __construct()
	{
		session_start();
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
		include 'src/views/indexview.html';
	}
}
new Index();
