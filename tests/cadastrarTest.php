
<?php

$rootPath = dirname(__DIR__);
require $rootPath.'/src/controllers/user.php';
/**
 * Testar a classe de cadastro de usuario
 *
 * @author  Fernandode de Assis
 */
class CadastrarTest extends \PHPUnit_Framework_TestCase
{
    public function testCadastrarValidar()
    {
     
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }
}
