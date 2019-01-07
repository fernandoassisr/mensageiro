
<?php

/**
 * Testar a classe de cadastro de usuario
 *
 * @author  Fernandode de Assis
 */
class CadastrarTest extends \PHPUnit_Framework_TestCase
{
    public function testCadastrarValidar()
    {
        $_GET['email'] = 'rr@rr';        
   		$_GET['password'] = 'sddsdas';
   		$_GET['email'] = 'skdjksd';
   		$usuario = new User($user, $email, $password);
        $this->assertTrue($usuario->insere());
    }
}
