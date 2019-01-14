<?php
/**
 * 
 */

$rootPath = dirname((__DIR__));
include $rootPath.'/system/conection.php';
class User 
{
	private $email, $user, $password, $conexao;
	
	function __construct($user, $email, $password)
	{
		$object = new Conection();
		$this->conexao = $object->conectar();	
		$this->setUser($user);	
		$this->setPassword($password);	
		$this->setEmail($email);	
	
	}
	function Redirect($url, $permanent = false)
	{
    	header('Location: ' . $url, true, $permanent ? 301 : 302);
    	exit();
	}

	public function insere()
	{
		$sql = "INSERT INTO `teste`.`user`
		(`user`,`password`,`email`) VALUES
		('".$this->getUser()."','".$this->getPassword()."','".$this->getEmail()."'); ";
		if (!mysqli_query($this->conexao,$sql))
  		{
  		echo("Error description: " . mysqli_error($this->conexao));
		}
		try {
			if (!mysqli_query($this->conexao,$sql)) {
				throw new Exception(mysqli_error($this->conexao), 1);
				
			}
		}
		catch(Exception $e){
			var_dump($e);
			die();
		}
		die();
		$this->Redirect('/mensageiro?sit=1', false);
	}

	public function selecionar()
	{
		$sql = "SELECT * FROM teste.user
		where user = '".$this->getUser()."' and password = '".$this->getPassword()."';";
		$result = $this->conexao->query($sql, MYSQLI_USE_RESULT);
		return $result->fetch_assoc();
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}
	
	public function setUser($user)
	{
		$this->user = $user;
	}
	
	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getEmail()
	{
		return $this->email;
	}
	
	public function getPassword()
	{
		return $this->password;
	}
	
	public function getUser()
	{
		return $this->user;
	}
}
