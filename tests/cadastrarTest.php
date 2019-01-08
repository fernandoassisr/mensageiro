
<?php

$rootPath = dirname(__DIR__);
require $rootPath.'/user.php';
/**
 * Testar a classe de cadastro de usuario
 *
 * @author  Fernandode de Assis
 */
class CadastrarTest extends \PHPUnit_Framework_TestCase
{
    public function testCadastrarValidar()
    {
        $user = 'rr@rr';        
   		$email = 'sddsdas';
   		$password = 'skdjksd';
   		$usuario = new User($user, $email, $password);
        $this->assertTrue($usuario->insere());
    }
}
